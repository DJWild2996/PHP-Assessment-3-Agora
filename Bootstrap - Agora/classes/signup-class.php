<?php

class Signup extends Connect {


    protected function setUser($uid, $pwd, $email,  $firstName, $lastName, $phone,  $DOB) {
        
        $stmt = $this->connect()->prepare('INSERT INTO user (userName, passwordHash, email, fistName, lastName, phoneNumber, dateOfBirth, ) VALUES (?, ?, ?, ?, ?, ?, ?);');

        $login = $userName . $password;
        $hashedPwd = password_hash($login, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid,  $hashedPwd, $email,  $firstName, $lastName, $phone,  $DOB))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();

        }

        $stmt = null;

    }


    protected function checkUser($uid, $email) {
        // ? protect aginst sql injection as they act as place holders to seperate the data from the query
        $stmt = $this->connect()->prepare('SELECT userName FROM user WHERE userName = ? OR email = ?;');
try {
        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();

        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;

        }
        else {
            $resultCheck = true;
        }
        return  $resultCheck;
    }
    catch (Exception $ex) {
    logException ($ex)
    echo "Check User failed";
}

    }

}