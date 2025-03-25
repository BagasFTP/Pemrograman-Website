<?php
include 'conn.php';

$conn = connection();

$result = mysqli_query($conn, "SELECT * FROM petugas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petugas</title>
</head>
<body>
    <h1>Daftar Petugas</h1>
    <table border="1">
        <tr>
            <th>ID Petugas</th>
            <th>Nama</th>
            <th>Shift</th>
            <th>Kontak</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id_petugas']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['shift']; ?></td>
            <td><?php echo $row['kontak']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="index.php"><h3>Kembali ke Menu</h3></a>
</body>
</html>
