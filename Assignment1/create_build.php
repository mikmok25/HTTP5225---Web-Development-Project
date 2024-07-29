<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$cpu_id = $_POST['cpu_id'];
$gpu_id = $_POST['gpu_id'];
$ram_id = $_POST['ram_id'];
$storage_id = $_POST['storage_id'];
$motherboard_id = $_POST['motherboard_id'];

$sql = "INSERT INTO builds (name, description, cpu_id, gpu_id, ram_id, storage_id, motherboard_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo "Error: " . $conn->error;
    exit;
}

$stmt->bind_param("ssiiiii", $name, $description, $cpu_id, $gpu_id, $ram_id, $storage_id, $motherboard_id);

if ($stmt->execute()) {
    header("Location: builds.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
