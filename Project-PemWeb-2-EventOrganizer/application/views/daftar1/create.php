<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project 2 PemWeb</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
</head>
<title>Pendaftaran Event</title>
<!-- Content Wrapper. Contains page content -->
<body class="layout-top-nav">
<div class="content-wrapper"    >
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Pendaftaran Event</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Create</li>
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
                   <h3 class="card-title">Create Data Pendaftaran</h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i> -->
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <?php echo form_open('daftar/save') ?>
                   <form>
                    
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">ID</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="number" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Daftar</label>
                           <div class="col-8">
                               <input id="tanggal_daftar" name="tanggal_daftar" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="alasan" class="col-4 col-form-label">Alasan</label>
                           <div class="col-8">
                               <input id="alasan" name="alasan" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="users_id" class="col-4 col-form-label">ID User</label>
                           <div class="col-8">
                               <input id="users_id" name="users_id" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kegiatan_id" class="col-4 col-form-label">ID Kegiatan</label>
                           <div class="col-8">
                               <input id="kegiatan_id" name="kegiatan_id" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kategori_peserta_id" class="col-4 col-form-label">ID Kategori Peserta</label>
                           <div class="col-8">
                               <input id="kategori_peserta_id" name="kategori_peserta_id" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nosertifikat" class="col-4 col-form-label">Nomor Sertifikat</label>
                           <div class="col-8">
                               <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </div>
                   </form>
                   <!-- /.card-body -->
                   <?php echo form_close()?>
                   <div class="card-footer">
                   </div>
                   <!-- /.card-footer-->
               </div>
               <!-- /.card -->

       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
</body>
</html>