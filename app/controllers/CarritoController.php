<?php

require_once __DIR__ . "/../models/Carrito.php";

class CarritoController
{
    public function index()
    {
        $carritoModel = new Carrito();

        $carritos = $carritoModel->getAll();

        $carrito = $carritoModel->getById(1);

        require_once __DIR__ . "/../views/carrito/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/carrito/crear.php";
    }
}