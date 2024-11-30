-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 527177660, 'Muhammad', 'Arslan', 'arslan@gmail.com', '123456789', '1635619553category-3.jpg', 'offline'),
(2, 1357700699, 'Azam', 'Naveed', 'azam@gmail.com', '123456789', '1635621216buy-1.jpg', 'active'),
(3, 1326782755, 'Muhammad', 'Ilyas', 'ilyas@gmail.com', '123456789', '1635658934buy-2.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_message`
--

CREATE TABLE `customer_message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_message`
--

INSERT INTO `customer_message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 527177660, 1326782755, 'hello world'),
(2, 527177660, 1326782755, 'arslan??'),
(3, 527177660, 1326782755, 'hello man where are you ?'),
(4, 527177660, 1326782755, 'where ?'),
(5, 527177660, 1326782755, 'hello world'),
(6, 1357700699, 1326782755, 'hey man'),
(7, 1357700699, 1326782755, 'how are you?'),
(8, 1326782755, 1357700699, 'hello world'),
(9, 527177660, 1326782755, 'hello'),
(10, 527177660, 1326782755, 'how are you'),
(11, 527177660, 1326782755, 'how are you '),
(12, 527177660, 1326782755, 'bro how are you'),
(13, 527177660, 1326782755, 'L P C'),
(14, 1326782755, 527177660, 'hello '),
(15, 1357700699, 527177660, 'hello'),
(16, 527177660, 1357700699, 'hello'),
(17, 527177660, 1357700699, 'how are you ?'),
(18, 527177660, 1357700699, 'im fine how are you?'),
(19, 527177660, 1357700699, ' im fiine'),
(20, 1357700699, 527177660, 'hello'),
(21, 527177660, 1326782755, 'pagal he kya'),
(22, 1326782755, 527177660, 'to ho ga '),
(23, 1326782755, 527177660, 'hello'),
(24, 1326782755, 527177660, 'im ilyas from your university of sargodha'),
(25, 527177660, 1326782755, 'o wow that\'s great'),
(26, 527177660, 1326782755, 'from which class?'),
(27, 1326782755, 527177660, 'BSCS'),
(28, 527177660, 1326782755, 'means My senior?'),
(29, 1326782755, 527177660, 'yes'),
(30, 1326782755, 527177660, 'asdfadsfasdf haasd fha sdghasgasdf'),
(31, 1326782755, 527177660, 'hello'),
(32, 1326782755, 527177660, 'asghdfas dgfgasdf'),
(33, 1326782755, 527177660, 'asdjkagsddfgasdfgasdghagsdfhgaasdffgjhasdgfjhasgdkfjfhgassdfhfgkjasdhfghasdgfghasdg'),
(34, 527177660, 1326782755, 'hy'),
(35, 1326782755, 527177660, 'hello'),
(36, 1326782755, 527177660, 'bro how are youo'),
(37, 527177660, 1326782755, 'im fine bro '),
(38, 527177660, 1326782755, 'you tell'),
(39, 1326782755, 527177660, '..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer_message`
--
ALTER TABLE `customer_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_message`
--
ALTER TABLE `customer_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
