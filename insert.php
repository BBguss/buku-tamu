<?php
include 'koneksi.php';

// Insert ke tabel keperluan
$sql = "INSERT INTO keperluan (deskripsi) VALUES 
    ('Bisnis'), 
    ('Wisata'), 
    ('Kunjungan Keluarga')";
$conn->query($sql);

// Insert ke tabel tamu
$sql = "INSERT INTO tamu (nama, email, pesan, keperluan_id) VALUES 
    ('Bagus', 'gus@mail.com', 'Perihal kerjasama', 1),
    ('Budi', 'budi@mail.com', 'Saya ingin reservasi.', 2),
    ('Citra', 'citra@mail.com', 'Sangat puas dengan layanan.', 3)";
$conn->query($sql);

echo "Data awal berhasil ditambahkan✅.";
$conn->close();
?>
