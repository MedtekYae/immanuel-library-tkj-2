<?php
require_once '../../config/database.php';
require_once '../../repositories/category_repository.php';
require_once '../../repositories/author_repository.php';

$pageTitle = "Tambah Buku";
$pageSubtitle = "Tambahkan koleksi buku baru";

$categories = getCategories();
$authors = getAuthors();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/create.css">
</head>
<body>
    <div class="app-shell">
        <?php include '../../components/admin/sidebar.php'; ?>

        <main class="app-main">
            <?php include '../../components/admin/topbar.php'; ?>

            <div class="app-content">
                <form action="../../actions/books/store.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="title">Judul Buku</label>
                        <input type="text" id="title" name="title" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select id="category_id" name="category_id" required class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="author_id">Penulis</label>
                        <select id="author_id" name="author_id" required class="form-control">
                            <option value="">-- Pilih Penulis --</option>
                            <?php foreach ($authors as $author): ?>
                                <option value="<?= $author['id'] ?>"><?= htmlspecialchars($author['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="store" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>