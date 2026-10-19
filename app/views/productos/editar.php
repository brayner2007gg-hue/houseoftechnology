
<h1>Actualizar Datos del Producto</h1>

<form action="/productos/actualizar" method="POST">

    <input type="hidden" name="id"
           value="<?= htmlspecialchars((string) $producto['id_producto']) ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"
           value="<?= htmlspecialchars($producto['nombre'] ?? '') ?>" required>

    <br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion"
           value="<?= htmlspecialchars($producto['descripcion'] ?? '') ?>" required>

    <br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio"
           step="0.01" min="0"
           value="<?= htmlspecialchars((string) ($producto['precio'] ?? '0')) ?>" required>

    <br><br>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock"
           min="0"
           value="<?= htmlspecialchars((string) ($producto['stock'] ?? '0')) ?>" required>

    <br><br>

    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca"
           value="<?= htmlspecialchars($producto['marca'] ?? '') ?>" required>

    <br><br>

    <label for="categoria">Categoría:</label>
    <input type="text" id="categoria" name="categoria"
           value="<?= htmlspecialchars($producto['categoria'] ?? '') ?>" required>

    <br><br>

    <label for="proveedor">Proveedor:</label>
    <input type="text" id="proveedor" name="proveedor"
           value="<?= htmlspecialchars($producto['proveedor'] ?? '') ?>" required>

    <br><br>

    <button type="submit">Actualizar Producto</button>

</form>

<br>

<a href="/productos">Volver a Productos</a>
