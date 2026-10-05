<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Categoría</title>
</head>

<body>

<h2>Crear Categoría</h2>

<form action="/categorias/guardar" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Descripción:</label>
    <input type="text" name="descripcion" required>

    <br><br>

    <button type="submit">Guardar Categoría</button>

</form>

</body>

</html>