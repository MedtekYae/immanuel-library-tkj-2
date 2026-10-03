<?php
$pageTitle = "Daftar Pengguna";
$pageSubtitle = "Kelola data pengguna perpustakaan";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/userRepository.php';

$users = getAllUsers();
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
                    <li><?php echo $user['name']; ?> (<?php echo $user['role']; ?>) - <?php echo $user['email']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>