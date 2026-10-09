<?php
require_once '../../config/database.php';
require_once '../../repositories/author_repository.php';

if (isset($_GET['id'])) {
    destroyAuthor($_GET['id']);
}

header('Location: ../../pages/authors/index.php');
exit;