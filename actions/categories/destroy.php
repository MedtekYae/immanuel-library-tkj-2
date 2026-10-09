<?php
require_once '../../config/database.php';
require_once '../../repositories/category_repository.php';

if (isset($_GET['id'])) {
    destroyCategory($_GET['id']);
}

header('Location: ../../pages/categories/index.php');
exit;