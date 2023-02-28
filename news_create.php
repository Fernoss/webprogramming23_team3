<?php 
$title = "Newsletter"; 
include "header.php"?>

<!-- if section: if login -> show newsletter, if not, ask the user to login -->

<div id = "subscribe">
    <h2><br><br>Subscribe to our newsletter to hear more about our website, 
    along with many news, tips and recommendations regarding the city of Hämeenlinna</h2>
    <h3>Type in your email address to reassure subscription</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email" required><br><br>
                <input type = "submit" value = "Subscribe" name = "submit">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>
    </div>
        
    <h3><br><br>Want to unsubscribe? Type in your email address to reassure action</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "nl_d.php">
                <input type = "submit" value = "Unsubscribe" name = "delete">;
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['submit']))
{
    
    $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);  //removes illegal characters from the email address 
    
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) //checks whether the email is valid or not
    { 
        include 'db.php'; //altered the database php to be able to test 
        $newemail = $_POST['email']; 

    /* COMPARE EMAIL */

        $sql = "SELECT * FROM shammi_login WHERE email = '{$newemail}'";
        $query = mysqli_query($conn, $sql); 

        if ($query)  //if the action can be done --> if the email addresses can be compared
        {
            $result = mysqli_fetch_array($query);
            if ($result) //checks if the email address exists aka registered in 
            {
                
                //in this section it should check whether the user is already subscribed or not 
                // --> to avoid duplication 

                    $news = 'this is just a test '; 
                    $subscribe = 1; 

                    $sql= "INSERT INTO viktoria_newsletter (newsletter, subscribe, email) 
                    VALUES ('$news', '$subscribe', '$newemail')";                              
                    
                    
                    if ($conn -> query($sql) === TRUE)
                    {
                        $query = mysqli_query($conn, "SELECT fName from shammi_login where email = '{$newemail}'"); 

                        if ($query) 
                        {
                            $fname = mysqli_fetch_array($query);
                            echo "Thank you for subscribing to our newsletter, {$fname['fName']}"; //+ login name --> personalized message
                        }
                    }
                    else 
                    { 
                        echo "Error: " .$conn->error; 
                    }
                
            }
            else 
            {
                echo "Thank you for subscribing to our newsletter, visitor."; //if didnt recognize the user email --> random visitor
            }
        } 
        else 
        {
            echo "Error." , $conn -> error;
        }
    }
    else 
    {
        echo "The email address you entered is not valid. Try again. ";
    }
}
/*else if (isset($_POST['delete']))
{
    include "nl_d.php"; 
}*/

?>

<?php 
include "footer.php" 
?>