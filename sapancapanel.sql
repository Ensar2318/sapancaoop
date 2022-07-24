-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 24 Tem 2022, 19:40:44
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sapancapanel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `admins_namesurname` varchar(155) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_username` varchar(155) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_pass` varchar(155) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_file` varchar(155) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_title` varchar(155) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admins_status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admins_id`, `admins_namesurname`, `admins_username`, `admins_pass`, `admins_file`, `admins_title`, `admins_status`) VALUES
(1, 'Tester aga', 'root', '12345678', '62dc0a2e4bdfb.jpg', 'Admin', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_copyright` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `settings_logo` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_blacklogo` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `settings_logotext` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_logoshow` enum('text','image') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_favicon` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_keywords` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_il` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_ilce` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_adress` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_author` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_workhours` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_workdays` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_instagram` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_facebook` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_linkedin` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_pinterest` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_twitter` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_googlemap` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `settings_bakim` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_title`, `settings_desc`, `settings_copyright`, `settings_logo`, `settings_blacklogo`, `settings_logotext`, `settings_logoshow`, `settings_favicon`, `settings_keywords`, `settings_phone`, `settings_email`, `settings_il`, `settings_ilce`, `settings_adress`, `settings_author`, `settings_workhours`, `settings_workdays`, `settings_instagram`, `settings_facebook`, `settings_linkedin`, `settings_pinterest`, `settings_twitter`, `settings_googlemap`, `settings_bakim`) VALUES
(1, 'Sapanca Big Loft', 'Sapanca Big Loft Doğal Yaşam Merkezi', '2020 Sapanca Big Loft', '62dc057208d73.jpg', '62dc5368918d8.png', 'Sapanca Big Loft', 'image', '62dc05808c61c.ico', 'Otel, Turizm, doğa, sapanca, sapancabigloft', '90 530 905 34 54', 'info@hotmail.com', 'istanbul', 'esenler', 'Şükriye mah. şükriye cad. no 11, 54600 Sapanca/Sakarya', 'Codderman', '08:00 - 18:00', 'Pazartesi - Cuma', 'https://www.instagram.com/sapancabigloft', 'https://www.facebook.com/Sapanca-Big-Loft-100400039411220', '', '', 'https://twitter.com/SapancaBigloft', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8514.58033327376!2d28.940551088692555!3d41.01740669512856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba3bd99b48d7%3A0x64748d3db76c0bce!2sBezmialem%20Vak%C4%B1f%20University%20Hospital!5e0!3m2!1sen!2str!4v1657816952681!5m2!1sen!2str', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
