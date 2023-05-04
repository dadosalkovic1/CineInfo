-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.25:3306
-- Generation Time: May 04, 2023 at 03:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maturski`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `writers` varchar(1000) NOT NULL,
  `directors` varchar(1000) NOT NULL,
  `casts` varchar(1000) NOT NULL,
  `movie_desc` varchar(1000) NOT NULL,
  `trailer` text NOT NULL,
  `movie_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `writers`, `directors`, `casts`, `movie_desc`, `trailer`, `movie_image`) VALUES
(1, ' Spider-Man: No Way Home', 'Stan Lee, Steve Ditko', 'Jon Watts', 'Tom Holland, Zendaya, Jamie Foxx', 'With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 'https://www.youtube.com/watch?v=JfVOs4VSpmA', 'spider-man-no-way-home-teaser-poster-1270475.jpg'),
(2, 'The Pope Exorcist ', 'Michael Petroni, R. Dean McCreary', 'Julius Avery', 'Russel Crowe, Daniel Zovatto', 'Follow Gabriele Amorth, the Vatican leading exorcist, as he investigates the possession of a child and uncovers a conspiracy the Vatican has tried to keep secret.', 'https://www.youtube.com/watch?v=YJXqvnT_rsk', 'Exploring-The-Popes-Exorcist-on-the-Big-Screen.png'),
(4, 'Fast X', 'Justin Lin, Dan Mazeau', ' Louis Leterrier', 'Vin Diesel, Jordana Brewster, Tyrese Gibson', 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes.', 'https://www.youtube.com/watch?v=aOb15GVFZxU', 'fast-x-cover-3.jpg'),
(5, 'The Last of Us', 'Neil Druckmann', 'Jasmila Zbanic, Ali Abbasi', 'Pedro Pascal, Bella Ramsey', 'After a global pandemic destroys civilization, a hardened survivor takes charge of a 14-year-old girl who may be humanity last hope.', 'https://www.youtube.com/watch?v=uLtkt8BonwM', 'thelastofus.jpeg'),
(6, 'Shazam! Fury of the Gods', 'Henry Gayden, Chris Morgan', 'David F. Sandberg', 'Zachary Levi, Asher Angel, 	Jack Dylan Grazer', 'The film continues the story of teenage Billy Batson who, upon reciting the magic word \"SHAZAM!\" is transformed into his adult Super Hero alter ego, Shazam.', 'https://www.youtube.com/watch?v=Zi88i4CpHe4', 'Shazam_1679161264.jpg'),
(7, 'The Godfather Part II', 'Francis Ford Coppola, Mario Puzo', 'Francis Ford Coppola', '	Al Pacino, Robert Duvall, Diane Keaton', 'The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.', 'https://www.youtube.com/watch?v=9O1Iy9od7-A', 'MV5BMTQyMDc0ODY1OV5BMl5BanBnXkFtZTgwMDI4NjIwMjE@._V1_.jpg'),
(8, 'The Dark Knight', 'Jonathan Nolan, Christopher Nolan	', 'Christopher Nolan', 'Christian Bale, Heath Ledger, 	Aaron Eckhart', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 'https://www.youtube.com/watch?v=EXeTwQWrcwY', 'The-Hollywood-Insider-Batman-2-News.jpg'),
(9, 'The Matrix', 'Lilly Wachowski', 'Lana Wachowski', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.', 'https://www.youtube.com/watch?v=vKQi3bBA1y8', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
