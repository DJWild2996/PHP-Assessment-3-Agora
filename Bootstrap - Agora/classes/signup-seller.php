<?php
include_once 'model/connect.php';




if(isset($_POST['update'])){
  $userName=$_POST['userName'];
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $DOB=$_POST['DOB'];


  $login = $userName . $password;
  $hashedPwd = password_hash($login, PASSWORD_DEFAULT);

  $sql= "update user set email='$email',userName='$userName',fistName='$firstName',lastName='$lastName',phoneNumber='$phone',passwordHash='$hashedPwd',dateOfBirth='$DOB' where userID=1";

if ($conn->query($sql) === TRUE) {
  header('location:login.php');
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>