
<h1>Listado de Categorías</h1>

<table border="1">
    <tr>
        <th>ID Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($categorias as $categoriaItem): ?>
        <tr>
            <td><?= $categoriaItem['id_categoria'] ?></td>

            <td>
                <?= htmlspecialchars($categoriaItem['nombre'] ?? '') ?>
            </td>

            <td>
                <?= htmlspecialchars($categoriaItem['descripcion'] ?? '') ?>
            </td>

            <td>
                <a href="/categorias/editar?id=<?= $categoriaItem['id_categoria'] ?>">
                    Editar
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>



<h1>Detalle de la categoría</h1>

<?php if ($categoria): ?>

<table border="1">

    <tr>
        <th>ID Categoría</th>
        <th>Nombre</th>
        <th>Descripción</th>
    </tr>

    <tr>
        <td><?= $categoria['id_categoria'] ?></td>
        <td><?= $categoria['nombre'] ?></td>
        <td><?= $categoria['descripcion'] ?></td>
    </tr>

</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Categoría no encontrada.</p>

<?php endif; ?>