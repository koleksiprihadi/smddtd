<?php sessioncek();?>
<?php include 'views/header.php';?>
<body class="hold-transition sidebar-mini">
   <div class="wrapper">
   <!-- NAVBAR -->
   <?php include 'views/nav.php';?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1 class="m-0">Homepage</h1>
               </div>
               <!-- /.col -->
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active">Homepage</li>
                  </ol>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <div class="card card-primary card-outline">
                     <div class="card-header">
                        <h5 class="card-title">Piagam</h5>
                     </div>
                     <div class="card-body" style="overflow-x: scroll;">
                        <p class="card-text">
                        <table id="data-piagam" class="table table-striped" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Nomor</th>
                                 <th>Tanggal Keluar</th>
                                 <th>Diberikan Kepada</th>
                                 <th>Status Verifikasi</th>
                                 <th>File</th>
                                 <th>Deskripsi</th>
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                 <th>Nomor</th>
                                 <th>Tanggal Keluar</th>
                                 <th>Diberikan Kepada</th>
                                 <th>Status Verifikasi</th>
                                 <th>File</th>
                                 <th>Deskripsi</th>
                              </tr>
                           </tfoot>
                           <tbody>
                              <?php
                                 $url = $conf->get_gsheet() .'?action=read&jenis=piagam';
                                 $obj = getCurl($url);
                                 for ($x = 1; $x < count($obj->records); $x++) {
                                 ?>
                              <tr>
                                 <td><?php echo $obj->records[$x]->nomor; ?></td>
                                 <td><?php echo $obj->records[$x]->tglkeluar; ?></td>
                                 <td><?php echo $obj->records[$x]->untuk; ?></td>
                                 <td><?php echo $obj->records[$x]->verifikasi; ?></td>
                                 <td><?php echo $obj->records[$x]->file; ?></td>
                                 <td><?php echo $obj->records[$x]->deskripsi; ?></td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                        </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                     </div>
                  </div>
                  <!-- /.card -->
               </div>
               <!-- /.col-md-6 -->
               <div class="col-lg-6">
               </div>
               <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
         <h5>Title</h5>
         <p>Sidebar content</p>
      </div>
   </aside>
   <!-- /.control-sidebar -->
   <!-- Main Footer -->
   <?php include 'views/footer.php';?>
   <script>
      $(document).ready( function () {
          $('#data-piagam').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                {
                  extend: 'print',
                  text: 'Print',
                  title: 'Daftar Piagam Yang Diterbitkan'
                }
            ]
          });
      } );
   </script>
</body>
</html>