<h1>Listado de Clientes</h1>

<table border="1">

    <tr>
        <th>ID Cliente</th>
        <th>ID Usuario</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>

    <?php foreach ($clientes as $clienteItem): ?>

        <tr>
            <td><?= $clienteItem['id_cliente'] ?></td>
            <td><?= $clienteItem['id_usuario'] ?></td>
            <td><?= $clienteItem['direccion'] ?></td>
            <td><?= $clienteItem['telefono'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Cliente</h1>

<?php if ($cliente): ?>

<table border="1">

    <tr>
        <th>ID Cliente</th>
        <th>ID Usuario</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>

    <tr>
        <td><?= $cliente['id_cliente'] ?></td>
        <td><?= $cliente['id_usuario'] ?></td>
        <td><?= $cliente['direccion'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Cliente no encontrado.</p>

<?php endif; ?>