<?php

function getAllCategories() {
    return [
        ["id" => 1, "name" => "Fiksi", "slug" => "fiksi"],
        ["id" => 2, "name" => "Fiksi Historis", "slug" => "fiksi-historis"],
        ["id" => 3, "name" => "Sains", "slug" => "sains"],
    ];
}

function getCategoryById($id) {
    $categories = getAllCategories();
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category;
        }
    }
    return null;
}