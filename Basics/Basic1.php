<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI',3.14);
        echo "Hello World! This is printing using php";
        echo "<br>";
        $var1 = 34;
        $var2 = 20;
        $var3 = "Souvik";
        echo "<br>";
        echo $var1;
        echo $var2;
        echo "<br>";
        echo $var1 + $var2;
        echo "<br>";
        echo var_dump($var1 == $var2);
        echo "<br>";
        echo var_dump($var1);
        echo "<br>";
        echo var_dump($var3);
        echo "<br>";
        echo PI;
        
        ?>
    </div>
</body>

</html>