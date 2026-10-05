<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Crear Pago</title>

</head>

<body>

<h1>Crear Pago</h1>

<form action="" method="POST">

    <label>ID Pedido:</label>
    <input type="number" name="id_pedido" required>

    <br><br>

    <label>Método de Pago:</label>
    <input type="text" name="metodo_pago" required>

    <br><br>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <br><br>

    <label>Estado:</label>
    <input type="text" name="estado" required>

    <br><br>

    <button type="submit">
        Guardar Pago
    </button>

</form>

</body>

</html>