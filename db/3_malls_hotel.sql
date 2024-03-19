-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 03:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3_malls_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `datetime_from` varchar(50) NOT NULL,
  `datetime_to` varchar(50) NOT NULL,
  `location` varchar(10) NOT NULL,
  `number_of_people` int(3) NOT NULL,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `datetime_from`, `datetime_to`, `location`, `number_of_people`, `datetime`) VALUES
(1, 2, '2024-03-16T22:44', '2024-03-23T22:45', 'Nairobi', 0, '2024-03-16 22:45:07'),
(2, 2, '2024-03-16T22:48', '2024-03-23T22:48', 'Nairobi', 5, '2024-03-16 22:48:30'),
(3, 2, '2024-03-16T23:34', '2024-03-16T23:36', 'Nairobi', 5, '2024-03-16 23:32:03'),
(5, 2, '2024-03-16T23:59', '2024-03-16T23:59', 'Nairobi', 5, '2024-03-16 23:54:43'),
(6, 2, '2024-03-16T23:59', '2024-03-16T23:59', 'Nairobi', 5, '2024-03-16 23:59:47'),
(7, 2, '2024-03-16T23:59', '2024-03-16T23:59', 'Nairobi', 5, '2024-03-17 00:04:59'),
(8, 2, '2024-03-18T11:43', '2024-03-18T11:43', 'Nairobi', 2, '2024-03-18 07:43:30'),
(9, 2, '2024-03-18T14:43', '2024-03-18T16:43', 'Nairobi', 2, '2024-03-18 07:50:24'),
(10, 2, '2024-03-22T08:36', '2024-03-18T12:36', 'Nairobi', 0, '2024-03-18 08:36:30'),
(11, 2, '2024-03-22T08:36', '2024-03-18T12:36', 'Nairobi', 0, '2024-03-18 08:36:43'),
(12, 2, '2024-03-22T08:36', '2024-03-18T12:36', 'Nairobi', 5, '2024-03-18 08:39:48'),
(13, 2, '2024-03-16T08:44', '2024-03-30T08:44', 'Nairobi', 5, '2024-03-18 08:44:13'),
(14, 2, '2024-03-23T08:46', '2024-03-29T08:46', 'Kisumu', 5, '2024-03-18 08:46:38'),
(15, 2, '2024-03-24T08:54', '2024-03-18T14:54', 'Nairobi', 5, '2024-03-18 08:54:20'),
(16, 2, '2024-03-31T09:00', '2024-03-16T09:00', 'Nairobi', 5, '2024-03-18 09:01:02'),
(17, 2, '2024-03-18T10:03', '2024-03-18T14:08', 'Kisumu', 5, '2024-03-18 09:03:28'),
(18, 2, '2024-03-18T09:15', '2024-04-03T15:10', 'Nairobi', 2, '2024-03-18 09:10:30'),
(19, 2, '2024-03-24T09:12', '2024-03-18T13:12', 'Nairobi', 2, '2024-03-18 09:12:57'),
(20, 2, '2024-03-03T09:12', '2024-04-05T19:12', 'Nairobi', 2, '2024-03-18 09:15:27'),
(21, 3, '2024-03-19T16:52', '2024-03-19T19:52', 'Nairobi', 1, '2024-03-19 15:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `email`, `password`, `provider`, `datetime`) VALUES
(9, 'josphatmugo52@gmail.com', 'jmugo7715', 'gmail', '2024-03-18 09:09:57'),
(10, 'josephatmugo62@gmail.com', 'tpkl tcgz wvpk lgrj', 'gmail', '2024-03-18 09:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `price` int(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `image`, `datetime`) VALUES
(1, 'cappuccino', '\"Indulge in the creamy richness of a perfectly balanced cappuccino, where velvety steamed milk dances with robust espresso, topped with a delicate froth, creating a harmonious blend of flavors and textures that awakens your senses', 350, 'drinks', 'cappuccino.webp', '2024-03-19 09:36:31'),
(2, 'Oatmeal Pancakes', 'Oatmeal pancakes offer a wholesome twist on the classic breakfast favourite. These fluffy delights are made with a hearty blend of oats and flour, creating a satisfying texture with a subtle nutty flavour. Perfectly paired with maple syrup or fresh fruit toppings, they\'re a nutritious and delicious way to start your day.', 550, 'Foods', 'oatmeal_pancakes.jpg', '2024-03-19 09:51:49'),
(3, 'Cereals', 'Start your day with a burst of energy and nutrition with our assortment of cereals. Delight in a crunchy medley of whole grains, enriched with essential vitamins and minerals, ensuring a balanced breakfast. Whether you prefer classic flakes, hearty clusters, or vibrant fruity blends, our cereals offer a deliciously satisfying start to your morning routine', 250, 'Foods', 'cereals.jpeg', '2024-03-19 09:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `roomservice`
--

CREATE TABLE `roomservice` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomservice`
--

INSERT INTO `roomservice` (`id`, `user_id`, `product_id`, `datetime`) VALUES
(1, 1, 1, '2024-03-19 11:05:46'),
(2, 1, 3, '2024-03-19 11:05:52'),
(3, 1, 2, '2024-03-19 11:05:55'),
(4, 1, 1, '2024-03-19 11:42:40'),
(5, 1, 1, '2024-03-19 11:42:42'),
(7, 2, 1, '2024-03-19 12:13:16'),
(8, 3, 1, '2024-03-19 12:13:52'),
(10, 3, 2, '2024-03-19 12:14:12'),
(11, 5, 1, '2024-03-19 12:17:34'),
(12, 5, 3, '2024-03-19 12:17:41'),
(13, 5, 1, '2024-03-19 12:17:54'),
(14, 5, 1, '2024-03-19 12:17:57'),
(15, 2, 1, '2024-03-19 13:43:02'),
(16, 2, 1, '2024-03-19 13:43:04'),
(17, 2, 3, '2024-03-19 13:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 0,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `datetime`) VALUES
(1, 'john', 'doe', 'johndoe@gmail.com', '$2y$10$tIUzo9ePBBt/19UcDke8EuR9KVGDwXF2wsbb6rutuxHLZ6g78CfRS', 0, '2024-03-16 14:11:54'),
(2, 'Josphat', 'Muthiora', 'josephatmugo62@gmail.com', '$2y$10$0L62SnS17e3g55EA4AVMlezCNtBMGBb8otiCSy4uIgEo7qCdaVw7.', 0, '2024-03-16 14:34:50'),
(3, 'James', 'Majoka', 'admin@example.com', '$2y$10$3v7iBfDyXzTKTegAr3YYaOvGoQycU/016UMbjuAxCYpFmGGXGrbga', 1, '2024-03-18 07:59:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomservice`
--
ALTER TABLE `roomservice`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomservice`
--
ALTER TABLE `roomservice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
