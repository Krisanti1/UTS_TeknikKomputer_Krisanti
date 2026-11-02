<form method="post" class="card card-soft card-body p-4">
  <div class="row g-3">
    <div class="col-md-8"><label class="form-label fw-semibold">Nama Menu</label>
      <input name="name" class="form-control" required value="<?= e($p['name']) ?>" placeholder="contoh: Nasi Goreng Spesial"></div>
    <div class="col-md-4"><label class="form-label fw-semibold">Kategori</label>
      <select name="category" class="form-select" required>
        <?php foreach (['Makanan Berat','Mie & Bakso','Gorengan','Camilan','Minuman'] as $c): ?>
          <option <?= $p['category'] === $c ? 'selected' : '' ?>><?= e($c) ?></option>
        <?php endforeach; ?>
      </select></div>
    <div class="col-md-6"><label class="form-label fw-semibold">Harga (Rp)</label>
      <input type="number" min="0" name="price" class="form-control" required value="<?= e($p['price']) ?>"></div>
    <div class="col-md-6"><label class="form-label fw-semibold">Stok (porsi)</label>
      <input type="number" min="0" name="stock" class="form-control" required value="<?= e($p['stock']) ?>"></div>
    <div class="col-12"><label class="form-label fw-semibold">Deskripsi</label>
      <textarea name="description" rows="3" class="form-control"><?= e($p['description']) ?></textarea></div>
  </div>
  <div class="mt-4"><button class="btn btn-brand px-4">Simpan</button>
    <a href="index.php" class="btn btn-outline-secondary">Batal</a></div>
</form>
