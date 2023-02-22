<?php
include_once 'model/connect.php';


if(isset($_POST['List'])){
  $productName=$_POST['productName'];
  $category=$_POST['category'];
  $buyNowPrice=$_POST['buyNowPrice'];
  $dateListed=$_POST['dateListed'];
  $closingDate=$_POST['closingDate'];

  $listing ="INSERT INTO Listing(dateListed,closingDate) VALUES ('$dateListed','$closingDate');";

  if ($conn->query($listing) === TRUE) {
    echo 'listing Created.';
  } else {
  echo "Error creating: " . $conn->error;
  }

  $item="INSERT INTO Item(productName,category,buyNowPrice) VALUES ('$productName','$category','$buyNowPrice');";

  if ($conn->query($item) === TRUE) {
    echo 'Item Created';
  } else {
  echo "Error creating: " . $conn->error;
  }

}

$conn->close(); 
?>