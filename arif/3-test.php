<!-- //php data type object -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class car {
    public $color;
    public $model;
    public function __construct($color , $model){
        $this->color =$color;
        $this->model = $model;

    }
    public function massage()
    {
        return "my car is a " . $this->color ." " .$this->model . " ";   
    }

}
$mycars =new car("black" , "corolla");
echo $mycars ->massage();
$mycars = new car("red", "bmw");
echo "<br>";
echo $mycars -> massage();
?>   
</body>
</html>