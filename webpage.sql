-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 06:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE `webpage` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `title_of_page` varchar(255) DEFAULT NULL,
  `subtitle_of_page` varchar(255) DEFAULT NULL,
  `about_you` varchar(255) DEFAULT NULL,
  `phone_num` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type_of_product` varchar(255) DEFAULT NULL,
  `image_url_1` varchar(255) DEFAULT NULL,
  `desc_of_service_or_product_1` varchar(255) DEFAULT NULL,
  `image_url_2` varchar(255) DEFAULT NULL,
  `desc_of_service_or_product_2` varchar(255) DEFAULT NULL,
  `image_url_3` varchar(255) DEFAULT NULL,
  `desc_of_service_or_product_3` varchar(255) DEFAULT NULL,
  `desc_of_company` varchar(255) DEFAULT NULL,
  `linkedin` varchar(30) DEFAULT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `twitter` varchar(30) DEFAULT NULL,
  `google` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`id`, `cover_image`, `title_of_page`, `subtitle_of_page`, `about_you`, `phone_num`, `location`, `type_of_product`, `image_url_1`, `desc_of_service_or_product_1`, `image_url_2`, `desc_of_service_or_product_2`, `image_url_3`, `desc_of_service_or_product_3`, `desc_of_company`, `linkedin`, `facebook`, `twitter`, `google`) VALUES
(1, 'https://www.newswireonline.com/wp-content/uploads/2020/08/horizontal-digital-jaipur.jpg', 'Leoron', 'Institute for Professional Development', 'We are known through the GCC and EMEA region as best providers when it comes to professional development.', '+966 555 40 65', 'Riyadh, KSA', 'Services', 'https://cdn.ymaws.com/gccbdi.org/resource/resmgr/chairman_summit/IMGL8768.png', 'Professional training and consultancy services provided worldwide.', 'https://www.eliteeducationmagazine.com/wp-content/uploads/2021/06/Blue-Ocean-Academy-scaled.jpg', 'Gain the most valuable certificates which can help you grow professionally.', 'https://wave-mena.com/wp-content/uploads/2020/01/slider2-2048x1367.jpg', 'earn and grow through the experience and knowledge from our expert trainers.', 'Choose your career path and grow with us.', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(2, 'https://getwallpapers.com/wallpaper/full/8/c/1/146876.jpg', 'Bosch', 'Welcome to our company website', 'We are world wide acknowledged company for having the best products.', '078 366 890', 'Skopje, Macedonia', 'Products', 'https://www.powerhouse.je/images/bosch-sms25ab00g-activewater-60cm-12-place-setting-a-freestanding-dishwasher-black-p12407-26335_image.jpg', 'Feel free to look our bestselling products.', 'https://www.homeclearance.com.au/wp-content/uploads/2018/02/BGL3PWERAU.jpg', 'Feel free to look our bestselling products.', 'http://www.kitchen-craft.net/wordpress/wp-content/uploads/2015/05/Serie_8_Oven_Range-BOSCH-new-range.jpg', 'Feel free to look our bestselling products.', 'If you cannot manage to look through our website, kindly approach our contact center, they can help you anytime!', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webpage`
--
ALTER TABLE `webpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webpage`
--
ALTER TABLE `webpage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
