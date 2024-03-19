-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 10:25 AM
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
(1, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:01:39'),
(2, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:13:53'),
(3, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:26:53'),
(4, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:28:44'),
(5, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:28:57'),
(6, 1, '2024-03-16T19:01', '2024-03-16T16:05', 'Nairobi', 5, '2024-03-16 16:31:17'),
(7, 1, '2024-03-16T16:48', '2024-03-16T16:48', 'Nairobi', 5, '2024-03-16 16:45:31'),
(8, 1, '2024-03-16T16:52', '2024-03-16T16:51', 'Nairobi', 5, '2024-03-16 16:49:40'),
(9, 1, '2024-03-16T22:00', '2024-03-16T17:05', 'Nairobi', 5, '2024-03-16 17:01:00'),
(10, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 5, '2024-03-16 17:01:59'),
(11, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 5, '2024-03-16 17:08:14'),
(12, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 5, '2024-03-16 17:14:09'),
(13, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 5, '2024-03-16 17:17:10'),
(14, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 2, '2024-03-16 17:19:51'),
(15, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 1, '2024-03-16 17:21:49'),
(16, 1, '2024-03-16T17:06', '2024-03-16T17:06', 'Nairobi', 1, '2024-03-16 17:25:10'),
(17, 2, '2024-03-16T22:00', '2024-03-30T22:56', 'Nairobi', 5, '2024-03-16 22:56:16'),
(18, 3, '2024-03-17T23:00', '2024-03-16T03:00', 'Nairobi', 2, '2024-03-16 23:01:09'),
(19, 3, '2024-03-17T23:00', '2024-03-16T03:00', 'Nairobi', 2, '2024-03-16 23:03:44'),
(20, 4, '2024-03-16T20:14', '2024-03-28T20:14', 'Nairobi', 2, '2024-03-16 23:15:03');

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
(1, 'erickariukiwairimu@gmail.com', 'joca cgcd tsnx pwlj', 'gmail', 'current_timestamp()');

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
(14, 5, 1, '2024-03-19 12:17:57');

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
(2, 'james', 'doe', 'jamesdoe@gmail.com', '$2y$10$2WNUs2So1NCOikKToGQ7Y.TlVI1dd23sLZc3UaDeqZNZLFxspv0gi', 0, '2024-03-16 22:55:55'),
(3, 'Josphat', 'Mugo', 'josephatmugo62@gmail.com', '$2y$10$8ENoxedIzYWj8dSkm3DIDOa4vXD4L4IXi9mKtXnfVGn5H0hzU7YNS', 0, '2024-03-16 23:00:16'),
(4, 'Anita', 'Nyaboke', 'nyabokeanitao@gmail.com', '$2y$10$jJggr2jk6PQ8TyyNOldDf.R13rnKdwdxfkiAGrvno.iDw7Su5cvXu', 0, '2024-03-16 23:13:10'),
(5, 'james', 'enok', 'jamesenok89@gmail.com', '$2y$10$ZvdaStz.ZqUkjWUxctD4pOP7vWEO3MGvz.zMn8OvN5Gy7ONLLPIYq', 0, '2024-03-19 12:16:27');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomservice`
--
ALTER TABLE `roomservice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
