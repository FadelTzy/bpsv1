-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 03:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `hakakses` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pass`, `tgl_daftar`, `hakakses`, `username`) VALUES
(1, 'Fadellllllllllllllllll', 'fadel123', '2020-01-09', 'yah', 'fadel'),
(2, 'Fadel', 'john123', '2020-01-31', '', 'johndoe'),
(3, 'johndoe', 'john123', '2020-01-31', '', 'johndoe'),
(4, 'johny', 'fadel123', '2020-01-31', '', 'johny'),
(5, 'sadasd', '123', '2020-01-31', '', 'sad'),
(6, 'sadasd', '123', '2020-01-31', '', 'sad'),
(7, 'xxxxx', 'fadel123', '2020-01-31', '', 'xxxxxx'),
(8, 'fadel', 'fadel123', '0000-00-00', '', 'fadells'),
(9, 'fadels', 'fadel123', '0000-00-00', '', 'fadel'),
(10, 'fadela', 'fadel123', '0000-00-00', '', 'fadell'),
(11, 'fadela', 'fadel123', '0000-00-00', '', 'fadell'),
(12, 'fadel', 'fadel123', '0000-00-00', '', 'fadell'),
(13, 'fadel', 'fadel123', '0000-00-00', '', 'fadelll'),
(14, 'misran', 'memek123', '2020-02-25', '', 'samlekom');

-- --------------------------------------------------------

--
-- Table structure for table `gambarpeta`
--

CREATE TABLE `gambarpeta` (
  `judulp` varchar(100) NOT NULL,
  `namag` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambarpeta`
--

