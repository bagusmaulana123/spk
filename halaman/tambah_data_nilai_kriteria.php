<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Nilai Data Kriteria</h1>
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
                        <form method="post" action="proses/tambah_nilai_kriteria.php">
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Data Kriteria:</label>
                                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
                            </div>
                            <div class="form-group">
                                <label for="sifat_kriteria">Keterngan Kriteriaa:</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                            <div class="form-group">
                                <label for="sifat_kriteria">Bobot Kriteriaa:</label>
                                <input type="text" class="form-control" id="bobot_kriteria" name="bobot_kriteria" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="../index.php?page=nilai_kriteria" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->