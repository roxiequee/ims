-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 11:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'admin',
  `image` varchar(100) NOT NULL,
  `interviewer_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `password`, `email`, `role`, `image`, `interviewer_number`) VALUES
(1, 'admin', '1212', 'admin@gmail.com', 'admin', '', ''),
(2, 'admin', '1212', 'admin@gmail.com', 'admin', '', ''),
(3, 'YA ', 'd41d8cd98f00b204e9800998ecf8427e', 'sd@sd', 'admin', '220px-Grant_mechanical_calculating_machine_1877.jpg', ''),
(4, 'mnbj', '12', 'jl@lj', 'admin', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(5, 'myname', 'abb45c192f0818ff22b7ddda8566dac3', 'myname1@gmail.com', 'admin', '', ''),
(6, 'MAKINDYA 1', '93122a9e4abcba124d5a7d4beaba3f89', 'nm@gmail', 'admin', '', ''),
(7, 'nm@mn', 'd41d8cd98f00b204e9800998ecf8427e', 'mn@mn', 'admin', '', ''),
(8, 'lj@lj', 'lj@lj', 'lj@lj', 'admin', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(9, 'd@d', 'd41d8cd98f00b204e9800998ecf8427e', 'd@d', 'admin', '6-38.jpg', ''),
(10, 'mann', 'c4ca4238a0b923820dcc509a6f75849b', 'mann@gmail.com', 'admin', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(11, 'asas', 'd41d8cd98f00b204e9800998ecf8427e', 'v@v2', 'admin', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(12, 'nds', 'c4ca4238a0b923820dcc509a6f75849b', 'nds@1', 'admin', '0-level.jpg', ''),
(13, 'makindyakenani chacha', 'c4ca4238a0b923820dcc509a6f75849b', 's@s', 'admin', '1.jpg', ''),
(14, 'baraka mwansampeta', '827ccb0eea8a706c4c34a16891f84e7b', 'barakamwansampeta.1234@gmail.com', 'admin', '29018597-young-male-photographer-taking-photos-with-his-huge-new-shiny-fast-prime-professional-telep', ''),
(15, 'em', '0a113ef6b61820daa5611c870ed8d5ee', 'em@gmail.com', 'admin', '0177_000_en-us.jpg', ''),
(16, 'makindya', 'd41d8cd98f00b204e9800998ecf8427e', 'makindya@gmail.com', 'admin', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(17, 'wq', 'c4ca4238a0b923820dcc509a6f75849b', 'wq@wq', 'admin', '', ''),
(18, 'bhg', '37693cfc748049e45d87b8c7d8b9aacd', 'admini@gmail.com', 'admin', '19310-gettyimages-1155686843-madesutaeyeemjpeg.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviewee_table`
--

CREATE TABLE `interviewee_table` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'interviewee',
  `image` varchar(100) NOT NULL,
  `interviewer_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interviewee_table`
--

