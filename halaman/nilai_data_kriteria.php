  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <h1 class="m-0">Nilai Data Kriteria</h1>
              <table class="table container-fluid">
                  <thead class="thead-dark">
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Kriteria</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Bobot Kriteria</th>
                          <!-- <th scope="col"> </th> -->
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

            // Query untuk mengambil data dari database (gantilah sesuai dengan tabel dan kolom yang Anda gunakan)
            $sql = "SELECT * FROM nilai_kriteria";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              $counter = 1;
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $counter . "</th>";
                echo "<td>" . $row["nama_kriteria"] . "</td>";
                echo "<td>" . $row["keterangan"] . "</td>";
                echo "<td>" . $row["bobot_kriteria"] . "</td>";
                // echo "<td><a href='halaman/edit_data_wisata.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a></td>";
                // echo "<td><a href='proses/hapus_wisata.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $counter++;
              }
            } else {
              echo "Tidak ada data wisata yang ditemukan.";
            }

            // Tutup koneksi database
            $conn->close();
            ?>
                  </tbody>
              </table>
          </div>
      </div>
      <a class="btn btn-primary" href="index.php?page=tambah_nilai_kriteria" role="button">Tambah</a>
  </div><!-- /.container-fluid -->

  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
      case 'dashboard':
        include "halaman/dashboard.php";
        break;
      case 'tambah_nilai_kriteria';
        include "halaman/tambah_data_nilai_kriteria.php";
    }
  } else {
    include "halaman/dashboard.php";
  }
  ?>
  <!-- /.content-header -->