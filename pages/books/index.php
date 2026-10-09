<?php
require_once '../../config/database.php';
require_once '../../repositories/book_repository.php';

$pageTitle = "Manajemen Buku";
$pageSubtitle = "Kelola data buku, kategori, dan penulis";

$books = getBooks();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/index.css">
</head>
<body>
    <div class="app-shell">
        
        <?php include '../../components/admin/sidebar.php'; ?>

        <main class="app-main">
           
            <?php include '../../components/admin/topbar.php'; ?>

            <div class="app-content">
                <div class="toolbar">
                    <div class="action-bar">
                        <a href="create.php" class="btn btn-primary">+ Tambah Buku</a>
                    </div>
                </div>

                <div class="table-container" style="margin-top: 20px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($books)): ?>
                                <?php foreach ($books as $index => $book): ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= htmlspecialchars($book['title'] ?? '') ?></td>
                                        <td><?= htmlspecialchars($book['category_name'] ?? '-') ?></td>
                                        <td><?= htmlspecialchars($book['author_name'] ?? '-') ?></td>
                                        <td>
                                            <a href="show.php?id=<?= $book['id'] ?>" class="btn btn-info">Detail</a>
                                            <a href="edit.php?id=<?= $book['id'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="../../actions/books/destroy.php?id=<?= $book['id'] ?>" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" 
                                               class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" style="text-align: center;">Belum ada data buku.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>