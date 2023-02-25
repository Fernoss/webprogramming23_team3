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

        
    <h3><br><br>Want to unsubscribe? Type in your email address to reassure action</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "nl_d.php">
                <!-- <input type = "text" name = "email" placeholder = "email"><br><br> -->
                <input type = "submit" value = "Unsubscribe" name = "delete">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>
</div>

<?php

if (isset($_POST['submit']))
{
    
    $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL); // filters a variable with a specified filter
                                        //removes illegal characters from the email address 
    
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) //checks whether the email is valid or not
    {
        include 'db.php'; //altered the database php to be able to test 
    $newemail = $_POST['email'];

    /* COMPARE EMAIL */

    $sql = "SELECT * FROM shammi_login WHERE email = '{$newemail}'"; //action to be done 
    $query = mysqli_query($conn, $sql); //send it as a query 

        if ($query)  //if the action can be done --> if the email addresses can be compared
        {
            $result = mysqli_fetch_array($query); //puts the query into an array --> this is the array that i'll continue to work with 
            if ($result) //checks if the email address exists aka logged in 
            {
                
                ///////////////////////////////////////////////////////////////////////////////
                $sql_l = "SELECT logID FROM shammi_login WHERE '{$result['email']}'"; //logid
                $query_l = mysqli_query($conn, $sql_l);
                
                if ($query_l)
                {
                    $shammi_logID =  mysqli_fetch_array($query_l);
                    echo $shammi_logID; 
                    echo print_r($shammi_logID); //IT WORKED :DDD IT MEANS I CAN ACCESS IT FINALLY

                    $sql_nl = "INSERT INTO victoria_newletter (news, subscribe, logID)
                    VALUES ('valami', '1', '$shammi_logID[0]')";
                    $query = mysqli_query($conn,$sql_nl);
                    
                    if ($query)
                    {
                        $fname = $result['fName']; 
                        echo "Thank you for subscribing to our newsletter, " . $fname; //+ login name --> personalized message
                    }
                    else 
                    { 
                        echo "Record not modified"; //if the query couldn't be done, it fails
                    }
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

?>

<?php 
include "footer.php" 
?>