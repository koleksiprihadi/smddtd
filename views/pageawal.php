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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Homepage</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
            <input type="button" class="btn btn-primary" value="print" onclick="PrintDiv('surat');" />
              <div class="card-body" id="surat">
                <h5 class="card-title">Inventaris</h5>

                <p class="card-text">
                <table class="table table-striped">
                  <thead>
                     <tr>
                           <th><?php echo $_SESSION['jabatan']  ?></th>
                           <th>Column 2</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                           <td>Row 1</td>
                           <td>Row 1</td>
                     </tr>
                     <tr>
                           <td>Data 1</td>
                           <td>Data 2</td>
                     </tr>
                  </tbody>
               </table>
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
   </body> 
</html> 