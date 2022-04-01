-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 02:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covaxpass_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `citizen_id` int(11) NOT NULL,
  `citizen_fname` varchar(255) NOT NULL,
  `citizen_lname` varchar(255) NOT NULL,
  `citizen_email` varchar(255) NOT NULL,
  `citizen_phnum` varchar(255) NOT NULL,
  `citizen_dob` varchar(255) NOT NULL,
  `citizen_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`citizen_id`, `citizen_fname`, `citizen_lname`, `citizen_email`, `citizen_phnum`, `citizen_dob`, `citizen_address`, `password`, `code`, `created_at`) VALUES
(11, 'Jane', 'Doe', 'dionsingh8@hotmail.com', '18683057922', '2022-02-28', '123', '827ccb0eea8a706c4c34a16891f84e7b', '', '2022-03-30 08:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_photos`
--

CREATE TABLE `citizen_photos` (
  `id` int(11) NOT NULL,
  `citizen_idnum` varchar(255) NOT NULL,
  `citizen_photo` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen_photos`
--

INSERT INTO `citizen_photos` (`id`, `citizen_idnum`, `citizen_photo`, `date_time`) VALUES
(1, '1234567', '1234567-2022.03.30-01-10-05am.png', '2022-03-29 23:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_uploads`
--

CREATE TABLE `citizen_uploads` (
  `file_id` int(11) NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tracing`
--

CREATE TABLE `contact_tracing` (
  `id` int(255) NOT NULL,
  `citizen_email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_tracing`
--

INSERT INTO `contact_tracing` (`id`, `citizen_email`, `company_name`, `company_address`, `date_time`) VALUES
(9, 'dionsingh8@hotmail.com', 'Facebook', 'Silicon Valley', '2022-03-30 12:21:44'),
(10, 'dionsingh8@hotmail.com', 'Facebook', 'Silicon Valley', '2022-03-30 12:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `inquirers`
--

CREATE TABLE `inquirers` (
  `inquirer_id` int(255) NOT NULL,
  `inquirer_fname` varchar(255) NOT NULL,
  `inquirer_lname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `inquirer_email` varchar(255) NOT NULL,
  `inquirer_phnum` varchar(255) NOT NULL,
  `inquirer_dob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquirers`
--

INSERT INTO `inquirers` (`inquirer_id`, `inquirer_fname`, `inquirer_lname`, `company_name`, `company_address`, `inquirer_email`, `inquirer_phnum`, `inquirer_dob`, `password`, `code`, `created_at`) VALUES
(3, 'Mark', 'Zuckerberg', 'Facebook', 'Silicon Valley', 'dionsingh8@hotmail.com', '1868123456789', '2022-03-03', '827ccb0eea8a706c4c34a16891f84e7b', '86e70ce4e7f6e4229b9520fe7604fc6d', '2022-03-30 21:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `inquirer_reports`
--

CREATE TABLE `inquirer_reports` (
  `id` int(255) NOT NULL,
  `inq_fname` varchar(255) NOT NULL,
  `inq_lname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `reported_fname` varchar(255) NOT NULL,
  `reported_lname` varchar(255) NOT NULL,
  `reported_idnum` varchar(255) NOT NULL,
  `citizen_fname` varchar(255) NOT NULL,
  `citizen_lname` varchar(255) NOT NULL,
  `description` tinytext DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquirer_reports`
--

INSERT INTO `inquirer_reports` (`id`, `inq_fname`, `inq_lname`, `company_name`, `company_address`, `reported_fname`, `reported_lname`, `reported_idnum`, `citizen_fname`, `citizen_lname`, `description`, `date_time`) VALUES
(1, 'Mark', 'Zuckerberg', 'Facebook', 'Silicon Valley', 'John', 'Doe', '12345678', 'Jane', 'Doe', 'John stole a QR code from Jane. ', '2022-03-26 00:23:07'),
(2, 'Mark', 'Zuckerberg', 'Facebook', 'Silicon Valley', 'John', 'Doe', '12345678', 'Jane', 'Doe', '1234567890', '2022-03-28 04:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `moh_admin`
--

CREATE TABLE `moh_admin` (
  `mohadmin_id` int(255) NOT NULL,
  `mohadmin_fname` varchar(255) NOT NULL,
  `mohadmin_lname` varchar(255) NOT NULL,
  `mohadmin_email` varchar(255) NOT NULL,
  `mohadmin_phnum` varchar(255) NOT NULL,
  `mohadmin_dob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moh_admin`
--

INSERT INTO `moh_admin` (`mohadmin_id`, `mohadmin_fname`, `mohadmin_lname`, `mohadmin_email`, `mohadmin_phnum`, `mohadmin_dob`, `password`, `code`, `created_at`) VALUES
(1, 'John', 'Doe', 'dionsingh8@hotmail.com', '18681234567', '2022-03-01', '827ccb0eea8a706c4c34a16891f84e7b', '', '2022-03-29 23:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `moh_uploads`
--

CREATE TABLE `moh_uploads` (
  `file_id` int(11) NOT NULL,
  `pdf` text NOT NULL,
  `main_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moh_uploads`
--

INSERT INTO `moh_uploads` (`file_id`, `pdf`, `main_image`) VALUES
(1, 'Digital_COVID-19_Vaccination_Passport.pdf', 'covid-molecule.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vax_admin`
--

CREATE TABLE `vax_admin` (
  `vaxadmin_id` int(255) NOT NULL,
  `vaxadmin_fname` varchar(255) NOT NULL,
  `vaxadmin_lname` varchar(255) NOT NULL,
  `vaxadmin_email` varchar(255) NOT NULL,
  `vaxadmin_phnum` varchar(255) NOT NULL,
  `vaxadmin_dob` varchar(255) NOT NULL,
  `vaxsite_name` varchar(255) NOT NULL,
  `vaxsite_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vax_admin`
--

INSERT INTO `vax_admin` (`vaxadmin_id`, `vaxadmin_fname`, `vaxadmin_lname`, `vaxadmin_email`, `vaxadmin_phnum`, `vaxadmin_dob`, `vaxsite_name`, `vaxsite_address`, `password`, `code`, `created_at`) VALUES
(1, 'John', 'Doe', 'dionsingh8@hotmail.com', '18681234567', '2022-03-03', 'La Brea Health Centre', '123 Street', '25d55ad283aa400af464c76d713c07ad', '', '2022-03-29 01:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `vax_files`
--

CREATE TABLE `vax_files` (
  `file_id` int(11) NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vax_info`
--

CREATE TABLE `vax_info` (
  `id` int(255) NOT NULL,
  `citizen_fname` varchar(255) NOT NULL,
  `citizen_lname` varchar(255) NOT NULL,
  `citizen_email` varchar(255) NOT NULL,
  `citizen_address` varchar(255) NOT NULL,
  `citizen_dob` varchar(255) NOT NULL,
  `vax_status` varchar(255) NOT NULL,
  `vaxsite_name` varchar(255) NOT NULL,
  `num_doses` int(10) NOT NULL,
  `vax_type1` varchar(255) NOT NULL,
  `vax_date1` varchar(255) NOT NULL,
  `batch_num1` varchar(50) NOT NULL,
  `vax_admin1` varchar(255) DEFAULT NULL,
  `vax_type2` varchar(255) NOT NULL,
  `vax_date2` varchar(255) NOT NULL,
  `batch_num2` varchar(50) NOT NULL,
  `vax_admin2` varchar(255) NOT NULL,
  `vax_type3` varchar(255) NOT NULL,
  `vax_date3` varchar(255) NOT NULL,
  `batch_num3` varchar(50) NOT NULL,
  `vax_admin3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vax_info`
--

INSERT INTO `vax_info` (`id`, `citizen_fname`, `citizen_lname`, `citizen_email`, `citizen_address`, `citizen_dob`, `vax_status`, `vaxsite_name`, `num_doses`, `vax_type1`, `vax_date1`, `batch_num1`, `vax_admin1`, `vax_type2`, `vax_date2`, `batch_num2`, `vax_admin2`, `vax_type3`, `vax_date3`, `batch_num3`, `vax_admin3`) VALUES
(4, 'Dion', 'Singh', 'dionsingh8@hotmail.com', '123 Main Street', '1997-11-06', 'Vaccinated', 'La Brea Health Centre', 3, 'Sinopharm', '2021-07-22', '52339483495', 'Jane Doe', 'Sinopharm', '2022-11-18', '87689616634', 'Jane Doe', 'Pfizer-Biotech (Booster)', '2022-03-15', '13289754895', 'John Doe'),
(5, 'Jane', 'Doe', 'dionsingh8@hotmail.com', '123 street', '2022-03-10', 'vaccinated', 'La Brea Health Centre', 1, 'Sinopharm', '2022-03-03', '523394', 'Jane Doe', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`citizen_id`);

--
-- Indexes for table `citizen_photos`
--
ALTER TABLE `citizen_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizen_uploads`
--
ALTER TABLE `citizen_uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `contact_tracing`
--
ALTER TABLE `contact_tracing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquirers`
--
ALTER TABLE `inquirers`
  ADD PRIMARY KEY (`inquirer_id`);

--
-- Indexes for table `inquirer_reports`
--
ALTER TABLE `inquirer_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moh_admin`
--
ALTER TABLE `moh_admin`
  ADD PRIMARY KEY (`mohadmin_id`);

--
-- Indexes for table `moh_uploads`
--
ALTER TABLE `moh_uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `vax_admin`
--
ALTER TABLE `vax_admin`
  ADD PRIMARY KEY (`vaxadmin_id`);

--
-- Indexes for table `vax_files`
--
ALTER TABLE `vax_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `vax_info`
--
ALTER TABLE `vax_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `citizen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `citizen_photos`
--
ALTER TABLE `citizen_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizen_uploads`
--
ALTER TABLE `citizen_uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_tracing`
--
ALTER TABLE `contact_tracing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inquirers`
--
ALTER TABLE `inquirers`
  MODIFY `inquirer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquirer_reports`
--
ALTER TABLE `inquirer_reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `moh_admin`
--
ALTER TABLE `moh_admin`
  MODIFY `mohadmin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moh_uploads`
--
ALTER TABLE `moh_uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vax_admin`
--
ALTER TABLE `vax_admin`
  MODIFY `vaxadmin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vax_files`
--
ALTER TABLE `vax_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vax_info`
--
ALTER TABLE `vax_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
