<?php
require_once __DIR__ .  "./../database/Class-db.php";

class SignUp extends Db
{

    private $name;
    private $lastName;
    private $email;
    private $ages;
    private $gender;
    private $password;
    private $r_password;
    private $image;

    public function __construct($name, $lastName, $email, $ages, $gender, $password, $r_password, $image)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->ages = $ages;
        $this->gender = $gender;
        $this->password = $password;
        $this->r_password = $r_password;
        $this->image = $image;
    }

    protected function setUser($name, $lastName, $email, $ages, $gender, $password, $image)
    {
        $stmt = $this->connect()->prepare("INSERT INTO users (name, last_name, email, ages, gender, password, image) VALUES (?, ?, ?, ?, ?, ?, ?);");
        // Hashing passwor

        $passHash = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute(array($name, $lastName, $email, $ages, $gender, $passHash, $image))) {
            $stmt = null;
            header("location:sign-up-page.php?error=stmtFaild");
            exit();
        }
        $stmt = null;
    }

    public function signupUser()
    {
        $this->setUser($this->name, $this->lastName, $this->email, $this->ages, $this->gender, $this->password, $this->image);
    }
}
