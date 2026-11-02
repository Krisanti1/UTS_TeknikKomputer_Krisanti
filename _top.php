<?php require_once __DIR__ . '/../config.php'; require_login(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin - NongkrongId</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-nongkrong mb-4 shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">🍜 NongkrongId <small class="opacity-75 fw-normal">| Admin</small></a>
    <div class="text-white">Halo, <b><?= e($_SESSION['admin']) ?></b>
      <a href="../logout.php" class="btn btn-sm btn-light ms-3">Logout</a></div>
  </div>
</nav>
<div class="container pb-5">
