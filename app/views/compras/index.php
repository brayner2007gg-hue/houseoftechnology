<h1>Listado de Compras</h1>

<table border="1">

    <tr>
        <th>ID Compra</th>
        <th>Proveedor</th>
        <th>Producto</th>
        <th>Fecha</th>
        <th>Total</th>
    </tr>

    <?php foreach ($compras as $compraItem): ?>

        <tr>
            <td><?= $compraItem['id_compra'] ?></td>
            <td><?= $compraItem['proveedor_nombre'] ?></td>
            <td><?= $compraItem['producto_nombre'] ?></td>
            <td><?= $compraItem['fecha'] ?></td>
            <td><?= $compraItem['total'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle de la Compra</h1>

<?php if ($compra): ?>

<table border="1">

    <tr>
        <th>ID Compra</th>
        <th>Proveedor</th>
        <th>Producto</th>
        <th>Fecha</th>
        <th>Total</th>
    </tr>

    <tr>
        <td><?= $compra['id_compra'] ?></td>
        <td><?= $compra['proveedor_nombre'] ?></td>
        <td><?= $compra['producto_nombre'] ?></td>
        <td><?= $compra['fecha'] ?></td>
        <td><?= $compra['total'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Compra no encontrada.</p>

<?php endif; ?>