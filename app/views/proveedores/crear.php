<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Proveedor</title>
</head>

<body>

    <h2>Crear Proveedor</h2>

<form action="/proveedores/guardar" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <br><br>

    <label>Empresa:</label>
    <input type="text" name="empresa" required>

    <br><br>

    <button type="submit">Guardar Proveedor</button>

</form>

</body>

</html>