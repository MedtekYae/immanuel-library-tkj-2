PHP
<?php

function getAllBooks() {
    return [
        [
            "id" => 1,
            "title" => "Laskar Pelangi",
            "category" => "Fiksi",
            "year" => 2005,
            "stock" => 12,
            "authors" => "Andrea Hirata",
        ],
        [
            "id" => 2,
            "title" => "Bumi Manusia",
            "category" => "Fiksi Historis",
            "year" => 1980,
            "stock" => 7,
            "authors" => "Pramoedya Ananta Toer",
        ]
    ];
}

function getBookById($id) {
    $books = getAllBooks();
    foreach ($books as $book) {
        if ($book['id'] == $id) {
            return $book;
        }
    }
    return null;
}