<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP5225 Week3 Part2</title>

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

    $magicNumber = rand(0, 100);
    echo $magicNumber < 12 ? "<h3>$magicNumber</h3>" : "<h3>$magicNumber</h3>";

    if ($magicNumber % 3 == 0 && $magicNumber % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($magicNumber % 3 == 0) {
        echo "Fizz";
    } elseif ($magicNumber % 5 == 0) {
        echo "Buzz";
    } else {
        echo $magicNumber;
    }


    ?>

</body>

</html>