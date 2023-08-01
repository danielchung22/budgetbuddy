-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 10:01 AM
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
-- Database: `budgetbuddy`
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
(1005, '2023-05-01', 84.00, 'Cinema', 'Entertainment'),
(1006, '2023-05-01', 100.00, 'hello', 'Healthcare'),
(1007, '2023-05-01', 139.00, 'phone', 'Bills'),
(1008, '2023-05-01', 600.00, 'may Rent', 'Rent'),
(1009, '2023-05-02', 32.00, '', 'Food'),
(1010, '2023-05-15', 62.00, '', 'Food'),
(1011, '2023-05-15', 104.00, 'dentist', 'Healthcare'),
(1012, '2023-05-15', 140.00, 'water', 'Bills'),
(1013, '2023-05-17', 67.00, '', 'Food'),
(1014, '2023-05-24', 65.00, '', 'Food'),
(1015, '2023-05-30', 76.00, 'Go Kart', 'Entertainment'),
(1016, '2023-05-30', 123.00, '', 'Food'),
(1017, '2023-06-01', 11.00, '', 'Food'),
(1018, '2023-06-01', 47.00, 'grab', 'Transportation'),
(1019, '2023-06-01', 88.00, 'clinic', 'Healthcare'),
(1020, '2023-06-01', 135.00, 'phone', 'Bills'),
(1021, '2023-06-01', 147.00, 'electricity', 'Bills'),
(1022, '2023-06-01', 600.00, 'june Rent', 'Rent'),
(1023, '2023-06-01', 147.00, 'electricity', 'Bills'),
(1024, '2023-06-02', 13.00, '', 'Food'),
(1025, '2023-06-03', 15.00, '', 'Food'),
(1026, '2023-06-03', 68.00, 'Go Kart', 'Entertainment'),
(1027, '2023-06-04', 17.00, '', 'Food'),
(1028, '2023-06-05', 22.00, '', 'Food'),
(1029, '2023-06-06', 25.00, '', 'Food'),
(1030, '2023-06-06', 121.00, '', 'Food'),
(1031, '2023-06-06', 125.00, 'shopee', 'Others'),
(1032, '2023-06-06', 130.00, 'lazada', 'Others'),
(1033, '2023-06-08', 31.00, '', 'Food'),
(1034, '2023-06-12', 72.00, 'Cinema', 'Entertainment'),
(1035, '2023-06-15', 58.00, 'grab to airport', 'Transportation'),
(1036, '2023-06-15', 74.00, 'Out with friends', 'Entertainment'),
(1037, '2023-06-15', 89.00, 'clinic ', 'Healthcare'),
(1038, '2023-06-15', 144.00, 'water', 'Bills'),
(1039, '2023-06-15', 144.00, 'electricity', 'Bills'),
(1040, '2023-06-19', 55.00, 'grab from airport', 'Transportation'),
(1041, '2023-06-25', 66.00, '', 'Food'),
(1042, '2023-07-01', 25.00, '', 'Food'),
(1043, '2023-07-01', 26.00, '', 'Food'),
(1044, '2023-07-01', 47.00, 'grab', 'Transportation'),
(1045, '2023-07-01', 94.00, 'pharmacy ', 'Healthcare'),
(1046, '2023-07-01', 124.00, '', 'Food'),
(1047, '2023-07-01', 137.00, 'phone', 'Bills'),
(1048, '2023-07-01', 600.00, 'july Rent', 'Rent'),
(1049, '2023-07-02', 26.00, '', 'Food'),
(1050, '2023-07-06', 59.00, '', 'Food'),
(1051, '2023-07-07', 71.00, 'Out with friends', 'Entertainment'),
(1052, '2023-07-07', 119.00, '', 'Food'),
(1053, '2023-07-07', 127.00, 'shopee', 'Others'),
(1054, '2023-07-07', 132.00, 'lazada', 'Others'),
(1055, '2023-07-15', 99.00, 'dentist', 'Healthcare'),
(1056, '2023-07-15', 145.00, 'water', 'Bills'),
(1057, '2023-07-15', 145.00, 'electricity', 'Bills'),
(1058, '2023-07-20', 118.00, 'clinic', 'Healthcare'),
(1293, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1294, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1295, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1331, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1332, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1333, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1334, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1335, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1336, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1337, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1338, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1339, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1340, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1341, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1342, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1343, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1344, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1345, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1346, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1347, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1348, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1349, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1350, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1351, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1352, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1353, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1354, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1355, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1356, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1357, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1358, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1359, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1360, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1361, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1362, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1363, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1364, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1365, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1366, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1368, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1369, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1370, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1371, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1372, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1373, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1374, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1375, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1376, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1377, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1378, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1379, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1380, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1381, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1382, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1383, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1384, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1385, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1386, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1387, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1388, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1389, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1390, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1391, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1392, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1393, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1394, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1395, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1396, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1397, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1398, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1399, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1400, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1401, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1402, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1403, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1405, '2023-07-31', 123.00, '123', 'Food'),
(1407, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1408, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1409, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1410, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1411, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1412, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1413, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1414, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1415, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1416, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1417, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1418, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1419, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1420, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1421, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1422, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1423, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1424, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1425, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1426, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1427, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1428, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1429, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1430, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1431, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1432, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1433, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1434, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1435, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1436, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1437, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1438, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1439, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1440, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1441, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1442, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1444, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1445, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1446, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1447, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1448, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1449, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1450, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1451, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1452, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1453, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1454, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1455, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1456, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1457, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1458, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1459, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1460, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1461, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1462, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1463, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1464, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1465, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1466, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1467, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1468, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1469, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1470, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1471, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1472, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1473, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1474, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1475, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1476, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1477, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1478, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1479, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1480, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1481, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1482, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1483, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1484, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1485, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1486, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1487, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1488, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1489, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1490, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1491, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1492, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1493, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1494, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1495, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1496, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1497, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1498, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1499, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1500, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1501, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1502, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1503, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1504, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1505, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1506, '2023-01-03', 26.00, 'Grocery shopping', 'Food'),
(1507, '2023-01-06', 13.00, 'Painkillers', 'Healthcare'),
(1508, '2023-01-10', 75.00, 'Internet bill', 'Bills'),
(1509, '2023-01-15', 850.00, 'Monthly rent', 'Rent'),
(1510, '2023-01-19', 30.00, 'Movie tickets', 'Entertainment'),
(1511, '2023-01-21', 16.00, 'Bus fare', 'Transportation'),
(1512, '2023-01-25', 50.00, 'Miscellaneous', 'Others'),
(1513, '2023-01-28', 120.00, 'Restaurant dinner', 'Food'),
(1514, '2023-02-01', 15.00, 'First aid supplies', 'Healthcare'),
(1515, '2023-02-05', 95.00, 'Electricity bill', 'Bills'),
(1516, '2023-02-08', 800.00, 'Monthly rent', 'Rent'),
(1517, '2023-02-12', 20.00, 'Video game purchase', 'Entertainment'),
(1518, '2023-02-17', 26.00, 'Grocery shopping', 'Food'),
(1519, '2023-02-20', 10.00, 'Subway fare', 'Transportation'),
(1520, '2023-02-24', 50.00, 'Miscellaneous', 'Others'),
(1521, '2023-02-27', 36.00, 'Pizza delivery', 'Food'),
(1522, '2023-03-04', 11.00, 'Cold medicine', 'Healthcare'),
(1523, '2023-03-08', 75.00, 'Water bill', 'Bills'),
(1524, '2023-03-12', 850.00, 'Monthly rent', 'Rent'),
(1525, '2023-03-16', 15.00, 'Concert tickets', 'Entertainment'),
(1526, '2023-03-20', 18.00, 'Taxi ride', 'Transportation'),
(1527, '2023-03-23', 40.00, 'Miscellaneous', 'Others'),
(1528, '2023-03-28', 31.00, 'Restaurant lunch', 'Food'),
(1529, '2023-04-02', 9.00, 'Band-aids', 'Healthcare'),
(1530, '2023-04-06', 90.00, 'Gas bill', 'Bills'),
(1531, '2023-04-09', 800.00, 'Monthly rent', 'Rent'),
(1532, '2023-04-14', 12.00, 'Movie rental', 'Entertainment'),
(1533, '2023-04-18', 23.00, 'Train ticket', 'Transportation'),
(1534, '2023-04-21', 60.00, 'Miscellaneous', 'Others'),
(1535, '2023-04-26', 29.00, 'Grocery shopping', 'Food'),
(1536, '2023-04-29', 10.00, 'Vitamins', 'Healthcare'),
(1537, '2023-08-01', 2000.00, 'Rent for August', 'Rent'),
(1538, '2023-08-01', 10000.00, 'Rent for August', 'Rent'),
(1539, '2023-08-01', 12.00, 'chicken rice', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'demo', 'demo@testing.com', '$2y$10$X0KsIDYx3/TmUyVn8QNgauvprWup5iqWxWxv3jVt5Bju7KPJEtZrm', 1),
(2, 'Els', '123@1.com', '$2y$10$8J64nE18c.Jj1nt8M7Fx6.80CyibyusyvjgDlMQcLDRO32eVv7EEy', NULL),
(3, 'els liew', 'els@123.com', '$2y$10$4oK2NcjI1GcECpg6GFm1m.xjIvdnMc57.3oHe2mqWFArIbJ2foFoS', NULL),
(4, 'Ibrahim Handsome', 'Ibrahim@hello.com', '$2y$10$FI87ZJXWuYyPAB0xgo2JZeuAz/gYvzv6VuKyAxa9wn2uctQR7EqZC', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense record`
--
ALTER TABLE `expense record`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `PRIMARY_KEY` (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense record`
--
ALTER TABLE `expense record`
  MODIFY `transaction_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1540;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
