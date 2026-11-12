<h1>Listado de Proveedores</h1>

<?php if (!empty($mensaje)): ?>
    <p><?= htmlspecialchars($mensaje) ?></p>
<?php endif; ?>


<table border="1">

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Empresa</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($proveedores as $proveedorItem): ?>

        <tr>
            <td><?= $proveedorItem['id_proveedor'] ?></td>
            <td><?= $proveedorItem['nombre'] ?></td>
            <td><?= $proveedorItem['telefono'] ?></td>
            <td><?= $proveedorItem['correo'] ?></td>
            <td><?= $proveedorItem['empresa'] ?></td>
            
<td>
    <a href="/proveedores/editar?id=<?= $proveedorItem['id_proveedor'] ?>">
        Editar
    </a>

    |

    <form action="/proveedores/eliminar" method="POST"
          style="display:inline;"
          onsubmit="return confirm('¿Estás seguro de eliminar este proveedor?');">

        <input type="hidden" name="id"
               value="<?= $proveedorItem['id_proveedor'] ?>">

        <button type="submit">Eliminar</button>

    </form>
</td>

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