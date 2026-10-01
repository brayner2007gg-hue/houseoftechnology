<?php

require_once __DIR__ . "/../../config/Database.php";

class Compra
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
                        compra.id_compra,
                        compra.id_proveedor,
                        proveedor.nombre AS proveedor_nombre,
                        compra.id_producto,
                        producto.nombre AS producto_nombre,
                        compra.fecha,
                        compra.total
                    FROM compra
                    INNER JOIN proveedor
                        ON compra.id_proveedor = proveedor.id_proveedor
                    INNER JOIN producto
                        ON compra.id_producto = producto.id_producto";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las compras: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        compra.id_compra,
                        compra.id_proveedor,
                        proveedor.nombre AS proveedor_nombre,
                        compra.id_producto,
                        producto.nombre AS producto_nombre,
                        compra.fecha,
                        compra.total
                    FROM compra
                    INNER JOIN proveedor
                        ON compra.id_proveedor = proveedor.id_proveedor
                    INNER JOIN producto
                        ON compra.id_producto = producto.id_producto
                    WHERE compra.id_compra = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la compra: " . $e->getMessage();
            return false;
        }
    }
}