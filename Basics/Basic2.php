<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="c">
        <h1>Your Party status is here</h1>
        <?php
        $age = 8;
        if ($age > 18) {
            echo "You can go to the party.";
            echo "You are $age years old.";
        } else {
            echo "You can not go to the party.";
            echo "You are $age years old.";
        }

        $languages = array("Python", "C++", "C", "Java");
        // echo $languages[0];
        // echo $languages[1];
        // echo $languages[2];
        // echo $languages[3];
        echo "<br>";
        echo count($languages);
        echo "<br>";

        //Loops
        $a = 0;


        // while ($a < count($languages)) {
        //     echo "The valueof languages is :";
        //     echo $languages[$a];
        //     echo "<br>";
        //     $a++;
        // }

        // do {
        //     echo "The valueof languages is :";
        //     echo $languages[$a];
        //     echo "<br>";
        //     $a++;
        // } while ($a < count($languages));

        // for ($a=0; $a < count($languages); $a++) { 
        //     echo "The valueof languages is :";
        //     echo $languages[$a],"<br>"; 
        // }

        // foreach ($languages as $key => $value) {
        //     echo "$value<br>";
        // }
        
        function print_num($num){
            echo $num;
        }

        print_num(23);
        echo "<br>";
        print_num(45);

        ?>
    </div>
</body>

</html>