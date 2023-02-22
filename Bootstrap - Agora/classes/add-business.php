<?php
include_once 'model/connect.php';

if(isset($_POST['SignUp'])){
  $businessName=$_POST['businessName'];
  $businessEmail=$_POST['businessEmail'];
  $businessPhone=$_POST['businessPhone'];
  $businessInfo=$_POST['businessInfo'];
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $streetNumber=$_POST['streetNumber'];
  $streetName=$_POST['streetName'];
  $suburb=$_POST['suburb'];
  $city=$_POST['city'];
  $postcode=$_POST['postcode'];
  $additionalLocations=$_POST['additionalLocations'];
  

  $login = $userName . $password;
  $hashedPwd = password_hash($login, PASSWORD_DEFAULT);

  $sql= "INSERT INTO business(businessName,businessEmail,businessPhone,businessInfo,userName,password,streetNumber,streetName,suburb,city,postcode,additionalLocations)
  VALUES ('$businessName','$businessEmail', '$businessPhone', '$businessInfo', '$userName',' $hashedPwd', '$streetNumber', '$streetName', '$suburb', '$city', '$postcode', '$additionalLocations')";
if ($conn->query($sql) === TRUE) {
  header('location:login.php');
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>