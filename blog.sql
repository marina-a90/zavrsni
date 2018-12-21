-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 11:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `text`, `post_id`) VALUES
(99, 'sima', 'komentar na adminov post.', 43),
(100, 'jova', 'komentar 1', 37),
(101, 'pera', 'komentar 2', 37),
(102, 'djoka', 'komentar 2 na adminov post', 43);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`) VALUES
(37, 'naslov', 'text', 1, '2018-12-21 20:43:15'),
(42, 'Lorem Ispum', 'Lorem ipsum dolor sit amet, phaedrum cotidieque deterruisset vim ex, facer dicam mel ex. Aliquip honestatis eum eu. Ut aliquam meliore mei, movet impetus iuvaret cu pro. Adhuc postulant temporibus est te, vel no essent pertinax.\r\n\r\nQui ea equidem sententiae, in per fugit labore. No sit assum mediocrem iracundia, mel dicta audire an. Falli euismod forensibus vel in, et omnium salutandi sit, ea his denique laboramus. Vero dicit appetere eos ea, cu usu soluta percipit persequeris. Delenit oporteat senserit ad cum, qui duis voluptua ei.\r\n\r\nEx eirmod fierent ius, ut cum dicam latine utroque, ea elit cibo accumsan usu. Stet malorum docendi ne sit, qui et affert graecis. No dico nullam corpora ius, democritum persequeris repudiandae est ei. Ut prima deserunt consetetur qui, id aliquip fuisset duo. Ut aliquid assentior eum, graeci assentior pertinacia ei his.\r\n\r\nCu debet postulant nec, an agam lorem vel. At mutat iusto putent has. Mei wisi idque alterum ex. Pri id illum legere.\r\n\r\nEi sit magna integre efficiendi, nemore inermis in mei, hinc ceteros invenire usu an. Vel an harum temporibus necessitatibus. Duo an volutpat assentior, in vim tollit sensibus. Usu verear bonorum delectus cu, ius ei mazim labores dissentiet, ut vix posse corpora.', 12, '2018-12-21 21:58:38'),
(43, 'FULL BLOG EXPERIENCE', '<b>Da biste potpuno testirali program, ulogujte se kao admin.</b>\r\n\r\nUsername:\r\nadmin\r\n\r\nPassword:\r\nadmin ', 11, '2018-12-21 21:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'marina', 'a', 'marina.a', 'marina@email.com', '123'),
(2, 'bojan', 'b', 'bole', 'bole@email.com', '123'),
(4, 'ime', 'prezime', 'username', 'imejl@email.com', '123'),
(5, 's', 'd', 'f', 'f', 'f'),
(6, 'dssd', 'fsfsaf', 'saas', 'email@email.com', '11'),
(8, 'joca', 'jocic', 'joca', 'joca@email.com', '123'),
(10, 's', 'd', 'sdw', 'wdd@mail.com', '1'),
(11, 'admin', 'admin', 'admin', 'admin@email.com', 'admin'),
(12, 'pera', 'peric', 'pera', 'pera@email.com', 'pera'),
(13, 'jovan', 'jovanovic', 'jovan', 'jovan@email.com', 'jovan'),
(14, 'sima', 'simic', 'sima', 'sima@email.com', 'sima'),
(15, 'sda08098', 'nsadln0a', 'adljda', 'dasljs@mail.com', '1'),
(16, '047696798789^^&^', 'sndn', 'sdljajldjl', 'hj@mail.com', '1'),
(17, 'dsfdsf8009840509890', 'sdffdfsd', 'ohsdhdfjslf', 'jdisj@mail.com', '1'),
(18, 'hadk^&**&(*', 'DNLLKNFDS', 'FDSFL', 'kdsa@email.com', '1'),
(19, 'hhj687', 'jdsl', 'aaaaaa', 'aaaaa@email.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_posts` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `posts-users` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts-users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
