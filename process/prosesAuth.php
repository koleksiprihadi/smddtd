<?php include 'views/header.php';?>
<body>
    <main class='loading-container'>
        <p class='spinner-text'>
            Autentikasi Akun...
        </p>
        <div class='spinner'></div>
    </main>
</body>
</html>
<?php
$loc = $conf->get_locerrlogin();

if($params['aksi'] == 'login'){
    if(isset($_POST['authUser'])){
      auth($_POST['authUser'], $_POST['authPass']); 
    }else{
        errLogin($loc);
    }
}else{
    errLogin($loc);
}





