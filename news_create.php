<?php 
$title = "Newsletter"; 
include "header.php"?>

<!-- if section: if login -> show newsletter, if not, ask the user to login -->


<div id = "subscribe">
    <h2><br><br>Subscribe to our newsletter to hear more about our website, 
    <br>along with many news, tips and recommendations regarding the city of Hämeenlinna</h2>
    <h3>Type in your email address to reasure subscription</h3>
    <!-- Making a form where the user can input their data -->
    <div class ="row">
    <form method = "post" action = "">
        <input type = "text" name = "email" placeholder = "email"><br><br>
        <input type = "submit" value = "Subscribe" name = "submit">;
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
    $query = mysql_query($conn, $sql); //send it as a query 
    // $result = mysqli_fetch_array($query); //puts the query into an array --> this is the array that i'll continue to work with 
    // $result['email'];  //shammi_login table email part of the row 


    
    if ($query)  //if the action can be done --> if the email addresses can be compared
    {
        if ($newemail == $email) {
            echo "Successfull subscription";
        }
        else {
            echo "invalid email address, try again.";
        }
    } else 
    {
        echo "Error." , $conn -> error; 
    }

     /* variables that might be useful: 
        $iden = mysql_fetch_array($myData)
        $iden['correct_answer'] == $_POST['ans'] */
        

}
/*else if (isset($_POST['delete'])){

    include "nl_d.php"; 

} 
*/
?>

<?php 
include "footer.php" 
?>