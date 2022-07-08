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
                   <h1>Data Users</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/users')?>">Event Organizer</a></li>
                       <li class="breadcrumb-item active">Data Users</li>
                       <li class="breadcrumb-item"><a id="back-link">View Users</a></li> 
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
               <h3 class="card-title">View Users</h3>

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
                                       <td><?=$users->id?></td>
                                   </tr>
                                   <tr>
                                       <td>Username</td>
                                       <td><?=$users->username?></td>
                                   </tr>
                                   <tr>
                                       <td>Password</td>
                                       <td><?=$users->password?></td>
                                   </tr>
                                   <tr>
                                       <td>E-Mail</td>
                                       <td><?=$users->email?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal Dibuat</td>
                                       <td><?=$users->created_at?></td>
                                   </tr>
                                   <tr>
                                       <td>Login Terakhir</td>
                                       <td><?=$users->last_login    ?></td>
                                   </tr>
                                   <tr>
                                       <td>Status</td>
                                       <td><?=$users->status?></td>
                                   </tr>
                                   <tr>
                                       <td>Role</td>
                                       <td><?=$users->role?></td>
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