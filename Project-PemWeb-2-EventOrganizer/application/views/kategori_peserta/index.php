<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Event Organizer</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/dashboard') ?>">Event Organizer</a></li>
                           <li class="breadcrumb-item active">Data Kategori Peserta</li>
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
                   <h3 class="card-title">Data Event Organizer</h3>

                   <div class="card-tools">
                       <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <div class="col-md-12">
                       <h3>
                          Data Kategori Peserta
                       </h3>
                       <table class="table table-bordered" >
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nama</th>
                                   <th>Input</th>
                                </tr>
                           </thead>
                           <tbody>
                               <?php 
                         
                               foreach($list_kategori_peserta as $row){
                               ?>
                               <tr>
                                 
                                   <td><?=$row->id?></td>
                                   <td><?=$row->nama?></td>
                                   <td>
                                   <a class="btn btn-secondary " href="<?php echo base_url('index.php/kategori_peserta/view?id=')?><?= $row->id ?>">View Data</a>
                                        <a class="btn btn-warning" href="<?php echo base_url('index.php/kategori_peserta/edit?id=')?><?= $row->id ?>">Update</a>
                                        <a class="btn btn-danger" href="<?php echo base_url('index.php/kategori_peserta/delete?id=')?><?= $row->id ?>"
                                        onclick="if(!confirm('Hapus Data? <?=$row->id?>?')){return false}">Delete</a>
                                   </td>
                               </tr>
                               <?php 
                             
                               }
                               ?>
                           </tbody>
                       </table>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/kategori_peserta/create')?>" role="button">Input Kategori Peserta Baru</a>
                       <table class="table">
                           <thead>
                           </thead>
                           <tbody>
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