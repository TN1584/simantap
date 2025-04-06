<?php
// Konfigurasi koneksi database
$server   = "localhost";    // Nama server
$user     = "root";         // Username database
$pass     = "";             // Password database
$database = "dbarsip";      // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($server, $user, $pass, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}