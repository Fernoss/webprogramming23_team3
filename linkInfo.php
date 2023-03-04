<?php 

session_start(); 
 	/*if(!isset($_SESSION['user0']) || (empty($_SESSION['user0'])))
		{ 	header("Location:../login.php");	 }*/
include("header.php");
?>
<section style="padding-top:100px; padding-bottom:100px; content-align:center;">
<div class="container wrapper">
    
    <h1>Organizational Information for the Customers</h1>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Organization Name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">City</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Distance from city center</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Distance"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Website URL</label>
      <div class="input-group">
         <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please enter the URL.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Picture to describe the organization</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Student offers and Description</label>
      <textarea id="w3review" name="validationCustom05" rows="6" cols="50" class="form-control" id="validationCustom05">
      </textarea>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
    
  
  <button class="btn btn-primary" type="submit">SUBMIT</button>
</form>
</div>


</div>

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