<?php
$pageTitle = "Daftar Penulis";
$pageSubtitle = "Kelola data penulis buku";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/authorRepository.php';

$authors = getAllAuthors();
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
            <h2>Daftar Penulis</h2>
            <ul>
                <?php foreach ($authors as $author): ?>
                    <li><?php echo $author['name']; ?> - <?php echo $author['email']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>