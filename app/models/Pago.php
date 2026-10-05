<?php

require_once __DIR__ . "/../../config/Database.php";

class Pago
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
                        pago.id_pago,
                        pago.id_pedido,
                        pedido.id_cliente,
                        pago.metodo_pago,
                        pago.fecha,
                        pago.estado
                    FROM pago
                    INNER JOIN pedido
                        ON pago.id_pedido = pedido.id_pedido";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los pagos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        pago.id_pago,
                        pago.id_pedido,
                        pedido.id_cliente,
                        pago.metodo_pago,
                        pago.fecha,
                        pago.estado
                    FROM pago
                    INNER JOIN pedido
                        ON pago.id_pedido = pedido.id_pedido
                    WHERE pago.id_pago = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el pago: " . $e->getMessage();
            return false;
        }
    }
}