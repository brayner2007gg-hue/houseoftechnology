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
}