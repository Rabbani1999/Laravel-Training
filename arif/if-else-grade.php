<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade setup</title>
</head>
<body>
    <?php 

    $m = rand(20,100);

    echo "your mark is :". $m ."<br>";

    if($m<=100 && $m>=80){
        echo "A+";
    }
    elseif($m<80 && $m>69){
        echo "A";
    }
    elseif($m<70 && $m>59){
        echo "B";
    }
    elseif($m<60 && $m>49){
        echo "C";
    }
    elseif($m<50 && $m>32){
        echo "D";
    }
    else{
        echo "Fail";
    }
  

    ?>
</body>
</html>