<?php
  $sql = "select distinct(businessName), businessEmail, businessPhone, businessInfo, concat(streetNumber, ' ', streetName, ' ', suburb, ' ', city, ' ', postcode) as 'Location', additionalLocations, imagePath from business where businessID = 42 ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Business Name: " . $row["businessName"]."<br>". " Email: " . $row["businessEmail"]."<br>". " Phone: " . $row["businessPhone"]."<br>".  "  Info:" . $row["businessInfo"]."<br>".  "  Location:"."<br>" . $row["Location"]."<br>". "  additionalLocations:" . $row["additionalLocations"]."<br>";
      $image=$row['imagePath'];
      echo "Logo:"."<br>" . "<img src='$image' >";
      
    }
  } else {
    echo "0 results";
  }

  ?>