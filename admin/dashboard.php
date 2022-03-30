<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>

    <?php 
        include('index.php');
    ?>
    <div class="halo" style="text-align: center;">
        <div class="halo-profile-pic">
            <img src="../assets/img/bapak.jpg" alt="" style="border-radius: 50%;">
        </div>
        <div class="halo-name">
            <h2> <b>Hai !</b><br /> <?php //$_SESSION["user"]; 
                                    ?></h2>
        </div>
    </div>

    <div class="halo-waves">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#C7F9F8" fill-opacity="1" d="M0,32L17.1,37.3C34.3,43,69,53,103,80C137.1,107,171,149,206,186.7C240,224,274,256,309,240C342.9,224,377,160,411,117.3C445.7,75,480,53,514,69.3C548.6,85,583,139,617,133.3C651.4,128,686,64,720,69.3C754.3,75,789,149,823,197.3C857.1,245,891,267,926,229.3C960,192,994,96,1029,80C1062.9,64,1097,128,1131,149.3C1165.7,171,1200,149,1234,165.3C1268.6,181,1303,235,1337,261.3C1371.4,288,1406,288,1423,288L1440,288L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
        </svg>
    </div>

    <!-- end halo -->
    <!-- Contoh File svg wave dari laman https://getwaves.io/ -->


    <!-- box -->
    <div class="box-title" style="text-align: center;">
        <h3>
            - Pilihan Menu -
        </h3>
    </div>
    <div class="box">
        <div class="box-card">
            <?php
            // $sql = $conn->query("SELECT (tb_barang.harga * tb_transaksi.jumlah_barang) AS Total FROM `tb_t ransaksi` LEFT JOIN `tb_barang` ON tb_transaksi.id_barang = tb_barang.id");
            // $array_total = $sql->fetch_all(MYSQLI_ASSOC);
            // $total = [];
            // for ($i = 0; $i < $sql->num_rows; $i++) { array_push($total, $array_total[$i]['Total']);
            // }
            // $total_transaksi = array_sum($total);
            ?>
            <div class="box-card-title">
                <h3><b>Total Transaksi</b></h3>
            </div>
            <div class="box-card-image" style="text-align: center">
                <img src="../assets/img/bapak.jpg" alt="ilustrasi-transaksi">
            </div>
            <div class="box-card-data" style="text-align: center;">
                <h4>Rp. <?php //number_format($total_transaksi) 
                        ?></h4>
            </div>
            <div>
                <h4><a href="transaksi.php" class="box-card- details">Details &#8594;</a></h4>
            </div>
        </div>
        <div class="box-card">
            <?php
            // $sql = $conn->query("SELECT COUNT(*) AS TotalBarang FROM tb_barang");
            // $barang = $sql->fetch_assoc();
            ?>
            <div class="box-card-title">
                <h3><b>Data Barang</b></h3>
            </div>
            <div class="box-card-image" style="text-align: center;">
                <img src="../assets/img/bapak.jpg" alt="ilustrasi-
        data barang">
            </div>

            <div class="box-card-data" style="text-align: center;">
                <h4><?php  //$barang['TotalBarang'] 
                    ?></h4>
            </div>
            <div>
                <h4><a href="data-barang.php" class="box-card- details">Details &#8594;</a></h4>
            </div>
        </div>
        <div class="box-card">
            <?php
            // $sql = $conn->query("SELECT COUNT(*) AS TotalKasir FROM tb_users WHERE jabatan = 'kasir'");
            // $barang = $sql->fetch_assoc();
            ?>
            <div class="box-card-title">
                <h3><b>Data Karyawan</b></h3>
            </div>

            <div class="box-card-image" style="text-align: center;">
                <img src="../assets/img/bapak.jpg" alt="ilustrasi-
data karyawan">
            </div>
            <div class="box-card-data" style="text-align: center;">
                <h4><?php //$barang['TotalKasir'] 
                    ?></h4>
            </div>
            <div>
                <h4><a href="petugas-kasir.php" class="box-card- details">Details &#8594;</a></h4>
            </div>
        </div>
    </div>
    <!-- end block -->

    <!-- wave bottom -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#C7F9F8" fill-opacity="1" d="M0,0L16,5.3C32,11,64,21,96,42.7C128,64,160,96,192,138.7C224,181,256,235,288,256C320,277,352,267,384,234.7C416,203,448,149,480,112C512,75,544,53,576,69.3C608,85,640,139,672,154.7C704,171,736,149,768,149.3C800,149,832,171,864,160C896,149,928,107,960,117.3C992,128,1024,192,1056,186.7C1088,181,1120,107,1152,74.7C1184,43,1216,53,1248,85.3C1280,117,1312,171,1344,202.7C1376,235,1408,245,1424,250.7L1440,256L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"></path>
    </svg>
</body>

</html>