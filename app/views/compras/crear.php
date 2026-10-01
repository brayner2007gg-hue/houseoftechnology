<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Compra</title>

</head>

<body>

<h1>Crear Compra</h1>

<form action="" method="POST">

    <label>ID Proveedor:</label>
    <input type="number" name="id_proveedor" required>

    <br><br>

    <label>ID Producto:</label>
    <input type="number" name="id_producto" required>

    <br><br>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <br><br>

    <label>Total:</label>
    <input type="number" name="total" step="0.01" required>

    <br><br>

    <button type="submit">
        Guardar Compra
    </button>

</form>

</body>

</html>