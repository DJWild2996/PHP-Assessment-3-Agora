<?php
include_once 'model/connect.php';

$id=$_GET['updateid'];

// $sql= "Select * from user where userID='$id'";
// $result = $conn->query($sql);
// $row=mysqli_fetch_assoc($result);
// $userName=$row['userName'];
// $first=$row['fistName'];
// $last=$row['lastName'];
// $mail=$row['email'];
// $number=$row['phoneNumber'];
// $DOB=$row['dateOfBirth'];
// $role=$row['role'];
// $location=$row['location'];
// $admin=$row['admin'];
// $accountID=$row['accountID'];




if(isset($_POST['update'])){
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

  $sql= "update business set businessName='$businessName',businessEmail='$businessEmail',businessPhone='$businessPhone',businessInfo='$businessInfo',userName='$userName',password='$hashedPwd',streetNumber='$streetNumber',streetName='$streetName',suburb='$suburb',city='$city',postcode='$postcode',additionalLocations='$additionalLocations' where businessID= 1";

if ($conn->query($sql) === TRUE) {
  header('location:bsHome.php');
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>