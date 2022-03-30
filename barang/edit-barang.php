<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tambah.css">
    <link rel="stylesheet" href="detail.css">
</head>
<body>
    <div class="tbh-container">
<div class="tbh-box">
<div class="tbh-title">
<h2 style="text-align: center;">Edit Data Barang White Boutique</h2>
</div>
<hr>
<a href="data-barang.php" class="tbh-btn-kembali">&larr; Kembali</a>
<div class="clearfix"></div>

<?php
// $sql = $conn-
// >query("SELECT * FROM tb_barang WHERE id = '" . $_GET['id'] . "'");
// $data = $sql->fetch_assoc();
?>

<div class="card mt-3">
<div class="dtl-brg-card-header">
<h3>Edit data <?php //$data['nama_barang'] ?></h3>
</div>
<div class="card-body">
<form action="proses/edit-data-barang.php" method="POST">
<div class="tbh-form-group">
<label for="kode_barang" class="tbh-form-group-label">Kode Barang</label>
<input type="text" name="kode_barang" value="<?php //$data['kode_barang'] ?>" class="form-control" required>
</div>
<div class="tbh-form-group">
<label for="nama_barang" class="tbh-form-group-label">Nama Barang</label>
<input type="text" name="nama_barang" value="<?php //$data['nama_barang'] ?>" class="form-control" required>
</div>
<div class="tbh-form-group">
    <label for="stok_barang" class="tbh-form-group-label">Stok Barang</label>
    <input type="number" name="stok_barang" value="<?php //$data['stok_barang']?>" min="1" max="10000" class="form-control" required>
</div>
<div class="tbh-form-group">
    <label for="harga" class="tbh-form-group-label">Harga Barang</label>
    <input type="number" name="harga" value="<?php //$data['harga'] ?>" class="form-control" required>
</div>
<div class="tbh-form-group">
    <label for="diskon" class="tbh-form-group-label">Diskon Barang</label>
    <input type="number" name="diskon" value="<?php //$data['tanggal_masuk']?>" class="form-control" required>
</div>
<input type="hidden" name="id" value="<?php //$data['id'] ?>">
<button type="submit" class="tbh-btn-tambah">Edit Data</button>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
    </div>
</body>
</html>