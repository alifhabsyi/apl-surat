-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 06:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl-surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `ID_KURIR` int(11) NOT NULL,
  `NAMA_KURIR` varchar(100) NOT NULL,
  `NO_KURIR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`ID_KURIR`, `NAMA_KURIR`, `NO_KURIR`) VALUES
(1, 'Alif', '085255559999'),
(3, 'Adam', '085211113333'),
(4, 'Yusuf\r\n', '081255557777'),
(8, 'Iwan', '087866669999');

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `NO_SK` varchar(100) NOT NULL,
  `TANGGAL_SK` date NOT NULL,
  `TANGGAL_AKHIR_SK` date NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(500) NOT NULL,
  `JENIS` varchar(100) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `PENANGGUNG_JAWAB` varchar(200) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `TELEGRAM_ID` varchar(100) NOT NULL,
  `NOTIF` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`NO_SK`, `TANGGAL_SK`, `TANGGAL_AKHIR_SK`, `NAMA`, `ALAMAT`, `JENIS`, `NO_TELP`, `PENANGGUNG_JAWAB`, `STATUS`, `USERNAME`, `TELEGRAM_ID`, `NOTIF`) VALUES
('APO/0811/2021', '2021-08-11', '2022-08-11', 'Apotek Melody', 'Jl. Sultan Adam No. 20 RT 12', 'apot', '085250976322', 'Nada', 'TERKIRIM', 'superadmin', '572660527', '0000-00-00'),
('APO/5420/DPMPTSP/2021', '2021-08-14', '2021-08-17', 'Apotek Perintis', 'Jl. Kuripan No. 51 RT 12', 'apot', '08525976322', 'Halimah Sri Ningsih', 'PENDING', 'superadmin', '572660527', '2021-08-14'),
('APO/8852/DPMPTSP/2021', '2021-08-12', '2021-08-16', 'Apotik Firdaus', 'Jl. Sultan Adam No. 50 Banjarmasin', 'apot', '085250976322', 'FAUZI YUSA RAHMAN ', 'TERKIRIM', 'superadmin', '572660527', '2021-08-12'),
('AU/0080/DPMPTSP/2021', '2021-08-12', '2026-08-12', 'PT MARGASANA BANUA', 'Jl. Lingkar Dalam Selatan No. 60 RT 12', 'ang', '085250976322', 'SAMAD', 'PENDING', 'superadmin', '572660527', '0000-00-00'),
('IUJK/6651/DPMPTSP/2021', '2021-08-12', '2022-08-12', 'CV INDO JAYA CONS', 'Jl. Lingkar Dalam Selatan No. 50', 'kons', '085250976321', 'Abdul Aziz', 'PENDING', 'superadmin', '572660527', '0000-00-00'),
('KLI/1208/DPMPTSP/2021', '2021-08-12', '2021-08-16', 'KLINIK FIRDAUS', 'Jl. Dahlia Gang Budaya  No.49 RT. 28', 'klin', '085250976322', 'Indri Sri Yani', 'TERKIRIM', 'superadmin', '572660527', '2021-08-12'),
('LAB/7895/DPMPTSP', '2021-08-12', '2021-08-13', 'Love Aphotecary', 'Jl. Sultan Adam No. 58', 'lab', '08115191800', 'Dr. Shinta Wiguna', 'TERKIRIM', 'superadmin', '1919783439', '2021-08-12'),
('PAR/0811/2021', '2021-08-11', '2021-08-13', 'Hotel Zuri Exspress', 'Jl. A. Yani Km 6', 'pari', '08525976322', 'Intan', 'TERKIRIM', 'superadmin', '572660527', '2021-08-11'),
('PAR/7895/2021', '2021-08-14', '2022-08-14', 'RM Cita Rasa', 'Jl. Manggis Komplek Brawijaya No2', 'pari', '085250976322', 'Joshua', 'PENDING', 'superadmin', '572660527', '0000-00-00'),
('PAR/9887/DPMPTSP/2021', '2021-08-12', '2026-08-12', 'RM CAK HARI', 'Jl. Gatot Subroto No. 86 Kebun Bunga', 'pari', '085250976322', 'HARIANTO', 'PENDING', 'superadmin', '572660527', '0000-00-00'),
('PAUD/1120/DPMPTSP/2021', '2021-08-14', '2021-08-18', 'Yayasan Ananda', 'Jl. Sungai Lulut Komplek Persada No 20 RT 11', 'pend', '08525976322', 'Khairul Sofyan', 'TERKIRIM', 'admin', '572660527', '0000-00-00'),
('PAUD/1208/DPMPTSP/2021', '2021-08-12', '2026-08-12', 'Yayasan Kartika', 'Jl. Gatot Subroto No. 80 RT 15', 'pend', '085250976322', 'Karmila Sari', 'TERKIRIM', 'superadmin', '572660527', '0000-00-00'),
('PAUD/5250/DPMPTSP/2021', '2021-08-15', '2021-08-30', 'Yayasan Kasih Bunda', 'Jl. Cemara Raya Komplek Permata No. 7', 'pend', '08525976322', 'Sunarti Cahya', 'TERKIRIM', 'superadmin', '572660527', '0000-00-00'),
('PBG/1275/DPMPTSP/2021', '2021-08-12', '2071-08-12', 'RUMAH TINGGAL', 'Jl. Gerilya Komplek Graha Mahatama Blok Kuwini No. 40 RT. 23', 'bang', '085250976322', 'JUMBERI', 'PENDING', 'superadmin', '572660527', '0000-00-00'),
('REK/8853/DPMPTSP/2021', '2021-08-14', '2022-08-14', 'PT Rajawali Perkasa ', 'Jl. A. Yani KM 3', 'rekla', '08525976322', 'Galih Pratama ', 'PENGAMBILAN_SENDIRI', 'superadmin', '572660527', '0000-00-00'),
('REK/9982/DPMPTSP/2021', '2021-08-12', '2022-08-12', 'RAMAYANA SENTRA ANTASARI', 'Jl. P. Antasari No. 71', 'rekla', '085250976322', 'Surianto Hadi', 'PENDING', 'superadmin', '572660527', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sk_kirim`
--

