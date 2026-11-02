<?php require '_top.php';
$p = ['name'=>'','category'=>'','price'=>'','stock'=>'','description'=>''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('INSERT INTO products (name, category, price, stock, description) VALUES (?,?,?,?,?)');
    $stmt->execute([trim($_POST['name']), trim($_POST['category']), (int)$_POST['price'], (int)$_POST['stock'], trim($_POST['description'])]);
    $_SESSION['flash'] = 'Menu baru berhasil ditambahkan.';
    header('Location: index.php'); exit;
}
?>
<h4 class="mb-3">Tambah Menu Baru</h4>
<?php require '_form.php'; require '_bottom.php'; ?>
