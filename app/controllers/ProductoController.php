<?php

require_once __DIR__ . "/../models/Producto.php";

class ProductoController
{
   
public function index($mensaje = null)
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

    // ACTUALIZAR PRODUCTO
    public function actualizar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de producto no válido.");
            return;
        }

        $nombre = trim($_POST['nombre'] ?? '');
        $descripcion = trim($_POST['descripcion'] ?? '');
        $precio = $_POST['precio'] ?? 0;
        $stock = $_POST['stock'] ?? 0;
        $marca = trim($_POST['marca'] ?? '');
        $categoria = trim($_POST['categoria'] ?? '');
        $proveedor = trim($_POST['proveedor'] ?? '');

        $productoModel = new Producto();

        $resultado = $productoModel->actualizar(
            $id,
            $nombre,
            $descripcion,
            $precio,
            $stock,
            $marca,
            $categoria,
            $proveedor
        );

        if ($resultado) {
            $mensaje = "Producto actualizado correctamente.";
        } else {
            $mensaje = "No se pudo actualizar. Verifica la categoría y el proveedor.";
        }

        $this->index($mensaje);
    }

    // ELIMINAR PRODUCTO
    public function eliminar()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            $this->index("ID de producto no válido.");
            return;
        }

        $productoModel = new Producto();

        $resultado = $productoModel->eliminar($id);

        if ($resultado === true) {
            $mensaje = "Producto eliminado correctamente.";
        } elseif ($resultado === 'relacionado') {
            $mensaje = "No se puede eliminar: el producto tiene registros relacionados.";
        } else {
            $mensaje = "No se pudo eliminar el producto.";
        }

        $this->index($mensaje);
    }

}