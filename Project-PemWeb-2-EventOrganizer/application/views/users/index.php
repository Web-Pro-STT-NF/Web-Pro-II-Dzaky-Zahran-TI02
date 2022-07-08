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
                           <li class="breadcrumb-item active">Data Users</li>
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
                          Data Users
                       </h3>
                       <table class="table table-borderd" >
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Username</th>
                                   <th>Email</th>
                                   <th>Status</th>
                                   <th>Role</th>
                                   <th>Input</th>
                                </tr>
                           </thead>
                           <tbody>
                               <?php 
                         
                               foreach($list_users as $row){
                               ?>
                               <tr>
                                   <td><?=$row->id?></td>
                                   <td><?=$row->username?></td>
                                   <td><?=$row->email?></td>
                                   <td><?=$row->status?></td>
                                   <td><?=$row->role?></td>
                                   <td>
                                   <a class="btn btn-secondary " href="<?php echo base_url('index.php/users/view?id=')?><?= $row->id ?>">View Data</a>
                                   <a class="btn btn-danger" href="<?php echo base_url('index.php/users/delete?id=')?><?= $row->id ?>"
                                    onclick="if(!confirm('Hapus Data? <?=$row->id?>?')){return false}">Delete</a>
                                   </td>
                               </tr>
                               <?php 
                             
                               }
                               ?>
                           </tbody>
                       </table>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/users/create')?>" role="button">Input Users Baru</a>
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