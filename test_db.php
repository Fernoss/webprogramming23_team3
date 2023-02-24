<?php

$servername = "db";
$username = "test"; 
$password = "test"; 
$dbname = "test";  

//creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//checking the connection
if ($conn->connect_error) 
{
die("Connection failed; " . $conn ->connect_error); 
}


?>