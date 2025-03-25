<?php
include 'conn.php';

$conn = connection();

$query = "SELECT * FROM buku WHERE id_buku NOT IN (SELECT id_buku FROM peminjaman)";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id_buku']; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['pengarang']; ?></td>
                <td><?php echo $row['tahun_terbit']; ?></td>
            </tr>
        <?php } ?>
    </table>
<a href="index.php"><h3>Kembali ke Menu</h3></a>
</body>
</html>