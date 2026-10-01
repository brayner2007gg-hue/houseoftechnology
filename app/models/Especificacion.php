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
}