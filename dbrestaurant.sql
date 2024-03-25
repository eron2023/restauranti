-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 11:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrestaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tema` tinytext NOT NULL,
  `mesazhi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Titulli` tinytext NOT NULL,
  `Img_Link` tinytext NOT NULL,
  `Description` mediumtext NOT NULL,
  `Kategoria` varchar(25) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Titulli`, `Img_Link`, `Description`, `Kategoria`, `UserID`) VALUES
(3, 'Flia', 'Foto/flia.jpg', 'Menu tradicionale shqiptare e shijshme dhe e lëngshme e bërë me shum dashuri nga kuzhinieret tanë.', 'Tradicionale', 13),
(4, 'Hamburger', 'Foto/hamburgeri.jpg', 'Menuja jonë e gjerë mundëson që të ketë jo vetëm menu tradicionale e moderne por edhe Fast Food që në kohët e sotme po përdoret mjaft shum.', 'Fast Food', 13),
(5, 'Pica', 'Foto/picaa.jpg', 'Pica të shijshme me recetë italiane e unike, të pregaditura me salcë domateje të freskët e me djath mozarella.', 'Italiane', 13),
(6, 'Spaghetti', 'Foto/spaghetti.jpg', 'Pasta të shijshme me recetë italiane e unike, të servirura me salcë domateje të freskët e me djath mozarella.', 'Italiane', 13);

-- --------------------------------------------------------

--
-- Table structure for table `rezervimi`
--

CREATE TABLE `rezervimi` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Koha` time NOT NULL,
  `Numri_Personave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervimi`
--

INSERT INTO `rezervimi` (`ID`, `UserID`, `Data`, `Koha`, `Numri_Personave`) VALUES
(7, 13, '2024-03-26', '23:54:00', 3),
(8, 13, '2024-03-26', '23:54:00', 3),
(9, 14, '2024-03-26', '23:58:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `surname` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `surname`, `email`, `password`, `IsAdmin`) VALUES
(13, 'Eroni', 'Dauti', 'ed@gmail.com', '', 1),
(14, 'er', 'dt', 'er2@gmail.com', 'ed123123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rezervimi`
--
ALTER TABLE `rezervimi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rezervimi`
--
ALTER TABLE `rezervimi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
