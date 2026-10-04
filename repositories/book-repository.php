<?php

function getBooks() {
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

function getBook($id) {
    $books = getBooks();
    foreach ($books as $book) {
        if ($book['id'] == $id) {
            return $book;
        }
    }
    return null;
}

function getAllBooks() {
    return getBooks();
}

function getBookById($id) {
    return getBook($id);
}