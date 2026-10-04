<?php

function getAuthors() {
    return [
        ['id' => 1, 'name' => 'Andrea Hirata', 'email' => 'andrea@gmail.com'],
        ['id' => 2, 'name' => 'Pramoedya Ananta Toer', 'email' => 'pram@gmail.com'],
    ];
}

function getAuthor($id) {
    $authors = getAuthors();
    foreach ($authors as $author) {
        if ($author['id'] == $id) {
            return $author;
        }
    }
    return null;
}

function getAllAuthors() { return getAuthors(); }
function getAuthorById($id) { return getAuthor($id); }