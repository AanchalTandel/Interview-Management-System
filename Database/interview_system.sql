-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2015 at 06:24 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `interview_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`Admin_id` int(11) NOT NULL,
  `Admin_nm` varchar(50) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  `Admin_login` varchar(50) NOT NULL,
  `Admin_pass` varchar(50) NOT NULL,
  `Admin_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `Add_id` int(11) NOT NULL,
  `Add_post` varchar(50) NOT NULL,
  `Add_date` varchar(50) NOT NULL,
  `From_dt` varchar(50) NOT NULL,
  `To_dt` varchar(50) NOT NULL,
  `Posted_by` varchar(50) NOT NULL,
  `Add_status` tinyint(1) NOT NULL,
  `Admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aggregate_result`
--

CREATE TABLE IF NOT EXISTS `aggregate_result` (
  `Agg_id` int(11) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  `Total_ques` int(11) NOT NULL,
  `Total_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
`Candidate_id` int(11) NOT NULL,
  `Candidate_nm` varchar(50) NOT NULL,
  `Candidate_pwd` varchar(50) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Date_birth` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Email_addr` varchar(50) NOT NULL,
  `Candidate_hb1` varchar(50) NOT NULL,
  `Candidate_hb2` varchar(50) NOT NULL,
  `Candidate_hb3` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_quali`
--

CREATE TABLE IF NOT EXISTS `candidate_quali` (
`Candidate_quali_id` int(11) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  `Candidate_ssc` int(11) NOT NULL,
  `Candidate_hsc` int(11) NOT NULL,
  `Candidate_diploma` int(11) NOT NULL,
  `Candidate_degree` int(11) NOT NULL,
  `Candidate_post_degree` int(11) NOT NULL,
  `Candidate_ssc_upload` varchar(1000) NOT NULL,
  `Candidate_hsc_upload` varchar(1000) NOT NULL,
  `Candidate_diploma_upload` varchar(1000) NOT NULL,
  `Candidate_degree_upload` varchar(1000) NOT NULL,
  `Candidate_post_degree_upload` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detailed_result`
--

CREATE TABLE IF NOT EXISTS `detailed_result` (
  `Candidate_id` int(11) NOT NULL,
  `Ques_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `Opted_ans` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE IF NOT EXISTS `hr` (
  `HR_id` int(11) NOT NULL,
  `HR_nm` varchar(50) NOT NULL,
  `HR_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `Interview_id` int(11) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `PI_date` varchar(50) NOT NULL,
  `PI_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Ques_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Ques` varchar(50) NOT NULL,
  `Opt1` varchar(30) NOT NULL,
  `Opt2` varchar(30) NOT NULL,
  `Opt3` varchar(30) NOT NULL,
  `Opt4` varchar(30) NOT NULL,
  `correct_opt` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `Resume_id` int(11) NOT NULL,
  `File_name` varchar(50) NOT NULL,
  `Candidate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selected_candidate`
--

CREATE TABLE IF NOT EXISTS `selected_candidate` (
`Selected_candidate_id` int(11) NOT NULL,
  `Candidate_id` int(11) NOT NULL,
  `HR_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
 ADD PRIMARY KEY (`Add_id`);

--
-- Indexes for table `aggregate_result`
--
ALTER TABLE `aggregate_result`
 ADD PRIMARY KEY (`Agg_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
 ADD PRIMARY KEY (`Candidate_id`);

--
-- Indexes for table `candidate_quali`
--
ALTER TABLE `candidate_quali`
 ADD PRIMARY KEY (`Candidate_quali_id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
 ADD PRIMARY KEY (`HR_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
 ADD PRIMARY KEY (`Interview_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`Ques_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
 ADD PRIMARY KEY (`Resume_id`);

--
-- Indexes for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
 ADD PRIMARY KEY (`Selected_candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
MODIFY `Candidate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate_quali`
--
ALTER TABLE `candidate_quali`
MODIFY `Candidate_quali_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
MODIFY `Selected_candidate_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
