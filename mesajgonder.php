<?php



include "config/database.php";

extract($_POST);
if ($_POST){


    if (!$isim || !$mail || !$konu || !$mesaj){
        echo "bos";
    }else{
        $query = $db->prepare("INSERT INTO mesajlar SET mesaj_gonderenisim=?, mesaj_gönderenmail=?, mesaj_konu=?, mesaj_aciklama?");
        $insert = $query->execute(array($isim,$mail,$konu,$mesaj));

        if ($insert){
            echo "yes";
        }else{
            echo "no";
        }
    }

}
?>