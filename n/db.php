<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db";

//create connection

$conn = @mysqli_connect($servername, $username, $password, $dbname);

//check the connection

if (!$conn) 
    die("Something went wrong <br /> Failed to connect to database");

?>