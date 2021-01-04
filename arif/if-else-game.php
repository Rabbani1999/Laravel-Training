<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
    <?php 

    $a = rand(1,10);

    echo $a ."<br>";
    
    if($a%2==0){
        echo "even number";
    }
    else{
        echo "odd number";
    }

    ?>
</body>
</html>