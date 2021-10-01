-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 02:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apl-izin`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID_REG` varchar(20) NOT NULL,
  `JENIS` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `KELURAHAN` varchar(255) NOT NULL,
  `KECAMATAN` varchar(255) NOT NULL,
  `KOTA` varchar(255) NOT NULL,
  `PROVINSI` varchar(255) NOT NULL,
  `PENANGGUNG_JAWAB` varchar(50) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `STATUS` varchar(5) NOT NULL,
  `SARAN` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID_REG`, `JENIS`, `NAMA`, `ALAMAT`, `KELURAHAN`, `KECAMATAN`, `KOTA`, `PROVINSI`, `PENANGGUNG_JAWAB`, `NIK`, `NO_TELP`, `STATUS`, `SARAN`) VALUES
('R10O8P', 'lab', '098', '098', '809089', '0', '890', '8908', '989', '11', '11', 'REG', ''),
('R11XLI', 'kons', 'MUHAMMAD ALIEF HABSYI 3', 'iuoo', '908', '09809', '8809', '809890', '098', '908', '089', 'SKK', '\r\n                osiadoiudwe\r\nw\r\new\r\ne\r\nwqe\r\nw\r\neq\r\nwe\r\nq\r\nwe\r\nqwe\r\nq\r\nwe\r\nqw\r\neq\r\nwe\r\nq\r\nwe\r\nwq                            '),
('R12XQ7', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1396O', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R14356', 'lab', 'MUHAMMAD ALIEF HABSYI', 'u8', 'u9', '8', '7798', '987', '897', '98', '8987', 'REG', ''),
('R19SUG', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1F4BZ', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1HGK9', 'lab', 'MUHAMMAD ALIEF HABSYI', '98098098809', '890890', '809', '890', '890', '890', '899', '809', 'REG', ''),
('R1HPO1', 'lab', 'MUHAMMAD ALIEF HABSYI', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'RJC', ''),
('R1JRCN', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1M9Q7', 'pend', 'MUHAMMAD ALIEF HABSYI 2', 'ou0809', '980', '890089', '809', '089', '809', '89', '098', 'RJC', '\r\n                                sadas            '),
('R1QG17', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1QSCK', 'lab', '897', '987', '987', '978', '97889', '7987', '987', '11', '11', 'REG', ''),
('R1R6DG', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1YJHQ', 'lab', '098', '08980', '9809', '089', '089', '089', '0909', '11', '11', 'REG', ''),
('R1Z6JC', 'lab', '098', '098', '809089', '0', '890', '8908', '989', '11', '11', 'REG', '');

-- --------------------------------------------------------

--
-- Table structure for table `regkons`
--

CREATE TABLE `regkons` (
  `ID_REG` varchar(20) NOT NULL,
  `FOTO` varchar(500) NOT NULL,
  `KTP` varchar(500) NOT NULL,
  `IUJK` varchar(500) NOT NULL,
  `SBUJK` varchar(500) NOT NULL,
  `NPWK` varchar(500) NOT NULL,
  `SKTU` varchar(500) NOT NULL,
  `SERTIFIKAT_KEAHLIAN` varchar(500) NOT NULL,
  `DAFTAR_PENGALAMAN` varchar(500) NOT NULL,
  `PJT` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regkons`
--

