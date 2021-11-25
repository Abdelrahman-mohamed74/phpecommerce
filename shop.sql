-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 10:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quenty` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderData` varchar(200) NOT NULL,
  `orderShooped` varchar(200) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `productDes` varchar(5000) NOT NULL,
  `productImg` varchar(300) NOT NULL,
  `productPrice` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDes`, `productImg`, `productPrice`) VALUES
(1, 'Red Hooded Top', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis', 'images/product/55.jpg', '45.00$'),
(2, 'Black Watch', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/68.jpg', '20.00$'),
(3, 'Appel TV', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/60.jpg', '300.00$'),
(4, 'Head phone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/58.jpg', '40.00$'),
(5, 'White labtop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/65.jpg', '350.00$'),
(6, 'Bink Hooded', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis', 'images/product/54.jpg', '29.00$'),
(7, 'Nickless', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/10.jpg', '3.00$'),
(8, 'White shoose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/25.jpg', '20.00$'),
(9, 'DarkRed hooded', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/24.jpg', '35.00$'),
(10, 'Blue Shoose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/01.jpg', '25.00$'),
(11, 'Yellow Watch', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis', 'images/product/66.jpg', '25.00$'),
(12, 'Green Watch', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/67.jpg', '20.00$'),
(13, 'Appel Phone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/63.jpg', '300.00$'),
(14, 'Apple Siri', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/61.jpg', '500.00$'),
(15, 'White Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/64.jpg', '30.00$'),
(16, 'Blue Hooded', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis', 'images/product/51.jpg', '29.00$'),
(17, 'bikini', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/07.jpg', '10.00$'),
(18, 'Blue T-shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/17.jpg', '30.00$'),
(19, 'Orange Watch', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/70.jpg', '35.00$'),
(20, 'Short Jensen', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, sit dicta officiis minus debitis, dolores at ad maiores voluptas nesciunt eius accusamus quas! Neque asperiores autem omnis dicta quam expedita.', 'images/product/03.jpg', '15.00$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Code` varchar(20) DEFAULT '0',
  `Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `Password`, `Code`, `Image`) VALUES
(1, 'bodi', 'bodi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', NULL),
(2, 'abdelrahman', 'a64ae163b1@emailnax.com', 'e10adc3949ba59abbe56e057f20f883e', '768JDwQ', NULL),
(3, '3boood', 'ahmed@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', NULL),
(4, 'ahmed', '3bod@gamil.com', 'e10adc3949ba59abbe56e057f20f883e', '0', NULL),
(5, 'boooooodi', 'boooooodi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', NULL),
(6, 'alo', 'alo@gmail.com', '00c66aaf5f2c3f49946f15c1ad2ea0d3', '0', NULL),
(7, 'basma', 'sdsds@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD UNIQUE KEY `orderID` (`orderID`),
  ADD KEY `orderID_2` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userid` (`UserId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
