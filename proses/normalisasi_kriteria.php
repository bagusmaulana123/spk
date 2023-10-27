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

// Hitung Nilai Total Bobot Kriteria
$total_bobot = 0;

// Query untuk mengambil data kriteria
$sql_kriteria = "SELECT * FROM kriteria";
$result_kriteria = $conn->query($sql_kriteria);

if ($result_kriteria->num_rows > 0) {
    while ($row_kriteria = $result_kriteria->fetch_assoc()) {
        $total_bobot += $row_kriteria['bobot_kriteria'];
        // $sql = "INSERT INTO kriteria (normalisasi) VALUES $total_bobot";
    }
}

// Normalisasi Bobot Kriteria
$normalisasi_bobot = array();

// Query untuk mengambil data kriteria
$sql_kriteria = "SELECT * FROM kriteria";
$result_kriteria = $conn->query($sql_kriteria);

if ($result_kriteria->num_rows > 0) {
    while ($row_kriteria = $result_kriteria->fetch_assoc()) {
        $bobot_kriteria = $row_kriteria['bobot_kriteria'];
        $bobot_normalisasi = $bobot_kriteria / $total_bobot;
        $normalisasi_bobot[$row_kriteria['id']] = $bobot_normalisasi;


        $sql_insert = "UPDATE kriteria SET normalisasi = '$bobot_normalisasi' WHERE id = '{$row_kriteria['id']}'";
        $mantap = $conn->query($sql_insert);
    }
}



// Tampilkan Hasil Normalisasi Bobot Kriteria
echo "<h2>Hasil Normalisasi Bobot Kriteria</h2>";
echo "<table class='table container-fluid'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th scope='col'>Kode Kriteria</th>";
echo "<th scope='col'>Bobot Kriteria</th>";
echo "<th scope='col'>Bobot Normalisasi</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Query untuk mengambil data kriteria
$sql_kriteria = "SELECT * FROM kriteria";
$result_kriteria = $conn->query($sql_kriteria);

// var_dump($normalisasi_bobot);
// die;

// if ($result_kriteria->num_rows > 0) {
//     while ($row_kriteria = $result_kriteria->fetch_assoc()) {
//         $sql_insert = "UPDATE kriteria SET normalisasi = $normalisasi_bobot[1] WHERE id= $row_kriteria['id'] ";
//         $mantap = $conn->query($sql_insert);
//     }
// }


if ($result_kriteria->num_rows > 0) {
    while ($row_kriteria = $result_kriteria->fetch_assoc()) {


        echo "<tr>";
        echo "<td>" . $row_kriteria['sifat_kriteria'] . "</td>";
        echo "<td>" . $row_kriteria['bobot_kriteria'] . "</td>";
        echo "<td>" . $normalisasi_bobot[$row_kriteria['id']] . "</td>";
        echo "</tr>";
    }
}

echo "</tbody>";
echo "</table>";

// Tutup koneksi database
$conn->close();
