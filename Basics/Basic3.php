<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "Souvik";

    echo "The length of the string is " . strlen($str) . " Thanks";
    echo "<br>";

    echo "The number of words in the string is " . str_word_count($str) . " Thanks";
    echo "<br>";
    
    echo "The reverse string is " . strrev($str) . " Thanks";
    echo "<br>";

    echo "The search for i in the string is " . strpos($str,"i") . " Thanks";
    echo "<br>";

    echo "The replaced string is " . str_replace("i","o",$str) . " Thanks";
    echo "<br>";
    ?>
    
</body>
</html>