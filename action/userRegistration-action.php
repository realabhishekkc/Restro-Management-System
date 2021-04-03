<?php
    require "../classes/user.class.php";
    $user = new User();

    if(isset($_POST['userRegistration'])){
        // Datas from form
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $user->setUserFname($fname);
        $user->setUserLname($lname);
        $user->setUserEmail($email);
        $user->setUserPhone($phone);
        $user->setUserAddress($address);
        $user->setUserCity($city);
        $user->setUserGender($gender);
        $user->setUserPassword($password);
        $user->setUserRepassword($confirm_password);

        // $user->registerUser();
        if($user->registerUser())
        {
            header("Location: ../user-login.php?msg=userRegistered");
        }
    }
?>