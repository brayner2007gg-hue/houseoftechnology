
<h1>Editar Datos del Proveedor</h1>

<?php if ($proveedor): ?>

<form action="/proveedores/actualizar" method="POST">

    <input type="hidden" name="id"
           value="<?= htmlspecialchars((string) $proveedor['id_proveedor']) ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"
           value="<?= htmlspecialchars($proveedor['nombre'] ?? '') ?>"
           required>

    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"
           value="<?= htmlspecialchars($proveedor['telefono'] ?? '') ?>"
           required>

    <br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo"
           value="<?= htmlspecialchars($proveedor['correo'] ?? '') ?>"
           required>

    <br><br>

    <label for="empresa">Empresa:</label>
    <input type="text" id="empresa" name="empresa"
           value="<?= htmlspecialchars($proveedor['empresa'] ?? '') ?>"
           required>

    <br><br>

    <button type="submit">Actualizar Proveedor</button>

</form>

<?php else: ?>

<p>Proveedor no encontrado.</p>

<?php endif; ?>

<br>

<a href="/proveedores">Volver a Proveedores</a>

