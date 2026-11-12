
<?php

echo "<h1>TALLERES DE FUNDAMENTACIÓN PHP</h1>";
echo "<h2>Arreglos en PHP</h2>";
echo "<hr>";


/* =================================================
   TALLER 1: ARREGLOS INDEXADOS
================================================= */

echo "<h1>1. ARREGLOS INDEXADOS</h1>";

// EJEMPLO GUIADO

echo "<h3>Ejemplo guiado: Arreglo de frutas</h3>";

$frutas = ["Manzana", "Pera", "Mango"];

echo "Primera fruta: " . $frutas[0] . "<br>";
echo "Tercera fruta: " . $frutas[2] . "<br>";

echo "<hr>";

// EJERCICIO 1

echo "<h3>Ejercicio 1: Lenguajes de programación</h3>";

$lenguajes = [
    "PHP",
    "Java",
    "Python",
    "JavaScript",
    "C++"
];

echo "Segundo lenguaje: " . $lenguajes[1] . "<br>";
echo "Quinto lenguaje: " . $lenguajes[4] . "<br>";
echo "Primer lenguaje: " . $lenguajes[0] . "<br>";

echo "<hr>";

// EJERCICIO 2

echo "<h3>Ejercicio 2: Categorías de productos</h3>";

$categorias = [
    "Tecnologia",
    "Electrodomesticos",
    "Audio",
    "Iluminacion"
];

echo "Tercera categoria: " . $categorias[2] . "<br>";

echo "<hr>";



/* =================================================
   TALLER 2: ARREGLOS ASOCIATIVOS
================================================= */

echo "<h1>2. ARREGLOS ASOCIATIVOS</h1>";

// EJEMPLO GUIADO

echo "<h3>Ejemplo guiado: Información de un producto</h3>";

$producto = [
    "nombre" => "Mouse",
    "precio" => 35000,
    "stock" => 12
];

echo "Nombre: " . $producto["nombre"] . "<br>";
echo "Precio: $" . $producto["precio"] . "<br>";

echo "<hr>";

// EJERCICIO 3

echo "<h3>Ejercicio 3: Información del aprendiz</h3>";

$aprendiz = [
    "nombre" => "Brayner Velandia",
    "ficha" => 3230905,
    "programa" => "ADSO",
    "edad" => 20
];

echo "Nombre del aprendiz: " . $aprendiz["nombre"] . "<br>";
echo "Programa de formación: " . $aprendiz["programa"] . "<br>";

echo "<hr>";

// EJERCICIO 4

echo "<h3>Ejercicio 4: Información del proveedor</h3>";

$proveedor = [
    "nombre" => "Carlos Perez",
    "ciudad" => "Bogota",
    "telefono" => "3001234567",
    "correo" => "carlos@gmail.com"
];

echo "Nombre del proveedor: " . $proveedor["nombre"] . "<br>";
echo "Ciudad del proveedor: " . $proveedor["ciudad"] . "<br>";

echo "<hr>";



/* =================================================
   TALLER 3: MODIFICACIÓN Y ADICIÓN DE ELEMENTOS
================================================= */

echo "<h1>3. MODIFICACIÓN Y ADICIÓN DE ELEMENTOS</h1>";

// EJEMPLO GUIADO

echo "<h3>Ejemplo guiado: Modificar y agregar datos</h3>";

$productoModificado = [
    "nombre" => "Teclado",
    "precio" => 60000
];

// Modificar el precio
$productoModificado["precio"] = 55000;

// Agregar una nueva clave
$productoModificado["stock"] = 8;

echo "Nombre: " . $productoModificado["nombre"] . "<br>";
echo "Precio actualizado: $" . $productoModificado["precio"] . "<br>";
echo "Stock: " . $productoModificado["stock"] . "<br>";

echo "<hr>";

// EJERCICIO 5

echo "<h3>Ejercicio 5: Actualización de un producto</h3>";

$productoActualizado = [
    "nombre" => "Mouse",
    "precio" => 35000,
    "cantidad" => 10
];

// Modificar precio
$productoActualizado["precio"] = 40000;

// Actualizar cantidad
$productoActualizado["cantidad"] = 15;

// Agregar categoría
$productoActualizado["categoria"] = "Tecnologia";

// Mostrar toda la información
echo "Nombre: " . $productoActualizado["nombre"] . "<br>";
echo "Precio actualizado: $" . $productoActualizado["precio"] . "<br>";
echo "Cantidad disponible: " . $productoActualizado["cantidad"] . "<br>";
echo "Categoria: " . $productoActualizado["categoria"] . "<br>";

