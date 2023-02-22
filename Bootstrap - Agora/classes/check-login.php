<?php
session_start();
include_once '../model/connect.php';


if (isset($_POST['uid']) && isset($_POST['pwd']) && isset($_POST['role']))
{
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['uid']);
    $password = test_input($_POST['pwd']);
    $role = test_input($_POST['role']);


    if (empty($username))
    {
        header("Location: ../login.php?error=UserName is Required");

    }
    elseif(empty($password))
    {
        header("Location: ../login.php?error=Password is Required");
    }
    else {
        $sql = "select * from user
        where userName= '$username' and role= '$role'";
        $result = $conn->query($sql);

        $login = $username . $password;
        $hashedPwd = password_hash($login, PASSWORD_DEFAULT);

        if ($result->num_rows === 1) {
            
                $row = mysqli_fetch_assoc($result);
                if($row['userName'] === $username && $row['role'] === "Admin")
                {
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['userID'];
                    header("Location: ../bsHome.php");

                }
                elseif($row['userName'] === $username && $row['role'] === "Buyer")
                {
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['userID'];
                    header("Location: ../buyerHome.php");

                }
                elseif($row['userName'] === $username && $row['role'] === "Seller")
                {
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['userID'];
                    header("Location: ../sellerHome.php");

                }
 
        }else {
            header("Location: ../login.php?error=Incorrect Username or password");
        }
    }

}
else {
    header("Location: ../login.php");
}
?>