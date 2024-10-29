<?php
$host = 'localhost';
$dbname = 'gestor-tareas';
$username = 'root';
$password = ''; // Deja la contraseña en blanco en XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(["status" => "error", "message" => "Error en la conexión: " . $e->getMessage()]));
}
?>
