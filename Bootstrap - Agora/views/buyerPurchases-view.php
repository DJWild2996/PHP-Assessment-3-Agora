<?php
  $sql = "select *
  from purchased;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["itemID"]."<br>"."Product Name: " . $row["productName"]."<br>"."Category: " . $row["category"]."<br>"."Price: " . "$" . $row["buyNowPrice"]."<br>"."<br>";
      
    }
  } else {
    echo "0 results";
  }

  ?>