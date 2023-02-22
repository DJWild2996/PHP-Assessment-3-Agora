<?php
// Select query
$servername = "localhost";
$username = "root";
$password = "Bestintheworld";
$dbname = "Agora";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully" ."<br>";

$sql = "SELECT itemID, productName, category, buyNowPrice, dateListed, closingDate FROM listing, item WHERE category = 'pasta'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "itemID: " . $row["itemID"]. " - Name: " . $row["productName"]. " - Category: " . $row["category"].  "  - Buy Now price:" . $row["buyNowPrice"].  "  - dateListed:" . $row["dateListed"]. "  - closing Date:" . $row["closingDate"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>