INSERT INTO `interviewee_table` (`id`, `username`, `password`, `email`, `role`, `image`, `interviewer_number`) VALUES
(1220, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'c4ca4238a0b923820dcc509a6f75849b', 'b@b', 'intervieweehhhhhhh', '1200px-Gutenberg_Bible,_Lenox_Copy,_New_York_Public_Library,_2009._Pic_01.jpg', ''),
(1221, 'k@k', 'd41d8cd98f00b204e9800998ecf8427e', 'w@w', 'interviewer', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(1222, 'w@w', 'c4ca4238a0b923820dcc509a6f75849b', 'm@m', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1223, '', 'c4ca4238a0b923820dcc509a6f75849b', 'j@j', 'interviewee', '', ''),
(1224, '', 'c4ca4238a0b923820dcc509a6f75849b', 'n@n', 'interviewee', '', ''),
(1225, 'juma', 'c4ca4238a0b923820dcc509a6f75849b', 'c@c', 'interviewer', 'admin', ''),
(1226, 'makindya', 'c4ca4238a0b923820dcc509a6f75849b', 'q@q', 'interviewee', '', ''),
(1227, 'myname', 'c4ca4238a0b923820dcc509a6f75849b', 't@t', 'interviewee', '', ''),
(1228, 'y@y', '1', 'y@y', 'interviewee', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(1229, 'int@int', 'c4ca4238a0b923820dcc509a6f75849b', 'int@int', 'interviewee', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(1230, 'int@int1', 'c20ad4d76fe97759aa27a0c99bff6710', 'int@int1', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1231, '12', '61e0e0354c74b730d3203ac1dbebd1e1', '12@12', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1232, '12@12', '12@12', 'makkkkkkkiiiiiiiiik@gmail.com', 'interviewee', '', ''),
(1233, 'jk', 'c4ca4238a0b923820dcc509a6f75849b', 'jk@jk', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1234, 'user', 'c4ca4238a0b923820dcc509a6f75849b', 'user@gmail.com', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1235, 'edit', 'c4ca4238a0b923820dcc509a6f75849b', 'edit@gmail.com', 'interviewee', '', ''),
(1236, 'jvhkvj', 'c4ca4238a0b923820dcc509a6f75849b', 'v@v', 'interviewee', '', ''),
(1237, 'ndnnde', 'c4ca4238a0b923820dcc509a6f75849b', 'b@b1', 'interviewee', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(1238, 'hjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'c4ca4238a0b923820dcc509a6f75849b', 'h@h', 'interviewee', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(1239, 'nbn', 'c4ca4238a0b923820dcc509a6f75849b', 'nb@nb', 'interviewee', 'Screenshot (815).png', ''),
(1240, 'kamba ', '111111111111', 'mjjkdiei@ddd', 'mnnnnnnnnnnnnn', '', ''),
(1242, 'ismaily_official02', 'd41d8cd98f00b204e9800998ecf8427e', 'ismailymofath.0002@gmail.com', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1243, 'rozina', '202cb962ac59075b964b07152d234b70', 'rozina.2@gmail.com', 'interviewee', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(1244, 'anna', 'c6f057b86584942e415435ffb1fa93d4', 'anna.julius@gmail.com', 'interviewee', '11d05a9aedc46c5c2371fd2cf2806ae2.jpg', ''),
(1245, 'emaa', 'c20ad4d76fe97759aa27a0c99bff6710', 'emaa@gmail.com', 'interviewee', '', ''),
(1246, 'kamba ', '123456', 'q@1', '@', '', ''),
(1247, 'ka@ka', 'c4ca4238a0b923820dcc509a6f75849b', 'ka@ka', 'interviewee', '', ''),
(1248, 'kamba ', '123456', 'nc@chh', 'admin', '', ''),
(1249, 'kamba ', '123456', 'hdh@hhd', 'admin', '', ''),
(1250, 'kamba ', '123456', 'jdujduj@jxchxi', 'djjdjf', '', ''),
(1251, 'kamba ', '123456', 'jxmcuiW@jcvk', 'zfi', '', ''),
(1252, 'dns', 'd41d8cd98f00b204e9800998ecf8427e', 'passion@gmail.co', 'interviewee', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(1253, 'ema', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'ne@ne', 'interviewee', '16651806-muscular-man-with-hand-on-knee-thinking-with-thinker-posture-close-up.jpg', ''),
(1254, 'makindya@gmail.com', '12345', 'makindyakenani20020520@gmail.com', 'user', '', ''),
(1255, 'makindya@gmail.comtrrrrrrr', 'jjjjjjgjgjgjg', 'nmbhhh@gmail.com', 'jgugugug', '', ''),
(1256, 'makindya@gmail.com', '12345', 'kkkkkk@kkkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', '', ''),
(1257, 'makindya@gmail.com', '12345', 'jjjjjjjjjjjjjjj@jjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', ''),
(1258, 'makindya@gmail.com', '12345', 'df@dddddddddddddd', 'dddddddddddddddddddd', '', ''),
(1259, 'mandojo', 'c4ca4238a0b923820dcc509a6f75849b', 'bn@bn', 'interviewee', 'AA1iw9h9.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `interviewer_table`
--

CREATE TABLE `interviewer_table` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'interviewer',
  `image` varchar(100) NOT NULL,
  `interviewer_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interviewer_table`
--

INSERT INTO `interviewer_table` (`id`, `username`, `email`, `password`, `role`, `image`, `interviewer_number`) VALUES
(5, 'unn', 'u@u', '2', 'interviewer', '18052-gettyimages-1194042218.jpg', ''),
(6, 'h', 'h@a', '1', 'interviewer', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(7, 'ui', 'ui@ui', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '6-38.jpg', ''),
(8, 'MAKINDYA34', 'k@k1', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '6-38.jpg', ''),
(9, 'man', 'man@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(10, 'n', 'bg@bg1', 'd41d8cd98f00b204e9800998ecf8427e', 'interviewer', '3b41df343f95bfee06d63b5832c31f74.jpg', ''),
(11, 'emmassssssss', 'e@e', 'd41d8cd98f00b204e9800998ecf8427e', 'interviewer', '09-ROBERT_LEWANDOWSKI.jpg', ''),
(12, 'hg', 'nm@nm1', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '', ''),
(13, 'we', 'we@we', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '3-s2.0-B9780128040188000024-f02-02-9780128040188.jpg', ''),
(14, 'REHEMA_KAVEMBA02', 'kavemba@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'interviewer', '1.jpg', ''),
(15, 'neema', 'emma1@gmail.com', 'a01610228fe998f515a72dd730294d87', 'interviewer', '883b09e4327643153c6031fc4675ad3d.jpg', ''),
(16, 'lucy ', 'lucy.123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'interviewer', 'asking-african-american-kid-holding-hands-folded-prayer-gesture-studio-background_777271-23674.jpg', ''),
(17, 'irene', 'irene@gmail.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'interviewer', '9aa5f31bdd7ac3257cde414749f848a6.jpg', ''),
(18, 'juma hopstors', 'ds@ds', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '', ''),
(19, 'ghg', 'ag@ag', 'c4ca4238a0b923820dcc509a6f75849b', 'interviewer', '10+tips+for+successful+studying+3+OP.jpg', 'aa'),
(20, 'makindya@gmail.com', 'ggggggggg@hhhhhhhhhhh', '12345', 'gggggggggggggggggggggggggggggggggggggggg', '', ''),
(21, 'makindya@gmail.com', 'swfdedfrffgvtg5gtg@ffffffffffff', '12345', 'rrrrrrrrrrrrrrrrrr', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reset_table`
--

CREATE TABLE `reset_table` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `email` varchar(100) NOT NULL,
  `candidate_name` varchar(100) NOT NULL,
  `interview_date` varchar(100) NOT NULL,
  `interview_time` varchar(100) NOT NULL,
  `interviewer_number` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`email`, `candidate_name`, `interview_date`, `interview_time`, `interviewer_number`, `result`) VALUES
('0', 'my name', '2024-05-31', '23:17', '', ''),
('1216', 'my name', '2024-06-21', '22:14', '', ''),
('123', 'gdydhdth', '2024-06-21', '16:26', '', ''),
('2222', 'SJK', '2024-06-20', '22:09', '', ''),
('23243', ' passion', '2024-06-11', '23:13', '', ''),
('53', 'jdhdjkdi', '2024-06-20', '15:20', '', ''),
('73637', 'hjjjj', '2024-06-17', '21:46', '', ''),
('h@h', 'hfffffffffffffffff', '2024-06-22', '22:12', '', ''),
('makindyakenani20020520@gmail.com', 'REHEMA KAVEMBE', '2024-06-15', '23:29', '', ''),
('nb@nb', 'jkjkqqqqqqqqddsaaaaaaa', '2024-05-29', '11:40', 'aa', 'pass'),
('v@v', 'my name', '2024-06-08', '01:48', 'aa', '');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `filename`, `type`, `user_id`) VALUES
(1239, 'Visual_Programming_Lesson-12.pdf', 'application/pdf', 0),
(1259, 'markus-spiske-QsOEYVZvUiI-unsplash.jpg', 'image/jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviewee_table`
--
ALTER TABLE `interviewee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviewer_table`
--
ALTER TABLE `interviewer_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_table`
--
ALTER TABLE `reset_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `interviewee_table`
--
ALTER TABLE `interviewee_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1260;

--
-- AUTO_INCREMENT for table `interviewer_table`
--
ALTER TABLE `interviewer_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reset_table`
--
ALTER TABLE `reset_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1275;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`id`) REFERENCES `interviewee_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
