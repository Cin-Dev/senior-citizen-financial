-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 05:58 AM
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
-- Database: `responsiveform3`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `mname`, `lname`, `gender`, `date_of_birth`, `address`, `password`, `cpassword`) VALUES
(1, 'ariel', 'p', 'abelgas', 'male', '2000-02-02', 'guadalupe', '123', '123'),
(45, 'asdsdsdsdsd', 'dsd', '', 'Select', '0000-00-00', '', '', ''),
(46, 'Cindy Mae', 'Labra', 'Abelgas', 'Female', '2002-04-04', 'Brgy. Duljo Fatima', 'CINDY123', 'CINDY123'),
(47, 'Cindy Mae', 'Labra', 'Abelgas', 'Female', '2002-04-04', 'Brgy. Duljo Fatima', 'CINDY123', 'CINDY123'),
(48, 'Cindy Mae', 'Labra', 'Abelgas', 'Female', '2002-04-04', 'Brgy. Duljo Fatima', 'CINDY123', 'CINDY123'),
(49, 'Cindy Mae', 'Labra', 'Abelgas', 'Female', '2002-04-04', 'Brgy. Duljo Fatima', 'CINDY123', 'CINDY123'),
(50, 'Cindy Mae', 'Labra', 'Abelgas', 'Female', '2002-04-04', 'Brgy. Duljo Fatima', 'CINDY123', 'CINDY123'),
(51, 'Alstel', 'Gwapo', 'Esctoce', 'Male', '2002-04-04', 'Brgy. Duljo Fatima', '123', '123'),
(52, 'Princess', 'Allyza', 'Indiola', 'Female', '1998-08-24', 'Pardo', 'allyza', 'allyza'),
(53, 'sean john', 'enolba', 'lubon', 'Male', '1996-06-29', 'Brgy. Duljo Fatima Cebu City', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_of_death` date NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
