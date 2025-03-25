<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "buku_tamu";

// Koneksi ke MySQL
$conn = new mysqli($servername, $username, $password);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
