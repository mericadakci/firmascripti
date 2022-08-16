<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=yenifirma; charset=utf8;","root","15032004*");
}catch(PDOException $hata) {
    echo "Database bağlantısı kurulamadı.";
}