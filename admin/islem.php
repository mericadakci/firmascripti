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
if (isset($hizmet_ekle)) {

    if (!$hizmet_icon || !$hizmet_baslik || !$hizmet_aciklama) {
        header("Location: hizmetler.php?hizmet-ekle=bos");
    } else {
        $query = $db->prepare("INSERT INTO hizmetler SET hizmet_icon=?, hizmet_baslik=?, hizmet_aciklama=?");
        $insert = $query->execute(array($hizmet_icon, $hizmet_baslik, $hizmet_aciklama));
        if ($insert) {
            header("Location: hizmetler.php?hizmet-ekle=yes");
        } else {
            header("Location: hizmetler.php?hizmet-ekle=no");
        }
    }
}

//HİZMET GÜNCELLE
if (isset($hizmet_duzenle)) {
    $hizmet_id = $_GET["hizmet_id"];

    if (!$hizmet_icon || !$hizmet_baslik || !$hizmet_aciklama) {
        header("Location: hizmetler.php?hizmet-guncelle=bos");
    } else {
        $query = $db->prepare("UPDATE hizmetler SET hizmet_icon=?, hizmet_baslik=?, hizmet_aciklama=? WHERE hizmet_id=?");
        $update = $query->execute(array($hizmet_icon, $hizmet_baslik, $hizmet_aciklama, $hizmet_id));
        if ($update) {
            header("Location: hizmetler.php?hizmet-guncelle=yes");
        } else {
            header("Location: hizmetler.php?hizmet-guncelle=no");
        }
    }
}

//HİZMET SİLME İŞLEMİ
extract($_GET);
if (isset($hizmetsil_id)) {
    $query = $db->prepare("DELETE FROM hizmetler WHERE hizmet_id=?");
    $delete = $query->execute(array($hizmetsil_id));
    if ($delete) {
        header("Location: hizmetler.php?hizmet-sil=yes");
    } else {
        header("Location: hizmetler.php?hizmet-sil=no");
    }
}

//SPONSOR EKLE
$dosya_turu = array("image/jpeg", "image/jpg", "image/png", "image/x-png");
$dosya_uzanti = array("jpeg", "jpg", "png", "x-png");

extract($_POST);

if (isset($sponsor_ekle)) {
    $kaynak = $_FILES["sponsor_resim"]["tmp_name"]; //fotoğrafın geçici olarak yüklendigi yer veya isim
    $isim = $_FILES["sponsor_resim"]["name"];  //fotoğrafın ismi
    $boyut = $_FILES["sponsor_resim"]["size"]; //fotoğraf boyutu
    $turu = $_FILES["sponsor_resim"]["type"]; //fotoğrafın türü

    $uzanti = substr($isim, strpos($isim, ".") + 1); //noktadan sonra harften okumaya başla
    $resimAd = substr(uniqid(rand()), 0, 11) . "_" . $isim; //Fotoğrafın yeni ismini belirledik
    $hedef = "../images/sponsorlar/" . $resimAd; //Fotoğrafın nereye yüklenecegini bellirttik

    if (!$_FILES["sponsor_resim"]["size"] > 0 || !$sponsor_isim) {
       header("Location: sponsorlar.php?sponsor-ekle=bos");

    } else {
        if ($kaynak) {
            if (!in_array($turu, $dosya_turu) && !in_array($uzanti, $dosya_uzanti)) {
                header("Location: sponsorlar.php?sponsor-ekle=gecersizuzanti");
            } elseif ($boyut > 1024 * 1024 * 5) {
                header("Location: sponsorlar.php?sponsor-ekle=buyuk");
            } else {
                if (move_uploaded_file($kaynak, $hedef)) {
                    $query = $db->prepare("INSERT INTO sponsorlar SET sponsor_resim=?, sponsor_isim=?");
                    $insert = $query->execute(array($resimAd, $sponsor_isim));
                    if ($insert) {
                        header("Location: sponsorlar.php?sponsor-ekle=yes");
                    } else {
                        header("Location: sponsorlar.php?sponsor-ekle=no");
                    }
                }
            }
        }
    }
}

