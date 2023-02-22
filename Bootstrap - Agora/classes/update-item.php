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




if(isset($_POST['update'])){
  $productName=$_POST['productName'];
  $category=$_POST['category'];
  $buyNowPrice=$_POST['buyNowPrice'];

  $dateListed=$_POST['dateListed'];
  $closingDate=$_POST['closingDate'];

  $item= "update item set productName='$productName',category='$category',buyNowPrice='$buyNowPrice' where itemID=$id";

  if ($conn->query($item) === TRUE) {
        echo 'Item Updated';
  } else {
    echo "Error creating: " . $conn->error;
  }

  $listing= "update listing set dateListed='$dateListed',closingDate='$closingDate' where listingID=$id";

if ($conn->query($listing) === TRUE) {
      echo 'listing Updated.';
} else {
  echo "Error creating: " . $conn->error;
}

}
$conn->close(); 
?>