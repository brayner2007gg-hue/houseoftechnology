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

    public function guardar()
{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];

    $productoModel = new Producto();

    $resultado = $productoModel->guardar(
        $nombre,
        $descripcion,
        $precio,
        $stock,
        $marca,
        $categoria,
        $proveedor
    );

    if ($resultado) {
        echo "Producto guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el producto.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }

    public function editar()
    {
      $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
      $modeloProducto = new Producto();
      $producto = $modeloProducto->getById($id);
      require_once __DIR__ . "/../views/productos/editar.php";
}
}