<?php
// Other pages (e.g., dashboard.php, data_wisata.php, etc.)

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // If not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SPK</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Sistem Pendukung Keputusan Penentuan Tujuan Wisata Alam Di
                        Kalimantan Selatan</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">SPK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar bg-primary ">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/anjay.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-white">Anjay</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <div id="navbarSupportedContent">

                            <li class="nav-item">
                                <a href="index.php?page=dashboard" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-tachometer-alt text-white"></i> -->
                                    <p class="text-white">
                                        Home
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=kriteria" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                    <p class="text-white">
                                        Data Kriteria
                                    </p>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=wisata" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                    <p class="text-white">
                                        Data Wisata Alam/Alternatif
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="index.php?page=wisata" class="nav-link">
                                            <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                            <p class="text-white">
                                                Daftar Data Wisata
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?page=alternatif" class="nav-link">
                                            <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                            <p class="text-white">
                                                Nilai Alternatif
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=pembobotan" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                    <p class="text-white">
                                        Pembobotan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?page=perangkingan" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                    <p class="text-white">
                                        Perangkingan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="proses/proses_logout.php?logout=true" class="nav-link">
                                    <!-- <i class="nav-icon fas fa-th text-white"></i> -->
                                    <p class="text-white">
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </div>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="badan">
            <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
          case 'dashboard':
            include "halaman/dashboard.php";
            break;
          case 'wisata':
            include "halaman/data_wisata.php";
            break;
          case 'kriteria':
            include "halaman/data_kriteria.php";
            break;
          case 'nilai_kriteria':
            include "halaman/nilai_data_kriteria.php";
            break;
          case 'bobot_kriteria':
            include "halaman/bobot_data_kriteria.php";
            break;
          case 'pembobotan':
            include "halaman/pembobotan.php";
            break;
          case 'perangkingan':
            include "halaman/perangkingan.php";
            break;
          case 'tambah_wisata':
            include "halaman/tambah_data_wisata.php";
            break;
          case 'tambah_kriteria':
            include "halaman/tambah_data_kriteria.php";
            break;
          case 'tambah_nilai_kriteria';
            include "halaman/tambah_data_nilai_kriteria.php";
            break;
          case 'tambah_nilai_alternatif';
            include "halaman/tambah_nilai_alternatif.php";
            break;
          case 'alternatif';
            include "halaman/nilai_alternatif.php";
            break;
          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      } else {
        include "halaman/dashboard.php";
      }
      ?>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-primary">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>