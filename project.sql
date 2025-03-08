-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2024 at 12:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `pass`, `email`, `address`, `phone`, `role`) VALUES
(1, 'Zyong', '123123', 'duongttph52969@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Acoustic'),
(2, 'Electric'),
(3, 'Nylon'),
(4, 'Album'),
(5, 'Keyboard'),
(6, 'Microphone');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int DEFAULT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pro_detail` text COLLATE utf8mb4_general_ci,
  `views` int DEFAULT '0',
  `id_cate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `price`, `pro_img`, `pro_detail`, `views`, `id_cate`) VALUES
(1, 'Ibanez TOD10 Tim Henson Signature Electric Guitar, Classic Silver', 202308, 'Guitar1.webp', 'Nice', 2000, 2),
(2, 'Ibanez ICHI00 Ichika Signature Electric Guitar, Vintage White', 97900, 'Guitar4.webp', 'Nice', 300, 2),
(3, '  Ibanez KRYS10 Scott LePage Signature Electric Guitar w/Bag, Gold', 219900, 'Guitar2.webp', 'Gold', 0, 2),
(4, 'Ibanez TOD10N-TKF Tim Henson Signature Nylon String Guitar, Transparent Black Flat', 18920000, 'Guitar3.webp', 'In stock', 0, 3),
(5, 'Taylor 50th Anniversary BE 314ce-LTD Ash/Sitka Grand Auditorium Acoustic Guitar, Natural Top', 4399000, 'Guitar5.webp', 'Acoustic', 0, 1),
(7, 'Ibanez MRC10-NT Electric Guitar w/Bag, Natural', 1879000, 'products_2FI01-MRC10-NT_2FI01-MRC10-NT_1676784112600.webp', 'In Stock', 1500, 1),
(8, 'Focusrite Scarlett 2i2 Studio Pack (3rd Generation)', 291750, 'products_2FF15-MOSC0031_2FF15-MOSC0031_1647226076030.webp', 'In stock', 0, 6),
(9, 'Roland GP-3 Baby Grand Digital Piano, Polished Ebony', 4799000, 'products_2FR11-GP-3-PE_2FR11-GP-3-PE_1692703240180.webp', 'In stock', 0, 5),
(10, 'Roland KSC-70-WH Digital Piano Stand', 169000, 'products_2FR11-KSC-70-WH_2FR11-KSC-70-WH_1596599148400.webp', 'In stock', 0, 5),
(11, 'Roland GO:KEYS 3 Music Creation Keyboard, Red', 449000, 'products_2FR11-GOKEYS3-RD_2FR11-GOKEYS3-RD_1715334599710.webp', 'In stock', 0, 5),
(12, 'Audio-Technica AT-20 Creator’s Pack', 359000, 'products_2FA00-A34-AT20-BND_2FA00-A34-AT20-BND_1718767548540.webp', 'In stock', 0, 6),
(13, 'Behringer GO VIDEO KIT Professional Video Production Microphone Kit', 99900, 'products_2FB03-0507-ABD86_2FB03-0507-ABD86_1717065094830.webp', 'In stock', 0, 6),
(14, 'Behringer GO CAM Professional Camera Shotgun Microphone', 75900, 'products_2FB03-0507-ABC86_2FB03-0507-ABC86_1717064762190.webp', 'In stock', 0, 6),
(15, 'Taylor 314ce-N Grand Auditorium Nylon String Acoustic Guitar w/Case', 3799000, 'T25-314CE-N_1526464659485.webp', 'In stock', 0, 3),
(16, 'Taylor Jason Mraz Signature Grand Concert Nylon String Acoustic Guitar w/Case', 5299000, 'T25-JMSM_001.webp', 'In stock', 0, 3),
(17, 'Shang-Chi and the Legend of the Ten Rings: The Album - O.S.T. (Vinyl) (AE)', 43900, 'products_2FFLS-VINH-AE-602438680757_2FFLS-VINH-AE-602438680757_1639631294680.webp', 'In stock', 0, 4),
(18, '24K Magic - Bruno Mars (Vinyl) (AE)', 42000, 'products_2FFLS-VINH-AE-07567862634_2FFLS-VINH-AE-07567862634_1722591489190.webp', 'In stock', 0, 4),
(19, 'Studio Ghibli: Tribute Album - Ghibli Wo Utau (Limited Edition OST) - Various Artist (Vinyl) (PSP)', 62000, 'products_2FFLS-VINH-PSP-4988002935789_2FFLS-VINH-PSP-4988002935789_1721101443110.webp', 'In stock', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `connect_products_category` (`id_cate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `connect_products_category` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
