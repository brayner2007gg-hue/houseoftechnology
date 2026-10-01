<?php

require_once __DIR__ . "/../../config/Database.php";

class Pedido
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
                        pedido.id_pedido,
                        pedido.id_cliente,
                        cliente.id_cliente AS cliente_id,
                        pedido.fecha,
                        pedido.total,
                        pedido.estado
                    FROM pedido
                    INNER JOIN cliente
                        ON pedido.id_cliente = cliente.id_cliente";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los pedidos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        pedido.id_pedido,
                        pedido.id_cliente,
                        cliente.id_cliente AS cliente_id,
                        pedido.fecha,
                        pedido.total,
                        pedido.estado
                    FROM pedido
                    INNER JOIN cliente
                        ON pedido.id_cliente = cliente.id_cliente
                    WHERE pedido.id_pedido = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el pedido: " . $e->getMessage();
            return false;
        }
    }
}