<?php

require_once __DIR__ . "/../../config/Database.php";

class Carrito
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
                        carrito.id_carrito,
                        carrito.id_cliente,
                        carrito.fecha
                    FROM carrito";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los carritos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        carrito.id_carrito,
                        carrito.id_cliente,
                        carrito.fecha
                    FROM carrito
                    WHERE carrito.id_carrito = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el carrito: " . $e->getMessage();
            return false;
        }
    }
}