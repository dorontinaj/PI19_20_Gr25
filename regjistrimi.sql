create database regjistrimi;
use regjistrimi;

-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 09:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
  salt varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table perdoruesit
--

INSERT INTO perdoruesit (id, username, email, password) VALUES
(6, 'Elire', 'elira2010@hotmail.com', 'Elira123-'),
(9, 'Elsa', 'elsa123@gmail.com', 'Elsa1234');

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

-- AUTO_INCREMENT for table perdoruesit
--
ALTER TABLE perdoruesit
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
select* from perdoruesit;

