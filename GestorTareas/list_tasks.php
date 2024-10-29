<?php
include 'db_config.php';

try {
$sql = "SELECT * FROM tareas";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tareas = $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener todas las tareas como un array asociativo

echo json_encode($tareas); // Devolver las tareas como JSON
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>

