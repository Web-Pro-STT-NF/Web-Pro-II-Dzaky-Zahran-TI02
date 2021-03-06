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
                   <h1>Data Jenis Kegiatan</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/jenis_kegiatan')?>">Event Organizer</a></li>
                       <li class="breadcrumb-item active">Data Jenis Kegiatan</li>
                       <li class="breadcrumb-item"><a id="back-link">View Jenis Kegiatan</a></li> 
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
               <h3 class="card-title">View Jenis Kegiatan</h3>

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
                                       <td><?=$jenis_kegiatan->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Nama</td>
                                       <td><?=$jenis_kegiatan->nama?></td>
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