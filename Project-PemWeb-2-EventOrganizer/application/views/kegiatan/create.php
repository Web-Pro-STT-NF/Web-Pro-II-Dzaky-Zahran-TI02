<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Kegiatan Peserta Event Organizer</h1>
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
                   <h3 class="card-title">Create Data Kegiatan</h3>

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
                   <?php echo form_open('kegiatan/save') ?>
                   <form>
                    
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">Id</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="number" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="judul" class="col-4 col-form-label">Judul</label>
                           <div class="col-8">
                               <input id="judul" name="judul" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="kapasitas" class="col-4 col-form-label">Kapasitas</label>
                           <div class="col-8">
                               <input id="kapasitas" name="kapasitas" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label>
                           <div class="col-8">
                               <input id="harga_tiket" name="harga_tiket" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                           <div class="col-8">
                               <input id="tanggal" name="tanggal" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="narasumber" class="col-4 col-form-label">Narasumber</label>
                           <div class="col-8">
                               <input id="narasumber" name="narasumber" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tempat" class="col-4 col-form-label">Tempat</label>
                           <div class="col-8">
                               <input id="tempat" name="tempat" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="pic" class="col-4 col-form-label">Person In Charge</label>
                           <div class="col-8">
                               <input id="pic" name="pic" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="foto_flyer" class="col-4 col-form-label">Foto Flyer</label>
                           <div class="col-8">
                               <input id="foto_flyer" name="foto_flyer" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="jenis_id" class="col-4 col-form-label">ID Jenis Kegiatan</label>
                           <div class="col-8">
                               <input id="jenis_id" name="jenis_id" type="text" class="form-control">
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