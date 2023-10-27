<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangani penambahan data jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kriteria = $_POST["nama_kriteria"];
    $sifat_kriteria = $_POST["sifat_kriteria"];
    $bobot_kriteria = $_POST["bobot_kriteria"];

    // Query untuk menyimpan data baru ke database
    $sql = "INSERT INTO kriteria (nama_kriteria, sifat_kriteria, bobot_kriteria) VALUES ('$nama_kriteria', '$sifat_kriteria', '$bobot_kriteria')";

    if ($conn->query($sql) === TRUE) {
        // Tampilkan pesan berhasil dengan alert JavaScript
        echo "<script>alert('Data berhasil ditambahkan.'); window.location.href = '../index.php?page=kriteria';</script>";
    } else {
        // Tampilkan pesan error dengan alert JavaScript
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
    }
}

// Tutup koneksi database
$conn->close();
?>
<a href="../index.php?page=kriteria">kembali</a>