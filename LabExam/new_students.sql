-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 07:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `FirstName` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `LastName` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Gender` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Mobile` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `DOB` date NOT NULL,
  `HSC_Result` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `SSC_Result` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `University_Course` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `University_Year` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `University_Semester` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`FirstName`, `LastName`, `Email`, `Gender`, `Mobile`, `DOB`, `HSC_Result`, `SSC_Result`, `University_Course`, `University_Year`, `University_Semester`) VALUES
('', '', '', '', '', '0000-00-00', '', '', '', '', ''),
('Alvi', 'Hasan', 'alvi@gmail.com', 'Male', '019', '2021-10-19', '3', '4', 'CSSE', '2018', 'Spring');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
