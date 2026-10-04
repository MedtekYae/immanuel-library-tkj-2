<?php

function getCategories() {
    return [
        ['id' => 1, 'name' => 'Fiksi', 'description' => 'Buku-buku fiksi'],
        ['id' => 2, 'name' => 'Fiksi Historis', 'description' => 'Buku sejarah fiksi'],
    ];
}

function getCategory($id) {
    $categories = getCategories();
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category;
        }
    }
    return null;
}

function getAllCategories() { return getCategories(); }
function getCategoryById($id) { return getCategory($id); }