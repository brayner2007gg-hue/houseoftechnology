<?php

require_once __DIR__ . "/../models/Proveedor.php";

class ProveedorController
{
    public function index()
    {
        $proveedorModel = new Proveedor();

        $proveedores = $proveedorModel->getAll();

        $proveedor = $proveedorModel->getById(1);

        require_once __DIR__ . "/../views/proveedores/index.php";
    }

    public function guardar()
{
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];

    $proveedorModel = new Proveedor();

    $resultado = $proveedorModel->guardar(
        $nombre,
        $telefono,
        $correo,
        $empresa
    );

    if ($resultado) {
        echo "Proveedor guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el proveedor.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/proveedores/crear.php";
    }

    
public function editar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $modeloProveedor = new Proveedor();

    $proveedor = $modeloProveedor->getById($id);

    require_once __DIR__ . "/../views/proveedores/editar.php";
}

}