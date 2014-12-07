-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2014 at 12:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categorias`
--

CREATE TABLE IF NOT EXISTS `Categorias` (
`id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categorias`
--

INSERT INTO `Categorias` (`id`, `nombre`) VALUES
(1, 'Programming'),
(2, 'Desing'),
(3, 'Reviews'),
(4, 'Tutorials'),
(6, 'Technology & Gadgets'),
(7, 'Gadgets'),
(10, 'Newspaper'),
(12, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
`id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `autor` varchar(255) NOT NULL,
  `etiquetas` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`id`, `categoria`, `titulo`, `body`, `autor`, `etiquetas`, `date`) VALUES
(1, 1, 'What is computer Programming?', 'Computer programming (often shortened to programming) is a process that leads from an original formulation of a computing problem to executable computer programs. Programming involves activities such as analysis, developing understanding, generating algorithms, verification of requirements of algorithms including their correctness and resource consumption, and implementation (commonly referred to as coding[1][2]) of algorithms in a target programming language. Source code is written in one or more programming languages (such as C, C++, C#, Java, Python, Smalltalk, JavaScript, etc.). The purpose of programming is to find a sequence of instructions that will automate performing a specific task or solving a given problem.[citation needed] The process of programming thus often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms and formal logic.  Related tasks include testing, debugging, and maintaining the source code, implementation of the build system, and management of derived artifacts such as machine code of computer programs. These might be considered part of the programming process, but often the term "software development" is used for this larger process with the term "programming", "implementation", or "coding" reserved for the actual writing of source code. Software engineering combines engineering techniques with software development practices.', 'Erick', 'Code', '2014-12-06 00:24:58'),
(2, 2, 'Web development.', 'Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications, electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, "web development" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. These CMS can be made from scratch, proprietary (such as Open Text) or open source (such as Drupal). In broad terms the CMS acts as middleware between the database and the user through the browser. A principle benefit of a CMS is that it allows non-technical people to make changes to their Web site without having technical knowledge.[1]  For larger organizations and businesses, web development teams can consist of hundreds of people (web developers). Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer and/or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department.', 'Erick', 'Web', '2014-12-06 00:24:58'),
(3, 3, 'Updated Sample Post', 'Version 2.', 'Gustavo', 'info, test, demo, update', '2014-12-07 06:39:02'),
(9, 3, 'Second Sample Post', 'Second test.', 'Gustavo', 'info, test, demo', '2014-12-07 06:45:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categorias`
--
ALTER TABLE `Categorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categorias`
--
ALTER TABLE `Categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
