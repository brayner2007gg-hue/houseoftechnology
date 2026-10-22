<?php

require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/EspecificacionController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/PedidoController.php";
require_once __DIR__ . "/../app/controllers/PagoController.php";
require_once __DIR__ . "/../app/controllers/CarritoController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$ruta = parse_url($uri, PHP_URL_PATH);
 
if($ruta === "/productos/editar" && $method === "GET") {
    $productoController = new ProductoController();
    $productoController->editar();
    exit;
}


if ($ruta === "/categorias/editar" && $method === "GET") {
    $categoriaController = new CategoriaController();
    $categoriaController->editar();
    exit;
}


if ($ruta === "/proveedores/editar" && $method === "GET") {
    $proveedorController = new ProveedorController();
    $proveedorController->editar();
    exit;
}


if ($ruta === "/clientes/editar" && $method === "GET") {
    $clienteController = new ClienteController();
    $clienteController->editar();
    exit;
}



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
        <a href="/compras">Compras</a> /
        <a href="/pedidos">Pedidos</a> /
        <a href="/pagos">Pagos</a> /
        <a href="/carrito">Carrito</a> /

        <br><br>

        <a href="/categorias/crear">Crear Categoría</a> /
        <a href="/proveedores/crear">Crear Proveedor</a> /
        <a href="/productos/crear">Crear Producto</a> /
        <a href="/clientes/crear">Crear Cliente</a> /
        <a href="/especificaciones/crear">Crear Especificación</a> /
        <a href="/compras/crear">Crear Compra</a> /
        <a href="/pedidos/crear">Crear Pedido</a> /
        <a href="/pagos/crear">Crear Pago</a> /
        <a href="/carrito/crear">Crear Carrito</a> /

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

elseif ($method === 'POST' && $uri === "/categorias/guardar") {
    $categoriaController = new CategoriaController();
    $categoriaController->guardar();
}

elseif ($method === 'GET' && $uri === "/proveedores") {

    $proveedorController = new ProveedorController();

    $proveedorController->index();

}

elseif ($method === 'GET' && $uri === "/proveedores/crear") {

    $proveedorController = new ProveedorController();

    $proveedorController->crear();

}

elseif ($method === 'POST' && $uri === "/proveedores/guardar") {
    $proveedorController = new ProveedorController();
    $proveedorController->guardar();
}

elseif ($method === 'GET' && $uri === "/productos") {

    $productoController = new ProductoController();

    $productoController->index();

}

elseif ($method === 'GET' && $uri === "/productos/crear") {

    $productoController = new ProductoController();

    $productoController->crear();

}

elseif ($method === 'POST' && $uri === "/productos/guardar") {
    $productoController = new ProductoController();
    $productoController->guardar();
}

elseif ($method === 'GET' && $uri === "/clientes") {

    $clienteController = new ClienteController();

    $clienteController->index();

}

elseif ($method === 'GET' && $uri === "/clientes/crear") {

    $clienteController = new ClienteController();

    $clienteController->crear();

}

elseif ($method === 'POST' && $uri === "/clientes/guardar") {
    $clienteController = new ClienteController();
    $clienteController->guardar();
}

elseif ($method === 'GET' && $uri === "/especificaciones") {

    $especificacionController = new EspecificacionController();

    $especificacionController->index();

}

elseif ($method === 'GET' && $uri === "/especificaciones/crear") {

    $especificacionController = new EspecificacionController();

    $especificacionController->crear();

}

elseif ($method === 'POST' && $uri === "/especificaciones/guardar") {
    $especificacionController = new EspecificacionController();
    $especificacionController->guardar();
}

elseif ($method === 'GET' && $uri === "/compras") {

    $compraController = new CompraController();

    $compraController->index();

}

elseif ($method === 'GET' && $uri === "/compras/crear") {

    $compraController = new CompraController();

    $compraController->crear();

}
    
elseif ($method === 'GET' && $uri === "/pedidos") {

    $pedidoController = new PedidoController();

    $pedidoController->index();

}

elseif ($method === 'GET' && $uri === "/pedidos/crear") {

    $pedidoController = new PedidoController();

    $pedidoController->crear();

}

elseif ($method === 'GET' && $uri === "/pagos") {

    $pagoController = new PagoController();

    $pagoController->index();

}

elseif ($method === 'GET' && $uri === "/pagos/crear") {

    $pagoController = new PagoController();

    $pagoController->crear();

}

elseif ($method === 'GET' && $uri === "/carrito") {

    $carritoController = new CarritoController();

    $carritoController->index();

}

elseif ($method === 'GET' && $uri === "/carrito/crear") {

    $carritoController = new CarritoController();

    $carritoController->crear();

}

else {

    echo "<h1>HouseTechnology</h1>";

    echo "<p>Bienvenido al sistema.</p>";

    echo "<p>Selecciona una opción del menú.</p>";

}

?>

</body>

</html>