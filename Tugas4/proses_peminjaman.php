<?php
include 'conn.php';
$conn = connection();

$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$id_petugas = $_POST['id_petugas'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

$cek_buku = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_buku = '$id_buku'");
if (mysqli_num_rows($cek_buku) > 0) {
    echo "Buku ini sedang dipinjam!<br><br>";
    echo "<a href='form_peminjaman.php'>Coba Pinjam Buku Lain</a> | ";
    echo "<a href='index.php'>Kembali ke Menu Utama</a>";
} else {
    $query = "INSERT INTO peminjaman (id_anggota, id_buku, id_petugas, tanggal_pinjam, tanggal_kembali) 
              VALUES ('$id_anggota', '$id_buku', '$id_petugas', '$tanggal_pinjam', '$tanggal_kembali')";

    if (mysqli_query($conn, $query)) {
        echo "Peminjaman berhasil!<br><br>";
        echo "<a href='index.php'>Kembali ke Menu Utama</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
