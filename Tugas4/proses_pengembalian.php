<?php
include 'conn.php';
$conn = connection();

$id_peminjaman = $_POST['id_peminjaman'];

$query = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";

if (mysqli_query($conn, $query)) {
    echo "Buku berhasil dikembalikan!<br><br>";
    echo "<a href='pengembalian.php'>Kembali ke Form Pengembalian</a> | ";
    echo "<a href='index.php'>Kembali ke Menu Utama</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
