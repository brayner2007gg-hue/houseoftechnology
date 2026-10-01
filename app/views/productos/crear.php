<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>

<body>

    <h1>Crear Producto</h1>

    <form action="" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion" required>

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

        <label>ID Categoría:</label>
        <input type="number" name="id_categoria" required>

        <br><br>

        <label>ID Proveedor:</label>
        <input type="number" name="id_proveedor" required>

        <br><br>

        <button type="submit">
            Guardar Producto
        </button>

    </form>

</body>

</html>