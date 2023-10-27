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

// Tangani perubahan data jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $tempat = $_POST["tempat"];

    // Query untuk mengupdate data di database
    $sql = "UPDATE wisata_alam SET nama='$nama', tempat='$tempat' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


// Tutup koneksi database
$conn->close();
?>
<a href="../index.php?page=wisata">kembali</a>
