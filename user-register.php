<?php $title = "Register"; include_once('include/header.php');?>
<?php $title = "Register";?>
<div class="inner-about inner-register">
    <div class="overlay-inner">
    </div>
</div>
<!-- Contact Starts -->
<section class="about py-5">
    <div class="container py-md-5">
        <h3 class="tittle-wthree text-center">Registration</h3>
        <p class="sub-tittle text-center mt-4 mb-sm-5 mb-4">Please fill up the form given below...</p>
        <div class="row">
            <div class="col-lg-4 contact-info-left"></div>
            <div class="col-lg-4 contact-right-wthree-info login">
                <h5 class="text-center mb-4"></h5>
                
                <form action="action/userRegistration-action.php" method="POST" name="usrReg">
                    
                    <div class="form-group mt-4">
                        <label> First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="" required>
                    </div>
                                        
                    <div class="form-group mt-4">
                        <label> Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label> Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required>
                    </div>
                                                            
                    <div class="form-group mt-4">
                        <label> Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label> Address</label>
                        <input type="text" class="form-control" name="address" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label> City</label>
                        <input type="text" class="form-control" name="city" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4" style="border-bottom: 2px solid #ddd; padding-bottom: 15px;">
                        <label> Gender: </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Male" checked> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Female"> Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="Other"> Other
                        </label>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label> Password</label>
                        <input type="password" class="form-control" name="password" placeholder="" required>
                    </div>
                    
                    <div class="form-group mt-4">
                        <label> Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit mb-4" name="userRegistration" onclick="return userRegistrationValidation()">Submit </button>

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