-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2025 at 02:38 PM
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
-- Database: `crystalaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'kunwar', '6372783445', 'kunwar@gmail.com', 'by chain', 'i want it', '2024-11-11 04:10:11'),
(2, 'kunwar', '6372783445', 'kunwar@gmail.com', 'by chain', 'i want it', '2024-11-11 04:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total_price`, `payment_method`, `order_date`) VALUES
(1, 3, 29692.00, 'upi', '2024-11-10 13:10:44'),
(2, 3, 26998.00, 'net_banking', '2024-11-10 14:02:33'),
(3, 3, 50748.00, 'net_banking', '2024-11-10 14:04:37'),
(4, 3, 50748.00, 'credit_card', '2024-11-10 14:09:37'),
(5, 3, 50748.00, 'credit_card', '2024-11-10 14:10:54'),
(6, 3, 50748.00, 'net_banking', '2024-11-10 14:14:01'),
(7, 3, 50748.00, 'net_banking', '2024-11-10 14:18:50'),
(8, 3, 50748.00, 'credit_card', '2024-11-10 14:20:29'),
(9, 3, 50748.00, 'upi', '2024-11-10 14:25:37'),
(10, 3, 36101.00, 'net_banking', '2024-11-10 17:38:44'),
(11, 4, 49006.00, 'net_banking', '2024-11-11 03:55:38'),
(12, 3, 56999.00, 'net_banking', '2024-11-12 09:23:07'),
(13, 3, 20143.00, 'net_banking', '2024-11-13 04:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_name`, `product_price`, `quantity`) VALUES
(1, 1, 'Silver Chain Necklace', 14846.00, 2),
(2, 9, 'Vintage Charm Diamond Ring', 17999.00, 1),
(3, 9, 'Regal Splendor Bangles', 8999.00, 1),
(4, 9, 'Blooming Flower Diamond Ring', 23750.00, 1),
(5, 10, ' Infinite Mesh Hoops', 16.00, 4),
(6, 10, ' Fall Season Pink Crystal Ring', 0.00, 1),
(7, 10, ' Royal Blush Bangles', 2.00, 1),
(8, 10, '  Ornate Splendor Mangalsutra', 17.00, 1),
(9, 10, ' Oceanic Bloom Chandeliers', 20.00, 1),
(10, 10, 'Ornate Splendor Mangalsutra', 17999.00, 1),
(11, 10, 'Golden Heart Diamond Ring', 17999.00, 1),
(12, 11, 'Rose Aura Bangles', 6.00, 1),
(13, 11, 'Eternal Blossoms Mangalsutra', 24500.00, 2),
(14, 12, 'Moonlight Mirage Bangles', 7999.00, 1),
(15, 12, 'Eternal Blossoms Mangalsutra', 24500.00, 2),
(16, 13, '   Golden Symphony Mangalsutra', 16393.00, 1),
(17, 13, 'Golden Dewdrop Bangles', 3750.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(1, 'Kareena', 'Sekhon', '12kareenaSekhon@gmail.com', '$2y$10$rGvr1oyyHneCtF6uV1EslOVqPC2qHQGfM2QbInitSrg7os0wSFcxe', '2024-11-10 11:29:44'),
(2, 'harman', 'sekhon', 'harman@gmail.com', '$2y$10$cZ3KpCke1ffoe2dDn3bY9e46./AtduyBwkZeLQNz1u21Z0BDN5.bq', '2024-11-10 11:42:16'),
(3, 'har', 'sek', 'harmansekhon@gmail.com', '$2y$10$V1IpHK3AIW8NkdSiB5TLGuSmRtKzw1ZfmJHT7QCbN8MEnDNCckhzS', '2024-11-10 11:49:11'),
(4, 'kuwar', 'khullar', 'kunwar@gmail.com', '$2y$10$fAfshKR7pPy0WIseBJpr/u.R0BTJVcWLRy4xnEYiKAZ9IL5gHZLNu', '2024-11-11 03:42:10'),
(5, 'punita', 'singh', 'pnt@gmail.com', '$2y$10$OrhZJJc7hixRJUQR9OdCT.IjvLaM3t4gprS1q57BWPQnM61UzmHpS', '2024-11-13 04:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

CREATE TABLE `wishlist_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist_items`
--

INSERT INTO `wishlist_items` (`id`, `user_id`, `product_name`, `product_price`, `product_image`, `created_at`) VALUES
(10, 4, 'Royal Blush Bangles', 2152.00, 'images\\bangles3.jpg', '2024-11-11 03:42:59'),
(11, 4, ' Divine Harmony heart Pendant', 21250.00, 'images\\pendant7.jpeg', '2024-11-11 03:54:37'),
(12, 4, 'Golden Dewdrop anklets', 3750.00, 'images\\anklet8.webp', '2024-11-11 04:33:34'),
(13, 4, 'Moonlight Mirage Bracelets\r\n            ', 7999.00, 'images\\braclet9.webp', '2024-11-11 04:51:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `wishlist_items`
--
ALTER TABLE `wishlist_items`
  ADD CONSTRAINT `wishlist_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