INSERT INTO `gambarpeta` (`judulp`, `namag`) VALUES
('s', 'sosial.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambarutama`
--

CREATE TABLE `gambarutama` (
  `namag` char(100) NOT NULL,
  `judulp` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambarutama`
--

INSERT INTO `gambarutama` (`namag`, `judulp`, `id`) VALUES
('Screenshot (4).png', 'PEtaku', 6),
('bcutama.jpg', 'Sulawesi Selatan', 7),
('iconadmin.png', 'm', 8),
('admin.png', 'cek', 9),
('bps.png', 'ssd', 10),
('Screenshot (15).png', 'asd', 11),
('Screenshot (12).png', 'fsd', 12),
('Screenshot (15).png', 'ss', 13),
('Screenshot (6).png', 'sdasd', 14),
('Screenshot (14).png', 'das', 15),
('Screenshot (16).png', 'ce', 16),
('bcutama2.jpg', '', 17),
('bcutama2.jpg', 'bcutama2', 18),
('sosial.jpg', 'sosial', 19);

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `no` int(100) NOT NULL,
  `kabkot` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `PerumahandanLingkunganHidup1038` float NOT NULL,
  `Pertanian11` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`no`, `kabkot`, `id`, `PerumahandanLingkunganHidup1038`, `Pertanian11`) VALUES
(1, 'KEPULAUAN SELAYAR', 7301, 0, 84),
(2, 'BULUKUMBA', 7302, 0, 125),
(3, 'BANTAENG', 7303, 0, 63),
(4, 'JENEPONTO', 7304, 0, 109),
(5, 'TAKALAR', 7305, 0, 97),
(6, 'GOWA', 7306, 0, 142),
(7, 'SINJAI', 7307, 0, 76),
(8, 'MAROS', 7308, 0, 90),
(9, 'PANGKAJENE DAN KEPULAUAN', 7309, 0, 97),
(10, 'BARRU', 7310, 0, 53),
(11, 'BONE', 7311, 0, 355),
(12, 'SOPPENG', 7312, 0, 67),
(13, 'WAJO', 7313, 0, 173),
(14, 'SIDENRENG RAPPANG', 7314, 0, 100),
(15, 'PINRANG', 7315, 0, 102),
(16, 'ENREKANG', 7316, 0, 125),
(17, 'LUWU', 7317, 0, 220),
(18, 'TANA TORAJA', 7318, 0, 155),
(19, 'LUWU UTARA', 7322, 0, 171),
(20, 'LUWU TIMUR', 7325, 0, 118),
(21, 'TORAJA UTARA', 7326, 0, 140),
(22, 'MAKASSAR', 7371, 0, 7),
(23, 'PAREPARE', 7372, 0, 3),
(24, 'PALOPO', 7373, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `indikatormenu`
--

CREATE TABLE `indikatormenu` (
  `no` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `indikator` varchar(100) NOT NULL,
  `nama_peta` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikatormenu`
--

INSERT INTO `indikatormenu` (`no`, `id`, `indikator`, `nama_peta`, `keterangan`) VALUES
(9, 38, 'Kependudukan dan Ketenagakerjaan', '', ''),
(10, 38, 'Perumahan dan Lingkungan Hidup', 'PerumahandanLingkunganHidup1038', ''),
(11, 38, 'Antisipasi dan Kejadian Bencana Alam', '', ''),
(12, 38, 'Sosial dan Budaya', '', ''),
(13, 38, 'Hiburan dan Olahraga', '', ''),
(14, 38, 'Angkutan, Komunikasi dan Informasi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `indikatorpertama`
--

CREATE TABLE `indikatorpertama` (
  `indikator` varchar(100) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikatorpertama`
--

INSERT INTO `indikatorpertama` (`indikator`, `id`, `name`, `class`) VALUES
('Wilayah Administrasi', 1, '', ''),
('Kependudukan dan Ketenagakerjaan', 2, '', ''),
('Perumahan dan Lingkungan Hidup', 3, '', ''),
('Antisipasi Bencana', 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kemiskinan`
--

CREATE TABLE `kemiskinan` (
  `kabkot` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `jumlah` float NOT NULL,
  `gk` float NOT NULL,
  `p0` float NOT NULL,
  `p1` float NOT NULL,
  `p3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kemiskinan`
--

INSERT INTO `kemiskinan` (`kabkot`, `id`, `jumlah`, `gk`, `p0`, `p1`, `p3`) VALUES
('KEPULAUAN SELAYAR', 7301, 17.36, 370380, 12.83, 2.87, 0.9),
('BULUKUMBA', 7302, 30.49, 330161, 7.26, 0.6, 0.09),
('BANTAENG', 7303, 16.91, 309357, 9.03, 1.35, 0.28),
('JENEPONTO', 7304, 54.05, 359883, 14.88, 2.02, 0.41),
('TAKALAR', 7305, 25.93, 356973, 8.7, 1.08, 0.19),
('GOWA', 7306, 57.99, 385820, 7.53, 0.92, 0.17),
('SINJAI', 7307, 22.27, 294916, 9.14, 1.08, 0.22),
('MAROS', 7308, 34.85, 405944, 9.89, 2.5, 0.89),
('PANGKAJENE DAN KEPULAUAN', 7309, 47.07, 322958, 14.06, 1.81, 0.31),
('BARRU', 7310, 14.92, 322248, 8.57, 1.07, 0.21),
('BONE', 7311, 76.25, 325422, 10.06, 1.35, 0.29),
('SOPPENG', 7312, 16.45, 297546, 7.25, 0.69, 0.12),
('WAJO', 7313, 27.48, 311017, 6.91, 1.06, 0.26),
('SIDENRENG RAPPANG', 7314, 14.44, 312800, 4.79, 0.6, 0.13),
('PINRANG', 7315, 31.85, 294349, 8.46, 1.54, 0.4),
('ENREKANG', 7316, 25.4, 331667, 12.33, 1.7, 0.38),
('LUWU', 7317, 46.18, 318911, 12.78, 2.71, 0.72),
('TANA TORAJA', 7318, 28.87, 316911, 12.35, 3.1, 1.12),
('LUWU UTARA', 7322, 42.48, 342277, 13.6, 2.55, 0.61),
('LUWU TIMUR', 7325, 20.83, 333739, 6.98, 1.11, 0.25),
('TORAJA UTARA', 7326, 28.64, 314426, 12.41, 1.99, 0.46),
('MAKASSAR', 7371, 65.12, 418831, 4.28, 0.6, 0.15),
('PAREPARE', 7372, 7.62, 323839, 5.26, 0.71, 0.15),
('PALOPO', 7373, 14.37, 324233, 7.82, 1.15, 0.29);

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `opsi` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `totalsendiri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id`, `judul`, `opsi`, `ket`, `totalsendiri`) VALUES
(8, 'Pertanian', 'Pertanian11', 'persen', ''),
(9, '', 'PerumahandanLingkunganHidup1038', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `makassar`
--

CREATE TABLE `makassar` (
  `nama_peta` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makassar`
--

INSERT INTO `makassar` (`nama_peta`, `id`) VALUES
('wilad', 1),
('AW_kel', 2),
('AW_des', 3),
('AW_lereng', 4),
('AW_lembah', 5),
('AW_dataran', 6),
('AW_tepilaut', 7),
('AW_nontepilaut', 8),
('halo', 12),
('yolo', 13),
('yolok', 14),
('AW_danau', 15),
('AW_gunung', 16);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(100) NOT NULL,
  `menuindikator` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menuindikator`, `icon`) VALUES
(36, 'Kemiskinan', 'none'),
(37, 'PDRB', 'none'),
(38, 'Potensi Desa', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `populasi`
--

CREATE TABLE `populasi` (
  `kabkot` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `wilad` int(100) NOT NULL,
  `AW_kel` int(100) NOT NULL,
  `AW_des` int(100) NOT NULL,
  `AW_lereng` int(9) NOT NULL,
  `AW_lembah` int(9) NOT NULL,
  `AW_dataran` int(9) NOT NULL,
  `AW_tepilaut` int(10) NOT NULL,
  `AW_nontepilaut` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `populasi`
--

INSERT INTO `populasi` (`kabkot`, `id`, `wilad`, `AW_kel`, `AW_des`, `AW_lereng`, `AW_lembah`, `AW_dataran`, `AW_tepilaut`, `AW_nontepilaut`) VALUES
('KEPULAUAN SELAYAR', 7301, 11, 7, 88, 14, 0, 74, 76, 12),
('BULUKUMBA', 7302, 10, 27, 136, 12, 7, 117, 31, 105),
('BANTAENG', 7303, 8, 21, 67, 30, 0, 37, 16, 51),
('JENEPONTO', 7304, 11, 31, 113, 17, 1, 95, 34, 79),
('TAKALAR', 7305, 9, 24, 100, 1, 0, 99, 32, 68),
('GOWA', 7306, 18, 46, 167, 43, 9, 115, 0, 167),
('SINJAI', 7307, 9, 13, 80, 31, 1, 48, 12, 68),
('MAROS', 7308, 14, 23, 103, 20, 0, 83, 6, 97),
('PANGKAJENE DAN KEPULAUAN', 7309, 13, 38, 103, 6, 3, 94, 50, 53),
('BARRU', 7310, 7, 15, 55, 9, 3, 43, 29, 26),
('BONE', 7311, 27, 44, 372, 40, 0, 332, 54, 318),
('SOPPENG', 7312, 8, 21, 70, 10, 0, 60, 0, 70),
('WAJO', 7313, 14, 48, 190, 5, 0, 185, 24, 166),
('SIDENRENG RAPPANG', 7314, 11, 38, 106, 6, 2, 98, 0, 106),
('PINRANG', 7315, 12, 39, 108, 10, 2, 96, 22, 86),
('ENREKANG', 7316, 12, 17, 129, 81, 27, 21, 0, 129),
('LUWU', 7317, 22, 20, 227, 69, 5, 153, 42, 185),
('TANA TORAJA', 7318, 19, 47, 159, 114, 19, 26, 0, 159),
('LUWU UTARA', 7322, 12, 7, 174, 25, 18, 131, 19, 155),
('LUWU TIMUR', 7325, 11, 3, 128, 18, 1, 109, 21, 107),
('TORAJA UTARA', 7326, 21, 40, 151, 97, 0, 54, 0, 151),
('MAKASSAR', 7371, 15, 153, 153, 0, 0, 153, 27, 126),
('PAREPARE', 7372, 4, 22, 22, 13, 0, 9, 11, 11),
('PALOPO', 7373, 9, 48, 48, 7, 1, 40, 21, 27);

-- --------------------------------------------------------

--
-- Table structure for table `subindikator`
--

CREATE TABLE `subindikator` (
  `no` int(100) NOT NULL,
  `idsubindikator` int(100) NOT NULL,
  `subindikatorlist` varchar(100) NOT NULL,
  `nama_peta` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subindikator`
--

INSERT INTO `subindikator` (`no`, `idsubindikator`, `subindikatorlist`, `nama_peta`, `keterangan`) VALUES
(9, 1, 'Banyak Desa/Kelurahan Menurut Sumber Penghasilan Utama', '', ''),
(9, 2, 'Banyak Desa/Kelurahan Sebagian Besar Penduduk Bekerja Pada Sektor Pertanian', '', ''),
(9, 3, 'Banyaknya Desa/Kelurahan Menurut Keberadaan Tenaga Kerja Indonesia', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subsubindikator`
--

CREATE TABLE `subsubindikator` (
  `idsubindikator` int(100) NOT NULL,
  `nosubsubindikator` int(100) NOT NULL,
  `subsubindikatorlist` varchar(100) NOT NULL,
  `nama_peta` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `opsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsubindikator`
--

INSERT INTO `subsubindikator` (`idsubindikator`, `nosubsubindikator`, `subsubindikatorlist`, `nama_peta`, `keterangan`, `opsi`) VALUES
(1, 1, 'Pertanian', 'Pertanian11', '', ''),
(1, 2, 'Pertambangan', '', '', ''),
(1, 3, 'Industri Pengolahan', '', '', ''),
(1, 4, 'Perdagangan', '', '', ''),
(1, 5, 'Jasa', '', '', ''),
(1, 6, 'Angkutan, Pergudangan, dan Komunikasi', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambarpeta`
--
ALTER TABLE `gambarpeta`
  ADD PRIMARY KEY (`namag`);

--
-- Indexes for table `gambarutama`
--
ALTER TABLE `gambarutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikatormenu`
--
ALTER TABLE `indikatormenu`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `indikatorpertama`
--
ALTER TABLE `indikatorpertama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemiskinan`
--
ALTER TABLE `kemiskinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makassar`
--
ALTER TABLE `makassar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populasi`
--
ALTER TABLE `populasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subindikator`
--
ALTER TABLE `subindikator`
  ADD PRIMARY KEY (`idsubindikator`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `subsubindikator`
--
ALTER TABLE `subsubindikator`
  ADD PRIMARY KEY (`nosubsubindikator`),
  ADD KEY `idsubindikator` (`idsubindikator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gambarutama`
--
ALTER TABLE `gambarutama`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7374;

--
-- AUTO_INCREMENT for table `indikatormenu`
--
ALTER TABLE `indikatormenu`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kemiskinan`
--
ALTER TABLE `kemiskinan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7374;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `makassar`
--
ALTER TABLE `makassar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `populasi`
--
ALTER TABLE `populasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7374;

--
-- AUTO_INCREMENT for table `subindikator`
--
ALTER TABLE `subindikator`
  MODIFY `idsubindikator` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subsubindikator`
--
ALTER TABLE `subsubindikator`
  MODIFY `nosubsubindikator` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
