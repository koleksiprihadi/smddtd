<?php
// $url = 'https://script.google.com/macros/s/AKfycbyWusESYwR-Sd0M5MT9rtm4FD_el1-fK75BcsoAjgXsyEH7-isH3pD2tE8clbPpeZdU5g/exec?action=read&jenis=piagam';
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
// $resp = curl_exec($curl);
// curl_close($curl);
// $redirectedUrl = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
// $obj = json_decode($resp);
// for ($x = 0; $x < count($obj->records); $x++) {
// 	echo "file: ".$obj->records[$x]->nomor." <br>";
// 	echo "file: ".$obj->records[$x]->tglkeluar." <br>";
// 	echo "file: ".$obj->records[$x]->untuk." <br>";
// 	echo "file: ".$obj->records[$x]->verifikasi." <br>";
// 	echo "file: ".$obj->records[$x]->file." <br>";
// 	echo "file: ".$obj->records[$x]->deskripsi." <br>";
// }



echo $params['id'];