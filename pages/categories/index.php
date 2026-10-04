<?php
$pageTitle = "Manajemen Kategori";
$pageSubtitle = "Kelola daftar kategori buku perpustakaan";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/category-repository.php';

$categories = getCategories();
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
                    <li>
                        <?php echo $cat['name']; ?> 
                        <a href="../../actions/categories/destroy.php?id=<?php echo $cat['id']; ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>