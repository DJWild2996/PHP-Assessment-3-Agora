<?php

if(isset($_POST["submit"]))
{
    // Grabbing the data
    $uid=$_POST['userName'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pwd=$_POST['password'];
    $DOB=$_POST['DOB'];
    $role=$_POST['role'];
    $location=$_POST['location'];
    $admin=$_POST['admin'];
    $accountType=$_POST['accountType'];

    // Instantiate SignupContr class
    include "../model/connect.php";
    include "../classes/signup-class.php";
    include "../controllers/signup-controller.php";
    $signup = new SignupContr($uid, $firstName, $lastName, $pwd, $email, $phone, $role, $location, $admin, $accountType);

     // Running error handlers and user signup
     $signup->signupUser();
     // Going to back to front page
     header("location: ../login.php?error=none");
}