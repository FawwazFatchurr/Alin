<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPFC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.css">

    <style>
        body {
            background-color: #ede8e8; /* Abu-abu terang */
            padding: 20px;
        }
        .container {
            background-color: white; /* Warna putih untuk kontras */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }
        h2, h4, h5 {
            color: #343a40; /* Warna teks abu-abu gelap */
        }
        table {
            background-color: #ffffff;
        }
        /* Tambahkan gaya untuk hover */
        .navbar-nav .nav-link:hover {
            background-color: #0056b3; /* Warna latar saat di-hover */
            color: #fff !important; /* Warna teks saat di-hover */
        }

        /* Tambahkan gaya untuk halaman aktif */
        .navbar-nav .nav-link.active {
            font-weight: bold; /* Teks tebal */
            color: #fff !important; /* Warna teks aktif */
            background-color: #004085; /* Warna latar aktif */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <?php
        // Ambil parameter page
        $page = isset($_GET['page']) ? $_GET['page'] : "";

        // Daftar halaman dengan nama dan link
        $menuItems = [
            "" => "Home",
            "penambahan" => "Penambahan Matriks",
            "pengurangan" => "Pengurangan Matriks",
            "perkalian" => "Perkalian Matriks",
            "transpose" => "Transpose Matriks",
            "determinan" => "Determinan Matriks",
            "invers" => "Invers Matriks",
        ];

        // Loop untuk membuat menu
        foreach ($menuItems as $key => $value) {
            // Tambahkan class "active" jika halaman saat ini cocok
            $activeClass = ($page == $key) ? "active" : "";
            echo "<li class='nav-item'><a class='nav-link $activeClass' href='?page=$key'>$value</a></li>";
        }
        ?>
    </ul>
    <!-- Tambahkan tombol logout di kanan -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link <?= ($page == 'logout') ? 'active' : '' ?>" href="?page=logout">Logout</a>
        </li>
    </ul>
</nav>

<!-- Cek status login -->
<?php 
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "y") {
    header("Location: login.php");
    exit;
}
?>  

<!-- Container -->
<div class="container mt-4 mb-4">
    <?php
    // Routing berdasarkan parameter "page"
    // Halaman Utama
    if ($page == "") {
        if (file_exists("welcome.php")) {
            include "welcome.php";
        } else {
            echo "File welcome.php tidak ditemukan.";
        }    

    } elseif ($page == "penambahan") {
        include "penambahan.php";
    } elseif ($page == "pengurangan") {
        include "pengurangan.php";
    } elseif ($page == "perkalian") {
        include "perkalian.php";
    } elseif ($page == "transpose") {
        include "transpose.php";
    } elseif ($page == "determinan") {
        include "determinan.php";
    } elseif ($page == "invers") {
        include "invers.php";

    // Logout
    } elseif ($page == "logout") {
        // Hapus sesi dan redirect ke login
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;

    // Halaman tidak ditemukan, default ke login
    } else {
        include "login.php";
    }
    ?>
</div>

<!-- jQuery dan Bootstrap JavaScript -->
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
