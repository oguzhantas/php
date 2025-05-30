-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 May 2025, 15:10:20
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
-- Veritabanı: `muhasebedb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urunID` int(11) NOT NULL,
  `URUNADI` varchar(100) DEFAULT NULL,
  `URETIMTARIHI` date DEFAULT NULL,
  `KATEGORI` varchar(100) DEFAULT NULL,
  `FIYAT` decimal(15,2) DEFAULT NULL,
  `TAKSITLIFIYAT` decimal(15,2) DEFAULT NULL,
  `BARKOD` varchar(15) DEFAULT NULL,
  `RENK` varchar(50) DEFAULT NULL,
  `BOYUT` varchar(5) DEFAULT NULL,
  `RESIM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urunID`, `URUNADI`, `URETIMTARIHI`, `KATEGORI`, `FIYAT`, `TAKSITLIFIYAT`, `BARKOD`, `RENK`, `BOYUT`, `RESIM`) VALUES
(7, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(8, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(9, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(10, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(11, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(12, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(13, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(14, 'SAMSUNG TV', '2025-05-30', 'Elektronik', '12500.00', '13500.00', '8691234567813', 'Beyaz', 'XXL', NULL),
(15, '', '0000-00-00', '', '0.00', '0.00', '', '', '', NULL),
(16, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(18, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(19, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(20, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(21, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(22, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(23, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', NULL),
(24, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', 'Ekran Görüntüsü (1).png'),
(25, 'LG TV', '0000-00-00', 'Bilgisayar', '12500.00', '13500.00', '8691234567812', 'Beyaz', 'XS', 'Ekran Görüntüsü (1).png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urunID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
