-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 11:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(155) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `role_id` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(155) NOT NULL,
  `job_id` int(155) DEFAULT NULL,
  `user_id` int(155) DEFAULT NULL,
  `application_date` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(155) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `industry_id` int(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `since` int(200) NOT NULL,
  `Verified_by_admin` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` int(200) DEFAULT NULL,
  `company_created_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(155) NOT NULL,
  `degree` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `industry_id` int(155) NOT NULL,
  `industry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(155) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `job_type` int(155) NOT NULL,
  `positions` varchar(200) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `company_id` int(155) DEFAULT NULL,
  `location` varchar(200) NOT NULL,
  `gender` varchar(155) NOT NULL,
  `age` varchar(155) NOT NULL,
  `education` varchar(200) NOT NULL,
  `salary_init` int(155) NOT NULL,
  `salary_final` int(155) NOT NULL,
  `salary_period` varchar(220) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `requirement_skill` varchar(200) NOT NULL,
  `post_date` date NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(155) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`) VALUES
(1, 'user'),
(2, 'employeer'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(155) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(155) NOT NULL,
  `email` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `contact` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(110) DEFAULT NULL,
  `postal_code` int(200) NOT NULL,
  `profession` text NOT NULL,
  `martial_status` varchar(200) NOT NULL,
  `career_level` varchar(200) NOT NULL,
  `experience_years` int(200) NOT NULL,
  `education` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `personal_biodata` text NOT NULL,
  `cv_upload` text NOT NULL,
  `profile_pic` text NOT NULL,
  `post` varchar(200) NOT NULL,
  `role_id` int(200) DEFAULT 1,
  `is_update` int(1) NOT NULL DEFAULT 0,
  `user_created_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `password`, `email`, `first_name`, `last_name`, `contact`, `address`, `city`, `postal_code`, `profession`, `martial_status`, `career_level`, `experience_years`, `education`, `date_of_birth`, `personal_biodata`, `cv_upload`, `profile_pic`, `post`, `role_id`, `is_update`, `user_created_date_time`) VALUES
(5, 'haya', '123', 'haya@gmail.com', '', '', 43764836, '', NULL, 0, '', '', '', 0, '', '0000-00-00', '', '', '', '', NULL, 0, '2023-07-27 16:42:51'),
(6, 'maryam', '1234', 'maryam12@gmail.com', '', '', 2147483647, '', NULL, 0, '', '', '', 0, '', '0000-00-00', '', '', '', '', NULL, 0, '2023-07-30 19:24:03'),
(7, 'maya', '1234', 'maya@gmail.com', '', '', 2147483647, '', NULL, 0, '', '', '', 0, '', '0000-00-00', '', '', '', '', NULL, 0, '2023-08-01 16:10:30'),
(8, 'iram', '123', 'iram@gmail.com', '', '', 743786437, '', NULL, 0, '', '', '', 0, '', '0000-00-00', '', '', '', '', NULL, 0, '2023-08-01 16:22:07'),
(9, 'laila', '123', 'laila123@gmai.com', 'John', 'Doe', 4765767, '123 Main St', 'SomeCity', 12345, 'Developer', 'Married', 'Senior', 10, 'PhD', '1990-01-01', 'Some bio', '', '', '', 1, 1, '2023-08-01 17:45:19'),
(10, 'mmm', '123', 'm@gmail.com', '1', '1', 2147483647, '1', 'aa', 1, 'ss', 'ss', 'ss', 0, 'ss', '0000-00-00', '1', '', '', '', 1, 1, '2023-08-26 17:23:30'),
(11, 'Ahmed', 'ahmed', 'ahmed@gmail.com', 'Ahmed', 'Raza', 3123123, 'Ahmed', 'karachi', 7960, 'accountant', 'single', 'expert', 0, 'Matriculation', '2023-08-25', 'hiahs', '', '', '', 1, 1, '2023-08-27 15:37:42'),
(12, 'Ahmii', 'ahmed', 'bablooddr2@gmail.com', '', '', 13131, '', NULL, 0, '', '', '', 0, '', '0000-00-00', '', '', '', '', 1, 0, '2023-08-29 01:58:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `application_ibfk_2` (`job_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `industry_id` (`industry_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`industry_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `industry_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(155) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`industry_id`) REFERENCES `industry` (`industry_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
