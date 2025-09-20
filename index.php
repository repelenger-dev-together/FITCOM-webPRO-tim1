

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
      <label class="h2">Tabel Produk</label>
      <input type="text" id="searchBox" class="form-control w-50" placeholder="Cari produk...">
      <a href="tambahkan.php"> <button class="btn btn-primary">Tambahkan</button> </a>
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
        
      </tbody>
    </table>
  </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>