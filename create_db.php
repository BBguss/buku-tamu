<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
        <?php
            include 'koneksi.php';

        // Gunakan database
        $conn->select_db($dbname);

        // Buat tabel keperluan
        $sql = "CREATE TABLE IF NOT EXISTS keperluan (
            id INT AUTO_INCREMENT PRIMARY KEY,
            deskripsi VARCHAR(255) NOT NULL
        )";
        $conn->query($sql);

        // Buat tabel tamu
        $sql = "CREATE TABLE IF NOT EXISTS tamu (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            pesan TEXT NOT NULL,
            keperluan_id INT NOT NULL,
            tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (keperluan_id) REFERENCES keperluan(id) ON DELETE CASCADE
        )";
        $conn->query($sql);


        echo "Database dan semua Tabel berhasil dibuat. Silakan <a href='tampil_tamu.php'>lihat tabel</a>";
        $conn->close();
        ?>
        </body>
        </html>