<?php 

session_start(); 
	
include("header.php");
?>
<section style="padding-top:100px; padding-bottom:100px; content-align:center;">
<div class="container wrapper">
    
    <h1>Organizational Information for the Customers</h1>
<form class="needs-validation" novalidate method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Company Name</label>
      <input type="text" class="form-control" id="cName" name="cName"placeholder="Company Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom01">City</label>
      <input type="text" class="form-control" id="comCity" name="comCity" placeholder="Company Name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Distance from city center</label>
      <input type="text" class="form-control" id="distance" name="distance" placeholder="Distance"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Website URL</label>
      <div class="input-group">
         <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please enter the URL.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Picture to describe the organization</label>
      <input type="file" class="form-control" id="picture" name="picture"placeholder="Share picture" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationCustom05">Student offers and Description</label>
      <textarea  rows="6" cols="50" class="form-control" id="desc" name="desc">
      </textarea>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="col-md-6 mb-3"> 
  <input type="submit" class="btn btn-primary" value="Submit" name="Submit" id="Submit">
  </div>
</form>
</div>


</div>

<?php 
if(isset($_POST['Submit'])){
$cName=$_POST['cName'];
$cCity=$_POST['comCity'];
$distance=$_POST['distance'];
$url=$_POST['url'];
$picture=$_POST['picture'];
$desc=$_POST['desc'];
$email=$_SESSION['username'];

include("db.php");

$sql="INSERT INTO shammi_linkinfo (orgName, city, distance, url, image,description, email) 
  VALUES ('$cName','$cCity', '$distance','$url', '$picture', '$desc', '$email')";

       
if($conn->query($sql)==TRUE){
  echo("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Successfully Registered!')
  </SCRIPT>");
  
  }

    else {
            echo "Error :".$conn->error; 
    }

}


?>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php include("footer.php");?>