<h1>Listado de Carritos</h1>

<table border="1">

    <tr>
        <th>ID Carrito</th>
        <th>ID Cliente</th>
        <th>Fecha</th>
    </tr>

    <?php foreach ($carritos as $carritoItem): ?>

        <tr>
            <td><?= $carritoItem['id_carrito'] ?></td>
            <td><?= $carritoItem['id_cliente'] ?></td>
            <td><?= $carritoItem['fecha'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Carrito</h1>

<?php if ($carrito): ?>

<table border="1">

    <tr>
        <th>ID Carrito</th>
        <th>ID Cliente</th>
        <th>Fecha</th>
    </tr>

    <tr>
        <td><?= $carrito['id_carrito'] ?></td>
        <td><?= $carrito['id_cliente'] ?></td>
        <td><?= $carrito['fecha'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Carrito no encontrado.</p>

<?php endif; ?>