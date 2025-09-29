<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Por defecto, es vacío en local
$db   = 'strangerthings_db'; // Asegurate de que el nombre de la BD sea correcto

// Intenta conectar a MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Verifica la conexión (según tu código y apuntes)
if (!$conn) {
    die('Error de conexión: ' . mysqli_connect_error()); // El error detiene la ejecución
}

// Opcional pero recomendado: establece el charset para tildes y eñes
mysqli_set_charset($conn, 'utf8mb4');
?>