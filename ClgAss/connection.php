<?php
//database configuration
$host = "localhost";
$username = "root";
$password = "";
$db = "ass";

//create connection
$con = mysqli_connect($host,$username,$password,$db);

//check connection status
if(!$con){
    die("Connection failed:".mysqli_connect_error());
}

?>