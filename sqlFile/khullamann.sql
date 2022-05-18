-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 09:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khullamann`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `Donation_date` date NOT NULL,
  `Donation_time` time NOT NULL,
  `Gotit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `post_id`, `donor_id`, `Donation_date`, `Donation_time`, `Gotit`) VALUES
(1, 2, 24, '2020-02-14', '08:54:03', 1),
(2, 4, 24, '2020-02-14', '09:07:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donation_post`
--

CREATE TABLE `donation_post` (
  `post_id` int(11) NOT NULL,
  `file_path` text NOT NULL,
  `title` text NOT NULL,
  `bio` text NOT NULL,
  `description` text NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  `donee_id` int(11) DEFAULT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_post`
--

INSERT INTO `donation_post` (`post_id`, `file_path`, `title`, `bio`, `description`, `post_date`, `post_time`, `donee_id`, `flag`) VALUES
(1, 'upload/images/post/HCI_IndonesiaWebBanner_1920x550.png', 'Indonesia Earthquake', 'We need your help.', ' We need your help. Please donate money, clothes, etc. The donated items will be sent to areas affected by earthquake. Thank you for your help.', '2020-02-14', '08:02:37', 21, 1),
(2, 'upload/images/post/download.jpg', 'Support With Alex', 'We would love your support with Alex.', 'We would love your support with Alex. He is fighting a malignant tumor. Please contact us for your support.', '2020-02-14', '08:02:20', 21, 1),
(3, 'upload/images/post/download2.jpg', 'The Green House Plan', 'Plant – a – Thon to help!', ' You can help to preserve endangered plant species all over the world.Join us in our annual Plant – a – Thon to help!', '2020-02-14', '08:02:23', 21, 1),
(4, 'upload/images/post/wwf.jpg', 'World Wide Fund', 'I am raising money for World Wide Fund', 'I am raising money for World Wide Fund.Every little bit helps. This cause means a lot to me, and I believe that we can make a difference together.Thanks!', '2020-02-14', '08:02:00', 23, 1),
(5, 'upload/images/post/monastery.jpg', 'Fundraiser for Lotus Bud Monastery Inc', 'Want to join me in supporting a good cause? I\'m raising money for Lotus Bud Monastery Inc and your contribution will make an impact, whether you donate $5 or $500. Every little bit helps. Thank you for your support.', 'Lotus Bud Monastery, Inc.  is Buddhist center in Jacksonville, Florida that was recently opened in 2019. We are a Vietnamese Buddhist Center with hopes to provide day of mindfulness events for English speakers in the near future. We are open to anyone in the community, regardless of race or religion, who want to learn more about Buddhist practices and incorporate it in thier daily lives.    Even though our center has recently opened, we are almost running out of space in our Buddha hall and dining hall to accommodate our practitioners. We hope to raise funds to build a 4,000 square feet building to meet the demand and serve our Buddhist community. Our goal is to complete the building by the end of 2020. We hope you can join us in realizing our goal by donating to our Monastery.', '2020-02-14', '08:02:49', 23, 1),
(6, 'upload/images/post/Austrialainbushfire.jpg', ' Fundraiser for Australian Bushfire Relief', 'Thank you for starting a fundraiser for the American Red Cross! Did you know, every 8 minutes, someone affected by disaster is helped by donations to the Red Cross.', 'Our hearts are breaking for the Australian families and wildlife displaced by record bushfires this year. Many of our close friends and loved ones have been affected, though thankfully none harmed. We\'ve shown you some of the areas in Australia that are completely safe, sunny, and ready to welcome visitors—and we will continue to do so in the coming weeks—but there are parts that have experienced significant devastation.The situation is far from hopeless. We know that Aussies are strong, resilient, and above all, kind to one another. It is with that true Aussie spirit that we invite you to join us in supporting Australia bushfire victims.Our goal is to raise $10,000 for the Australian Red Cross, and with your help, we know we can make this happen! 100% of funds raised will go toward fire relief from the Australian Red Cross.It’s time to rally together and support our friends and communities in Australia.', '2020-02-14', '08:02:22', 23, 1),
(7, 'upload/images/post/123.png', 'Emergency fundraiser ', 'Help Me:::}', 'My brother Reese was in a horrible accident on Saturday, January 25th in West Jordan, UT. A DUI driver turned in front of Reese causing Reese to slam into the vehicle with his motorcycle.\r\nReese was wearing his helmet, thank God!!\r\n', '2020-02-14', '09:02:05', 25, 1),
(8, 'upload/images/post/Hungry.png', 'No Hungry Child', 'There will no child sleep in hungry.', '1 in 6 children in America is facing hunger. I find this unacceptable. So I am getting fit for No Kid Hungry because I want to end childhood hunger in America. Will you support me by giving a gift of $50 to connect kids to 500 meals?', '2020-02-14', '09:02:03', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doneeinfo`
--

CREATE TABLE `doneeinfo` (
  `donee_id` int(11) NOT NULL,
  `account_no` text NOT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doneeinfo`
--

INSERT INTO `doneeinfo` (`donee_id`, `account_no`, `document`) VALUES
(3, 'AE070331234567890123456', ''),
(4, 'AD1200012030200359100100', ''),
(8, 'AL47212110090000000235698741', ''),
(14, 'AT611904300234573201', ''),
(15, 'AZ21NABZ00000000137010001944', ''),
(17, 'BA391290079401028494', ''),
(18, 'BE68539007547034', ''),
(20, 'BG80BNBG96611020345678', ''),
(3, 'AE070331234567890123456', ''),
(4, 'AD1200012030200359100100', ''),
(8, 'AL47212110090000000235698741', ''),
(14, 'AT611904300234573201', ''),
(15, 'AZ21NABZ00000000137010001944', ''),
(17, 'BA391290079401028494', ''),
(18, 'BE68539007547034', ''),
(20, 'BG80BNBG96611020345678', ''),
(21, '1234567', '/khullamann/upload/images/profile/document/habis.jpg'),
(23, '123456788889555', '/khullamann/upload/images/profile/document/Bishal.jpg'),
(25, '123456788889555', '/khullamann/upload/images/profile/document/Pabita.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `feedback_content` text NOT NULL,
  `feedback_email` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_time` time NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `user_id` int(11) NOT NULL,
  `profile_pic` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `create_date` date NOT NULL,
  `create_time` time NOT NULL,
  `role` char(5) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`user_id`, `profile_pic`, `username`, `email`, `password`, `address`, `contact_no`, `create_date`, `create_time`, `role`, `flag`) VALUES
(1, '', 'Cailin', 'leo@malesuadavel.com', '25f9e794323b453885f5181f1b624d0b', '103-9566 Habitant Rd.', 16020130, '2017-05-26', '06:26:22', 'donor', 1),
(2, '', 'Leroy', 'ligula.elit@aliquetProin.net', '25f9e794323b453885f5181f1b624d0b', '175-8711 Etiam St.', 16691018, '2016-08-10', '06:26:22', 'donor', 1),
(3, '', 'Elton', 'vel@ipsumporta.com', '25f9e794323b453885f5181f1b624d0b', '806-5177 Mauris Road', 16620521, '2016-08-26', '06:26:22', 'donee', 1),
(4, '', 'Wylie', 'purus@mollisPhasellus.org', '25f9e794323b453885f5181f1b624d0b', '3444 Aenean Avenue', 16971207, '2017-02-07', '06:26:22', 'donee', 1),
(5, '', 'Driscoll', 'pede.Nunc.sed@condimentum.ca', '25f9e794323b453885f5181f1b624d0b', 'Ap #925-9987 Amet, Ave', 16250206, '2017-11-07', '06:26:22', 'donor', 1),
(6, '', 'Todd', 'Maecenas@vestibulumloremsit.ca', '25f9e794323b453885f5181f1b624d0b', 'P.O. Box 390, 1902 Sapien. Street', 16030819, '2016-02-19', '06:26:22', 'donor', 1),
(7, '', 'Tiger', 'a@sodales.net', '25f9e794323b453885f5181f1b624d0b', 'P.O. Box 320, 1430 Donec Ave', 16770703, '2017-08-03', '06:26:22', 'donor', 1),
(8, '', 'Aline', 'vel.mauris@lacusvarius.ca', '25f9e794323b453885f5181f1b624d0b', '605-4750 Ultricies Avenue', 16930310, '2018-09-28', '06:26:22', 'donee', 1),
(9, '', 'Jasper', 'et@conubianostraper.co.uk', '25f9e794323b453885f5181f1b624d0b', '2188 Nisi. Av.', 16831228, '2017-08-26', '06:26:22', 'donor', 1),
(10, '', 'Blair', 'accumsan@augueid.com', '25f9e794323b453885f5181f1b624d0b', '3322 Phasellus St.', 16150708, '2017-03-02', '06:26:22', 'donor', 1),
(11, '', 'Lester', 'Duis@dolorelit.co.uk', '25f9e794323b453885f5181f1b624d0b', '367-6396 Vitae Road', 16140923, '2017-05-22', '06:26:22', 'donor', 1),
(12, '', 'Davis', 'sollicitudin.adipiscing@ornare.net', '25f9e794323b453885f5181f1b624d0b', '520-4710 Ut Avenue', 16341129, '2017-04-11', '06:26:22', 'donor', 1),
(13, '', 'Jacob', 'a.nunc@aliquameuaccumsan.com', '25f9e794323b453885f5181f1b624d0b', 'Ap #692-6576 Sem Rd.', 16990802, '2017-03-25', '06:26:22', 'donor', 1),
(14, '', 'Aretha', 'inceptos@nequetellusimperdiet.org', '25f9e794323b453885f5181f1b624d0b', 'Ap #972-6082 Mollis Rd.', 16110301, '2016-12-26', '06:26:22', 'donee', 1),
(15, '', 'Donna', 'adipiscing.elit.Curabitur@fermentum.com', '25f9e794323b453885f5181f1b624d0b', '821-9993 Lacinia Rd.', 16620206, '2018-05-30', '06:26:22', 'donee', 1),
(16, '', 'Sarah', 'accumsan.neque.et@elit.edu', '25f9e794323b453885f5181f1b624d0b', '532-1867 Ligula Road', 16190509, '2017-05-01', '06:26:22', 'donor', 1),
(17, '', 'Rhoda', 'amet.risus@posuerevulputatelacus.org', '25f9e794323b453885f5181f1b624d0b', 'P.O. Box 144, 8970 Fusce Street', 16200707, '2018-06-28', '06:26:22', 'donee', 1),
(18, '', 'Salvador', 'Nulla@diam.org', '25f9e794323b453885f5181f1b624d0b', '604 Odio. Street', 16840220, '2016-08-14', '06:26:22', 'donee', 1),
(19, '', 'Martha', 'semper.dui.lectus@nislelementum.co.uk', '25f9e794323b453885f5181f1b624d0b', '777-3619 Enim, Av.', 16350904, '2018-08-21', '06:26:22', 'donor', 1),
(20, '', 'Katelyn', 'enim.Etiam@ridiculusmusDonec.org', '25f9e794323b453885f5181f1b624d0b', '5554 Per St.', 16710616, '2016-03-20', '06:26:22', 'donee', 1),
(21, 'C:/xampp/htdocs/khullamann/upload/images/profile/donor/', 'habis', 'devkotahancy@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'pokhara', 9816615660, '2020-02-14', '07:53:29', 'donee', 1),
(22, 'C:/xampp/htdocs/khullamann/upload/images/profile/donor/', 'Superuser', 'superuser@superuser.com', '25f9e794323b453885f5181f1b624d0b', 'pokhara', 9816615660, '2020-02-14', '08:00:01', 'admin', 1),
(23, 'C:/xampp/htdocs/khullamann/upload/images/profile/donor/', 'Bishal', 'bishalf98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'pokhara', 9816615660, '2020-02-14', '08:17:27', 'donee', 1),
(24, '', 'Sulabh', 'sulhanbis@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Kathmandu', 9846081809, '2020-02-14', '08:47:14', 'donor', 1),
(25, '', 'Pabita', 'bishal@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Kathmandu', 9816615660, '2020-02-14', '09:19:19', 'donee', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `donee_id` (`donee_id`);

--
-- Indexes for table `doneeinfo`
--
ALTER TABLE `doneeinfo`
  ADD KEY `donee_id` (`donee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation_post`
--
ALTER TABLE `donation_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_post`
--
ALTER TABLE `donation_post`
  ADD CONSTRAINT `donation_post_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `userprofile` (`user_id`);

--
-- Constraints for table `doneeinfo`
--
ALTER TABLE `doneeinfo`
  ADD CONSTRAINT `doneeinfo_ibfk_1` FOREIGN KEY (`donee_id`) REFERENCES `userprofile` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
