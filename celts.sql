-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2018 at 10:27 AM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonner_programs`
--

CREATE TABLE `bonner_programs` (
  `Bonner_Prog_ID` int(11) NOT NULL,
  `Bonner_Prog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonner_programs`
--

INSERT INTO `bonner_programs` (`Bonner_Prog_ID`, `Bonner_Prog`) VALUES
(1, 'All-Bonner Meeting'),
(2, 'Junior Recommitment'),
(3, 'Senior Presentations of Learning'),
(4, 'Sophomore Exchange'),
(5, 'Spring Break Service Trip'),
(6, 'Summer of Service');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_ID`, `Event_Name`) VALUES
(1, 'Empty Bowls'),
(2, 'Hunger Hurts Food Drive');

-- --------------------------------------------------------

--
-- Table structure for table `involvement`
--

CREATE TABLE `involvement` (
  `Involve_ID` int(11) NOT NULL,
  `Involvement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `involvement`
--

INSERT INTO `involvement` (`Involve_ID`, `Involvement`) VALUES
(1, 'Bonner Scholar'),
(2, 'Community Partner'),
(3, 'Faculty'),
(4, 'Service Learning Student'),
(5, 'Staff'),
(6, 'Student Labor Staff'),
(7, 'Student Volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_ID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`) VALUES
(6, 'Aaron', 'Christson', 'christsonaa', 'caaron@berea.edu', '$2y$10$nMg8Pphn4MwDhrMD3UF3Q.my9AejpvkF7GWnzi/o0zYGE08YBD.Re'),
(7, 'Ram', 'Bastola', 'rambas', 'basram@celts.org', '$2y$10$ATBEayBjpIGxpFSqnDV7w.EsHuPcdLpX5bBfKIIqTICHTrQuxXd2u'),
(8, 'Agnes', 'Dotse', 'Aggie', 'Agnes_Dotse@berea.edu', '$2y$10$ybvwV6zgBm9xJUCfHi2My.QaSsVfAKEDUCHlJpou4PyZtrjT4CzLO'),
(9, 'Sheila', 'Lyons', 'lyonss', 'sheila_lyons@berea.edu', '$2y$10$1X/KP.fa7yASOsR2ibmQjuKmmEeHqKBEIKPEm9XvNd/pARr0.1vVy'),
(10, 'Test', 'Testov', 'test', 'test@gmail.com', '$2y$10$uwWUTWMrcyClM4vBUA4Qq.Hr99aJePtY7Tj0OvyazJ606ivxFqRky'),
(11, 'Matthew', 'Graham', 'mngraham22', 'grahamma@berae.edu', '$2y$10$1b5d/zH5DzGtUdtsD4sxw.dzjDrWd/Lz/W7Xu4NGr5kRsChPP3L86'),
(12, 'bla', 'bla', 'bla', 'bla@gmail.com', '$2y$10$kbBHQ6pWUm2bAfvmH.qLcOFtZ90a4jpi.VEqVTkbFCB.HCzieTPMe'),
(13, 'cheyenne', 'olson', 'Screamer', 'cheyenne@sustainableberea.org', '$2y$10$vtf.HEUC3Wl8wVs7pukuyO1xfnvLsdI/NCVF3R.49SQGGbOovYY.O'),
(14, 'Ashley', 'Cochrane', 'Ashley Cochrane', 'ashley_cochrane@berea.edu', '$2y$10$RSbJxsaBzRmAc.s34MUzNedckX22j6NaIBQ6z0WZKf/poVGUOo5xy'),
(15, 'Ashley', 'Cochrane', 'ashleyc', 'ashleyc@gmail.com', '$2y$10$lgcP07gEzRDxtB64GHTMd.59UH0UQmrgTyGe6t806pKERLKzOxWnq');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `Prog_ID` int(11) NOT NULL,
  `Prog_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`Prog_ID`, `Prog_Name`) VALUES
(1, 'Adopt-A-GrandParent'),
(2, 'Berea Buddies'),
(3, 'Berea Teen Mentoring'),
(4, 'Berea Tutoring'),
(5, 'Habitat for Humanity'),
(6, 'Hispanic Outreach Program'),
(7, 'People Who Care');

-- --------------------------------------------------------

--
-- Table structure for table `sl_classes`
--

CREATE TABLE `sl_classes` (
  `SL_ID` int(11) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `SL_Class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sl_classes`
--

INSERT INTO `sl_classes` (`SL_ID`, `Code`, `SL_Class`) VALUES
(1, 'CFS 221', 'Fundamentals of Nutrition'),
(2, 'CFS 317', 'Parent-Child Relations'),
(3, 'COM 315', 'Public Relations'),
(4, 'GST 101', 'Strategies for Academic Success'),
(5, 'HLT/WGS 236', 'Women and Health'),
(6, 'SENS/ANR 328', 'Ecological Weed Management'),
(7, 'SOC 360 ', 'Social Policy Study and Evaluation Research'),
(8, 'SPN 310', 'Spanish Composition and Hispanic Outreach Project'),
(9, 'TAD 140', 'Design and Production in Woods'),
(10, 'CFS 245', 'Community Resources for Families'),
(11, 'EDS 440', 'Integrated Curriculum III'),
(12, 'HHP', 'Adapted Physical Education (PE)'),
(13, 'PSJ 210', 'Diversity and Social Justice');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Prog_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `First_Name`, `Last_Name`, `Prog_ID`) VALUES
(2, 'Ashley', 'Cochrane', 4),
(5, 'Sarah', 'Rohrer', 7),
(6, 'Sheila', 'Lyons', 6);

-- --------------------------------------------------------

--
-- Table structure for table `std_lab_staff`
--

CREATE TABLE `std_lab_staff` (
  `Std_Staff_ID` int(10) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Labor_Pos` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Prog_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_lab_staff`
--

INSERT INTO `std_lab_staff` (`Std_Staff_ID`, `First_Name`, `Last_Name`, `Labor_Pos`, `Role`, `Prog_ID`) VALUES
(12, 'Gabou', 'Smith', 'Primary', 'Program Manager', 1),
(21, 'Ayigbe', 'Edem', 'Secondary', 'Leadership', 4),
(22, 'Sarkodie', 'Sarkcess', 'Primary', 'Leadership', 7),
(23, 'Alicia', 'Myers', 'Primary', 'Leadership', 5),
(24, 'Chris', 'Johnson', 'Secondary', 'Team Member', 3);

-- --------------------------------------------------------

--
-- Table structure for table `std_vol`
--

CREATE TABLE `std_vol` (
  `Std_Vol_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Prog_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_vol`
--

INSERT INTO `std_vol` (`Std_Vol_ID`, `First_Name`, `Last_Name`, `Prog_ID`) VALUES
(1, 'Kwesi', 'Arthur', 4),
(2, 'Kofi', 'Kinaata', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonner_programs`
--
ALTER TABLE `bonner_programs`
  ADD PRIMARY KEY (`Bonner_Prog_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `involvement`
--
ALTER TABLE `involvement`
  ADD PRIMARY KEY (`Involve_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`Prog_ID`);

