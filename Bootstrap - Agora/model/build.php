<?php

$servername = "localhost";
$username = "root";
$password = "Bestintheworld";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE Agora";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn -> select_db("Agora");
// sql to create tables
$sql = "CREATE TABLE Business (
  businessID int auto_increment NOT NULL,
  businessName varchar(100) NOT NULL,
  businessEmail varchar(50) NOT NULL,
  businessPhone int NOT NULL,
  businessInfo varchar(50) NOT NULL,
  userName varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  streetNumber int NOT NULL,
  streetName varchar(20) NOT NULL,
  suburb varchar(20) NOT NULL,
  city varchar(20) NOT NULL,
  postcode int NOT NULL,
  additionalLocations varchar(100) NOT NULL,
  PRIMARY KEY  (businessID)
)";
 if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE Account (
  accountID int auto_increment NOT NULL,
  accountType varchar(10) NOT NULL,
  active boolean NOT NULL,
  PRIMARY KEY (accountID),
  businessID int,
  Foreign key (businessID) references Business(businessID)
)";
 if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE User (
  userID int auto_increment NOT NULL,
  email varchar(50) NOT NULL,
  userName varchar(20) NOT NULL,
  fistName varchar(20) NOT NULL,
  lastName varchar(20) NOT NULL,
  passwordHash varchar(250) NOT NULL,
  dateOfBirth date default NULL,
  role varchar(20) NOT NULL,
  location varchar(20) NOT NULL,
  admin boolean NOT NULL,
  PRIMARY KEY (userID),
  accountID int,
  Foreign key (accountID) references Account(accountID)
)";
 if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE Listing (
  listingID int auto_increment NOT NULL,
  dateListed date default NULL,
  closingDate date default NULL,
  PRIMARY KEY (listingID),
  userID int,
  Foreign key (userID) references User(userID)
)";
 if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE Item (
  itemID int auto_increment NOT NULL,
  productName varchar(20) NOT NULL,
  category varchar(20) NOT NULL,
  startingPrice decimal(10,2) NOT NULL,
  buyNowPrice decimal(10,2) NOT NULL,
  imagePath varchar(100) NOT NULL,
  PRIMARY KEY (itemID),
  listingID int,
  Foreign key (listingID) references Listing(listingID)
)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>