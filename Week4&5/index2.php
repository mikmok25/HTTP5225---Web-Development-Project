<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <style>
        body {
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Hello World</h1>
    <?php
    // Database connection
    $connect = mysqli_connect("localhost", "root", "root", 'http5225-week5');
    if (!$connect) {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
    }

    // Pagination setup
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $recordsPerPage = 10;
    $offset = ($page - 1) * $recordsPerPage;

    // Query to fetch records
    $query = "SELECT `Name`, `Hex` FROM colors LIMIT $offset, $recordsPerPage";
    $results = mysqli_query($connect, $query);

    if (!$results) {
        echo 'Error Message: ' . mysqli_error($connect);
    } else {
        echo 'Total records found: ' . mysqli_num_rows($results) . '<br>';
        // Display records
        foreach ($results as $result) {
            echo "<h1>{$result["Name"]}</h1>";
            echo "<div style='height: 50px; width: 100px; background: {$result["Hex"]}; margin-bottom: 10px;'></div>";
        }
    }

    // Calculate total pages
    $totalRecordsResult = mysqli_query($connect, 'SELECT COUNT(*) AS total FROM colors');
    $totalRecords = mysqli_fetch_assoc($totalRecordsResult)['total'];
    $totalPages = ceil($totalRecords / $recordsPerPage);

    // Display pagination
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
    ?>
</body>
</html>
