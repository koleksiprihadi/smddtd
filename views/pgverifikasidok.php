<!DOCTYPE html> 
<html>
   <head>
      <meta charset = "utf-8">
      <title><?php echo $title;?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="/assets/icon/favicon.ico">
      <style>
         * {
         box-sizing: border-box;
         }
         body {
         width: 100%;
         background: #fafafa;
         margin: 0px;
         font-family: "Courier New", Courier, monospace;
         padding: 0px;
         }
         h1, h2, h3, h4, h5, p {
         padding: 0px;
         margin: 0px;
         }
         .bg {
         background-image: url('https://icollector.000webhostapp.com/widget/profile/images/mybg.png');
         background-position: center;
         background-size: 100% 360px;
         background-repeat: no-repeat;
         width: 100%;
         height: 360px;
         }
         .pf {
         width: 150px;
         height: 150px;
         border-radius: 50%;
         z-index: 1;
         }
         .main {
         width: 100%;
         margin-top: -200px;
         margin-bottom: 10px;
         }
         .contain {
         width: 80%;
         background: white;
         border-radius: 20px;
         padding: 20px;
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
         margin-top: -80px;
         margin-bottom: 20px;
         }
         .title {
         padding: 10px;
         }
         .summary {
         text-align: center;
         width: 60%;
         padding: 8px;
         margin-bottom: 10px;
         }
         .btn {
         width: 60px;
         background-color: transparent;
         border: 1px solid #333;
         border-radius: 10px;
         color: #333;
         padding: 10px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 18px;
         transition-duration: 0.4s;
         cursor: pointer;
         }
         .btn:hover {
         background-color: #222;
         color: white;
         }
         .contain_2 {
         width: 80%;
         border-radius: 20px;
         margin-bottom: 20px;
         }
         .column {
         float: left;
         width: 50%;
         padding: 20px 5px 10px 15px;
         }
         .row:after {
         content: "";
         display: table;
         clear: both;
         }
         .i_contain {
         width: 100%;
         transition-duration: 0.4s;
         cursor: pointer;
         }
         .icon_logo {
         width: 64px;
         height: 64px;
         border-radius: 10px;
         float: left;
         z-index: 1;
         margin-top: -22px;
         margin-left: -25px;
         transition-duration: 0.4s;
         /* border: 1px solid #ccc; */
         background-color: white;
         }
         .i_cards {
         width: 100%;
         height: 150px;
         background: white;
         border-radius: 20px;
         padding: 8px 8px 8px 14px;
         text-align: left;
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
         float: left;
         }
         .i_title {
         margin-top: 10px;
         margin-left: 55px;
         margin-right: 4px;
         }
         .i_summary {
         margin-left: 55px;
         overflow: hidden;
         margin-right: 4px;
         }
         .i_contain:hover .icon_logo {
         margin-top: 4px;
         }
         footer {
         padding: 30px;
         color: block;
         background: white;
         border-top: 1px solid #ccc;
         }
         footer a {
         text-decoration: none;
         color: black;
         }
         .i_space {
         width: 100%;
         height: 70px;
         }
         @media only screen and (max-width: 600px) {
         .bg {
         height: 260px;
         background-size: cover;
         }
         .main {
         margin-top: -140px;
         }
         .pf {
         width: 120px;
         height: 120px;
         }
         .contain {
         width: 85%;
         margin-top: -60px;
         }
         .summary {
         width: 80%;
         }
         .contain_2 {
         width: 85%;
         }
         .column {
         width: 100%;
         }
         .i_space {
         height: 50px;
         }
         }
         #paid_me {
         position: fixed;
         top: -10px;
         right: -55px;
         background-image: linear-gradient(to bottom right, yellow, red);
         padding: 18px 55px;
         -ms-transform: rotate(40deg);
         transform: rotate(40deg);
         text-align: center;
         color: white;
         font-size: 20px;
         text-shadow: 1px 1px #000, -1px 1px #000, 1px -1px #000, -1px -1px #000, 1px 1px 5px #555;
         animation: blinking 2s infinite;
         cursor: pointer;
         }
         @keyframes blinking {
         0% {
         color: white;
         }
         47% {
         color: #ffdebb;
         }
         62% {
         color: #ffbb73;
         }
         97% {
         color: #fb9932;
         }
         100% {
         color: #fb8402;
         }
         }
      </style>
   </head>
   <body id="myCopyright">
      <!-- <div id="paid_me" onclick="paidNow()"><b>Asli</b></div> -->
      <div class="bg"></div>
      <div class="main" align="center">
         <!-- Change your profile -->
         <img class="pf" src="/assets/img/sandarlogo.png" />
         <div class="contain">
            <div class="i_space"></div>
            <!-- Change your name -->
            <h2 class="title">Verifikasi Dokumen</h2>
            <!-- Change your bio -->
            <p class="summary">
               <?php
                  $valid = false;
                  if (isset($_POST['nomor'])) {
                     echo 'Dokumen dengan nomor ' . $_POST['nomor'] .' terverifikasi dengan detail sebagai berikut <br> <strong style="color: red;">Dokumen ini dilindungi oleh Pasal 11 ayat (1) Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (“UU ITE”) dan Pasal 59 ayat (3) PP PSTE. dilindungi oleh Pasal 11 ayat (1) Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (“UU ITE”) dan Pasal 59 ayat (3) PP PSTE. Penyalahgunaan mengandung resiko hukum</strong>.';
                     if($_POST['nomor'] != 'Tidak Valid' || $_POST['tglkeluar'] != 'Tidak Valid' || $_POST['untuk'] != 'Tidak Valid' || $_POST['file'] != 'Tidak Valid' || $_POST['verifikasi'] != 'Tidak Valid' || $_POST['deskripsi'] != 'Tidak Valid'){
                        $valid = true;
                     }
                  }else{
                     echo 'Gagal verifikasi mohon untuk menghubungi pengurus harian (Dewan Ambalan) Gudep SANDAR pada Email : sandarscout@gmail.com';
                  }
                  ?>
                  
               
            </p>
         </div>
         <div class="contain_2">
            <?php
               if ($valid == true) {
                  ?>
            <div class="row">
               <!-- Button 1 - 2 -->
               <div class="column">
                  <div class="i_contain">
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/nomordokumen.svg" />
                        <h2 class="i_title">Nomor Dokumen</h2>
                        <!-- Change your username -->
                        <p class="i_summary"><?php echo $_POST['nomor'] ?></p>
                     </div>
                  </div>
               </div>
               <div class="column">
                  <div class="i_contain">
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/tglkeluar.svg" />
                        <h2 class="i_title">Tanggal Keluar</h2>
                        <!-- Change your username -->
                        <p class="i_summary"><?php echo date('d-m-Y',strtotime('+1 day',strtotime($_POST['tglkeluar']))) ?></p>
                     </div>
                  </div>
               </div>
               <!-- Button 3 - 4 -->
               <div class="column">
                  <div class="i_contain">
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/untuk.svg" />
                        <h2 class="i_title">Ditujukan Kepada</h2>
                        <!-- Change your username -->
                        <p class="i_summary"><?php echo $_POST['untuk'] ?></p>
                     </div>
                  </div>
               </div>
               <div class="column">
                  <div class="i_contain">
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/file.svg" />
                        <h2 class="i_title">File</h2>
                        <!-- Change your username -->
                        <p class="i_summary">
                        <?php
                           if($_POST['file'] =="Belum Diupload"){
                              ?>
                        <div class="col">
                           File Belum Diupload
                        </div>
                        <?php
                           }else{
                              ?>
                        <a href="<?php echo 'https://drive.google.com/file/d/'.$_POST['file'].'/view'; ?>" target="_blank">Lihat</a>
                        <?php
                           }
                           ?>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- Button 5 - 6 -->
               <div class="column">
                  <div class="i_contain" >
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/verifikasi.svg" />
                        <h2 class="i_title">Status Tanda Tangan</h2>
                        <!-- Change your username -->
                        <p class="i_summary"><?php echo $_POST['verifikasi'] ?></p>
                     </div>
                  </div>
               </div>
               <div class="column">
                  <div class="i_contain">
                     <div class="i_cards">
                        <img class="icon_logo" src="/assets/icon/deskripsi.svg" />
                        <h2 class="i_title">Catatan</h2>
                        <!-- Change your username -->
                        <p class="i_summary"><?php echo $_POST['deskripsi'] ?></p>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }else{
                  ?>
                  <div class="i_space"></div>
                     <div class="contain">
            
            <!-- Change your bio -->
            <p class="summary" style="color: red;">
               Dokumen Tidak Ditemukan atau Tidak Pernah Dikeluarkan Oleh Gudep Sandar
            </p>
         </div>
                  <?php
               }
               ?>
         </div>
         <?php include 'views/footer.php';?>
         <!-- <footer>
            <p>Powered by <a style="display:inline-block;" title="iExperiment" alt="iExperiment" href="https://iexperimen.github.io"><b>@iExperimen</b></a></p>
            </footer> -->
      </div>
   </body>
</html>