<?php

require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController
{
    public function index()
    {
        $categoriaModel = new Categoria();

        $categorias = $categoriaModel->getAll();

        $categoria = $categoriaModel->getById(1);

        require_once __DIR__ . "/../views/categorias/index.php";
    }

    public function crear()
    {
        require_once __DIR__ . "/../views/categorias/crear.php";
    }
}