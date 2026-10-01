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

    public function crear()
    {
        require_once __DIR__ . "/../views/especificaciones/crear.php";
    }
}