-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 09:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(40) NOT NULL,
  `title` varchar(60) NOT NULL,
  `price` int(40) NOT NULL,
  `quantity` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `title`, `price`, `quantity`) VALUES
(1, 'Cheese Vegitable', 40, 2),
(2, 'Mixed Vegitables', 55, 2),
(3, 'Mushroom & Broc', 48, 2),
(4, 'mixed roll combo', 40, 2),
(5, 'Vegitable spaghetti', 40, 2),
(6, 'String bean', 50, 2),
(7, 'Beef chops', 60, 2),
(10, 'Tenderloin steak', 55, 2),
(12, 'BBQ Beef & sides', 68, 2),
(13, '', 0, 0),
(14, '', 0, 0),
(15, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `price`, `status`, `image`) VALUES
(1, 'steak ', '58.00', 'true', 'menun.jpg'),
(2, 'stew ', '55.00', 'true', 'F-6.jpg'),
(4, 'salad ', '45.00', 'false', 'Cm-1.jpg'),
(5, 'mixed veg ', '55.00', 'true', 'Vg-1.jpg'),
(6, 'chicken breast', '58.00', 'true', 'B8.jpg'),
(7, 'mutton stew', '63.00', 'true', 'C2-2.jpg'),
(8, 'steamed veg', '55.00', 'true', 'F-12.jpg'),
(9, 'sweet meat', '60.00', 'true', 'B10.jpg'),
(10, 'means&veg', '53.00', 'true', 'C12.jpg'),
(11, 'sweet chicken', '55.00', 'true', 'C15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'mulondo', 'mutoti', 'mutondi@gmail'),
(3, 'rodney', 'ravhura', 'ravhura@gmail.com'),
(4, 'rodney', 'ravhura', 'ravhura@gmail.com'),
(5, 'rodney', 'ravhura', 'ravhura@gmail.com'),
(6, 'rodney', 'ravhura', 'ravhura@gmail.com'),
(7, 'rodney', 'ravhura', 'ravhura@gmail.com'),
(9, 'Takie', 'Mbulaheni', 'mbulahenitg02@gmail.com'),
(10, 'Takie', 'Mbulaheni', 'mbulahenitg02@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `title` varchar(40) NOT NULL,
  `menu_Id` varchar(30) NOT NULL,
  `image` varchar(60) NOT NULL,
  `price` varchar(40) NOT NULL,
  `description` varchar(400) NOT NULL,
  `special` tinyint(2) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `type` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `menu_Id`, `image`, `price`, `description`, `special`, `status`, `type`) VALUES
(1, 'Cheese Vegetable', 'V01', 'D6.jpg', '40.00', 'Brocolli, beans, and shredded cheese served in a crispy shell with your choice of sour cream and salsa. Accompanied by  soup and a chunk ', 0, 1, 2),
(2, 'Mixed Vegetable', 'V02', 'Vg-1.jpg', ' 55.00', 'broccoli, carrots, baby corn, water chestnuts, mushrooms, and green beans sauteed in brown sauce', 0, 0, 2),
(3, 'Mushroom&Broc', 'V03', 'VG5.jpg', '48.00', 'Low temperature cooked broccoli sauteed with fresh mushrooms deeped in white sauce', 0, 1, 2),
(4, 'Mixed roll combo', 'V04', 'SS1.jpg', '40.00', 'sliced cucumber sautéed with onions and green peppers in sauce Carrots,  peppers, onion, and snap mushroom sautéed in sesame oil. ', 1, 1, 2),
(5, 'Vegetable spaghetti', 'V05', 'NF10.jpg', '40.00', 'broccoli, snow peas, onions, and bean sprouts sauteed with spaghetti noodles in sauce', 1, 1, 2),
(6, 'String bean', 'V06', 'F-12.jpg', '50.00', 'Slow cooked,  juicy green veggies boiled at a low temperature to get crisp bright veggies, topped with abit of livers  and the Chef\'s special marinade sauce.  peppers, onion, and snap mashroom sautéed in sesame oil. ', 0, 1, 2),
(7, 'Beef chops', 'V07', 'menun.jpg', '60.00', 'marinated grilled roast barbeque  beef ribs, juicy beef meat piled high in a fresh bun, topped with homemade coleslaw and the Chef\'s special BBQ sauce.', 0, 1, 0),
(8, 'Beef ribs', 'V08', 'B14.jpg', '60.00', 'marinated grilled roast barbeque  beef ribs, juicy beef meat piled high in a fresh bun, topped with homemade coleslaw and the Chef\'s special BBQ sauce.', 0, 1, 0),
(9, 'Flank steak', 'V09', 'dsteak.jpg', '65.00', 'Excellent steak pair with dry rub\r\nender strips of grilled meat, onion, and pepper, Topped with shredded cheddar and a Tex-Mex sauce and mushrooms, and then baked in the oven.', 0, 1, 0),
(10, 'Tenderloin  steak', 'V10', 'steakrt.jpg', '55.00', 'Slowly` cooked, chicken meat tossed in African spice, topped with homemade coleslaw and the Chef\'s special  sauce. which  give tender taste to the meat', 0, 1, 0),
(11, 'Chuck-eye steak', 'V11', 'steakrec.jpg', '65.00', 'Marinated steak great with sauces or flavoured butter to bring out tender special occasion steak to taste', 0, 1, 0),
(12, 'BBQ Beef & sides', 'V12', 'B15.jpg', '68.00', '2 spring egg rolls, 2 fried dumplings, 2 BBQ ribs, 2 beef toast chefs recommendation.', 0, 0, 0),
(13, 'Curry Beef', 'V13', 'C2-2.jpg', '50.00', 'Beef sauteed with ionions, carrots, and broccoli.Chunks of seasoned beef and then cooked with potatoes and  carrots', 1, 1, 1),
(14, 'Beef &Garlic sauce', 'V14', 'F-2.jpg', '64.00', 'Veal sauteed with broccoli, mushrooms, and carrots in spicy Chunks of seasoned beef cooked with potatoes, carrots, corn, onion, and peas in a full-flavored sauce', 1, 1, 1),
(15, 'Orange Beef', 'V15', 'B10.jpg', '53.00', 'Chunks of beef, breaded and deep-fried with sauce containing orange peels; white meat by request for for large & extra', 0, 0, 1),
(16, 'Beef with eggplant', 'V16', 'F-6.jpg', '70.00', 'Cubed beef, eggplant, and zucchini, stewed with tomato, chopped onion and pepper, chilies, and seasoned with cumin, coriander, garlic  and other spices.', 1, 1, 1),
(17, 'Broccoli Beef', 'V17', 'Dk-3.jpg', '65.00', 'This is a hearty and flavourful vegetable \r\nbeef stew  with broccoli, carrots, and a thickened broth.  The condensed beef broth gives it more beef flavour than just plain water or stock', 1, 1, 1),
(18, 'Sessame Beef', 'V18', 'D3.jpg', '52.00', 'Chunks of beef, breaded and deep-fried with  sesame seed  and browned sauce\r\n', 0, 1, 1),
(19, 'Salad', 'V19', 'Cm-1.jpg', '45.00', 'Salads are a great way to add healthy touch to your lunch time and dinner, combined with cabbage, onion, garlic powder and black pepper', 1, 0, 2),
(20, 'Sweet chicken', 'V20', 'C15.jpg', '48.00', 'A mixture of barbecue sauce and honey mustered which makes chicken fries crispy, crunchy, moist and full of flavour. they are a guaranteed hit in making meal time fun', 0, 0, 3),
(21, 'Chicken pepper', 'V21', 'C19.jpg', '59.00', 'Chicken pepper is a delicious aromatic  hot and spicy dish to serve with any dish of your choice, a great to enjoy with family and friends', 1, 0, 3),
(22, 'Fried chicken', 'V22', 'B13.jpg', '56.00', 'Crispy tenderly cooked,  juicy chicken meat piled high in a fresh bun, topped with homemade coleslaw and the Chef\'s special tossed with pehul spice hand-pulled juicy beef ', 1, 0, 3),
(23, 'Full chicken', 'V23', 'Dk-1.jpg', '70.00', 'Roasted  chicken meat tossed in African spice, topped with homemade coleslaw and the Chef\'s special  sauce. which  give tender taste to the meat', 1, 0, 3),
(24, 'Chicken breast', 'V24', 'B8.jpg', '60.00', 'Particularly a healthy part as they are low in fat \r\n and good source of protein. deliciously seasoned before being cooked in the oven to produce \r\n\r\njuicy and tender taste\r\n', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Firstname`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id` (`id`),
  ADD KEY `Menu-id` (`menu_Id`),
  ADD KEY `Image` (`image`),
  ADD KEY `Price` (`price`),
  ADD KEY `Description` (`description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
