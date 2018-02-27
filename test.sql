-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2016 at 08:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `transcation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=248 ;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `cid`, `pid`, `transcation`) VALUES
(237, 64, 'tab01', '2016-01-18'),
(238, 64, 'sup01', '2016-01-18'),
(239, 64, 'tab03', '2016-01-18'),
(240, 64, 'tab01', '2016-01-18'),
(241, 64, 'tab02', '2016-01-18'),
(242, 64, 'sup02', '2016-01-18'),
(243, 64, 'tab07', '2016-01-18'),
(244, 64, 'tab01', '2016-01-18'),
(245, 64, 'tab02', '2016-01-18'),
(246, 64, 'sup02', '2016-01-18'),
(247, 64, 'tab07', '2016-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `serial` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(300) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`serial`, `name`, `adress`, `number`) VALUES
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 '),
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 '),
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 '),
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 '),
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 '),
(NULL, 'SQUARE Hospital Limited', '18/F Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath', '880-2-8159457, 8141522, 8142333, 8142431'),
(NULL, 'Apollo Hospitals Dhaka ', 'Plot: 81, Block - E, Bashundhara R/A', '+880-2-8401661 '),
(NULL, 'Bangladesh Medical College & Hospital', 'House # 34, Road # 14/A, Dhanmondi R/A', ' 880-2-9118202, 9120792-3, 9124619, 8115843 '),
(NULL, 'Delta Hospital Limited', '26/2, Principal Abul Kashem Road \r\n(Former Darussalam Road), Mirpur-1 ', '880-2-8017151-52, 88-02-8031378-79'),
(NULL, 'Eden Multicare Hospital', '753, Satmasjid Road, Dhanmondi', '8150507-10 ');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE IF NOT EXISTS `pharmacist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `number` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `name`, `adress`, `number`) VALUES
(1, 'Aftab Drug Store', '9, Shahbagh Biponi Bitan', '+880-2-8627959'),
(2, 'Al-Aksha Medical Center', 'Khalil Bhaban, 1, Super Market, Mirpur-1', '+880-2-8056687'),
(3, 'Dia Pharma', 'Plot # 24, Main Road # 1, Section # 6-Ka, Mirpur', '+880-2-9004315, 9014794'),
(4, 'Haque Pharmacy (Showroom # 1)', '22 Indira Road', '+880-2-9114840'),
(5, 'Diamond Medicine Center', '22/1, Babiar Road, College Gate, Mohammadpur', '+880-2-8153358');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(150) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `manu` varchar(100) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `product_code`, `product_name`, `product_desc`, `manu`, `product_img_name`, `price`) VALUES
(33, 'pharma1', 'tab01', 'Flexi', 'Aceclofenac', 'Box contatining 10 * 10 tablets', 'Flexi-SR_l.jpg', '350.00'),
(34, 'pharma1', 'tab02', 'Clofenac DT', 'Diclofenac Potassium', '50 mg tablet', 'Clofenac-DT.jpg', '50.00'),
(37, 'dh1', 'tab03', 'Xten', 'Tenoxicam', 'Box containing 10x10 tablets', 'XTEN.jpg', '312.00'),
(38, 'dh1', 'sup01', 'Esloric', 'Allopurinol', '300 mg', 'ESLORIC-100GM.jpg', '360.00'),
(39, 'dh1', 'sup02', 'Melcam', 'Meloxicam', 'Box containing 2 x 5 suppository', 'Melcam%2015.jpg', '520.00'),
(40, 'dh1', 'tab05', 'Sonap', 'Naproxen', 'Box contatining 10 * 10 tablets', 'sonapoo.jpg', '450.00'),
(41, 'dh1', 'tab06', 'Clofenac', 'Diclofenac', 'Box contatining 10 * 10 tablets', 'Clofenac-25.jpg', '450.00'),
(45, 'dh2', 'tab07', 'Valsartil', 'Valsartan', 'Each box contains 3 alu-alu blister strips of 10 tablets', 'Valsartil-40.jpg', '350.00'),
(46, 'dh2', 'tab08', 'Warin', 'Warfarin', 'Each Box contains 10 strips of 10 tablets', 'Warin.jpg', '560.00'),
(47, 'dh2', 'ing01', 'Parinox', 'Enoxaparin Sodium', 'Each box contains 1 pre-filled syringe containing 4000 anti-Xa IU is equivalent to 40 mg', 'Parinox-40.jpg', '800.00'),
(48, 'dh2', 'tab09', 'Ramoril', 'Ramipril', 'Each box contains 5 blister strips of 10 tablets', '', '650.00'),
(49, 'dh2', 'sol01', 'Integril', 'Eptifibatide', 'Each vial contains 10 ml of sterile solution', 'Integril%202.jpg', '1200.00'),
(50, 'dh2', 'tab10', 'Epleron', 'Eplerenone', 'Each box contains 2 blister strips of 10 tablets', '', '780.00'),
(51, 'dh2', 'tab11', 'Syncard', 'Amlodipine & Atorvastatin', 'Each box contains 3 blister strips of 10 tablets', 'Syncard.jpg', '360.00'),
(52, 'dh2', 'tab12', 'Bisopro', 'Bisoprolol', 'Each commercial box contains 3 blister strips of 10 tablets', 'Bisopro%202.5.jpg', '260.00'),
(53, 'dh2', 'sol02', 'Dobutin', 'Dobutamine', 'Each box contains 1 vial of 20 ml Dobutamine Hydrochloride USP solution', 'Dobutin.jpg', '1550.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE IF NOT EXISTS `user_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `gend` varchar(1) NOT NULL,
  `nationalid` varchar(50) NOT NULL,
  `contact_num` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adress` varchar(250) NOT NULL,
  `user_cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `fname`, `username`, `password`, `dob`, `gend`, `nationalid`, `contact_num`, `email`, `adress`, `user_cat_id`) VALUES
