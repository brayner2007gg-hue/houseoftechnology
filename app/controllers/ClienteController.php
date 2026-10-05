<?php

require_once __DIR__ . "/../models/Cliente.php";

class ClienteController
{
    public function index()
    {
        $clienteModel = new Cliente();

        $clientes = $clienteModel->getAll();

        $cliente = $clienteModel->getById(1);

        require_once __DIR__ . "/../views/clientes/index.php";
    }

    public function guardar()
{
    $id_usuario = $_POST['id_usuario'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $clienteModel = new Cliente();

    $resultado = $clienteModel->guardar(
        $id_usuario,
        $direccion,
        $telefono
    );

    if ($resultado) {
        echo "Cliente guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el cliente.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/clientes/crear.php";
    }
}