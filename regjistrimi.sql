phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 11:21 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: regjistrimi
--

-- --------------------------------------------------------

--
-- Table structure for table perdoruesit
--

CREATE TABLE perdoruesit (
  id int(11) NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  salt varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table perdoruesit
--

INSERT INTO perdoruesit (id, username, email, password, salt) VALUES
(6, 'Elire', 'elira2010@hotmail.com', 'Elira123-', NULL),
(9, 'Elsa', 'elsa123@gmail.com', 'Elsa1234', NULL),
(13, 'deliza', 'deliza.kadriu@gmail.com', 'a735f8c536bd01d0a41ddeab7b1e8b99', 'b4YwZW41gKyYfyfv'),
(14, 'Dora', 'dora.j@gmail.com', '5b65e5d72b877dc0d7510c699efc17c1', '8Xo8D4O43kS+p6cP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table perdoruesit
--
ALTER TABLE perdoruesit
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY email (email);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table perdoruesit
--
ALTER TABLE perdoruesit
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
