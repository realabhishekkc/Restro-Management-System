<!DOCTYPE html>
<html>
  <head>
	  <title>Retro Management System - About Us</title>
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
          <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
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

  <div class="inner-about inner-about">
        <div class="overlay-inner">
        </div>
    </div>

<section>
    <!-- About Us Start -->
    <section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">About Us</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                Morbi at feugiat augue. Nullam imperdiet lectus in venenatis fermentum. Aenean tristique felis quis odio pulvinar bibendum. Pellentesque id scelerisque tortor. Proin pretium mattis pretium. 
                Curabitur cursus bibendum ultrices. Integer eget ligula sagittis, imperdiet sem et, 
                ornare eros. Praesent rutrum ac ipsum et ultrices. Pellentesque posuere nunc facilisis nunc feugiat, ut fermentum tortor tempor. 
                Suspendisse iaculis leo ac sem viverra, nec vestibulum orci consectetur. Nam nec dignissim quam. 
                Phasellus ipsum urna, dictum vel lectus id, bibendum vestibulum ligula. Duis ut maximus eros. 
                In ornare risus et sollicitudin accumsan. Donec molestie laoreet metus a faucibus.
                </p>
            </div>
        </div>
    </section>
    <!-- About Us End -->
    <!-- Services Start -->
    <section class="services text-center py-5" id="services">
        <div class="container py-md-5">
            <h3 class="tittle-wthree text-center">Our Services</h3>
            <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">We do our best to provide our customer a great satisfaction.</p>
            <div class="row ser-sec-1">
                <div class="col-md-6 ser-w3pvt-gd-wthree">
                    
                    <!-- Icon ends here -->
                    <div class="service-content">
                        <h5>Best Quality</h5>
                        <p class="serp">
                            We provide you with the best quality food from our experienced chiefs.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row ser-sec-1">
              <div class="col-md-4 ser-w3pvt-gd-wthree border-bottom-0 bottom-vj-gds">
                  <!-- Icon ends here -->
                  <div class="service-content">
                      <h5>Call Support</h5>
                      <p class="serp">
                          For more details on products you can directly call to our number.
                      </p>
                  </div>
              </div>
              <div class="col-md-4 ser-w3pvt-gd-wthree border-bottom-0 bottom-vj-gds">
                  <!-- Icon ends here -->
                  <div class="service-content">
                      <h5>Queries to admins</h5>
                      <p class="serp">
                          If you have any doubt, you can sent your queries to our admins.
                      </p>
                  </div>
              </div>
                  <!-- Icon ends here -->
              </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
</section>
<?php include_once('include/footer.php');?>