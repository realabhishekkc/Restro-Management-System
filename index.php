<?php
    session_start();
    if(isset($_GET['msg']) && $_GET['msg'] == 'subscribed'){
        echo "<script>window.alert('Successfully Subscribed!');</script>";
    }
    $title = "Home";
    include('include/header.php');
?>

  <!-- Carousel Start -->
  <section id="carousel-fit">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators cindicator">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2">
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/img-1.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img-2.jpg" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/img-3.jpg" alt="Image 1">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </section>
    <!-- Carausel End -->

<!-- About Us Start -->
<section class="about py-5">
        <div class="container py-md-5">
            <div class="about-w3ls-info text-center mx-auto">
                <h3 class="tittle-wthree pt-md-5 pt-3">About Us</h3>
                <p class="sub-tittle mt-3 mb-sm-5 mb-4">
                Maecenas bibendum leo vel augue pellentesque consequat. Nunc efficitur, eros quis pretium vehicula, massa massa laoreet mi, vel finibus massa mauris sit amet odio. 
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus pellentesque, 
                odio a tincidunt pharetra, mi nibh gravida risus, in lobortis felis velit a metus. Donec sed lorem pretium, lobortis dui ac, sodales risus. 
                Sed vel vulputate arcu. Vestibulum sagittis dolor mi, in lobortis diam facilisis eu. Nam luctus laoreet turpis nec viverra.
                </p>
                <a href="about.php" class="btn btn-danger submit">Know More</a>
            </div>
        </div>
    </section>
    <!-- About Us End -->
 
<?php
/*
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>
  </section>
  */
  ?>

      <!-- Last Content Starts -->
      <section class="last-content py-5">
        <div class="container py-md-3 text-center">
            <div class="last-lavi-inner-content px-lg-5">
                <h3 class="mb-4 tittle-wthree">Sign Up or Login For <span>Online </span> Ordering !</h3>
                <p class="px-lg-5">You are only few steps away from getting close to online ordering. <br>If you haven't registerd yet, then register now...</p>
                <div class="buttons mt-md-4 mt-3">
                    <a href="login.php" class="btn btn-default">Login</a>
                    <a href="register.php" class="btn btn1"> Register </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Last Content Ends -->
</section>
<?php
    include('include/footer.php');
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
