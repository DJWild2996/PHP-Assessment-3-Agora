<?php

if(isset($_POST["submit"]))
{
    // Grabbing the data
    $uid=$_POST['userName'];
    $pwd=$_POST['password'];
    $role=$_POST['role'];
   
    // Instantiate Login class
    include "../classes/dbh-class.php";
    include "../classes/login-class.php";
    include "../controllers/login-controller.php";
    $login = new LoginContr($uid, $pwd, $role);

     // Running error handlers and user signup
     $login->loginUser();
     // Going to back to front page
     header("location: ../login.php?error=none");
}