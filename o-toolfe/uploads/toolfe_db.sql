-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 09:52 AM
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
-- Database: `toolfe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_form`
--

CREATE TABLE `career_form` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `question_1` text NOT NULL,
  `question_2` text NOT NULL,
  `question_3` text NOT NULL,
  `question_4` text NOT NULL,
  `question_5` text NOT NULL,
  `question_6` text NOT NULL,
  `question_7` text NOT NULL,
  `question_8` text NOT NULL,
  `question_9` text NOT NULL,
  `question_10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_form`
--

INSERT INTO `career_form` (`id`, `name`, `email`, `phone`, `role`, `resume`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `question_6`, `question_7`, `question_8`, `question_9`, `question_10`) VALUES
(21, 'Beau Woodard', 'quhil@mailinator.com', '+1 (154) 449-9053', 'RPA Developer', 'big bounty.pdf', 'Fugiat nihil ab ad d', 'Ducimus eos provide', 'Ipsa ullamco recusa', 'Illum ipsum reprehe', 'Odit voluptates in o', 'In aut aut ut optio', 'Corporis id in volup', 'Enim et pariatur Re', 'Autem vel praesentiu', 'Dicta ut possimus l'),
(24, 'Deanna Fisher', 'zelymuhun@mailinator.com', '+1 (698) 579-7046', 'RPA Developer', 'uploads/awdasda.pdf', 'Non est ratione sed', 'Tempora delectus of', 'Cupiditate magna vel', 'Voluptatum dolor cil', 'Animi tempora inven', 'Consequat Commodo e', 'Voluptatum molestiae', 'Cillum quis quia lab', 'Qui esse quod possim', 'Ab consectetur qui '),
(25, 'Slade Morrison', 'zisyjycomy@mailinator.com', '+1 (931) 473-2913', 'RPA Developer', 'uploads/Leave policy.pdf', 'Ut facilis ea deseru', 'Sunt esse blanditi', 'Assumenda distinctio', 'Cillum aliqua Labor', 'Dolore qui laborum d', 'Amet proident dolo', 'Nulla lorem mollit d', 'Eiusmod rerum fugit', 'Aut perferendis offi', 'Quam consectetur ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career_form`
--
ALTER TABLE `career_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career_form`
--
ALTER TABLE `career_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
