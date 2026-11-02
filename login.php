<?php
require 'config.php';
if (!empty($_SESSION['admin'])) { header('Location: admin/index.php'); exit; }
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('SELECT * FROM admins WHERE username = ?');
    $stmt->execute([trim($_POST['username'] ?? '')]);
    $user = $stmt->fetch();
    if ($user && password_verify($_POST['password'] ?? '', $user['password'])) {
        session_regenerate_id(true);
        $_SESSION['admin'] = $user['username'];
        header('Location: admin/index.php'); exit;
    }
    $error = 'Username atau password salah.';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin - NongkrongId</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">
</head>
<body class="login-bg d-flex align-items-center justify-content-center p-3">
<div class="card login-card">
  <div class="card-body p-4 p-md-5">
    <div class="text-center mb-4">
      <div class="logo">🍜</div>
      <h3 class="brand-text mt-2 mb-0">NongkrongId</h3>
      <small class="text-muted">Kantin Kampus &middot; Login Admin</small>
    </div>
    <?php if ($error): ?><div class="alert alert-danger py-2"><?= e($error) ?></div><?php endif; ?>
    <form method="post">
      <div class="mb-3"><label class="form-label fw-semibold">Username</label>
        <input type="text" name="username" class="form-control form-control-lg" required autofocus></div>
      <div class="mb-4"><label class="form-label fw-semibold">Password</label>
        <input type="password" name="password" class="form-control form-control-lg" required></div>
      <button class="btn btn-brand btn-lg w-100">Masuk</button>
    </form>
  </div>
</div>
</body>
</html>
