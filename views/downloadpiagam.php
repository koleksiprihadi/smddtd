<!DOCTYPE html> 
<html>
   <head>
      <meta charset = "utf-8">
      <title><?php echo $title;?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/x-icon" href="/assets/icon/favicon.ico">
      <link rel="stylesheet" href="./assets/adminlte/dist/css/adminlte.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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
         height: auto;
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
         height: 90px;
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
            <h2 class="title">Pembagian Piagam Penghargaan</h2>
            <!-- Change your bio -->
            <p class="summary">
               Dokumen di bawah ini merupakan dokumen digital yang telah disahkan GUDEP 01.045-01.046 Sultan Agung - Dara Juanti sebelum dikeluarkan, dimohon digunakan sebagaimana mestinya! <br>
               <strong style="color: red;">Dokumen ini dilindungi oleh Pasal 11 ayat (1) Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (“UU ITE”) dan Pasal 59 ayat (3) PP PSTE. dilindungi oleh Pasal 11 ayat (1) Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (“UU ITE”) dan Pasal 59 ayat (3) PP PSTE. Penyalahgunaan mengandung resiko hukum</strong>.
            </p>
            <div style="overflow-x: scroll;">
            <table id="data-piagam" class="table table-striped" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Diberikan Kepada</th>
                                 <th>Nomor</th>
                                 <th>Status Verifikasi</th>
                                 <th>File</th>
                                 <th>Deskripsi</th>
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                    <th>Diberikan Kepada</th>
                                    <th>Nomor</th>
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
                                 <td><?php echo $obj->records[$x]->untuk; ?></td>
                                 <td><?php echo $obj->records[$x]->nomor; ?></td>
                                 <td><?php echo $obj->records[$x]->verifikasi; ?></td>
                                 <td><?php echo $obj->records[$x]->file; ?></td>
                                 <td><?php echo $obj->records[$x]->deskripsi; ?></td>
                              </tr>
                              <?php } ?>
                           </tbody>
                        </table>
            </div>
         </div>
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
          });
      } );
   </script>
   </body>
</html>