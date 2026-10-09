<?php
require_once '../../config/database.php';
require_once '../../repositories/author_repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'] ?? '';

    storeAuthor(['name' => $name]);

    header('Location: ../../pages/authors/index.php');
    exit;
} else {
    header('Location: ../../pages/authors/index.php');
    exit;
}