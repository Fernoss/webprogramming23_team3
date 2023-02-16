<?php 
$title = "A simple CRUD app"; 
include "header.php"?>

<div class = "subscribe">
    <h2><br><br>Subscribe to our newsletter to hear more about our website, <br>along with many news, tips and recommendations regarding the city of Hämeenlinna</h2>
    <!-- Making a form where the user can input their data -->
    <form method = "post" action = "">
        <input type = "text" name = "fname" placeholder = "First name"><br><br>
        <input type = "text" name = "lname" placeholder = "Last name"><br><br>
        <input type = "text" name = "email" placeholder = "email" required><br><br>
        <input type = "submit" value = "Subscribe" name = "submit">
    </form>
    <form method="POST" action="nl_update_and_delete.php">
        <input type="submit" value = "Unsubscribe" name = "delete">
    </form>
</div>

<?php

if (isset($_POST['submit']))
{
    if (isset($_POST['email'])){
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    include 'test_db.php'; 
    $sql = "insert into newsletter (fname, lname, email)
    values ('$fname', '$lname', '$email')";
    
        if ($conn -> query($sql) === TRUE ) 
        {
            echo "Thank you for subscribing to our newsletter."; 
        } else 
        {
            echo "Something went wrong. Try again. " , $conn -> error; 
        }
    }
    else {
        echo "Please give us your email address. ";
    }
} 
?>

<?php 
include "footer.php" 
?>