echo "<hr>";

// EJERCICIO 6

echo "<h3>Ejercicio 6: Marcas de computadores</h3>";

$marcas = [
    "HP",
    "Lenovo",
    "Dell"
];

// Agregar dos marcas nuevas
$marcas[] = "Asus";
$marcas[] = "Acer";

// Mostrar las cinco marcas
foreach ($marcas as $marca) {
    echo $marca . "<br>";
}

echo "<hr>";



/* =================================================
   TALLER 4: ARREGLOS ANIDADOS
================================================= */

echo "<h1>4. ARREGLOS ANIDADOS</h1>";

// EJEMPLO GUIADO

echo "<h3>Ejemplo guiado: Productos anidados</h3>";

$productos = [
    [
        "nombre" => "Mouse",
        "precio" => 35000
    ],
    [
        "nombre" => "Teclado",
        "precio" => 60000
    ]
];

echo "Nombre del primer producto: " . $productos[0]["nombre"] . "<br>";
echo "Precio del segundo producto: $" . $productos[1]["precio"] . "<br>";

echo "<hr>";

// EJERCICIO 7

echo "<h3>Ejercicio 7: Registro de productos</h3>";

$productosAlmacen = [
    [
        "nombre" => "Mouse",
        "precio" => 35000,
        "cantidad" => 10
    ],
    [
        "nombre" => "Teclado",
        "precio" => 60000,
        "cantidad" => 15
    ],
    [
        "nombre" => "Monitor",
        "precio" => 450000,
        "cantidad" => 5
    ]
];

echo "Nombre del segundo producto: " . $productosAlmacen[1]["nombre"] . "<br>";
echo "Precio del tercer producto: $" . $productosAlmacen[2]["precio"] . "<br>";
echo "Cantidad del primer producto: " . $productosAlmacen[0]["cantidad"] . "<br>";

echo "<hr>";

// EJERCICIO 8

echo "<h3>Ejercicio 8: Registro de aprendices</h3>";

$aprendices = [
    [
        "nombre" => "Brayner Velandia",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Carlos Perez",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Laura Gomez",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ]
];

echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"] . "<br>";
echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"] . "<br>";

echo "<hr>";



/* =================================================
   TALLER 5: ARREGLOS ASOCIATIVOS QUE CONTIENEN
   OTROS ARREGLOS
================================================= */

echo "<h1>5. ARREGLOS ASOCIATIVOS QUE CONTIENEN OTROS ARREGLOS</h1>";

// EJEMPLO GUIADO

echo "<h3>Ejemplo guiado: Producto y proveedor</h3>";

$productoAnidado = [
    "nombre" => "Monitor",
    "precio" => 750000,
    "proveedor" => [
        "nombre" => "Tecnologia SAS",
        "ciudad" => "Bogota"
    ]
];

echo "Nombre del producto: " . $productoAnidado["nombre"] . "<br>";

echo "Nombre del proveedor: " . $productoAnidado["proveedor"]["nombre"] . "<br>";

echo "Ciudad del proveedor: " . $productoAnidado["proveedor"]["ciudad"] . "<br>";

echo "<hr>";

// EJERCICIO 9

echo "<h3>Ejercicio 9: Información del aprendiz y contacto</h3>";

$aprendizContacto = [
    "nombre" => "Brayner Velandia",
    "edad" => 20,
    "contacto" => [
        "correo" => "brayner@gmail.com",
        "telefono" => "3001234567"
    ]
];

echo "Nombre del aprendiz: " . $aprendizContacto["nombre"] . "<br>";

echo "Correo electronico: " . $aprendizContacto["contacto"]["correo"] . "<br>";

echo "<hr>";

// EJERCICIO 10

echo "<h3>Ejercicio 10: Producto y fabricante</h3>";

$productoFabricante = [
    "nombre" => "Laptop Lenovo",
    "precio" => 2500000,
    "fabricante" => [
        "nombre" => "Lenovo",
        "pais" => "China"
    ]
];

echo "Nombre del producto: " . $productoFabricante["nombre"] . "<br>";

echo "Pais de origen del fabricante: " . $productoFabricante["fabricante"]["pais"] . "<br>";

echo "<hr>";



/* =================================================
   FINAL DEL TALLER
================================================= */

echo "<h1>FIN DE TODOS LOS TALLERES</h1>";

?>
