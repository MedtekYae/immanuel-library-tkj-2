<?php
$pageTitle = "Kategori Buku";
$pageSubtitle = "Kelola daftar kategori buku perpustakaan";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/categoryRepository.php';

$categories = getAllCategories();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Perpustakaan Digital</title>
</head>
<body>
<div class="app-shell">
    <main class="app-main">
        <?php require_once '../../components/admin/topbar.php'; ?>

        <div class="app-content">
            <h2>Daftar Kategori</h2>
            <ul>
                <?php foreach ($categories as $cat): ?>
                    <li><?php echo $cat['name']; ?> (Slug: <?php echo $cat['slug']; ?>)</li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>