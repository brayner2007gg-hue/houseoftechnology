<?php

require_once __DIR__ . "/../models/Compra.php";

class CompraController
{
    public function index()
    {
        $compraModel = new Compra();

        $compras = $compraModel->getAll();

        $compra = $compraModel->getById(1);

        require_once __DIR__ . "/../views/compras/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/compras/crear.php";
    }
}