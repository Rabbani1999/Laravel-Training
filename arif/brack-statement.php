<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x= rand(1,10);
    echo "$x <br><br>";

    // for ($i=1; $i <=10 ; $i++) { 
    //    if ($i==$x) {
    //        break;
    //    }
    //    echo "the value : $i <br><br>";
    // }
#continue function 

for ($i=0; $i <=20 ; $i++) { 
    if ($i = $x) {
        continue;
    }
    echo "the continue on : $i";
}


?>
</body>
</html>