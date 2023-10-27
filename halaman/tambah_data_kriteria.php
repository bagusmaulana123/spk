 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Tambah Data Kriteria</h1>
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
             <form method="post" action="proses/tambah_kriteria.php">
               <div class="form-group">
                 <label for="nama_kriteria">Nama Kriteria:</label>
                 <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
               </div>
               <div class="form-group">
                 <label for="sifat_kriteria">Sifat Kriteria:</label>
                 <input type="text" class="form-control" id="sifat_kriteria" name="sifat_kriteria" required>
               </div>
               <div class="form-group">
                 <label for="bobot_kriteria">Bobot Kriteria:</label>
                 <input type="text" class="form-control" id="bobot_kriteria" name="bobot_kriteria" required>
               </div>
               <button type="submit" class="btn btn-primary">Tambah Data</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </section>