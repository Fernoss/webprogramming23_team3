<?php 
$title = "A simple CRUD app"; 
include "header.php"?>

<div id = "subscribe">
    <h2><br><br>Subscribe to our newsletter to hear more about our website, 
    <br>along with many news, tips and recommendations regarding the city of Hämeenlinna</h2>
    <!-- Making a form where the user can input their data -->
    <div class ="row">
    <form method = "post" action = "">
        <input type = "text" name = "fname" placeholder = "First name"><br><br>
        <input type = "text" name = "lname" placeholder = "Last name"><br><br>
        <input type = "text" name = "email" placeholder = "email"><br><br>
        <input type = "submit" value = "Subscribe" name = "submit">;
        <input type = "submit" value = "Update your info" name = "upd">;
        <input type = "submit" value = "Unsubscribe" name = "delete">;
        
    </form>
    </div>
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
else if (isset($_POST['upd'])){

    include "nl_u.php"; 

}else if (isset($_POST['delete'])){

    include "nl_d.php"; 

}

?>

<?php 
include "footer.php" 
?>