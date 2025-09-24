<?php
require 'koneksi.php';

$produks = baca("SELECT * FROM Produk");


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/tampilan.css">

    <title>Document</title>
</head>
<body>
  <div class="container">
  <div class="d-flex justify-content-between align-items-center my-3">
    <!-- Nama Tabel di kiri -->
    <label class="h3 mb-0 judul">Tabel Produk</label>

    <!-- Bagian tombol & search di kanan -->
    <div class="d-flex align-items-center gap-2">
      <!-- Dropdown filter -->
      <select class="form-select form-select-sm" id="filterSelect">
        <option value="all">gatau mau di isi apa</option>
        <option value="all">bagian mu ini ruz</option>
      </select>

      <!-- Search bar kecil -->
      <input type="text" id="searchBox" class="form-control form-control-sm" placeholder="Cari produk..." style="width: 200px;">

      <!-- Tombol Tambahkan -->
      <a href="tambahkan.php">
        <button class="btn btn-primary btn-sm">Tambahkan</button>
      </a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">Action</th>
          <th scope="col">Gambar</th>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Satuan</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody id="produkTabel">
        <?php foreach($produks as $produk) :?>
        <tr>
           <td>
            <a href="edit.php?ubah=<?= $produk['id'] ?>">
              <button class="btn btn-primary btn-sm">edit</button>
            </a> 
            <a href="hapus.php?id=<?= $produk['id']; ?>" 
              onclick="return confirm('Yakin hapus produk ini?');" 
              class="btn btn-danger btn-sm">
              Hapus
            </a>
          </td>
          <td><img src="<?= $produk['gambar']; ?>" alt="" width="170"> </td>
          <td><?= $produk['kode'] ?></td>
          <td><?= $produk['nama']; ?> </td>
          <td><?= $produk['satuan']; ?> </td>
          <td><?= $produk['harga']; ?> </td>
         
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>