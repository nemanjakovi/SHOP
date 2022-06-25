<?php

require_once __DIR__ .  "./../database/Class-db.php";
class Dashboard extends Db
{


    public function insertBooks($bookTitle, $bookDescription, $bookCategory, $bookAuthor, $bookImage, $bookPrice)
    {
        try {
            $sql = "INSERT INTO books(title, description,category,author, img, price) VALUES (?,?,?,?,?,?);";
            $stm = $this->connect()->prepare($sql);
            $stm->bindParam(1, $bookTitle);
            $stm->bindParam(2, $bookDescription);
            $stm->bindParam(3, $bookCategory);
            $stm->bindParam(4, $bookAuthor);
            $stm->bindParam(5, $bookImage);
            $stm->bindParam(6, $bookPrice);
            $stm->execute();
        } catch (Throwable $th) {
            $th->getMessage();
        }
    }



    public function deleteBook()
    {

        if (isset($_GET['delete'])) {

            $id = $_GET["delete"];

            $db = new Db();
            $stmt = $db->connect()->prepare("DELETE FROM books WHERE id=" . $id);

            if (!$stmt->execute()) {
                header("Location:dashboard.php?error=deleteStmtFail");
                exit();
            } else {

                header("Location:dashboard.php?Record-deleted-successfully");
            }
        }
    }
}
