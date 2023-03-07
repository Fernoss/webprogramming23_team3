<?php
    session_start();
    $title="news article";
    include 'header.php';
?>

<!--news form linked to the botton which is located under the news section in the website
when user is logged in can see that
-->
<form action="" method="post" id="newsarticle">

    <h5>Add your news here: <br></h5>

    <div>
        <label for="title">Add a title</label>
        <input type="text" name="title" required style="margin-top: 5px;width: 100%">
    </div>
    <div>
        <label for="link">put a valid link for the source of the news</label>
        <input type="url" name="link" required style="margin-top: 5px;width: 100%">
    </div>
    <div>
        <label for="category">Category</label>
        <select name="category" style="margin-top: 5px;width: 100%" >
            <option value="newstopic">Sport</option>
            <option value="newstopic">politics</option>
            <option value="newstopic">environment</option>
            <option value="newstopic">fashion</option>
            <option value="newstopic">economy</option>
            <option value="newstopic">business</option>
            <option value="newstopic">entertainment</option>
            <option value="newstopic">education</option>
            <option value="newstopic">others</option>
        </select>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" cols="50" style="margin-top: 5px;width: 100%"> </textarea>
    </div>
    <input type="submit" name="submit" value="submit" style="margin-top:10px">
</form>
<br>

<!-- 
    Usign Jquery Validation plugin to validate the client side form
-->
<script>
    $('#newsarticle').validate();
</script>

<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $category=$_POST['category'];
        $link=$_POST['link'];
        $description=$_POST['description'];


        // the fucntion will trim the whitespace and also encodes the html special chars 
        /*
            This "<script>location.href('http://www.hacked.com')</script>" will be converted to

            "&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;"

        */
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $title = test_input($title);
        $category = test_input($category);
        $link = test_input($link);

        // Also Validating the link in server side
        if(!filter_var($link, FILTER_VALIDATE_URL))
        {
            
            echo "Error: Invalid URL";
            return;
        }
        $description = test_input($description);
        $email = $_SESSION["username"];

        include 'db.php';
        $sql = "insert into fahimeh_news (title, category, link, description, email)
        values('$title', '$category', '$link', '$description', '$email')";
        if ($conn ->query($sql)===TRUE){
            echo "<p style='color:#ff6f31e0; text-align: center; font-size: 30px;'>Thanks, your news added successfully</p>";
        }
        else {
            echo "Eror:" .$conn->error;
        }
    }
?>
<?php include "footer.php" ?>