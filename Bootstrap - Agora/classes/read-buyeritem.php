<?php
include_once 'model/connect.php';


$id=$_GET['updateid'];

$sql= "select i.itemID, i.productName, i.category, i.buyNowPrice, l.dateListed, l.closingDate,i.imagePath, u.userName, concat(u.fistName, ' ', u.lastName) as 'fullName', u.email, u.phoneNumber, a.accountType, b.businessName
from item i
inner join listing l
on l.listingID = i.listingID
inner join user u
on l.userID = u.userID
inner join account a
 on a.accountID = u.accountID
inner join business b
 on b.businessID = a.businessID
where itemID ='$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     echo "Listed By "."<br>". " Business: " . $row["businessName"]."<br>". $row["accountType"]."<br>".  "  Full Name:" . $row["userName"]."<br>"."  Seller Name:" . $row["fullName"]."<br>". "  Contact Details:"."<br>" . $row["email"]."<br>". $row["phoneNumber"]."<br>"."<br>";
    echo "Product Details "."<br>". " Product Name: " . $row["productName"]."<br>". " Category: " . $row["category"]."<br>".  "  Buy Now Price:" . $row["buyNowPrice"]."<br>".  "  Date Listed:" . $row["dateListed"]."<br>". "  Closing Date:" . $row["closingDate"]."<br>";
    $image=$row['imagePath'];
    echo "Preview:"."<br>" . "<img src='$image' >";
    
  }
} else {
  echo "0 results";
}

$conn->close(); 
?>