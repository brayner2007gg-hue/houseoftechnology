<?php

require_once __DIR__ . "/../models/Proveedor.php";

class ProveedorController
{
    
public function index($mensaje = null)
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

    // ACTUALIZAR PROVEEDOR
    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de proveedor no válido.");
            return;
        }

        $nombre = trim($_POST['nombre'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $correo = trim($_POST['correo'] ?? '');
        $empresa = trim($_POST['empresa'] ?? '');

        if ($nombre === '' || $telefono === '' ||
            $correo === '' || $empresa === '') {

            $this->index("Todos los campos son obligatorios.");
            return;
        }

        $proveedorModel = new Proveedor();

        $resultado = $proveedorModel->actualizar(
            $id,
            $nombre,
            $telefono,
            $correo,
            $empresa
        );

        if ($resultado) {
            $mensaje = "Proveedor actualizado correctamente.";
        } else {
            $mensaje = "No se pudo actualizar el proveedor.";
        }

        $this->index($mensaje);
    }

    // ELIMINAR PROVEEDOR
    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de proveedor no válido.");
            return;
        }

        $proveedorModel = new Proveedor();

        $resultado = $proveedorModel->eliminar($id);

        if ($resultado === true) {
            $mensaje = "Proveedor eliminado correctamente.";
        } elseif ($resultado === 'relacionado') {
            $mensaje = "No se puede eliminar: el proveedor tiene productos, compras o especificaciones asociados.";
        } else {
            $mensaje = "No se pudo eliminar el proveedor.";
        }

        $this->index($mensaje);
    }

}