<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Buku</title>
</head>
<body>
    <h1>Form Peminjaman Buku</h1>
    <form action="proses_peminjaman.php" method="post">
    <label>ID Anggota:</label>
    <input type="text" name="id_anggota" required><br>

    <label>ID Buku:</label>
    <input type="text" name="id_buku" required><br>

    <label>ID Petugas:</label>
    <input type="text" name="id_petugas" required><br>

    <label>Tanggal Pinjam:</label>
    <input type="date" name="tanggal_pinjam" required><br>

    <label>Tanggal Kembali:</label>
    <input type="date" name="tanggal_kembali"><br>

    <button type="submit">Pinjam</button>
</form>

</body>
</html>