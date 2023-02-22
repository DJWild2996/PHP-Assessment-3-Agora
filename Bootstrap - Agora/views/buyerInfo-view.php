<?php
  $sql = "select u.userName,concat(u.fistName, ' ', u.lastName) as 'fullName', u.email, u.phoneNumber, u.dateOfBirth, u.role, u.location , a.accountType, b.businessName
  from
  business b inner join account a
  on b.businessID = a.businessID
  inner join user u
  on a.accountID = u.accountID
  where userID = 61;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "User Name: " . $row["userName"]."<br>"."Full Name: " . $row["fullName"]."<br>"."Email: " . $row["email"]."<br>"."phone Number: " . $row["phoneNumber"]."<br>"."Date Of Birth: " . $row["dateOfBirth"]."<br>"."Role: " . $row["role"]."<br>"."Account Type: " . $row["accountType"]."<br>"."Business Name: " . $row["businessName"]."<br>";
      
    }
  } else {
    echo "0 results";
  }

  ?>