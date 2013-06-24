<?php

$dsn = "mysql:host=127.0.0.1;dbname=crud";
$user = 'root';
$password = '';

try{
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Koneksi gagal: '.$e->getMessage();
}