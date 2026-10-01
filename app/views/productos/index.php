<h1>Listado de Productos</h1>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $productoItem): ?>

        <tr>
            <td><?= $productoItem['id_producto'] ?></td>
            <td><?= $productoItem['nombre'] ?></td>
            <td><?= $productoItem['descripcion'] ?></td>
            <td><?= $productoItem['precio'] ?></td>
            <td><?= $productoItem['stock'] ?></td>
            <td><?= $productoItem['marca'] ?></td>
            <td><?= $productoItem['categoria'] ?></td>
            <td><?= $productoItem['proveedor'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Producto</h1>

<?php if ($producto): ?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Marca</th>
        <th>Categoría</th>
        <th>Proveedor</th>
    </tr>

    <tr>
        <td><?= $producto['id_producto'] ?></td>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['descripcion'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['stock'] ?></td>
        <td><?= $producto['marca'] ?></td>
        <td><?= $producto['categoria'] ?></td>
        <td><?= $producto['proveedor'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Producto no encontrado.</p>

<?php endif; ?>