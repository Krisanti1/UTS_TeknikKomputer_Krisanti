<?php
require_once __DIR__ . '/../config.php';
require_login();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo->prepare('DELETE FROM products WHERE id = ?')->execute([(int)($_POST['id'] ?? 0)]);
    $_SESSION['flash'] = 'Menu berhasil dihapus.';
}
header('Location: index.php');
