-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 01:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebrandcollective`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(255) NOT NULL,
  `color` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `shoe_type` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `amount` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `product`, `quantity`, `price`, `color`, `brand`, `shoe_type`, `size`, `amount`) VALUES
(33, '17', 28, 'Nike Dunk Low LX', 1, 4439, 'default', 'Nike', 'Mens', 'US 7.5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` bigint(255) NOT NULL,
  `date_ordered` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(500) NOT NULL,
  `shipping_fee` int(11) NOT NULL,
  `total_amount` varchar(500) NOT NULL,
  `courier` varchar(100) NOT NULL DEFAULT 'J&T Express',
  `order_status` varchar(255) NOT NULL DEFAULT 'A' COMMENT 'A-Active G-Confirmed C-Cancelled',
  `confirmation_date` datetime DEFAULT NULL,
  `tracking_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`order_id`, `user_id`, `product`, `quantity`, `price`, `date_ordered`, `payment_method`, `shipping_fee`, `total_amount`, `courier`, `order_status`, `confirmation_date`, `tracking_number`) VALUES
(1, 20, 'Nike Dunk Retro', 20, 129900, '2024-06-02 20:48:35', 'Cod', 50, '129950', 'J&T Express', 'G', '2024-06-03 20:50:16', 'qFvnlMl47T'),
(2, 11, 'Nike Zoom Vomero 5', 3, 26685, '2023-06-03 20:52:35', 'Cod', 50, '26735', 'J&T Express', 'G', '2024-06-03 20:52:56', '72Hz2lEFYK'),
(3, 11, 'Sapatos ni Jordan', 12, 51540, '2024-06-03 20:57:46', '', 0, '51540', 'J&T Express', 'C', NULL, 's545PIAWuT'),
(4, 6, 'Nike Dunk Low LX', 1, 4439, '2024-06-04 00:05:35', 'Cod', 50, '4489', 'J&T Express', 'C', NULL, 'hB2QBEQp14'),
(5, 6, 'Nike Dunk Retro', 1, 6495, '2024-06-04 01:32:55', 'Cod', 50, '6545', 'J&T Express', 'C', NULL, 'VAiAOo5MYc');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_rating` int(11) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`user_id`, `product_id`, `product_rating`, `comments`, `feedback_date`) VALUES
(1, 1, 5, 'Maganda sya d promise', '2024-03-05'),
(2, 3, 5, 'MAGANDA hehe', '2024-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `date_added` date NOT NULL,
  `updated_date` date NOT NULL,
  `discontinued_date` date NOT NULL,
  `stocks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `date_added`, `updated_date`, `discontinued_date`, `stocks`) VALUES
(1, '2024-03-07', '0000-00-00', '0000-00-00', 15),
(2, '2024-03-07', '0000-00-00', '0000-00-00', 10),
(3, '2024-03-05', '0000-00-00', '0000-00-00', 20),
(4, '2024-03-30', '0000-00-00', '0000-00-00', 10),
(5, '2024-03-24', '0000-00-00', '0000-00-00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `color` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `shoe_type` varchar(50) NOT NULL,
  `shoe_brand` varchar(50) NOT NULL,
  `stocks` int(11) NOT NULL,
  `stocks_history` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_status` varchar(50) NOT NULL DEFAULT 'A',
  `image_path` varchar(250) NOT NULL,
  `arrival` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `color`, `size`, `shoe_type`, `shoe_brand`, `stocks`, `stocks_history`, `product_status`, `image_path`, `arrival`) VALUES
