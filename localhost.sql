-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Haz 2022, 20:34:26
-- Sunucu sürümü: 10.3.22-MariaDB-log
-- PHP Sürümü: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `386927`
--
CREATE DATABASE IF NOT EXISTS `386927` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `386927`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aracislem`
--

CREATE TABLE `aracislem` (
  `arac` varchar(20) DEFAULT NULL,
  `tarih` varchar(20) DEFAULT NULL,
  `gun` int(20) DEFAULT NULL,
  `sube` varchar(20) DEFAULT NULL,
  `isim` varchar(20) DEFAULT NULL,
  `sifre` varchar(20) DEFAULT NULL,
  `ucret` int(20) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `aracislem`
--



--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aracislem`
--
ALTER TABLE `aracislem`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aracislem`
--
ALTER TABLE `aracislem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
