<?php
  $sql = "select i.itemID, i.productName, i.category, i.buyNowPrice, l.dateListed, l.closingDate,i.imagePath
  from item i
  inner join listing l
  on l.listingID = i.listingID
  order by i.itemID;";
  $result = $conn->query($sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
    $itemID=$row['itemID'];
    $productName=$row['productName'];
    $category=$row['category'];
    $buyNowPrice=$row['buyNowPrice'];
    $dateListed=$row['dateListed'];
    $closingDate=$row['closingDate'];
    $imagePath=$row['imagePath'];

    echo ' <tr>
    <th scope="row">'.$itemID.'</th>
    <td>'.$productName.'</td>
    <td>'.$category.'</td>
    <td>'."$".$buyNowPrice.'</td>
    <td>'.$dateListed.'</td>
    <td>'.$closingDate.'</td>
    <td>'."<img src='$imagePath' width=100 height=100>".'</td>
    <td>
    <button class="btn btn-primary"><a href="readBuyerItem.php?updateid='.$itemID.'">More Details</a></button>
    <button class="btn btn-danger"><a href="classes/buyeritem-bynow.php?deleteid='.$itemID.'">Buy Now</a></button>
    </td>
    </tr>';
    }
  }

?>