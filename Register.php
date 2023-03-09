<?php
      include("header.php");
?>

<section style="padding-top:100px; padding-bottom:100px">
  <div class="container  regSection" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" name="myform" onsubmit="return validateform()">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">First Name</label> 
                    <input type="text" name="fName" id="fName"class="form-control" value="">
                    
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Last Name</label>
                    <input type="text" name="lName" id="lName"class="form-control" value=""/>
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email</label>
                    <input type="email" name="email" class="form-control" value=""  >
                    
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">password</label>
                    <input type="password" id="pswd" name="pswd"class="form-control" value="">
                    
                    </div>
                    
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      <input type="password" id="checkPassword" name="checkPassword"class="form-control" value="" />
                      
                    </div>
                  </div>

                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Select category</label>
                    <select name="category" class="form-control">
                            <option value="1">Add News</option>
                            <option value="2">Carousel</option>
                            <option value="3">Organization detail</option>
                            <option value="4">News letter</option>
                        </select>
                      
                    </div>
                  </div>

                  

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" name="Submit" id="Submit" value="Register" class="btn btn-primary btn-lg">
                  </div>

                </form>
                 
                        
              
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="pictures/hammenlinnaPic2.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Insert register date into database-->

<?php 
if(isset($_POST['Submit'])){
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$email=$_POST['email'];
$pw=$_POST['pswd'];
$category=$_POST['category'];

include("../webprogramming23_team3/db.php");

$sql="INSERT INTO shammi_login (fName, lName, email, password, category) 
  VALUES ('$fName','$lName', '$email','$pw', '$category')";
  

     
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

<!-- Validate the form data-->
<script type = "text/javascript">
function validateform(){  

//validating name
let name=document.myform.fName.value;  
// to check if name is empty of not  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}


//not allow to enter number
let lastname=document.myform.lName.value;  
// to check if last name is empty of not  
if (lastname==null || lastname==""){  
  alert("Last Name can't be blank");  
  return false;  
}



 //validating email 
 let email=document.myform.email.value;
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }

    //validating password
    let password=document.myform.pswd.value;  
    let password1=document.myform.checkPassword.value;
    if (password==null || password=="" || password.length<8){  
        alert("Password is required and it must have 8 characters");  
        return false;  
      }
    else if (password!== password1) {
      alert("Passwords do not match");  
        return false; 
    }
}  
</script>
<!--end of form validation-->

 
  
  


<?php include "footer.php" ?>
