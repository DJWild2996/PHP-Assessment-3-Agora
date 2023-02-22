<?php

class Login extends Connect {


    protected function setUser($uid, $pwd, $role) {
        
        $stmt = $this->connect()->prepare('SELECT passwordHash FROM user WHERE userID = ?;');


        if(!$stmt->execute(array($uid, $pwd, $role))) {
            $stmt = null;
            header("location: ../login.php?error=stmtfailed");
            exit();

        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["passwordHash"]);

        if($checkPwd== false)
        {
            $stmt = null;
            header("location: ../login.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd== true)
        {
            $stmt = $this->connect()->prepare('SELECT * FROM user WHERE userID = ? OR email = ? AND passwordHash = ?;');

            if(!$stmt->execute(array($uid, $pwd, $role))) {
                $stmt = null;
                header("location: ../login.php?error=stmtfailed");
                exit();
    
            }

            if($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchALL(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userName'] = $user[0]['userName'];
            $_SESSION['role'] = $user[0]['role'];
            $_SESSION['id'] = $user[0]['userID'];

        $stmt = null;

    }

}
}