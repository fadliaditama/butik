<?php 
    // session_start();
    // require_once '../config/db.php';

    // if(!isset($_SESSION['user'])){
    //     header('Location: ../index.php');
    // }

    // require_once 'includes/header.php';
    // require_once 'includes/dashboard.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi White Boutique</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/barang.css">
    <link rel="stylesheet" href="../../assets/css/tambah.css">
    <link rel="stylesheet" href="../../assets/css/detail-brg.css">
    <link rel="stylesheet" href="../../assets/css/kasir.css">
</head>

<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="http://localhost/phpdasar/proyek-white- boutique/admin/index.php" class="header-btn">Dashboard</a></li>
            <li><a href="http://localhost/phpdasar/proyek-white- boutique/admin/data-barang.php" class="header-btn">Barang</a></li>
            <li><a href="http://localhost/phpdasar/proyek-white- boutique/admin/petugas-kasir.php" class="header-btn">Karyawan</a></li>
            <li><a href="http://localhost/phpdasar/proyek-white- boutique/admin/transaksi.php" class="header-btn">Transaksi</a></li>
            <li><a href="logout.php" class="close-btn">Keluar</a></li>
        </ul>
    </div>
</body>

</html>