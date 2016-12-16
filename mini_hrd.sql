-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 03:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(5) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `gaji_perhari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `gaji_perhari`) VALUES
(6, 'Digital Marketing', 40000),
(7, 'UI / UX Designer', 45000),
(8, 'Senior Programmer', 55000),
(9, 'Quality Assurance', 45000),
(10, 'Customer Service', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi_id` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `divisi_id`, `tgl_masuk`) VALUES
(1, 'Andi Sanyoto', 6, '2016-08-09'),
(2, 'Achmad Susilo', 6, '2016-03-02'),
(3, 'Rendi Noviandri Aryona', 7, '2016-07-28'),
(4, 'Yazmi Fauzi Rahmadzani', 7, '2016-10-05'),
(5, 'Basyir Nur Aryawan', 8, '2015-11-02'),
(6, 'Andika Nur Eko Setya', 8, '2016-01-19'),
(7, 'Riany Matofani', 9, '2015-08-05'),
(8, 'Rena Makhfirah', 10, '2016-08-03'),
(9, 'Fahmawati Azizah', 10, '2016-09-28'),
(10, 'Aulia Nadya Lia', 10, '2016-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisi_id` (`divisi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_divisi_id` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
