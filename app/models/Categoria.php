<?php

require_once __DIR__ . "/../../config/Database.php";

class Categoria
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
            $sql = "SELECT id_categoria, nombre, descripcion
                    FROM categoria";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las categorías: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT id_categoria, nombre, descripcion
                    FROM categoria
                    WHERE id_categoria = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la categoría: " . $e->getMessage();
            return false;
        }
    }
    
    public function guardar($nombre, $descripcion)
{
    try {
        $sql = "INSERT INTO categoria (nombre, descripcion)
                VALUES (:nombre, :descripcion)";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':descripcion', $descripcion);

        return $consulta->execute();

    } catch (PDOException $e) {
        echo "Error al guardar la categoría: " . $e->getMessage();
        return false;
    }
}
}