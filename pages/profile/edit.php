<?php
$pageTitle = "Edit Profil";
$pageSubtitle = "Perbarui informasi profil pengguna";

require_once '../../components/admin/sidebar.php';
require_once '../../repositories/user-repository.php';

$profile = getProfile();
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
            <h2>Edit Profil</h2>
            <form action="../../actions/profile/update.php" method="POST">
                <div>
                    <label>Nama:</label>
                    <input type="text" name="name" value="<?php echo $profile['name']; ?>" required>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo $profile['email']; ?>" required>
                </div>
                <button type="submit">Simpan Profil</button>
            </form>
        </div>
    </main>
</div>
</body>
</html>