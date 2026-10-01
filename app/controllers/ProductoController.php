<?php

require_once __DIR__ . "/../models/Producto.php";

class ProductoController
{
    public function index()
    {
        $productoModel = new Producto();

        $productos = $productoModel->getAll();

        $producto = $productoModel->getById(1);

        require_once __DIR__ . "/../views/productos/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }
}