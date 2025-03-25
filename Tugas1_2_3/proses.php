<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Terima kasih, $name!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Pesan Anda: $message</p>";
} else {
    echo "Akses ditolak!";
}
?>