<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for ($a=0; $a <=100 ; $a+=10) { 
        echo "$a <br>";
    }
    echo "<br>";
    echo "<br>";
    $number = [12,23,34,45,23,24,56,12,45];
    foreach ($number as $value) {
        echo "$value <br>";
    }

?>
</body>
</html>