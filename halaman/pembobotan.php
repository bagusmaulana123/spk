  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Pembobotan</h1>
                      <?php
            function ambilMinMaxDariDatabase()
            {
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

              // Query untuk mengambil nilai minimum dan maksimum dari kolom "nilai1", "nilai2", dan "nilai3" di tabel "rel_alternatif"
              $sql = "SELECT MIN(nilai1) AS min_nilai1, MAX(nilai1) AS max_nilai1, MIN(nilai2) AS min_nilai2, MAX(nilai2) AS max_nilai2, MIN(nilai3) AS min_nilai3, MAX(nilai3) AS max_nilai3 FROM rel_alternatif";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $minNilai1 = $row["min_nilai1"];
                $maxNilai1 = $row["max_nilai1"];
                $minNilai2 = $row["min_nilai2"];
                $maxNilai2 = $row["max_nilai2"];
                $minNilai3 = $row["min_nilai3"];
                $maxNilai3 = $row["max_nilai3"];
              } else {
                $minNilai1 = 0; // Nilai default jika tidak ada data
                $maxNilai1 = 1; // Nilai default jika tidak ada data
                $minNilai2 = 0; // Nilai default jika tidak ada data
                $maxNilai2 = 1; // Nilai default jika tidak ada data
                $minNilai3 = 0; // Nilai default jika tidak ada data
                $maxNilai3 = 1; // Nilai default jika tidak ada data
              }

              // Tutup koneksi database
              $conn->close();

              return array(
                "minNilai1" => $minNilai1,
                "maxNilai1" => $maxNilai1,
                "minNilai2" => $minNilai2,
                "maxNilai2" => $maxNilai2,
                "minNilai3" => $minNilai3,
                "maxNilai3" => $maxNilai3
              );
            }

            // Fungsi untuk menghitung nilai utility
            function hitungNilaiUtility($nilai, $min, $max)
            {
              if ($max - $min == 0) {
                return 0; // Hindari pembagian dengan nol
              }
              return ($nilai - $min) / ($max - $min);
            }

            // Contoh penggunaan:
            $nilaiKriteria1 = 90; // Ganti dengan nilai kriteria yang ingin dihitung untuk nilai1
            $nilaiKriteria2 = 80; // Ganti dengan nilai kriteria yang ingin dihitung untuk nilai2
            $nilaiKriteria3 = 85; // Ganti dengan nilai kriteria yang ingin dihitung untuk nilai3

            // Ambil nilai minimum dan maksimum dari database
            $minMax = ambilMinMaxDariDatabase();
            $minNilai1 = $minMax["minNilai1"];
            $maxNilai1 = $minMax["maxNilai1"];
            $minNilai2 = $minMax["minNilai2"];
            $maxNilai2 = $minMax["maxNilai2"];
            $minNilai3 = $minMax["minNilai3"];
            $maxNilai3 = $minMax["maxNilai3"];

            $nilaiUtility1 = hitungNilaiUtility($nilaiKriteria1, $minNilai1, $maxNilai1);
            $nilaiUtility2 = hitungNilaiUtility($nilaiKriteria2, $minNilai2, $maxNilai2);
            $nilaiUtility3 = hitungNilaiUtility($nilaiKriteria3, $minNilai3, $maxNilai3);

            echo "Nilai Utility untuk Nilai1: " . $nilaiUtility1 . "<br>";
            echo "Nilai Utility untuk Nilai2: " . $nilaiUtility2 . "<br>";
            echo "Nilai Utility untuk Nilai3: " . $nilaiUtility3 . "<br>";
            ?>



                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->