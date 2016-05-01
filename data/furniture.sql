-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 11:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
--

*Table structure for table `admin`
--


CREATE TABLE IF NOT EXISTS `admin` (
  
`username` varchar(50) NOT NULL,
  
`password` varchar(50) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;



*Dumping data for table `admin`
--


INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');


_____________________________________________________________________________________________________________________________________________________________________

*Table structure for table `guest`
--


CREATE TABLE IF NOT EXISTS `guest` (
  
`id` varchar(10) NOT NULL,
  
`name` varchar(60) NOT NULL,
  
`email` varchar(40) NOT NULL,
  
`contact` varchar(15) NOT NULL,
  
`address` varchar(100) NOT NULL,
  
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



*Dumping data for table `guest`
--


INSERT INTO `guest` (`id`, `name`, `email`, `contact`, `address`) VALUES

('101', 'jjhf', 'kk@gmail.com', '9056789542', 'saf'),

('102', 'rovel', 'rovel@gmail.com', '8971234567', 'mumbai');


_________________________________________________________________________________________________________________________________________________________________________ 

*Table structure for table `payment`
--


CREATE TABLE IF NOT EXISTS `payment` (
  
`id` varchar(10) NOT NULL,
  
`name` varchar(50) NOT NULL,
  
`cno` varchar(50) NOT NULL,
  
`cvv` varchar(50) NOT NULL,
  
`pn` varchar(60) NOT NULL,
  
`tot` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 

*Dumping data for table `payment`
---


INSERT INTO `payment` (`id`, `name`, `cno`, `cvv`, `pn`, `tot`) VALUES

('1', 'jyotsna', '6543217812345678', '678', 'Sofa5, \nShoe Cabinet7, \n', 50000),

('102', 'rovel', '2134567812345644', '456', 'cupboard12, \ncupboard4, \n', 24000),

('2', 'poonam', '4444567812345678', '567', 'TV Cabinet5, \n', 14000),

('1', 'acfhg', '1267567812345678', '678', 'cupboard8, \n', 10000);


________________________________________________________________________________________________________________________________________________________________________

*Table structure for table `product`
---


CREATE TABLE IF NOT EXISTS `product` (
  
`id` varchar(10) NOT NULL,
  
`name` varchar(50) NOT NULL,
  
`img` varchar(50) NOT NULL,
  `overview` varchar(2000) NOT NULL,
  
`details` varchar(2000) NOT NULL,
  
`price` int(10) NOT NULL,
  
`disc` int(10) NOT NULL,
  
`catg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



 *Dumping data for table `product`
---


INSERT INTO `product` (`id`, `name`, `img`, `overview`, `details`, `price`, `disc`, `catg`) VALUES

('111', 'cupboard1', 'cb/c1.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'Cupboard'),

('112', 'cupboard2', 'cb/c2.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 5000, 0, 'Cupboard'),

('113', 'cupboard3', 'cb/c3.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 9000, 0, 'Cupboard'),

('114', 'cupboard4', 'cb/c4.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'Cupboard'),

('115', 'cupboard5', 'cb/c5.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 8000, 0, 'Cupboard'),

('116', 'cupboard6', 'cb/c6.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 4000, 0, 'Cupboard'),

('117', 'cupboard7', 'cb/c7.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'Cupboard'),

('118', 'cupboard8', 'cb/c8.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 10000, 0, 'Cupboard'),

('119', 'cupboard9', 'cb/c9.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 15000, 0, 'Cupboard'),

('120', 'cupboard10', 'cb/c10.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 15000, 0, 'Cupboard'),

('121', 'cupboard11', 'cb/c11.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 16000, 0, 'Cupboard'),

('122', 'cupboard12', 'cb/c12.jpg', 'A cupboard is a type of storage cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 18000, 0, 'Cupboard'),

('123', 'TV Cabinet1', 'tv/t1.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 9000, 0, 'TV Cabinet'),

('124', 'TV Cabinet2', 'tv/t2.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 10000, 0, 'TV Cabinet'),

('125', 'TV Cabinet3', 'tv/t3.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 15000, 0, 'TV Cabinet'),
('126', 'TV Cabinet4', 'tv/t4.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 16000, 0, 'TV Cabinet'),

('127', 'TV Cabinet5', 'tv/t5.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 14000, 0, 'TV Cabinet'),

('128', 'TV Cabinet6', 'tv/t6.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 13000, 0, 'TV Cabinet'),

('129', 'TV Cabinet7', 'tv/t7.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 12000, 0, 'TV Cabinet'),

('130', 'TV Cabinet8', 'tv/t8.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 8000, 0, 'TV Cabinet'),

('131', 'TV Cabinet9', 'tv/t9.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 30000, 0, 'TV Cabinet'),

('132', 'TV Cabinet10', 'tv/t10.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 4000, 0, 'TV Cabinet'),

('133', 'TV Cabinet11', 'tv/t11.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 25000, 0, 'TV Cabinet'),

('134', 'TV Cabinet12', 'tv/t12.jpg', 'An airing cupboard is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted with door hardware', 30000, 0, 'TV Cabinet'),

('135', 'Shoe Cabinet1', 'shoe/sh1.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 2500, 0, 'Shoe Rack'),

('136', 'Shoe Cabinet2', 'shoe/sh2.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 5000, 0, 'Shoe Rack'),

('137', 'Shoe Cabinet3', 'shoe/sh3.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 7000, 0, 'Shoe Rack'),

('138', 'Shoe Cabinet4', 'shoe/sh4.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 7500, 0, 'Shoe Rack'),

('139', 'Shoe Cabinet5', 'shoe/sh5.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 8000, 0, 'Shoe Rack'),

('140', 'Shoe Cabinet6', 'shoe/sh6.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 8500, 0, 'Shoe Rack'),

('141', 'Shoe Cabinet7', 'shoe/sh7.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 5000, 0, 'Shoe Rack'),

('142', 'Shoe Cabinet8', 'shoe/sh8.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 6000, 0, 'Shoe Rack'),

('143', 'Shoe Cabinet9', 'shoe/sh9.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 7000, 0, 'Shoe Rack'),

('144', 'Shoe Cabinet10', 'shoe/sh10.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 4000, 0, 'Shoe Rack'),

('145', 'Shoe Cabinet11', 'shoe/sh11.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 3000, 0, 'Shoe Rack'),

('146', 'Shoe Cabinet12', 'shoe/sh12.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system. ', 1500, 0, 'Shoe Rack'),

('147', 'Sofa1', 'sofa/so1.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 20000, 0, 'Sofa'),

('148', 'Sofa2', 'sofa/so2.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 15000, 0, 'Sofa'),

('149', 'Sofa3', 'sofa/so3.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 10000, 0, 'Sofa'),

('150', 'Sofa4', 'sofa/so4.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 50000, 0, 'Sofa'),

('151', 'Sofa5', 'sofa/so5.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 45000, 0, 'Sofa'),

('152', 'Sofa6', 'sofa/so6.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 60000, 0, 'Sofa'),

('153', 'Sofa7', 'sofa/so7.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 30000, 0, 'Sofa'),

('154', 'Sofa8', 'sofa/so8.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 20000, 0, 'Sofa'),

('155', 'Sofa9', 'sofa/so9.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 15000, 0, 'Sofa'),

('156', 'Sofa10', 'sofa/so10.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 28000, 0, 'Sofa'),

('157', 'Sofa11', 'sofa/so11.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 30000, 0, 'Sofa'),

('158', 'Sofa12', 'sofa/so12.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'A couch or sofa is a piece of furniture for seating two or more people in the form of a bench, with or without armrests, that is partially or entirely upholstered, and often fitted with springs and tailored cushions.', 15000, 0, 'Sofa'),

('159', 'Dining1', 'dining/d1.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 20000, 0, 'Dining Table'),

('160', 'Dining2', 'dining/d2.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 25000, 0, 'Dining Table'),

('161', 'Dining3', 'dining/d3.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 30000, 0, 'Dining Table'),

('162', 'Dining4', 'dining/d4.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 35000, 0, 'Dining Table'),

('163', 'Dining5', 'dining/d5.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 60000, 0, 'Dining Table'),

('164', 'Dining6', 'dining/d6.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 50000, 0, 'Dining Table'),

('165', 'Dining7', 'dining/d7.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 45000, 0, 'Dining Table'),

('166', 'Dining8', 'dining/d8.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 30000, 0, 'Dining Table'),

('167', 'Dining9', 'dining/d9.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 25000, 0, 'Dining Table'),

('168', 'Dining10', 'dining/d10.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 60000, 0, 'Dining Table'),

('169', 'Dining11', 'dining/d6.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 40000, 0, 'Dining Table'),

('170', 'Dining12', 'dining/d12.jpg', 'A table is a form of furniture with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp. ', 20000, 0, 'Dining Table'),

('171', 'abc', 'Audi A4.jpg', 'fdfwef', 'fewfe', 3000, 0, 'Desktop');


__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________

*Table structure for table `reg`
---


CREATE TABLE IF NOT EXISTS `reg` (
  
`id` varchar(10) NOT NULL,
  
`fname` varchar(50) NOT NULL,
  
`mname` varchar(50) NOT NULL,
  
`lname` varchar(50) NOT NULL,
  
`gender` varchar(10) NOT NULL,
  
`email` varchar(50) NOT NULL,
  
`cont` varchar(10) NOT NULL,
  
`city` varchar(50) NOT NULL,
  
`address` varchar(100) NOT NULL,
  
`username` varchar(50) NOT NULL,
  
`password` varchar(50) NOT NULL,
  
PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 

*Dumping data for table `reg`
---


INSERT INTO `reg` (`id`, `fname`, `mname`, `lname`, `gender`, `email`, `cont`, `city`, `address`, `username`, `password`) VALUES

('1', 'Shraddha', 'A', 'Deshmukh', 'Female', 'shraddha11deshmukh@@gmail.com', '8162583812', 'San Francisco', 'Pleasanton', 'shraddha11deshmukh', '123'),

('2', 'Priya', 'K', 'Sharma', 'Female', 'priyadisha1@gmail.com', '9892823644', 'San Francisco', 'Fremont', 'priyadisha1', 'abc');
_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________



*Table structure for table `temp`
---


CREATE TABLE IF NOT EXISTS `temp` (
  
`id` varchar(10) NOT NULL,
  
`pid` varchar(20) NOT NULL,
  
`name` varchar(80) NOT NULL,
  
`price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
 Table structure for table `used_product`
--

CREATE TABLE IF NOT EXISTS `used_product` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `overview` varchar(2000) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `price` int(10) NOT NULL,
  `disc` int(10) NOT NULL,
  `catg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_product`
--

INSERT INTO `used_product` (`id`, `name`, `img`, `overview`, `details`, `price`, `disc`, `catg`) VALUES
('101', 'cupboard1', 'used/cb/c1.jpg', 'A cupboard is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'UsedCupboard'),
('102', 'cupboard2', 'used/cb/c2.jpg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 5000, 0, 'UsedCupboard'),
('103', 'cupboard3', 'used/cb/c3.jpeg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 9000, 0, 'UsedCupboard'),
('104', 'cupboard4', 'used/cb/c4.jpeg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'UsedCupboard'),
('105', 'cupboard5', 'used/cb/c5.jpg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 8000, 0, 'UsedCupboard'),
('106', 'cupboard6', 'used/cb/c6.jpeg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 4000, 0, 'UsedCupboard'),
('107', 'cupboard7', 'used/cb/c7.jpg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 6000, 0, 'UsedCupboard'),
('108', 'cupboard8', 'used/cb/c8.jpg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 10000, 0, 'UsedCupboard'),
('109', 'cupboard9', 'used/cb/c9.jpg', 'A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 15000, 0, 'UsedCupboard'),
('110', 'cupboard10','used/cb/c10.jpg','A cupboardÂ is a type of storageÂ cabinet', 'The term cupboard was originally used to describe an open-shelved side table for displaying plates', 15000, 0, 'UsedCupboard'),

('201', 'TV Cabinet1', 'used/tv/tv1.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 9000, 0, 'Used TV Cabinet'),
('202', 'TV Cabinet2', 'used/tv/tv2.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 10000, 0, 'Used TV Cabinet'),
('203', 'TV Cabinet3', 'used/tv/tv3.jpeg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 15000, 0, 'Used TV Cabinet'),
('204', 'TV Cabinet4', 'used/tv/tv4.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 16000, 0, 'Used TV Cabinet'),
('205', 'TV Cabinet5', 'used/tv/tv5.jpeg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 14000, 0, 'Used TV Cabinet'),
('206', 'TV Cabinet6', 'used/tv/tv6.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 13000, 0, 'Used TV Cabinet'),
('207', 'TV Cabinet7', 'used/tv/tv7.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 12000, 0, 'Used TV Cabinet'),
('208', 'TV Cabinet8', 'used/tv/tv8.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 8000, 0, 'Used TV Cabinet'),
('209', 'TV Cabinet9', 'used/tv/tv9.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 30000, 0, 'Used TV Cabinet'),
('210', 'TV Cabinet10', 'used/tv/tv10.jpg', 'AnÂ airing cupboardÂ is a storage space, sometimes of walk-in dimensions,', 'Cabinets usually have one or more doors on the front, which are mounted withÂ door hardware', 4000, 0, 'Used TV Cabinet'),

('301', 'Shoe Cabinet1', 'used/shoe/sh1.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 2500, 0, 'Used Shoe Rack'),
('302', 'Shoe Cabinet2', 'used/shoe/sh2.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 5000, 0, 'Used Shoe Rack'),
('303', 'Shoe Cabinet3', 'used/shoe/sh3.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 7000, 0, 'Used Shoe Rack'),
('304', 'Shoe Cabinet4', 'used/shoe/sh4.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 7500, 0, 'Used Shoe Rack'),
('305', 'Shoe Cabinet5', 'used/shoe/sh5.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 8000, 0, 'Used Shoe Rack'),
('306', 'Shoe Cabinet6', 'used/shoe/sh6.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 8500, 0, 'Used Shoe Rack'),
('307', 'Shoe Cabinet7', 'used/shoe/sh7.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 5000, 0, 'Used Shoe Rack'),
('308', 'Shoe Cabinet8', 'used/shoe/sh8.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 6000, 0, 'Used Shoe Rack'),
('309', 'Shoe Cabinet9', 'used/shoe/sh9.jpg', 'A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 7000, 0, 'Used Shoe Rack'),
('310', 'Shoe Cabinet10','used/shoe/sh10.jpg','A shoe rack is a storage unit designed for holding shoes.', 'Shoe racks may be free-standing to place inside a closet or may be built into a closet organizer system.Â ', 4000, 0, 'Used Shoe Rack'),

('401', 'Sofa1', 'used/sofa/s1.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 20000, 0, 'Used Sofa'),
('402', 'Sofa2', 'used/sofa/s2.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 15000, 0, 'Used Sofa'),
('403', 'Sofa3', 'used/sofa/s3.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 10000, 0, 'Used Sofa'),
('404', 'Sofa4', 'used/sofa/s4.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 50000, 0, 'Used Sofa'),
('405', 'Sofa5', 'used/sofa/s5.png', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 45000, 0, 'Used Sofa'),
('406', 'Sofa6', 'used/sofa/s6.png', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 60000, 0, 'Used Sofa'),
('407', 'Sofa7', 'used/sofa/s7.jpeg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 30000, 0, 'Used Sofa'),
('408', 'Sofa8', 'used/sofa/s8.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 20000, 0, 'Used Sofa'),
('409', 'Sofa9', 'used/sofa/s9.jpg', 'A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 15000, 0, 'Used Sofa'),
('410', 'Sofa10','used/sofa/s10.jpg','A couch is used primarily for seating, it may be used for reclining and napping.[3]', 'AÂ couchÂ orÂ sofaÂ is a piece ofÂ furnitureÂ for seating two or more people in the form of aÂ bench, with or withoutÂ armrests, that is partially or entirelyÂ upholstered, and often fitted withÂ springsÂ and tailoredÂ cushions.', 28000, 0, 'Used Sofa'),

('501', 'Dining1', 'used/dining/t1.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 20000, 0, 'Used Dining Table'),
('502', 'Dining2', 'used/dining/t2.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 25000, 0, 'Used Dining Table'),
('503', 'Dining3', 'used/dining/t3.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 30000, 0, 'Used Dining Table'),
('504', 'Dining4', 'used/dining/t4.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 35000, 0, 'Used Dining Table'),
('505', 'Dining5', 'used/dining/t5.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 60000, 0, 'Used Dining Table'),
('506', 'Dining6', 'used/dining/t6.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 50000, 0, 'Used Dining Table'),
('507', 'Dining7', 'used/dining/t7.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 45000, 0, 'Used Dining Table'),
('508', 'Dining8', 'used/dining/t8.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 30000, 0, 'Used Dining Table'),
('509', 'Dining9', 'used/dining/t9.jpg', 'AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 25000, 0, 'Used Dining Table'),
('510', 'Dining10','used/dining/t10.png','AÂ tableÂ is a form ofÂ furnitureÂ with a flat horizontal upper surface used to support objects, for storage, show, and/or manipulatio', 'Some common types of table are the dining room table, which is used for seated persons to eat meals; the coffee table, which is a low table used in living rooms to display items or serve refreshments; and the bedside table, which is used to place an alarm clock and a lamp.Â ', 60000, 0, 'Used Dining Table'));


-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
