<?php
include "../config/database.php";
extract($_POST);
if (isset($_GET["site_id"])) {

    $site_id = $_GET["site_id"];

    if (!$site_title || !$site_url || !$site_desc || !$site_keyw || !$site_telefon || !$site_mail || !$site_saat || !$site_adres || !$site_footer || !$site_harita) {
        header("Location: site-ayarlari.php?site-guncelle=bos");
    } else {
        $query = $db->prepare("UPDATE ayarlar SET site_title=?, site_url=?, site_desc=?, site_keyw=?, site_telefon=?, site_mail=?, site_saat=?, site_adres=?, site_footer=?, site_harita=? WHERE site_id=?");
        $update = $query->execute(array($site_title, $site_url, $site_desc, $site_keyw, $site_telefon, $site_mail, $site_saat, $site_adres, $site_footer, $site_harita, $site_id));
        if ($update) {
            header("Location: site-ayarlari.php?site-guncelle=yes");
        } else {
            header("Location: site-ayarlari.php?site-guncelle=no");
        }
    }
}
// HAKKIMIZDA AYARLAR
if (isset($_GET["hakkimizda_id"])) {

    $hakkimizda_id = $_GET["hakkimizda_id"];

    if (!$hakkimizda_baslik || !$hakkimizda_medya || !$hakkimizda_aciklama || !$hakkimizda_vizyon || !$hakkimizda_misyon) {
        header("Location: hakkimizda.php?hakkimizda-guncelle=bos");
    } else {
        $query = $db->prepare("UPDATE hakkimizda SET hakkimizda_baslik=?, hakkimizda_aciklama=?, hakkimizda_medya=?, hakkimizda_vizyon=?, hakkimizda_misyon=? WHERE hakkimizda_id=?");
        $update = $query->execute(array($hakkimizda_baslik, $hakkimizda_aciklama, $hakkimizda_medya, $hakkimizda_vizyon, $hakkimizda_misyon, $hakkimizda_id));
        if ($update) {
            header("Location: hakkimizda.php?hakkimizda-guncelle=yes");
        } else {
            header("Location: hakkimizda.php?hakkimizda-guncelle=no");
        }
    }
}
//DUYURU GÜNCELLE
if (isset($_GET["duyuru_id"])) {

    $duyuru_id = $_GET["duyuru_id"];

    if (!$duyuru_kalinyazi || !$duyuru_aciklama || !$duyuru_link) {
        header("Location: duyurular.php?duyuru-guncelle=bos");
    } else {
        $query = $db->prepare("UPDATE duyurular SET duyuru_kalinyazi=?, duyuru_aciklama=?, duyuru_link=? WHERE duyuru_id=?");
        $update = $query->execute(array($duyuru_kalinyazi, $duyuru_aciklama, $duyuru_link, $duyuru_id));
        if ($update) {
            header("Location: duyurular.php?duyuru-guncelle=yes");
        } else {
            header("Location: duyurular.php?duyuru-guncelle=no");
        }
    }
}
//BASARİ GÜNCELLE
if (isset($_GET["basari_id"])) {

    $basari_id = $_GET["basari_id"];

    if (!$basari_icon || !$basari_isim || !$basari_sayi) {
        header("Location: basari-duzenle.php?basari-guncelle=bos");
    } else {
        $query = $db->prepare("UPDATE basarilar SET basari_icon=?, basari_isim=?, basari_sayi=? WHERE basari_id=?");
        $update = $query->execute(array($basari_icon, $basari_isim, $basari_sayi, $basari_id));
        if ($update) {
            header("Location: basari-duzenle.php?basari-guncelle=yes");
        } else {
            header("Location: basari-duzenle.php?basari-guncelle=no");
        }
    }
}

//HİZMET EKLE
if (isset($hizmet_ekle)){

    if (!$hizmet_icon || !$hizmet_baslik || !$hizmet_aciklama){
        header("Location: hizmetler.php?hizmet-ekle=bos");
    }else{
        $query = $db->prepare("INSERT INTO hizmetler SET hizmet_icon=?, hizmet_baslik=?, hizmet_aciklama=?");
        $insert = $query->execute(array($hizmet_icon,$hizmet_baslik,$hizmet_aciklama));
        if ($insert){
            header("Location: hizmetler.php?hizmet-ekle=yes");
        }else{
            header("Location: hizmetler.php?hizmet-ekle=no");
        }
    }
}