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

    public function crear()
    {
        require_once __DIR__ . "/../views/proveedores/crear.php";
    }
}