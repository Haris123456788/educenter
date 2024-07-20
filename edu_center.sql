-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 10:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `course_banner` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `trending` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `course_banner`, `category`, `fee`, `trending`, `date`) VALUES
(1, 'PHP Laravel', 'Learn PHP and Laravel framework essentials, including MVC architecture, database integration, and RESTful APIs. Build robust, scalable web applications with hands-on projects.', 'php.png', 'Development', '$59.99', 0, '2024-07-19 18:15:28'),
(2, 'Python', 'Explore Python programming basics, data structures, and libraries. Develop problem-solving skills through hands-on projects in web development, data analysis, and automation. Perfect for beginners.', 'python.png', 'Development', '$69.99', 0, '2024-07-19 18:16:10'),
(3, 'MERN Stack', 'Master MERN stack: MongoDB, Express.js, React, and Node.js. Learn to build full-stack web applications with hands-on projects, covering both front-end and back-end development.', 'mern.png', 'Development', '$89.99', 0, '2024-07-19 18:17:47'),
(4, 'Graphic Designing', 'Learn essential graphic design principles, tools, and techniques. Master Adobe Creative Suite, typography, branding, and visual storytelling. Create impactful designs for print and digital media.', 'graphic.png', 'Development', '$79.99', 1, '2024-07-19 19:14:12'),
(5, 'Digital Marketing', 'Discover digital marketing strategies, SEO, social media, content creation, and analytics. Gain practical skills to optimize online presence and drive business growth.', 'marketing.jpeg', 'Advanced Course', '$89.99', 1, '2024-07-19 19:14:19'),
(6, 'Wordpress', 'Master WordPress fundamentals, theme customization, plugin management, and website optimization. Build and maintain professional, responsive websites with ease. Ideal for beginners and aspiring developers.', 'wordpress.jpg', 'Development', '$39.99', 1, '2024-07-19 19:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