INSERT INTO `regkons` (`ID_REG`, `FOTO`, `KTP`, `IUJK`, `SBUJK`, `NPWK`, `SKTU`, `SERTIFIKAT_KEAHLIAN`, `DAFTAR_PENGALAMAN`, `PJT`, `NIP`) VALUES
('R11XLI', '524c5ddca4d4cbdb9d2800e5e4f797bb.jpg', '993a92ae6f184e24f4e3a5cf3e1db8ea.jpg', '559821208a76432f76b273e20ae1e7bf.jpg', '413e37166a4d1c47896601dd0d0fd48d.jpg', '9ead2229ed5a1c9443b402548310b26c.jpg', '5f3e520cecd89a6fdc5961c7786f7e79.jpg', '90e75334c9ff20ffd2a1270744aad644.jpg', 'b9e5134b9df8d75d84e1481787573b20.jpg', 'b9e5134b9df8d75d84e1481787573b20.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `reglab`
--

CREATE TABLE `reglab` (
  `ID_REG` varchar(50) NOT NULL,
  `KTP` varchar(500) NOT NULL,
  `NPWP` varchar(50) NOT NULL,
  `GMAP` varchar(500) NOT NULL,
  `SP_PENANGGUNGJAWAB` varchar(500) NOT NULL,
  `SP_KESEDIAAN` varchar(500) NOT NULL,
  `DATA_BANGUNAN` varchar(500) NOT NULL,
  `DATA_PERALATAN` varchar(500) NOT NULL,
  `SR_DINKES` varchar(500) NOT NULL,
  `NIB` varchar(500) NOT NULL,
  `IMB` varchar(500) NOT NULL,
  `UKL_UPL` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regpend`
--

CREATE TABLE `regpend` (
  `ID_REG` varchar(20) NOT NULL,
  `AKTA_NOTARIS` varchar(500) NOT NULL,
  `IMB` varchar(500) NOT NULL,
  `SPPL` varchar(500) NOT NULL,
  `NIB` varchar(500) NOT NULL,
  `SR_DISPEN` varchar(500) NOT NULL,
  `IZIN_USAHA` varchar(500) NOT NULL,
  `IZIN_LOKASI` varchar(500) NOT NULL,
  `SLF` varchar(500) NOT NULL,
  `SKTU` varchar(500) NOT NULL,
  `PROPOSAL_DISPEN` varchar(500) NOT NULL,
  `SP_KOMITMEN` varchar(500) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `ID_REG` varchar(20) NOT NULL,
  `NO_SK` varchar(500) NOT NULL,
  `TGL_SK` date NOT NULL,
  `NIP_PETUGAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`ID_REG`, `NO_SK`, `TGL_SK`, `NIP_PETUGAS`) VALUES
('R11XLI', 'SK/KONS/202108/BJM/9574', '2021-08-04', '09876543221');

-- --------------------------------------------------------

--
-- Table structure for table `stbap`
--

CREATE TABLE `stbap` (
  `ID_REG` varchar(20) NOT NULL,
  `NO_SURAT` varchar(200) NOT NULL,
  `NIP_PETUGAS1` varchar(20) NOT NULL,
  `NIP_PETUGAS2` varchar(20) NOT NULL,
  `NAMA_PEMOHON` varchar(50) NOT NULL,
  `NAMA_IZIN` varchar(255) NOT NULL,
  `ALAMAT_IZIN` varchar(255) NOT NULL,
  `TGL_ST` date NOT NULL,
  `NO_BAP` varchar(255) NOT NULL,
  `TGL_BAP` date NOT NULL,
  `KETERANGAN_BAP` varchar(500) NOT NULL,
  `HASIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stbap`
--

INSERT INTO `stbap` (`ID_REG`, `NO_SURAT`, `NIP_PETUGAS1`, `NIP_PETUGAS2`, `NAMA_PEMOHON`, `NAMA_IZIN`, `ALAMAT_IZIN`, `TGL_ST`, `NO_BAP`, `TGL_BAP`, `KETERANGAN_BAP`, `HASIL`) VALUES
('R11XLI', 'ST/R11XLI/202108/BJM/2654', '09876543221', '09876543222', 'MUHAMMAD ALIEF HABSYI 3', 'MUHAMMAD ALIEF HABSYI 3', 'iuoo', '2021-08-11', 'BAP/R11XLI/202108/BJM/3108', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(25) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `JABATAN` varchar(255) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `LEVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `NAMA`, `PASSWORD`, `NIP`, `JABATAN`, `NO_TELP`, `LEVEL`) VALUES
('alif', 'MUHAMMAD ALIEF HABSYI', '202cb962ac59075b964b07152d234b70', '09876543221', 'Programmer', '087777444435', 'ADM'),
('habsyi', 'ALIEF HABSYI', '202cb962ac59075b964b07152d234b70', '09876543222', 'QA', '087777444435', 'ADM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `regkons`
--
ALTER TABLE `regkons`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `reglab`
--
ALTER TABLE `reglab`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `regpend`
--
ALTER TABLE `regpend`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `stbap`
--
ALTER TABLE `stbap`
  ADD PRIMARY KEY (`ID_REG`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
