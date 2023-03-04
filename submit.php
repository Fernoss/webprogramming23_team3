<?php
// if(isset($_SESSION['user_id'])) {
    if(isset($_POST['submit'])) {
        $location = $_POST['location'];
        $link = $_POST['link'];
        $description = $_POST['description'];
        include 'db.php';
        $sql = "insert into joonas_carousel (location, link, description)
        values('$location','$link','$description')";

        if($conn -> query($sql) === true){
            header("Location: submit_success.php"); // redirect to submit_success.php
            exit; // exit to prevent further execution of code
        }
        else{
            echo "Error: " . $conn -> error;
        }
    }
// } else {
//     // User is not logged in, display an error message, NOT WORKING
//     echo <form method="post" name="locForm">"Error: You must be logged in to add information.";
// }
?>