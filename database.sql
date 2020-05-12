-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 09:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdirektori`
--
CREATE DATABASE `dbdirektori` ;
USE `dbdirektori`;
-- --------------------------------------------------------

--
-- Table structure for table `tblpelanggan`
--

CREATE TABLE IF NOT EXISTS `tblpelanggan` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpelanggan`
--

INSERT INTO `tblpelanggan` (`id`, `username`, `password`, `name`) VALUES
(1, 'ahmad', '1234', 'Muhammad Ahmad'),
(2, 'abu', '1234', 'Muhammad Abu');

-- --------------------------------------------------------

--
-- Table structure for table `tblpembekal`
--

CREATE TABLE IF NOT EXISTS `tblpembekal` (
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpembekal`
--

INSERT INTO `tblpembekal` (`name`, `address`, `tel`, `id`) VALUES
('siti', 'segamat', '0723456', 1),
('zaki', 'klang', '03987567', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpembekal`
--
ALTER TABLE `tblpembekal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpelanggan`
--
ALTER TABLE `tblpelanggan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpembekal`
--
ALTER TABLE `tblpembekal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
