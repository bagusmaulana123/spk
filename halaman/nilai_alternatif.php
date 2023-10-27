<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <h1 class="m-0">Nilai Alternatif</h1>
                <br>
                <br>
                <table class="table container-fluid">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Alternatif</th>
                            <th scope="col">Kode Alternatif</th>
                            <th scope="col">C1</th>
                            <th scope="col">C2</th>
                            <th scope="col">C3</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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

                        // Query untuk mengambil data dari tabel "wisata_alam" dan "rel_alternatif" (sesuaikan nama tabel sesuai dengan database Anda)
                        $sql = "SELECT wa.id, wa.nama AS nama_wisata, ra.kode_alternatif, ra.nilai1, ra.nilai2, ra.nilai3
                                FROM rel_alternatif ra
                                INNER JOIN wisata_alam wa ON ra.id = wa.id";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $counter = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $counter . "</th>";
                                echo "<td>" . $row["nama_wisata"] . "</td>";
                                echo "<td>" . $row["kode_alternatif"] . "</td>";
                                echo "<td>" . $row["nilai1"] . "</td>";
                                echo "<td>" . $row["nilai2"] . "</td>";
                                echo "<td>" . $row["nilai3"] . "</td>";
                                echo "<td><a href='halaman/edit_data_wisata.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a> <a href='proses/hapus_wisata.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                                echo "</tr>";
                                $counter++;
                            }
                        } else {
                            echo "Tidak ada data wisata yang ditemukan.";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-primary" href="index.php?page=tambah_nilai_alternatif" role="button">Tambah</a>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'dashboard':
                    include "halaman/dashboard.php";
                    break;
            }
        } else {
            include "halaman/dashboard.php";
        }
        ?>
    </div>
</div>