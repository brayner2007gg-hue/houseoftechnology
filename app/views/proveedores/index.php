<h1>Listado de Proveedores</h1>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Empresa</th>
    </tr>

    <?php foreach ($proveedores as $proveedorItem): ?>

        <tr>
            <td><?= $proveedorItem['id_proveedor'] ?></td>
            <td><?= $proveedorItem['nombre'] ?></td>
            <td><?= $proveedorItem['telefono'] ?></td>
            <td><?= $proveedorItem['correo'] ?></td>
            <td><?= $proveedorItem['empresa'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Detalle del Proveedor</h1>

<?php if ($proveedor): ?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Empresa</th>
    </tr>

    <tr>
        <td><?= $proveedor['id_proveedor'] ?></td>
        <td><?= $proveedor['nombre'] ?></td>
        <td><?= $proveedor['telefono'] ?></td>
        <td><?= $proveedor['correo'] ?></td>
        <td><?= $proveedor['empresa'] ?></td>
    </tr>

</table>

<?php else: ?>

<p>Proveedor no encontrado.</p>

<?php endif; ?>