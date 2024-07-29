<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

// Corrected SQL query with a missing comma added after `storage.name AS storage_name`
$builds_query = "SELECT builds.*, 
                        cpu.name AS cpu_name, 
                        gpu.name AS gpu_name, 
                        memory.name AS ram_name, 
                        storage.name AS storage_name, 
                        motherboard.name AS motherboard_name
                 FROM builds 
                 LEFT JOIN cpu ON builds.cpu_id = cpu.id 
                 LEFT JOIN gpu ON builds.gpu_id = gpu.id 
                 LEFT JOIN memory ON builds.ram_id = memory.id 
                 LEFT JOIN storage ON builds.storage_id = storage.id 
                 LEFT JOIN motherboard ON builds.motherboard_id = motherboard.id";

$builds = $conn->query($builds_query);

if (!$builds) {
    die("Error fetching builds: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builds</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>PC Builds</h1>
    <a href="build_form.php">Create New Build</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>CPU</th>
            <th>GPU</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Motherboard</th>
            <th>Actions</th>
        </tr>
        <?php while ($build = $builds->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($build['name']) ?></td>
            <td><?= htmlspecialchars($build['description']) ?></td>
            <td><?= htmlspecialchars($build['cpu_name']) ?></td>
            <td><?= htmlspecialchars($build['gpu_name']) ?></td>
            <td><?= htmlspecialchars($build['ram_name']) ?></td>
            <td><?= htmlspecialchars($build['storage_name']) ?></td>
            <td><?= htmlspecialchars($build['motherboard_name']) ?></td>
            <td>
                <a href="edit_build.php?id=<?= htmlspecialchars($build['id']) ?>">Edit</a>
                <a href="delete_build.php?id=<?= htmlspecialchars($build['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
