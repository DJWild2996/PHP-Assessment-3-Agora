<?php
include_once 'model/connect.php';

if(isset($_POST['invite'])){
  $userName=$_POST['userName'];
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $DOB=$_POST['DOB'];
  $role=$_POST['role'];
  $location=$_POST['location'];
  $admin=$_POST['admin'];
  $accountType=$_POST['accountType'];

  $login = $userName . $password;
  $hashedPwd = password_hash($login, PASSWORD_DEFAULT);

  $sql= "INSERT INTO User(email,userName,fistName,lastName,phoneNumber,passwordHash,dateOfBirth,role,location,admin,accountID)
  VALUES ('$email','$userName', '$firstName', '$lastName', '$phone',' $hashedPwd', '$DOB', '$role', '$location', '$admin', $accountType)";

if ($conn->query($sql) === TRUE) {
  header('location:bsHome.php');
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>