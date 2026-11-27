<?php
// nama database yg nak diconnectkan
$db_name = 'mysql:host=localhost;dbname=orphancaredb;charset=utf8mb4';
//nama & password untuk access MySQL
$user_name = 'root';
$user_password = '';

try {
    //buat connection antara PHP dengan database MySQL using PDO(PHP Data Object)
    $conn = new PDO($db_name, $user_name, $user_password);
    //setkan PDO untuk hantar exceptions kalau ada databases error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    //papar kalau gagal connect
    echo "Database connection failed:".$e->getMessage();
}



