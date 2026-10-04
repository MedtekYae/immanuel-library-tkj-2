<?php // Final code polish ?>
<?php
$pageTitle = "Manajemen Buku";
$pageSubtitle = "Kelola data buku, kategori, dan penulis";

require_once '../../components/admin/sidebar.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/index.css">
</head>
<body>
<?php
$book = [
    "id" => 1,
    "title" => "Laskar Pelangi",
    "category" => "Fiksi",
    "year" => 2005,
    "stock" => 12,
    "authors" => "Andrea Hirata",
];
?>
<div class="app-shell">
    <main class="app-main">
        <?php require_once '../../components/admin/topbar.php'; ?>

        <div class="app-content">
            <div class="toolbar">
                <form method="" action="" class="toolbar-filters">
                    <div class="search-box">
                        <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <input type="text" placeholder="Cari judul atau penulis...">
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>