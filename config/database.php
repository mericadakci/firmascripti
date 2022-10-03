<?php

session_start();
ob_start();

try {
    $db = new PDO("mysql:host=localhost; dbname=yenifirma; charset=utf8;","root","mysql");
}catch(PDOException $hata) {
    echo "Database bağlantısı kurulamadı.";
}
error_reporting(0);