<?php

class Db
{
    private $dbHost = "localhost";
    private $username = "root";
    private $dbPass = "";
    private $dbName = "book_store";

    public function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $pdo = new PDO($dsn, $this->username, $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (Throwable $e) {
            echo "Connection faild!" .  $e->getMessage();
        }
    }
}
