<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $frame = new class{
        private $readonly ="read only private comment";
        public function view(){
            echo "Now the private class is show <br>";
        }

        static function hello(){
            echo "Now the static function is show<br>";
        }
    };

    $frame -> view();
    $frame :: hello(); 


    class obj {
       public $var = "hello obj class";

    };

    $test = new class("this is the test") extends obj{

    };

    echo $test -> obj;


?>
</body>
</html>