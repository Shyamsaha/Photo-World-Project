-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 05:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarproshno`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin'),
(2, 'sam', 's@s.com', 'sam'),
(3, 's', 's@sh.com', '123'),
(4, 'j', 'j@j.com', '123'),
(5, 'jojo', 'jojo@j.com', 'jojo');

-- --------------------------------------------------------

--
-- Table structure for table `answeradmin`
--

CREATE TABLE `answeradmin` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 13, 1, 'hi', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 6, 1, 'j', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 6, 1, 'hj', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 8, 1, '<p>vhgh,hu</p>', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, 8, 1, '<p>hi</p>\r\n<p>&nbsp;</p>', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, 8, 1, '<p>xfb</p>', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, 20, 1, 'okey', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `farecost`
--

CREATE TABLE `farecost` (
  `id` int(11) NOT NULL,
  `cfrom` varchar(255) NOT NULL,
  `cto` varchar(255) NOT NULL,
  `ACcost` varchar(255) NOT NULL,
  `NonAccost` varchar(255) NOT NULL,
  `air` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farecost`
--

INSERT INTO `farecost` (`id`, `cfrom`, `cto`, `ACcost`, `NonAccost`, `air`) VALUES
(9, '1', '2', '2000', '800', '5200'),
(15, '2', '1', '2000', '800', '5200'),
(16, '1', '3', '500', '300', 'none'),
(17, '1', '4', '700', '400', 'none'),
(18, '2', '3', '850', '400', '2000'),
(19, '2', '4', '2000', '1500', '3000'),
(20, '3', '1', '600', '300', '1000'),
(21, '3', '2', '400', '200', '1000'),
(22, '3', '4', '550', '250', '3000'),
(23, '4', '1', '600', '400', '2000'),
(24, '4', '2', '2050', '1500', '7000'),
(25, '4', '3', '660', '440', '1234'),
(27, '1', '1', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `farename`
--

CREATE TABLE `farename` (
  `id` int(11) NOT NULL,
  `disname` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farename`
--

INSERT INTO `farename` (`id`, `disname`, `Title`, `details`) VALUES
(16, 'Dhaka', 'Ahsan Manzil', 'Ahsan Manzil is a beautiful pink palace with a rich history. It dates from 1872 when it was built by Nawab Abdul Ghani, Dhakaâ€™s wealthiest land owner at the time. Nearly two decades later, the palace was destroyed by a tornado. It was reconstructed by Lord Curzon but almost went to oblivion after his demise. In the late 1980s, Ahsan Manzil was thoroughly restored to glory. Today, various family portraits and the skull of Nawabâ€™s favourite elephant are on display.'),
(17, 'Sylhet', 'Jaflong', 'Jaflong is a hill station and popular tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests.'),
(20, 'khulna', 'sundarban', 'The Sundarbans is a vast forest in the coastal region of the Bay of Bengal. Located in the delta region of Padma, Meghna and Brahmaputra river basins, this unique forest extends across Khulna, Satkhira, Bagerhat districts of Bangladesh and South 24 Parganas, North 24 Parganas districts of West Bengal,'),
(22, 'Sajek', '', ''),
(23, 'Sajek', 'Sajek valley', 'The valley is 2000 feet above sea level. Sajek valley is known as the Queen of Hills & Roof of Rangamati. The name of Sajek Valley came from Sajek River that originates from Karnafuli river. Sajek river is working as a border between Bangladesh and India. Sajek valley resorts are made on the side of the hill to provide the unique experience of tribal lifestyle.'),
(24, 'sirajganj', 'china bad', 'uyqewufge5hig');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `title`, `image_text`) VALUES
(58, '51813459_2246059715654066_569268266925555712_n.jpg', 'Mosque', 'Guthiya Mosque'),
(59, '48412306_2209302719329766_7259966937654886400_n.jpg', 'Farmer', 'beautiful country');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photocost`
--

CREATE TABLE `photocost` (
  `id` int(26) NOT NULL,
  `pname` text NOT NULL,
  `cost` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photocost`
--

INSERT INTO `photocost` (`id`, `pname`, `cost`) VALUES
(1, 'sam', 100),
(2, 'shyam', 500),
(3, 'pecoc1', 400),
(4, 'mosque', 300),
(6, 'mosque', 600);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hobby` varchar(150) NOT NULL,
  `interesting` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `views` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `description`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, 'hellow', '<p>hi</p>', 0, '2018-08-05', '0000-00-00', '0000-00-00'),
(7, 1, 'jinis', '<p>xcb</p>', 0, '2018-09-03', '0000-00-00', '0000-00-00'),
(8, 1, 'dsg', '<p>AGRSG</p>', 0, '2018-09-03', '0000-00-00', '0000-00-00'),
(9, 1, 'fdb', '<p>dbf</p>', 0, '2018-10-28', '0000-00-00', '0000-00-00'),
(10, 1, 'hi', '<p>dgd</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(11, 1, 'me', '<p>xzbf</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(12, 1, 'agr', '<p>athryh</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(13, 1, 'radid', '<p>radid</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(14, 1, 'sham saha', '', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(15, 1, 'jasim', '', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(16, 1, 'rangamati', '', 0, '2018-10-30', '0000-00-00', '0000-00-00'),
(17, 1, 'nayan', '', 0, '2018-10-30', '0000-00-00', '0000-00-00'),
(18, 1, 'order', '<p>2 cup tea</p>', 0, '2018-10-30', '0000-00-00', '0000-00-00'),
(19, 1, 'hello', '<p>how are&nbsp;</p>', 0, '2018-10-30', '0000-00-00', '0000-00-00'),
(20, 1, 'man', '<p><strong>the name is</strong></p>', 0, '2019-09-06', '0000-00-00', '0000-00-00'),
(21, 1, 'sudip', '<p>Name:mosque</p>\r\n<p>student</p>\r\n<p>01785336666</p>', 0, '2019-09-06', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 0, 'radid', 'mehedihassan3112@gmail.com', '1234', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answeradmin`
--
ALTER TABLE `answeradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farecost`
--
ALTER TABLE `farecost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farename`
--
ALTER TABLE `farename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photocost`
--
ALTER TABLE `photocost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `answeradmin`
--
ALTER TABLE `answeradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `farecost`
--
ALTER TABLE `farecost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `farename`
--
ALTER TABLE `farename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
