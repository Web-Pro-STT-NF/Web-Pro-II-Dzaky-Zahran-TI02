<!-- Content Wrapper. Contains page content -->

<style>

a:hover{
    color:darkblue;
}
</style>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1>Data Pendaftaran</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/daftar')?>">Event Organizer</a></li>
                       <li class="breadcrumb-item active">Data Pendaftaran</li>
                       <li class="breadcrumb-item"><a id="back-link">View Pendaftaran</a></li> 
                   </ol>
               </div>
           </div>
       </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

       <!-- Default box -->
       <div class="card">
           <div class="card-header">
               <h3 class="card-title">View Pendaftaran</h3>

               <div class="card-tools">
                   <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                       <i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                       <i class="fas fa-times"></i>
                   </button> -->
               </div>
           </div>
           <div class="card-body">
               <div class="row mb-2">
                   <div class="col-sm-12">
                       <table class="table">
                           <tbody>
                                    <tr>
                                       <td>ID</td>
                                       <td><?=$daftar->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal Daftar</td>
                                       <td><?=$daftar->tanggal_daftar?></td>
                                   </tr>
                                   <tr>
                                       <td>Alasan</td>
                                       <td><?=$daftar->alasan?></td>
                                   </tr>
                                   <tr>
                                       <td>ID User</td>
                                       <td><?=$daftar->users_id?></td>
                                   </tr>
                                   <tr>
                                       <td>ID Kegiatan</td>
                                       <td><?=$daftar->kegiatan_id?></td>
                                   </tr>
                                   <tr>
                                       <td>ID Kategori Peserta</td>
                                       <td><?=$daftar->kategori_peserta_id?></td>
                                   </tr>
                                   <tr>
                                       <td>Nomor Sertifikat</td>
                                       <td><?=$daftar->nosertifikat?></td>
                                   </tr>

                           </tbody>
                       </table>
                   </div>
                   
               </div>
               <!-- /.card-body -->
               <div class="card-footer">
               </div>
               <!-- /.card-footer-->
           </div>
           <!-- /.card -->

   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->