<?php
$password = 'krisna';

$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;

if (!password_verify($password, $hash)) {  
    echo "pass benar";
    }
    else {  
    echo 'pass salah';
    }

