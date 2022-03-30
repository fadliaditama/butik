<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tambah.css">
</head>

<body>

<!-- wave -->
    </div>
    <div class="tbh-container">
        <div class="tbh-box">
            <div class="tbh-title" style="text-align: center;">
                    <h2>- Tambah Data Barang White Boutique -</h2>
            </div>
            <hr>
            <a href="data-barang.php" class="tbh-btn-kembali">&larr; Kembali</a>
            <div class="clearfix">

            </div>

            <form action="proses/tambah_barang.php" method="POST" class="mt- 3" autocomplete="off">
                <div class="tbh-form-group">
                    <label for="kode_barang" class="tbh-form-group- label">Kode Barang</label>
                    <input type="text" name="kode_barang" placeholder="Kode Barang" c lass="form-control" autofocus required>
                </div>
                <div class="tbh-form-group">
                    <label for="nama_barang" class="tbh-form-group- label">Nama Barang</label>
                    <input type="text" name="nama_barang" placeholder="Nama Barang" c lass="form-control" autofocus required>
                </div>
                <div class="tbh-form-group">
                    <label for="stok_barang" class="tbh-form-group- label">Stok Barang</label>
                    <input type="number" name="stok_barang" placeholder="Stok Barang" min="1" max="1000" class="form-control" required>
                </div>
                <div class="tbh-form-group">
                    <label for="jenis_barang" class="tbh-form-group- label">Jenis Barang</label>
                    <select name="jenis_barang" class="form-control" required>
                        <option value="">-- Pilih Jenis Barang --</option>
                        <option value="Baju">Baju</option>
                        <option value="Hijab">Hijab</option>
                        <option value="Rok">Rok</option>
                        <option value="Celana">Celana</option>
                    </select>
                </div>
                <div class="tbh-form-group">
                    <label for="harga" class="tbh-form-group-label">Harga Barang</label>
                    <input type="number" name="harga" placeholder="Harga Barang" class="form-control" required>
                </div>
                <div class="tbh-form-group">
                    <label for="diskon" class="tbh-form-group-label">Diskon</label>
                    <input type="number" name="diskon" placeholder="Diskon Barang" class="form-control" required>
                </div>
                <div class="tbh-form-group">
                    <label for="nama_barang" class="tbh-form-group-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" placeholder="Tanggal Masuk" class="form-control" autofocus required>
                </div>
                <button class="tbh-btn-tambah"><b class="tbh-plus">+</b> Tambah Barang</button>
            </form>
        </div>
    </div>
</body>

</html>