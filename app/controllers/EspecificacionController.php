<?php

require_once __DIR__ . "/../models/Especificacion.php";

class EspecificacionController
{
    public function index()
    {
        $especificacionModel = new Especificacion();

        $especificaciones = $especificacionModel->getAll();

        $especificacion = $especificacionModel->getById(1);

        require_once __DIR__ . "/../views/especificaciones/index.php";
    }

    public function guardar()
{
    $producto = $_POST['producto'];
    $proveedor = $_POST['proveedor'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $empresa = $_POST['empresa'];
    $valor = $_POST['valor'];

    $especificacionModel = new Especificacion();

    $resultado = $especificacionModel->guardar(
        $producto,
        $proveedor,
        $nombre,
        $telefono,
        $correo,
        $empresa,
        $valor
    );

    if ($resultado) {
        echo "Especificación guardada correctamente.";
        $this->index();
    } else {
        echo "Error al guardar la especificación.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/especificaciones/crear.php";
    }
}