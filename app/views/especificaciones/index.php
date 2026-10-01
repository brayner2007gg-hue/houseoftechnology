<h1>Listado de Especificaciones</h1>

<table border="1">

    <tr>
        <th>ID Especificación</th>
        <th>Producto</th>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Empresa</th>
        <th>Valor</th>
    </tr>

    <?php foreach ($especificaciones as $especificacionItem): ?>

        <tr>
            <td><?= $especificacionItem['id_especificacion'] ?></td>
            <td><?= $especificacionItem['producto_nombre'] ?></td>
            <td><?= $especificacionItem['id_proveedor'] ?></td>
            <td><?= $especificacionItem['nombre'] ?></td>
            <td><?= $especificacionItem['telefono'] ?></td>
            <td><?= $especificacionItem['correo'] ?></td>
            <td><?= $especificacionItem['empresa'] ?></td>
            <td><?= $especificacionItem['valor'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle de la especificación</h1>

<?php if ($especificacion): ?>

<table border="1">

    <tr>
        <th>ID Especificación</th>
        <th>Producto</th>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Empresa</th>
        <th>Valor</th>
    </tr>

    <tr>
        <td><?= $especificacion['id_especificacion'] ?></td>
        <td><?= $especificacion['producto_nombre'] ?></td>
        <td><?= $especificacion['id_proveedor'] ?></td>
        <td><?= $especificacion['nombre'] ?></td>
        <td><?= $especificacion['telefono'] ?></td>
        <td><?= $especificacion['correo'] ?></td>
        <td><?= $especificacion['empresa'] ?></td>
        <td><?= $especificacion['valor'] ?></td>
    </tr>

</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Especificación no encontrada.</p>

<?php endif; ?>