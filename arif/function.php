<?php declare(strict_types=1);  ?>
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
    echo number(5, 20);


    function sum(int $a , int $b){
       $c = $a+$b;
       return $c; 
    }
    echo "<br>";
    echo "sum : ".sum(5,10);


    function add_num(&$value){
        $value+=6;
    }
     $sum =2;
     add_num($sum);
     echo "<br>". $sum ."<br>";


     $test_array = [10,60,70,20,30,40,50];
     sort($test_array);
     $arry_lenght =count($test_array);

     for ($i=0; $i < $arry_lenght; $i++) { 
         echo $test_array[$i ];
         echo "<br>";
     }
     echo $test_array[2];

?>
</body>
</html>