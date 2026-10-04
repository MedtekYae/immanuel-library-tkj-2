<?php

function getUsers() {
    return [
        ['id' => 1, 'name' => 'Admin User', 'email' => 'admin@gmail.com', 'role' => 'admin'],
        ['id' => 2, 'name' => 'Siswa Test', 'email' => 'siswa@gmail.com', 'role' => 'user'],
    ];
}

function getUser($id) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function getProfile() {
    return [
        'id' => 1,
        'name' => 'Admin Utama',
        'email' => 'admin@immanuel.sch.id',
        'phone' => '08123456789'
    ];
}

function getAllUsers() { return getUsers(); }
function getUserById($id) { return getUser($id); }