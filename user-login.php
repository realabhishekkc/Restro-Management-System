<?php
    session_start();
    if(isset($_GET['msg']) && $_GET['msg'] == 'userRegistered'){
        echo "<script>window.alert('Successfully Created! Please Login to continue!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'incorrect'){
        echo "<script>window.alert('Username or Password Incorrect!');</script>";
    }
?>

<?php $title = "Login"; include_once('include/header.php');?>
<div class="inner-about inner-login">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Login</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Welcome Back, Dear User!!!</p>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                <form action="action/userLogin-action.php" method="POST" name="usrLoginValidation">
                    
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4 float-left" name="userLogin" onclick="return userLoginValidation()">Submit</button>
                    <a href="admin-login.php" style="display: block; float: right; margin: 15px 0;"><small>Continue as Admin</small></a>
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