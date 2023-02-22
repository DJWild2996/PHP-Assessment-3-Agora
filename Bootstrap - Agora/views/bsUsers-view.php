<?php
  $sql = "select distinct(u.userName), concat(u.fistName, ' ', u.lastName) as 'fullName', u.userID, u.email, u.role, a.accountType from user u inner join account a on a.accountID = u.accountID where a.accountType = 'Seller' or a.accountType = 'Buyer';";
  $result = $conn->query($sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
    $userID=$row['userID'];
    $fullName=$row['fullName'];
    $userName=$row['userName'];
    $email=$row['email'];
    $role=$row['role'];
    $accountType=$row['accountType'];

    echo ' <tr>
    <th scope="row">'.$userID.'</th>
    <td>'.$fullName.'</td>
    <td>'.$userName.'</td>
    <td>'.$email.'</td>
    <td>'.$role.'</td>
    <td>'.$accountType.'</td>
    <td>
    <button class="btn btn-primary"><a href="updateUser.php?updateid='.$userID.'">Update</a></button>
    <button class="btn btn-danger"><a href="classes/bsuser-delete.php?deleteid='.$userID.'">Delete</a></button>
    </td>
    </tr>';
    }
  }

?>