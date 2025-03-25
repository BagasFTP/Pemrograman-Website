<?php
include 'conn.php';
$conn = connection();

$result = mysqli_query($conn, "SELECT peminjaman.id_peminjaman, buku.judul, anggota.nama 
                               FROM peminjaman 
                               JOIN buku ON peminjaman.id_buku = buku.id_buku 
                               JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
</head>
<body>
    <h1>Form Pengembalian Buku</h1>
    <form action="proses_pengembalian.php" method="post">
        <label>Pilih Buku yang Dikembalikan:</label>
        <select name="id_peminjaman" required>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo $row['id_peminjaman']; ?>">
                    <?php echo $row['judul'] . " - Dipinjam oleh: " . $row['nama']; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>
        <button type="submit">Kembalikan Buku</button>
    </form>
    <br>
    <a href="index.php">Kembali ke Menu Utama</a>
</body>
</html>
