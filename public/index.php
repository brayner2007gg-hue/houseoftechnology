<?php

require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/EspecificacionController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/PedidoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>HouseTechnology</title>

</head>

<body>

    <nav>

        <a href="/categorias">Categorías</a> /
        <a href="/proveedores">Proveedores</a> /
        <a href="/productos">Productos</a> /
        <a href="/clientes">Clientes</a> /
        <a href="/especificaciones">Especificaciones</a> /
        <a href="/compras">Compras</a>

        <br><br>

        <a href="/categorias/crear">Crear Categoría</a> /
        <a href="/proveedores/crear">Crear Proveedor</a> /
        <a href="/productos/crear">Crear Producto</a> /
        <a href="/clientes/crear">Crear Cliente</a> /
        <a href="/especificaciones/crear">Crear Especificación</a> /
        <a href="/compras/crear">Crear Compra</a>

    </nav>

    <hr>


<?php

if ($method === 'GET' && $uri === "/categorias") {

    $categoriaController = new CategoriaController();

    $categoriaController->index();

}

elseif ($method === 'GET' && $uri === "/categorias/crear") {

    $categoriaController = new CategoriaController();

    $categoriaController->crear();

}

elseif ($method === 'GET' && $uri === "/proveedores") {

    $proveedorController = new ProveedorController();

    $proveedorController->index();

}

elseif ($method === 'GET' && $uri === "/proveedores/crear") {

    $proveedorController = new ProveedorController();

    $proveedorController->crear();

}

elseif ($method === 'GET' && $uri === "/productos") {

    $productoController = new ProductoController();

    $productoController->index();

}

elseif ($method === 'GET' && $uri === "/productos/crear") {

    $productoController = new ProductoController();

    $productoController->crear();

}

elseif ($method === 'GET' && $uri === "/clientes") {

    $clienteController = new ClienteController();

    $clienteController->index();

}

elseif ($method === 'GET' && $uri === "/clientes/crear") {

    $clienteController = new ClienteController();

    $clienteController->crear();

}

elseif ($method === 'GET' && $uri === "/especificaciones") {

    $especificacionController = new EspecificacionController();

    $especificacionController->index();

}

elseif ($method === 'GET' && $uri === "/especificaciones/crear") {

    $especificacionController = new EspecificacionController();

    $especificacionController->crear();

}

elseif ($method === 'GET' && $uri === "/compras") {

    $compraController = new CompraController();

    $compraController->index();

}

elseif ($method === 'GET' && $uri === "/compras/crear") {

    $compraController = new CompraController();

    $compraController->crear();

}

else {

    echo "<h1>HouseTechnology</h1>";

    echo "<p>Bienvenido al sistema.</p>";

    echo "<p>Selecciona una opción del menú.</p>";

}

?>

</body>

</html>