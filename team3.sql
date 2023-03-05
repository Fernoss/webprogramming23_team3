-- -- phpMyAdmin SQL Dump
-- -- version 5.2.0
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: db
-- -- Generation Time: Feb 20, 2023 at 12:17 PM
-- -- Server version: 8.0.32
-- -- PHP Version: 8.0.19

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `team3`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `fahimeh_news`
-- --

-- CREATE TABLE `fahimeh_news` (
--   `newsId` int NOT NULL,
--   `title` varchar(60) NOT NULL,
--   `link` varchar(100) NOT NULL,
--   `description` text NOT NULL,
--   `logId` int NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `joonas_carousel`
-- --

-- CREATE TABLE `joonas_carousel` (
--   `carouselId` int NOT NULL,
--   `location` varchar(60) NOT NULL,
--   `link` varchar(100) NOT NULL,
--   `description` varchar(300) NOT NULL,
--   `image` varchar(255) NOT NULL,
--   `loginId` int NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `shammi_linkinfo`
-- --

-- CREATE TABLE `shammi_linkinfo` (
--   `linkId` int NOT NULL,
--   `orgName` varchar(60) NOT NULL,
--   `url` varchar(150) NOT NULL,
--   `image` varchar(150) NOT NULL,
--   `distance` decimal(4,0) NOT NULL,
--   `description` varchar(300) NOT NULL,
--   `logId` int NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `shammi_login`
-- --

-- CREATE TABLE `shammi_login` (
--   `logId` int NOT NULL,
--   `fName` varchar(60) NOT NULL,
--   `lName` varchar(60) NOT NULL,
--   `email` varchar(60) NOT NULL,
--   `password` varchar(60) NOT NULL,
--   `category` int NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `viktoria_newsletter`
-- --

-- CREATE TABLE `viktoria_newsletter` (
--   `newsLetterId` int NOT NULL,
--   `newsLetter` varchar(60) NOT NULL,
--   `subscribe` int NOT NULL,
--   `logId` int NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `fahimeh_news`
-- --
-- ALTER TABLE `fahimeh_news`
--   ADD PRIMARY KEY (`newsId`);

-- --
-- -- Indexes for table `joonas_carousel`
-- --
-- ALTER TABLE `joonas_carousel`
--   ADD PRIMARY KEY (`carouselId`);

-- --
-- -- Indexes for table `shammi_linkinfo`
-- --
-- ALTER TABLE `shammi_linkinfo`
--   ADD PRIMARY KEY (`linkId`);

-- --
-- -- Indexes for table `shammi_login`
-- --
-- ALTER TABLE `shammi_login`
--   ADD PRIMARY KEY (`logId`);

-- --
-- -- Indexes for table `viktoria_newsletter`
-- --
-- ALTER TABLE `viktoria_newsletter`
--   ADD PRIMARY KEY (`newsLetterId`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `fahimeh_news`
-- --
-- ALTER TABLE `fahimeh_news`
--   MODIFY `newsId` int NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `joonas_carousel`
-- --
-- ALTER TABLE `joonas_carousel`
--   MODIFY `carouselId` int NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `shammi_linkinfo`
-- --
-- ALTER TABLE `shammi_linkinfo`
--   MODIFY `linkId` int NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `shammi_login`
-- --
-- ALTER TABLE `shammi_login`
--   MODIFY `logId` int NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `viktoria_newsletter`
-- --
-- ALTER TABLE `viktoria_newsletter`
--   MODIFY `newsLetterId` int NOT NULL AUTO_INCREMENT;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
