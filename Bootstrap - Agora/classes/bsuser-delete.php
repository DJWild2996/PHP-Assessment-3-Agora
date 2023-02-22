<?php
include_once('../model/connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from user where userID ='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ../bsHome.php');
      }
      else {
        echo "Error creating: " . $conn->error;
      }

}
$conn->close(); 
?>