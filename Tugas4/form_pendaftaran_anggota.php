<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota</title>
</head>
<body>
    <h1>Form Pendaftaran Anggota</h1>
    <form action="proses_pendaftaran.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label>Nomor HP:</label>
        <input type="text" name="nomor_hp" required><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
