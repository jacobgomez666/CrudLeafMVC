-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactos`
--

CREATE TABLE `tbl_contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `primerapellido` varchar(100) NOT NULL,
  `segundoapellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contactos`
--

INSERT INTO `tbl_contactos` (`id`, `nombre`, `primerapellido`, `segundoapellido`, `correo`, `created_at`, `updated_at`) VALUES
(4, 'Jacob', 'gomez', 'hernandez', 'jacobo@gmail.com', '2023-04-22 07:40:51', '2023-05-02 06:55:35'),
(6, 'Yesica', 'Lopez', 'Lopez', 'yesy@gmail.com', '2023-04-27 10:40:18', '2023-05-02 06:03:17'),
(7, 'Celina', 'gomez', 'hernandez', 'celi@gmail.com', '2023-04-27 10:43:21', '2023-04-27 10:43:21'),
(8, 'Eduardo', 'Gomez', 'Hernandez', 'lalo@gmail.com', '2023-04-27 11:22:40', '2023-04-27 11:22:40'),
(10, 'Luz', 'gomez', 'hernandez', 'luz@gmail.com', '2023-04-29 10:22:22', '2023-04-29 10:22:22'),
(11, 'Yesica Editado', 'ramirez', 'Lopez', 'yesy@gmail.com', '2023-04-29 10:44:04', '2023-04-29 10:44:04'),
(12, 'Eduardo', 'Gomez', 'Hernandez', 'lalo@gmail.com', '2023-04-29 10:46:24', '2023-04-29 10:46:24'),
(14, 'Pascal', 'santiago', 'santiago', 'lalo@gmail.com', '2023-04-29 10:50:58', '2023-05-02 06:04:01'),
(15, 'ramiro', 'martinez', 'santiago', 'ramiro@gmail.com', '2023-05-02 05:48:23', '2023-05-02 06:03:37'),
(16, 'Rasamal', 'mango', 'cepillo', 'rasaco@rasaco.com', '2023-05-02 08:27:06', '2023-05-02 08:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
