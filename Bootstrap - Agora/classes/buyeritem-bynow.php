<?php
include_once('../model/connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    // $maketemp = "CREATE TABLE Purchased (
    //   itemID int auto_increment NOT NULL,
    //   productName varchar(20) NOT NULL,
    //   category varchar(20) NOT NULL,
    //   startingPrice decimal(10,2) NOT NULL,
    //   buyNowPrice decimal(10,2) NOT NULL,
    //   imagePath varchar(100) NOT NULL,
    //   PRIMARY KEY (itemID)
    // )";

    
    // if ($conn->query($maketemp) === TRUE) {
    //     //header('Location: ../buyerHome.php');
    //     echo "Purchase Table created";
    //   }
    //   else {
    //     echo "Error creating: " . $conn->error;
    //   }

      $inserttemp = "INSERT INTO Purchased
      select itemID,productName, category, startingPrice, buyNowPrice,imagePath from item where itemID = $id;";

    if ($conn->query($inserttemp ) === TRUE) {
      
      header( "refresh:5;url=../buyerHome.php" );
      echo 'Item added to Purchased. click <a href="../buyerHome.php">Return</a>.';
       
    }
    else {
      echo "Error creating: " . $conn->error;
    }

}
$conn->close(); 
?>