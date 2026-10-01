<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Pedido</title>

</head>

<body>

<h1>Crear Pedido</h1>

<form action="" method="POST">

    <label>ID Cliente:</label>
    <input type="number" name="id_cliente" required>

    <br><br>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <br><br>

    <label>Total:</label>
    <input type="number" name="total" step="0.01" required>

    <br><br>

    <label>Estado:</label>
    <input type="text" name="estado" required>

    <br><br>

    <button type="submit">
        Guardar Pedido
    </button>

</form>

</body>

</html>