//SPONSOR GÜNCELLE
if (isset($sponsor_duzenle)) {
    $sponsor_id = $_GET["sponsor_id"];

    if ($_FILES["sponsor_resim"]["size"] > 0) {

        $kaynak = $_FILES["sponsor_resim"]["tmp_name"]; //fotoğrafın geçici olarak yüklendigi yer veya isim
        $isim = $_FILES["sponsor_resim"]["name"];  //fotoğrafın ismi
        $boyut = $_FILES["sponsor_resim"]["size"]; //fotoğraf boyutu
        $turu = $_FILES["sponsor_resim"]["type"]; //fotoğrafın türü

        $uzanti = substr($isim, strpos($isim, ".") + 1); //noktadan sonra harften okumaya başla
        $resimAd = substr(uniqid(rand()), 0, 11) . "_" . $isim; //Fotoğrafın yeni ismini belirledik
        $hedef = "../images/sponsorlar/" . $resimAd; //Fotoğrafın nereye yüklenecegini bellirttik


        if ($kaynak) {
            if (!in_array($turu, $dosya_turu) && !in_array($uzanti, $dosya_uzanti)) {
                header("Location: sponsorlar.php?sponsor-guncelle=gecersizuzanti");
            } elseif ($boyut > 1024 * 1024 * 5) {
                header("Location: sponsorlar.php?sponsor-guncelle=buyuk");
            } else {

                // ÖNCEKİ RESMİ SİLELİM
                $sil = $db->prepare("SELECT * FROM sponsorlar WHERE sponsor_id=?");
                $sil->execute(array($sponsor_id));
                $eski_resim = $sil->fetch(PDO::FETCH_ASSOC);
                $eski_resim["sponsor_resim"]; // ESKİ RESMİMİZİ SİLMEMİZ İÇİN GEREKLİ OLAN KOD

                unlink("../images/sponsorlar/".$eski_resim["sponsor_resim"]);

                if (move_uploaded_file($kaynak, $hedef)) {
                    $query = $db->prepare("UPDATE sponsorlar SET sponsor_resim=?, sponsor_isim=? WHERE sponsor_id=?");
                    $insert = $query->execute(array($resimAd, $sponsor_isim, $sponsor_id));
                    if ($insert) {
                        header("Location: sponsorlar.php?sponsor-guncelle=yes");
                    } else {
                        header("Location: sponsorlar.php?sponsor-guncelle=no");
                    }
                }
            }
        }
    }else{
        $query = $db->prepare("UPDATE sponsorlar SET sponsor_isim=? WHERE sponsor_id=?");
                    $update = $query->execute(array($sponsor_isim, $sponsor_id));
                    if ($update) {
                        header("Location: sponsorlar.php?sponsor-guncelle=yes");
                    } else {
                        header("Location: sponsorlar.php?sponsor-guncelle=no");
                    }
    }
}

//SPONSOR SİLME İŞLEMİ
if (isset($sponsorsil_id)){
    $sil = $db->prepare("SELECT * FROM sponsorlar WHERE sponsor_id=?");
    $sil->execute(array($sponsorsil_id));
    $eski_resim = $sil->fetch(PDO::FETCH_ASSOC);
    $eski_resim["sponsor_resim"]; // ESKİ RESMİMİZİ SİLMEMİZ İÇİN GEREKLİ OLAN KOD

    unlink("../images/sponsorlar/".$eski_resim["sponsor_resim"]);

    $query = $db->prepare("DELETE FROM sponsorlar WHERE sponsor_id=?");
    $delete = $query->execute(array($sponsorsil_id));
    if ($delete) {
        header("Location: sponsorlar.php?sponsor-sil=yes");
    } else {
        header("Location: sponsorlar.php?sponsor-sil=no");
    }
}
