<?php
$insert = false;
if (isset($_POST['name'])) {

    //set connections variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a database connection
    $conn = mysqli_connect($server, $username, $password);

    //check for connection success
    if (!$conn) {
        die("Connection to the database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $age  = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `us_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if ($conn->query($sql) == true) {
        // echo "Successfully inserted";
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEMK Trip Form
    </title>
</head>

<body>
    <h3>Welcom to UEMK US Trip Form</h3>
    <p>Enters your details and submit your form to confirm your participation in the trip.</p>
    <?php
    if ($insert == true) {
        echo "<p class = 'submitMsg'>Successfully Submitted</p>";
    }
    ?>


    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your full name">
        <br>
        <br>
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <br>
        <br>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <br>
        <br>
        <input type="email" name="email" id="email" placeholder="Enter your email address">
        <br>
        <br>
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
        <br>
        <br>
        <textarea name="desc" id="desc" cols="20" rows="10" placeholder="Enter any other information here"></textarea>
        <br>
        <br>

        <button class="btn">Submit</button>
    </form>
</body>

</html>