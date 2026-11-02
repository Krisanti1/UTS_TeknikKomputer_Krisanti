<?php require '_top.php';
$q = trim($_GET['q'] ?? '');
$stmt = $pdo->prepare('SELECT * FROM products WHERE name LIKE ? OR category LIKE ? ORDER BY id DESC');
$stmt->execute(["%$q%", "%$q%"]);
$products = $stmt->fetchAll();
$total  = (int)$pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
$stok   = (int)$pdo->query('SELECT COALESCE(SUM(stock),0) FROM products')->fetchColumn();
$kategori = (int)$pdo->query('SELECT COUNT(DISTINCT category) FROM products')->fetchColumn();
$icons = ['Makanan Berat'=>'🍛','Mie & Bakso'=>'🍜','Gorengan'=>'🍤','Camilan'=>'🍡','Minuman'=>'🧋'];
?>
<?php if (!empty($_SESSION['flash'])): ?>
  <div class="alert alert-success"><?= e($_SESSION['flash']); unset($_SESSION['flash']); ?></div>
<?php endif; ?>

<div class="row g-3 mb-4">
  <div class="col-md-4"><div class="stat" style="background:#ea580c"><small>Total Menu</small><h3><?= $total ?></h3></div></div>
  <div class="col-md-4"><div class="stat" style="background:#b45309"><small>Total Stok (porsi)</small><h3><?= $stok ?></h3></div></div>
  <div class="col-md-4"><div class="stat" style="background:#7c2d12"><small>Kategori</small><h3><?= $kategori ?></h3></div></div>
</div>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0 fw-bold">Daftar Menu Kantin</h4>
  <a href="create.php" class="btn btn-brand">+ Tambah Menu</a>
</div>
<form class="mb-3"><div class="input-group">
  <input name="q" class="form-control" placeholder="Cari nama menu / kategori..." value="<?= e($q) ?>">
  <button class="btn btn-brand">Cari</button></div></form>

<div class="table-responsive card card-soft">
<table class="table table-hover mb-0 align-middle">
  <thead><tr><th>#</th><th>Nama Menu</th><th>Kategori</th><th>Harga</th><th>Stok</th><th width="170">Aksi</th></tr></thead>
  <tbody>
  <?php foreach ($products as $i => $r): ?>
    <tr>
      <td><?= $i + 1 ?></td>
      <td class="fw-semibold"><?= e($r['name']) ?><br><small class="text-muted fw-normal"><?= e($r['description']) ?></small></td>
      <td><span class="badge-cat"><?= $icons[$r['category']] ?? '🍽️' ?> <?= e($r['category']) ?></span></td>
      <td>Rp <?= number_format($r['price'], 0, ',', '.') ?></td>
      <td><?= (int)$r['stock'] ?></td>
      <td>
        <a href="edit.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
        <form action="delete.php" method="post" class="d-inline" onsubmit="return confirm('Hapus menu ini?')">
          <input type="hidden" name="id" value="<?= $r['id'] ?>">
          <button class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
  <?php if (!$products): ?><tr><td colspan="6" class="text-center text-muted py-4">Menu tidak ditemukan.</td></tr><?php endif; ?>
  </tbody>
</table>
</div>
<?php require '_bottom.php'; ?>
