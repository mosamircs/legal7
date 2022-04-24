-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2022 at 01:45 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_type` varchar(255) NOT NULL,
  `company_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`company_name`)),
  `company_address` varchar(255) DEFAULT NULL,
  `company_activity` varchar(255) DEFAULT NULL,
  `capital_value` int(11) NOT NULL,
  `capital_share` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_type`, `company_name`, `company_address`, `company_activity`, `capital_value`, `capital_share`, `user_id`) VALUES
(1, 'شركة شخص واحد ذات مسئولية محدودة', '[\"comp1\",\"comp1\"]', 'fhj', 'fhfj', 3, 2, 0),
(2, 'شركة شخص واحد ذات مسئولية محدودة', '[\"comp1\",\"comp1\"]', 'fhj', 'fhfj', 3, 2, 0),
(3, 'شركة ذات مسئولية محدودة', '[\"dsasdsda\",\"sdaadsad\"]', 'sadsad', 'sdsad', 5454, 5454, 11),
(4, 'شركة مساهمة مصري', '[\"Ab\",\"Ab\"]', 'Ghhh', 'Fghh', 1, 3, 0),
(5, 'شركة ذات مسئولية محدودة', '[\"safasf\",\"asfsf\"]', 'asfsf', 'fassfafs', 21, 2121, 17),
(6, 'شركة ذات مسئولية محدودة', '[\"safasf\",\"asfsf\"]', 'asfsf', 'fassfafs', 21, 2121, 17),
(7, 'شركة مساهمة مصري', '[\"comp1\",\"comp1\"]', 'jk', 'klkl', 4, 5, 0),
(8, 'شركة ذات مسئولية محدودة', '[\"Test Fist\",\"Test Second\"]', 'Test Company Address', 'Test Company Name', 1000, 500, 0),
(9, 'شركة شخص واحد ذات مسئولية محدودة', '[\"u0645u0627u0643u0628u0631\",\"u0645u0627u0643u0628u0631e\"]', 'ee', 'ee', 222, 22, 28),
(10, '', '[\"\",\"\"]', '', '', 0, 0, 0),
(11, '', '[\"\",\"\"]', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) NOT NULL,
  `manager_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `manager_nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `manager_personal_id` varchar(255) DEFAULT NULL,
  `perm1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `perm2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `perm3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `manager_type` varchar(255) DEFAULT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `manager_name`, `manager_nationality`, `manager_personal_id`, `perm1`, `perm2`, `perm3`, `manager_type`, `company_id`) VALUES
