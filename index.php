<?php
require 'koneksi.php';

$produks = baca("SELECT * FROM Produk");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>CRUD TIM 1</title>
</head>

<body class="text-white bg-secondary">

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark shadow-sm mb-4">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">CRUD TIM 1</a>
    </div>
  </nav>

  <div class="container">

    <!-- Header + Tools -->
<div class="px-3 py-2 bg-warning text-dark rounded-top shadow-sm row g-2 align-items-center m-0">

  <!-- Judul -->
  <div class="col-12 col-lg-6">
    <h3 class="fw-bold mb-2 mb-lg-0"
        style="transition:all 0.3s ease; font-weight:900;"
        onmouseover="this.style.color='transparent'; this.style.webkitTextStroke='1px #000';" 
        onmouseout="this.style.color=''; this.style.webkitTextStroke='';">
        Tabel Produk
    </h3>

   <span id="row-indicator"
      class="badge rounded-pill bg-success ms-2"
      style="font-size: 0.8rem; vertical-align: middle;"
      data-bs-toggle="tooltip" 
      data-bs-placement="right" 
      data-bs-title="Jumlah produk">
      0
   </span>

  </div>

  <!-- Tools -->
  <div class="col-12 col-lg-6 d-flex flex-column flex-md-row justify-content-lg-end align-items-stretch gap-2">

    <!-- Search -->
    <div class="form-floating flex-grow-1">
      <input type="text" 
             class="form-control form-control-sm" 
             id="floatingInputGrid" 
             placeholder="search">
      <label for="floatingInputGrid">search</label>
    </div>

    <!-- Filter -->
    <div class="form-floating flex-grow-1">
      <select class="form-select form-select-sm" id="floatingSelectGrid">
        <option selected>pahlawan smkta</option>
        <option value="1">nasi kuning goreng</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingSelectGrid">filter</label>
    </div>

    <!-- Button -->
    <a href="tambahkan.php" 
       class="btn btn-primary btn-sm d-flex align-items-center justify-content-center px-3 w-md-auto">
      <img src="assets/icons/table.svg" alt="Tambah" width="36" class="me-1">
      Tambahkan
    </a>

  </div>
</div>

    <!-- Table -->
    <div class="table-responsive shadow-sm rounded-bottom">
      <table class="table table-striped table-hover align-middle mb-0">
        <thead class="table-dark">
          <tr>
            <th scope="col">Gambar</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Satuan</th>
            <th scope="col">Harga</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody id="produkTabel">
          <?php foreach($produks as $produk) :?>
          <tr>
            <td>
              <img src="<?= $produk['gambar']; ?>" alt="Gambar Produk" class="img-thumbnail" style="max-width: 100px;">
            </td>
            <td><?= $produk['kode'] ?></td>
            <td><?= $produk['nama']; ?></td>
            <td><?= $produk['satuan']; ?></td>
            <td><?= $produk['harga']; ?></td>
            <td class="text-center">
              <a href="edit.php?ubah=<?= $produk['id'] ?>" class="btn btn-sm btn-success me-1">
                <img src="assets/icons/edit.svg" alt="Edit" width="25">
              </a>
              <a href="hapus.php?id=<?= $produk['id']; ?>" 
                 onclick="return confirm('Yakin hapus produk ini?');"
                 class="btn btn-sm btn-danger">
                 <img src="assets/icons/delete.svg" alt="Hapus" width="25">
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/function/indicator.js"></script>
</body>
</html>
