<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x= 10.235;

        function myfunction()
        {
            echo "<p> we are try to the global variable  on the php $x </p>";
        }

        myfunction();
        echo "<h2> Global variable is the : $x </h2> <br>";
        echo " <h3> this is the line space  </h3>";
        print "<h3> php is  Fun</h3><br>";


        var_dump($x);
        $cars = array("tata", "volvo" , "toyata");
        var_dump($cars)


    ?>
</body>
</html>