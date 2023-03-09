<?php 

session_start(); 
	
include("../webprogramming23_team3/header.php");
include("../webprogramming23_team3/db.php");
$a = $_GET['id'];
//$sql = " SELECT * FROM shammi_linkinfo WHERE linkId='$_GET[id]'";
$result = mysqli_query($conn," SELECT * FROM shammi_linkinfo WHERE linkId='$_GET[id]'");
$row= mysqli_fetch_array($result);

  ?>
				


<section style="padding-top:100px; padding-bottom:100px; content-align:center;">
<div class="container wrapper">
    
<div class="row">
      <div class="col-md-10">
    <h2>Delete Organizational Information for the Customers</h2>
      </div>
      <div class="col-md-2">
      <a href="../webprogramming23_team3/linkInfoView.php" class="btn btn-primary" style="background-color:#ff6e31; color:black;">View company detail</a>
      </div>
    </div>
<form class="needs-validation" novalidate method="POST" action="">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Company Name</label>
      <input type="text" class="form-control" id="cName" name="cName"  value="<?php echo $row['orgName']; ?>">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom01">City</label>
      <input type="text" class="form-control" id="comCity" name="comCity"  value="<?php echo $row['city']; ?>">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Distance from city center</label>
      <input type="" class="form-control" id="distance" name="distance" value="<?php echo $row['distance']; ?>"  >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Website URL</label>
      <div class="input-group">
         <input type="text" class="form-control" id="url" name="url"  aria-describedby="inputGroupPrepend" value="<?php echo $row['url']; ?>">
        <div class="invalid-feedback">
          Please enter the URL.
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-6 mb-3">
  
  <input type="submit" class="btn btn-primary" value="Delete" name="submit" id="submit">
  </div>
</form>
</div>
</div>


<?php 
include("../webprogramming23_team3/db.php");

if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM shammi_linkinfo WHERE linkId='$_GET[id]'");
    if($query){
        echo "Record Deleted with id: $_GET[id] <br>";
        //echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();

?>



<?php include("footer.php");?>