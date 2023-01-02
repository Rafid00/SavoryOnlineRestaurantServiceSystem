-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 06:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khanas`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` varchar(36) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` tinyint(4) NOT NULL DEFAULT 0,
  `total_price` float NOT NULL,
  `added_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `ordered` mediumint(9) NOT NULL DEFAULT 0,
  `image_name` varchar(1024) NOT NULL DEFAULT 'food1.jpg',
  `added_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`type`, `name`, `description`, `price`, `ordered`, `image_name`, `added_time`) VALUES
('Wraps', 'Chicken Shawrma Wrap', 'This is Chicken Shawrma Wrap ', 2, 0, 'chickenWrap.jpg', '2022-12-04 23:19:56'),
('Burger', 'Quarter Pounder', 'Each Quarter Pounder® with Cheese burger features a ¼ lb.* of 100% fresh beef that’s hot, deliciously juicy and cooked when you order. It’s seasoned with just a pinch of salt and pepper, sizzled on a flat iron grill, then topped with slivered onions, tangy pickles and two slices of melty American cheese on a sesame seed bun. Our QPC® contains no artificial flavors, preservatives or added colors from artificial sources.', 3, 0, 'hamburger.webp', '2022-12-04 23:19:56'),
('Pizza', 'Rafid Cheese Pizza', 'This is a cheese pizza', 3, 0, 'pizza2.png', '2022-12-04 23:19:56'),
('Burger', 'Smoky BLT Quarter Pounder', 'First, there’s the Quarter Pounder with Cheese (QPC). Now, there’s still the QPC— but with smoky sauce and bacon. The Smoky BLT QPC offers bold and savory flavors you’ll want to enjoy with two hands.\r\n\r\n \r\n\r\nEach Smoky BLT Quarter Pounder® with Cheese is cooked when you order with a 100% fresh beef quarter pound patty, two slices of melty American cheese, thick cut applewood smoked bacon, fresh Roma tomatoes, shredded lettuce, smoky sauce and a toasted sesame seed bun. A Smoky BLT Quarter Pounder® with Cheese has 770 Calories.', 2, 0, 'hamburger2.webp', '2022-12-04 23:19:56'),
('Drinks', 'Special Cold Coffee', 'It\'s a cold coffee', 0.5, 0, 'coldCoffee.jfif', '2022-12-04 23:19:56'),
('Drinks', 'Strawberry Coffee', 'This is a strawberry-flavored Coffee', 1, 0, 'strawberrycoffee.jpg', '2022-12-05 00:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE `transaction_info` (
  `transaction_id` varchar(36) NOT NULL,
  `customer_id` varchar(36) NOT NULL,
  `order_type` varchar(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `delivery_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_info`
--

INSERT INTO `transaction_info` (`transaction_id`, `customer_id`, `order_type`, `date`, `payment_method`, `amount`, `delivery_address`) VALUES
('301201c5-81af-11ed-922e-7c10c9a046bd', '88d6049d-8103-11ed-8a9a-7c10c9a046bd', 'delivery', '2022-12-22 10:14:54', 'cash', 15.38, 'pallabi, mirpur, dhaka - 1216'),
('a47411a9-81af-11ed-922e-7c10c9a046bd', '88d6049d-8103-11ed-8a9a-7c10c9a046bd', 'pre-order', '2022-12-22 10:18:09', 'cash', 30.89, NULL),
('f51493db-81ae-11ed-922e-7c10c9a046bd', '88d6049d-8103-11ed-8a9a-7c10c9a046bd', 'pre-order', '2022-12-22 10:13:15', 'cash', 11.63, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_items`
--

CREATE TABLE `transaction_items` (
  `transaction_id` varchar(36) NOT NULL,
  `item_name` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_items`
--

INSERT INTO `transaction_items` (`transaction_id`, `item_name`, `quantity`) VALUES
('d81a429b-81ae-11ed-922e-7c10c9a046bd', 'Strawberry Coffee', 2),
('d81a429b-81ae-11ed-922e-7c10c9a046bd', 'Quarter Pounder', 2),
('f51493db-81ae-11ed-922e-7c10c9a046bd', 'Quarter Pounder', 1),
('f51493db-81ae-11ed-922e-7c10c9a046bd', 'Rafid Cheese Pizza', 2),
('0ce75290-81af-11ed-922e-7c10c9a046bd', 'Special Cold Coffee', 1),
('0ce75290-81af-11ed-922e-7c10c9a046bd', 'Rafid Cheese Pizza', 4),
('301201c5-81af-11ed-922e-7c10c9a046bd', 'Quarter Pounder', 1),
('301201c5-81af-11ed-922e-7c10c9a046bd', 'Rafid Cheese Pizza', 3),
('301201c5-81af-11ed-922e-7c10c9a046bd', 'Special Cold Coffee', 1),
('a47411a9-81af-11ed-922e-7c10c9a046bd', 'Quarter Pounder', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_name` varchar(1024) NOT NULL DEFAULT 'propic.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `image_name`) VALUES
('88d6049d-8103-11ed-8a9a-7c10c9a046bd', 'rafid', '12345', 'rafid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'propic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `item_name` (`item_name`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `transaction_info`
--
ALTER TABLE `transaction_info`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_name`) REFERENCES `food_items` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
