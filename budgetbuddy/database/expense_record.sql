-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 12:34 PM
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
-- Database: `squarewo_sunway`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense record`
--

CREATE TABLE `expense record` (
  `transaction_id` int(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` decimal(10,2) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense record`
--

INSERT INTO `expense record` (`transaction_id`, `date`, `amount`, `description`, `category`) VALUES
(1004, '2023-05-01', 37, 'grab ', 'Transportation'),
(1005, '2023-05-01', 84, 'Cinema', 'Entertainment'),
(1006, '2023-05-01', 100, 'hello', 'Healthcare'),
(1007, '2023-05-01', 139, 'phone', 'Bills'),
(1008, '2023-05-01', 600, 'may Rent', 'Rent'),
(1009, '2023-05-02', 32, '', 'Food'),
(1010, '2023-05-15', 62, '', 'Food'),
(1011, '2023-05-15', 104, 'dentist', 'Healthcare'),
(1012, '2023-05-15', 140, 'water', 'Bills'),
(1013, '2023-05-17', 67, '', 'Food'),
(1014, '2023-05-24', 65, '', 'Food'),
(1015, '2023-05-30', 76, 'Go Kart', 'Entertainment'),
(1016, '2023-05-30', 123, '', 'Food'),
(1017, '2023-06-01', 11, '', 'Food'),
(1018, '2023-06-01', 47, 'grab', 'Transportation'),
(1019, '2023-06-01', 88, 'clinic', 'Healthcare'),
(1020, '2023-06-01', 135, 'phone', 'Bills'),
(1021, '2023-06-01', 147, 'electricity', 'Bills'),
(1022, '2023-06-01', 600, 'june Rent', 'Rent'),
(1023, '2023-06-01', 147, 'electricity', 'Bills'),
(1024, '2023-06-02', 13, '', 'Food'),
(1025, '2023-06-03', 15, '', 'Food'),
(1026, '2023-06-03', 68, 'Go Kart', 'Entertainment'),
(1027, '2023-06-04', 17, '', 'Food'),
(1028, '2023-06-05', 22, '', 'Food'),
(1029, '2023-06-06', 25, '', 'Food'),
(1030, '2023-06-06', 121, '', 'Food'),
(1031, '2023-06-06', 125, 'shopee', 'others'),
(1032, '2023-06-06', 130, 'lazada', 'others'),
(1033, '2023-06-08', 31, '', 'Food'),
(1034, '2023-06-12', 72, 'Cinema', 'Entertainment'),
(1035, '2023-06-15', 58, 'grab to airport', 'Transportation'),
(1036, '2023-06-15', 74, 'Out with friends', 'Entertainment'),
(1037, '2023-06-15', 89, 'clinic ', 'Healthcare'),
(1038, '2023-06-15', 144, 'water', 'Bills'),
(1039, '2023-06-15', 144, 'electricity', 'Bills'),
(1040, '2023-06-19', 55, 'grab from airport', 'Transportation'),
(1041, '2023-06-25', 66, '', 'Food'),
(1042, '2023-07-01', 25, '', 'Food'),
(1043, '2023-07-01', 26, '', 'Food'),
(1044, '2023-07-01', 47, 'grab', 'Transportation'),
(1045, '2023-07-01', 94, 'pharmacy ', 'Healthcare'),
(1046, '2023-07-01', 124, '', 'Food'),
(1047, '2023-07-01', 137, 'phone', 'Bills'),
(1048, '2023-07-01', 600, 'july Rent', 'Rent'),
(1049, '2023-07-02', 26, '', 'Food'),
(1050, '2023-07-06', 59, '', 'Food'),
(1051, '2023-07-07', 71, 'Out with friends', 'Entertainment'),
(1052, '2023-07-07', 119, '', 'Food'),
(1053, '2023-07-07', 127, 'shopee', 'others'),
(1054, '2023-07-07', 132, 'lazada', 'others'),
(1055, '2023-07-15', 99, 'dentist', 'Healthcare'),
(1056, '2023-07-15', 145, 'water', 'Bills'),
(1057, '2023-07-15', 145, 'electricity', 'Bills'),
(1058, '2023-07-20', 118, 'clinic', 'Healthcare'),
(1293, '2023-01-03', 26, 'Grocery shopping', 'Food'),
(1294, '2023-01-06', 13, 'Painkillers', 'Healthcare'),
(1295, '2023-01-10', 75, 'Internet bill', 'Bills');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense record`
--
ALTER TABLE `expense record`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense record`
--
ALTER TABLE `expense record`
  MODIFY `transaction_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1300;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
