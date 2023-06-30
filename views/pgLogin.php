<?php 
   include 'views/header.php';
   session_destroy();
?>

   <body class="bodylogin">
      <section class="vh-100">
         <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="https://sandarscout.com/wp-content/uploads/2021/03/20190329_210325.jpg" class="img-fluid"
                     alt="Sample image">
               </div>
               <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                  <figure class="text-center">
                     <blockquote class="blockquote">
                        <p>Gudep 01.045 - 01.046 Sultan Agung - Dara Juanti</p>
                        <p>Pangkalan SMA Negeri 1 Ketapang</p>
                     </blockquote>
                     <figcaption class="blockquote-footer">
                        Pengurus Harian
                     </figcaption>
                  </figure>
                  <form action="/auth/login" method="POST">
                     <!-- Email input -->
                     <div class="form-outline mb-4">
                        <input name="authUser" type="text" id="form3Example3" class="form-control form-control-lg"
                           placeholder="Username" required/>
                        <label class="form-label" for="form3Example3">Username</label>
                     </div>
                     <!-- Password input -->
                     <div class="form-outline mb-3">
                        <input name="authPass" type="password" id="form3Example4" class="form-control form-control-lg"
                           placeholder="Enter password" required/>
                        <label class="form-label" for="form3Example4">Password</label>
                     </div>
                     <div class="d-flex justify-content-between align-items-center">
                        <a href="#!" class="text-body">Forgot password?</a>
                     </div>
                     <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                           style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                           class="link-danger">Register</a></p> -->
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary" style="margin-top: 12px;">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
               <strong>Copyright &copy; 2022-<?php echo date("Y");?> <a href="https://sandarscout.com" style="color: red;">Developer Sandar</a>.</strong> All rights reserved.
            </div>
            <!-- Copyright -->
            <!-- Right -->
            <div>
               <a href="#!" class="text-white me-4">
               <i class="fab fa-facebook-f"></i>
               </a>
            </div>
            <!-- Right -->
         </div>
      </section>
      <?php include 'app/link-javascripts.php';?>
   </body>
</html>