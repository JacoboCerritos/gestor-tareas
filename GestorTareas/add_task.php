<?php
include 'db_config.php';

$data = json_decode(file_get_contents("php://input"));
$titulo = $data->titulo;
$descripcion = $data->descripcion;

$sql = "INSERT INTO tareas (titulo, descripcion) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$titulo, $descripcion]);

echo json_encode(["status" => "success"]);
file_put_contents('log.txt', print_r($data, true)); // Esto guardará los datos en un archivo log.txt en la misma carpeta

?>
