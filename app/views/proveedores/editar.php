
<h1>Editar Datos del Proveedor</h1>

<form method="POST">

    <input type="hidden" name="id"
           value="<?= $proveedor['id_proveedor'] ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"
           value="<?= htmlspecialchars($proveedor['nombre'] ?? '') ?>">

    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"
           value="<?= htmlspecialchars($proveedor['telefono'] ?? '') ?>">

    <br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo"
           value="<?= htmlspecialchars($proveedor['correo'] ?? '') ?>">

    <br><br>

    <label for="empresa">Empresa:</label>
    <input type="text" id="empresa" name="empresa"
           value="<?= htmlspecialchars($proveedor['empresa'] ?? '') ?>">

    <br><br>

    <button type="button"
            onclick="alert('La actualización se implementará más adelante.')">
        Actualizar Proveedor
    </button>

</form>

<br>

<a href="/proveedores">Volver a Proveedores</a>
