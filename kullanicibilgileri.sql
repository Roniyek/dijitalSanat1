-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2023, 10:25:02
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayitol`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicibilgileri`
--

CREATE TABLE `kullanicibilgileri` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(30) NOT NULL,
  `kullaniciAdi` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefon` varchar(30) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  `dogumTarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicibilgileri`
--

INSERT INTO `kullanicibilgileri` (`id`, `adsoyad`, `kullaniciAdi`, `email`, `telefon`, `sifre`, `dogumTarihi`) VALUES
(1, 'ferhat', 'dengnekir', 'ferhatuslu@stu.topkapi.edu.tr', '21019', '12345', '2000-02-01'),
(4, 'Yakup Dolaman', 'Yakup58', 'yakup58@gmail.com', '05464751548', '1234587', '2001-06-14'),
(5, 'Cudi Yıldız', 'cudi36y', 'cudi36y@gmail.com', '05464317500', '2104', '2000-02-01'),
(6, 'Bilal Yıldız', 'bilal45', 'bilal45@gmail.com', '05461235747', '2104', '2008-03-04'),
(7, 'Ömer Çelik', 'ömer56', 'omer1@gmail.com', '05461248579', '564789', '2002-02-09');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicibilgileri`
--
ALTER TABLE `kullanicibilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicibilgileri`
--
ALTER TABLE `kullanicibilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
