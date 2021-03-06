<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Kategori Peserta Event Organizer</h1>
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
                   <h3 class="card-title">Create Data Users</h3>

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
                   <?php echo form_open('users/save') ?>
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
                           <label for="username" class="col-4 col-form-label">Username</label>
                           <div class="col-8">
                               <input id="username" name="username" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="password" class="col-4 col-form-label">Password</label>
                           <div class="col-8">
                               <input id="password" name="password" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="email" class="col-4 col-form-label">E-Mail</label>
                           <div class="col-8">
                               <input id="email" name="email" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="created_at" class="col-4 col-form-label">Tanggal Dibuat</label>
                           <div class="col-8">
                               <input id="created_at" name="created_at" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="last_login" class="col-4 col-form-label">Login Terakhir</label>
                           <div class="col-8">
                               <input id="last_login" name="last_login" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="status" class="col-4 col-form-label">Status</label>
                           <div class="col-8">
                               <input id="status" name="status" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="role" class="col-4 col-form-label">Role</label>
                           <div class="col-8">
                               <input id="role" name="role" type="text" class="form-control">
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