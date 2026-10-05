<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
</head>

<body>

    <h2>Crear Cliente</h2>

<form action="/clientes/guardar" method="POST">

    <label>ID Usuario:</label>
    <input type="number" name="id_usuario">

    <br><br>

    <label>Dirección:</label>
    <input type="text" name="direccion" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <br><br>

    <button type="submit">Guardar Cliente</button>

</form>

</body>

</html>