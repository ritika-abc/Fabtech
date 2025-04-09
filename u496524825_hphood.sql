-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2025 at 12:25 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_hphood`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`, `image`) VALUES
(1, 'T Shirt', '1.jpg'),
(2, 'Shirt', '2.jpeg'),
(3, 'track pants', '3.jpg'),
(4, 'jeans', '4.jpg'),
(5, 'Night Dress', '5.jpeg'),
(6, 'child all types of wear', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(100) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `cat_name` text NOT NULL,
  `cat_id` int(100) NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `name`, `image`, `cat_name`, `cat_id`, `slug`) VALUES
(5, 'Blue T Shirt', 'image/product/1737708584_41Amrl8PCxS.jpg', 'T Shirt', 0, 't-shirt'),
(6, 'Basic heavy weight t-shirt', 'image/product/1737708612_10327864-1-darkolive.jpg', 'T Shirt', 0, 't-shirt'),
(7, 'T Shirt', 'image/product/1737708736_asos-Yellow-Oversized-T-shirt.jpg', 'T Shirt', 0, 't-shirt'),
(8, 'White T Shirt', 'image/product/1737708802_dasd.jpg', 'T Shirt', 0, 't-shirt'),
(9, 'Printed T Shirt', 'image/product/1737708822_fgd.jpg', 't-shirt', 0, 't-shirt'),
(10, 'Oversized T Shirts', 'image/product/1737708870_i.jpg', 't-shirt', 0, 't-shirt'),
(11, 'Printed oversized t shirts', 'image/product/1737708891_rBVaqWD5GyqAVRtwAAGPfQACJAk098.jpg', 't-shirt', 0, 't-shirt'),
(12, 'T Shirt', 'image/product/1737708898_png.jpg', 't-shirt', 0, 't-shirt'),
(13, 'Crew Neck T-Shirt', 'image/product/1737709166_polo-shirts-1700025493-7171092.jpeg', 't-shirt', 0, 't-shirt'),
(14, 'Regular Fit T-Shirt', 'image/product/1737709225_t-shirts-1700025493-7171093.jpeg', 't-shirt', 0, 't-shirt'),
(15, 'Formal stripe Shirts', 'image/product/1737709453_O1CN01uorXKk1kuL3EoUcWp__2545334743_480x480.jpg', 'shirt', 0, 'shirt'),
(16, 'Shirt', 'image/product/1737709460_c8f5da4eabbb3c98b45e7bf51ac6304e--figure-photography-photography-gallery.jpg', 'shirt', 0, 'shirt'),
(17, 'plain Formal Shirts', 'image/product/1737709465_camisas-elegantes-para-hombres-blanco.jpg', 'shirt', 0, 'shirt'),
(18, 'Polo T-Shirt', 'image/product/1737709869_Screenshot (15).png', 'T Shirt', 0, 't-shirt'),
(19, 'Boxy Fit T-Shirt', 'image/product/1737709889_Screenshot (13).png', 'T Shirt', 0, 't-shirt'),
(20, 'Baby Rompers', 'image/product/1737710097_Screenshot (4).png', 'child all types of wear', 0, 'child-all-types-of-wear'),
(21, 'Baby Pajamas', 'image/product/1737710108_Screenshot (5).png', 'child all types of wear', 0, 'child-all-types-of-wear'),
(22, 'Child Wear single design', 'image/product/1737710116_Screenshot (7).png', 'child all types of wear', 0, 'child-all-types-of-wear'),
(23, 'Child Wear cartoon design', 'image/product/1737710125_Screenshot (6).png', 'child all types of wear', 0, 'child-all-types-of-wear'),
(24, 'Child Wear star print', 'image/product/1737710133_Screenshot (3).png', 'child all types of wear', 0, 'child-all-types-of-wear'),
(25, 'Slim Fit Track Pants', 'image/product/1737710347_track-pant-1781200.jpg', 'track-pants', 0, 'track-pants'),
(26, 'Regular Fit Track Pants', 'image/product/1737710471_D_NQ_NP_655578-MLM26911467888_022018-F.jpg', 'track-pants', 0, 'track-pants'),
(27, 'Jogger Track Pants', 'image/product/1737710475_1667499265_16-sportishka-com-p-sportivnie-shtani-adidas-dlya-malchikov-pi-17.jpg', 'track-pants', 0, 'track-pants'),
(28, 'Track Pants', 'image/product/1737710479_tumblr_pj1907n5aV1rfgzpso1_640.jpg', 'track-pants', 0, 'track-pants'),
(29, 'Dark Grey Denim Jeans ', 'image/product/1737710851_BM22721_035BM22721.jpg', 'jeans', 0, 'jeans'),
(30, 'Basic skinny jeans', 'image/product/1737710855_1531f7693b8541fea54a43010b25962b.jpeg', 'jeans', 0, 'jeans'),
(31, 'Blue Mid-Rise Solid Jeans', 'image/product/1737710858_BM22607_419BM22607.jpg', 'jeans', 0, 'jeans'),
(33, 'Denim Jeans', 'image/product/1737710868_2ee00b87248ded79485ae55e2af4948a.jpg', 'jeans', 0, 'jeans');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
