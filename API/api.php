<?php
$api = $params['api'];


switch ($api) {
    case "login":
        require_once('./API/mid/login.php');
        break;
    case "index":
        require_once('./API/mid/me.php');   
        break;
    case "regis":
        require_once('./API/mid/regis.php');
        break;
    case "upload":
        require_once('./API/mid/uploadpiagam.php');
        break;
    default:
    echo json_encode([
        'success' => False,
        'data' => null,
        'message' => 'Tidak Ada Route'
      ]);
      exit();
}