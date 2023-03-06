<?php
$title = "Login";


if(isset($_POST['submit']) || !empty($_POST['submit']) || ($_POST['submit']=="Login"))
	{
	//Initialize session
	session_start();
  include "db.php";

$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//$myusername = $mysqli -> real_escape_string($myusername);
//$mypassword = $mysqli -> real_escape_string($mypassword);


if($sql="SELECT * FROM shammi_login WHERE email='$myusername' AND  password='$mypassword'"){
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
  
  
if($row['category']==1){
	   $_SESSION['username'] = $_POST['email'];

  		//Jump to add news section
    header("Location: http://localhost:81/webprogramming23_team3/newsarticle.php"); // Rewrite the header
    
		                  

		    }
    		   else if($row['category']=='2')
	          {
		          $_SESSION['username'] = $_POST['email'];	
              //Jump to add carousel section   
		          header('Location:http://localhost:81/webprogramming23_team3/index.php#carousel');
		        }

            else if($row['category']=='3')
	          {
			        $_SESSION['username'] = $_POST['email'];
              //Jump to add enter organizational detail section	   
			        header('Location:http://localhost:81/webprogramming23_team3/linkInfo.php');
		        }	

		      else 
          {
	        //Jump to news letter section
		      header('Location:http://localhost:81/webprogramming23_team3/news_create.php');
		      }
        }}

        else{
          echo("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Invalied user name or password')
          </SCRIPT>");
        }
        }
        
      }

        

?>
<?php 
include"../webprogramming23_team3/header.php"; 
?>



<section class="vh-100" style="padding-top:100px;">
    
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" name="loginForm">
           
          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label labelMod" for="form3Example3">Email address</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label labelMod" for="form3Example4">Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">
            <p >Don't have an account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">Register</a></p>
             
          </div>

        </form>
      </div>
    </div>
  </div>

  
</section>
<?php include "../webprogramming23_team3/footer.php" ?>