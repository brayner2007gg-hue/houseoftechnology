<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Especificación</title>

</head>

<body>

<h2>Crear Especificación</h2>

<form action="/especificaciones/guardar" method="POST">

    <label>Producto:</label>
    <input type="text" name="producto" required>

    <br><br>

    <label>Proveedor:</label>
    <input type="text" name="proveedor" required>

    <br><br>

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

    <label>Valor:</label>
    <input type="text" name="valor" required>

    <br><br>

    <button type="submit">Guardar Especificación</button>

</form>

</body>

</html>