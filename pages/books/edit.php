<?php
require_once '../../config/database.php';
require_once '../../repositories/book_repository.php';
require_once '../../repositories/category_repository.php';
require_once '../../repositories/author_repository.php';

$pageTitle = "Edit Buku";
$pageSubtitle = "Ubah data buku";

$id = $_GET['id'] ?? null;
$book = $id ? findBookById($id) : null;

if (!$book) {
    header('Location: index.php');
    exit;
}

$categories = getCategories();
$authors = getAuthors();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
    <div class="app-shell">
        <?php include '../../components/admin/sidebar.php'; ?>

        <main class="app-main">
            <?php include '../../components/admin/topbar.php'; ?>

            <div class="app-content">
                <form action="../../actions/books/update.php" method="POST" class="form">
                    <input type="hidden" name="id" value="<?= $book['id'] ?>">

                    <div class="form-group">
                        <label for="title">Judul Buku</label>
                        <input type="text" id="title" name="title" value="<?= htmlspecialchars($book['title']) ?>" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select id="category_id" name="category_id" required class="form-control">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['id'] ?>" <?= $category['id'] == $book['category_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($category['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="author_id">Penulis</label>
                        <select id="author_id" name="author_id" required class="form-control">
                            <?php foreach ($authors as $author): ?>
                                <option value="<?= $author['id'] ?>" <?= $author['id'] == $book['author_id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($author['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>