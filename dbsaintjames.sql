-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 05:04 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsaintjames`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE `baptism` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptism`
--

INSERT INTO `baptism` (`id`, `name`, `created_at`) VALUES
(1, 'ragie doromal', '2019-05-18 04:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parents` varchar(255) DEFAULT NULL,
  `sponsors` varchar(255) DEFAULT NULL,
  `minister` varchar(255) DEFAULT NULL,
  `encoder` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`id`, `date`, `name`, `parents`, `sponsors`, `minister`, `encoder`, `created_at`) VALUES
(2, '2019-05-18', 'Ragie Doromal', 'Anra Doromal', 'Maida Darina Tablero', 'Fr. Kieth', 'admin', '2019-05-18 02:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `minister` varchar(255) DEFAULT NULL,
  `dateofdeath` date DEFAULT NULL,
  `cemetery` varchar(255) DEFAULT NULL,
  `burial` date DEFAULT NULL,
  `celebrant` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `encoder` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `name`, `address`, `age`, `parent`, `minister`, `dateofdeath`, `cemetery`, `burial`, `celebrant`, `remarks`, `created_at`, `encoder`) VALUES
(1, 'Ragie Doromal', 'Prk.Sampaguita,Brgy. Alimango, Escalante City, Negros Occidental', 22, 'Maida Montero Tablero', 'Mass', '2019-05-17', 'Old Escalante Public Cemetery', '2019-05-24', 'Fr.Kieth', 'Old Age', '2019-05-17 12:49:33', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `groom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `bride` varchar(255) NOT NULL,
  `age1` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `mother1` varchar(255) NOT NULL,
  `father1` varchar(255) NOT NULL,
  `church` varchar(255) NOT NULL,
  `priest` varchar(255) NOT NULL,
  `nuptial_type` varchar(255) NOT NULL,
  `encoder` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriage`
--

INSERT INTO `marriage` (`id`, `date`, `date1`, `groom`, `age`, `address`, `mother`, `father`, `bride`, `age1`, `address1`, `mother1`, `father1`, `church`, `priest`, `nuptial_type`, `encoder`, `created_at`) VALUES
(15, '2019-03-01', '2019-03-02', 'Bryan Yul', '25', 'Sagay City', 'Angela Yul', 'Franco Yul', 'Ann Grande', '25', 'Sagay City', 'Layla De Lima', 'Balmond Rasta', 'Saint James Parish', 'Fr.  Philip P. Villanueva', 'Special', 'admin', '2019-05-17 10:43:39'),
(12, '2019-03-06', '2019-03-13', 'Philip P. Villanueva', '21', 'Escalante City', 'Gilda Villanueva', 'Felix Villanueva', 'Dearlie Marie Espinosa', '21', 'Sagay City', 'Esmeralda Gonzales', 'Bonggo Gonzales', 'Saint James Parish', 'Jhon Araez', '', 'admin', '2019-05-17 10:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptism`
--
ALTER TABLE `baptism`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptism`
--
ALTER TABLE `baptism`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
