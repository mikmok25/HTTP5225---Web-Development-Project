<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP5225 Week 3</title>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <?php

    $hour = rand(0, 24);
    echo $hour < 12 ? "<h3>$hour AM</h3>" : "<h3>$hour PM</h3>";

    if ($hour < 12) {
        echo "<h2>Good Morning</h2>";
    } else if ($hour >= 12 && $hour <= 16) {
        echo "<h2>Good Afternoon</h2>";
    } else if ($hour > 16 && $hour <= 20) {
        echo "<h2>Good Evening</h2>";
    } else {
        echo "<h2>Good Night</h2>";
    }

    ?>

</body>

</html>