

### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###

-- Database: `TodoList`
--

-- --------------------------------------------------------

--
-- Table structure for `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` text NOT NULL,
  `description` text NOT NULL,
  `time` timestamp NOT NULL CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--