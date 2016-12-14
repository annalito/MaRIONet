SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marionetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `event20160111`
--

CREATE TABLE IF NOT EXISTS `event20160111` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `affiliation` varchar(256) NOT NULL,
  `question` varchar(256) DEFAULT NULL,
  `requirements` varchar(128) DEFAULT NULL,
  `dinner` boolean NOT NULL DEFAULT 0, 
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosts`
--

INSERT INTO `event20160111` (`id`, `name`, `email`, `affiliation`, `question`, `requirements`, `dinner` ) VALUES
(1, 'Jeremy Singer', 'jeremy.singer@glasgow.ac.uk', 'University of Glasgow', NULL, NULL , 1),
(2, 'Anna Lito Michala', 'annalito.michala@glasgow.ac.uk', 'University of Glasgow', NULL, NULL, 0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
