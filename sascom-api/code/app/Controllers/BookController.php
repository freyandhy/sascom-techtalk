<?php

namespace Sascom\Controllers;

use Sascom\Models\Book;

class BookController
{
    public function getAll($req, $res) {
        $books = Book::all();
        return $res->withJson($books);
    }
}