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
$sql = "SELECT * FROM wisata_alam WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Form Edit Data
    echo "
    <h2>Edit Data Wisata</h2>
    <form method='post' action='../proses/edit_wisata.php'>
      <input type='hidden' name='id' value='" . $row['id'] . "'>
      <div class='form-group'>
        <label for='nama'>Nama :</label>
        <input type='text' class='form-control' id='nama' name='nama' value='" . $row['nama'] . "' required>
      </div>
      <div class='form-group'>
        <label for='tempat'>Tempat :</label>
        <input type='text' class='form-control' id='tempat' name='tempat' value='" . $row['tempat'] . "' required>
      </div>
      <button type='submit' class='btn btn-primary'>Simpan Perubahan</button>
    </form>";
} else {
    echo "Data tidak ditemukan.";
}

// Tutup koneksi database
$conn->close();
?>
