-- --------------------------------------------------------
-- Sunucu:                       localhost
-- Sunucu sürümü:                8.0.18 - MySQL Community Server - GPL
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- yenifirma için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `yenifirma` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `yenifirma`;

-- tablo yapısı dökülüyor yenifirma.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_kadi` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_sifre` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.admin: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- tablo yapısı dökülüyor yenifirma.ayarlar
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_keyw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_telefon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_saat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_harita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.ayarlar: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `ayarlar` (`site_id`, `site_title`, `site_url`, `site_desc`, `site_keyw`, `site_telefon`, `site_mail`, `site_saat`, `site_adres`, `site_harita`, `site_footer`) VALUES
	(1, 'Özde İnşaat', 'http://localhost/', 'İnşaat üzerine bir site kodluyoruz.', 'İnşaat, daire, tuğla,demir,beton', '0532 450 53 45', 'mericadakci96@gmail.com', 'Pazartesi-Cumartesi 08:00 - 18:00', 'Manav Mah. Portakal Sok. No:45', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375', 'Tüm Hakları Saklıdır');

-- tablo yapısı dökülüyor yenifirma.basarilar
CREATE TABLE IF NOT EXISTS `basarilar` (
  `basari_id` int(11) NOT NULL AUTO_INCREMENT,
  `basari_icon` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `basari_isim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `basari_sayi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`basari_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.basarilar: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `basarilar` (`basari_id`, `basari_icon`, `basari_isim`, `basari_sayi`) VALUES
	(1, 'connectdevelop', 'PROJE TAMAMLANDI', '800'),
	(2, 'home', 'EV TADİLATLARI', '229'),
	(3, 'users', 'ÇALIŞAN İŞÇİLER', '1390'),
	(4, 'trophy', 'KAZANILAN ÖDÜLLER', '125');

-- tablo yapısı dökülüyor yenifirma.duyurular
CREATE TABLE IF NOT EXISTS `duyurular` (
  `duyuru_id` int(11) NOT NULL AUTO_INCREMENT,
  `duyuru_kalinyazi` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_aciklama` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`duyuru_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.duyurular: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `duyurular` (`duyuru_id`, `duyuru_kalinyazi`, `duyuru_aciklama`, `duyuru_link`) VALUES
	(1, 'Hayalinizdeki evi inşa etmeniz gerekiyorsa şimdi rezervasyon yapın.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut emek ve dolore magna aliqua.</p>\r\n', 'iletişim.php');

-- tablo yapısı dökülüyor yenifirma.ekip
CREATE TABLE IF NOT EXISTS `ekip` (
  `ekip_id` int(11) NOT NULL AUTO_INCREMENT,
  `ekip_resim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ekip_isim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ekip_mevki` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ekip_facebook` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ekip_twitter` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ekip_linkedin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`ekip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.ekip: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `ekip` (`ekip_id`, `ekip_resim`, `ekip_isim`, `ekip_mevki`, `ekip_facebook`, `ekip_twitter`, `ekip_linkedin`) VALUES
	(1, 'tm-1.jpg ', 'Meriç Adakçı', 'PHP Devoloper', '*', '*', '*'),
	(2, 'tm-2.jpg', 'Mustafa', 'PHP Devolor', '*', '*', '*'),
	(3, 'tm-3.jpg', 'Mehmet', 'PHP Devolor', '*', '*', '*'),
	(4, 'tm-4.jpg', 'Mert', 'PHP Devolor', '*', '*', '*');

-- tablo yapısı dökülüyor yenifirma.hakkimizda
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimizda_baslik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `hakkimizda_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci,
  `hakkimizda_medya` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `hakkimizda_vizyon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci,
  `hakkimizda_misyon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.hakkimizda: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_medya`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
	(1, 'TEST BAŞLIK', '<p>A&Ccedil;IKLAMA</p>\r\n', 'TEST MEDYA', '<p>A&Ccedil;IKLAMA</p>\r\n', '<p>A&Ccedil;IKLAMA</p>\r\n');

-- tablo yapısı dökülüyor yenifirma.hizmetler
CREATE TABLE IF NOT EXISTS `hizmetler` (
  `hizmet_id` int(11) NOT NULL AUTO_INCREMENT,
  `hizmet_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `hizmet_baslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `hizmet_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`hizmet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.hizmetler: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `hizmetler` (`hizmet_id`, `hizmet_icon`, `hizmet_baslik`, `hizmet_aciklama`) VALUES
	(1, 'home', 'Profesyonel Yapı', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod'),
	(2, 'users', 'Kaliteyi Sunuyoruz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod'),
	(3, 'check', 'Daima Zamanında', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod'),
	(4, 'th', 'Tutkuluyuz', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod');

-- tablo yapısı dökülüyor yenifirma.logofavicon
CREATE TABLE IF NOT EXISTS `logofavicon` (
  `lf_id` int(11) NOT NULL AUTO_INCREMENT,
  `lf_logo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL COMMENT 'logo.png',
  `lf_favicon` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL COMMENT 'favicon.png',
  PRIMARY KEY (`lf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.logofavicon: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `logofavicon` (`lf_id`, `lf_logo`, `lf_favicon`) VALUES
	(1, 'logo.png', '44410843863_user.png');

-- tablo yapısı dökülüyor yenifirma.mesajlar
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `mesaj_id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj_gonderenisim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_gonderenmail` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_konu` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mesaj_okunma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mesaj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.mesajlar: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor yenifirma.projelerimiz
CREATE TABLE IF NOT EXISTS `projelerimiz` (
  `proje_id` int(11) NOT NULL AUTO_INCREMENT,
  `proje_resim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_isim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '',
  `proje_link` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`proje_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.projelerimiz: ~8 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `projelerimiz` (`proje_id`, `proje_resim`, `proje_isim`, `proje_link`) VALUES
	(1, 'gl-1.jpg', 'Proje 1', '*'),
	(2, 'gl-2.jpg', 'Proje 2', '*'),
	(3, 'gl-3.jpg', 'Proje 3', '*'),
	(4, 'gl-4.jpg', 'Proje 4', '*'),
	(5, 'gl-5.jpg', 'Proje 5', '*'),
	(6, 'gl-6.jpg', 'Proje 6', '*'),
	(7, 'gl-7.jpg', 'Proje 7', '*'),
	(8, 'gl-8.jpg', 'Proje 8', '*');

-- tablo yapısı dökülüyor yenifirma.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_resim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_renklibaslik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_normalbaslik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_link` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.slider: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `slider` (`slider_id`, `slider_resim`, `slider_renklibaslik`, `slider_normalbaslik`, `slider_aciklama`, `slider_link`) VALUES
	(1, 'slider-1.jpg', 'HOŞGELDİNİZ', 'LOREM ', 'BURASI PARAGRAFTIR', '#'),
	(2, 'slider-2.jpg', 'BU 2. RESİM', 'IPSUM', 'BURASI PARAGRAF 2', '#');

-- tablo yapısı dökülüyor yenifirma.sosyalmedya
CREATE TABLE IF NOT EXISTS `sosyalmedya` (
  `sm_id` int(11) NOT NULL,
  `sm_facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sm_twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sm_instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sm_google` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sm_linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.sosyalmedya: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `sosyalmedya` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_instagram`, `sm_google`, `sm_linkedin`) VALUES
	(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.google.com', 'https://www.linkledin.com'),
	(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.google.com', 'https://www.linkledin.com');

-- tablo yapısı dökülüyor yenifirma.sponsorlar
CREATE TABLE IF NOT EXISTS `sponsorlar` (
  `sponsor_id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_resim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `sponsor_isim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`sponsor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.sponsorlar: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `sponsorlar` (`sponsor_id`, `sponsor_resim`, `sponsor_isim`) VALUES
	(1, 'logo-1.png', 'LOGO 1'),
	(2, 'logo-2.png', 'LOGO 2'),
	(3, 'logo-3.png', 'LOGO 3'),
	(4, 'logo-4.png', 'LOGO 4');

-- tablo yapısı dökülüyor yenifirma.yorumlar
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorumlar_id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum_resim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_isim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_meslek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `yorum_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`yorumlar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- yenifirma.yorumlar: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
REPLACE INTO `yorumlar` (`yorumlar_id`, `yorum_resim`, `yorum_isim`, `yorum_meslek`, `yorum_aciklama`) VALUES
	(1, 'testimonial-1.jpg', 'Meriç Adakçı', 'PHP Devoloper', 'AÇIKLAMA'),
	(2, 'testimonial-2.jpg', 'Mehmet ', 'PHP Devoloper', 'AÇIKLAMA'),
	(3, 'testimonial-3.jpg', 'Mustafa', 'PHP Devoloper', 'AÇIKLAMA'),
	(4, 'testimonial-4.jpg', 'Ali', 'PHP Devoloper', 'AÇIKLAMA');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
