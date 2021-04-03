<?php
    if(isset($_GET['msg']) && $_GET['msg'] == 'userRegistered'){
        echo "<script>window.alert('Successfully Created! Please Login to continue!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'incorrect'){
        echo "<script>window.alert('Username or Password Incorrect!');</script>";
    }
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Retro Management System - Home</title>
	  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </head>

  <body>
	  <nav class="navbar navbar-expand-lg navbar-white bg-dark">
    <a class="navbar-brand" href="index.php">Restro Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
         <a class="nav-link" href="index.php">Home</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </nav>

<?php $title = "Login";?>
<div class="inner-about inner-login">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Admin Login</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Welcome Back Admin!</p>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="action/adminLogin-action.php" method="POST" name="adLoginValidation">
                    
                    <div class="form-group mt-4">
                        <label>Username</label>
                        <input type="text" class="form-control" name="a_username" placeholder="" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="password" class="form-control" name="a_password" placeholder="" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit mb-4 float-left" name="adminLogin" onclick="return adminLoginValidation()">Submit </button>

                </form>

            </div>
            <div class="col-lg-4 contact-info-left"></div>
        </div>
    </div>
</section>
    <!-- Contact Ends -->
<?php 
    include_once('include/footer.php');
?>