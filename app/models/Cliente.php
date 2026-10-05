<?php

require_once __DIR__ . "/../../config/Database.php";

class Cliente
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
                        id_cliente,
                        id_usuario,
                        direccion,
                        telefono
                    FROM cliente";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los clientes: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT 
                        id_cliente,
                        id_usuario,
                        direccion,
                        telefono
                    FROM cliente
                    WHERE id_cliente = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el cliente: " . $e->getMessage();
            return false;
        }
    }

    public function guardar($id_usuario, $direccion, $telefono)
{
    try {

        $sql = "INSERT INTO cliente
                (id_usuario, direccion, telefono)
                VALUES
                (:id_usuario, :direccion, :telefono)";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->bindParam(':direccion', $direccion);
        $consulta->bindParam(':telefono', $telefono);

        return $consulta->execute();

    } catch (PDOException $e) {

        echo "Error al guardar el cliente: " . $e->getMessage();

        return false;
    }
}
}