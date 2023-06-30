<!DOCTYPE html> 

<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title><?php echo $title;?></title>
      <?php include 'app/link-css.php';?>
   </head> 
  
   <body class="hold-transition sidebar-mini">
   <body>
    <div class="container">
         <div style="margin-top: 10px;">
            <center>
               <button type="button" class="btn btn-primary btn-cat" id="btn-cat" data-cat-source="all">all</button>
               <button type="button" class="btn btn-primary btn-cat" id="btn-cat" data-cat-source="website">Undangan Website</button>
               <button type="button" class="btn btn-primary btn-cat" id="btn-cat" data-cat-source="video">Undangan Video</button>
            </center>
         </div>
        
          
         <div style="margin-top: 50px;" class="">
               <div class="row">
                     <div class="col-md-4" id="website">
                        <div class="card w-100">
                           <img src="https://invitationforyou.online/wp-content/uploads/2021/12/PRIVIEW_WEDTS_01-1.png" class="card-img-top" alt="demo1">
                           <div class="card-body">
                              <h5 class="card-title">Undangan Website</h5>
                              <p class="card-text">Demo 1</p>
                              <a href="#" class="btn btn-primary card-link">Lihat</a>
                              <a href="#" class="btn btn-primary card-link">Pesan</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4" id="video">
                     
                     </div>
               </div> 
         </div>  
    </div>
    <?php include 'app/link-javascripts.php';?>
</body>

</html> 