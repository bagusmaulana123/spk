<?php
function tambahNilaiAlternatif($kodeAlternatif, $nilai1, $nilai2, $nilai3) {
    // Koneksi ke database (gantilah dengan informasi koneksi Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_sp";

    // Buat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Gunakan prepared statement untuk mencegah SQL injection
    $sql = "INSERT INTO rel_alternatif (kode_alternatif, nilai1, nilai2, nilai3) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Periksa apakah prepared statement berhasil
    if ($stmt === false) {
        die("Gagal membuat prepared statement: " . $conn->error);
    }

    // Bind parameter ke prepared statement
    $stmt->bind_param("ssss", $kodeAlternatif, $nilai1, $nilai2, $nilai3);

    // Eksekusi prepared statement
    if ($stmt->execute()) {
        $stmt->close(); // Tutup statement
        $conn->close(); // Tutup koneksi database
        return true; // Berhasil menambahkan nilai alternatif
    } else {
        $stmt->close(); // Tutup statement
        $conn->close(); // Tutup koneksi database
        return false; // Gagal menambahkan nilai alternatif
    }
}

// Contoh pemanggilan fungsi
if (isset($_POST['kode_alternatif'], $_POST['nilai1'], $_POST['nilai2'], $_POST['nilai3'])) {
    $kodeAlternatif = $_POST['kode_alternatif'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    // Panggil fungsi tambahNilaiAlternatif
    if (tambahNilaiAlternatif($kodeAlternatif, $nilai1, $nilai2, $nilai3)) {
        echo "Nilai alternatif berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan nilai alternatif.";
    }
}
?>