(7, 'Muntasher Morshed', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00', 'M', '123457897526545', '01776886467', 'ijeshourav1409@gmail.com', '', 1),
(15, 'Zubaer Khan', 'zubaer', '700bc9fd9e52c30960e10d75e32a5d48', '0000-00-00', '', '', '0120325', 'zubaer@bracu.ac', '', 2),
(59, 'Kuddus Pharmacy', 'pharma1', '202cb962ac59075b964b07152d234b70', '0000-00-00', '', '', '420', 'pharma@gmail.com', '', 3),
(60, 'Ami keu na', 'sh', '202cb962ac59075b964b07152d234b70', '0000-00-00', '', '', '', 'd@gmail.com', '', 3),
(63, 'Zarin Tasnim', 'Rupkatha', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', '', '', '01685002710', 'tasnim.rupkatha@gmail.com', '', 2),
(64, 'Israt Jahan', 'era', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'F', '123', '01776886769', 'mmsera1409@gmail.com', '', 2),
(68, 'Sinthiya Islam', 'sinthi', 'b6f0479ae87d244975439c6124592772', '0000-00-00', 'f', '254896331554789', '01966478963', 'sinthiya@gmail.com', 'mirpur, dhaka', 2),
(69, 'Square Pharma', 'square', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'U', '4568789', '012345', 'dsa', '6dasd', 3),
(71, 'Drugs House', 'dh1', '202cb962ac59075b964b07152d234b70', '2004-05-20', 'M', '156987875456', '01569874123', 'd@mail.com', 'Katasur, Mohammaddpur', 3),
(72, 'Dhaka Pharma', 'dh2', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'M', '56987456321470', '01697041236', 'dhaka@mail.com', 'Mohammadpur, Dhaka', 3),
(75, 'raihan', 'dh3', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'M', '15584532', '019456,26965', 'raihan@outlook.com', 'kolabagan', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
