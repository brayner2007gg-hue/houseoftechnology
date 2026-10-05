<h1>Listado de Pagos</h1>

<table border="1">

    <tr>
        <th>ID Pago</th>
        <th>ID Pedido</th>
        <th>ID Cliente</th>
        <th>Método de Pago</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>

    <?php foreach ($pagos as $pagoItem): ?>

        <tr>
            <td><?= $pagoItem['id_pago'] ?></td>
            <td><?= $pagoItem['id_pedido'] ?></td>
            <td><?= $pagoItem['id_cliente'] ?></td>
            <td><?= $pagoItem['metodo_pago'] ?></td>
            <td><?= $pagoItem['fecha'] ?></td>
            <td><?= $pagoItem['estado'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Pago</h1>

<?php if ($pago): ?>

<table border="1">

    <tr>
        <th>ID Pago</th>
        <th>ID Pedido</th>
        <th>ID Cliente</th>
        <th>Método de Pago</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>

    <tr>
        <td><?= $pago['id_pago'] ?></td>
        <td><?= $pago['id_pedido'] ?></td>
        <td><?= $pago['id_cliente'] ?></td>
        <td><?= $pago['metodo_pago'] ?></td>
        <td><?= $pago['fecha'] ?></td>
        <td><?= $pago['estado'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Pago no encontrado.</p>

<?php endif; ?>