CREATE TABLE `sk_kirim` (
  `NO_SK` varchar(200) NOT NULL,
  `NO_KIRIM` varchar(200) NOT NULL,
  `TANGGAL_KIRIM` date NOT NULL,
  `NO_RESI` varchar(200) NOT NULL,
  `ID_KURIR` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_kirim`
--

INSERT INTO `sk_kirim` (`NO_SK`, `NO_KIRIM`, `TANGGAL_KIRIM`, `NO_RESI`, `ID_KURIR`, `STATUS`) VALUES
('PAUD/5250/DPMPTSP/2021', '202108/15', '2021-08-15', 'RES/202108051', '8', 'TERKIRIM'),
('PBG/1275/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108059', '1', 'PENDING'),
('APO/5420/DPMPTSP/2021', '202108/14', '2021-08-14', 'RES/202108172', '1', 'PENDING'),
('KLI/1208/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108462', '4', 'TERKIRIM'),
('REK/9982/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108472', '1', 'PENDING'),
('PAR/7895/2021', '202108/14', '2021-08-14', 'RES/202108546', '1', 'PENDING'),
('LAB/7895/DPMPTSP', '202108/12', '2021-08-12', 'RES/202108562', '1', 'TERKIRIM'),
('AU/0080/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108574', '1', 'PENDING'),
('PAUD/1208/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108594', '8', 'TERKIRIM'),
('IUJK/6651/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108621', '3', 'PENDING'),
('APO/0811/2021', '202108/11', '2021-08-11', 'RES/202108720', '1', 'TERKIRIM'),
('APO/8852/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108781', '1', 'TERKIRIM'),
('PAR/9887/DPMPTSP/2021', '202108/12', '2021-08-12', 'RES/202108815', '3', 'PENDING'),
('PAR/0811/2021', '202108/12', '2021-08-12', 'RES/202108826', '1', 'TERKIRIM'),
('REK/8853/DPMPTSP/2021', '202108/14', '2021-08-14', 'RES/202108937', '1', 'PENDING'),
('PAUD/1120/DPMPTSP/2021', '202109/30', '2021-09-30', 'RES/202109920', '1', 'TERKIRIM'),
('REK/9982/DPMPTSP/2021', '202108/14', '2021-08-14', 'URES/202108017', '3', 'PENDING'),
('REK/8853/DPMPTSP/2021', '202108/14', '2021-08-14', 'URES/202108243', '1', 'PENDING'),
('PAR/9887/DPMPTSP/2021', '202108/12', '2021-08-12', 'URES/202108285', '4', 'PENDING'),
('REK/8853/DPMPTSP/2021', '202108/14', '2021-08-14', 'URES/202108528', '1', 'PENDING'),
('REK/9982/DPMPTSP/2021', '202108/12', '2021-08-12', 'URES/202108825', '3', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `sk_terima`
--

CREATE TABLE `sk_terima` (
  `NO_RESI` varchar(200) NOT NULL,
  `ID_KURIR` varchar(20) NOT NULL,
  `TANGGAL_KIRIM` date DEFAULT NULL,
  `NO_KIRIM` varchar(200) NOT NULL,
  `NO_SK` varchar(200) NOT NULL,
  `NAMA_PENERIMA` varchar(200) NOT NULL,
  `KETERANGAN` varchar(500) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `TANGGAL_TERIMA` date NOT NULL,
  `NO_RESIBARU` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk_terima`
--

INSERT INTO `sk_terima` (`NO_RESI`, `ID_KURIR`, `TANGGAL_KIRIM`, `NO_KIRIM`, `NO_SK`, `NAMA_PENERIMA`, `KETERANGAN`, `STATUS`, `TANGGAL_TERIMA`, `NO_RESIBARU`) VALUES
('RES/202108051', '8', '2021-08-15', '202108/15', 'PAUD/5250/DPMPTSP/2021', 'Nada', '', 'TERKIRIM', '2021-08-15', ''),
('RES/202108059', '1', '2021-08-12', '202108/12', 'PBG/1275/DPMPTSP/2021', 'Tidak ada Penerima', '', 'PENDING', '2021-08-12', ''),
('RES/202108172', '1', '2021-08-14', '202108/14', 'APO/5420/DPMPTSP/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', ''),
('RES/202108462', '4', '2021-08-12', '202108/12', 'KLI/1208/DPMPTSP/2021', 'Nada', '', 'TERKIRIM', '2021-08-12', ''),
('RES/202108472', '1', '2021-08-12', '202108/12', 'REK/9982/DPMPTSP/2021', 'Alamat Palsu', '', 'PENDING', '2021-08-12', 'URES/202108825'),
('RES/202108546', '1', '2021-08-14', '202108/14', 'PAR/7895/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', ''),
('RES/202108562', '1', '2021-08-12', '202108/12', 'LAB/7895/DPMPTSP', 'Security', '', 'TERKIRIM', '2021-08-12', ''),
('RES/202108574', '1', '2021-08-12', '202108/12', 'AU/0080/DPMPTSP/2021', 'tidak ada ', '', 'PENDING', '2021-08-12', ''),
('RES/202108594', '8', '2021-08-12', '202108/12', 'PAUD/1208/DPMPTSP/2021', 'Karmila Sari', '', 'TERKIRIM', '2021-08-12', ''),
('RES/202108621', '3', '2021-08-12', '202108/12', 'IUJK/6651/DPMPTSP/2021', 'Alamat Palsu', '', 'PENDING', '2021-08-12', ''),
('RES/202108720', '1', '2021-08-11', '202108/11', 'APO/0811/2021', 'Nada', '', 'TERKIRIM', '2021-08-11', ''),
('RES/202108781', '1', '2021-08-12', '202108/12', 'APO/8852/DPMPTSP/2021', 'Fauzi', '', 'TERKIRIM', '2021-08-12', ''),
('RES/202108815', '3', '2021-08-12', '202108/12', 'PAR/9887/DPMPTSP/2021', 'Tidak ada Penerima', '', 'PENDING', '2021-08-12', 'URES/202108285'),
('RES/202108826', '1', '2021-08-12', '202108/12', 'PAR/0811/2021', 'Intan', '', 'TERKIRIM', '2021-08-12', ''),
('RES/202108937', '1', '2021-08-14', '202108/14', 'REK/8853/DPMPTSP/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', 'URES/202108243'),
('RES/202109920', '1', '2021-09-30', '202109/30', 'PAUD/1120/DPMPTSP/2021', 'TIDAK ADA', 'BERHASIL', 'TERKIRIM', '2021-09-30', ''),
('URES/202108017', '3', '2021-08-14', '202108/14', 'REK/9982/DPMPTSP/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', ''),
('URES/202108243', '1', '2021-08-14', '202108/14', 'REK/8853/DPMPTSP/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', 'URES/202108528'),
('URES/202108285', '4', '2021-08-12', '202108/12', 'PAR/9887/DPMPTSP/2021', 'Tidak ada Penerima', '', 'PENDING', '2021-08-12', ''),
('URES/202108528', '1', '2021-08-14', '202108/14', 'REK/8853/DPMPTSP/2021', 'Tidak Ada Penerima', '', 'PENDING', '2021-08-14', 'PENGAMBILAN_SENDIRI'),
('URES/202108825', '3', '2021-08-12', '202108/12', 'REK/9982/DPMPTSP/2021', 'Tidak ada Penerima', '', 'PENDING', '2021-08-12', 'URES/202108017');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `NO_SK` varchar(200) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `NO_TELP` varchar(100) NOT NULL,
  `PENDIDIKAN` varchar(100) NOT NULL,
  `JENIS_KELAMIN` varchar(100) NOT NULL,
  `PEKERJAAN` varchar(100) NOT NULL,
  `PEMILIK` varchar(100) NOT NULL,
  `ALAMAT` varchar(500) NOT NULL,
  `KOTA` varchar(200) NOT NULL,
  `JENIS` varchar(200) NOT NULL,
  `P1` int(11) NOT NULL,
  `P2` int(11) NOT NULL,
  `P3` int(11) NOT NULL,
  `P4` int(11) NOT NULL,
  `P5` int(11) NOT NULL,
  `P6` int(11) NOT NULL,
  `P7` int(11) NOT NULL,
  `P8` int(11) NOT NULL,
  `P9` int(11) NOT NULL,
  `SARAN` varchar(500) NOT NULL,
  `TANGGAL_SURVEI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`NO_SK`, `NAMA`, `EMAIL`, `NO_TELP`, `PENDIDIKAN`, `JENIS_KELAMIN`, `PEKERJAAN`, `PEMILIK`, `ALAMAT`, `KOTA`, `JENIS`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `SARAN`, `TANGGAL_SURVEI`) VALUES
('adad', 'MUHAMMAD', 'muhammad@MAIL.COM', '087777444435', 'D3', 'Laki-laki', 'SWASTA', 'PEMILIK', 'JL KASTURI', 'BANJARMASIN', 'Izin Operasional Laboratoium', 4, 4, 4, 4, 4, 4, 4, 3, 2, '', '2021-08-08'),
('adadqwdqw', 'Yazid', 'yazid@MAIL.COM', '087777444435', 'D3', 'Laki-laki', 'SWASTA', 'PEMILIK', 'JL KASTURI', 'BANJARMASIN', 'Izin Operasional Laboratoium', 4, 4, 4, 4, 4, 4, 4, 3, 2, '', '2021-07-14'),
('APO/0811/2021', 'Nada', 'nada@gmail.com', '085250976322', 'S1', 'Perempuan', 'WIRAUSAHA', 'PEMILIK', 'Jl. Sultan Adam', 'Banjarmasin', 'Izin Operasional Pendidikan', 4, 4, 3, 4, 3, 4, 4, 4, 4, 'Terimakasih layanan pengiriman sangat memudahkan', '2021-08-11'),
('APO/5420/DPMPTSP/2021', 'Halimah Sri Ningsih', 'halimah@gmail.com', '08525976322', 'S1', 'Perempuan', 'SWASTA', 'PEMILIK', 'Jl. Kuripan', 'Banjarmasin', 'Izin Operasional Pendidikan', 4, 4, 4, 4, 4, 4, 4, 4, 4, 'OK', '2021-08-14'),
('asa', 'Yuda', 'yoedha@MAIL.COM', '087777444435', 'D3', 'Laki-laki', 'SWASTA', 'PEMILIK', 'JL KASTURI', 'BANJARMASIN', 'Izin Operasional Laboratoium', 4, 4, 4, 4, 4, 4, 4, 4, 4, '', '2021-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(50) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JABATAN` varchar(100) NOT NULL,
  `LEVEL` varchar(50) NOT NULL,
  `PASSWORD` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `NAMA`, `JABATAN`, `LEVEL`, `PASSWORD`) VALUES
('admin', 'Khairunnada', 'Programmer', '2', '202cb962ac59075b964b07152d234b70'),
('pos1', 'Khairunnada', 'Programmer', '3', '202cb962ac59075b964b07152d234b70'),
('superadmin', 'Khairunnada', 'Programmer', '1', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`ID_KURIR`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`NO_SK`);

--
-- Indexes for table `sk_kirim`
--
ALTER TABLE `sk_kirim`
  ADD PRIMARY KEY (`NO_RESI`);

--
-- Indexes for table `sk_terima`
--
ALTER TABLE `sk_terima`
  ADD PRIMARY KEY (`NO_RESI`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`NO_SK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `ID_KURIR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
