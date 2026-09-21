<?php

require_once '../../config/Database.php';

class Producto
{
    private $conexion;

    public function __construct()
    {
        $database = new Database();
        $this->conexion = $database->conectar();
    }

    // Listar todos los productos
    public function listar()
    {
        $sql = "SELECT 
                    p.id_producto AS id,
                    p.nombre AS producto,
                    p.descripcion AS descripcion,
                    p.precio AS precio,
                    p.stock AS stock,
                    p.marca AS marca,
                    c.nombre AS categoria,
                    pr.nombre AS proveedor
                FROM producto AS p
                INNER JOIN categoria AS c 
                    ON p.id_categoria = c.id_categoria
                INNER JOIN proveedor AS pr 
                    ON p.id_proveedor = pr.id_proveedor";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}