<?php
require_once __DIR__ .  "./../database/Class-db.php";


class Contact
{


    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }



    public function setMessage($name, $email, $message)
    {

        $db = new Db();
        $stmt = $db->connect()->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?);");

        if (!$stmt->execute(array($name, $email, $message))) {
            $stmt = null;
            header("location:sign-up-page.php?error=stmtFaild");
            exit();
        }
        $stmt = null;
    }


    public function sendMessage()
    {
        $this->setMessage($this->name, $this->email, $this->message);
    }
}
