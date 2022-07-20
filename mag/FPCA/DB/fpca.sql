-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2019 at 03:37 AM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpca`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `artistid` int(100) NOT NULL AUTO_INCREMENT,
  `artisitname` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `artisttype` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `adesc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`artistid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artistid`, `artisitname`, `moviename`, `artisttype`, `profile`, `adesc`) VALUES
(4, 'Vijay', 'Jilla', 'Hero', '220px-Vijay_at_Puli_Audio_Launch.jpg', 'Vijay, is an Indian film actor and playback singer who works in Tamil cinema.'),
(5, 'Kajal Aggarwa', 'Jilla', 'Actoress', '220px-Kajal_Aggarwal_on_the_sets_of_Queen_Kannada_remake.jpg', ' Indian film actress and model. She has established a career in the Telugu and Tamil film industries'),
(6, 'D.Imman', 'Jilla', 'Music Director', '9PMzN27s_400x400.jpg', 'D. Imman, is an Indian film composer and singer, predominantly working in the  film industry.'),
(7, 'R.T Neason', 'Jilla', 'Director', 'download.jpg', 'R. T. Neason is an Indian film director'),
(8, 'R.T Neason', 'Jilla', 'Script writer', '1024px-Rtneason1.jpg', 'Neason also assisted in story and screenplay of Velayudham'),
(9, 'Shreya Ghosha', 'Jilla', 'Singer', 'Shreya_Ghoshal_at_Filmfare_Awards_South.jpg', 'Indian playback singer.'),
(10, 'R.B. Choudary', 'Jilla', 'Producer', 'rbchoudary.jpg', ' Indian film producer who has done many multilingual films in 4 languages'),
(11, 'Priyan', 'Jilla', 'Cinematography', '220px-Cinematographer_Priyan.jpg', 'Indian cinematographer who has worked on Tamil language films'),
(12, 'Babu Raja', 'Jilla', 'Production Controller', 'po6.jpg', 'Babu Raja Known for Jilla'),
(14, 'Mohan Lal', 'lucifer', 'Hero', 'images.jpg', 'Complete Actor');

-- --------------------------------------------------------

--
-- Table structure for table `ccount`
--

