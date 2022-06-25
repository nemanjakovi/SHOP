<?php

require_once __DIR__ .  "./../database/Class-db.php";



class Books extends Db
{

    const ORDER_BY_PRICE_ASC = 'price-asc';
    const ORDER_BY_PRICE_DSC = 'price-desc';

    public function getAllBooks()

    {
        $sql = "SELECT * FROM books";
        $stmt = $this->connect()->query($sql);
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getClassicCategory()
    {
        $sql = "SELECT * FROM books WHERE category = 'Classic' LIMIT 3";
        $stmt = $this->connect()->query($sql);
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getKidsCategory()
    {
        $sql = "SELECT * FROM books WHERE category = 'Kids' LIMIT 3";
        $stmt = $this->connect()->query($sql);
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getBooksCount()
    {
        $sql = "SELECT count(*) as total from books;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }


    public function getPagesLimit()
    {
        $sql = "SELECT * FROM books WHERE  LIMIT ' . $pageFirstResults'";
        $stmt = $this->connect()->query($sql);
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }


    function getOneBookById($id): mixed
    {
        $allBooks = $this->getAllBooks();
        foreach ($allBooks as $singleBook) {
            if ($singleBook['id'] == $id) {
                return $singleBook;
            }
        }
        return false;
    }

    public function sortBookByLowPrice(): mixed
    {
        $allBooks = $this->getAllBooks();
        usort($allBooks, function ($x, $y) {
            return  $x['price'] > $y['price'];
        });
        return $allBooks;
    }



    public function sortBookByHeighPrice(): mixed
    {
        $allBooks = $this->getAllBooks();
        usort($allBooks, function ($x, $y) {
            return  $x['price'] < $y['price'];
        });
        return $allBooks;
    }


    public function sortBookBuyKeyWord($searchKeyWord = ""): array
    {
        $filteredBooks = [];
        $allBooks = $this->getAllBooks();
        foreach ($allBooks as $book) {
            if (
                str_contains(strtolower($book["title"]), $searchKeyWord) == true ||
                str_contains(strtolower($book["author"]), $searchKeyWord) == true ||
                str_contains(strtolower($book["category"]), $searchKeyWord) == true
            ) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }


    // function availableBooks(): array
    // {
    //     $allBooks = getAllBooks();
    //     $availableBooks = [];
    //     foreach ($allBooks as  $book) {
    //         if ($book["available"] == true) {
    //             $availableBooks[] = $book;
    //         }
    //     }
    //     return $availableBooks;
    // }


    public function relatedBooks($related): array
    {
        $relatedeBooks = [];
        $allBooks = $this->getAllBooks();
        foreach ($allBooks as  $book) {
            if ($book["category"] == $related["category"] &&  $related["id"] != $book["id"]) {
                $relatedeBooks[] = $book;
                if (count($relatedeBooks) >= 3) {
                    break;
                }
            }
        }
        return $relatedeBooks;
    }






    public function getNextBook($currentBookId)
    {
        $allBooks = $this->getAllBooks();
        $numberOfBooks = count($allBooks);

        foreach ($allBooks as $key => $book) {
            if ($book['id'] == $currentBookId) {
                if ($key == ($numberOfBooks - 1)) {
                    return $allBooks[0];
                } else {
                    return $allBooks[$key + 1];
                }
            }
        }
    }




    public function getPrevBook($currentBookId)
    {

        $allBooks = $this->getAllBooks();
        $numberOfBooks = count($allBooks);

        foreach ($allBooks as $key => $book) {
            if ($book['id'] == $currentBookId) {
                if ($key == 0) {
                    return $allBooks[$numberOfBooks - 1];
                } else {
                    return $allBooks[$key - 1];
                }
            }
        }
    }
}


$book = new Books();
