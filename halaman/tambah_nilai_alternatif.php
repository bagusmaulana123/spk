<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class="m-0">Tambah Nilai Alternatif</h1>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="badan">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="proses/tambah_nilai_alternatif.php">
                                <div class="form-group">
                                    <label for="kode_alternatif">Kode Alternatif</label>
                                    <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai1">Nilai 1</label>
                                    <input type="text" class="form-control" id="nilai1" name="nilai1" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai2">Nilai 2</label>
                                    <input type="text" class="form-control" id="nilai2" name="nilai2" required>
                                </div>
                                <div class="form-group">
                                    <label for="nilai3">Nilai 3</label>
                                    <input type="text" class="form-control" id="nilai3" name="nilai3" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                <a href="index.php?page=wisata" class="btn btn-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.row -->