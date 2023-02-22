<?php
  $sql = "select distinct(userName) from business where businessID = 1 ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "User Name: " . $row["userName"]."<br>";
    }
  } else {
    echo "0 results";
  }

  ?>