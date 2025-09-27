<?php 
require 'koneksi.php';

if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script>alert('Produk berhasil ditambahkan');document.location.href='index.php';</script>";
  } else {
    echo "<script>alert('Produk gagal ditambahkan');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Tambah Produk</title>
</head>
<body class="bg-secondary text-white">

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 550px; width: 100%;">
      
      <!-- Header -->
      <div class="card-header bg-success text-white text-center rounded-top-4">
        <h3 class="mb-0 fw-bold">➕ Tambah Produk</h3>
      </div>
      
      <!-- Body -->
      <div class="card-body p-4">
        <form method="POST" enctype="multipart/form-data">
          
      <!-- Kode Produk -->
      <div class="mb-3">
        <label for="kode" class="form-label fw-bold">Kode Produk</label>
        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode produk" required>
      </div>

      <!-- Nama Produk -->
      <div class="mb-3">
        <label for="nama" class="form-label fw-bold">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama produk" required>
      </div>

      <!-- Satuan -->
      <div class="mb-3">
        <label for="satuan" class="form-label fw-bold">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan (pcs, kg, liter)" required>
      </div>

      <!-- Harga -->
      <div class="mb-3">
        <label for="harga" class="form-label fw-bold">Harga</label>
        <div class="input-group">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga produk" required>
        </div>
      </div>

      <!-- Gambar -->
      <div class="mb-3">
        <label for="gambar" class="form-label fw-bold">Gambar Produk</label>
        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
      </div>


          <!-- Tombol -->
          <div class="d-flex justify-content-between mt-4">
            <a href="index.php" class="btn btn-outline-secondary px-4">
              ❌ Batal
            </a>
            <button type="submit" name="submit" class="btn btn-success px-4">
              💾 Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
