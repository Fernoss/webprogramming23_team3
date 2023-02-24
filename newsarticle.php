<!--Fahimeh newsform -->

<?php
$title="news article";
include 'header.php';
?>
<!--news form linked to the botton which is located under the news section in the website -->
<form action="" method = "post" id="newsarticle">

    <h5>Add your news here: <br></h5>

<input type= "text" placeholder = "Add a title" name="title" required  >
<br>
<br>
<input type= "text" placeholder = "put a valid link for the source of the news" name="link" required>
<br>
<br>
<select name="category">
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
<br>
<br>
<textarea id="description" name="description" rows="4" cols="50"> description</textarea>
<br>
<br>
<input type="submit" name = "submit" value="submit">
</form>
<br>

<?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category=$_POST['category'];
    $link=$_POST['link'];
    $description=$_POST['description'];

    include 'dbtable.php';
    $sql = "insert into newstable (title, category, link, description)
    values('$title', '$category', '$link', '$description')";
    if ($conn ->query($sql)===TRUE){
        echo "Your news added successfully";
    }
    else {
        echo "Error:" .$conn->error;
    }
}
?>
<?php include "footer.php" ?>


