<?php 
$title = "Unsubscribe";
include "header.php";

?>

<div class = "create" id = "create"> <!--this way I can implemend stylings on my page-->

<h2 id = "h2" onmouseover = deleteOn() onmouseout = deleteOff()><br><br>Please enter the email that you want to unsubscribe:<br><br></h2>
<div class ="form-row">
        <div class = "form-group">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email" required><br><br>
                <input type = "submit" value = "Unsubscribe" name = "del">;
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

        $sql = "SELECT * FROM viktoria_newsletter WHERE email = '{$newemail}'"; 
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
                            if (mysqli_num_rows($query) == 0)
                            {
                                echo '<p id = final>'. "You have successfully <br> unsubscribed from our newsletter". '</p>'; 
                            }
                            else 
                            {
                            $fname = mysqli_fetch_array($query);
                            echo '<p id = final>'. "You have successfully <br> unsubscribed from our newsletter, {$fname['fName']}". '</p>';
                            } 
                        }
                }
                else 
                { 
                    echo '<p>'. "Information not modified" . '</p>'; 
                }  
            }
            else //if the input email isnt in the viktoria_newsletter table
            {
                echo '<p>'. "It seems like this email hasn't subscribed to our newsletter yet. 
                Please type in a registered email address." . '</p>';
            }
        } 
        else 
        {
            echo '<p>'. "Error." , $conn -> error . '</p>';
        }
    }
    else 
    {
        echo '<p>'. "The email address you entered is invalid. Try again. " . '</p>'; //(ex.: @@, etc)
    }
}
?>
</div>
<?php 

include "footer.php";

?>