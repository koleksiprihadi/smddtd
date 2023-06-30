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
                     <h1 class="m-0">Piagam</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Piagam</li>
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
         <div class="content" style="overflow-x: scroll;">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseformtambah" aria-expanded="false" aria-controls="collapseformtambah" style="margin-bottom: 3px;">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
               </svg>
               tambah piagam
            </button>
            <div class="collapse" id="collapseformtambah">
               <div class="card card-body">
                  <form action="/mid/insert/piagam" method="post" class="row g-3">
                     <div class="col-md-6">
                        <label for="inputnomor" class="form-label">Nomor</label>
                        <input type="text" class="form-control" name="nomor" id="inputnomor" placeholder="00/SANDAR/VI/2022" required>
                     </div>
                     <div class="col-md-6">
                        <label for="inputuntuk" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="inputuntuk" placeholder="Diberikan Kepada" required>
                     </div>
                     <div class="col-12">
                        <label for="inputuntuk" class="form-label">Tanggal Dikeluarkannya</label>
                        <input type="date" class="form-control" name="tanggal" id="inputuntuk" placeholder="Diberikan Kepada" required>
                     </div>
                     <div class="col-12">
                        <label for="inputdesk" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="inputdesk" placeholder="Piagam Penghargaan Dewan Ambalan" required>
                     </div>
                     <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                     </div>
                  </form>
               </div>
            </div>
            <table id="data-piagam" class="table table-striped" style="width:100%">
               <thead>
                  <tr>
                     <th>Nomor</th>
                     <th>Tanggal Keluar</th>
                     <th>Diberikan Kepada</th>
                     <th>Status Verifikasi</th>
                     <th>File</th>
                     <th>Deskripsi</th>
                     <th>Action</th>
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
                     <th>Action</th>
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
                     <td><?php echo date('Y-m-d',strtotime('+1 day',strtotime($obj->records[$x]->tglkeluar))) ?></td>
                     <td><?php echo $obj->records[$x]->untuk; ?></td>
                     <td><?php echo $obj->records[$x]->verifikasi; ?></td>
                     <td>
                        <?php
                           if($obj->records[$x]->file =="Belum Diupload"){
                              ?>
                        <div class="col">
                           <a href="https://docs.google.com/forms/d/e/1FAIpQLSf-uih5DZqLf4vmKa6Hp1IVYgQwZ9ielPUfidpfn6MjbH-84w/viewform?usp=pp_url&entry.22258060=<?php echo $obj->records[$x]->hash ?>" target="_blank"><i class="bi bi-cloud-upload-fill"></i>Upload File</a>
                        </div>
                        <?php
                           }else{
                              ?>
                        <a href="<?php echo 'https://drive.google.com/file/d/'.$obj->records[$x]->file.'/view'; ?>" target="_blank">Lihat</a>
                        <?php
                           }
                           ?>
                     </td>
                     <td><?php echo $obj->records[$x]->deskripsi; ?></td>
                     <td>
                        <div class="row">
                           <div class="col">
                              <form action="/mid/qrcode" method="post">
                                 <input type="text" name="hash" value="<?php echo $obj->records[$x]->hash; ?>" hidden>
                                 <input type="text" name="nama" value="<?php echo $obj->records[$x]->untuk; ?>" hidden>
                                 <input type="text" name="jenis" value="piagam" hidden>
                                 <button type="submit" class="btn btn-success mb-3"><i class="bi bi-cloud-download-fill">Download Qr Code</i></button>
                              </form>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
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
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            dom: 'Bfrtip',
            buttons: [
                {
                  extend: 'print',
                  text: 'Print',
                  title: 'Daftar Piagam Yang Diterbitkan',
                  customize: function ( win ) {
                     $(win.document.body).find('h1').css('text-align', 'center');
                     $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend('<img src="https://sandarscout.com/wp-content/uploads/2021/03/sandarscout-100x100-1.png" style="position: fixed; bottom: 0; right: 0; z-index:999; opacity:0.2; width:500px;" />');
      
                     $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                     },
                }
            
            ]
          });
          $('#picker').dateTimePicker({
      dateFormat:"YYYY-MM-DD HH:mm"
      });
      } );
      
      
      
      
   </script>
   <?php
      if(isset($_POST['alert'])){
         if($_POST['alert']== 'Insertion successful'){
            echo "<script>alertify.success('".$_POST['alert']."');</script>";
         }else{
            echo "<script>alertify.error('".$_POST['alert']."');</script>";
         }
      }
      ?>
</body>
</html>