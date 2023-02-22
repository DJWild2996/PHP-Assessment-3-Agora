<?php

$servername = "localhost";
$username = "root";
$password = "Bestintheworld";
$dbname = "Agora";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" ."<br>";

$sql = "SELECT concat(u.fistName, ' ', u.lastName) as 'fullName', b.businessName, a.accountType, u.userName, i.productName, i.category, l.dateListed 
FROM
business b inner join account a
on b.businessID = a.businessID
inner join user u
on a.accountID = u.accountID
inner join listing l
on u.userID = l.userID
inner join item i
on l.listingID = i.listingID
WHERE a.accountType = 'Seller'
GROUP BY i.productName
ORDER BY u.userName desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Full Name: " . $row["fullName"]. " - Business Name: " . $row["businessName"]. " - Account Type: " . $row["accountType"]. " - User Name: " . $row["userName"]. " - Product Name: " . $row["productName"]. " - Category: " . $row["category"]. " - Date Listed: " . $row["dateListed"]."<br>";
  }
} else {
  echo "0 results";
} 
$conn->close();
?>