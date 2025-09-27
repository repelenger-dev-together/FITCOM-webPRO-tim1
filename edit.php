<?php
require 'koneksi.php';

$id = $_GET['ubah'];
$produk = baca("SELECT * FROM Produk WHERE id = $id")[0];

if(isset ($_POST['submit'])) {
    if(ubah() > 0 ) {
       echo "<script>alert('Produk berhasil diubah');document.location.href='index.php';</script>";
    } else {
         echo "<script>alert('Produk gagal diubah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Edit Produk</title>
</head>
<body class="bg-secondary text-white">

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 550px; width: 100%;">
      <div class="card-header bg-primary text-white text-center rounded-top-4">
        <h3 class="mb-0 fw-bold">✏️ Edit Produk</h3>
      </div>
      <div class="card-body p-4">

        <form method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $produk['id']; ?>">

        <!-- Kode Produk -->
        <div class="mb-3">
            <label for="kode" class="form-label fw-bold">Kode Produk</label>
            <input type="text" class="form-control" id="kode" name="kode" 
                    value="<?= $produk['kode']; ?>" required>
        </div>

        <!-- Nama Produk -->
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" 
                    value="<?= $produk['nama']; ?>" required>
        </div>

        <!-- Satuan -->
        <div class="mb-3">
            <label for="satuan" class="form-label fw-bold">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" 
                    value="<?= $produk['satuan']; ?>" required>
        </div>

        <!-- Harga -->
        <div class="mb-3">
            <label for="harga" class="form-label fw-bold">Harga</label>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" id="harga" name="harga" 
                    value="<?= $produk['harga']; ?>" required>
            </div>
        </div>

        <!-- Gambar -->
        <div class="mb-3">
            <label for="gambar" class="form-label fw-bold">Gambar Produk</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            <small class="text-muted">
                Gambar saat ini: <span class="fw-semibold"><?= $produk['gambar']; ?></span>
            </small>
        </div>


          <!-- Tombol -->
          <div class="d-flex justify-content-between mt-4">
            <a href="index.php" class="btn btn-outline-secondary px-4">
              ❌ Batal
            </a>
            <button type="submit" class="btn btn-success px-4" name="submit">
              💾 Update
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
