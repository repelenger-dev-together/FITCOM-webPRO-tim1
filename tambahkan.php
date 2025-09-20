<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
    <h2 class="text-center mb-4">Tambahkan Produk</h2>
    <form method="POST">
      <div class="mb-3">
        <label for="kode" class="form-label">Kode Produk</label>
        <input type="text" class="form-control" id="kode" name="kode" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="satuan" class="form-label">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
      </div>
      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Produk</label>
        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
      </div>
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary w-40" style="width: 150px;">Tambah Produk</button>
        <a href="index.php"><button type="submit" class="btn btn-danger w-40" style="width: 150px;">Cancel</button> </a>
      </div>
    </form>
  </div>
</div>

</body>
</html>