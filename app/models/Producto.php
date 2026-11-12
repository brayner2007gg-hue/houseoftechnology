<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
{
    private $connection;

    public function __construct()
    {
        try {
            $db = new Database();
            $this->connection = $db->conectar();
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT 
                        p.id_producto,
                        p.nombre,
                        p.descripcion,
                        p.precio,
                        p.stock,
                        p.marca,
                        p.id_categoria,
                        p.id_proveedor,
                        c.nombre AS categoria,
                        pr.nombre AS proveedor
                    FROM producto p
                    LEFT JOIN categoria c 
                        ON p.id_categoria = c.id_categoria
                    LEFT JOIN proveedor pr 
                        ON p.id_proveedor = pr.id_proveedor";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los productos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT 
                        p.id_producto,
                        p.nombre,
                        p.descripcion,
                        p.precio,
                        p.stock,
                        p.marca,
                        p.id_categoria,
                        p.id_proveedor,
                        c.nombre AS categoria,
                        pr.nombre AS proveedor
                    FROM producto p
                    LEFT JOIN categoria c 
                        ON p.id_categoria = c.id_categoria
                    LEFT JOIN proveedor pr 
                        ON p.id_proveedor = pr.id_proveedor
                    WHERE p.id_producto = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el producto: " . $e->getMessage();
            return false;
        }
    }

    public function guardar($nombre, $descripcion, $precio, $stock, $marca, $categoria, $proveedor)
{
    try {

        // Buscar el ID de la categoría
        $sqlCategoria = "SELECT id_categoria
                         FROM categoria
                         WHERE nombre = :categoria";

        $consultaCategoria = $this->connection->prepare($sqlCategoria);

        $consultaCategoria->bindParam(':categoria', $categoria);

        $consultaCategoria->execute();

        $resultadoCategoria = $consultaCategoria->fetch(PDO::FETCH_ASSOC);

        if (!$resultadoCategoria) {
            echo "La categoría no existe.";
            return false;
        }

        $id_categoria = $resultadoCategoria['id_categoria'];


        // Buscar el ID del proveedor
        $sqlProveedor = "SELECT id_proveedor
                         FROM proveedor
                         WHERE nombre = :proveedor";

        $consultaProveedor = $this->connection->prepare($sqlProveedor);

        $consultaProveedor->bindParam(':proveedor', $proveedor);

        $consultaProveedor->execute();

        $resultadoProveedor = $consultaProveedor->fetch(PDO::FETCH_ASSOC);

        if (!$resultadoProveedor) {
            echo "El proveedor no existe.";
            return false;
        }

        $id_proveedor = $resultadoProveedor['id_proveedor'];


        // Insertar el producto
        $sql = "INSERT INTO producto
                (nombre, descripcion, precio, stock, marca, id_categoria, id_proveedor)
                VALUES
                (:nombre, :descripcion, :precio, :stock, :marca, :id_categoria, :id_proveedor)";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':descripcion', $descripcion);
        $consulta->bindParam(':precio', $precio);
        $consulta->bindParam(':stock', $stock);
        $consulta->bindParam(':marca', $marca);
        $consulta->bindParam(':id_categoria', $id_categoria);
        $consulta->bindParam(':id_proveedor', $id_proveedor);

        return $consulta->execute();

    } catch (PDOException $e) {

        echo "Error al guardar el producto: " . $e->getMessage();

        return false;
    }
}

    // ACTUALIZAR PRODUCTO
    public function actualizar($id, $nombre, $descripcion, $precio, $stock, $marca, $categoria, $proveedor)
    {
        try {
            // Buscar el ID de la categoría
            $sqlCategoria = "SELECT id_categoria FROM categoria WHERE nombre = :categoria";
            $consultaCategoria = $this->connection->prepare($sqlCategoria);
            $consultaCategoria->execute([':categoria' => $categoria]);

            $resultadoCategoria = $consultaCategoria->fetch(PDO::FETCH_ASSOC);

            if (!$resultadoCategoria) {
                return false;
            }

            $id_categoria = $resultadoCategoria['id_categoria'];

            // Buscar el ID del proveedor
            $sqlProveedor = "SELECT id_proveedor FROM proveedor WHERE nombre = :proveedor";
            $consultaProveedor = $this->connection->prepare($sqlProveedor);
            $consultaProveedor->execute([':proveedor' => $proveedor]);

            $resultadoProveedor = $consultaProveedor->fetch(PDO::FETCH_ASSOC);

            if (!$resultadoProveedor) {
                return false;
            }

            $id_proveedor = $resultadoProveedor['id_proveedor'];

            // Actualizar los datos del producto
            $sql = "UPDATE producto SET
                        nombre = :nombre,
                        descripcion = :descripcion,
                        precio = :precio,
                        stock = :stock,
                        marca = :marca,
                        id_categoria = :id_categoria,
                        id_proveedor = :id_proveedor
                    WHERE id_producto = :id";

            $consulta = $this->connection->prepare($sql);

            return $consulta->execute([
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':stock' => $stock,
                ':marca' => $marca,
                ':id_categoria' => $id_categoria,
                ':id_proveedor' => $id_proveedor,
                ':id' => $id
            ]);

        } catch (PDOException $e) {
            echo "Error al actualizar el producto: " . $e->getMessage();
            return false;
        }
    }

    // ELIMINAR PRODUCTO
    public function eliminar($id)
    {
        try {
            $sql = "DELETE FROM producto WHERE id_producto = :id";

            $consulta = $this->connection->prepare($sql);

            return $consulta->execute([
                ':id' => $id
            ]);

        } catch (PDOException $e) {
            // SQLSTATE 23000: el producto tiene registros relacionados
            if ($e->getCode() == '23000') {
                return 'relacionado';
            }

            echo "Error al eliminar el producto: " . $e->getMessage();
            return false;
        }
    }

}