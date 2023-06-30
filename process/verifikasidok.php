<?php include 'views/header.php';?>
<body>
   <main class='loading-container'>
      <p class='spinner-text'>
         Verifikasi...
      </p>
      <div class='spinner'></div>
   </main>
   <?php
      $url = $conf->get_gsheet() . '?action=read&jenis='.$params['jenis'];
      $obj = getCurl($url);
      for ($x = 1; $x < count($obj->records); $x++){
          if ($obj->records[$x]->hash == $params['hash']){
              ?>
   <form name='fr' action='/verifikasi' method='POST'>
      <input type="text" name="nomor" value="<?php echo $obj->records[$x]->nomor; ?>" hidden>
      <input type="text" name="tglkeluar" value="<?php echo $obj->records[$x]->tglkeluar; ?>" hidden>
      <input type="text" name="untuk" value="<?php echo $obj->records[$x]->untuk; ?>" hidden>
      <input type="text" name="file" value="<?php echo $obj->records[$x]->file; ?>" hidden>
      <input type="text" name="verifikasi" value="<?php echo $obj->records[$x]->verifikasi; ?>" hidden>
      <input type="text" name="deskripsi" value="<?php echo $obj->records[$x]->deskripsi; ?>" hidden>
   </form>
   <script type='text/javascript'>
      document.fr.submit();
   </script>
   <?php
      }
      }
      ?>
   <form name='fra' action='/verifikasi' method='POST'>
      <input type="text" name="nomor" value="Tidak Valid" hidden>
      <input type="text" name="tglkeluar" value="Tidak Valid" hidden>
      <input type="text" name="untuk" value="Tidak Valid" hidden>
      <input type="text" name="file" value="Tidak Valid" hidden>
      <input type="text" name="verifikasi" value="Tidak Valid" hidden>
      <input type="text" name="deskripsi" value="Tidak Valid" hidden>
   </form>
   <script type='text/javascript'>
      document.fra.submit();
   </script>
</body>
</html>