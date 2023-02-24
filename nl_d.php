<?php 
$title = "Unsubscribe";
include "header.php";

?>

<h2>Please enter the email for which you want to unsubscribe:<br><br></h2>
 
<form name = "unsub" method="post" action = ""> 

    <input type="text" name="emailentered" placeholder = "Email address" value=""/>  <br> 
    <input type="submit" name=submit value="Submit"/> 

</form> 

<?php 
 
if (isset($_POST['delete']))
{
    $email_entered = $_POST['emailentered']; 

    /* $query = mysqli_query($conn,
    "DELETE FROM 
    newsletter 
    WHERE email='$email_entered'"); */ 

    // if ($query)
    // { 
        echo "<h2> You have successfully unsubscribed from our newsletter. </h2>"; 
    }
    else 
    { 
        echo "Information not modified"; 
    }
//}
?> 
 
 
<p id="para1">You have successfully unsubscribed from this newsletter. 
 


 
<!--
    <h2><br><br>Unsubscribe from our newsletter</h2>
-->


<?php
/*
    if (isset($_GET['email']))
    {
    $a = $_GET['email']; 
    include 'test_db.php'; 
    }

    $result = mysqli_query($conn,
    "Select * from newsletter
    where email = '$a' ");

    $row = mysqli_fetch_array($result); 
?>

<form name = "buttons" method = "post" action = ""> 
    <input type = "submit" value = "Unsubscribe" name = "delete"> 
</form>

<?php 

if (isset($_POST['delete']))
{
    ?> <h2>Type in your email address below</h2>

    <form name = "delete" method = "post" action = "">
        <input type = "text" name = "email" placeholder = "Email" required value = "<?php echo $row['email']; ?>"><br><br>
        <input type = "submit" value = "Unsubscribe" name = "unsub"><br><br>
    </form> <?php

    if (isset($_POST['unsub']))
    {
        
        $query = mysqli_query($conn, 
        "DELETE from newsletter
        where email = '$a'");
        /*
        $query = mysqli_query($conn, 
        "DELETE from studentinfo
        where email = '$email'"); 
        */ 
 
        /*
        if ($query)
        {
            echo "<h2> You have successfully unsubscribed from our newsletter. </h2>"; 
        }
        else 
        { 
            echo "Information not modified"; 
        }
    }  
}
*/
?>