<?php
require_once '../../config/database.php';
require_once '../../repositories/author_repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';

    if ($id) {
        updateAuthor($id, ['name' => $name]);
    }

    header('Location: ../../pages/authors/index.php');
    exit;
} else {
    header('Location: ../../pages/authors/index.php');
    exit;
}