<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="barang.css">
</head>

<body>
    <div class="wave-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#c7f9f8" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,138.7C480,149,600,203,720,186.7C 840,171,960,85,1080,74.7C1200,64,1320,128,1380,160L1440,192L1440,0L1380,0C1320,0,
1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
    </div>
    <div class="barang">
        <div class="kon" style="text-align: center;">
            <h2>- Data Barang White Boutique -</h2>
            <hr>

            <div class="date-title">
                <h4 title="click untuk menampilkan" onclick="tampilfilter()">Filter Tanggal</h4>
            </div>
            <div class="clear"></div>
            
            <div class="btn">
                <button><a href="index.php" class="btn-back">&larr; Kembali</a></button>
                <button><a href="?h=tambah" class="btn-add">Tambah Barang</a></button>
            </div>
            <div class="clear"></div>

            <!--baru -->
            <form method="POST">
                <div class="search">
                    <div class="search-input">
                        <input type="text" placeholder="cari disini..." class="form-control" id="inlineFormInputName" name="key" autocomplete="off" autofocus>
                    </div>
                    <div class="search-btn">
                        <button class="search-btn-search" name="cari" id="cari" type="submit">Cari</button>
                    </div>
                    <div class="search-btn">
                        <button class="search-btn-reset" type="reset">Reset</button>
                    </div>
                </div>
            </form>

            <form method="POST" id="date" style="display: none;">
                <div class="date">
                    <div class="date-input-from">
                        <label for="tanggal_awal">Dari Tanggal :</label>
                        <input type="date" class="date-input-from-form" id="inlineFormInputName" name="tanggal_awal">
                    </div>
                    <div class="date-input-until">
                        <label for="tanggal_akhir">Sampai Tanggal :</label>
                        <input type="date" class="date-input-until-form" id="inlineFormInputGroupUsername" name="tanggal_akhir">
                    </div>
                    <div class="date-btn">
                        <div>
                            <button class="date-btn-filter" type="submit" name="filter" id="filter">Filter</button>
                        </div>
                        <div>
                            <button type="reset" class="date-btn-reset">Reset</button>
                        </div>
                    </div>
                </div>
            </form>

            <table class="table-data">
                <thead>
                    <tr>
                        <th class="col-0">No</th>
                        <th class="col-0">Kode Barang</th>
                        <th class="col-2">Nama Barang</th>
                        <th class="col-0">Stok</th>
                        <th class="col-0">Jenis</th>
                        <th class="col-0">Harga</th>
                        <th class="col-0">Diskon(%)</th>
                        <th class="col-0">Harga Setelah Diskon</th>
                        <th class="col-1">Tanggal Masuk</th>

                        <th class="col-2">Aksi</th>
                    </tr>

                </thead>
                <tbody>


                    <?php //foreach ($data_barang as $barang) : 
                    ?>
                    <tr>
                        <td><?php //$no++ 
                            ?></td>
                        <td><?php //$barang['kode_barang'] 
                            ?></td>
                        <td><?php //$barang['nama_barang'] 
                            ?></td>
                        <td><?php //$barang['stok_barang'] 
                            ?></td>
                        <td><?php //$barang['jenis_barang'] 
                            ?></td>
                        <td><?php //$barang['harga'] 
                            ?></td>
                        <td><?php //$barang['diskon'] 
                            ?></td>
                        <td><?php //$barang['harga'] -($barang['harga'] * $barang['diskon'] / 100) 
                            ?></td>

                        <td><?php //$barang['tanggal_masuk'] 
                            ?></td>
                        <td>
                            <div class="action">
                                <a href="?h=detail&id=<?php //$barang['id'] 
                                                        ?>" class="btn-detail">Detail</a>
                                <a href="?h=edit-barang&id=<?php //$barang['id'] 
                                                            ?>" class="btn-edit">Edit</a>
                                <a href="?h=hapus&id=<?php //$barang['id'] 
                                                        ?>" class="btn-hapus">Hapus</a>

                            </div>
                        </td>

                    </tr>
                    <?php //endforeach 
                    ?>
                </tbody>
            </table>
        </div>



        <script>
            function tampilfilter() {
                var x = document.getElementById("date");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
</body>

</html>