<?php
require_once __DIR__ .  "./../database/Class-db.php";
class Login extends Db
{


    public function getUser($email, $password)
    {

        $checkPass = "";
        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE email = ?;");
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            $this->stmt = null;
            false;
        } else {

            $hash = $user[0]["password"];
            $checkPass = password_verify($password, $hash);
        }
        if ($checkPass == false) {
            $stmt = null;
            false;
        } elseif ($checkPass == true) {

            $_SESSION["id"] = $user[0]["id"];
            $_SESSION["name"] = $user[0]["name"];
            return true;
        }
    }

    public function loginUser()
    {
        $this->getUser($this->email, $this->password);
    }
}
