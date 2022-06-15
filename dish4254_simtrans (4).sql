-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2019 at 09:55 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dish4254_simtrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'superuser', 'ccad9d667550d45378ee0416a8417ca3', 'Super User', 'superusersimtrans@dishub.bengkuluprov.go.id', 1),
(2, 'admin', 'EE2D57F9E7FAE28A7229C708507A55D3', 'Administrator', 'adminsimtrans@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akap`
--

CREATE TABLE IF NOT EXISTS `akap` (
  `no` int(5) NOT NULL,
  `dari` varchar(25) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `ac` int(10) NOT NULL,
  `actoilet` int(10) NOT NULL,
  `jamberangkat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akap`
--

INSERT INTO `akap` (`no`, `dari`, `tujuan`, `ac`, `actoilet`, `jamberangkat`) VALUES
(1, 'Bengkulu', 'Lahat', 85000, 95000, '13:00 WIB'),
(2, 'Bengkulu', 'Muara Enim', 100000, 110000, '13:00 WIB'),
(3, 'Bengkulu', 'Batu Raja', 165000, 175000, '13:00 WIB'),
(4, 'Bengkulu', 'Martapura', 165000, 175000, '13:00 WIB'),
(5, 'Bengkulu', 'Bukit Kemuning', 175000, 190000, '13:00 WIB'),
(6, 'Bengkulu', 'Kota Bumi', 175000, 190000, '13:00 WIB'),
(7, 'Bengkulu', 'Bandar jaya', 175000, 190000, '13:00 WIB'),
(8, 'Bengkulu', 'Raja Basa', 195000, 205000, '13:00 WIB'),
(9, 'Bengkulu', 'Bakau Heni', 205000, 220000, '13:00 WIB'),
(10, 'Bengkulu', 'Merak', 220000, 245000, '13:00 WIB'),
(11, 'Bengkulu', 'Jakarta', 245000, 275000, '13:00 WIB'),
(12, 'Bengkulu', 'Bandung', 305000, 320000, '13:00 WIB'),
(13, 'Bengkulu', 'Tasikmalaya', 320000, 350000, '13:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `akdp`
--

CREATE TABLE IF NOT EXISTS `akdp` (
  `no` int(5) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `jarak` varchar(5) NOT NULL,
  `tarifeko` varchar(9) NOT NULL,
  `tarifac` varchar(9) NOT NULL,
  `jamberangkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akdp`
--

INSERT INTO `akdp` (`no`, `dari`, `tujuan`, `jarak`, `tarifeko`, `tarifac`, `jamberangkat`) VALUES
(1, 'Bengkulu', 'Ketahun', '93', '30000', '35000', '08:00 Dan 10:00 WIB'),
(2, 'Bengkulu', 'Air Muring', '160', '45000', '55000', '08:00 Dan 10:00 WIB'),
(3, 'Bengkulu', 'Ipuh', '178', '50000', '60000', '08:00 Dan 10:00 WIB'),
(4, 'Bengkulu', 'Gajah Mati', '215', '55000', '70000', '08:00 Dan 10:00 WIB'),
(5, 'Bengkulu', 'Bantal', '239', '60000', '80000', '08:00 Dan 10:00 WIB'),
(6, 'Bengkulu', 'Penarik', '269', '65000', '85000', '08:00 Dan 10:00 WIB'),
(7, 'Bengkulu', 'MukoMuko', '295', '70000', '100000', '08:00 Dan 10:00 WIB'),
(8, 'Bengkulu', 'Lubuk Pinang', '306', '75000', '100000', '08:00 Dan 10:00 WIB'),
(9, 'Bengkulu', 'SP 6', '306', '75000', '100000', '08:00 Dan 10:00 WIB'),
(10, 'Bengkulu', 'Muara Sahung', '230', '50000', '60000', '08:00 WIB'),
(11, 'Bengkulu', 'Manna', '145', '30000', '35000', '08:00 WIB'),
(12, 'Bengkulu', 'Tais', '60', '20000', '25000', '08:00 WIB'),
(13, 'Bengkulu', 'Lais', '45', '20000', '0', '15:00 WIB'),
(14, 'Bengkulu', 'Ketahun', '93', '30000', '0', '15:00 WIB'),
(15, 'Bengkulu', 'Napal Putih', '138', '40000', '0', '15:00 WIB'),
(16, 'Banjar Sari', 'Malakoni', '23', '5000', '0', '08:00 WIB'),
(17, 'Banjar Sari', 'Kaana', '45', '10000', '0', '08:00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `angkot`
--

CREATE TABLE IF NOT EXISTS `angkot` (
  `no` int(4) NOT NULL,
  `kodeangkutan` varchar(2) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `melewati` text NOT NULL,
  `tarifpelajar` int(9) NOT NULL,
  `tarifmahasiswa` int(9) NOT NULL,
  `tarifdewasa` int(9) NOT NULL,
  `warna` varchar(8) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkot`
--

INSERT INTO `angkot` (`no`, `kodeangkutan`, `jurusan`, `melewati`, `tarifpelajar`, `tarifmahasiswa`, `tarifdewasa`, `warna`) VALUES
(1, 'A1', 'Terminal Panorama - Pasar Minggu S/d Kampung Cina', '', 3000, 2000, 1500, 'ef5350'),
(2, 'A2', 'Terminal Panorama - Pasar Minggu S/d Kampung Cina', '', 3000, 2000, 1500, 'ef5350'),
(3, 'A3', 'Terminal Panorama - Pasar Minggu S/d Kampung Cina', '', 3000, 2000, 1500, 'ef5350'),
(4, 'B1', 'Terminal Panorama - Sungai Hitam, Pasar Minggu S/d Simpang 4 Nakau dan Daerah Bentiring', '', 3000, 2000, 1500, '9ccc65'),
(5, 'B2', 'Terminal Panorama - Sungai Hitam, Pasar Minggu S/d Simpang 4 Nakau dan Daerah Bentiring', '', 3000, 2000, 1500, '9ccc65'),
(6, 'B3', 'Terminal Panorama - Sungai Hitam, Pasar Minggu S/d Simpang 4 Nakau dan Daerah Bentiring', '', 3000, 2000, 1500, '9ccc65'),
(7, 'C1', 'Terminal Panorama - Pasar Minggu S/d Nakau Batas Kota', '', 3000, 2000, 1500, 'ffee58'),
(8, 'C2', 'Terminal Panorama - Pasar Minggu S/d Nakau Batas Kota', '', 3000, 2000, 1500, 'ffee58'),
(9, 'C3', 'Terminal Panorama - Pasar Minggu S/d Nakau Batas Kota', '', 3000, 2000, 1500, 'ffee58'),
(10, 'D1', 'Terminal Panorama - Pulau Baai', '', 3000, 2000, 1500, '29b6f6'),
(11, 'D2', 'Terminal Panorama - Pulau Baai', '', 3000, 2000, 1500, '29b6f6'),
(12, 'D3', 'Terminal Panorama - Pulau Baai', '', 3000, 2000, 1500, '29b6f6'),
(13, 'E1', 'Terminal Panorama - Terminal Air Sebakul - Terminal Betungan', '', 3000, 2000, 1500, 'f8f8f8'),
(14, 'E2', 'Terminal Panorama - Terminal Air Sebakul - Terminal Betungan', '', 3000, 2000, 1500, 'f8f8f8'),
(15, 'E3', 'Terminal Panorama - Terminal Air Sebakul - Terminal Betungan', '', 3000, 2000, 1500, 'f8f8f8');

-- --------------------------------------------------------

--
-- Table structure for table `aruspetikemas`
--

CREATE TABLE IF NOT EXISTS `aruspetikemas` (
  `tahun` int(11) NOT NULL,
  `box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aruspetikemas`
--

INSERT INTO `aruspetikemas` (`tahun`, `box`) VALUES
(2013, 14798),
(2014, 15587),
(2015, 19699),
(2016, 12630),
(2017, 22476),
(2018, 17013);

-- --------------------------------------------------------

--
-- Table structure for table `asdp`
--

CREATE TABLE IF NOT EXISTS `asdp` (
  `no` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `rute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asdp`
--

INSERT INTO `asdp` (`no`, `nama`, `jumlah`, `rute`) VALUES
(1, 'KMP. Pulo Tello', '1', 'Lintasan Bengkulu - Pulau Enggano (PP)');

-- --------------------------------------------------------

--
-- Table structure for table `asdpjadwal`
--

CREATE TABLE IF NOT EXISTS `asdpjadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `text` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `textColor` varchar(50) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `asdpjadwal`
--

INSERT INTO `asdpjadwal` (`id`, `start_date`, `end_date`, `text`, `color`, `textColor`, `type`) VALUES
(1, '2018-09-01 17:00:00', '2018-09-01 18:00:00', 'Keberangkatan Kapal dari P. Enggano', '#FFFF00', '#000', '1'),
(2, '2018-09-04 17:00:00', '2018-09-04 18:00:00', 'Keberangkatan Kapal dari Bengkulu', '#0000FF', '#fff', '2'),
(3, '2018-09-05 17:00:00', '2018-09-05 18:00:00', 'Keberangkatan Kapal dari P. Enggano', '#FFFF00', '#000', '1'),
(4, '2018-09-07 17:00:00', '2018-09-07 18:00:00', 'Keberangkatan Kapal dari Bengkulu', '#0000FF', '#fff', '2'),
(5, '2018-09-08 17:00:00', '2018-09-08 18:00:00', 'Keberangkatan Kapal dari P. Enggano', '#FFFF00', '#000', '1'),
(6, '2018-09-09 17:00:00', '2018-09-09 18:00:00', 'Keberangkatan Kapal dari Bengkulu', '#0000FF', '#fff', '2');

-- --------------------------------------------------------

--
-- Table structure for table `asdplaporan`
--

CREATE TABLE IF NOT EXISTS `asdplaporan` (
  `no` int(10) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `trip` varchar(100) NOT NULL,
  `penumpang` varchar(100) NOT NULL,
  `roda2` varchar(100) NOT NULL,
  `roda3` varchar(100) NOT NULL,
  `roda4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asdplaporan`
--

INSERT INTO `asdplaporan` (`no`, `bulan`, `trip`, `penumpang`, `roda2`, `roda3`, `roda4`) VALUES
(1, 'Oktober 2018', '17', '892', '168', '26', '223');

-- --------------------------------------------------------

--
-- Table structure for table `asdptarif`
--

CREATE TABLE IF NOT EXISTS `asdptarif` (
  `no` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tarifeko` varchar(100) NOT NULL,
  `tarifbisnis` varchar(100) NOT NULL,
  `asuransi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asdptarif`
--

INSERT INTO `asdptarif` (`no`, `jenis`, `kategori`, `tarifeko`, `tarifbisnis`, `asuransi`) VALUES
(1, 'Dewasa', 'Penumpang', '52000', '95000', '5000'),
(2, 'Anak-Anak', 'Penumpang', '30000', '80000', '5000'),
(3, 'GOL. I (Sepeda Dayung)', 'Kendaraan', '40910', '', '5090'),
(4, 'GOL. II (Sepeda Motor) ', 'Kendaraan', '109300', '', '5700'),
(5, 'GOL. III (Beca, Sepeda Motor 500cc keatas)', 'Kendaraan', '280590', '', '9410'),
(6, 'GOL. IV (Minibus)', 'Kendaraan', '1140810', '', '33190'),
(7, 'GOL. V (Pick Up)', 'Kendaraan', '784290', '', '15710'),
(8, 'GOL. VI (Bus Sedang)', 'Kendaraan', '1810865', '', '89135'),
(9, 'GOL. VII (Truk Sedang)', 'Kendaraan', '1470785', '', '29215'),
(10, 'GOL. VIII (Bus Besar)', 'Kendaraan', '2739290', '', '160710'),
(11, 'GOL. IX (Truk Besar)', 'Kendaraan', '2459130', '', '40870'),
(12, 'GOL. X (Truk Tronton)', 'Kendaraan', '3402830', '', '47170'),
(13, 'GOL. XI (Trailler)', 'Kendaraan', '5141490', '', '58510'),
(14, 'GOL. XII (Alat Berat)', 'Kendaraan', '7728890', '', '71110');

-- --------------------------------------------------------

--
-- Table structure for table `brt`
--

CREATE TABLE IF NOT EXISTS `brt` (
  `no` int(10) NOT NULL,
  `rute` text NOT NULL,
  `halte` text NOT NULL,
  `jamoperasi` varchar(200) NOT NULL,
  `tarif` varchar(10) NOT NULL,
  `tarif2` int(10) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brt`
--

INSERT INTO `brt` (`no`, `rute`, `halte`, `jamoperasi`, `tarif`, `tarif2`, `lat`, `long`) VALUES
(1, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter SMAN 11 Bumi Ayu', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '', ''),
(2, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Simpang Kandis', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '', ''),
(3, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter SMAN 7 Jenggalu', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '', ''),
(4, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Pasir Putih', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '-3.831330', '102.282843'),
(5, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Sport Center', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '-3.807962', '102.263469'),
(6, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Benteng Marlborough', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '-3.786144', '102.251292'),
(7, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Pasar Bengkulu', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '', ''),
(8, 'Betungan - Simpang Kandis - Simpang Lapangan Golf - Jl. Jenggalu - Jl. Pariwisata Pantai Panjang - Kawasan Sport Center -  Pasar Bengkulu - Benteng Marlborough - Sungai Hitam - Pasar pedati', 'Shelter Pasar Pedati', '06.00 WIB s/d 18.00 WIB', 'Free', 3000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `counter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(30);

-- --------------------------------------------------------

--
-- Table structure for table `damribkllubukpinang`
--

CREATE TABLE IF NOT EXISTS `damribkllubukpinang` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `damribkllubukpinang`
--

INSERT INTO `damribkllubukpinang` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'BD.7013.AU', 6170, 'BENGKULU - LUBUK PINANG', '08:00 Dan 10:00 WIB', 'EKONOMI DAN AC'),
(2, 'BD.7014.AU', 6171, 'BENGKULU - LUBUK PINANG', '08:00 Dan 10:00 WIB', 'EKONOMI DAN AC');

-- --------------------------------------------------------

--
-- Table structure for table `damribkllubukpinangrinci`
--

CREATE TABLE IF NOT EXISTS `damribkllubukpinangrinci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(100) NOT NULL,
  `tarifekonomi` varchar(100) NOT NULL,
  `tarifac` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `damribkllubukpinangrinci`
--

INSERT INTO `damribkllubukpinangrinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifekonomi`, `tarifac`) VALUES
(1, 'Bengkulu', 'Ketahun', '08:00 dan 10:00 WIB', '30000', '35000'),
(2, 'Bengkulu', 'Air Kemuring', '08:00 dan 10:00 WIB', '45000', '55000'),
(3, 'Bengkulu', 'Ipuh', '08:00 dan 10:00 WIB', '50000', '60000'),
(4, 'Bengkulu', 'Gajah Mati', '08:00 dan 10:00 WIB', '55000', '70000'),
(5, 'Bengkulu', 'Bantal', '08:00 dan 10:00 WIB', '60000', '80000'),
(6, 'Bengkulu', 'Penarik', '08:00 dan 10:00 WIB', '65000', '85000'),
(7, 'Bengkulu', 'Muko Muko', '08:00 dan 10:00 WIB', '70000', '100000'),
(8, 'Bengkulu', 'Lubuk Pinang', '08:00 dan 10:00 WIB', '75000', '100000'),
(9, 'Bengkulu', 'SP 6', '08:00 dan 10:00 WIB', '75000', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `damribklmuarasahung`
--

CREATE TABLE IF NOT EXISTS `damribklmuarasahung` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `damribklmuarasahung`
--

INSERT INTO `damribklmuarasahung` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'H.1459.BY', 4284, 'BENGKULU - MUARA SAHUNG', '08:00 WIB', 'EKONOMI dan AC');

-- --------------------------------------------------------

--
-- Table structure for table `damribklmuarasahungrinci`
--

CREATE TABLE IF NOT EXISTS `damribklmuarasahungrinci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(100) NOT NULL,
  `tarifekonomi` varchar(100) NOT NULL,
  `tarifac` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `damribklmuarasahungrinci`
--

INSERT INTO `damribklmuarasahungrinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifekonomi`, `tarifac`) VALUES
(1, 'Bengkulu', 'Tais', '08:00 WIB', '20000', '25000'),
(2, 'Bengkulu', 'Manna', '08:00 WIB', '30000', '35000'),
(3, 'Bengkulu', 'Muara Sahung', '08:00 WIB', '50000', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `damribklnapal`
--

CREATE TABLE IF NOT EXISTS `damribklnapal` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `damribklnapal`
--

INSERT INTO `damribklnapal` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'BD.7107.AN', 4548, 'BENGKULU - NAPAL PUTIH', '15:00 WIB', 'EKONOMI'),
(2, 'BD.7108.AN', 4594, 'BENGKULU - NAPAL PUTIH', '15:00 WIB', 'EKONOMI'),
(3, 'BD.7106.AN', 4544, 'BENGKULU - NAPAL PUTIH', '15:00 WIB', 'EKONOMI'),
(4, 'BD.7110.AN', 4591, 'BENGKULU - NAPAL PUTIH', '15:00 WIB', 'EKONOMI'),
(5, 'BD.7111.AN', 4547, 'BENGKULU - NAPAL PUTIH', '15:00 WIB', 'EKONOMI');

-- --------------------------------------------------------

--
-- Table structure for table `damribklnapalrinci`
--

CREATE TABLE IF NOT EXISTS `damribklnapalrinci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(100) NOT NULL,
  `tarifekonomi` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `damribklnapalrinci`
--

INSERT INTO `damribklnapalrinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifekonomi`) VALUES
(1, 'Bengkulu', 'Lais', '15:00 WIB', '20000'),
(2, 'Bengkulu', 'Ketahun', '15:00 WIB', '30000'),
(3, 'Bengkulu', 'Napal Putih', '15:00 WIB', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `damribkltasik`
--

CREATE TABLE IF NOT EXISTS `damribkltasik` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `damribkltasik`
--

INSERT INTO `damribkltasik` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'Z.7782.HA', 2932, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(2, 'BE.2095.CU', 2995, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(3, 'B.7826.IW', 4354, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(4, 'B.7828.IW', 4355, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(5, 'B.7829.IW', 4356, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(6, 'B.7830.IW', 4357, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC'),
(7, 'B.7833.IW', 4358, 'BENGKULU - TASIKMALAYA', '13:00 WIB', 'BISNIS + AC');

-- --------------------------------------------------------

--
-- Table structure for table `damribkltasikrinci`
--

CREATE TABLE IF NOT EXISTS `damribkltasikrinci` (
  `no` int(11) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(100) NOT NULL,
  `tarifac` varchar(100) NOT NULL,
  `tarifactoilet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damribkltasikrinci`
--

INSERT INTO `damribkltasikrinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifac`, `tarifactoilet`) VALUES
(1, 'Bengkulu', 'Lahat', '13:00 WIB', '85000', '95000'),
(2, 'Bengkulu', 'Muara Enim', '13:00 WIB', '100000', '110000'),
(3, 'Bengkulu', 'Batu Raja', '13:00 WIB', '165000', '175000'),
(4, 'Bengkulu', 'Martapura', '13:00 WIB', '165000', '175000'),
(5, 'Bengkulu', 'Bukit kemuning', '13:00 WIB', '175000', '190000'),
(6, 'Bengkulu', 'Kota Bumi', '13:00 WIB', '175000', '190000'),
(7, 'Bengkulu', 'Bandar Jaya', '13:00 WIB', '175000', '190000'),
(8, 'Bengkulu', 'Raja Basa', '13:00 WIB', '195000', '205000'),
(9, 'Bengkulu', 'Baka Huni', '13:00 WIB', '205000', '220000'),
(10, 'Bengkulu', 'Merak', '13:00 WIB', '220000', '245000'),
(11, 'Bengkulu', 'Jakarta', '13:00 WIB', '245000', '275000'),
(12, 'Bengkulu', 'Bandung', '13:00 WIB', '305000', '320000'),
(13, 'Bengkulu', 'Tasikmalaya', '13:00 WIB', '320000', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `damrienggano`
--

CREATE TABLE IF NOT EXISTS `damrienggano` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `damrienggano`
--

INSERT INTO `damrienggano` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'BD.7105.AN', 4542, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI'),
(2, 'BD.7159.AN', 4574, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI'),
(3, 'BD.7201.AN', 5408, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI'),
(4, 'BD.7136.AN', 4627, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI'),
(5, 'BD.7173.AN', 4950, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI'),
(6, 'BD.7211.AN', 5768, 'PULAU ENGGANO', '07:00 WIB', 'EKONOMI');

-- --------------------------------------------------------

--
-- Table structure for table `damriengganorinci`
--

CREATE TABLE IF NOT EXISTS `damriengganorinci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(100) NOT NULL,
  `tarifekonomi` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `damriengganorinci`
--

INSERT INTO `damriengganorinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifekonomi`) VALUES
(1, 'Banjar Sari', 'Malakoni', '08:00 WIB', '5000'),
(2, 'Banjar Sari', 'Kaana', '08:00 WIB', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `damrisungaihitam`
--

CREATE TABLE IF NOT EXISTS `damrisungaihitam` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nopolisi` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `trayek` varchar(255) DEFAULT NULL,
  `jamberangkat` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `damrisungaihitam`
--

INSERT INTO `damrisungaihitam` (`no`, `nopolisi`, `code`, `trayek`, `jamberangkat`, `keterangan`) VALUES
(1, 'BD.7226.AN', 6109, 'TERMINAL SUNGAI HITAM - BANDARA', 'Menyesuaikan Keberangkatan dan Kedatangan Pesawat', 'EKSEKUTIF AC'),
(2, 'BD.7221.AN', 6110, 'TERMINAL SUNGAI HITAM - BANDARA', 'Menyesuaikan Keberangkatan dan Kedatangan Pesawat', 'EKSEKUTIF AC'),
(3, 'BD.7219.AN', 6111, 'TERMINAL SUNGAI HITAM - BANDARA', 'Menyesuaikan Keberangkatan dan Kedatangan Pesawat', 'EKSEKUTIF AC');

-- --------------------------------------------------------

--
-- Table structure for table `damrisungaihitamrinci`
--

CREATE TABLE IF NOT EXISTS `damrisungaihitamrinci` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jamkeberangkatan` varchar(255) NOT NULL DEFAULT '',
  `tarifac` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `damrisungaihitamrinci`
--

INSERT INTO `damrisungaihitamrinci` (`no`, `dari`, `tujuan`, `jamkeberangkatan`, `tarifac`) VALUES
(1, 'Sungai Hitam', 'Bandara', 'Menyesuaikan Kedatangan dan Keberangkatan Pesawat', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `darike`
--

CREATE TABLE IF NOT EXISTS `darike` (
  `perjalanan` varchar(100) NOT NULL,
  `titikmuat` text NOT NULL,
  `tujuan` text NOT NULL,
  `tarif` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `jam` int(2) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`perjalanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darike`
--

INSERT INTO `darike` (`perjalanan`, `titikmuat`, `tujuan`, `tarif`, `telepon`, `foto`, `jam`, `jenis`) VALUES
('Bus Rapid Transit', 'Bandara Fatmawati Soekarno Bengkulu', '-', '-', '-', 'brt.png', 24, 'bus'),
('DAMRI', 'Sungai Hitam', 'Bandara', '25000', '-', 'damri.png', 0, 'damri'),
('Taxi Tiga Putra', 'Bandara Fatmawati Sorkarno Bengkulu', '-', '-', '-', 'tigaputra.png', 24, 'taksi');

-- --------------------------------------------------------

--
-- Table structure for table `export_import`
--

CREATE TABLE IF NOT EXISTS `export_import` (
  `tahun` int(5) NOT NULL,
  `export` int(20) NOT NULL,
  `import` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `export_import`
--

INSERT INTO `export_import` (`tahun`, `export`, `import`) VALUES
(2015, 1363543, 26479),
(2016, 1195515, 10618),
(2017, 1505077, 50631),
(2018, 688903, 43157);

-- --------------------------------------------------------

--
-- Table structure for table `fatmawati_datallu`
--

CREATE TABLE IF NOT EXISTS `fatmawati_datallu` (
  `no` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `datang` int(11) NOT NULL,
  `berangkat` int(11) NOT NULL,
  `dtg_dewasa` int(11) NOT NULL,
  `dtg_anak` int(11) NOT NULL,
  `dtg_bayi` int(11) NOT NULL,
  `brk_dewasa` int(11) NOT NULL,
  `brk_anak` int(11) NOT NULL,
  `brk_bayi` int(11) NOT NULL,
  `bagasi_dtg` int(11) NOT NULL,
  `bagasi_brk` int(11) NOT NULL,
  `kargo_dtg` int(11) NOT NULL,
  `kargo_brk` int(11) NOT NULL,
  `pos_dtg` int(11) NOT NULL,
  `pos_brk` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fatmawati_datallu`
--

INSERT INTO `fatmawati_datallu` (`no`, `bulan`, `datang`, `berangkat`, `dtg_dewasa`, `dtg_anak`, `dtg_bayi`, `brk_dewasa`, `brk_anak`, `brk_bayi`, `bagasi_dtg`, `bagasi_brk`, `kargo_dtg`, `kargo_brk`, `pos_dtg`, `pos_brk`, `tahun`) VALUES
(1, 'Januari', 339, 340, 36935, 1392, 685, 35102, 1073, 692, 305934, 234935, 167349, 62473, 19384, 2553, 2016),
(1, 'Januari', 318, 319, 37889, 1675, 726, 32026, 1378, 679, 278897, 229995, 239838, 45630, 15399, 4121, 2017),
(1, 'Januari', 411, 411, 41207, 1634, 757, 41327, 1256, 704, 348045, 265151, 301310, 53591, 10036, 280, 2018),
(2, 'Februari', 291, 291, 32425, 868, 553, 34114, 1138, 512, 258520, 203352, 164767, 73825, 19824, 1816, 2016),
(3, 'Maret', 341, 343, 34006, 897, 503, 35314, 846, 488, 255828, 197518, 179926, 95536, 15261, 5364, 2016),
(4, 'April', 342, 348, 34887, 704, 524, 36780, 666, 514, 259847, 200598, 194424, 56023, 7176, 11248, 2016),
(5, 'Mei', 346, 346, 41686, 1206, 669, 39529, 1237, 850, 335089, 247103, 144660, 52622, 19048, 1931, 2016),
(6, 'Juni', 306, 306, 36507, 1346, 768, 26351, 1070, 507, 332241, 166981, 204834, 39712, 27551, 1313, 2016),
(7, 'Juli', 367, 367, 42387, 2444, 1322, 39558, 2454, 1963, 401794, 409813, 132845, 35453, 10201, 3896, 2016),
(8, 'Agustus', 283, 283, 30652, 778, 472, 29266, 649, 418, 233004, 210385, 121210, 47866, 16059, 5620, 2016),
(9, 'September', 385, 385, 38704, 967, 647, 36184, 964, 694, 317458, 261693, 196121, 38874, 17042, 5356, 2016),
(10, 'Oktober', 367, 367, 37429, 931, 594, 34239, 759, 590, 283631, 224066, 210443, 10698, 16090, 4467, 2016),
(11, 'November', 324, 325, 37447, 753, 538, 34818, 698, 521, 279962, 217892, 259993, 50305, 15617, 4049, 2016),
(12, 'Desember', 341, 342, 43440, 1625, 745, 38769, 1730, 693, 344413, 281132, 272244, 49656, 15937, 3784, 2016),
(2, 'Februari', 287, 288, 34222, 1513, 656, 28927, 1245, 613, 251907, 207737, 216628, 41214, 13909, 3722, 2017),
(3, 'Maret', 318, 328, 38370, 821, 600, 39045, 827, 562, 297080, 224197, 204700, 33306, 16460, 4378, 2017),
(4, 'April', 354, 354, 38971, 1010, 642, 34782, 960, 572, 316354, 250366, 228226, 47385, 14385, 3355, 2017),
(5, 'Mei', 354, 354, 41018, 875, 565, 39582, 877, 503, 344138, 220486, 239021, 54386, 17746, 3811, 2017),
(6, 'Juni', 326, 325, 37980, 1946, 1183, 32013, 1986, 899, 382418, 247692, 218192, 75282, 14279, 3733, 2017),
(7, 'Juli', 378, 379, 44826, 2112, 986, 50162, 2079, 1237, 383191, 438534, 213544, 36640, 17606, 3736, 2017),
(8, 'Agustus', 376, 376, 39775, 916, 634, 40723, 883, 618, 307538, 255891, 236070, 52664, 14487, 4835, 2017),
(9, 'September', 429, 432, 40186, 1014, 706, 43218, 1074, 758, 298679, 278421, 228243, 79724, 2991, 93, 2017),
(10, 'Oktober', 467, 467, 43781, 972, 686, 45487, 895, 684, 313847, 259367, 253046, 56817, 11848, 2347, 2017),
(11, 'November', 453, 453, 43368, 924, 614, 43797, 852, 616, 329552, 240229, 266971, 51029, 11541, 1631, 2017),
(12, 'Desember', 469, 469, 46374, 1611, 828, 46320, 1886, 866, 355375, 278454, 312986, 50336, 12515, 54, 2017),
(2, 'Februari', 374, 374, 37689, 958, 673, 39444, 877, 670, 283322, 234793, 245312, 52939, 14121, 1975, 2018),
(3, 'Maret', 410, 410, 42214, 1139, 709, 44056, 986, 671, 310624, 241289, 279389, 50171, 16642, 1679, 2018),
(4, 'April', 407, 407, 45054, 1088, 679, 46037, 1070, 697, 344851, 257128, 285301, 45026, 12672, 2044, 2018),
(5, 'Mei', 345, 345, 40051, 1033, 673, 37613, 801, 543, 328589, 200094, 326708, 50968, 12143, 2802, 2018),
(6, 'Juni', 400, 400, 43885, 2518, 1552, 42765, 2542, 1464, 421426, 372763, 248580, 38002, 6894, 3074, 2018),
(7, 'Juli', 432, 432, 45952, 1866, 820, 50491, 1841, 1019, 338011, 364879, 306069, 52407, 4288, 2101, 2018),
(8, 'Agustus', 425, 425, 41013, 1038, 704, 42256, 1006, 691, 287721, 273791, 304809, 48216, 5749, 2692, 2018),
(9, 'September', 412, 412, 43460, 980, 623, 43745, 896, 675, 305670, 285154, 295829, 49812, 4933, 3041, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `fatmawati_fasilitas`
--

CREATE TABLE IF NOT EXISTS `fatmawati_fasilitas` (
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fatmawati_fasilitas`
--

INSERT INTO `fatmawati_fasilitas` (`foto`, `nama`, `lokasi`, `jenis`) VALUES
('bni.jpg', 'BNI', 'Pintu 1', 'atm'),
('musholla.jpg', 'Musholla', 'Bandara', 'musholla'),
('parkirmobil.jpg', 'Parkir Area Mobil', 'Lapangan Parkir', 'parkir'),
('kios.jpg', 'Kios Jualan', 'Bandara', 'kios'),
('loket.jpg', 'Loket Maskapai', 'Bandara', 'loket'),
('ruangtunggu.jpg', 'Ruang Tunggu', 'Bandara', 'waitingroom'),
('dropzone.jpg', 'Drop Zone 1', 'Pintu 1', 'dropzone');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(19, '2018-11-12', 'tes', 'zip', '5569580', '../../assets/file/tes.zip');

-- --------------------------------------------------------

--
-- Table structure for table `ipcagent`
--

CREATE TABLE IF NOT EXISTS `ipcagent` (
  `no` int(5) NOT NULL,
  `namaperusahaan` varchar(200) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcagent`
--

INSERT INTO `ipcagent` (`no`, `namaperusahaan`, `remarks`) VALUES
(1, 'Pelayaran Haluan Segara Line', '-'),
(2, 'Pelayaran Tempuran Emas TBK', '-'),
(3, 'Pelayaran Nasional Indonesia', '-'),
(4, 'Angkutan Sungai Danau Dan Penyeberangan (PERSERO) Cab. Padang', '-'),
(5, 'Pelayaran Kanaka Dwimitra Manunggal', '-'),
(6, 'Samudera Sarana Floresma', '-'),
(7, 'Pelayaran Karya Nusantara Lines', '-'),
(8, 'Tampok Sukses Perkasa', '-'),
(9, 'Pelayaran Sea Asih Lines', '-'),
(10, 'Pacific Samudera Sentosa', '-'),
(11, 'Pertamina (PERSERO)', '-'),
(12, 'Jatarim Binau Lines', '-'),
(13, 'Samudera Agencies Indonesia', '-'),
(14, 'Gema Mutiara Marina', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ipcarusbarangkomoditi`
--

CREATE TABLE IF NOT EXISTS `ipcarusbarangkomoditi` (
  `tahun` int(100) NOT NULL,
  `curah_kering` int(11) NOT NULL,
  `curah_cair` int(11) NOT NULL,
  `bag_cargo` int(11) NOT NULL,
  `general_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcarusbarangkomoditi`
--

INSERT INTO `ipcarusbarangkomoditi` (`tahun`, `curah_kering`, `curah_cair`, `bag_cargo`, `general_cargo`) VALUES
(2013, 2867934, 303430, 0, 0),
(2014, 2073971, 442838, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ipcarusbarangpedagangan`
--

CREATE TABLE IF NOT EXISTS `ipcarusbarangpedagangan` (
  `tahun` int(100) NOT NULL,
  `export` int(11) NOT NULL,
  `import` int(11) NOT NULL,
  `bongkar` int(11) NOT NULL,
  `muat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcarusbarangpedagangan`
--

INSERT INTO `ipcarusbarangpedagangan` (`tahun`, `export`, `import`, `bongkar`, `muat`) VALUES
(2013, 1845458, 0, 0, 1265305),
(2014, 1490573, 0, 0, 989632);

-- --------------------------------------------------------

--
-- Table structure for table `ipcaruskunjungankapalgt`
--

CREATE TABLE IF NOT EXISTS `ipcaruskunjungankapalgt` (
  `tahun` int(100) NOT NULL,
  `pelluar` int(11) NOT NULL,
  `peldalam` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcaruskunjungankapalgt`
--

INSERT INTO `ipcaruskunjungankapalgt` (`tahun`, `pelluar`, `peldalam`, `jumlah`) VALUES
(2013, 1554279, 2876508, 4430787),
(2014, 955602, 2836997, 3792599);

-- --------------------------------------------------------

--
-- Table structure for table `ipcaruskunjungankapalunit`
--

CREATE TABLE IF NOT EXISTS `ipcaruskunjungankapalunit` (
  `tahun` int(100) NOT NULL,
  `pelluar` int(11) NOT NULL,
  `peldalam` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcaruskunjungankapalunit`
--

INSERT INTO `ipcaruskunjungankapalunit` (`tahun`, `pelluar`, `peldalam`, `jumlah`) VALUES
(2013, 333, 1443, 1776),
(2014, 257, 1520, 1777);

-- --------------------------------------------------------

--
-- Table structure for table `ipcbongkarmuat`
--

CREATE TABLE IF NOT EXISTS `ipcbongkarmuat` (
  `no` int(10) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `bongkar` int(11) NOT NULL,
  `muat` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcbongkarmuat`
--

INSERT INTO `ipcbongkarmuat` (`no`, `bulan`, `bongkar`, `muat`, `keterangan`) VALUES
(1, 'Januari', 94876, 179240, '-'),
(2, 'Februari', 71908, 281274, '-');

-- --------------------------------------------------------

--
-- Table structure for table `ipccargo`
--

CREATE TABLE IF NOT EXISTS `ipccargo` (
  `no` int(5) NOT NULL,
  `namaperusahaan` varchar(200) NOT NULL,
  `komoditi` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccargo`
--

INSERT INTO `ipccargo` (`no`, `namaperusahaan`, `komoditi`, `remarks`) VALUES
(1, 'Bara Indah Lestari', 'Batubara', '-'),
(2, 'Inti Bara Perdana', 'Batubara', '-'),
(3, 'Indonesia Riau Sri Avantika', 'Batubara', '-'),
(4, 'Borneo Suktan Mining', 'Batubara', '-'),
(5, 'Kusuma Raya Utama', 'Batubara', '-'),
(6, 'Firman Ketaun', 'Batubara', '-'),
(7, 'Kaltim Global', 'Batubara', '-'),
(8, 'Ferto Rejang', 'Batubara', '-'),
(9, 'Atlas Citra Selaras', 'Batubara', '-'),
(10, 'Selamat Group Perkasa', 'Batubara', '-'),
(11, 'Jambi Resources', 'Batubara', '-'),
(12, 'Bengkulu Bio Energi', 'Batubara', '-'),
(13, 'Sinar Energi Sejati', 'Batubara', '-'),
(14, 'Bara Mega Quantum', 'Batubara', '-'),
(15, 'Treya Citra Perkasa', 'Batubara', '-'),
(16, 'Dinamika Selaras Jaya', 'Batubara', '-'),
(17, 'Bumi Berlian Mandiri', 'Cangkang', '-'),
(18, 'Jatim Propertindo Jaya', 'Cangkang', '-'),
(19, 'Bio Resources Development', 'Cangkang', '-'),
(20, 'Orion Apac Indonesia', 'Cangkang', '-'),
(21, 'Biomass Fuel Indonesia', 'Cangkang', '-'),
(22, 'Samca Sinar Perkasa', 'Cangkang', '-'),
(23, 'Swastika Agrindo Mas', 'Cangkang', '-'),
(24, 'Cemindo Gemilang', 'Clinker', '-'),
(25, 'Sinar Baai Mandiri', 'Aspal', '-'),
(26, 'Apex Indopacific', 'BBM Solar', '-'),
(27, 'Perkebunan Nusantara VII', 'CPO', '-'),
(28, 'Sandabi Indah Lestari', 'CPO', '-'),
(29, 'Wilmar Nabati Indonesia', 'CPO', '-'),
(30, 'Tenaga Listrik Bengkulu', '-', 'HPL'),
(31, 'Semen Padang', '-', 'HPL'),
(32, 'Sinar Rafflesia Jaya', 'Sapi', '-'),
(33, 'Sinohydro Corporation Limited', '-', 'HPL');

-- --------------------------------------------------------

--
-- Table structure for table `ipcemkl`
--

CREATE TABLE IF NOT EXISTS `ipcemkl` (
  `no` int(5) NOT NULL,
  `namaperusahaan` varchar(200) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcemkl`
--

INSERT INTO `ipcemkl` (`no`, `namaperusahaan`, `remarks`) VALUES
(1, 'Jaya Tri Mandiri', '-'),
(2, 'Petro Nusa Segara', '-'),
(3, 'Baai Bahari Abadi', '-'),
(4, 'Berkah Tri Permata', '-'),
(5, 'Bahari Makmur Bersama', '-'),
(6, 'Lintas Nusantara Jaya Mandiri', '-'),
(7, 'Cipta Manunggal Logistik', '-'),
(8, 'Karya Benaya', '-'),
(9, 'Sarana Niaga Sejati', '-'),
(10, 'Samudra Raflesia Logistik', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ipcpbm`
--

CREATE TABLE IF NOT EXISTS `ipcpbm` (
  `no` int(5) NOT NULL,
  `namaperusahaan` varchar(200) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcpbm`
--

INSERT INTO `ipcpbm` (`no`, `namaperusahaan`, `remarks`) VALUES
(1, 'Bahari Bara Tambang', '-'),
(2, 'Mitra Niaga Sejati', '-'),
(3, 'Gema Terminal Cargo', '-'),
(4, 'Bandar Cipta Lestrai', '-'),
(5, 'Surya Alam Abadi', '-'),
(6, 'Utama Bahari Service', '-'),
(7, 'Multi Sarana Dermaga', '-'),
(8, 'Varuna Tirta Prakasya', '-'),
(9, 'Pandawa Berkah Luminto', '-'),
(10, 'Amanah Tri Permata', '-');

-- --------------------------------------------------------

--
-- Table structure for table `ipcturunnaikpenumpang`
--

CREATE TABLE IF NOT EXISTS `ipcturunnaikpenumpang` (
  `no` int(11) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `turun` int(11) NOT NULL,
  `naik` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcturunnaikpenumpang`
--

INSERT INTO `ipcturunnaikpenumpang` (`no`, `bulan`, `turun`, `naik`, `keterangan`) VALUES
(1, 'Januari', 1363, 1533, '-'),
(2, 'Februari', 940, 1002, '-');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalbandara`
--

CREATE TABLE IF NOT EXISTS `jadwalbandara` (
  `noterbang` varchar(10) NOT NULL,
  `maskapai` varchar(200) NOT NULL,
  `berangkat` varchar(10) NOT NULL,
  `datang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalbandara`
--


-- --------------------------------------------------------

--
-- Table structure for table `kunjungankapal`
--

CREATE TABLE IF NOT EXISTS `kunjungankapal` (
  `bulan` varchar(100) NOT NULL,
  `kapalkargo` int(11) NOT NULL,
  `kapalkontainer` int(11) NOT NULL,
  `kapaltanker` int(11) NOT NULL,
  `kapalperintis` int(11) NOT NULL,
  `kapalasdp` int(11) NOT NULL,
  `kapalpenumpang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungankapal`
--

INSERT INTO `kunjungankapal` (`bulan`, `kapalkargo`, `kapalkontainer`, `kapaltanker`, `kapalperintis`, `kapalasdp`, `kapalpenumpang`) VALUES
('Januari', 61, 9, 35, 11, 1, 0),
('Februari', 65, 8, 34, 8, 8, 0),
('Maret', 68, 10, 32, 7, 10, 2),
('April', 52, 7, 38, 6, 10, 0),
('Mei', 62, 7, 40, 6, 11, 0),
('Juni', 39, 7, 27, 10, 10, 1),
('Juli', 65, 5, 30, 5, 2, 0),
('Agustus', 113, 8, 36, 6, 4, 0),
('September', 86, 5, 33, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `llajtraffic`
--

CREATE TABLE IF NOT EXISTS `llajtraffic` (
  `no` int(5) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `llajtraffic`
--

INSERT INTO `llajtraffic` (`no`, `kabupaten`, `lokasi`) VALUES
(1, 'Rejang Lebong', 'Simpang Perbo (Simpang 3)'),
(2, 'Rejang Lebong', 'Simpang 3 Iskandar ONG'),
(3, 'Lebong', 'Simpang 3 Tanjung Agung'),
(4, 'Lebong', 'Simpang 3 Sungai Grong'),
(5, 'Kota Bengkulu', 'Simpang 5 Ratu Samban'),
(6, 'Kota Bengkulu', 'Simpang 4  DPR'),
(7, 'Kota Bengkulu', 'Simpang 3 Penurunan'),
(8, 'Kota Bengkulu', 'Simpang 4 SD 5 (Cimanuk)'),
(9, 'Kota Bengkulu', 'Simpang 4 Taman Remaja'),
(10, 'Kota Bengkulu', 'Simpang 4 SLB'),
(11, 'Kota Bengkulu', 'Simpang 4 Hibrida'),
(12, 'Kota Bengkulu', 'Simpang 4 Pantai'),
(13, 'Kota Bengkulu', 'Simpang 3 Brimob'),
(14, 'Kota Bengkulu', 'Simpang 3 Dinask Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `llajwarning`
--

CREATE TABLE IF NOT EXISTS `llajwarning` (
  `no` int(10) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `llajwarning`
--

INSERT INTO `llajwarning` (`no`, `kabupaten`, `lokasi`) VALUES
(1, 'Kota Bengkulu', 'Depan Polda Bengkulu'),
(2, 'Kota Bengkulu', 'Depan Dinas Perhubungan'),
(3, 'Kota Bengkulu', 'Depan Kantor Gubernur'),
(4, 'Kepahiang', 'Jalan Kepahiang - Permu'),
(5, 'Lebong', 'Jalan Curup - Muara aman'),
(6, 'Lebong', 'Jalan Muara Aman - Tenong');

-- --------------------------------------------------------

--
-- Table structure for table `lokasib1`
--

CREATE TABLE IF NOT EXISTS `lokasib1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(100) NOT NULL,
  `long1` varchar(100) NOT NULL,
  `lat2` varchar(100) NOT NULL,
  `long2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lokasib1`
--

INSERT INTO `lokasib1` (`id`, `lat`, `long1`, `lat2`, `long2`) VALUES
(1, '-3.755023', '102.261316', '-3.797245', '102.265866');

-- --------------------------------------------------------

--
-- Table structure for table `lokasibisakdp1`
--

CREATE TABLE IF NOT EXISTS `lokasibisakdp1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(100) NOT NULL,
  `long1` varchar(100) NOT NULL,
  `lat2` varchar(100) NOT NULL,
  `long2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lokasibisakdp1`
--

INSERT INTO `lokasibisakdp1` (`id`, `lat`, `long1`, `lat2`, `long2`) VALUES
(1, '-3.805588', '102.271605', '-4.476740', '102.928038');

-- --------------------------------------------------------

--
-- Table structure for table `lokasipullotello`
--

CREATE TABLE IF NOT EXISTS `lokasipullotello` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` varchar(100) NOT NULL,
  `long1` varchar(100) NOT NULL,
  `lat2` varchar(100) NOT NULL,
  `long2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lokasipullotello`
--

INSERT INTO `lokasipullotello` (`id`, `lat`, `long1`, `lat2`, `long2`) VALUES
(1, '-3.9085164', '102.3056544', '-3.8366667', '102.1713889');

-- --------------------------------------------------------

--
-- Table structure for table `mukomuko_fasilitas`
--

CREATE TABLE IF NOT EXISTS `mukomuko_fasilitas` (
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mukomuko_fasilitas`
--

INSERT INTO `mukomuko_fasilitas` (`foto`, `nama`, `lokasi`, `jenis`) VALUES
('bni.jpg', 'BNI', 'Pintu 1', 'atm'),
('musholla.jpg', 'Musholla', 'Bandara', 'musholla'),
('parkirmobil.jpg', 'Parkir Area Mobil', 'Lapangan Parkir', 'parkir'),
('kios.jpg', 'Kios Jualan', 'Bandara', 'kios'),
('loket.jpg', 'Loket Maskapai', 'Bandara', 'loket'),
('ruangtunggu.jpg', 'Ruang Tunggu', 'Bandara', 'waitingroom'),
('dropzone.jpg', 'Drop Zone 1', 'Pintu 1', 'dropzone');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai`
--

CREATE TABLE IF NOT EXISTS `pelbaai` (
  `no` int(4) NOT NULL,
  `namakapal` varchar(50) NOT NULL,
  `kapasitasorang` varchar(100) NOT NULL,
  `kapasitastruk` varchar(10) NOT NULL,
  `kapasitasminibus` varchar(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `tarifekonomidewasa` varchar(20) NOT NULL,
  `asuransiekodws` varchar(10) NOT NULL,
  `tarifekonomianak` varchar(10) NOT NULL,
  `asuransiekoank` varchar(10) NOT NULL,
  `tarifbayi` varchar(100) NOT NULL,
  `tarifbisnisdewasa` varchar(10) NOT NULL,
  `asuransibsndws` varchar(10) NOT NULL,
  `tarifbisnisanak` varchar(10) NOT NULL,
  `asuransibsnank` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai`
--

INSERT INTO `pelbaai` (`no`, `namakapal`, `kapasitasorang`, `kapasitastruk`, `kapasitasminibus`, `jurusan`, `jadwal`, `tarifekonomidewasa`, `asuransiekodws`, `tarifekonomianak`, `asuransiekoank`, `tarifbayi`, `tarifbisnisdewasa`, `asuransibsndws`, `tarifbisnisanak`, `asuransibsnank`, `keterangan`) VALUES
(1, 'KMP. PULO TELLO', '270', '14', '8', 'Pulau Baai - Pulau Telo', 'Terlampir', '52000', '5000', '30000', '5000', '', '95000', '5000', '80000', '5000', ''),
(2, 'KM. SABUK NUSANTARA 52', '285', '', '', 'Pulau Baai - Enggano - Pulau Baai - Enggano - Linau - Enggano - Pulau Baai - Sikakap - Muko Muko - Sikakap - Pulau baai', '', '13000', '', '9600', '', '1300', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_bongkarmuat`
--

CREATE TABLE IF NOT EXISTS `pelbaai_bongkarmuat` (
  `no` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `remaks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_bongkarmuat`
--

INSERT INTO `pelbaai_bongkarmuat` (`no`, `nama`, `remaks`) VALUES
(1, 'PT. Multi Sarana Dermaga', '-'),
(2, 'PT. Surya Alam Abadi', '-'),
(3, 'PT. Pandawa Berkah Lumintu', '-'),
(4, 'PT. Varuna Tirta Prakarsya', '-'),
(5, 'PT. Amanah Tri Permata', '-'),
(6, 'PT. Mitra Niaga Sejati', '-'),
(7, 'PT. Intan Samudra Jaya', '-'),
(8, 'PT. Bahari Bara Tambang', '-'),
(9, 'PT. Gema Terminal Cargo', '-'),
(10, 'PT. Yason Delta Sea', '-'),
(11, 'PT. Utama Baai Service', '-'),
(12, 'PT. Wahana Bahari Perkasa', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_emkl`
--

CREATE TABLE IF NOT EXISTS `pelbaai_emkl` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `remaks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_emkl`
--

INSERT INTO `pelbaai_emkl` (`no`, `nama`, `remaks`) VALUES
(1, 'PT. Lautan Lepas Abadi', '-'),
(2, 'PT. Selamat Samudra', '-'),
(3, 'PT. Gema Transportasi Curah', '-'),
(4, 'PT. Berkah Tri Permata', '-'),
(5, 'PT. Varuna Tirta Prakasya', '-'),
(6, 'PT. Karya Benaya', '-'),
(7, 'PT. Lintas Nusantara Jaya', '-'),
(8, 'PT. Jaya Tri Mandiri', '-'),
(9, 'PT. Baai Bahari Abadi', '-'),
(10, 'PT. Atlas Karya Prima', '-'),
(11, 'PT. Cipta Manunggal Logistic', '-'),
(12, 'PT. Bahari Makmur Bersama', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_fasilitasalat`
--

CREATE TABLE IF NOT EXISTS `pelbaai_fasilitasalat` (
  `no` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kategori` varchar(5) NOT NULL,
  PRIMARY KEY (`fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_fasilitasalat`
--

INSERT INTO `pelbaai_fasilitasalat` (`no`, `fasilitas`, `jumlah`, `kapasitas`, `keterangan`, `foto`, `kategori`) VALUES
(3, 'Bak Reservoir Dermaga Nusantara', '1', '100 TON', '', '', 'D'),
(2, 'Bak Reservoir Dermaga Samudra', '1', '50 TON', 'Rusak', '', 'D'),
(3, 'Bulldozer', '1', '70 HP', '', 'bulldozer.jpg', 'B'),
(7, 'Chasis 20"', '2', '', '', '', 'C'),
(6, 'Chasis 40"', '4', '', '', '', 'C'),
(1, 'Conveyor Belt B', '1', '1000 TON/Jam', '', 'conveyorb.jpg', 'B'),
(2, 'Conveyor Belt C', '1', '1500 TON/Jam', '', 'conveyorc.jpg', 'B'),
(1, 'Forklift Catterpillar', '2', '2,5 TON', '', 'forklift.jpg', 'C'),
(3, 'Forklift Komatsu', '1', '10 TON', '', 'forklift3.jpg', 'C'),
(2, 'Forklift Mitsubishi', '2', '3 TON', '', 'forklift2.jpg', 'C'),
(8, 'Gantry Lufting Crane (GLC)', '1', 'SWL 40 TON', '', 'glc.jpg', 'C'),
(7, 'Genset Conveyor A', '1', '850 KVA', '', '', 'D'),
(5, 'Genset Conveyor B', '1', '450 KVA', '', '', 'D'),
(6, 'Genset Conveyor C', '1', '850 KVA', '', '', 'D'),
(4, 'Genset Kantor', '1', '100 KVA', '', '', 'D'),
(5, 'Head Truck', '4', '40 TON', '', 'head-truck-chasis.jpg', 'C'),
(1, 'Jembatan Timbang', '1', '80.000kg/200.000kg', '', 'jembatantimbang.jpg', 'D'),
(2, 'Kapal Pandu', '1', '400 HP', 'MP Pulau Baai', 'kapalpandu.jpg', 'A'),
(1, 'Kapal Tunda', '1', '2 x 600 HP', 'Raflesia', 'kapal-tunda.jpg', 'A'),
(8, 'Mobil PMK', '1', '5 TON', '', '', 'D'),
(4, 'Reach Truck', '2', '45 TON', '', 'reachstacker.jpg', 'C'),
(4, 'Wheel Loader', '3', '3,4 - 4 m3', '', 'wheelloader.jpg', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_fasilitasdermaga`
--

CREATE TABLE IF NOT EXISTS `pelbaai_fasilitasdermaga` (
  `no` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `panjang` varchar(50) NOT NULL,
  `lebar` varchar(50) NOT NULL,
  `kedalaman` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_fasilitasdermaga`
--

INSERT INTO `pelbaai_fasilitasdermaga` (`no`, `fasilitas`, `panjang`, `lebar`, `kedalaman`, `keterangan`, `foto`) VALUES
(4, 'Alur Masuk Pelabuhan Kanal', '2300 m', '66 m', '-5 s/d -13 mLWS', '', 'alurpelabuhan.jpg'),
(3, 'Break Water Bagian Selatan', '652 m', '6 m', '', '', 'breakwaterelatan.jpg'),
(2, 'Break Water Bagian Utara', '420 m', '6 m', '', '', 'breakwaterutara.jpg'),
(7, 'Dermaga Lokal', '124 m', '10 m', '-6,5 mLWS', '', 'dermagalokal.jpg'),
(6, 'Dermaga Nusantara I', '126,5 m', '18 m', '-7,8 mLWS (high spot 6,9)', '', 'dermaganusantara.jpg'),
(5, 'Dermaga Nusantara Lama', '84 m', '18 m', '-9 mLWS', '', 'dermaganusantara.jpg'),
(8, 'Dermaga Samudera', '165 m', '18 m', '-9 mLWS (high spot 7,9)', '', 'dermagasamudra.jpg'),
(10, 'Dolphin Dermaga Samudera Breasting Dolphin', '4 m', '4 m', '-7 mLWS', '', 'breastingdolphin.jpg'),
(9, 'Dolphin Dermaga Samudera Breasting Dolphin 2 Buah', '6 m', '7 m', '-9,3 mLWS', '', 'breastingdolphin2.jpg'),
(1, 'Kolam Pelabuhan', '', '', '-8 s/d -13,5 mLWS', 'Luas = 1000 Ha', 'kolam-pelabuhan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_fasilitasgudang`
--

CREATE TABLE IF NOT EXISTS `pelbaai_fasilitasgudang` (
  `no` int(5) NOT NULL,
  `foto` text NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `luas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_fasilitasgudang`
--

INSERT INTO `pelbaai_fasilitasgudang` (`no`, `foto`, `fasilitas`, `luas`) VALUES
(1, 'tanahdaratan.jpg', 'Tanah Daratan', '1192 Ha'),
(2, '', 'Kolam Pelabuhan Perairan Dalam', '1000 Ha'),
(3, '', 'Kolam Pelabuhan Perairan Luar', '2.183,47 Ha'),
(4, 'lapangan1.jpg', 'Container Yard Dermaga Nusantara Lapangan Nusantara 1', '12.000 m2'),
(5, 'lapangan2.jpg', 'Container Yard Dermaga Nusantara Lapangan Nusantara 2', '8.000 m2'),
(6, 'gudang.jpg', 'Gudang Dermaga Nusantara', '1.750 m2 (50m X 35m)'),
(7, 'stockpile.jpg', 'Dermaga Samudra Stock Pile Area Samudera', '15.500 m2');

-- --------------------------------------------------------

--
-- Table structure for table `pelbaai_perusahaan`
--

CREATE TABLE IF NOT EXISTS `pelbaai_perusahaan` (
  `no` int(5) NOT NULL,
  `namaperusahaan` varchar(255) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelbaai_perusahaan`
--

INSERT INTO `pelbaai_perusahaan` (`no`, `namaperusahaan`, `remarks`) VALUES
(1, 'PT. Global Antara Nusantara Lines', '-'),
(2, 'PT. Elsa trans Nusantara', '-'),
(3, 'PT. Samudera Sarana Floresma', '-'),
(4, 'PT. Sea Asih Line', '-'),
(5, 'PT. Karya Nusantara Lines', '-'),
(6, 'PT. Pasific Samudra Sentosa', '-'),
(7, 'PT. Pertamina', '-'),
(8, 'PT. ASDP', '-'),
(9, 'PT. Pelni', '-'),
(10, 'PT. Haluan Segara Liner', '-'),
(11, 'PT. Kanaka Dwimitra Manunggal', '-'),
(12, 'PT. Gema Mutiara Marina', '-'),
(13, 'PT. Tampok Sukses Perkasa', '-'),
(14, 'PT. Asa Samudera Perkasa', '-'),
(15, 'PT. Jatarim Binau Lines', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pelenggano`
--

CREATE TABLE IF NOT EXISTS `pelenggano` (
  `no` int(4) NOT NULL,
  `namakapal` varchar(50) NOT NULL,
  `kapasitasorang` varchar(100) NOT NULL,
  `kapasitastruk` varchar(10) NOT NULL,
  `kapasitasminibus` varchar(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jadwal` varchar(20) NOT NULL,
  `tarifekonomidewasa` varchar(20) NOT NULL,
  `asuransiekodws` varchar(10) NOT NULL,
  `tarifekonomianak` varchar(10) NOT NULL,
  `asuransiekoank` varchar(10) NOT NULL,
  `tarifbisnisdewasa` varchar(10) NOT NULL,
  `asuransibsndws` varchar(10) NOT NULL,
  `tarifbisnisanak` varchar(10) NOT NULL,
  `asuransibsnank` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelenggano`
--


-- --------------------------------------------------------

--
-- Table structure for table `perintis`
--

CREATE TABLE IF NOT EXISTS `perintis` (
  `no` int(5) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `tarifdewasa` varchar(9) NOT NULL,
  `tarifanak` varchar(10) NOT NULL,
  `tarifbayi` varchar(10) NOT NULL,
  `jamberangkat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perintis`
--


-- --------------------------------------------------------

--
-- Table structure for table `rampcheck`
--

CREATE TABLE IF NOT EXISTS `rampcheck` (
  `no` int(5) NOT NULL,
  `noform` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `pengisi` varchar(200) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `namapo` varchar(255) NOT NULL,
  `nokendaraan` varchar(10) NOT NULL,
  `jeniskendaraan` varchar(100) NOT NULL,
  `jenistrayek` varchar(100) NOT NULL,
  `sanksi` varchar(2555) NOT NULL,
  `warna` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rampcheck`
--

INSERT INTO `rampcheck` (`no`, `noform`, `tanggal`, `pengisi`, `lokasi`, `namapo`, `nokendaraan`, `jeniskendaraan`, `jenistrayek`, `sanksi`, `warna`) VALUES
(1, '1807091', '23/06/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BM 7724 TU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(2, '1807084', '17/06/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7171 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(3, '1807080', '23/06/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7165 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(4, '1807081', '24/06/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7215 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(5, '0007838', '27/06/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7735 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(6, '0007834', '02/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 0783 CZ', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(7, '0007833', '03/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7145 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(8, '0007832', '04/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7084 CZ', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(9, '1807058', '08/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7223 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(10, '0007827', '12/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7235 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(11, '0007828', '13/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7168 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(12, '0007825', '15/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7705 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(13, '0007821', '17/074/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7245 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(14, '0007820', '18/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7157 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(15, '0007819', '19/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7036 CZ', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(16, '0007818', '20/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7182 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(17, '0007817', '21/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7235 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(18, '1807057', '22/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7223 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(19, '0007816', '23/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7131 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(20, '0007812', '27/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7225 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(21, '0007811', '29/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7167 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(22, '0007807', '01/08/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7169 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(23, '0007805', '02/08/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7245 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(24, '0007804', '03/08/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7087 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(25, '0007602', '06/08/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7215 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(26, '1807053', '10/08/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7224 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(27, '1807076', '05/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7028 AP', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(28, '0007823', '16/07/18', 'Terminal Simpang Nangka', 'Terminal', 'SAN', 'BD 7115 AP', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(29, '0007844', '16/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'B 7778 BGA', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(30, '1807077', '25/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'B 7779 BGA', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(31, '1807078', '26/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7084 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(32, '0001927', '29/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7972 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(33, '1807059', '07/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7176 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(34, '0007830', '10/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7207 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(35, '0007813', '26/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7094 CZ', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(36, '0007810', '28/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7058 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(37, '0007809', '30/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7176 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(38, '0007803', '04/08/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7094 LE', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(39, '0007835', '01/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'B 7889 BGB', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(40, '1807054', '11/085/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7034 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(41, '0007842', '18/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7092 CZ', 'Reguler', 'AKAP', 'Tilang', '#ffff00'),
(42, '0007839', '28/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7034 AU', 'Reguler', 'AKAP', 'Tilang', '#ffff00'),
(43, '0007842', '14/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Raflesia', 'BD 7705 AN', 'Reguler', 'AKAP', 'Tilang', '#ffff00'),
(44, '1807089', '23/06/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7018 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(45, '0007831', '06/07/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7011 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(46, '0007826', '11/07/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7188 LE', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(47, '0007808', '31/07/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7008 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(48, '1807056', '05/08/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7018 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(49, '1803715', '08/08/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7028 AP', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(50, '1807051', '12/08/18', 'Terminal Simpang Nangka', 'Terminal', 'CSH', 'BD 7038 AP', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(51, '1807090', '23/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Tebo Mandiri', 'BH 7055 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(52, '0007840', '19/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7155 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(53, '0007836', '30/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7602 CZ', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(54, '0007815', '24/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7153 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(55, '1807052', '09/08/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7181 AN', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(56, '0007801', '07/08/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7065 CZ', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(57, '1807079', '22/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Putra Simas', 'BD 7152 AN', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(58, '1807079', '20/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Sriwijaya', 'BD 7085 LE', 'Reguler', 'AKAP', 'Dilarang Operasional', '#ff975f'),
(59, '1807083', '21/06/18', 'Terminal Simpang Nangka', 'Terminal', 'PT. Jambi Putra Sejahtera', 'BH 7564 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(60, '0007847', '13/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Waspada', 'BD 7064 AU', 'Reguler', 'AKAP', 'Diijinkan Operasional', '0'),
(61, '0007814', '09/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Waspada', 'BD 7064 AU', 'Reguler', 'AKAP', 'Tilang', '#ffff00'),
(62, '0007829', '09/07/18', 'Terminal Simpang Nangka', 'Terminal', 'Damri', 'Z 7783 AN', 'Reguler', 'AKAP', 'Peringatan', '#ffd777'),
(63, '1807086', '14/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Sumber Jaya', 'AA 1576 DD', 'Reguler', 'PARIWISATA', 'Diijinkan Operasional', '0'),
(64, '1807085', '14/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Madu Kisno', 'AA 7466 AA', 'Reguler', 'PARIWISATA', 'Tilang', '#ffff00'),
(65, '1807087', '19/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Effisiensi', 'AA 1617 GW', 'Reguler', 'PARIWISATA', 'Diijinkan Operasional', '0'),
(66, '0007846', '14/06/18', 'Terminal Simpang Nangka', 'Terminal', 'Erotama Prima Wisata', 'BA 7697 BU', 'Reguler', 'PARIWISATA', 'Tilang dan Dilarang Operasional', '#ff975f'),
(67, '0007845', '15/06/18', 'Terminal Simpang Nangka', 'Terminal', 'PO Nusantara', 'K 1430 BB', 'Reguler', 'PARIWISATA', 'Tilang dan Dilarang Operasional', '#ff975f');

-- --------------------------------------------------------

--
-- Table structure for table `ruteakdp1`
--

CREATE TABLE IF NOT EXISTS `ruteakdp1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `ruteakdp1`
--

INSERT INTO `ruteakdp1` (`id`, `name`, `lat`, `lng`) VALUES
(1, '', '-3.827512', '102.299071'),
(2, '', '-3.846695', '102.323790'),
(3, '', '-3.860397', '102.343016'),
(4, '', '-3.879579', '102.348510'),
(5, '', '-3.904241', '102.362243'),
(6, '', '-3.920682', '102.373229'),
(7, '', '-3.926163', '102.386962'),
(8, '', '-3.950823', '102.400695'),
(9, '', '-3.964524', '102.414428'),
(10, '', '-3.978224', '102.422667'),
(11, '', '-3.997403', '102.444640'),
(12, '', '-4.002883', '102.469359'),
(13, '', '-3.991923', '102.474852'),
(14, '', '-4.000143', '102.488585'),
(15, '', '-4.005623', '102.499572'),
(16, '', '-4.041240', '102.529784'),
(17, '', '-4.057679', '102.529784'),
(18, '', '-4.063158', '102.568236'),
(19, '', '-4.079596', '102.573729'),
(20, '', '-4.076856', '102.587462'),
(21, '', '-4.098773', '102.606688'),
(22, '', '-4.115210', '102.612181'),
(23, '', '-4.120689', '102.631408'),
(24, '', '-4.134387', '102.653380'),
(25, '', '-4.134387', '102.667113'),
(26, '', '-4.148084', '102.678099'),
(27, '', '-4.153562', '102.700072'),
(28, '', '-4.180956', '102.700072'),
(29, '', '-4.189173', '102.716552'),
(30, '', '-4.213826', '102.733031'),
(31, '', '-4.230261', '102.771483'),
(32, '', '-4.257651', '102.787963'),
(33, '', '-4.274085', '102.785216'),
(34, '', '-4.295996', '102.768737'),
(35, '', '-4.315168', '102.755004'),
(36, '', '-4.334340', '102.763243'),
(37, '', '-4.350772', '102.785216'),
(38, '', '-4.345294', '102.804442'),
(39, '', '-4.369942', '102.818175'),
(40, '', '-4.367204', '102.831908'),
(41, '', '-4.389112', '102.851134'),
(42, '', '-4.402805', '102.848388'),
(43, '', '-4.413758', '102.862120'),
(44, '', '-4.413758', '102.873107'),
(45, '', '-4.427451', '102.875853'),
(46, '', '-4.452096', '102.903319'),
(47, '', '-4.465787', '102.900573'),
(48, '', '-4.463049', '102.917052');

-- --------------------------------------------------------

--
-- Table structure for table `ruteb1`
--

CREATE TABLE IF NOT EXISTS `ruteb1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `ruteb1`
--

INSERT INTO `ruteb1` (`id`, `name`, `lat`, `lng`) VALUES
(1, '', '-3.755023', '102.261316'),
(2, '', '-3.756222', '102.261789'),
(3, '', '-3.759005', '102.266681'),
(4, '', '-3.762474', '102.267368'),
(5, '', '-3.763630', '102.267496'),
(6, '', '-3.765643', '102.267797'),
(7, '', '-3.766371', '102.268955'),
(8, '', '-3.769283', '102.271359'),
(9, '', '-3.770311', '102.272174'),
(10, '', '-3.771981', '102.273590'),
(11, '', '-3.772494', '102.274234'),
(12, '', '-3.777205', '102.274406'),
(13, '', '-3.779946', '102.270629'),
(14, '', '-3.782472', '102.266767'),
(15, '', '-3.783885', '102.265737'),
(16, '', '-3.783971', '102.265222'),
(17, '', '-3.784742', '102.265136'),
(18, '', '-3.786412', '102.265050'),
(19, '', '-3.787910', '102.264750'),
(20, '', '-3.789409', '102.264278'),
(21, '', '-3.790651', '102.263505'),
(22, '', '-3.791850', '102.262346'),
(23, '', '-3.793734', '102.263462'),
(24, '', '-3.795233', '102.264535'),
(25, '', '-3.797245', '102.265866');

-- --------------------------------------------------------

--
-- Table structure for table `rutepullotello`
--

CREATE TABLE IF NOT EXISTS `rutepullotello` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rutepullotello`
--

INSERT INTO `rutepullotello` (`id`, `name`, `lat`, `lng`) VALUES
(1, '', '-3.908703', '102.284985'),
(2, '', '-3.896030', '102.276059');

-- --------------------------------------------------------

--
-- Table structure for table `tematikanalog`
--

CREATE TABLE IF NOT EXISTS `tematikanalog` (
  `id` varchar(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tematikanalog`
--

INSERT INTO `tematikanalog` (`id`, `keterangan`, `foto`) VALUES
('1', 'Dermaga Nusantara', '12112018074053dermaganusantara.jpg'),
('2', 'Fasilitas Alur Pelabuhan', '12112018100855fasilitasalurpelabuhan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trafficlight`
--

CREATE TABLE IF NOT EXISTS `trafficlight` (
  `id_loc` int(8) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  PRIMARY KEY (`id_loc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trafficlight`
--

INSERT INTO `trafficlight` (`id_loc`, `lokasi`, `kabupaten`, `keterangan`, `lat`, `lng`) VALUES
(1, 'Simpang Lima Ratu Samban Prov Bengkulu', 'Kota Bengkulu', 'Traffic Light', '-3.797391', '102.265955'),
(2, 'Simpang Masjid Jamik', 'Kota Bengkulu', 'Traffic Light', '-3.791870', '102.262331');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(6, '2018-11-12', '1600.png', 37425, 'png'),
(7, '2018-11-12', '270863007-Laporan-Antara-Perencanaan-Jalan.pdf', 862441, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `email`, `username`, `password`) VALUES
(4, '2016-11-05', 'Tutorialweb', 'admin@tutorialweb.net', 'tutorialweb', 'c30b61ff99917c70e70a57d7c72ee621');

-- --------------------------------------------------------

--
-- Table structure for table `warnlight`
--

CREATE TABLE IF NOT EXISTS `warnlight` (
  `id_loc` int(8) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  PRIMARY KEY (`id_loc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `warnlight`
--

INSERT INTO `warnlight` (`id_loc`, `lokasi`, `kabupaten`, `keterangan`, `lat`, `lng`) VALUES
(1, 'KM 6.5', 'Kota Bengkulu', 'Warning Light', '-3.815272', '102.290758');
