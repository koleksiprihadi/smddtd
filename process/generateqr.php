<?php
$hash = isset($_POST['hash']) ? $_POST['hash'] : 'http://sandarscout.com.com';
$nama = isset($_POST['nama']) ? $_POST['nama'] : 'gagal';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : 'tidak diketahui';
$size = '500x500';
$logo = 'https://sandarscout.com/wp-content/uploads/2021/03/sandarscout-100x100-1.png';
$data = 'https://pengurusharian.sandarscout.com/mid/verifikasi/'.$jenis.'/'.$hash;


header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="'.$nama.'.png"');
header('Content-type: image/png');
// Get QR Code image from Google Chart API
// http://code.google.com/apis/chart/infographics/docs/qr_codes.html
$QR = imagecreatefrompng('https://chart.googleapis.com/chart?cht=qr&chld=H|0&chs='.$size.'&chl='.urlencode($data));
if($logo !== FALSE){
	$logo = imagecreatefromstring(file_get_contents($logo));

	$QR_width = imagesx($QR);
	$QR_height = imagesy($QR);
	
	$logo_width = imagesx($logo);
	$logo_height = imagesy($logo);
	
	// Scale logo to fit in the QR Code
	$logo_qr_width = $QR_width/3;
	$scale = $logo_width/$logo_qr_width;
	$logo_qr_height = $logo_height/$scale;
	
	imagecopyresampled($QR, $logo, $QR_width/3, $QR_height/3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
}
$a =imagepng($QR);
// $image = file_get_contents('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=krisna');
$image = file_get_contents($a);
// header('Content-Length: ' . strlen($image));
echo $image;
// imagedestroy($QR);

?>