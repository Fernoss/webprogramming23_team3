<?php
$servername = "db";
$username = "team3";
$password = "TeamThree3db";
$dbname = "team3";
// creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//checking the connection
if ($conn -> connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>