<?php

require_once __DIR__ . "/../../config/Database.php";

class Especificacion
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
                        especificaciones.id_especificacion,
                        especificaciones.id_producto,
                        producto.nombre AS producto_nombre,
                        especificaciones.id_proveedor,
                        especificaciones.nombre,
                        especificaciones.telefono,
                        especificaciones.correo,
                        especificaciones.empresa,
                        especificaciones.valor
                    FROM especificaciones
                    INNER JOIN producto
                    ON especificaciones.id_producto = producto.id_producto";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las especificaciones: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        especificaciones.id_especificacion,
                        especificaciones.id_producto,
                        producto.nombre AS producto_nombre,
                        especificaciones.id_proveedor,
                        especificaciones.nombre,
                        especificaciones.telefono,
                        especificaciones.correo,
                        especificaciones.empresa,
                        especificaciones.valor
                    FROM especificaciones
                    INNER JOIN producto
                    ON especificaciones.id_producto = producto.id_producto
                    WHERE especificaciones.id_especificacion = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la especificación: " . $e->getMessage();
            return false;
        }
    }

    public function guardar($producto, $proveedor, $nombre, $telefono, $correo, $empresa, $valor)
{
    try {

        // Buscar ID del producto
        $sqlProducto = "SELECT id_producto
                        FROM producto
                        WHERE nombre = :producto";

        $consultaProducto = $this->connection->prepare($sqlProducto);

        $consultaProducto->bindParam(':producto', $producto);

        $consultaProducto->execute();

        $resultadoProducto = $consultaProducto->fetch(PDO::FETCH_ASSOC);

        if (!$resultadoProducto) {
            echo "El producto no existe.";
            return false;
        }

        $id_producto = $resultadoProducto['id_producto'];


        // Buscar ID del proveedor
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


        // Insertar especificación
        $sql = "INSERT INTO especificaciones
                (id_producto, id_proveedor, nombre, telefono, correo, empresa, valor)
                VALUES
                (:id_producto, :id_proveedor, :nombre, :telefono, :correo, :empresa, :valor)";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':id_producto', $id_producto);
        $consulta->bindParam(':id_proveedor', $id_proveedor);
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':telefono', $telefono);
        $consulta->bindParam(':correo', $correo);
        $consulta->bindParam(':empresa', $empresa);
        $consulta->bindParam(':valor', $valor);

        return $consulta->execute();

    } catch (PDOException $e) {

        echo "Error al guardar la especificación: " . $e->getMessage();

        return false;
    }
}
}