-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raj pharmarcy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(5) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'Admin', 2147483647, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-03-02 15:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(11) NOT NULL,
  `Ocategory` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `Ocategory`) VALUES
(2, 'Delivery'),
(1, 'Pickup');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourier`
--

CREATE TABLE `tblcourier` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Address` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourier`
--

INSERT INTO `tblcourier` (`ID`, `FullName`, `MobileNumber`, `Email`, `Address`) VALUES
(1, 'Fedex-LK', 1111111113, 'fedex@gmail.com', 'colombo 13'),
(2, 'Special Delivery', 2222222222, 'specialdelivery@gmail.com', 'colombo 02'),
(3, 'Certis Lanka Courier Services (Pvt) Ltd', 3333333333, 'certislanka@gmail.com', 'colombo 03'),
(4, 'IML Sri Lanka', 4444444444, 'imlsrilanka@gmail.com', 'colombo 04');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(11) NOT NULL,
  `UserId` int(10) NOT NULL,
  `EnquiryNumber` varchar(100) NOT NULL,
  `EnquiryType` varchar(100) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminResponse` varchar(100) DEFAULT NULL,
  `AdminStatus` int(10) DEFAULT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `UserId`, `EnquiryNumber`, `EnquiryType`, `Description`, `EnquiryDate`, `AdminResponse`, `AdminStatus`, `AdminRemarkdate`) VALUES
(1, 2, '2000836287', 'Delivery Related Enquiry', 'Can you please update me about the delivery times and locations.', '2022-09-22 22:52:42', 'Thank you for contacting us through our website. You can reach us on our hotline for more details re', 1, '2022-09-22 21:53:34'),
(8, 17, '789134687', 'Price Related Enquiry', 'What is the price of 2mg of cocaine?', '2022-09-30 08:00:31', NULL, NULL, '2022-09-30 08:00:31'),
(9, 18, '631691270', 'Other Enquiries', 'This is a test.', '2022-10-01 14:49:48', 'This is a test', 1, '2022-10-01 14:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquirytype`
--

CREATE TABLE `tblenquirytype` (
  `ID` int(11) NOT NULL,
  `EnquiryType` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquirytype`
--

INSERT INTO `tblenquirytype` (`ID`, `EnquiryType`) VALUES
(3, 'Delivery Related Enquiry'),
(4, 'Drgus/Medicine Enquiry'),
(1, 'Other Enquiries'),
(2, 'Price Related Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `tblorderrequest`
--

CREATE TABLE `tblorderrequest` (
  `ID` int(10) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `OrderNumber` char(20) NOT NULL,
  `Category` varchar(120) DEFAULT NULL,
  `OrderDetails` varchar(120) DEFAULT NULL,
  `PatientAge` varchar(120) DEFAULT NULL,
  `PatientAddress` varchar(120) DEFAULT NULL,
  `PatientContno` varchar(120) DEFAULT NULL,
  `DpDate` date DEFAULT NULL,
  `DpTime` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `OrderrequestDate` timestamp NULL DEFAULT current_timestamp(),
  `Courier` varchar(120) DEFAULT NULL,
  `CourierCharge` int(10) DEFAULT NULL,
  `ServiceCharge` int(10) DEFAULT NULL,
  `OtherCharge` int(10) DEFAULT NULL,
  `AdminRemark` varchar(120) DEFAULT NULL,
  `AdminStatus` varchar(120) DEFAULT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderrequest`
--

INSERT INTO `tblorderrequest` (`ID`, `UserId`, `OrderNumber`, `Category`, `OrderDetails`, `PatientAge`, `PatientAddress`, `PatientContno`, `DpDate`, `DpTime`, `branch`, `OrderrequestDate`, `Courier`, `CourierCharge`, `ServiceCharge`, `OtherCharge`, `AdminRemark`, `AdminStatus`, `AdminRemarkdate`) VALUES
(1, 1, '100050002', 'Delivery', '2 Doses from TX Syrup', '20', 'Colombo 12', '0123456789', '2022-09-22', '14:02:45', '', '2022-09-21 07:28:02', '2022-09-22 09:12:03', 0, 1000, 9865, '100.00', 'This is a sample admin remark for testing', '2022-09-30 07:28:05'),
(7, 17, '479312279', 'Pickup', 'Need 10mg of Marijuana', '18', 'Kandy', '1234567890', '2022-09-16', '04:11', 'colombo', '2022-09-30 08:39:34', 'Special Delivery', 0, 0, 300, 'This is a test.', '3', '2022-10-01 08:32:26'),
(8, 17, '523634305', 'Delivery', 'Need 50mg of cocaine', '19', 'Nuara Eliya', '119', '2022-10-20', '05:26', 'colombo', '2022-10-01 08:53:47', 'Certis Lanka Courier Services (Pvt) Ltd', 200, 100, 1000, 'This is a test (2).', '3', '2022-10-01 10:08:37'),
(9, 18, '291046442', 'Pickup', 'Need 100mg of Marijuana', '21', 'Ja-Ela', '1212121212', '2022-10-11', '09:21', 'bambalapitiya', '2022-10-01 14:50:26', 'Fedex-LK', 200, 100, 1000, 'This is a test.', '3', '2022-10-01 14:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNo` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNo`, `Email`, `Password`, `RegDate`) VALUES
(17, 'AnonymousUser', 712323232, 'anonymous@gmail.com', 'eff0ddaa49c86425a99ce4d86b859f4d', '2022-09-30 07:58:00'),
(18, 'Niroshan', 700000000, 'niroshan@gmail.com', '3ee99a3d687af7702f682b779d000ed2', '2022-10-01 14:11:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ocategory` (`Ocategory`);

--
-- Indexes for table `tblcourier`
--
ALTER TABLE `tblcourier`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FullName` (`FullName`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `eqtype` (`EnquiryType`);

--
-- Indexes for table `tblenquirytype`
--
ALTER TABLE `tblenquirytype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EnquiryType` (`EnquiryType`);

--
-- Indexes for table `tblorderrequest`
--
ALTER TABLE `tblorderrequest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcourier`
--
ALTER TABLE `tblcourier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblenquirytype`
--
ALTER TABLE `tblenquirytype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblorderrequest`
--
ALTER TABLE `tblorderrequest`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD CONSTRAINT `eqtype` FOREIGN KEY (`EnquiryType`) REFERENCES `tblenquirytype` (`EnquiryType`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
