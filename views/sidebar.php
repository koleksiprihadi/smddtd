<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="assets/img/sandarlogo.png" alt="Sandar Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pengurus Harian</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Dewan Ambalan</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php
            if ($_SESSION["jabatan"] == 'Administrator') {
              $menu = $db->query('SELECT * FROM menu')->fetchAll();
            }elseif ($_SESSION["jabatan"] == 'Pembina') {
              $menu = $db->query('SELECT * FROM menu WHERE role LIKE "umum%"')->fetchAll();
            }else {
              $menu = $db->query('SELECT * FROM menu WHERE role="umum"')->fetchAll();
            }
            foreach ($menu as $menu){
          ?>
        <li class="nav-item">
            <a href="<?php echo $menu['link']?>" class="nav-link">
              <i class="<?php echo 'nav-icon'. $menu['logo']?>"></i>
              <p>
                <?php 
                  echo $menu['nama'];
                  if($menu['status']=='new'){
                    echo '<span class="right badge badge-danger">New</span>';
                  }
                
                ?>
              </p>
            </a>
          </li>
          <?php } ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>