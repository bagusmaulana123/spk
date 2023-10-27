<?php
// Lakukan koneksi ke database (gantilah dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari parameter URL
$id = $_GET['id'];

// Query untuk menghapus data dari database
$sql = "DELETE FROM kriteria WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Tampilkan pesan berhasil dengan alert JavaScript
    echo "<script>alert('Data berhasil dihapus.'); window.location.href = '../index.php?page=kriteria';</script>";
} else {
    // Tampilkan pesan error dengan alert JavaScript
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href = '../index.php?page=kriteria';</script>";
}

// Tutup koneksi database
$conn->close();
