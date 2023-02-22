<?php

class SignupContr extends signup{
 
    private $uid;
    private $pwd;
    private $email;
    private $firstName;
    private $lastName;
    private $phone
    private $DOB;

    public function __construct($uid, $pwd, $email,  $firstName, $lastName, $phone, $DOB) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->DOB = $DOB;

    }

    public function signupUser()
    {
        if($this->emptyInput() == false) {
            // echo empty input
            header("location: ../login.php?error=emptyinput");
            exit();

        }
        if($this->invalidUid() == false) {
            // echo invalid username
            header("location: ../login.php?error=username");
            exit();

        }
        if($this->invalidEmail() == false) {
            // echo invalid email
            header("location: ../login.php?error=email");
            exit();

        }
        if($this->uidTakenCheck()== false) {
            // echo Username or email taken
            header("location: ../login.php?error=useroremailtaken");
            exit();

        }

        $this->setUser($this->uid, $this->pwd, $this->email, $this->firstName, $this->lastName, $this->phone, $this->DOB);

    }

    private function emptyInput()
    {
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->email))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;

    }

    private function invalidUid()
    {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;

    }

    private function invalidEmail()
    {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;

    }

    private function uidTakenCheck()
    {
        $result;
        if(!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;

    }
}