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

    public function guardar()
{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $categoriaModel = new Categoria();

    $resultado = $categoriaModel->guardar($nombre, $descripcion);

    if ($resultado) {
        echo "Categoría guardada correctamente.";
        $this->index();
    } else {
        echo "Error al guardar la categoría.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/categorias/crear.php";
    }
}