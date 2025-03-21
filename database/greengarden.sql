-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for greengarden
CREATE DATABASE IF NOT EXISTS `greengarden` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `greengarden`;

-- Dumping structure for table greengarden.about_us
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top-about` text NOT NULL,
  `para-about` text NOT NULL,
  `open-week` varchar(45) NOT NULL,
  `open-weekend` varchar(45) NOT NULL,
  `time-week` varchar(45) NOT NULL,
  `time-weekend` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.about_us: ~0 rows (approximately)
REPLACE INTO `about_us` (`id`, `top-about`, `para-about`, `open-week`, `open-weekend`, `time-week`, `time-weekend`) VALUES
	(1, 'Feel the beauty of nature in Green Garden Bungalow', 'Oftentimes, vacations don’t just want a hotel. Instead, they want an entry point to explore the local culture. That’s where Green Garden Bungalow stands. The site blends cultural elements to create a unique user experience.\r\nThe onsen pool section, for example, not only describes the experience but also educates the visitor on Japanese traditions. You’re already learning about the culture you’ll experience before you step foot on the plane.', 'Mon - Fri', 'Sat - Sun', '8.00 a.m to 4.00 p.m', '8.00 a.m to 1.00 p.m');

-- Dumping structure for table greengarden.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.admin: ~2 rows (approximately)
REPLACE INTO `admin` (`id`, `fname`, `lname`, `email`, `password`, `status`) VALUES
	(1, 'Tharindu', 'Chanaka', 'tharinduchanaka6@gmail.com', 'tharinduCHA@8754', 1),
	(2, 'Green Garden', 'Bungalow', 'greengarden7794@gmail.com', 'GreenGarden@2025', 1);

-- Dumping structure for table greengarden.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL,
  `c_name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.category: ~3 rows (approximately)
REPLACE INTO `category` (`id`, `c_name`) VALUES
	(1, 'Nature'),
	(2, 'Inside'),
	(3, 'Outside');

