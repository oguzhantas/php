-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2025, 15:05:59
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `insankaynaklari`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvurular`
--

CREATE TABLE `basvurular` (
  `basvuruID` int(11) NOT NULL,
  `ADI` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `SOYADI` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `TCKIMLIKNO` varchar(12) COLLATE utf8_turkish_ci DEFAULT NULL,
  `DOGUMYERI` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `DOGUMTARIHI` date NOT NULL,
  `CINSIYET` tinyint(5) NOT NULL DEFAULT 1 COMMENT '1 erkek 2 kadın',
  `INGILIZCE` tinyint(4) NOT NULL,
  `ALMANCA` tinyint(4) NOT NULL COMMENT '0 YOK, 1 SEÇILI',
  `FRANSIZCA` tinyint(4) NOT NULL COMMENT '0 YOK,1 SEÇİLİ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `basvurular`
--

INSERT INTO `basvurular` (`basvuruID`, `ADI`, `SOYADI`, `TCKIMLIKNO`, `DOGUMYERI`, `DOGUMTARIHI`, `CINSIYET`, `INGILIZCE`, `ALMANCA`, `FRANSIZCA`) VALUES
(1, 'Ali', 'Can', '12345678913', 'İstanbul', '2000-05-15', 1, 1, 1, 1),
(2, 'Ahmet', 'Can', '123', 'Muş', '2025-05-29', 1, 0, 0, 1),
(3, 'AliCan', 'Şen', '12345678915', 'Ankara', '2000-05-22', 1, 1, 0, 0),
(4, 'Şeyda', 'Şen', '12345678916', 'İstanbul', '2000-05-22', 2, 1, 1, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `basvurular`
--
ALTER TABLE `basvurular`
  ADD PRIMARY KEY (`basvuruID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `basvurular`
--
ALTER TABLE `basvurular`
  MODIFY `basvuruID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
