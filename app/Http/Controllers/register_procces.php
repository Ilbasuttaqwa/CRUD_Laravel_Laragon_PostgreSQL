<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form
$user = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Menyimpan data ke database
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil! <a href='login.php'>Login</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
