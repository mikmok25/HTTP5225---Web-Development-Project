<?php
include 'db.php';

// Fetch parts
$cpus = $conn->query("SELECT id, name FROM cpu");
$gpus = $conn->query("SELECT id, name FROM gpu");
$rams = $conn->query("SELECT id, name FROM memory");
$storages = $conn->query("SELECT id, name FROM storage");
$motherboards = $conn->query("SELECT id, name FROM motherboard");

?>

<h1>Create a build</h1>
<form action="create_build.php" method="POST">
    <label for="name">Build Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>

    <label for="cpu">CPU:</label>
    <select id="cpu" name="cpu_id" required>
        <?php while ($cpu = $cpus->fetch_assoc()): ?>
            <option value="<?= $cpu['id'] ?>"><?= $cpu['name'] ?></option>
        <?php endwhile; ?>
    </select><br>

    <label for="gpu">GPU:</label>
    <select id="gpu" name="gpu_id" required>
        <?php while ($gpu = $gpus->fetch_assoc()): ?>
            <option value="<?= $gpu['id'] ?>"><?= $gpu['name'] ?></option>
        <?php endwhile; ?>
    </select><br>

    <label for="ram">RAM:</label>
    <select id="ram" name="ram_id" required>
        <?php while ($ram = $rams->fetch_assoc()): ?>
            <option value="<?= $ram['id'] ?>"><?= $ram['name'] ?></option>
        <?php endwhile; ?>
    </select><br>

    <label for="storage">Storage:</label>
    <select id="storage" name="storage_id" required>
        <?php while ($storage = $storages->fetch_assoc()): ?>
            <option value="<?= $storage['id'] ?>"><?= $storage['name'] ?></option>
        <?php endwhile; ?>
    </select><br>

    <label for="motherboard">Motherboard:</label>
    <select id="motherboard" name="motherboard_id" required>
        <?php while ($motherboard = $motherboards->fetch_assoc()): ?>
            <option value="<?= $motherboard['id'] ?>"><?= $motherboard['name'] ?></option>
        <?php endwhile; ?>
        </select><br>
        <button type="submit">Create Build</button>
    </form>
</body>
</html>
