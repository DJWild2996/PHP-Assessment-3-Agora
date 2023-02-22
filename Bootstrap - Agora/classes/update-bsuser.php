<?php
include_once 'model/connect.php';

$id=$_GET['updateid'];

$sql= "Select * from user where userID='$id'";
$result = $conn->query($sql);
$row=mysqli_fetch_assoc($result);
$userName=$row['userName'];
$first=$row['fistName'];
$last=$row['lastName'];
$mail=$row['email'];
$number=$row['phoneNumber'];
$DOB=$row['dateOfBirth'];
$role=$row['role'];
$location=$row['location'];
$admin=$row['admin'];




if(isset($_POST['update'])){
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

  $sql= "update user set email='$email',userName='$userName',fistName='$firstName',lastName='$lastName',phoneNumber='$phone',passwordHash='$hashedPwd',dateOfBirth='$DOB',role='$role',location='$location',admin='$admin',accountID='$accountType' where userID=$id";

if ($conn->query($sql) === TRUE) {
  header('location:bsHome.php');
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>