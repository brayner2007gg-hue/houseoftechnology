
<h1>Editar Datos de la Categoría</h1>

<form method="POST">

    <input type="hidden" name="id"
           value="<?= $categoria['id_categoria'] ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"
           value="<?= htmlspecialchars($categoria['nombre'] ?? '') ?>">

    <br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion"
           value="<?= htmlspecialchars($categoria['descripcion'] ?? '') ?>">

    <br><br>

    <button type="button"
            onclick="alert('La actualización se implementará más adelante.')">
        Actualizar Categoría
    </button>

</form>

<br>
<a href="/categorias">Volver a Categorías</a>
