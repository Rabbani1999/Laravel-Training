<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function myfunction($name, $age){
        echo "our team member name is : $name  and age : $age <br>";
    }

    myfunction("arif", 20);
    myfunction("rakib", 18);
    myfunction("sayed", 19);
    myfunction("sourov", 19);
    echo "<br>";

    function number(int $a, int $b){
        return $a+$b;
    }
    echo number(5, 20)


?>
</body>
</html>