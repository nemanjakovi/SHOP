<?php

require_once __DIR__ .  "./../database/Class-db.php";

class Profile extends Db
{


    public function getUser($id)
    {
        $sql = "SELECT * FROM users where id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }


    public function updateProfile($name, $lastName, $email, $ages, $image, $id)
    {

        $db = new Db();
        $stmt = $db->connect()->prepare("UPDATE users
        SET  name =      ?, 
            last_name =  ?,
            email =      ?,
            ages =       ?, 
            image =      ?
             WHERE id = ?");

        if (!$stmt->execute(array($name, $lastName, $email, $ages, $image, $id))) {
            $stmt = null;
            header("Location:./profile-page.php?error=updateStmtFail");
            exit();
        } else {
            header("Location:./profile-page.php?Record-update-successfully");
        }
    }
}