-- Dumping structure for table greengarden.city
CREATE TABLE IF NOT EXISTS `city` (
  `id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `district_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_city_district1_idx` (`district_id`),
  CONSTRAINT `fk_city_district1` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.city: ~3 rows (approximately)
REPLACE INTO `city` (`id`, `city_name`, `district_id`) VALUES
	(11, 'Colombo', 19),
	(12, 'Bandarawela', 31),
	(13, 'Haputhale', 31);

-- Dumping structure for table greengarden.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile_number` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `city` varchar(45) NOT NULL,
  `date_time` datetime NOT NULL,
  `code` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.contact: ~10 rows (approximately)
REPLACE INTO `contact` (`id`, `detail`, `first_name`, `last_name`, `email`, `mobile_number`, `city`, `date_time`, `code`) VALUES
	(1, 'Me and my family decided to get some adventure experince this time and I wanna know what are the activities we can do. We decided to come next monday. Please give me the more details about the adventure tour categories.', 'Chanaka', 'Sanjeewa', 'chanakaelectro@gmail.com', '0778200344', 'Bandarawela', '2024-11-09 22:39:54', '9809'),
	(2, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Elvis', 'Presley', 'deltacodexsoftwares@gmail.com', '203-688-5500', 'Ella', '2024-11-18 17:47:17', '673b79a77fcc1'),
	(12, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Elvis', 'Presley', 'deltacodexsoftwares@gmail.com', '203-688-5500', 'Colombo', '2024-11-18 17:47:52', '673b79a77fcc1'),
	(20, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Elton', 'John', 'deltacodexsoftwares@gmail.com', '0751441764', 'Bandarawela.', '2024-11-18 20:17:36', '673b79a77fcc1'),
	(21, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Tharindu', 'Chanaka', 'deltacodexsoftwares@gmail.com', '0743217890', 'New York', '2024-11-18 20:18:14', '673b79a77fcc1'),
	(22, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Tharindu', 'Chanaka', 'deltacodexsoftwares@gmail.com', '0743217890', 'New York', '2024-11-18 20:18:16', '673b79a77fcc1'),
	(23, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Tharindu', 'Chanaka', 'tharinduchanaka6@gmail.com', '0743217890', 'New York', '2024-11-18 20:20:19', '673b77ac50137'),
	(24, 'Me and my family decided to get some adventure experince this time and I wanna know what are the activities we can do. We decided to come next monday. Please give me the more details about the adventure tour categories.', 'Tharindu', 'Chanaka', 'tharinduchanaka6@gmail.com', '0743217890', 'New York', '2024-11-18 22:44:53', '673b77ac50137'),
	(25, 'Me and my family decided to get some adventure experince this time and I wanna know what are the activities we can do. We decided to come next monday. Please give me the more details about the adventure tour categories.', 'Shanon', 'Lee', 'tharinduchanaka6@gmail.com', '0743217890', 'New York', '2024-11-18 22:51:48', '673b77ac50137'),
	(26, 'An online hotel booking form is used to track bookings and manage reservations through a hotel website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'Delta ', 'Codex', 'deltacodexsoftwares@gmail.com', '0751441764', 'Colombo', '2024-11-18 23:00:15', '673b79a77fcc1'),
	(27, 'I had a great experience and I am so happy', 'Sadee', 'Nilakshi', 'sadeeshanilakshi25@gmail.com', '0743528374', 'Bandarawela', '2024-11-20 09:24:26', '673d5d7295485');

-- Dumping structure for table greengarden.contact-ex
CREATE TABLE IF NOT EXISTS `contact-ex` (
  `id` int NOT NULL AUTO_INCREMENT,
  `detail` char(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contact_user1_idx` (`user_email`),
  CONSTRAINT `fk_contact_user1` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.contact-ex: ~2 rows (approximately)
REPLACE INTO `contact-ex` (`id`, `detail`, `user_email`, `code`, `date_time`) VALUES
	(63, 'Me and my family decided to get some adventure experince this time and I wanna know what are the activities we can do. We decided to come next monday. Please give me the more details about the adventure tour categories.', 'tharinduchanaka6@gmail.com', '673b332031c1a', '2024-11-09 22:38:23'),
	(64, 'An online hotel booking form is used to track bookings and manage reservations through a hotel’s website. Whether you own or manage a hotel, motel, or hostel, streamline your booking process with our free Hotel Booking Form template', 'tharinduchanaka6@gmail.com', '673b332031c1a', '2024-11-18 17:59:19'),
	(65, 'I got a great experience.Thank you so much.', 'sadeeshanilakshi25@gmail.com', '673d570d96376', '2024-11-20 08:57:09');

-- Dumping structure for table greengarden.district
CREATE TABLE IF NOT EXISTS `district` (
  `id` int NOT NULL AUTO_INCREMENT,
  `district_name` varchar(50) NOT NULL,
  `province_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_district_province1_idx` (`province_id`),
  CONSTRAINT `fk_district_province1` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.district: ~25 rows (approximately)
REPLACE INTO `district` (`id`, `district_name`, `province_id`) VALUES
	(11, 'Jaffna', 11),
	(12, 'Kilinochchi', 11),
	(13, 'Mannar', 11),
	(14, 'Mullativu', 11),
	(15, 'Vavuniya', 11),
	(16, 'Puttalam', 12),
	(17, 'Kurunegala', 12),
	(18, 'Gampaha', 7),
	(19, 'Colombo', 7),
	(20, 'Kaluthara', 7),
	(21, 'Anuradhapura', 13),
	(22, 'Polonnaruwa', 13),
	(23, 'Matale', 8),
	(24, 'Kandy', 8),
	(25, 'Nuwara Eliya', 8),
	(26, 'Kegalle', 14),
	(27, 'Rathnapura', 14),
	(28, 'Trincomalee', 10),
	(29, 'Batticaloa', 10),
	(30, 'Ampara', 10),
	(31, 'Badulla', 15),
	(32, 'Monaragala', 15),
	(33, 'Hambantota', 9),
	(34, 'Mathara', 9),
	(35, 'Galle', 9);

-- Dumping structure for table greengarden.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `feedback` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.feedback: ~3 rows (approximately)
REPLACE INTO `feedback` (`id`, `fullname`, `feedback`, `date`) VALUES
	(55, 'Tharindu Chanaka', 'A family praised the caring crew, delicious food, and stunning islands. They also enjoyed the variety of activities, including swimming, kayaking, hiking, and archaeological sites.', '2024-11-09'),
	(56, 'Peter Ostrich', 'A guest praised the knowledgeable and accommodating host, who shared interesting facts about the city\'s history, art, and architecture. The host also recommended places to eat and wine shops, and helped the guests learn some French phrases.', '2024-11-09'),
	(57, 'Chanaka Sanjeewa', 'A guest thanked the travel agent for a well-organized trip with nice hotels and great weather', '2024-11-10');

-- Dumping structure for table greengarden.gender
CREATE TABLE IF NOT EXISTS `gender` (
  `id` int NOT NULL,
  `gender_name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.gender: ~3 rows (approximately)
REPLACE INTO `gender` (`id`, `gender_name`) VALUES
	(1, 'Male'),
	(2, 'Female'),
	(3, 'Netual');

-- Dumping structure for table greengarden.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `Heading` varchar(45) NOT NULL,
  `sub-heading` varchar(45) NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_category1_idx` (`category_id`),
  CONSTRAINT `fk_images_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.images: ~34 rows (approximately)
REPLACE INTO `images` (`id`, `path`, `Heading`, `sub-heading`, `category_id`) VALUES
	(3, 'Gallery_photo//0_672fa7353da85Green Garden Bungalow.jpeg', 'Green Garden Bungalow', 'Outside View', 3),
	(4, 'Gallery_photo//0_672fa8003fe03Interior.jpeg', 'Interior', 'Double Bed Rooms', 2),
	(5, 'Gallery_photo//0_672faa6771967Beauty Nature.jpeg', 'Beauty Nature', 'Around the Bungalow', 1),
	(6, 'Gallery_photo//0_672faed0247e3Interior.jpeg', 'Interior', 'Side View', 2),
	(7, 'Gallery_photo//0_672faf0073088Beauty Nature.jpeg', 'Beauty Nature', 'Dealiya Flowers', 1),
	(8, 'Gallery_photo//0_672faf22a493eWeather.jpeg', 'Weather', 'Pleasant Weather ', 1),
	(9, 'Gallery_photo//0_672faf3ce46f3Interior.jpeg', 'Interior', 'Front view', 2),
	(10, 'Gallery_photo//0_672faf811960fOutside View.jpeg', 'Outside View', 'Flower Garden', 3),
	(11, 'Gallery_photo//0_672fafa11ac1d@ Night.jpeg', '@ Night', 'Night Decos', 3),
	(12, 'Gallery_photo//0_67357a810a7c5Interior.jpeg', 'Interior', 'Attached Bathroom', 2),
	(13, 'Gallery_photo//0_673580006c4c2Beauty Nature.jpeg', 'Beauty Nature', 'Flowers', 1),
	(14, 'Gallery_photo//0_673584f4b7719Outside View.jpeg', 'Beauty Nature', 'Around the bungalow', 1),
	(15, 'Gallery_photo//0_673587fb355c1Pleasant View.jpeg', 'Pleasant View', 'Around the bungalow', 1),
	(16, 'Gallery_photo//0_6735883656dd3Clear View.jpeg', 'Clear View', 'Around The bungalow', 1),
	(17, 'Gallery_photo//0_6735887b016ccBeauty Nature.jpeg', 'Beauty Nature', 'Near the road', 1),
	(18, 'Gallery_photo//0_673588a7e6758Outside View.jpeg', 'Outside View', 'Beautiful view with garden', 3),
	(19, 'Gallery_photo//0_673588ed41437Front View.jpeg', 'Front View', 'Around the bungalow', 3),
	(20, 'Gallery_photo//0_673589294720bSide View.jpeg', 'Side View', 'Front Side of the bungalow', 3),
	(21, 'Gallery_photo//0_6735894f37813Front View.jpeg', 'Front View', 'Outside of the bungalow', 3),
	(22, 'Gallery_photo//0_67358977018b4Front Side View.jpeg', 'Front Side View', 'Outside of the bungalow', 3),
	(23, 'Gallery_photo//0_67358a3a20a2fBack Side.jpeg', 'Back Side', 'Around the bungalow', 3),
	(24, 'Gallery_photo//0_67358ab10845bBeauty Nature.jpeg', 'Beauty Nature', 'Mountain View from the bungalow', 1),
	(25, 'Gallery_photo//0_67358b96d99e3Interior .jpeg', 'Interior ', 'Front side view', 2),
	(26, 'Gallery_photo//0_67358bc050969Interior.jpeg', 'Interior', 'Dining table', 2),
	(28, 'Gallery_photo//0_67358f46466a5Interior.jpeg', 'Interior', 'Kitchen Area', 2),
	(29, 'Gallery_photo//0_67358f6c5223cInterior.jpeg', 'Interior', 'Rooms', 2),
	(30, 'Gallery_photo//0_67358fbf3bcd8Interior.jpeg', 'Interior', 'Attached Bathroom', 2),
	(31, 'Gallery_photo//0_67358fed44eedInterior.jpeg', 'Interior', 'Inside Bathroom', 2),
	(32, 'Gallery_photo//0_6735903dd91c3Interior.jpeg', 'Interior', 'Double Bed', 2),
	(33, 'Gallery_photo//0_673590652ae83Interior.jpeg', 'Interior', 'Single beds', 2),
	(34, 'Gallery_photo//0_673590b9e67e3Interior.jpeg', 'Interior', 'Night Time', 2),
	(35, 'Gallery_photo//0_673590dfe8715Interior.jpeg', 'Interior', 'Front side', 2),
	(36, 'Gallery_photo//0_6735916f01f85Interior.jpeg', 'Interior', 'Sitting Area', 2),
	(37, 'Gallery_photo//0_6735919a9be39Interior.jpeg', 'Interior', 'Bed Rooms', 2);

-- Dumping structure for table greengarden.info
CREATE TABLE IF NOT EXISTS `info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `domain` varchar(45) NOT NULL,
  `map-link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.info: ~0 rows (approximately)
REPLACE INTO `info` (`id`, `location`, `mobile`, `email`, `domain`, `map-link`) VALUES
	(1, 'No 29, Jayawikrama Mawatha Haputhale', '+94 76 300 4700 | +94 71 874 4700', 'greengarden7794@gmail.com', 'www.greengarden.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0065723613284!2d80.95421017390338!3d6.7690514202634064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae471001127112d%3A0xe60450e54dc3c87d!2sGreen%20Garden%20Bungalow!5e0!3m2!1sen!2slk!4v1731918876703!5m2!1sen!2slk');

-- Dumping structure for table greengarden.package_details
CREATE TABLE IF NOT EXISTS `package_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `img_path` text NOT NULL,
  `distance` varchar(60) NOT NULL DEFAULT '',
  `price` double NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.package_details: ~5 rows (approximately)
REPLACE INTO `package_details` (`id`, `name`, `img_path`, `distance`, `price`, `description`) VALUES
	(2, 'Kumbalwela Monastery', 'tour_photo//0_673c49fad619aKumbalwela Buddhist Monastery.jpeg', '5 Kilometers', 15000, 'Kubalwela Mahamewnawa Monastery offers serene meditation and spiritual guidance amidst natures tranquility.'),
	(3, 'Horton Plains', 'tour_photo//0_673c4b0342f1eHorton Plains.jpeg', '34 Kilometers', 20000, 'Horton Plains features misty grasslands, stunning trails, and  cliffs like the famous Worlds End.'),
	(4, 'Lipton Seat', 'tour_photo//0_673c52eb7d931Lipton Seat.jpeg', '17 Kilometers', 7000, 'Enjoy panoramic views of lush tea estates from this historic hilltop lookout point.'),
	(5, 'Bambarakanda Falls', 'tour_photo//0_673c53a6669d7Bambarakanda Waterfall.jpeg', '15 Kilometers', 8000, 'Sri Lankas tallest waterfall offers a spectacular cascade amid verdant highland forests.'),
	(6, 'Diyaluma Falls', 'tour_photo//0_673c545d4cbf3Diyaluma Waterfall.jpeg', '500 Meters', 5000, 'A stunning tiered waterfall perfect for hiking, views, and natural rock pools to explore.'),
	(7, 'Ella ', 'tour_photo//0_673c55511cac2Ella .jpeg', '25 Kilometers', 15000, ' A charming town known for scenic hikes, Nine Arches Bridge, and breathtaking mountain views.');

-- Dumping structure for table greengarden.profile_image
CREATE TABLE IF NOT EXISTS `profile_image` (
  `path` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`path`),
  KEY `fk_profile_image_user1_idx` (`user_email`),
  CONSTRAINT `fk_profile_image_user1` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.profile_image: ~0 rows (approximately)
REPLACE INTO `profile_image` (`path`, `user_email`) VALUES
	('resource/proimg/Tharindu_672f806f4b904.jpeg', 'tharinduchanaka6@gmail.com');

-- Dumping structure for table greengarden.province
CREATE TABLE IF NOT EXISTS `province` (
  `id` int NOT NULL AUTO_INCREMENT,
  `province_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.province: ~9 rows (approximately)
REPLACE INTO `province` (`id`, `province_name`) VALUES
	(7, 'Western'),
	(8, 'Central'),
	(9, 'Southern'),
	(10, 'Eastern'),
	(11, 'Northern'),
	(12, 'North Western'),
	(13, 'North Central'),
	(14, 'Sabaragamuwa'),
	(15, 'Uva');

-- Dumping structure for table greengarden.user
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `join_date` datetime NOT NULL,
  `verification_code` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `status` int NOT NULL,
  `gender_id` int NOT NULL,
  PRIMARY KEY (`email`),
  KEY `fk_user_gender_idx` (`gender_id`),
  CONSTRAINT `fk_user_gender` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.user: ~0 rows (approximately)
REPLACE INTO `user` (`email`, `fname`, `lname`, `password`, `mobile`, `join_date`, `verification_code`, `status`, `gender_id`) VALUES
	('sadeeshanilakshi25@gmail.com', 'Sadeesha', 'Nilakshi', 'Sadee0325#', '0743528374', '2024-11-20 08:07:05', NULL, 1, 2),
	('tharinduchanaka6@gmail.com', 'Tharindu', 'Tharindu', 'tharindu@8754', '0751441764', '2024-11-09 19:34:36', '', 1, 1);

-- Dumping structure for table greengarden.user_has_address
CREATE TABLE IF NOT EXISTS `user_has_address` (
  `user_email` varchar(100) NOT NULL,
  `city_id` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `line1` text NOT NULL,
  `line2` text NOT NULL,
  `postal_code` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_has_city_city1_idx` (`city_id`),
  KEY `fk_user_has_city_user1_idx` (`user_email`),
  CONSTRAINT `fk_user_has_city_city1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  CONSTRAINT `fk_user_has_city_user1` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table greengarden.user_has_address: ~0 rows (approximately)
REPLACE INTO `user_has_address` (`user_email`, `city_id`, `id`, `line1`, `line2`, `postal_code`) VALUES
	('tharinduchanaka6@gmail.com', 12, 13, '291/1,', 'Uduhulpotha,', '90100');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
