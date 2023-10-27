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
    $keterangan = $_POST["keterangan"];
    $bobot_kriteria = $_POST["bobot_kriteria"];

    // Query untuk menyimpan data baru ke database
    $sql = "INSERT INTO nilai_kriteria (nama_kriteria, keterangan, bobot_kriteria) VALUES ('$nama_kriteria', '$keterangan', '$bobot_kriteria')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Tutup koneksi database
$conn->close();
?>
<a href="../index.php?page=nilai_kriteria">kembali</a>