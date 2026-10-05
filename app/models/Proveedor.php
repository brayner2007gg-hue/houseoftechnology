<?php

require_once __DIR__ . "/../../config/Database.php";

class Proveedor
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
            $sql = "SELECT id_proveedor, nombre, telefono, correo, empresa
                    FROM proveedor";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los proveedores: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT id_proveedor, nombre, telefono, correo, empresa
                    FROM proveedor
                    WHERE id_proveedor = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el proveedor: " . $e->getMessage();
            return false;
        }
    }

    public function guardar($nombre, $telefono, $correo, $empresa)
{
    try {
        $sql = "INSERT INTO proveedor
                (nombre, telefono, correo, empresa)
                VALUES
                (:nombre, :telefono, :correo, :empresa)";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':telefono', $telefono);
        $consulta->bindParam(':correo', $correo);
        $consulta->bindParam(':empresa', $empresa);

        return $consulta->execute();

    } catch (PDOException $e) {
        echo "Error al guardar el proveedor: " . $e->getMessage();
        return false;
    }
}
}