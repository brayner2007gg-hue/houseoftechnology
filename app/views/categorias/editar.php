
<h1>Editar Datos de la Categoría</h1>

<?php if ($categoria): ?>

<form action="/categorias/actualizar" method="POST">

    <input type="hidden" name="id"
           value="<?= htmlspecialchars((string) $categoria['id_categoria']) ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"
           value="<?= htmlspecialchars($categoria['nombre'] ?? '') ?>"
           required>

    <br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion"
           value="<?= htmlspecialchars($categoria['descripcion'] ?? '') ?>"
           required>

    <br><br>

    <button type="submit">Actualizar Categoría</button>

</form>

<?php else: ?>

<p>Categoría no encontrada.</p>

<?php endif; ?>

<br>

<a href="/categorias">Volver a Categorías</a>

