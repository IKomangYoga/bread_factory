-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 10:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE `tbbarang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`id_barang`, `nama`, `harga`) VALUES
(1, 'the hell', 12000),
(2, 'the hell', 12000),
(3, 'the hell', 12000),
(4, 'the hell', 12000),
(5, 'thing1', 17000),
(6, 'thing2', 20000),
(7, 'nama', 0),
(8, 'dwkcbsij', 18000),
(9, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailjual`
--

CREATE TABLE `tbdetailjual` (
  `no_nota` int(8) NOT NULL,
  `id_barang` int(8) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdetailjual`
--

INSERT INTO `tbdetailjual` (`no_nota`, `id_barang`, `jumlah`) VALUES
(1, 1, 13),
(2, 4, 42),
(2, 5, 24),
(3, 1, 17),
(3, 4, 17),
(12, 1, 67),
(15, 8, 12),
(19, 4, 87),
(28, 5, 56),
(30, 5, 56),
(50, 7, 60),
(110, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbjual`
--

CREATE TABLE `tbjual` (
  `no_nota` int(8) NOT NULL,
  `tgl_nota` date NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbjual`
--

INSERT INTO `tbjual` (`no_nota`, `tgl_nota`, `nama_pelanggan`) VALUES
(1, '2024-07-10', '121'),
(2, '2024-07-10', 'asdfdsa'),
(3, '2024-07-21', 'cxvbcx'),
(12, '2024-07-09', '5'),
(13, '2024-07-09', '999'),
(14, '2024-07-09', 'qwdfgds'),
(15, '2024-07-09', 'asdfg'),
(16, '2024-07-09', 'asdfg'),
(17, '2024-07-09', 'cdvbvnb'),
(18, '2024-07-09', 'zcvfgbhn'),
(19, '2024-07-09', ''),
(20, '2024-07-09', 'adsfgdhg'),
(21, '2024-07-09', 'adfsnhgmjh'),
(22, '2024-07-09', 'fdhgnjh'),
(23, '2024-07-09', 'sdfg'),
(24, '2024-07-09', 'esfrght'),
(25, '2024-07-09', 'adsfsrgt'),
(26, '2024-07-09', 'csvfdgb'),
(27, '2024-07-09', 'fegrthgtf'),
(28, '2024-07-09', 'adfsghgfvds'),
(29, '2024-07-09', 'dfbghjgf'),
(30, '2024-07-09', 'fgdfhfd'),
(31, '2024-07-10', 'svdfgds'),
(32, '2024-07-10', 'asdvcsdv'),
(33, '2024-07-10', 'sdfgh'),
(34, '2024-07-10', 'fgbdfcvsd'),
(35, '2024-07-10', 'svfnhgds'),
(36, '2024-07-10', 'dvdsfvdf'),
(37, '2024-07-10', 'sdsdfvdfv'),
(38, '2024-07-10', 'svdfvdfv'),
(39, '2024-07-10', 'ascsdcs'),
(40, '2024-07-10', 'dfbebedrvedr'),
(41, '2024-07-10', 'advsdvsdv'),
(42, '2024-07-10', 'xvxcvxcvx'),
(43, '2024-07-10', 'sdvsdvsdv'),
(44, '2024-07-10', 'sdvdsfv'),
(45, '2024-07-10', 'adssdc'),
(46, '2024-07-10', 'xvdfvdfv'),
(47, '2024-07-10', 'xcsdcsdcsdcs'),
(48, '2024-07-10', 'tfyvghbuknjhuvgycf'),
(49, '2024-07-10', 'jgvcjshdvcj'),
(50, '2024-07-10', 'hsdbvcjshdbc'),
(51, '2024-07-10', 'kadjcksd'),
(52, '2024-07-10', 'kadjvksd '),
(53, '2024-07-10', 'mcn bsdnb'),
(54, '2024-07-10', 'siuedgfcise'),
(55, '2024-07-10', 'asicbjhebcj'),
(56, '2024-07-10', 'hjdbvcjdsh'),
(57, '2024-07-10', 'sjdbckhjb'),
(58, '2024-07-10', 'cfghvbjkn'),
(59, '2024-07-10', 'fvyghbunj'),
(60, '2024-07-10', 'ubcuhsbcu'),
(61, '2024-07-10', 'fcvghbjnk'),
(62, '2024-07-10', 'sudhcvb'),
(63, '2024-07-10', 'kjdscnks'),
(64, '2024-07-10', 'fvghbnj'),
(65, '2024-07-10', 'fdcgvhbnjk'),
(66, '2024-07-10', 'dcfhjnk'),
(67, '2024-07-10', 'yfvghbjknml'),
(68, '2024-07-10', 'yfvghbjknml'),
(69, '2024-07-10', 'drcftvhgbjn'),
(70, '2024-07-10', 'dfghvbjn'),
(71, '2024-07-10', 'redtvfygbuhnij'),
(72, '2024-07-10', 'fghbjnk'),
(73, '2024-07-10', 'fhgbjkn'),
(74, '2024-07-10', 'cdftvygbuhnij'),
(75, '2024-07-10', 'rxvgyhbu'),
(76, '2024-07-10', 'dcfvghbnj'),
(77, '2024-07-10', 'fvgyhbjkn'),
(78, '2024-07-10', 'cfhvgbjknml'),
(79, '2024-07-10', 'dfchbnj'),
(80, '2024-07-10', 'xdcfhbj'),
(81, '2024-07-10', 'vhb nm,'),
(82, '2024-07-10', 'xcfhbjn'),
(83, '2024-07-10', 'dcfvghbjn'),
(84, '2024-07-10', 'hugcf'),
(85, '2024-07-10', 'fdhbjhvjb'),
(86, '2024-07-10', 'dfxcghvbjnk'),
(87, '2024-07-10', 'ctfhvgbj'),
(88, '2024-07-10', 'fxdhbjkn'),
(89, '2024-07-10', 'tchbjnk'),
(90, '2024-07-10', 'ctvgyhbjkn'),
(91, '2024-07-10', 'dtcfvhgbjn'),
(92, '2024-07-10', 'sfxdhbjkn'),
(93, '2024-07-10', 'fdchbjknhjgf'),
(94, '2024-07-10', 'rsxdcfhvgbj'),
(95, '2024-07-10', 'ewardtfyguhiygtf'),
(96, '2024-07-10', 'joihuyftt'),
(97, '2024-07-10', 'cfvghbjknhjvg'),
(98, '2024-07-10', 'jiohbvgbjkkh'),
(99, '2024-07-10', 'dfcghvbj'),
(100, '2024-07-10', 'njkhgcfhbjkn'),
(101, '2024-07-10', 'g hvgbjknnhjvg'),
(102, '2024-07-10', 'nbm ,hvgf'),
(103, '2024-07-10', 'f vghbj'),
(104, '2024-07-10', 'ojhiugyfcgdhjk'),
(105, '2024-07-10', 'joihugyftftug'),
(106, '2024-07-10', 'kjnhbvgfch'),
(107, '2024-07-10', 'kjhgyf'),
(108, '2024-07-10', 'zzzzzzzzz'),
(109, '2024-07-10', 'zazazazazazazazaz'),
(110, '2024-07-10', 'zzaaaaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbdetailjual`
--
ALTER TABLE `tbdetailjual`
  ADD PRIMARY KEY (`no_nota`,`id_barang`),
  ADD KEY `no_nota` (`no_nota`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tbjual`
--
ALTER TABLE `tbjual`
  ADD PRIMARY KEY (`no_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbarang`
--
ALTER TABLE `tbbarang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbjual`
--
ALTER TABLE `tbjual`
  MODIFY `no_nota` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbdetailjual`
--
ALTER TABLE `tbdetailjual`
  ADD CONSTRAINT `tbdetailjual_ibfk_1` FOREIGN KEY (`no_nota`) REFERENCES `tbjual` (`no_nota`),
  ADD CONSTRAINT `tbdetailjual_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tbbarang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
