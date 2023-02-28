<?php 
$title = "Unsubscribe";
include "header.php";

?>

<h2><br><br>Please enter the email for which you want to unsubscribe:<br><br></h2>
<div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email" required><br><br>
                <input type = "submit" value = "Unsubscribe" name = "del">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>
</div>

<?php 
 
if (isset($_POST['del']))
{
    $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); //filters the email address from 'illegal' characters (like ó, ő) 

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) //checks whether the email is valid or not
    { 
        include 'db.php';
        $newemail = $_POST['email'];

        /* CHECKS EMAIL */

        $sql = "SELECT * FROM shammi_login WHERE email = '{$newemail}'"; 
        $query = mysqli_query($conn, $sql);  

        if ($query)  //if the action can be done --> if the email addresses can be compared
        {
            $result = mysqli_fetch_array($query);  
            if ($result) //checks if the email address exists in the viktoria_newsletter table 
            {
             
                $query = mysqli_query($conn,
                "DELETE FROM 
                viktoria_newsletter 
                WHERE email='$newemail'"); 

                if ($query)
                { 
                    $query = mysqli_query($conn, "SELECT fName from shammi_login where email = '{$newemail}'"); 

                        if ($query) 
                        {
                            $fname = mysqli_fetch_array($query);
                            echo "You have successfully unsubscribed from our newsletter, {$fname['fName']}"; //+ login name --> personalized message
                        }
                }
                else 
                { 
                    echo "Information not modified"; 
                }  
            }
            else //if the input email isnt in the viktoria_newsletter table
            {
                echo "It seems like this email hasn't subscribed to our newsletter yet. Please type in a registered email address.";
            }
        } 
        else 
        {
            echo "Error." , $conn -> error;
        }
    }
    else 
    {
        echo "The email address you entered is not valid. Try again. "; //(ex.: @@, etc)
    }
}
?>