<?php 
$title = "Newsletter"; 
include "header.php"?>

<!-- if section: if login -> show newsletter, if not, ask the user to login -->
<?php 
session_start();
?>

<div id = "subscribe">
    <h2><br>Subscribe to our newsletter to hear more about our website, 
    along with many news, tips and recommendations regarding the city of Hämeenlinna</h2>
    <h3>Type in your email address to reassure subscription</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email"><br><br>
                <input type = "submit" value = "Subscribe" name = "submit">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>

        
    <h3><br><br>Want to unsubscribe? Type in your email address to reassure action</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="form-row">
        <div class = "form-group col-md-3">
            <form method = "post" action = "">
                <input type = "text" name = "email" placeholder = "email"><br><br>
                <input type = "submit" value = "Unsubscribe" name = "delete">;
            <!-- <input type = "submit" value = "Unsubscribe" name = "delete">; -->
            </form>
        </div>
</div>

<?php

if (isset($_POST['submit']))
{
    include 'db.php'; 
    $newemail = $_POST['email'];

    /* COMPARE EMAIL */

    $sql = "SELECT * FROM shammi_login WHERE email = {$newemail}"; //action to be done 
    $query = mysqli_query($conn, $sql); //send it as a query 

        $result = mysqli_fetch_array($query); //puts the query into an array --> this is the array that i'll continue to work with 
    
        echo $result; 

        if ($result)  //if the action can be done --> if the email addresses can be compared
        {
            if ($newemail == $email) {
                echo "Thank you for subscribing to our newsletter, "; //+ login name --> personalized message 
            }
            else {
                echo "Thank you for subscribing to our newsletter, visitor."; //if didnt recognize the user email --> random visitor
            }
        } else 
        {
            echo "Error." , $conn -> error; 
        }

}
/*else if (isset($_POST['delete'])){

    include "nl_d.php"; 
*/

?>

<?php 
include "footer.php" 
?>