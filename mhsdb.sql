-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 05:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `UID` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Message` text NOT NULL,
  `Active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`UID`, `Code`, `Date`, `Message`, `Active`) VALUES
(1, '5135909288', '0000-00-00', 'Hi', 0),
(2, '5135909289', '0000-00-00', 'Hello', 0),
(3, '5135909288', '0000-00-00', 'hi i am fine', 0),
(4, '5135909288', '0000-00-00', 'aalu khu', 0),
(5, '5135909288', '0000-00-00', 'no i am ok', 0),
(6, '5135909288', '0000-00-00', 'My name is khan', 0),
(7, '5135909288', '0000-00-00', 'can i call you', 0),
(8, '5135909288', '0000-00-00', 'Ok bro i am ok', 0),
(9, '5135909288', '0000-00-00', 'Can i help you', 0),
(10, '5135909288', '0000-00-00', 'please contact us', 0),
(11, '5135909288', '0000-00-00', 'k xa', 0),
(12, '7701791909', '0000-00-00', 'hi', 0),
(13, '5135909288', '0000-00-00', 'ok', 0),
(14, '5135909288', '0000-00-00', 'hi', 0),
(15, '5135909288', '0000-00-00', 'ok', 0),
(16, '5135909288', '0000-00-00', 'ok', 0),
(17, '5135909288', '0000-00-00', 'hi', 0),
(18, '4199211927', '0000-00-00', 'hi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `colab`
--

CREATE TABLE `colab` (
  `UID` int(11) NOT NULL,
  `User_code` varchar(255) NOT NULL,
  `Doctor_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colab`
--

INSERT INTO `colab` (`UID`, `User_code`, `Doctor_Code`) VALUES
(1, '5135909288', '1662478103');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `UID` int(11) NOT NULL,
  `User_code` varchar(255) NOT NULL,
  `Post_code` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`UID`, `User_code`, `Post_code`, `Comment`, `Status`) VALUES
(1, '5135909288', '7781152112', 'hi', 0),
(2, '5135909288', '7924697406', 'hi', 0),
(3, '5135909288', '7781152112', 'My name is khan', 0),
(4, '5135909288', '7924697406', 'My name is khan', 0),
(5, '5135909288', '7924697406', 'hi', 0),
(6, '5135909288', '7781152112', 'ok', 0),
(7, '5135909288', '7370726500', 'hi', 0),
(8, '5135909288', '9208311002', 'it is nice', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `UID` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`UID`, `Code`, `Date`, `Data`) VALUES
(1, '4199211927', '2024-06-13 10:46:56', 13),
(2, '5135909288', '2024-06-13 12:01:33', 25),
(3, '5135909288', '2024-06-13 12:03:21', 16),
(4, '4199211927', '2024-06-13 12:38:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doc_user`
--

CREATE TABLE `doc_user` (
  `UID` int(11) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Doc` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Acti` int(11) NOT NULL,
  `Action` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `UID` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `User_code` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Images` text NOT NULL,
  `Action` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`UID`, `Code`, `User_code`, `Content`, `Images`, `Action`) VALUES
(4, '9208311002', '5135909288', 'how is this image?', 'img-666abb2b7666c9.66166737.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Security` varchar(255) NOT NULL,
  `Pass_word` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Exp` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL,
  `Point` int(11) NOT NULL,
  `Mode` int(11) NOT NULL DEFAULT 0,
  `Status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `Code`, `Name`, `Email`, `Contact`, `Address`, `Security`, `Pass_word`, `Post`, `Exp`, `Details`, `Point`, `Mode`, `Status`) VALUES
(2, '5135909288', 'Mina Kumar', 'manjilkafle1@gmail.com', '98450121450', 'n gijg ij', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 0, 0, 0),
(3, '7701791909', 'Mina Kumar', 'mok@gmail.com', '98450121450', 'n gijg ij', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 0, 0, 0),
(4, '1662478103', 'Dhiraj Adhikari', 'admin@gmail.com', '9854012588', 'Itahari, Sunsari', 'f9f16d97c90d8c6f2cab37bb6d1f1992', 'doctor', 'MBBS', '10 Years', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint perspiciatis culpa aspernatur', 0, 1, 0),
(5, '4199211927', 'Kirsten Fischer', 'zefykonyh@mailinator.com', 'Occaecat sit quo in ', 'Rem nulla minim enim', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Pa$$w0rd!', '', '', '', 2147483647, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `colab`
--
ALTER TABLE `colab`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `doc_user`
--
ALTER TABLE `doc_user`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `colab`
--
ALTER TABLE `colab`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doc_user`
--
ALTER TABLE `doc_user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
