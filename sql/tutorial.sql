-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2016 at 07:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'Levis'),
(2, 'Nike'),
(11, 'Adidas'),
(13, 'Polo'),
(14, 'New Balance'),
(16, 'XOXO'),
(17, 'Moss');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `items` text COLLATE utf8_unicode_ci NOT NULL,
  `expire_date` datetime NOT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `shipped` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `items`, `expire_date`, `paid`, `shipped`) VALUES
(18, '[{"id":"2","size":"small","quantity":1}]', '2016-07-12 11:26:14', 1, 0),
(21, '[{"id":"1","size":"28","quantity":"1"},{"id":"3","size":"b","quantity":6}]', '0000-00-00 00:00:00', 1, 0),
(22, '[{"id":"1","size":"28","quantity":3}]', '0000-00-00 00:00:00', 1, 0),
(23, '[{"id":"1","size":"28","quantity":"2"}]', '2016-07-13 12:01:27', 1, 0),
(26, '[{"id":"3","size":"c","quantity":"1"}]', '0000-00-00 00:00:00', 1, 0),
(27, '[{"id":"3","size":"b","quantity":1},{"id":"3","size":"c","quantity":11}]', '0000-00-00 00:00:00', 1, 0),
(29, '[{"id":"1","size":"S","quantity":"1"}]', '2016-07-16 05:12:04', 1, 0),
(30, '[{"id":"1","size":"S","quantity":"1"}]', '2016-07-16 06:47:14', 1, 0),
(31, '[{"id":"6","size":"w","quantity":"1"}]', '2016-07-16 06:48:57', 1, 0),
(32, '[{"id":"2","size":"small","quantity":"1"}]', '2016-07-16 06:54:27', 1, 0),
(33, '[{"id":"9","size":"xs","quantity":"1"},{"id":"8","size":"sm","quantity":"2"},{"id":"2","size":" medium","quantity":3},{"id":"4","size":"l","quantity":"1"}]', '0000-00-00 00:00:00', 0, 0),
(34, '[{"id":"8","size":"m","quantity":9},{"id":"2","size":" medium","quantity":"1"}]', '0000-00-00 00:00:00', 1, 0),
(35, '[{"id":"10","size":"s","quantity":"1"}]', '2016-07-17 02:15:34', 1, 0),
(36, '[{"id":"9","size":"xs","quantity":"1"}]', '2016-07-17 02:22:48', 1, 0),
(37, '[{"id":"14","size":"S","quantity":"1"}]', '2016-07-17 02:30:28', 1, 0),
(38, '[{"id":"2","size":" medium","quantity":"1"}]', '2016-07-17 02:41:40', 1, 0),
(39, '[{"id":"13","size":"S","quantity":"1"}]', '2016-07-17 02:45:26', 1, 0),
(40, '[{"id":"9","size":"xs","quantity":"1"}]', '2016-07-17 02:47:40', 0, 0),
(41, '[{"id":"11","size":"S","quantity":"1"}]', '2016-07-17 02:50:18', 1, 0),
(42, '[{"id":"12","size":"S","quantity":"1"}]', '2016-07-17 02:54:43', 1, 0),
(43, '[{"id":"9","size":"xs","quantity":"1"}]', '2016-07-17 02:58:29', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent`) VALUES
(1, 'Men', 0),
(2, 'Women', 0),
(3, 'Boys', 0),
(4, 'Girls', 0),
(5, 'Shirts', 1),
(9, 'Shirts', 2),
(13, 'Shirts', 3),
(30, 'Shirts', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `sizes` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `list_price`, `brand`, `categories`, `image`, `description`, `featured`, `sizes`, `deleted`) VALUES
(1, 'Levis Jeans', '29.99', '39.99', 1, '6', '/tutorial/images/products/b82ee692dce4b095e4d5c3c9bafec4af.png,/tutorial/images/products/97a367cb001565f09720322e9b2e9c6e.png', 'These jeans are amazing. they are super comfy and sexy.', 0, 'S:21:,M:50:,L:20:', 0),
(2, 'Beautiful Shirt', '19.98', '18.00', 1, '9', '/tutorial/images/products/c3942d24266557654e96a6cad60f420e.jpg', 'what a beautiful shirt, blah blah blah... please buy one . we spent too too much time on building tyhis siet.', 1, 'small:2:, medium:4:4, large:10:', 0),
(7, 'woman shirt', '33.00', '34.00', 11, '9', '/tutorial/images/products/80f464f473d3ce73d5992d5e5a399bc9.jpg', 'look at this beautiful shirt! you deserve it!', 0, 's:11:2,m:22:10,m:12:2', 0),
(8, 'woman shirt', '22.00', '24.00', 1, '9', '/tutorial/images/products/14073abb2bbfcbee4fe9c2c3ec7e19e6.jpg,/tutorial/images/products/8c50ea1075862a9960499f3beae6f59f.jpg,/tutorial/images/products/f0650b502c1db9c72a2d9ab482b73ec9.jpg,/tutorial/images/products/6afa7d255591000ce5292b84547d0fe3.jpg', 'good looking shirts.', 1, 's:22:,m:2:,l:22:,sm:22:', 0),
(9, 'woman shirts', '33.00', '33.33', 14, '9', '/tutorial/images/products/ac932f7675873991a1ef77cb6d758765.jpg,/tutorial/images/products/fb9267cf7820bbea8d535e7e3965e55e.jpg,/tutorial/images/products/d19d92ddd5cc1478092509da279b9764.jpg,/tutorial/images/products/3dd5ecb817d37c4cb19ddb4671b19d1d.jpg', 'come and buy it.', 1, 'xs:20:,s:3:,1l:1:', 0),
(10, 'man shirt', '33.00', '33.33', 1, '5', '/tutorial/images/products/10c3cbeb60f246296ca772f9b2582ac8.jpg', 'haha, you will love it.', 1, 'S:1:1,M:2:2,L:3:3', 0),
(11, 'man shirt', '45.90', '55.90', 14, '5', '/tutorial/images/products/871c9b735a589064c00143a71d60874f.jpg', 'THIS IS A NICE MAN SHIRT', 1, 'S:1:1,M:88:1,L:3:1', 0),
(12, 'MAN POPO SHIRT', '33.00', '33.33', 13, '5', '/tutorial/images/products/01945e5c14ed653a61e76d255869b828.jpg', 'ASDF\r\nASDF', 1, 'S:21:,M:33:21,L:22:21', 0),
(13, 'BOY', '22.22', '33.00', 16, '13', '/tutorial/images/products/33bfadbfc2372a69761596ca0e9622af.png', 'FOR BOYS', 1, 'S:11:11,M:12:11', 0),
(14, 'GIRLS', '22.00', '33.00', 11, '30', '/tutorial/images/products/465d6d97c0aaf09f260f5cc2bf604dfc.png', 'ASDF\r\nADF', 1, 'S:21:,M:33:,L:44:', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `charge_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `txn_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `charge_id`, `cart_id`, `full_name`, `email`, `street`, `street2`, `city`, `state`, `zip_code`, `country`, `sub_total`, `tax`, `grand_total`, `description`, `txn_type`, `txn_date`) VALUES
(1, ' -> id', 21, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'adsf', '1026', 'New Zealand', '623.99', '93.60', '717.59', '7 items from Moss shop.', '>object', '2016-06-13 21:35:28'),
(2, 'StripeCharge JSON: {\n    "id": "ch_18LrXVKZSDHTJIlv5j72Nfvm",\n    "object": "charge",\n    "amount": 10347,\n    "amount_refunded": 0,\n    "application_fee": null,\n    "balance_transaction": "txn_18LrXVKZSDHTJIlv2xNDA3WN",\n    "captured": true,\n    "created', 22, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '89.97', '13.50', '103.47', '3 items from Moss shop.', 'charge', '2016-06-13 21:39:25'),
(3, 'StripeCharge JSON: {\n    "id": "ch_18LruzKZSDHTJIlvAwf92ooq",\n    "object": "charge",\n    "amount": 6898,\n    "amount_refunded": 0,\n    "application_fee": null,\n    "balance_transaction": "txn_18LruzKZSDHTJIlvgFSTSAJt",\n    "captured": true,\n    "created"', 23, 'FeifdU', 'admin@admin.c', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '59.98', '9.00', '68.98', '2 items from Moss shop.', 'charge', '2016-06-13 22:03:41'),
(4, 'ch_18M375KZSDHTJIlvQCQkUKzV', 26, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '99.00', '14.85', '113.85', '1 item from Moss shop.', 'charge', '2016-06-14 10:00:55'),
(5, 'ch_18MTphKZSDHTJIlvgx9lKc3h', 27, 'Feifei GU', 'admin@admin.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '1188.00', '178.20', '1366.20', '12 items from Moss shop.', 'charge', '2016-06-15 14:32:45'),
(6, 'ch_18MqvsKZSDHTJIlvkQz7JbCd', 29, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '29.99', '4.50', '34.49', '1 item from Moss shop.', 'charge', '2016-06-16 15:12:40'),
(7, 'ch_18MsPnKZSDHTJIlvZjm51iOp', 30, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '29.99', '4.50', '34.49', '1 item from Moss shop.', 'charge', '2016-06-16 16:47:40'),
(8, 'ch_18MsRVKZSDHTJIlvz5p9a1nB', 31, 'Feifei GU', 'mossgreen@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '22.00', '3.30', '25.30', '1 item from Moss shop.', 'charge', '2016-06-16 16:49:25'),
(9, 'ch_18MsWkKZSDHTJIlvnhv7S836', 32, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '19.98', '3.00', '22.98', '1 item from Moss shop.', 'charge', '2016-06-16 16:54:50'),
(10, 'ch_18NA8VKZSDHTJIlvRfBVQRL5', 34, 'Feifei GU', 'asdfasdfasdf@moss.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '217.98', '32.70', '250.68', '10 items from Moss shop.', 'charge', '2016-06-17 11:43:00'),
(11, 'ch_18NAiYKZSDHTJIlvGng0cBsn', 35, 'Feifei GU', 'asdfasdfasdf@moss.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '33.00', '4.95', '37.95', '1 item from Moss shop.', 'charge', '2016-06-17 12:20:15'),
(12, 'ch_18NArGKZSDHTJIlvjLCbfAVJ', 36, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '33.00', '4.95', '37.95', '1 item from Moss shop.', 'charge', '2016-06-17 12:29:14'),
(13, 'ch_18NAt3KZSDHTJIlvOsBYDdLs', 37, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '22.00', '3.30', '25.30', '1 item from Moss shop.', 'charge', '2016-06-17 12:31:05'),
(14, 'ch_18NB3fKZSDHTJIlvFSK95QQ3', 38, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '19.98', '3.00', '22.98', '1 item from Moss shop.', 'charge', '2016-06-17 12:42:03'),
(15, 'ch_18NB7XKZSDHTJIlvsBhjTvFp', 39, 'Feifei GU', 'admin@admin.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asd', '1026', 'New Zealand', '22.22', '3.33', '25.55', '1 item from Moss shop.', 'charge', '2016-06-17 12:46:04'),
(16, 'ch_18NBCXKZSDHTJIlve10zGMdh', 41, 'Feifei GU', 'unfeifei@gmail.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '45.90', '6.89', '52.79', '1 item from Moss shop.', 'charge', '2016-06-17 12:51:14'),
(17, 'ch_18NBGGKZSDHTJIlv78vk7xIs', 42, 'Feifei GU', 'admin@admin.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'asdf', '1026', 'New Zealand', '33.00', '4.95', '37.95', '1 item from Moss shop.', 'charge', '2016-06-17 12:55:05'),
(18, 'ch_18NBKNKZSDHTJIlvaQVnoR4q', 43, 'Feifei GU', 'admin@admin.com', '72A blockhouse Bay rd.', 'avondale, AKL', 'akl', 'Please select city or region', '1026', 'New Zealand', '33.00', '4.95', '37.95', '1 item from Moss shop.', 'charge', '2016-06-17 12:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `join_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `permissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phonetype`, `phonenumber`, `join_date`, `last_login`, `permissions`) VALUES
(2, 'Test Testerson', 'test@test.com', 'password', '', '', '2016-06-11 18:45:08', '2016-06-11 00:00:00', 'editor'),
(4, 'admin moss', 'admin@admin.com', '$2y$10$wjqH6e1tqiyFBr8UTudpyO0u0u5Dyrti5sqmbeyucxZYYjY2hThrS', '000000', '000000', '2016-06-11 19:10:09', '2016-06-17 07:29:51', 'editor,admin'),
(5, 'moss green', 'moss@moss.com', '$2y$10$Zx/6t8NMn7S9rd9B63C7r.KVLsXUzgmqvDmXaq.I4SxhgXXXgRBie', '000000', '000000', '2016-06-11 21:02:08', '2016-06-11 11:05:28', 'editor'),
(21, 'moss green', 'mossgreen@gmail.com', '$2y$10$LgvAW4YkF/GC8bpLI2Y/i.1yPje9UC76D5o0C7itlxjOIj/V5CSGi', 'M', '223885650', '2016-06-16 15:10:36', '2016-06-16 07:07:41', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
