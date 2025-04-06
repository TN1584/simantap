<?php
session_start();

// Cek apakah user sudah login atau belum
if (!isset($_SESSION['id_user']) || !isset($_SESSION['username'])) {
    echo "<script>
            alert('Maaf, untuk mengakses halaman ini, Anda harus login terlebih dahulu!');
            window.location.href = 'index.php';
          </script>";
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <title>Managemen | Surat Dokumen</title>
  </head>
  <body>
    <!-- awal nav / menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container"> 
    <a class="navbar-brand" href="?">E-Arsip</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=departemen">Data Departemen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=pengirim_surat">Data Pengirim Surat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?halaman=arsip_surat">Data Arsip Surat</a>
            </li>

            
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
    </div>
    </nav>
    <!-- akhir nav / menu -->
    <!-- awal container -->
    <div class="container">