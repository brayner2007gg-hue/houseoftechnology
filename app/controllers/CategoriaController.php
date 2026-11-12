<?php

require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController
{
   
public function index($mensaje = null)
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

   
public function editar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $modeloCategoria = new Categoria();

    $categoria = $modeloCategoria->getById($id);

    require_once __DIR__ . "/../views/categorias/editar.php";
}

    // ACTUALIZAR CATEGORIA
    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de categoría no válido.");
            return;
        }

        $nombre = trim($_POST['nombre'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');

        if ($nombre === '' || $descripcion === '') {
            $this->index("Todos los campos son obligatorios.");
            return;
        }

        $categoriaModel = new Categoria();

        $resultado = $categoriaModel->actualizar(
            $id,
            $nombre,
            $descripcion
        );

        if ($resultado) {
            $mensaje = "Categoría actualizada correctamente.";
        } else {
            $mensaje = "No se pudo actualizar la categoría.";
        }

        $this->index($mensaje);
    }

    // ELIMINAR CATEGORIA
    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de categoría no válido.");
            return;
        }

        $categoriaModel = new Categoria();

        $resultado = $categoriaModel->eliminar($id);

        if ($resultado === true) {
            $mensaje = "Categoría eliminada correctamente.";
        } elseif ($resultado === 'relacionado') {
            $mensaje = "No se puede eliminar: existen productos asociados a esta categoría.";
        } else {
            $mensaje = "No se pudo eliminar la categoría.";
        }

        $this->index($mensaje);
    }


}