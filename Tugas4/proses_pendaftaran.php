<?php
include 'conn.php';
$conn = connection();

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor_hp = $_POST['nomor_hp'];

$query = "INSERT INTO anggota (nama, alamat, nomor_hp) VALUES ('$nama', '$alamat', '$nomor_hp')";

if (mysqli_query($conn, $query)) {
    echo "Pendaftaran berhasil!<br><br>";
    echo "<a href='index.php'>Kembali ke Menu Utama</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
