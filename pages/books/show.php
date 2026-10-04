<?php
$pageTitle = "Detail Buku";
$pageSubtitle = "Informasi lengkap mengenai buku";

require_once '../../components/admin/sidebar.php';
require_once __DIR__ . '/../../repositories/book-repository.php';

// Ambil ID dari URL (contoh: show.php?id=1), default ke 1 jika tidak ada
$id = $_GET['id'] ?? 1;
$book = getBookById($id);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/show.css">
</head>
<body>
<div class="app-shell">
    <main class="app-main">
        <?php require_once '../../components/admin/topbar.php'; ?>

        <div class="app-content">
            <?php if ($book): ?>
                <div class="card">
                    <h2><?php echo $book['title']; ?></h2>
                    <p><strong>Kategori:</strong> <?php echo $book['category']; ?></p>
                    <p><strong>Tahun Terbit:</strong> <?php echo $book['year']; ?></p>
                    <p><strong>Stok:</strong> <?php echo $book['stock']; ?></p>
                    <p><strong>Penulis:</strong> <?php echo $book['authors']; ?></p>
                </div>
            <?php else: ?>
                <p>Buku tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </main>
</div>
</body>
</html>