<?php

require_once "../config/Database.php";

$database = new Database();

$db = $database->getConnection();

if ($db) {
    echo "Conexión exitosa a la base de datos HouseTechnology";
} else {
    echo "No se pudo conectar a la base de datos";
}