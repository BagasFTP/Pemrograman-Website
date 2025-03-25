<?php
function connection(){
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $db = 'library';

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass,);

    if (!$conn) {
        die('Koneksi Gagal'. mysqli_connect_error());
    }

    mysqli_select_db($conn,$db);

    return $conn;

}
?>