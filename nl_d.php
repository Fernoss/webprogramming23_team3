<?php 
$title = "Unsubscribe";
include "header.php";

?>

<h2><br><br>Please enter the email for which you want to unsubscribe:<br><br></h2>
<div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email" required><br><br>
                <input type = "submit" value = "Unsubscribe" name = "delete">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>
</div>

<?php 
 
if (isset($_POST['delete']))
{
    include 'db.php';
    $newemail = $_POST['email'];

    $query = mysqli_query($conn,
    "DELETE FROM 
    viktoria_newsletter 
    WHERE email='$newemail'"); 

    if ($query)
    { 
        echo "<h2> You have successfully unsubscribed from our newsletter. </h2>"; 
    }
    else 
    { 
        echo "Information not modified"; 
    }
}
?> 