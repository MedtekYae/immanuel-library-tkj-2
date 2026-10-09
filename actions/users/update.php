<?php
require_once '../../config/database.php';
require_once '../../repositories/user_repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($id) {
        updateUser($id, ['name' => $name, 'email' => $email]);
    }

    header('Location: ../../pages/users/index.php');
    exit;
} else {
    header('Location: ../../pages/users/index.php');
    exit;
}