<?php

function getAllUsers() {
    return [
        ["id" => 1, "name" => "Admin Utama", "email" => "admin@immanuel.com", "role" => "Admin"],
        ["id" => 2, "name" => "Siswa Budi", "email" => "budi@immanuel.com", "role" => "Member"],
    ];
}

function getUserById($id) {
    $users = getAllUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}