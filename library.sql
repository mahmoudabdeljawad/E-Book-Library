-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 09:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(19, 13, 4, 1),
(21, 9, 12, 1),
(27, 15, 4, 1),
(28, 15, 8, 1),
(34, 21, 5, 1),
(35, 14, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'CS BOOK', 'CSBOOK'),
(2, 'Action & drama', 'Action drama'),
(3, 'Science fiction and fantasy', 'Sciencefictionandfantasy');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5),
(0, 0, 4, 1),
(0, 0, 4, 1),
(0, 0, 4, 1),
(0, 0, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(4, 1, 'C Programming Language 4th Edition ', 'This book features an enhanced, layflat binding, which allows the book to stay open more easily when placed on a flat surface. This special binding method—noticeable by a small space inside the spine—also increases durability. C++11 has arrived: thoroughly master it, with the definitive new guide from C++ creator Bjarne Stroustrup, C++ Programming Language, Fourth Edition! The brand-new edition of the worlds most trusted and widely read guide to C++, it has been comprehensively updated for the long-awaited C++11 standard. Extensively rewritten to present the C++11 language, standard library, and key design techniques as an integrated whole, Stroustrup thoroughly addresses changes that make C++11 feel like a whole new language, offering definitive guidance for leveraging its improvements in performance, reliability, and clarity. C++ programmers around the world recognize Bjarne Stoustrup as the go-to expert for the absolutely authoritative and exceptionally useful information they need to write outstanding C++ programs. Now, as C++11 compilers arrive and development organizations migrate to the new standard, they know exactly where to turn once more: Stoustrup C++ Programming Language, Fourth Edition.\r\n', 'C Programming Language 4th Edition ', 50, 'TheC++ ProgrammingLanguage4thEdition.png', '2022-02-18', 1),
(5, 3, 'war of the worlds', 'is a novel science fiction by English writer Herbert George Wells . It first appeared in serial form in 1897, and was published simultaneously in Pearson in the United Kingdom and Cosmopolitan in the United States. It was first published in book form by William Heinemann in London in 1898. The novel is based on the account of the protagonist\'s (unnamed) first man living in Surrey as well as his younger brother in London, telling the story of Earth being invaded by Mars . The novel was written between 1895 and 1897,  is one of the oldest stories detailing the conflict between humans and extraterrestrial races. And it garnered a lot of comments that rarely happened with other science fiction works. \r\n\r\nThe novel consists of two parts, Book One: The Coming of the Martians and Book Two: The Land Under the Rule of the Martians. The narrator is a philosophical author, who struggles to get back to his wife as he sees the Martians turn the London countryside into ruins. The first book also recounts the experience of his brother, who is also not named, describing events unraveling in the capital, forcing him to flee the attack of the Martians before boarding a steamer near Tillingham on the Essex coast.\r\n\r\nThe story has been linked to the conquest literature of the time. It was variously interpreted as talking about evolution, British imperialism, Victorian myths, fears and prejudices. At the time of its publication it was classified as a science romance, like his earlier novel The Time Machine. The novel has achieved great popularity, being out of print, and adapted in several films, radio plays, albums, various comics and television series, and has also released sequels and parallel stories by some authors. It even influenced the work of scholars, notably Robert Goddard. \r\n\r\n', 'waroftheworlds', 40, 'waroftheworlds.jpg', '2022-01-06', 1),
(7, 3, 'A Deadly Education', 'NEW YORK TIMES BESTSELLER • From the author of Uprooted and Spinning Silver comes the first book of the Scholomance trilogy, the story of an unwilling dark sorceress who is destined to rewrite the rules of magic.\r\n\r\nFINALIST FOR THE LODESTAR AWARD • “The dark school of magic I’ve been waiting for.”—Katherine Arden, author of the Winternight Trilogy\r\n\r\nI decided that Orion Lake needed to die after the second time he saved my life.\r\n\r\nEveryone loves Orion Lake. Everyone else, that is. Far as I’m concerned, he can keep his flashy combat magic to himself. I’m not joining his pack of adoring fans.\r\n\r\nI don’t need help surviving the Scholomance, even if they do. Forget the hordes of monsters and cursed artifacts, I’m probably the most dangerous thing in the place. Just give me a chance and I’ll level mountains and kill untold millions, make myself the dark queen of the world.\r\n\r\nAt least, that’s what the world expects. Most of the other students in here would be delighted if Orion killed me like one more evil thing that’s crawled out of the drains. Sometimes I think they want me to turn into the evil witch they assume I am. The school certainly does.\r\n\r\nBut the Scholomance isn’t getting what it wants from me. And neither is Orion Lake. I may not be anyone’s idea of the shining hero, but I’m going to make it out of this place alive, and I’m not going to slaughter thousands to do it, either.\r\n\r\nAlthough I’m giving serious consideration to just one.\r\n\r\nWith flawless mastery, Naomi Novik creates a school bursting with magic like you’ve never seen before, and a heroine for the ages—a character so sharply realized and so richly nuanced that she will live on in hearts and minds for generations to come.', 'ADeadlyEducation', 35, 'ADeadlyEducation.jpg', '2021-12-21', 6),
(8, 1, 'Data Structures and Algorithms', '<Versatile Windows 10 device with keyboard and pen included, 2-in-1 functionality: use as both laptop and tablet.Update Windows periodically to ensure that your applications have the latest security settings.</p>\r\n\r\n<p>All day battery life, rated up to 11 hours of video playback; 128GB Solid State storage. Polymer Battery.With up to 11 hours between charges, you can be sure that Transformer Mini T102HA will be right there whenever you need it. You can charge T102HA via its micro USB port, so you can use a mobile charger or any power bank with a micro USB \r\n', 'Data Structures and Algorithms', 45.99, 'C++DataStructuresandAlgorithms.png', '2022-01-06', 1),
(12, 2, 'Until Death Do Your Part', 'This is a story written from two different perspectives: one of a husband and one of a wife. Our individual lives started from two diverse worlds and combined to become one life in 1987.  We considered ourselves the typical, normal suburban family. As we grew in our marriage and focused on raising our children, we were determined to do so with God in first place and the kids in church. Unfortunately, the circumstances of life came into play a few years into our marriage and developed into a near cataclysmic end to two wonderful relationships: Our marriage to each other and our marriage to Christ.', 'Until-Death-Do-Your-Part', 25, 'UntilDeathDoYourPart.jpg', '2022-01-04', 1),
(14, 2, 'Angels Unaware\r\n', 'If ever there is a perfect day it is this day. A day of early dawn and golden sunshine. A solemn figure standing at the Griffith Observatory, overlooking the city. From nowhere and from eternity. As he looks at the rising sun, he communes with the Father in reverent silence. Looking down at the city where he will walk among us, he notices his hands. Looking at them and rolling them over to reveal his palms, he lightly clinches his fists. Though eternity is limitless and boundless, the sensation is humbling. Looking at the brightening sky, he utters a whispering prayer, \"Father, thy will be done.\" ', 'Angels-Unaware', 33, 'AngelsUnaware.jpg', '2021-12-21', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(0, 9, 'PAYID-MHA3VSY19074781MW598684W', '2021-12-21'),
(0, 9, 'PAYID-MHA6HKI12535888TR237394C', '2021-12-21'),
(0, 9, 'PAYID-MHBOTJY2EJ043302B897661Y', '2021-12-22'),
(0, 14, 'PAYID-MHBPFFI048360856C188551S', '2021-12-22'),
(0, 14, 'PAYID-MHB3OHY0UL03578R3799111H', '2021-12-23'),
(0, 15, 'PAYID-MHJBKMY5A39104378156411H', '2022-01-02'),
(0, 15, 'PAYID-MHKECDY21E93502LY050913R', '2022-01-04'),
(0, 15, 'PAYID-MHKFOSA2BA96410FS1001729', '2022-01-04'),
(0, 16, 'PAYID-MHKJRZY8A7950567J935480D', '2022-01-04'),
(0, 16, 'PAYID-MHKLCRA3TB01499JM297933T', '2022-01-04'),
(0, 16, 'PAYID-MHLABCY8WB75093MD091891V', '2022-01-05'),
(0, 21, 'PAYID-MHLJ4KQ8EC78858UG1994323', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$MUBPLlewk77tn1vcK0ftjuqGIZMSM8o7RiEeDFpeBvwrmselhQ./2', 1, 'Code', 'Projects', '', '', 'd9569bbed4393e2ceb1af7ba64fdf86a.jpg', 1, '', '', '0000-00-00'),
(14, 'dr.jehad@gmail.com', '$2y$10$.qPQ4IHA8rcV/iiv1WlOy.RSToBn2kQCrY83K/jTw0E4ih1KegIeu', 0, 'mahmoud', 'abd', 'alzarq', '0789156895', '', 1, '', '', '2021-12-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
