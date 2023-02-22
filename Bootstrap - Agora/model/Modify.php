<?php

$servername = 'localhost';
$username = 'root';
$password = 'Bestintheworld';
$dbname = 'Agora';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';

// alter table
$sql = "alter table user modify column startingPrice DECIMAL(10,2)";

// add column query
$sql = "alter table user add column phoneNumber int NOT NULL AFTER lastName";

// insert query
$sql = "insert  into Business(businessName,businessEmail,businessPhone,businessInfo,userName,password,streetNumber,streetName,suburb,city,postcode,additionalLocations) 
values 
('myBusiness', 'myEmail@email.com', 0123456789, 'myInfo', 'myBusiness', 'password', 1, 'myStreet', 'mysuburb', 'myCity', 0123, 'none')";

// update query
$sql = "update user
set fistName = 'John'
where userID = 26";

if ($conn->query($sql) === TRUE) {
    echo "Successfully updated";
  } else {
    echo "Error updating: " . $conn->error;
  }
  
  $conn->close();
?>