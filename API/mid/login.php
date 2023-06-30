<?php
// Inisialisasi API
initAPI();
// Import library
use Firebase\JWT\JWT;
use Dotenv\Dotenv;

// Load dotenv
$dotenv = Dotenv::createImmutable('./');
$dotenv->load();


// Cek method request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  exit();
}

// Ambil data json yang dikirim user
$json = file_get_contents('php://input');
$input = json_decode($json);

// Jika tidak ada data email atau password
if (!isset($input->username) || !isset($input->password)) {
  http_response_code(400);
  echo "1";
  exit();
}

$user = $db->query('SELECT * FROM user WHERE username = ?', $input->username)->fetchArray();

// Atur jenis response
header('Content-Type: application/json');

// Jika email atau password tidak sesuai
if ($input->username !== $user['username'] || !password_verify($input->password, $user['password'])) {
  echo json_encode([
    'success' => false,
    'data' => null,
    'message' => 'Email atau password tidak sesuai'
  ]);
  exit();
}

// Menghitung waktu kadaluarsa token. Dalam kasus ini akan terjadi setelah 15 menit
$expired_time = time() + (15 * 60);

// Buat payload dan access token
$payload = [
  'email' => $input->username,
  // Di library ini wajib menambah key exp untuk mengatur masa berlaku token
  'exp' => $expired_time
];

// Men-generate access token
$access_token = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET']);

// Kirim kembali ke user
echo json_encode([
  'success' => true,
  'data' => [
    'accessToken' => $access_token,
    'expiry' => date(DATE_ISO8601, $expired_time)
  ],
  'message' => 'Login berhasil!'
]);

// Ubah waktu kadaluarsa lebih lama, dalam kasus ini 1 jam
$payload['exp'] = time() + (60 * 60);
$refresh_token = JWT::encode($payload, $_ENV['REFRESH_TOKEN_SECRET']);

// Simpan refresh token di http-only cookie
setcookie('refreshToken', $refresh_token, $payload['exp'], '', '', false, true);
