<?php
// Ambil ID dari parameter URL
$id = $_GET['id'];

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

// Query untuk mengambil data berdasarkan ID
$sql = "SELECT * FROM kriteria WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Form Edit Data
    echo "
    <h2>Edit Data Kriteria</h2>
    <form method='post' action='../proses/edit_kriteria.php'>
      <input type='hidden' name='id' value='" . $row['id'] . "'>
      <div class='form-group'>
        <label for='nama_kriteria'>Nama Kriteria:</label>
        <input type='text' class='form-control' id='nama_kriteria' name='nama_kriteria' value='" . $row['nama_kriteria'] . "' required>
      </div>
      <div class='form-group'>
        <label for='sifat_kriteria'>Sifat Kriteria:</label>
        <input type='text' class='form-control' id='sifat_kriteria' name='sifat_kriteria' value='" . $row['sifat_kriteria'] . "' required>
      </div>
      <div class='form-group'>
        <label for='bobot_kriteria'>Bobot Kriteria:</label>
        <input type='text' class='form-control' id='bobot_kriteria' name='bobot_kriteria' value='" . $row['bobot_kriteria'] . "' required>
      </div>
      <button type='submit' class='btn btn-primary'>Simpan Perubahan</button>
    </form>";
} else {
    echo "Data tidak ditemukan.";
}

// Tutup koneksi database
$conn->close();
?>