--
-- Indexes for table `sl_classes`
--
ALTER TABLE `sl_classes`
  ADD PRIMARY KEY (`SL_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `staff_ibfk_1` (`Prog_ID`);

--
-- Indexes for table `std_lab_staff`
--
ALTER TABLE `std_lab_staff`
  ADD PRIMARY KEY (`Std_Staff_ID`),
  ADD KEY `Prog_ID` (`Prog_ID`);

--
-- Indexes for table `std_vol`
--
ALTER TABLE `std_vol`
  ADD PRIMARY KEY (`Std_Vol_ID`),
  ADD KEY `staff_ibfk_1` (`Prog_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonner_programs`
--
ALTER TABLE `bonner_programs`
  MODIFY `Bonner_Prog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `involvement`
--
ALTER TABLE `involvement`
  MODIFY `Involve_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `Prog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sl_classes`
--
ALTER TABLE `sl_classes`
  MODIFY `SL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `std_lab_staff`
--
ALTER TABLE `std_lab_staff`
  MODIFY `Std_Staff_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `std_vol`
--
ALTER TABLE `std_vol`
  MODIFY `Std_Vol_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`Prog_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `std_lab_staff`
--
ALTER TABLE `std_lab_staff`
  ADD CONSTRAINT `std_lab_staff_ibfk_1` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`Prog_ID`);

--
-- Constraints for table `std_vol`
--
ALTER TABLE `std_vol`
  ADD CONSTRAINT `std_vol_ibfk_1` FOREIGN KEY (`Prog_ID`) REFERENCES `programs` (`Prog_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
