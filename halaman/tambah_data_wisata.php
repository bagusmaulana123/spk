<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Wisata</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="badan">
      <div class="row">
          <div class="col-md-6">
                <form method="post" action="proses/tambah_wisata.php">
                    <div class="form-group">
                                  <label for="nama_kriteria">Nama Wisata Alam:</label>
                                  <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                                  <label for="sifat_kriteria">Kabupaten/Kota:</label>
                                  <input type="text" class="form-control" id="tempat" name="tempat" required>
                    </div>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                <a href="../index.php?page=wisata" class="btn btn-primary">Kembali</a>
                </form>
        </div>
    </div>
</div>
      </div>
    </section>
        <!-- /.row -->
   
