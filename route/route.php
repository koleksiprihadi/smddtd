<?php
include 'app/route-config.php';
include 'app/config.php';
$conf = new Config();
$route = new Route();

// Mulai Tambahakan Route anda dari sini


$route->addView('/',"home.php", "Dashboard");

$route->addView("/piagam","piagam.php", "piagam");

$route->addView("/user/{id}","user.php", "Surat");

$route->addView("/verifikasi","pgverifikasidok.php", "Sandar Scout | Verifikasi Dokumen");

$route->addView("/download-piagam-ambalan","downloadpiagam.php", "Sandar Scout | Download Dokumen");

// Aktifkan route dibawah jika ingin menggunakan fitur login

$route->addView('/login','pgLogin.php', 'Login');

$route->addView('/logout','pgLogout.php', 'Logout');

// Add route proses

$route->addProcess('/auth/{aksi}',"prosesAuth.php", 'auth');

$route->addProcess('/mid/{aksi}/{dokumen}',"proses.php", 'proses...');

$route->addProcess('/mid/qrcode',"generateqr.php", 'proses...');

$route->addProcess('/mid/verifikasi/{jenis}/{hash}',"verifikasidok.php", 'proses...');


// Route API

$route->addApi('/api/v1/{api}', 'api.php', "api");


// Route Error

$route->notFound("404.php", "Mohon Maaf Page Tidak Ditemukan");
