<?php
$pageTitle = "Manajemen Penulis";
$pageSubtitle = "Kelola daftar penulis buku perpustakaan";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/author-repository.php';

$authors = getAuthors();
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
                    <li>
                        <?php echo $author['name']; ?> (<?php echo $author['email']; ?>)
                        <a href="../../actions/authors/destroy.php?id=<?php echo $author['id']; ?>" onclick="return confirm('Yakin ingin menghapus penulis ini?')">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>