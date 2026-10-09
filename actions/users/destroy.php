<?php
require_once '../../config/database.php';
require_once '../../repositories/user_repository.php';

if (isset($_GET['id'])) {
    destroyUser($_GET['id']);
}

header('Location: ../../pages/users/index.php');
exit;