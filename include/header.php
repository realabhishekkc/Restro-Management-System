<!DOCTYPE html>
<html>
  <head>
	  <title>Retro Management System - - <?php echo $title; ?></title>
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
          <a class="nav-link" href="contact.php">Contact</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="products.php">Services</a>
       </li>
       <?php if(isset($_SESSION['admin-id'])){ ?>
           <li class="nav-item ">
               <a class="nav-link" href="admin/admin.php"> Profile</a>
           </li>
           <li class="nav-item ">
               <a class="nav-link" href="logout.php"> Logout</a>
          </li>
        <?php } ?>
       <?php if(isset($_SESSION['user-id'])){ ?>
          <li class="nav-item ">
               <a class="nav-link" href="user/user.php"> Profile</a>
          </li>
          <li class="nav-item ">
               <a class="nav-link" href="logout.php"> Logout</a>
          </li>
        <?php } else { if(!isset($_SESSION['admin-id'])) { ?>
          <li class="nav-item ">
               <a class="nav-link" href="user-login.php"> Login</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="user-register.php"> Register</a>
          </li>
        <?php } } ?>
      </ul>
    </div>
 </nav>
  </div> 
