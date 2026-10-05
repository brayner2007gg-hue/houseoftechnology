<?php

require_once __DIR__ . "/../models/Pago.php";

class PagoController
{
    public function index()
    {
        $pagoModel = new Pago();

        $pagos = $pagoModel->getAll();

        $pago = $pagoModel->getById(1);

        require_once __DIR__ . "/../views/pagos/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/pagos/crear.php";
    }
}