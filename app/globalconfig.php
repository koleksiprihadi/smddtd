<?php
$conf = new Config();

// Database MySQL
$db = new db($conf->get_dbhost(), $conf->get_dbuser(), $conf->get_dbpass(), $conf->get_dbname());

// Session Login
session_start();

// Cek Session Login
function sessioncek() {
  if (!isset($_SESSION["id_auth"]) && !isset($_SESSION["jabatan"])){
    header('Location: /login');
  }
}

// Cek role
function cekrole($role){
  if($_SESSION["jabatan"] != "Administrator"){
    if ($_SESSION["jabatan"] != $role) {
      header('Location: /');
    }
    
  }
}

// Fungsi Auth
function auth($authUser, $authPass){
    $conf = new Config();
    $db = new db($conf->get_dbhost(), $conf->get_dbuser(), $conf->get_dbpass(), $conf->get_dbname());
    $user = $authUser;
    $akun = $db->query("SELECT * FROM user WHERE username = '$user'")->fetchArray();

    if(count($akun) > 0){
        if($akun['username'] == $authUser && password_verify($authPass, $akun['password'])){
            $_SESSION["id_auth"] = $akun['id_user'];
            $_SESSION["jabatan"] = $akun['jabatan'];
            echo "<script type='text/javascript'>
                  location.replace('".$conf->get_locsukseslogin()."');
                  </script>";
        }else{
            echo "<script type='text/javascript'>
                  location.replace('/login');
                  </script>";
        }
    }else{
        echo "<script type='text/javascript'>
              location.replace('/login');
              </script>";
    }
}

function errLogin($loc) {
  echo "<script type='text/javascript'>
  location.replace('$loc');
  </script>";
}

function initAPI(){
  require_once('./vendor/autoload.php');
  require_once('./app/cors.php');
  // Atur jenis response
  header('Content-Type: application/json');
}

function getCurl($url){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
  $resp = curl_exec($curl);
  curl_close($curl);
  $obj = json_decode($resp);
  return $obj;
}

function gethash($string){
  return hash('sha256', 'harian'.strval($string));
}



