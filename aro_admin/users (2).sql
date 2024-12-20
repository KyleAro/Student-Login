-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 01:28 AM
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
  `password` varchar(999) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `user_level` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `registration_date`, `user_id`, `user_level`) VALUES
('213ds', '123', '123', '$argon2id$v=19$m=65536,t=4,p=1$azY1U0xtaExydGp5Smt', '2024-12-11 03:37:57', 48, 0),
('test', 'sha256', 'shasha@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc9', '2024-12-14 12:45:51', 49, 0),
('test', 'bomba', 'hahaha', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e99', '2024-12-14 12:49:02', 50, 0),
('a', 'a', 'a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9', '2024-12-14 12:51:35', 51, 0),
('a', 'a', '1', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0', '2024-12-14 13:01:03', 52, 0),
('b', 'b', 'b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb', '2024-12-14 13:11:16', 53, 0),
('aa', 'aa', 'aa', '$2y$10$z30ZjzsR4y9VJDBsArgG1e2aV9SaUBnIWb3Hxofo/.x', '2024-12-14 13:25:05', 54, 0),
('q', 'q', 'qq', '$2y$10$dYl42ylpgfSafDJy9/ILOOw4H5R2SBhAAsbPMkBcgRl', '2024-12-14 13:26:05', 55, 0),
('z', 'z', 'z', '$2y$10$bNUfptdmU4ipnEHeZ0VvIuvJvQBWc8GRYDIFGcSDFoW', '2024-12-14 13:30:10', 56, 0),
('AS', 'AS', 'AS', '$2y$10$cq1vxBq1GPieW5P8JvBJ5erF/pfx3ZYPorBPl6m32vG', '2024-12-14 13:31:26', 57, 0),
('sd', 'sad', 'sd', '03042cf8100db386818cee4ff0f2972431a62ed78edbd09ac0', '2024-12-14 13:37:12', 58, 0),
('aa', 'aa', 'aa', '9834876dcfb05cb167a5c24953eba58c4ac89b1adf57f28f2f9d09af107ee8f0', '2024-12-14 13:42:23', 59, 0),
('waw', 'waw', 'waw', '23384e6ae85686b7926ebcbda69e9c0a6d1bb1a2fa4d9cd6fc7b7e58f3c906af', '2024-12-14 13:42:58', 60, 1),
('kkk', 'kkk', 'kk', 'ad370ed99b189921e7fe26057c40aab9f4fee8385e47606f50f348b9a5530af0', '2024-12-14 13:45:22', 61, 0),
('user', 'user', 'user', 'd876d59095f13054c120f77202c5378aa25d7787d4adf70980dbb3f2a7125ac1', '2024-12-14 14:07:40', 62, 0),
('sd', 'ds', 'sd@gmail', '$2y$10$Zdn4bekjztDvDOJzGkSL7eaB7mnrQjh8iLXEQOWQtmlKHc9xuamcy', '2024-12-14 23:56:24', 63, 0),
('waw', 'waw', 'waw@a', '$2y$10$jXBTYKBwlLu4n9.peWLyhOpx9VOT7FblvfXGk0eJxDbj7YpvWX3cq', '2024-12-14 23:58:46', 64, 0),
('a', 'a', 'a@a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 00:13:16', 65, 0),
('a', 'a', 'a@asa', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 01:48:33', 66, 0),
('aa', 'aa', 'waw@aa', '23384e6ae85686b7926ebcbda69e9c0a6d1bb1a2fa4d9cd6fc7b7e58f3c906af', '2024-12-15 01:51:00', 67, 0),
('a', 'a', 'aaaa', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 02:17:58', 68, 0),
('dda', 's', 'ss', 'a31fe9656fc8d3a459e623dc8204e6d0268f8df56d734dac3ca3262edb5db883', '2024-12-15 02:30:37', 69, 0),
('a', 'a', 'a@aa', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 02:52:02', 70, 0),
('a', 'a', 'a@aa', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 02:52:20', 71, 0),
('asd', 'asd', 'as', '688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6', '2024-12-15 12:20:48', 72, 0),
('aaaa', 'aaaa', 'asa', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', '2024-12-15 12:22:27', 73, 0),
('aw', 'aw', 'aw', 'f5fe88ee08735ae259265495a93c8de2b0eacfecf0cd90b5821479be3199fa8c', '2024-12-15 12:53:00', 74, 0),
('aw', 'aw', 'aw', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', '2024-12-15 12:54:59', 75, 0),
('waw', 'waw', 'waww', '23384e6ae85686b7926ebcbda69e9c0a6d1bb1a2fa4d9cd6fc7b7e58f3c906af', '2024-12-15 15:45:58', 76, 0),
('aa', 'aa', 'aaa', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', '2024-12-15 20:59:50', 77, 0);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
