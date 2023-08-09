<?php

$server = 'localhost'; // Reemplaza con el nombre del servidor de tu base de datos
$dbname = 'app'; // Reemplaza con el nombre de tu base de datos
$user = 'root'; // Reemplaza con el nombre de usuario para acceder a la base de datos
$password = ''; // Reemplaza con la contraseña correspondiente al usuario
try {
    
    $conexion = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
