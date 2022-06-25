<?php
require_once __DIR__ .  "./../database/Class-db.php";

class VerificationUser extends SignUp
{

    public function checkUser($email): bool
    {
        $db = new Db();
        $stmt = $db->connect()->prepare("SELECT email FROM users WHERE  email = ?");
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location:sign-up-page.php?error=stmtFaild");
            exit();
        }
        $resultCheck = "";
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
