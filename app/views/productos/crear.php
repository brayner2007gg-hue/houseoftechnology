<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>

<body>

    <h2>Crear Producto</h2>

<form action="/productos/guardar" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <br><br>

    <label>Precio:</label>
    <input type="number" name="precio" step="0.01" required>

    <br><br>

    <label>Stock:</label>
    <input type="number" name="stock" required>

    <br><br>

    <label>Marca:</label>
    <input type="text" name="marca" required>

    <br><br>

    <label>Categoría:</label>
    <input type="text" name="categoria" required>

    <br><br>

    <label>Proveedor:</label>
    <input type="text" name="proveedor" required>

    <br><br>

    <button type="submit">Guardar Producto</button>

</form>

</body>

</html>