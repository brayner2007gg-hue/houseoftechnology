
<h1>Editar Datos del Cliente</h1>

<form method="POST">

    <!-- ID del cliente -->
    <input type="hidden" name="id"
           value="<?= $cliente['id_cliente'] ?>">

    <!-- ID del usuario -->
    <label for="id_usuario">ID Usuario:</label>
    <input type="number" id="id_usuario" name="id_usuario"
           value="<?= htmlspecialchars((string) ($cliente['id_usuario'] ?? '')) ?>">

    <br><br>

    <!-- Dirección -->
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"
           value="<?= htmlspecialchars($cliente['direccion'] ?? '') ?>">

    <br><br>

    <!-- Teléfono -->
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"
           value="<?= htmlspecialchars($cliente['telefono'] ?? '') ?>">

    <br><br>

    <!-- Botón provisional, todavía no actualiza la base de datos -->
    <button type="button"
            onclick="alert('La actualización se implementará más adelante.')">
        Actualizar Cliente
    </button>

</form>

<br>

<a href="/clientes">Volver a Clientes</a>