DROP TABLE IF EXISTS `ccount`;
CREATE TABLE IF NOT EXISTS `ccount` (
  `cmid` int(100) NOT NULL AUTO_INCREMENT,
  `count` int(100) NOT NULL,
  `movie` varchar(100) NOT NULL,
  PRIMARY KEY (`cmid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccount`
--

INSERT INTO `ccount` (`cmid`, `count`, `movie`) VALUES
(1, 3, 'Jilla');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `moviename` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cid`, `username`, `comment`, `moviename`, `date`) VALUES
(9, 'vipin', 'entertained...lot....', 'MAD', '2019-03-16 07:36:26'),
(14, 'qwe', 'super moviee', 'Jilla', '2019-03-18 05:41:27'),
(16, 'qwe', 'Waiting For An Super Action Film', 'Jilla', '2019-03-18 05:54:57'),
(17, 'qwe', 'Waiting For An Super Action Film', 'Jilla', '2019-03-18 07:05:32'),
(24, 'qwe', 'Vijay Super Moviee', 'Jilla', '2019-03-18 07:52:06'),
(25, 'vipin', 'Waiting For An Super Action Film', 'Jilla', '2019-03-18 15:02:20'),
(26, 'vipin', 'soopermoviee', 'MAD', '2019-03-18 15:03:18'),
(27, 'sam', 'good movie', 'Jilla', '2019-03-19 02:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `phone`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '0', '1'),
(8, 'vipin', 'vipin', 'User', '', '1'),
(7, 'asd', 'asd', 'controller', '', '1'),
(10, 'ram', 'ram', 'User', '7879798779797', '1'),
(11, 'qwe', 'qwe', 'controller', '21321321321', '1'),
(12, 'zx', 'zx', 'controller', '14141234', '0'),
(13, 'sam', 'sam', 'User', '9249902771', '1'),
(14, 'arun', 'arun', 'controller', '9898989898', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `mid` int(100) NOT NULL AUTO_INCREMENT,
  `mname` varchar(100) DEFAULT NULL,
  `director` varchar(100) DEFAULT NULL,
  `Writer` varchar(100) DEFAULT NULL,
  `Hero` varchar(100) DEFAULT NULL,
  `Heroine` varchar(100) DEFAULT NULL,
  `Rating` varchar(100) DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `controller` varchar(100) NOT NULL,
  `count` int(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `mname`, `director`, `Writer`, `Hero`, `Heroine`, `Rating`, `Comments`, `description`, `controller`, `count`) VALUES
(12, 'Jilla', 'R.T Neason', 'R.T Neason', 'Vijay(Thalapathy)', 'Kajal Agarval', '8.5', '1.jpg', 'A thrilling Family Entertainer Movie', 'asd', 6),
(15, 'MAD', 'Das', 'james', 'John', 'Merin', '7.8', '3339671958.jpg', 'Crime Thriller', 'qwe', 2),
(17, 'Velayudham', 'Mohan Raja', 'M. Raja', 'Vijay', 'Hansika Motwani', '8.5', 'velayudham.jpg', 'A milkman moves to Chennai from the village and unwittingly stops a number of crimes. When a young journalist learns of this, she convinces him to become a superhero and fight for the common man.', '', 0),
(18, 'lucifer', 'PrithviRaj', 'Murali Gopi', 'Mohan Lal', 'Manju Warrier', '8.5', 'download.jpg', 'Lucifer is an upcoming Indian Malayalam-language film directed by Prithviraj Sukumaran and written by Murali Gopy.', 'arun', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(100) NOT NULL AUTO_INCREMENT,
  `moviename` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(100) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `moviename`, `cname`, `message`, `day`, `count`) VALUES
(3, 'Jilla', 'asd', 'Payment Received', '2019-03-19 07:31:45', 0),
(4, 'MAD', 'qwe', 'Location Changed Sequence 28', '2019-03-19 05:14:08', 1),
(5, 'lucifer', 'arun', 'payment Added', '2019-03-19 03:13:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `duty` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `moviename` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `username`, `duty`, `amount`, `day`, `moviename`) VALUES
(2, 'Vijay', '2', '10000', '2019-03-18 08:03:00', 'Jilla'),
(3, 'Shreya Ghosha', '5', '20000', '2019-03-18 08:05:52', 'Jilla'),
(4, 'Kajal Aggarwa', '2', '10000', '2019-03-18 15:03:48', 'Jilla'),
(5, 'Mohan Lal', '2', '10000', '2019-03-19 03:16:28', 'lucifer');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pid`, `pname`, `moviename`, `description`, `image`) VALUES
(2, 'Ernakulam', 'Madhura ', 'Song 1:Frame 2', 'Tulips.jpg'),
(3, 'Fort Kochi', 'Madhura ', 'Song2 Frame 1', 'Desert.jpg'),
(4, 'Kochi', 'lucifer', 'Marine Drive Seen 2 Frame 1', 'clouds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `cash` int(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `position`, `cash`) VALUES
(1, 'Hero', 5000),
(2, 'Director', 7000),
(3, 'Script writer', 6000),
(4, 'Singer', 4000),
(5, 'Music Director', 5000),
(6, 'Actoress', 5000),
(7, 'Production Controller', 4000),
(8, 'Producer', 0),
(9, 'Cinematography', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vid` int(100) NOT NULL AUTO_INCREMENT,
  `vehiclename` varchar(100) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `vehicledesc` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `vehiclename`, `moviename`, `vehicledesc`, `type`, `image`) VALUES
(1, 'Innova', 'Jilla', 'used For movie shots', 'Film frame', 'innova.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
