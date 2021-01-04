<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>
<body>
<!-- there is the php code -->
    <?php 

  

    $i =1;
    while ($i <= 10) {

        $a = rand(1,10);
        echo "<br>";

        echo $a ."<br>";

        if($a%2==0){
            echo "even number";
        }
        else{
            echo "odd number";
        }

        $i++;
    }

    
 


    ?>
</body>
</html>