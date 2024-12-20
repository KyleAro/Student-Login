-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 05:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kylearo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `registration_date`, `user_id`) VALUES
('hello', 'aro', 'yellowbrick@gmail.com', '123', '2024-09-25 12:41:22', 1),
('asdasdas', 'aro', 'yellowbrick@gmail.com', '123', '2024-09-25 12:41:33', 2),
('kyle', 'aro', 'hahahah@gmail.com', 'wewe', '2024-09-25 12:43:13', 3),
('a', 'a', 'a', 'a', '2024-09-25 12:46:53', 4),
('KYLE VINCENT', 'ARO', 'arokyle02511@gmail.com', 'try12', '2024-09-28 12:28:37', 5),
('testing', 'waters', 'watertesting@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$L0kuRHVydmxPMlc5b2t', '2024-09-28 12:43:46', 6),
('Kyle', 'Aro', 'asdasdas', '$argon2id$v=19$m=65536,t=4,p=1$RExlcnVUZXVteXZJWnd', '2024-10-27 00:46:58', 7),
('kyle', 'aaaaaaa', '2434659wgeg', '$argon2id$v=19$m=65536,t=4,p=1$Z21rTy5nODFEcVNJWlR', '2024-10-27 00:47:42', 8),
('try', 'try', 'try', '$argon2id$v=19$m=65536,t=4,p=1$NEZManFmeGI4bUllWHR', '2024-10-27 01:10:40', 9),
('WATER', 'TRY', '12345', '$argon2id$v=19$m=65536,t=4,p=1$aU9mbmkvVXdscG1QTzM', '2024-10-27 01:31:12', 10),
('123213123', '12312312', '12312312', '$argon2id$v=19$m=65536,t=4,p=1$d3M1NldueXpiZWVIOGR', '2024-10-27 01:34:17', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
