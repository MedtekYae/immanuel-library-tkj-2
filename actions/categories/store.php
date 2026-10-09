<?php
require_once '../../config/database.php';
require_once '../../repositories/category_repository.php';

// Pengecekan method POST dan isset() tombol submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'] ?? '';

    // Simpan data kategori baru
    storeCategory(['name' => $name]);

    header('Location: ../../pages/categories/index.php');
    exit;
} else {
    header('Location: ../../pages/categories/index.php');
    exit;
}