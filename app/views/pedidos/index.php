<h1>Listado de Pedidos</h1>

<table border="1">

    <tr>
        <th>ID Pedido</th>
        <th>ID Cliente</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
    </tr>

    <?php foreach ($pedidos as $pedidoItem): ?>

        <tr>
            <td><?= $pedidoItem['id_pedido'] ?></td>
            <td><?= $pedidoItem['id_cliente'] ?></td>
            <td><?= $pedidoItem['fecha'] ?></td>
            <td><?= $pedidoItem['total'] ?></td>
            <td><?= $pedidoItem['estado'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Pedido</h1>

<?php if ($pedido): ?>

<table border="1">

    <tr>
        <th>ID Pedido</th>
        <th>ID Cliente</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Estado</th>
    </tr>

    <tr>
        <td><?= $pedido['id_pedido'] ?></td>
        <td><?= $pedido['id_cliente'] ?></td>
        <td><?= $pedido['fecha'] ?></td>
        <td><?= $pedido['total'] ?></td>
        <td><?= $pedido['estado'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Pedido no encontrado.</p>

<?php endif; ?>