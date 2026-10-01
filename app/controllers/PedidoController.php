<?php

require_once __DIR__ . "/../models/Pedido.php";

class PedidoController
{
    public function index()
    {
        $pedidoModel = new Pedido();

        $pedidos = $pedidoModel->getAll();

        $pedido = $pedidoModel->getById(1);

        require_once __DIR__ . "/../views/pedidos/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/pedidos/crear.php";
    }
}