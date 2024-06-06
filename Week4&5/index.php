<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week4&5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <h1>Loops</h1>
    <?php
    function getUsers()
    {
        $url = 'users.json';
        $data = file_get_contents($url);
        echo gettype($data);
        return json_decode($data, true);
    }

    $users = getUsers();

    if (!empty($users)) {

        echo "<div class='d-flex flex-wrap'>";
        foreach ($users as $user) {
            echo "
                <div class='col-sm-6'>
                    <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$user['name']}</h5>
                        <p class='card-text'>{$user['address']['geo']['lat']} | {$user['address']['geo']['lng']}</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                    </div>
                </div>";

        }
    }

    echo "</div>";
    ?>
</body>

</html>