<?php require '_top.php';
$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
$stmt->execute([$id]);
$p = $stmt->fetch();
if (!$p) { header('Location: index.php'); exit; }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $up = $pdo->prepare('UPDATE products SET name=?, category=?, price=?, stock=?, description=? WHERE id=?');
    $up->execute([trim($_POST['name']), trim($_POST['category']), (int)$_POST['price'], (int)$_POST['stock'], trim($_POST['description']), $id]);
    $_SESSION['flash'] = 'Menu berhasil diperbarui.';
    header('Location: index.php'); exit;
}
?>
<h4 class="mb-3">Edit Menu</h4>
<?php require '_form.php'; require '_bottom.php'; ?>