(1, 'yousef', 'ehgk', '', '', '', '', '', 1),
(2, 'yousef', 'ehgk', '', '', '', '', '', 2),
(3, 'ssdaddsa', 'adsadsa', '0download.3.jpeg', '1', '1', '1', '', 3),
(4, 'Esrs', 'Egypt ', 'Dark Night.jpg', '', '', '', 'ceo', 4),
(5, 'Ahmed', 'Egypt ', 'Dark Night.jpg', '', '', '', '', 4),
(6, 'Ahmed', 'Egypt ', 'Dark Night.jpg', '', '', '', '', 4),
(7, 'safsfsa', 'safasfafs', '0download.3.jpeg', '1', '1', '1', 'برجاء تحديد التصنيف', 5),
(8, 'dssds', 'dssd', 'download.jpeg', '1', '1', '1', 'برجاء تحديد التصنيف', 5),
(9, 'sfsafa', 'safafs', '', '1', '1', '1', 'برجاء تحديد التصنيف', 5),
(10, 'safsfsa', 'safasfafs', '0download.3.jpeg', '1', '1', '1', 'برجاء تحديد التصنيف', 6),
(11, 'dssds', 'dssd', 'download.jpeg', '1', '1', '1', 'برجاء تحديد التصنيف', 6),
(12, 'sfsafa', 'safafs', '', '1', '1', '1', 'برجاء تحديد التصنيف', 6),
(13, 'ahmed', 'egypt', 'harvest.png', '1', '', '', 'برجاء تحديد التصنيف', 7),
(14, 'aymen', 'egypt', 'harvest (2).png', '1', '', '', 'برجاء تحديد التصنيف', 7),
(15, 'Test MNG 1', 'Egyptian', 'linked-in.png', '1', '1', '1', 'برجاء تحديد التصنيف', 8),
(16, 'fhfhfh', 'مصري', '', '', '', '', '', 9),
(17, 'fhfhfh', 'مصري', '270615.jpg', '', '', '', '', 9),
(18, 'S', 'Gg', '', '1', '1', '', '', 10),
(19, 'S', 'Gg', 'Dark Night.jpg', '1', '1', '', '', 10),
(20, 'مصطفي سامي', 'مصري', '270615.jpg', '1', '1', '1', '', 0),
(21, 'مصطفي سامي', 'مصري', '270615.jpg', '1', '1', '1', '', 0),
(22, 'مصطفي سامي', 'rrr', 'Rinku (1).png', '1', '1', '1', '', 0),
(23, 'مصطفي سامي', 'rrr', 'Rinku (1).png', '1', '1', '1', '', 0),
(24, 'مصطفي سامي', 'مصري', 'Rinku (2).png', '1', '1', '1', 'ceo', 0),
(25, 'مصطفي سامي', 'مصري', '', '1', '1', '', 'ceo', 0),
(26, 'مصطفي سامي', 'مصري', 'Rinku (1).png', '1', '1', '1', 'ceo', 0),
(27, 'مصطفي سامي', 'مصري', '', '1', '1', '', 'ceo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shareholders`
--

CREATE TABLE `shareholders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shareholder_name` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `shareholder_nationality` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `shareholder_percenatage` int(10) DEFAULT NULL,
  `shareholder_personal_id` varchar(500) DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shareholders`
--

INSERT INTO `shareholders` (`id`, `shareholder_name`, `shareholder_nationality`, `shareholder_percenatage`, `shareholder_personal_id`, `company_id`) VALUES
(1, 'ssdaddsa', 'adsadsa', 5454, '0download.3.jpeg', 3),
(2, 'ssasc', 'assc', 4, '0download.3.jpeg', 3),
(3, 'Ahmed', 'Egypt ', 10, 'Dark Night.jpg', 4),
(4, 'Ahmed', 'Egypt ', 10, 'Dark Night.jpg', 4),
(5, 'Esrs', 'Egypt ', 10, 'Dark Night.jpg', 4),
(6, 'safsfsa', 'safasfafs', 51, '0download.3.jpeg', 5),
(7, 'dssds', 'dssd', 55, 'download.jpeg', 5),
(8, 'safsfsa', 'safasfafs', 51, '0download.3.jpeg', 6),
(9, 'dssds', 'dssd', 55, 'download.jpeg', 6),
(10, 'ahmed', 'egypt', 10, 'harvest.png', 7),
(11, 'aymen', 'egypt', 50, 'harvest (2).png', 7),
(12, 'yousef', 'egypt', 10, 'harvest.png', 7),
(13, 'Test MNG 1', 'Egyptian', 50, 'linked-in.png', 8),
(14, 'Test MNG 2', 'Egyptian', 50, 'P.png', 8),
(15, 'احمد مدحت', 'مصري', 20, '270615.jpg', 0),
(16, 'احمد مدحت', 'sdf', 100, 'Rinku (1).png', 0),
(17, 'احمد مدحت', 'erf', 20, 'Rinku (2).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `signdate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `date`, `signdate`) VALUES
(1, '', '', '', '2022-04-09 20:09:21', NULL),
(2, 'abeer123', 'abeer123@123.com', '', '2022-04-09 20:09:38', NULL),
(3, 'abeer123', 'abeer123@omar.com', '', '2022-04-09 20:09:45', NULL),
(6, '', 'abeer.omar@gmail.com', '+2001098841727', '2022-04-09 20:44:01', NULL),
(11, 'hello world', 'hello@world.com', '1212121212121', '2022-04-09 23:07:37', 'April 20, 2022'),
(14, 'RBANNIS', 'rimmahmoud17@gmail.com', '+20 087654321', '2022-04-10 13:38:48', NULL),
(17, 'samora', 'samora@samora.com', '+20 11486305955', '2022-04-10 13:50:13', 'April 21, 2022'),
(20, 'mostafa.samy', 'msamy@macber-eg.com', '', '2022-04-10 13:57:06', NULL),
(25, 'Man', 'moh@gmail.com', '01094494460', '2022-04-10 15:10:15', NULL),
(26, 'Moh', 'mjo@gmail.com', '12345678.', '2022-04-10 15:11:10', NULL),
(28, 'amedhat', 'Medhat.oc@gmail.com', '001000600109', '2022-04-11 09:00:57', ''),
(29, 'Levari law', 'islam@macber-eg.com', '010101010101', '2022-04-11 11:47:58', NULL),
(32, 'abeerOmar', 'gsh', '', '2022-04-11 13:23:28', NULL),
(34, 'abeerOmar', '123@1uhx', '', '2022-04-11 13:23:38', NULL),
(36, 'abeerOmar', '123@1uhx.com', '', '2022-04-11 13:23:42', NULL),
(38, 'abeerOmar', 'abeer.omar504@gmail.com', '', '2022-04-11 13:23:52', NULL),
(48, 'ahmed', 'abeer.27omar@gmail.com', '+201098841727', '2022-04-17 13:30:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shareholders`
--
ALTER TABLE `shareholders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `shareholders`
--
ALTER TABLE `shareholders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
