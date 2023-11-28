-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 02:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signature_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `price` bigint(12) NOT NULL,
  `qty` bigint(12) NOT NULL,
  `total` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `p_id`, `u_id`, `price`, `qty`, `total`) VALUES
(10, 47, 'John', 400, 2, 800);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` bigint(12) NOT NULL,
  `p_id` bigint(12) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `p_id`, `u_id`, `name`, `mobile`, `email`, `location`) VALUES
(24, 47, 'John', 'John', 456655889, 'john@gmail.com', '45,sesame street,colombo');

-- --------------------------------------------------------

--
-- Table structure for table `food_cat`
--

CREATE TABLE `food_cat` (
  `id` bigint(12) NOT NULL,
  `catnm` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `food_cat`
--

INSERT INTO `food_cat` (`id`, `catnm`, `sub_cat`) VALUES
(60, 'Main_Dishes', 'Vegetarian'),
(61, 'Main_Dishes', 'Seafood'),
(62, 'Main_Dishes', 'Meat'),
(63, 'Main_Dishes', 'Fast food'),
(64, 'Main_Dishes', 'Paste/noodles'),
(65, 'Beverages', 'Fruit juices'),
(66, 'Beverages', 'Milkshakes'),
(67, 'Beverages', 'Tea/Coffee'),
(68, 'Deserrts', 'Sweets'),
(69, 'Deserrts', 'Fruits'),
(70, 'Deserrts', 'Ice cream'),
(71, 'Kids_Special', 'Appetizers'),
(72, 'Main_Dishes', 'Drinks'),
(73, 'Kids_Special', 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `food_parcel`
--

CREATE TABLE `food_parcel` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `food_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(12) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(16, 'img/beef.jpg'),
(17, 'img/Bir.jpg'),
(18, 'img/len.webp'),
(19, 'img/fish.jpg'),
(20, 'img/noodle.jpg'),
(21, 'img/Crab.jpg'),
(22, 'img/len.webp'),
(23, 'img/pasta.webp'),
(24, 'img/Hop.jpg'),
(25, 'img/Hoppers.webp'),
(26, 'img/pittu.webp'),
(27, 'img/coffee.jpg'),
(28, 'img/Donut.jpg'),
(29, 'img/Fruit.jpg'),
(30, 'img/lassi.JPG'),
(31, 'img/burger.avif'),
(32, 'img/Veg.jpg'),
(33, 'img/Yellow.jpg'),
(34, 'img/Rose lassi.jpg'),
(35, 'img/Ro.jpg'),
(36, 'img/Jalebi.jpeg'),
(37, 'img/lassi.JPG'),
(38, 'img/choc.webp'),
(39, 'img/fru.jpg'),
(40, 'img/con.jpg'),
(41, 'img/tea.jpg'),
(42, 'img/watermelon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(12) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_cat` varchar(120) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` bigint(6) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `sub_cat`, `title`, `description`, `price`, `image`) VALUES
(47, 'Main_Dishes', 'Vegetarian', 'Lentil Soup', ' Healthy Lentil Soup           ', 400, 'mimg/len.webp'),
(48, 'Main_Dishes', 'Meat', 'Chicken Biryani', '         Spicy Chicken Biryani               ', 800, 'mimg/Bir.jpg'),
(49, 'Main_Dishes', 'Meat', 'Roast Chicken', 'Served with orange slices            ', 1990, 'mimg/Ro.jpg'),
(50, 'Main_Dishes', 'Seafood', 'Fish BBQ', '                       Smoked to perfection ', 890, 'mimg/fish.jpg'),
(51, 'Main_Dishes', 'Seafood', 'Crab stew', '          Sri lankan crab special              ', 990, 'mimg/Crab.jpg'),
(52, 'Main_Dishes', 'Fast food', 'Burgers', '              Grab a Burger!!          ', 790, 'mimg/burger.avif'),
(53, 'Main_Dishes', 'Paste/noodles', 'Spicy Noodles ', '        Srilankan style                 ', 650, 'mimg/noodle.jpg'),
(54, 'Main_Dishes', 'Vegetarian', 'Native pittu', '                Srilankan Pittu        ', 399, 'mimg/pittu.webp'),
(55, 'Main_Dishes', 'Paste/noodles', 'Spicy pasta', '             Hot and Spicy    ', 799, 'mimg/pasta.webp'),
(56, 'Main_Dishes', 'Vegetarian', 'Veggie Biryani', '                 For vegetarians!!       ', 690, 'mimg/Veg.jpg'),
(57, 'Main_Dishes', '', 'SriLankan String Hoppers', '                       Native Food!! ', 490, 'mimg/Hop.jpg'),
(58, 'Main_Dishes', 'Vegetarian', 'Yellow Rice', '                    Tasty yellow Rice    ', 590, 'mimg/Yellow.jpg'),
(59, 'Beverages', 'Fruit juices', 'Sweet  Lassi', '                Our Specials     ', 450, 'mimg/Rose lassi.jpg'),
(60, 'Beverages', 'Fruit juices', 'Passion Fruit', '             Sweet & Sour           ', 350, 'mimg/Fruit.jpg'),
(61, 'Beverages', 'Tea/Coffee', 'Sri Lankan Tea', '                    The taste of Sri lanka    ', 250, 'mimg/tea.jpg'),
(62, 'Deserrts', 'Ice cream', 'Choco Ice-Cream', '                       Milky & Choclaty', 450, 'mimg/choc.webp'),
(63, 'Deserrts', 'Sweets', 'Jalebi', '                        Sweet Jalebi', 200, 'mimg/Jalebi.jpeg'),
(64, 'Kids_Special', 'Appetizers', 'Donuts', '                        For Kids!', 200, 'mimg/Donut.jpg'),
(65, 'Kids_Special', 'Desserts', 'Ice cream cone', '              Cone Lovers       ', 230, 'mimg/con.jpg'),
(66, 'Deserrts', 'Fruits', 'Fruit Salad', '             9 fruits included           ', 650, 'mimg/fru.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(12) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userid`, `password`, `email`) VALUES
(7, 'robo', 'robo', 'robo@gmail.com'),
(8, 'viss', 'viss', 'viss@gmail.com'),
(9, 'John', '123', 'gfffsd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(40) NOT NULL,
  `time` time(2) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=dec8 COLLATE=dec8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `description`) VALUES
(5, 'Heshan Bandara', 'Exellent', 'The best Restaurant in Colombo'),
(6, 'Deshan Himala', 'Exellent', 'Great customer service'),
(7, 'Adan', 'Very Poor', '						I love this restaurant			');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `password`) VALUES
('staff', 'staff123'),
('staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_cat`
--
ALTER TABLE `food_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `food_cat`
--
ALTER TABLE `food_cat`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
