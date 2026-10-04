<?php
$pageTitle = "Manajemen Pengguna";
$pageSubtitle = "Kelola daftar pengguna perpustakaan";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/user-repository.php';

$users = getUsers();
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
            <h2>Daftar Pengguna</h2>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <?php echo $user['name']; ?> - <?php echo $user['role']; ?>
                        <a href="../../actions/users/destroy.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Hapus</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>