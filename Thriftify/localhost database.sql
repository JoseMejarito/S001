-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2023 at 04:11 AM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `user_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `core` enum('1','2','3','4','5','6','7') NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seller_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listing_id`, `user_id`, `product_name`, `product_description`, `product_price`, `location`, `category`, `core`, `image_path`, `created_at`, `seller_name`) VALUES
(25, 16, 'Raf Simons: A/W 05 Sample ‘Figure of Eight’ Pocket Jacket', 'Medium Size / 22x24 dimesion /\r\nExcellent condition /\r\nNo major flaws', 5000.00, 'Santa Rosa city, Laguna', 1, '1', 'public/1_6551f3e9ef188.jpg', '2023-11-13 10:01:13', 'seller'),
(26, 16, 'JNCO JORTS Bulldog Embroidered', 'One Size / 32 dimesion /\r\nExcellent condition /\r\nNo major flaws', 4000.00, 'Santa Rosa city, Laguna', 1, '2', 'public/1_6551f43a91223.jpg', '2023-11-13 10:02:34', 'seller'),
(27, 16, 'Maison Margiela 10 NUMERIC LOGO TEE', 'Medium Size / 21x24 dimension /\r\nExcellent condition /\r\nNo major flaws', 1000.00, 'Santa Rosa city, Laguna', 1, '3', 'public/1_6551f4cc5e3d2.jpg', '2023-11-13 10:05:00', 'seller'),
(28, 16, 'The North Face Hyvent Windbreaker Jacket', 'Large Size / 24x27 dimension /\r\nExcellent condition /\r\nNo major flaws', 2000.00, 'Santa Rosa city, Laguna', 1, '4', 'public/1_6551f54136661.jpg', '2023-11-13 10:06:57', 'seller'),
(29, 16, 'Vintage Jim Morrison \"An American Poet\" memorial tee', 'Large Size / 24x28 dimension /\r\nBeaters Condition /\r\nMultiple Pin Holes', 2000.00, 'Santa Rosa city, Laguna', 1, '5', 'public/1_6551f5a41028a.jpg', '2023-11-13 10:08:36', 'seller'),
(30, 16, 'Inter Milan Pirelli Y2K Soccer Jersey', '3XL Size / 27x32 dimension /\r\nVery Good Condition /\r\nNo major flaws', 1000.00, 'Santa Rosa city, Laguna', 1, '6', 'public/1_6551f619bac1a.jpg', '2023-11-13 10:10:33', 'seller'),
(31, 16, 'Liz Baker Pleated White Skirt', 'Size Women\'s / 33\" Excelent Condition', 1500.00, 'Santa Rosa city, Laguna', 2, '1', 'public/2_6551f8c9bd0ad.jpg', '2023-11-13 10:22:01', 'seller'),
(32, 16, 'MAISON MARGIELA X TOMMY CASH TROUSER', 'EXCELLENT CONDITION/\r\nWAIST 27-28 39 LENGTH/\r\nNo Issue', 2000.00, 'Santa Rosa city, Laguna', 2, '2', 'public/2_6551f93b78f0f.jpg', '2023-11-13 10:23:55', 'seller'),
(33, 16, 'HoMMe Plisse Issey Miyake (Authentic)', 'Pleated Trousers /\r\nSize 1  Can fit to 30/34 /\r\nExcellent no issues', 4500.00, 'Santa Rosa city, Laguna', 2, '3', 'public/2_6551f9a01f11c.jpg', '2023-11-13 10:25:36', 'seller'),
(34, 16, 'Nike Tech Woven Short', 'Size 28-30 /\r\nLength 20/\r\nExcellent to new condition', 500.00, 'Santa Rosa city, Laguna', 2, '4', 'public/2_6551fa1833f85.jpg', '2023-11-13 10:27:36', 'seller'),
(35, 16, 'Vintage celine c macadam t-shirt women multi-color (legit/authentic)', 'Medium/\r\nL16.5 W20.5/\r\nexcellent condition/\r\nNo Issue', 1000.00, 'Santa Rosa city, Laguna', 2, '5', 'public/2_6551fa62c33b5.jpg', '2023-11-13 10:28:50', 'seller'),
(36, 16, 'JNCO Y2k Era(Hoodie)', 'L for womens tag /\r\n22x26 /\r\nNo Issue', 2000.00, 'Santa Rosa city, Laguna', 2, '6', 'public/2_6551fab873268.jpg', '2023-11-13 10:30:16', 'seller'),
(37, 16, 'NWT Undercover x GU Limited Black Heart Gold Chain Mini Bag', 'Size Women\'s / ONE SIZE /\r\nExcelent Condition\r\n', 1000.00, 'Santa Rosa city, Laguna', 3, '7', 'public/1_65521a99f297e.jpg', '2023-11-13 12:46:17', 'seller'),
(38, 16, 'Chanel Kelly Mini Shopping Bag', 'Size Women\'s / ONE SIZE /\r\nExcelent Condition\r\n', 8000.00, 'Santa Rosa city, Laguna', 3, '7', 'public/2_65521af6b8975.jpg', '2023-11-13 12:47:50', 'seller'),
(39, 16, 'Mydixathryll II Sunglasses', 'Size ONE SIZE /\r\nExcelent Condition', 12000.00, 'Santa Rosa city, Laguna', 3, '7', 'public/3_65521b627b98b.jpg', '2023-11-13 12:49:38', 'seller'),
(40, 16, 'Chrome Hearts U CNT SEA ME sunglasses', 'Size ONE SIZE /\r\nExcelent Condition', 16000.00, 'Santa Rosa city, Laguna', 3, '7', 'public/4_65521bb18689e.jpg', '2023-11-13 12:50:57', 'seller'),
(41, 16, 'Chrome Hearts Bracelet Floral ID Fancy Link', 'Size ONE SIZE /\r\nExcelent Condition', 25000.00, 'Santa Rosa city, Laguna', 3, '7', 'public/5_65521bda86e75.jpg', '2023-11-13 12:51:38', 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `listing_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `listing_count`) VALUES
(16, 'seller', 'seller@gmail.com', '$2y$10$OiHT0LaLcN8xHoM6GI6UierjRCfRUqysaqeMDk.CAGZkW47fh6swu', 0),
(17, 'buyer', 'buyer@gmail.com', '$2y$10$Ov4rT5Fhv6bbzew2IXo6ze2M3ahzz/Matem1polCk.iM12N1mjZOO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `listing_id`) VALUES
(10, 17, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`user_id`,`contact_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listing_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `listing_id` (`listing_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `contacts_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`listing_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
