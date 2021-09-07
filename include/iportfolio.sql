-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 06:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `langage` varchar(255) NOT NULL,
  `data_base` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `img_details` varchar(1000) NOT NULL,
  `img_details1` varchar(1000) NOT NULL,
  `img_details2` varchar(1000) NOT NULL,
  `img_details3` varchar(1000) NOT NULL,
  `img_details4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `category`, `project`, `langage`, `data_base`, `descr`, `img_details`, `img_details1`, `img_details2`, `img_details3`, `img_details4`) VALUES
(27, 'desktop', 'gastion des stok', 'windev', 'hfsql', 'gastion des stok windev', 'sss.jpg', 'ss.png', 'OGs.png', 'h.png', 'y.png'),
(30, 'app', 'DDD', 'java', ' DDDD', 'home about', 'OGpexels-aleksandar-pasaric-325185.jpg', 'OGpexels-cátia-matos-1072179.jpg', 'OGpexels-evie-shaffer-4004374.jpg', 'OGpexels-katerina-holmes-5905443.jpg', 'OGpexels-pixabay-264547.jpg'),
(31, 'web', 'webdive', 'html & css', 'open', 'lest go ', 'OGportfolio-1.jpg', 'OGportfolio-2.jpg', 'OGportfolio-3.jpg', 'OGportfolio-4.jpg', 'OGportfolio-5.jpg'),
(32, 'web', 'webdz', 'javascript', ' mydata', ' X<**>X', 'OGportfolio-8.jpg', 'OGportfolio-9.jpg', 'OGportfolio-details-1.jpg', 'OGportfolio-details-2.jpg', 'OGportfolio-details-3.jpg'),
(33, 'app', 'application', 'c++', ' base app', 'back ground', 'OG5238994.jpg', 'OGgradient_4.jpg', 'OGpexels-kelson-downes-1149137.jpg', 'OGpexels-stephan-seeber-1668246.jpg', 'OGsignin-image.jpg'),
(34, 'desktop', 'skytop', 'php', ' topbase', 'skytope frist', 'OG5773353.jpg', 'OGgradient_2.jpg', 'OGhero-bg.jpg', 'OGprofile-img.jpg', 'OGsignup-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `idd` int(11) NOT NULL,
  `img_profile` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `face` varchar(255) NOT NULL,
  `inst` varchar(255) NOT NULL,
  `twit` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`idd`, `img_profile`, `bg`, `name`, `face`, `inst`, `twit`, `linkedin`, `skype`) VALUES
(1, 'profile.jpg', 'bg.jpg', 'saad haddad', 'Face', 'Instagram', 'Twitter', 'Linkedin', 'Skype');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'saad', 'saad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