(1, 'Nike Dunk Low Retro', '6494', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Nike', 24, '2024-06-04 01:32:55', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d01ef37b-c14a-4edd-8787-534f5732294c/dunk-low-retro-shoe-66RGqF.png', ''),
(2, 'Nike Zoom Vomero 5', '8895', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10 , US 11, US 12, US 1', 'Mens', 'Nike', 20, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c1661989-40b0-44dc-8afc-b4799c8f044f/zoom-vomero-5-shoes-8m9brL.png', ''),
(3, 'Nike Air Max Plus 3', '5495', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Nike', 17, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/91886090-edd6-4468-b59b-fca498da0a0d/air-max-plus-3-shoes-HtMt7V.png', ''),
(4, 'Nike P-6000', '6195', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Nike', 20, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e3cc2305-65bb-4824-b4bd-9474386f6656/p-6000-shoes-5qgkXp.png', ''),
(5, 'NB 1906R Grey Days', '10959', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'NewBalance', 20, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/m1906rgr_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(6, 'NB 530', '5756', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'NewBalance', 18, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/mr530ra_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(7, 'Numeric Brandon Westgate 508', '4900', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'NewBalance', 15, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/nm508ony_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(8, 'NB USA 990v6', '11455', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'NewBalance', 18, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/u990tn6_nb_09_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(9, 'Bad Bunny Last Campus', '9500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Adidas', 19, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7ebe3e43c4bd441bbc314d8e12b2bf68_9366/Bad_Bunny_Last_Campus_Shoes_Brown_ID2534_06_standard.jpg', ''),
(10, 'Adiese', '4700', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Adidas', 13, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7aa0c6a53daa45ffb311ed58c14da54f_9366/Adiease_Shoes_Black_IE3156_06_standard.jpg', ''),
(11, 'CENTENNIAL 85 LOW', '9440', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Adidas', 15, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/023b9a9efda4420fa8bbb036007f0a04_9366/Centennial_85_Low_Shoes_Brown_IE3053_06_standard.jpg', ''),
(12, 'RESPONSE CL', '9500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Adidas', 19, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c8c02e4ecc243f6a7353c858d1cf9d5_9366/Response_CL_Shoes_White_IG6226_06_standard.jpg', ''),
(13, ' Nike Initiator', '4695', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Nike', 16, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/841f15c3-9cfb-4ff1-8c03-85dc5a0d39bd/initiator-shoes-4wMBsb.png', ''),
(14, 'Nike Air Max 90', '4695', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Nike', 19, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d37da77f-07fb-4580-8b50-d68962e59043/air-max-90-shoes-K0mczj.png', ''),
(15, 'Nike Air Max Plus', '9895', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Nike', 18, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d9bd7264-7323-4fa9-922d-fdcb72cd7e74/air-max-plus-shoes-gPHkkf.png', ''),
(16, 'Nike Metcon 9 EasyOn', '7895', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Nike', 17, '2024-06-04 00:55:11', 'A', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/329ea607-4f52-4412-a3bb-4f1b3b767a80/metcon-9-easyon-workout-shoes-zTjxJZ.png', ''),
(17, 'NB Fresh Foam X 860v14', '10500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'NewBalance', 19, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/w860l14_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(18, 'NB 550', '9500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'NewBalance', 15, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/bbw550rb_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(19, 'FuelCell Rebel v4', '10500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'NewBalance', 18, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/wfcxla4_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(20, 'NB 574 Core', '9500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'NewBalance', 20, '2024-06-04 00:55:11', 'A', 'https://nb.scene7.com/is/image/NB/wl574evm_nb_03_i?$pdpflexf2$&qlt=80&fmt=webp&wid=440&hei=440', ''),
(21, 'ASTIR SHOES', '5800', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Adidas', 19, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/dd0f1a5604144addb8b8df7419df0cf4_9366/Astir_Shoes_White_IE9887_06_standard.jpg', ''),
(22, 'SUPERSTAR XLG SHOES', '6500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Adidas', 19, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/076f755a37a14e118ab50553f695611d_9366/Superstar_XLG_Shoes_White_IE2974_06_standard.jpg', ''),
(23, 'FALCON GALAXY SHOES', '5500', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Adidas', 18, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/632c99d7af3f4d47b4743174c4c59aed_9366/Falcon_Galaxy_Shoes_Blue_IG5680_06_standard.jpg', ''),
(24, 'STAN SMITH CS SHOES', '5300', 'White, Black', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Womens', 'Adidas', 19, '2024-06-04 00:55:11', 'A', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e799fb2ef9904f119c8de38deb449213_9366/Stan_Smith_CS_Shoes_Red_IE0446_06_standard.jpg', ''),
(25, 'Nike Air Force Easy On', '5999', 'red, black', 'US7, US9, US10', 'Mens', 'Nike', 18, '2024-06-04 00:55:11', 'A', '../img/air-force-1-07-easyon-shoes-LKXPhZ.png', 'N'),
(27, 'Nike Blazer Low 77', '4295', 'red, black', 'US7, US9, US10', 'Womens', 'Nike', 20, '2024-06-04 00:55:11', 'A', '../img/blazer-low-77-shoes.png', 'N'),
(28, 'Nike Dunk Low LX', '4439', 'default', 'US 7.5, US 8.5, US 9.5, US 10, US 11, US 12, US 12', 'Mens', 'Nike', 19, '2024-06-04 00:55:11', 'A', '../img/dunk-low-lx-shoes-mXmt13.png', 'N'),
(29, 'NikeCourt Legacy', '4295', 'red, black', 'US7, US9, US10', 'Mens', 'Nike', 20, '2024-06-04 00:55:11', 'A', '../img/nikecourt-legacy-shoes-PKg8wX.png', 'N'),
(30, 'NB 1906R', '10996', 'default', 'US7, US9, US10', 'Mens', 'Nike', 20, '2024-06-04 00:55:11', 'A', '../img/m1906ree_nb_03_i.png', 'N'),
(31, 'NB 9060', '8999', 'brown, white', 'US7, US9, US10', 'Mens', 'Nike', 25, '2024-06-04 00:55:11', 'A', '../img/u9060gca_nb_03_i.png', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `product_id` int(11) NOT NULL,
  `product_price` varchar(250) NOT NULL,
  `effectivity_date` date NOT NULL,
  `start_effectivity` date NOT NULL,
  `end_effectivity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`product_id`, `product_price`, `effectivity_date`, `start_effectivity`, `end_effectivity`) VALUES
(1, 'PHP5,495', '2024-03-07', '2024-03-07', '0000-00-00'),
(2, 'PHP5,495', '2024-03-07', '2024-03-07', '0000-00-00'),
(3, 'PHP6,895', '2024-03-05', '2024-03-05', '0000-00-00'),
(4, 'PHP7,395', '2024-03-30', '2024-03-30', '0000-00-00'),
(5, 'PHP5,495', '2024-03-24', '2024-03-24', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(100) NOT NULL,
  `sales_today` int(100) NOT NULL,
  `sales_yesterday` int(100) NOT NULL,
  `sales_this_year` int(100) NOT NULL,
  `sales_last_year` int(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `sales_today`, `sales_yesterday`, `sales_this_year`, `sales_last_year`, `date`) VALUES
(1, 0, 0, 0, 0, '2024-06-02'),
(2, 23985, 6495, 30480, 0, '2024-06-03'),
(3, 23985, 6495, 30480, 0, '2024-06-03'),
(4, 0, 0, 0, 0, '2024-06-03'),
(5, 0, 0, 0, 0, '2024-06-03'),
(6, 129950, 0, 129950, 0, '2024-06-03'),
(7, 156685, 0, 156685, 0, '2024-06-03'),
(8, 129950, 0, 129950, 26735, '2024-06-03'),
(9, 0, 129950, 129950, 26735, '2024-06-03'),
(10, 0, 0, 129950, 26735, '2024-06-03'),
(11, 0, 0, 129950, 26735, '2024-06-03'),
(12, 0, 0, 129950, 26735, '2024-06-03'),
(13, 0, 0, 129950, 26735, '2024-06-03'),
(14, 0, 0, 129950, 26735, '2024-06-03'),
(15, 0, 0, 129950, 26735, '2024-06-03'),
(16, 0, 0, 129950, 26735, '2024-06-03'),
(17, 0, 0, 129950, 26735, '2024-06-03'),
(18, 0, 0, 129950, 26735, '2024-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestion_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `suggestion_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`suggestion_id`, `user_id`, `suggestion`, `suggestion_date`) VALUES
(1, 0, 'Maganda sya', '2024-06-02 15:09:06.595659'),
(2, 0, 'Magandasya', '2024-06-02 15:11:22.322237'),
(3, 0, 'Magandasya', '2024-06-02 15:12:10.286192'),
(4, 0, 'Maganda sya', '2024-06-02 15:13:39.339840'),
(5, 2, 'Magandasya', '2024-06-02 15:14:14.870506'),
(6, 2, 'gwapo ako', '2024-06-02 15:16:15.436666'),
(7, 2, 'gwapo ako', '2024-06-02 15:17:00.382355'),
(8, 6, 'gwapo ako', '2024-06-02 17:32:59.649414');

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

CREATE TABLE `user_acc` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `user_type` char(1) NOT NULL DEFAULT 'C',
  `date_registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_acc`
--

INSERT INTO `user_acc` (`user_id`, `username`, `email`, `user_pass`, `address`, `contact_number`, `user_type`, `date_registered`) VALUES
(1, '', '', '', '', '', 'C', '2024-05-26 16:33:06'),
(2, 'nerodex', 'nerodexter26@gmail.com', 'password', 'Maguiron Guinobatan Albay', '09636558422', 'C', '2024-05-26 16:33:53'),
(3, '', '', '', '', '', 'C', '2024-05-26 17:01:31'),
(4, 'JERE', 'jeremyrellama17@gmail.com', 'test', 'Santisima, Oas, Albay', '09164306847', 'C', '2024-05-26 17:01:50'),
(5, '', '', '', '', '', 'C', '2024-05-27 23:16:30'),
(6, 'Jem', 'jeremyrellama17@gmail.com', 'test', 'Santisima, Oas, Albay', '09164306847', 'C', '2024-05-27 23:16:46'),
(7, '', '', '', '', '', 'C', '2024-05-29 10:52:35'),
(8, 'Jeremy', 'jeremyrellama17@gmail.com', 'test', 'Camagong, Oas, Albay', '09164306847', 'C', '2024-05-29 10:53:03'),
(9, '', '', '', '', '', 'C', '2024-05-31 07:36:20'),
(10, 'Mie', 'jeremyrellama17@gmail.com', 'test', 'Santisima, Oas, Albay', '090909090909', 'C', '2024-05-31 07:36:54'),
(11, 'admin', 'admin@gmail.com', 'admin', 'Maguiron Guinobatan Albay', '09636558422', 'A', '2024-06-02 14:10:24'),
(12, '', '', '', '', '', 'C', '2024-06-02 14:55:46'),
(13, 'kyan', 'officeladymommywithglasses@gmail.com', 'brutalsegs', 'earth', '0101010101010', 'C', '2024-06-02 14:57:26'),
(14, '', '', '', '', '', 'C', '2024-06-03 00:49:23'),
(15, 'test', 'test@gmail.com', '$2y$10$cv6vEJPeuUn/wDtnaserJ.WyQmBS51D1S4RTjkOrCh6aJPK6Lk3Li', 'mabayawas street', '0909012349', 'C', '2024-06-03 18:21:19'),
(16, 'test', 'test1@gmail.com', 'qwerty17', 'mabayawas street', '90902828282', 'C', '2024-06-03 18:23:02'),
(17, 'test1', 'test2@gmail.com', 'pass', 'mabayawas street', '9090900', 'C', '2024-06-03 18:26:30'),
(18, 'jeremy', 'jeremy@gmail.com', 'pass', 'Maguiron Guinobatan Albay', '090976790680520', 'C', '2024-06-03 18:29:09'),
(19, 'marc', 'marc@gmail.com', 'pass', 'Santisima, Oas, Albay', '0910301830183018031', 'C', '2024-06-03 18:32:59'),
(20, 'duduy', 'duduy@gmail.com', 'duduy123', 'Camagong, Oas, Albay', '09123456789', 'C', '2024-06-03 20:44:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestion_id`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestion_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
