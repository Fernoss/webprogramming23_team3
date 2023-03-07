<?php 
$title = "Newsletter"; 
include "header.php"?>

<div class = "create" id = "create"> <!--this way I can implemend stylings on my page-->

<h1 id = "h1" onmouseover = titleOn() onmouseout = titleOff()> <br><br>Subscribe to our newsletter </h1>
    <h3 id = sub-title><br>To hear more about our website, 
    along with many news, tips and recommendations regarding the city of Hämeenlinna<br></h3>
    <div class ="form-row ">
        <div class = "form-group">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email" required><br><br>
                <input type = "submit" value = "Subscribe" name = "submit">;
            </form>
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

        $query = mysqli_query($conn, "SELECT * FROM shammi_login WHERE email = '{$newemail}'"); 

        if ($query)  //if the action can be done --> if the email addresses can be compared
        {
            $result = mysqli_fetch_array($query);
            if ($result) //checks if the email address exists a.k.a. registered  
            {
                
                //in this section it should check whether the user is already subscribed or not 

                $query = mysqli_query($conn, "SELECT * from viktoria_newsletter WHERE email = '{$newemail}'");

                if ($query && mysqli_num_rows($query) > 0) // if it gives back an actual result a.k.a. the data is in the viktoria_newsletter
                {
                    echo '<p>'. "You have already subscribed to our newsletter." . '</p>';
                }
                else if ($query && mysqli_num_rows($query) == 0) //if it gives back an empty result a.k.a. the user hasnt subscribed yet 
                {
                    $newsletter = 'registered user'; 
                    $subscribe = 1; 

                    $sql= "INSERT INTO viktoria_newsletter (newsletter, subscribe, email) 
                    VALUES ('$newsletter', '$subscribe', '$newemail')";                              
                    
                    
                    if ($conn -> query($sql) === TRUE)
                    {
                        $query = mysqli_query($conn, "SELECT fName from shammi_login where email = '{$newemail}'"); 
                                                    //to be able to give personalized feedback to subscription
                        if ($query) 
                        {
                            $fname = mysqli_fetch_array($query);
                            echo '<p id = final>'. "<br>Thank you for subscribing to our newsletter, {$fname['fName']}." . '</p>';
                        }
                    }
                    else 
                    { 
                        echo '<p>'. "Error: " .$conn->error . '</p>';
                    }
                }
                else 
                {
                    echo '<p>'. "Error: " .$conn->error . '</p>';
                }
            }
            else //put the user's email into the newsletter table as "visitor"
            {
                $query = mysqli_query($conn, "SELECT * from viktoria_newsletter WHERE email = '{$newemail}'");

                if ($query && mysqli_num_rows($query) > 0) // if it gives back an actual result a.k.a. the data is in the viktoria_newsletter
                {
                    echo '<p>'. "You have already subscribed to our newsletter." . '</p>';
                }
                else if ($query && mysqli_num_rows($query) == 0) //if it gives back an empty result a.k.a. the user hasnt subscribed yet 
                {
                    $newsletter = 'visitor'; 
                    $subscribe = 1; 

                    $sql= "INSERT INTO viktoria_newsletter (newsletter, subscribe, email) 
                    VALUES ('$newsletter', '$subscribe', '$newemail')";                              
                    
                    
                    if ($conn -> query($sql) === TRUE)
                    {
                        echo '<p>'. "Thank you for subscribing to our newsletter, visitor." . '</p>'; //if didnt recognize the user email --> random visitor
                    }   
                    else 
                    { 
                        echo '<p>'. "Error: " .$conn->error . '</p>';
                    }
                }
                else {
                    echo '<p>'. "Error: " .$conn->error . '</p>';
                }
            }
        } 
        else 
        {
            echo '<p>'. "Error: " .$conn->error . '</p>';
        }
    }
    else 
    {
        echo '<p>'."The email address you entered is invalid. Try again. " .'</p>';
    }
}
?>
<h4 class ="want-unsub"><br><br>Want to unsubscribe?</h4>
    <div class ="form-row">
        <div class = "form-group">
            <form method = "post" action = "nl_d.php">
                <input type = "submit" value = "Unsubscribe" name = "delete">;
            </form>
        </div>
    </div>

<?php 
include "footer.php" 
?>
</div>