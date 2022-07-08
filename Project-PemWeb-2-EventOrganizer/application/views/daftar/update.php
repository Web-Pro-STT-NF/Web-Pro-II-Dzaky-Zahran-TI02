<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1><?= $judul ?></h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/daftar')?>">Home</a></li>
                           <li class="breadcrumb-item active">Blank Page</li>
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
                   <h3 class="card-title"><?= $judul ?></h3>

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
                   <?php
                    $hidden = ['idedit' => $daftaredit->id];
                    ?>
                   <?php echo form_open('daftar/save', '', $hidden) ?>
                   <form>
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">id</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-address-book-o"></i>
                                       </div>
                                   </div>
                                   <input id="id" name="id" value="<?= $daftaredit->id ?>" type="number" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Daftar</label>
                           <div class="col-8">
                               <input id="tanggal_daftar" name="tanggal_daftar" value="<?= $daftaredit->tanggal_daftar ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="alasan" class="col-4 col-form-label">Alasan</label>
                           <div class="col-8">
                               <input id="alasan" name="alasan" value="<?= $daftaredit->alasan ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="users_id" class="col-4 col-form-label">ID User</label>
                           <div class="col-8">
                               <input id="users_id" name="users_id" value="<?= $daftaredit->users_id ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kegiatan_id" class="col-4 col-form-label">ID Kegiatan</label>
                           <div class="col-8">
                               <input id="kegiatan_id" name="kegiatan_id" value="<?= $daftaredit->kegiatan_id ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kategori_peserta_id" class="col-4 col-form-label">ID Kategori Peserta</label>
                           <div class="col-8">
                               <input id="kategori_peserta_id" name="kategori_peserta_id" value="<?= $daftaredit->kategori_peserta_id ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nosertifikat" class="col-4 col-form-label">Nomor Sertifikat</label>
                           <div class="col-8">
                               <input id="nosertifikat" name="nosertifikat" value="<?= $daftaredit->nosertifikat ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </div>
                   </form>
                   <?php echo form_close() ?>
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