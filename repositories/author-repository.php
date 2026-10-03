<?php

function getAllAuthors() {
    return [
        ["id" => 1, "name" => "Andrea Hirata", "email" => "andrea@example.com"],
        ["id" => 2, "name" => "Pramoedya Ananta Toer", "email" => "pramoedya@example.com"],
    ];
}

function getAuthorById($id) {
    $authors = getAllAuthors();
    foreach ($authors as $author) {
        if ($author['id'] == $id) {
            return $author;
        }
    }
    return null;
}