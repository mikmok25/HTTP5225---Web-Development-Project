<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week2</title>
</head>

<body style="font-family: 'Arial', sans-serif;">
    <h1>Welcome to HTTP5225</h1>
    <ul>
        <?php
        $prog_lang = array("Javascript", "PHP", "C#");

        for ($x = 0; $x < count($prog_lang); $x++) {
            echo "<li>$prog_lang[$x]</li>";
        }; 
        ?>

    </ul>

    <?php 

    $fname = "Mick";
    $lname = "Nixon";

    echo "<h2>Hello my name is $fname $lname</h2>";
    
    
    ?>


</body>

</html>