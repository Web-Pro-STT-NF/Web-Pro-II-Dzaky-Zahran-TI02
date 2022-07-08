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
                   <h1>Data Kegiatan</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/kegiatan')?>">Event Organizer</a></li>
                       <li class="breadcrumb-item active">Data Kegiatan</li>
                       <li class="breadcrumb-item"><a id="back-link">View Kegiatan</a></li> 
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
               <h3 class="card-title">View Kegiatan</h3>

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
                   <div class="col-sm-8">
                       <table class="table">
                           <tbody>
                                    <tr>
                                       <td>ID</td>
                                       <td><?=$kegiatan->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Judul</td>
                                       <td><?=$kegiatan->judul?></td>
                                   </tr>
                                   <tr>
                                       <td>Kapasitas</td>
                                       <td><?=$kegiatan->kapasitas?></td>
                                   </tr>
                                   <tr>
                                       <td>Harga Tiket</td>
                                       <td><?=$kegiatan->harga_tiket?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal</td>
                                       <td><?=$kegiatan->tanggal?></td>
                                   </tr>
                                   <tr>
                                       <td>Narasumber</td>
                                       <td><?=$kegiatan->narasumber?></td>
                                   </tr>
                                   <tr>
                                       <td>Tempat</td>
                                       <td><?=$kegiatan->tempat?></td>
                                   </tr>
                                   <tr>
                                       <td>Person In Charge</td>
                                       <td><?=$kegiatan->pic?></td>
                                   </tr>
                                   <tr>
                                       <td>Foto Flyer</td>
                                       <td><?=$kegiatan->foto_flyer?></td>
                                   </tr>
                                   <tr>
                                       <td>ID Jenis</td>
                                       <td><?=$kegiatan->jenis_id?></td>
                                   </tr>
                           </tbody>
                       </table>
                   </div>
                   <div class="col-sm-4">
                         <?php echo form_open_multipart('kegiatan/upload') ?>

                   <input type="hidden" name="id" value="<?= $kegiatan->id ?>">

                   <?php
                     $img = base_url('/uploads/' . $kegiatan->foto_flyer);
                     // $array = get_headers($img);
                     // $string = $array[0];

                     // if (strpos($string, "200")) {
                     //    echo '<img src="' . $img . '" alt="foto_flyer" width="100%"/>';
                     // } else {
                     //    echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto_flyer" width="100%"/>';
                     // }
                     if ($kegiatan->foto_flyer == null) {
                        echo '<img src="' . base_url("/uploads/foto_flyer2.jpg") . '" alt="foto_flyer" width="100%"/>';
                        echo '';
                        echo '';
                     } else {
                        echo '<img src="' . $img . '" alt="foto_flyer" width="100%"/>';
                     }
                     ?>
                     <input type="file" name="foto_flyer" class="btn btn-info mt-2">
                     <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button>
                   <!-- <br> -->
                   <!-- Nama File <?= $kegiatan->foto_flyer ?> -->
                   <!-- <br> -->
                   <!-- <input type="file" name="foto_flyerkegiatan" class="btn btn-info"> -->
                   <!-- <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload foto_flyer</button> -->

                   <?php echo form_close() ?>
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