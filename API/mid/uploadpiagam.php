<?php
$id = isset($_GET['hash']) ? $_GET['hash'] : $_GET['hash'] = false;
$file = isset($_GET['file']) ? $_GET['file'] : $_GET['file'] = false ;
$sukses = false;
if ($id == false || $file = false) {
    echo json_encode([
        'success' => false,
        'data' => null,
        'message' => 'Data Tidak Boleh Kosong'
      ]);
      exit();
}else{
    $url = $conf->get_gsheet() .'?action=update&jenis=piagam'.'&hash='.$id.'&data={"file":"'.$file.'"}';
    $obj = getCurl($url);
    if($obj->message == "Update successfully"){
        $sukses = true;
    }
    echo json_encode([
        'success' => $sukses,
        'data' => null,
        'message' => $obj->message
      ]);
      exit();
    exit();
}
