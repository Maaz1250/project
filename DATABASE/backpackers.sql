-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 04:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backpackers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'password', '2024-03-20 05:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blog` text NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `bimage` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `email`, `blog`, `PostingDate`, `status`, `bimage`) VALUES
(25, 'shaikhmaaz1250@gmail.com', 'Rajasthan, one popular destination is Pushkar. It\'s a charming town known for its sacred lake and colorful bazaars. Pushkar offers a unique blend of spirituality, history, and vibrant culture. Must Visit :)', '2024-03-19 05:15:30', 1, 'main5.jpg'),
(26, 'shaikhmaaz1250@gmail.com', ' Kerala, one popular destination is Varkala. It\'s a coastal town known for its stunning beaches, laid-back atmosphere, and beautiful cliffside views.Varkala offers a great mix of relaxation, adventure, and spirituality.', '2024-03-19 05:16:53', 1, 'carousel5.jpg'),
(28, 'tandelmadhvi2512@gmail.com', 'Good', '2024-03-28 04:51:49', 1, 'back.jpg'),
(29, 'tandelmadhvi2512@gmail.com', 'Goa Is a very good place.', '2024-03-30 14:29:11', NULL, 'DoodhSagar_Waterfalls.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `bookingnumber` bigint(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `checkin` varchar(20) DEFAULT NULL,
  `checkout` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `adults` bigint(20) NOT NULL,
  `childs` bigint(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bookingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `lastupdationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `BookedRoom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `bookingnumber`, `email`, `checkin`, `checkout`, `message`, `adults`, `childs`, `status`, `bookingdate`, `lastupdationdate`, `BookedRoom`) VALUES
(14, 'maaz shaikh', 657890517, 'shaikhmaaz1250@gmail.com', '2024-03-09', '2024-03-16', 'Book', 1, 0, '3', '2024-03-07 06:15:38', '2024-03-08 10:28:36', '31'),
(15, 'Diya Vashi', 722989561, 'shaikhmaaz1250@gmail.com', '2024-03-14', '2024-03-20', 'none', 1, 0, '2', '2024-03-07 07:33:49', '2024-03-20 07:20:18', '31'),
(17, 'kishan', 951740269, 'shaikhmaaz1250@gmail.com', '2024-03-11', '2024-03-15', 'fgh', 2, 1, '1', '2024-03-11 06:50:30', '2024-03-12 05:51:02', '31'),
(19, 'Madhvi', 360499253, 'shaikhmaaz1250@gmail.com', '2024-03-21', '2024-03-25', 'user', 1, 2, '3', '2024-03-20 06:20:06', '2024-03-20 06:20:47', '35'),
(20, 'Madhvi', 892068757, 'shaikhmaaz1250@gmail.com', '2024-03-27', '2024-03-28', 'mkmk', 2, 2, '0', '2024-03-20 07:24:52', NULL, '31'),
(21, 'Madhvi', 355683324, 'shaikhmaaz1250@gmail.com', '2024-03-21', '2024-03-23', '', 1, 0, '0', '2024-03-20 08:16:39', NULL, '39'),
(22, 'maaz', 773254897, 'shaikhmaaz1250@gmail.com', '2024-03-23', '2024-03-31', '', 1, 0, '0', '2024-03-21 08:29:51', NULL, '31'),
(23, 'madhvi', 449225441, 'tandelmadhvi2512@gmail.com', '2024-03-29', '2024-03-31', 'Book', 1, 1, '1', '2024-03-28 04:57:12', '2024-03-30 14:30:42', '32'),
(24, 'Madhvi Tandel', 449642226, 'tandelmadhvi2512@gmail.com', '2024-03-31', '2024-04-04', 'Book', 2, 0, '0', '2024-03-30 14:30:32', NULL, '35');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `username`, `password`) VALUES
(1, 'maaz', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'diya', 'diya');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `HotelName` varchar(150) DEFAULT NULL,
  `HotelStateName` int(11) DEFAULT NULL,
  `HotelDescription` longtext DEFAULT NULL,
  `PricePerNight` int(11) DEFAULT NULL,
  `Himage1` varchar(120) DEFAULT NULL,
  `Himage2` varchar(120) DEFAULT NULL,
  `Himage3` varchar(120) DEFAULT NULL,
  `Himage4` varchar(120) DEFAULT NULL,
  `Himage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `Wifi` int(11) DEFAULT NULL,
  `TravelDesk` int(11) DEFAULT NULL,
  `Bonfire` int(11) DEFAULT NULL,
  `Cctv` int(11) DEFAULT NULL,
  `Parking` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `HotelName`, `HotelStateName`, `HotelDescription`, `PricePerNight`, `Himage1`, `Himage2`, `Himage3`, `Himage4`, `Himage5`, `AirConditioner`, `Wifi`, `TravelDesk`, `Bonfire`, `Cctv`, `Parking`, `RegDate`, `UpdationDate`) VALUES
(25, 'The Hosteller Goa, Arpora', 1, 'The Hosteller Goa, Arpora offers a vibrant and bohemian experience in the picturesque village of Arpora. Our hostel features spacious outdoor areas with a pool, a big cafe and dining space, and a juice bar by the pool. We have indoor gaming rooms, colorful murals, and projectors for movie nights. The semi-open cafe space and small pocket areas provide cozy spots to relax and enjoy the tropical ambiance. Book your stay with us now to immerse yourself in the laid-back and friendly atmosphere of Goa!', 384, 'DSC09263-1684472264600.jpg', 'Usgalimal.png', NULL, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, '2024-03-02 12:02:02', '2024-03-27 05:19:15'),
(28, 'The Hosteller Bir', 2, 'Located right across from the primary bus stand in the town, The Hosteller Bir features comfy rooms, a big open air cafe, a hammock lounge, bonfire areas and a super friendly furry host, Joey. The best part about the hostel is that it is at a walkable distance from pretty much all the attractions in the charming town of Bir. Whether it\'s the Tibetan market, the artistic monasteries, the top cafes in the area or the landing site - you can simply grab your day pack and walk to all these locations. The hostel also provides several activities that one can take part in like cycling, paragliding, monastery tours and day hikes. Bonfire sessions, chai sessions and movie nights are also part and parcel of it. Truly a lively hostel in the middle of one of Himachal\'s best holiday destinations.\r\n\r\n\r\n', 4587, 'hostellerbear.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, '2024-03-02 14:38:35', '2024-03-07 05:48:11'),
(29, 'The Hosteller Goa, Candolim', 1, 'The Hosteller Goa Candolim: A beachy haven in the heart of Candolim, inspired by sun-kissed beaches and Goan hospitality. With wave murals, jute baskets, and Portuguese-style accents, it offers a Blue Bohemian vibe infused with Biophilia. Enjoy outdoor chilling areas, a pool, and indoor lounge rooms for board games and socializing. Prime location near Candolim beach and Lawande supermarket. Perfect for backpackers seeking a warm, inviting atmosphere amidst vibrant Goan culture.', 1004, 'goahostel.jpg', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '2024-03-02 15:26:45', '2024-03-27 05:14:58'),
(30, 'The Funky Monkey Hostel', 1, 'The Funky Monkey Hostel, just a 4-minute walk from Anjuna Beach, is perfect for solo backpackers and travelers. It offers AC dorms, private rooms, a garden, library, and yoga space, creating a homely and peaceful atmosphere. Amenities include an in-house bar and restaurant, free WiFi, and power backup. Guests can explore Anjuna\'s music venues and diverse culture, with laundry service, bike rentals, ticket assistance, and free parking available. The hostel prioritizes cleanliness with daily cleaning and sanitizing stations. Whether relaxing or exploring, guests can connect with fellow travelers and enjoy a memorable stay.', 1200, 'hostel3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 15:52:16', '2024-03-27 05:20:08'),
(31, 'XOXO Hostel', 1, ' Xoxo Hostel in Goa is a popular choice for backpackers! It\'s known for its vibrant atmosphere and affordable accommodations. They offer dormitory-style rooms and have a common area where travelers can hang out and meet new people. It\'s a great place to stay if you\'re looking to connect with fellow backpackers and explore the beautiful beaches of Goa.', 900, 'hostel4.jpg', '2.jpg', '4.jpg', '3.jpg', NULL, 1, 1, NULL, NULL, NULL, 1, '2024-03-02 16:07:40', '2024-03-07 07:08:54'),
(32, 'The Hosteller KARERI', 2, 'Nestled in the bosom of the verdant valley, The Hosteller Kareri is the first hostel in this vicinity. Relaxing, utterly peaceful and perfect for the folks looking to TRULY get away from their city\'s hustle and bustle. An iconic L shaped charming structure with 9 rooms, this hostel will make you feel at home right away. Comfortable dorms and spacious private rooms await you, with some of the most glorious views of the surrounding mountain ranges. Elegant, charming and pleasant to the eye - The Hosteller Kareri also has a pretty common area and an indoor-outdoor cafe. Sitting all bright and yellow in the village, this hostel is going to become your BFF if you are wanting to workation somewhere totally new and unexpected. ', 539, '3.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-03-02 16:38:32', '2024-03-06 06:50:51'),
(33, 'The Hosteller KASOL', 2, 'The Hosteller Kasol, Kasol’s first hostel, is the perfect stay option for a backpacker or a traveller looking to relax, rejuvenate and reconnect. We believe in giving the best hospitality service by providing quality accommodation, great vibes and the utmost focus on cleanliness, hygiene, safety and security of all our travellers. Located just 5 min away from the city centre towards Old Kasol and within a walking distance, we are in close proximity to the Kasol main temple, waterfall and right on the foothills of the mountains. Our neighbourhood is friendly, green and quite peaceful. The Hosteller offers clean and comfortable beds, free WiFi, common spaces and friendly front-desk, in-house dining and many more services. There is so much to do at the hostel. You’ll keep coming back for more!\r\n\r\n\r\n', 423, 'Kufri@0.25x-1674530218823.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 16:50:14', '2024-03-27 05:24:24'),
(34, 'The Hosteller Kasol, Riverside', 2, 'The Hosteller Kasol Alpine View offers stunning mountain views, lush pine greenery, and riverside tents for camping enthusiasts. Enjoy jaw-dropping sunsets and a gigantic throne for Instagram-worthy photos. The workation loft is ideal for hybrid work models. Accommodation options include dorms, private rooms, cottages, and Swiss tents. Explore gardens, relax in the open-air cafe, or nap under trees. Whether you\'re a thinker, artist, traveler, or digital nomad, the hostel\'s funky vibe will enchant you. Experience energetic common areas, creative decor, and delicious food - it\'s the ultimate Kasol adventure. #GetUpGo to Kasol now!\r\n\r\n\r\n\r\n\r\n\r\n', 848, '4.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 16:58:56', NULL),
(37, 'The Hosteller JAIPUR', 3, 'The Hosteller Jaipur, centrally located in the pink city, offers vibrant backpacker accommodations with Rajasthani art and modern design. Close to the train and bus station and within 2 miles of all famous monuments, it\'s easily accessible. With 21 luxurious rooms and space for nearly 100 travelers, it\'s ideal for large groups. Three spacious common areas allow for relaxation and socializing. Near M.I. Road and C Scheme, it provides easy access to Jaipur\'s attractions. The Old City is a quick 5-minute drive away, and landmarks like Jantar Mantar, Hawa Mahal, Nahargarh Fort, and City Palace are nearby. Experience Jaipur\'s essence at The Hosteller.', 408, 'hostel1.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:34:04', '2024-03-27 05:28:24'),
(38, 'The Hosteller JAISALMER', 3, 'Optimally located in the hub of the Golden City, The Hosteller Jaisalmer is a mere walk away from both the Jaisalmer Fort complex and the famous Gadisar Lake. An ideal place to spend your hours after exploring the city and taking in its sights and sounds. We are one of the best hostels in Jaisalmer with 6 plush private rooms, 16 spacious dormitories, a charming library, a big common room full of indoor games and most importantly, our stylish terrace cafe. The view from which is unbelievable. We also provide bikes on rent for your exploration adventures as well as add-on services like airport/station pick up, laundry and several local tours. Themed in tangent to Jaisalmer’s rich culture and heritage, our hostel will feel like a home away from home but with plenty of friends from around the world.', 397, 'hostel2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:35:02', '2024-03-27 05:29:03'),
(39, 'The Hosteller JODHPUR', 3, 'The Hosteller Jodhpur is the perfect friend to make during your travels to this royal and majestic city. The hostel is equipped with 6 spacious and welcoming dorm rooms and 5 generous private rooms. For our female travellers wanting some privacy, we also have female-only dorms available. Apart from the other airy common areas at the hostel, the pièce de résistance of The Hosteller Jodhpur is the huge terrace cafe overlooking the gargantuan Mehrangarh Fort. Trust us, you will be spending a lot of your time chilling on this terrace! Perfect for solo travellers and groups of friends, the welcoming and colourful interiors of the hostel is bound to keep the energy up all the time. Grab some delicious grub at the cafe, chill in the indoor common area or head to the travel desk to get some sightseeing recommendations. We are only a short distance from the famous Ghanta Ghar and hence close to all the major attractions and markets of the city. No reason not to #GetUpGo to Jodhpur!\r\n\r\n\r\n', 736, 'hostel33.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:35:56', '2024-03-27 05:29:37'),
(40, 'The Hosteller UDAIPUR', 3, 'Nestled in the heart of Udaipur, The Hosteller is a mere five minutes away from the City Palace, Pichola Lake and Jagdish Temple. A haven in the city of Lakes, we are one of the best hostels in Udaipur for a relaxing, comfortable and fun-filled getaway. Sporting 22 spacious dorms, 11 luxurious private rooms, a 2-tier rooftop cafe (with lift), bright and airy common rooms, a quaint library and a 24×7 help desk – The Hosteller Udaipur will feel like home sweet home at the end of a busy sightseeing day. The terrace has splendid views of Lake Pichola that will keep you mesmerized till late evening. Not to mention the yummy grub at the cafe. We are located near the markets and Gangaur ghat, with ATMs and all modern conveniences just a stone’s throw away. We also provide additional services like airport transfers, cab bookings and laundry services that you can easily avail from the reception. The hostel is decorated with colours of the city and is a reflection of the amalgam of beauty, modernity and traditions of Udaipur.\r\n\r\n\r\n', 399, 'hostel5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:37:26', '2024-03-27 05:31:08'),
(41, 'The Hosteller PUSHKAR', 3, 'The Hosteller Pushkar is located a stone’s throw away from the beautiful Pushkar lake, Holika Chowk and the famous Brahma temple. It is the ideal place to relax, think and connect. We provide quality budget accommodation and believe in keeping the backpacker vibe alive all the time. Comfortable beds, clean bathrooms, and free Wi-Fi are the obvious services that our hostel offers. Besides these, there is a common room with a huge projected screen, a PlayStation with insane games, a mini-library for some sound reading and paid laundry services. Our 24×7 travel help desk is always here to help you with any queries that you might have.\r\n\r\n\r\n', 371, 'hostel6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:38:21', '2024-03-27 05:31:58'),
(42, 'The Hosteller Opera House, Udaipur', 3, 'The Hosteller Opera House, Udaipur: A fusion of Rajasthani culture, contemporary architecture, and award-winning hospitality. Formerly a royal opera house, now a haven for art lovers, blending industrial, art deco, and traditional themes. Luxurious common areas include a restaurant, al-fresco cafe, pizzeria, and expansive pool. Ground floor can accommodate over 300 people, serving as a co-working space, event venue, or relaxation area. Classic private rooms and dorms offer comfort and charm. Amenities include a billiards room, grand foyer, ample parking, and vibrant murals. An ultra-premium backpacker hostel with endless amenities and friendly staff. Your go-to stay in the romantic city of Udaipur.', 464, 'hostel7.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:40:27', '2024-03-27 05:32:58'),
(43, 'The Hosteller Heritage Palace, Jodhpur', 3, 'The Hosteller Heritage Palace, Jodhpur: India’s first palace hostel, nestled near Kaylana Lake. Housed in a majestic palace built in 1959 by Maharaja Takhat Singh. Indo Saracenic architecture with Rajputana design elements. Elegant rooms complemented by lush green lawns and chill spaces. Indoor restaurant with local Jodhpuri fabrics. Grounds feature a mini stepwell, party area, leisurely pool, open cafe, and pergola. Proximity to the lake offers a stunning boating area. Traditional Jodhpuri trims and colorful lanterns adorn the walls. Old-world charm resonates in hospitality and services. A stunning blend of old and new, perfect for a quick getaway or a regal vacation birthday bash.', 464, 'hoste8.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:41:52', '2024-03-27 05:33:31'),
(44, 'The Hosteller Munnar', 4, 'The Hosteller Munnar offers a vast forest retreat suitable for both large groups and solo travelers. With spacious dorms and private rooms featuring cozy balconies for sunset views, guests can unwind in comfort. The hostel\'s lively restaurant serves delicious local delicacies, while masterpiece murals create a tranquil atmosphere throughout. Guests can enjoy stargazing from the glass cabin, gather around the bonfire on chilly nights, or relax on the open terrace. For those seeking entertainment, the hostel also features an active game room. Pack your bags and #GetUpGo to Munnar for a blissful backpacking getaway.\r\n\r\n\r\n\r\n\r\n\r\n', 870, 'hostel1.jpg', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2024-03-02 17:49:32', '2024-03-27 05:37:44'),
(45, 'The Hosteller Fort Kochi', 4, 'The Hosteller Fort Kochi offers a unique blend of modern style and local culture near the beautiful Fort Kochi beach. With 4 dorms and 5 private rooms, it feels like a home away from home. Colourful murals handpainted by a local artist depict fishing, local cuisine, and rich culture. Three common areas provide ample space for socializing and working. The rooftop common area is a backpacker\'s dream, featuring comfy seating and a projector for movie marathons, as well as a game area with foosball and carrom. It\'s the perfect spot for both relaxation and workations.\r\n\r\n\r\n\r\n\r\n\r\n', 418, 'hostel2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:50:44', '2024-03-27 05:38:44'),
(46, 'The Hosteller Ooty', 4, 'Experience the charm of yesteryears at The Hosteller Ooty, a heritage hostel over 100 years old. Surrounded by nature, it offers a cottage-themed ambiance and top-notch amenities. Enjoy outdoor activities like badminton or peaceful moments with yoga amidst pine-scented air. The vintage furniture and cozy bonfire area create a nostalgic vibe perfect for sharing travel stories. Escape the city bustle and unwind in the countryside, exploring nearby attractions or simply relaxing in the serene environment. Plan your trip now and #GetUpGo to The Hosteller Ooty.', 1182, 'hostel3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 17:52:33', '2024-03-27 05:39:04'),
(47, 'The Hosteller Bhandardara', 5, 'Escape to The Hosteller Bhandardara, nestled in the Sahyadris, for your next weekend getaway. Enjoy breathtaking views of Arthur Lake and Kalsubai Peak from the stunning cafe, amphitheater, and gardens. The hostel offers solo cabanas, premium cottages, and more, all themed around the natural aesthetics of the region. Explore walking trails, observe migrating birds, or trek Ratangad Peak during the day, and unwind with open-air movies and bonfires in the evenings. It\'s your perfect retreat from the city hustle.', 1068, 'hostel1.jpg', NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '2024-03-02 18:04:20', '2024-03-27 05:41:19'),
(48, 'The Hosteller LONAVALA', 5, 'Known famously as the ‘Jewel of the Sahyadris’, Lonavala is the perfect getaway from the chaos of the metropolis. An easy-breezy getaway from the likes of Mumbai and Pune, this hill station is blessed with pleasant weather throughout the year. But the real attraction is the gorgeous monsoon season that blesses Lonavala and its surrounding hills with lush greenery and a fragrant breeze. Unknown to many, Lonavala also has a lot of caves, hiking trails, smaller lakes, and forts to explore in and around it. And to be your best friend in Lonavala is The Hosteller Lonavala. A cozy and eclectic backpacker hostel complete with spacious rooms, great dorms, a deck, a garden area a swimming pool and outdoor lounges to keep the party going. You can bring your whole squad or just your S.O. for a quick getaway. Chill, have a pool party or a barbeque night, explore your surroundings and take advantage of our awesome hospitality.', 1071, 'hostel2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-02 18:05:00', '2024-03-27 05:41:39'),
(49, 'The Hosteller Agra', 6, 'Experience The Hosteller Agra, just 300 meters from the Taj Mahal, for your spontaneous weekend getaways. Spacious rooms, vibrant common areas, and A+ hospitality await. Discover a cool hangout spot in the basement with games and Bollywood movie marathons on the large projector. Head to the open terrace for mesmerizing views of the Taj Mahal at sunset. With two terrace areas, there\'s plenty of space to enjoy the breathtaking scenery. Don\'t wait any longer to fall in love with this unforgettable destination.', 669, 'hostel1.jpg', NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, '2024-03-02 18:13:20', '2024-03-27 05:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `message` varchar(250) NOT NULL,
  `inq_date` datetime NOT NULL DEFAULT current_timestamp(),
  `res_date` datetime NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `contact_number`, `address`, `message`, `inq_date`, `res_date`, `status`) VALUES
(1, 'Madhvi Tandel', 'tandelmadhvi2512@gmail.com', 8521479630, 'eroo', 'Please Help Me', '2024-03-18 10:25:53', '2024-03-18 10:41:40', '1'),
(2, 'Maaz', 'shaikhmaaz1250@gmail.com', 9327020267, 'Navsari', 'A message', '2024-03-18 10:42:12', '2024-03-18 10:46:09', '1'),
(3, 'kishan', 'kishanvinzuda21@gmail.com', 1234567890, 'Navsari', 'Hello', '2024-03-18 10:50:19', '2024-03-18 10:51:40', '1'),
(5, 'Aman', 'pethaniaaman17@gmail.com', 0, '5823697410', 'Help Me', '2024-03-18 12:44:03', '2024-03-18 12:48:32', '1'),
(7, 'madhvi', 'tandelmadhvi2512@gmail.com', 9904502512, 'nvs', 'bnb', '2024-03-21 13:55:16', '2024-03-21 13:56:10', '1'),
(8, 'maaz', 'shaikhmaaz1250@gmail.com', 9327020267, 'Navsari', 'I have a query', '2024-03-28 11:16:58', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` bigint(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `address`, `contact_number`, `item_name`, `quantity`, `unit_price`, `order_date`) VALUES
(12, '', '', '', 0, 'tannlines hi-octane waist belt ', 2, 0, '2024-03-18 14:10:41'),
(13, '', '', '', 0, 'red chili ventic air climbing shoes blue', 1, 0, '2024-03-18 14:12:41'),
(14, '', '', '', 0, 'vibram fivefingers kso evo mens barefoot shoes black 1', 1, 0, '2024-03-18 14:12:41'),
(15, '', '', '', 0, 'coleman atlantic lite 10 sleeping bag', 1, 0, '2024-03-19 04:40:42'),
(16, '', '', '', 0, 'coleman maxi comfort bed raised king airbed 5 ', 1, 0, '2024-03-22 04:48:53'),
(17, '', '', '', 0, 'coleman 28qt26t ltr marine xtreme cooler 1', 1, 0, '2024-03-22 04:48:53'),
(18, '', '', '', 0, 'coleman 60qt56.7 ltr wheeled cooler blue 5', 1, 0, '2024-03-22 04:48:53'),
(19, '', '', '', 0, 'Edelrid work gloves', 1, 0, '2024-03-22 04:50:06'),
(20, '', '', '', 0, 'coleman atlantic lite 10 sleeping bag', 1, 0, '2024-03-22 04:51:07'),
(21, '', '', '', 0, 'coleman atlantic lite 10 sleeping bag', 1, 0, '2024-03-22 04:53:22'),
(22, '', '', '', 0, 'Deuter Wallet', 3, 0, '2024-03-22 04:53:22'),
(23, '', '', '', 0, 'Deuter Wallet', 1, 0, '2024-03-22 05:00:43'),
(24, '', '', '', 0, 'coleman atlantic lite 10 sleeping bag', 1, 0, '2024-03-22 05:00:43'),
(25, '', 'shaikhmaaz1250@gmail.com', '', 0, 'Edelrid work gloves', 1, 0, '2024-03-22 05:01:50'),
(26, '', 'shaikhmaaz1250@gmail.com', '', 0, 'campingaz camp bistro 2 stove', 1, 0, '2024-03-22 05:01:50'),
(27, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'Deuter Wallet', 1, 0, '2024-03-22 05:06:57'),
(28, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'coleman atlantic lite 10 sleeping bag', 1, 0, '2024-03-22 05:06:57'),
(29, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'coleman maxi comfort bed raised king airbed 5 ', 1, 0, '2024-03-22 05:21:07'),
(30, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'coleman divide 200 led flashlight batterylock 6', 3, 0, '2024-03-22 05:21:07'),
(31, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'coleman skydome darkroom 4 person tent1', 5, 0, '2024-03-22 05:25:50'),
(32, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'red chili session air climbing shoes red', 1, 0, '2024-03-22 05:28:00'),
(33, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'red chili ventic air climbing shoes blue', 3, 0, '2024-03-22 05:28:00'),
(34, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 0, 'coleman atlantic lite 10 sleeping bag', 6, 0, '2024-03-26 05:18:45'),
(35, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'red chili session air climbing shoes red', 4, 0, '2024-03-26 05:20:53'),
(36, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'Edelrid work gloves', 1, 349, '2024-03-26 05:25:09'),
(37, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'red chili session air climbing shoes red', 1, 249, '2024-03-26 05:27:38'),
(38, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'red chili ventic air climbing shoes blue', 4, 399, '2024-03-26 05:27:38'),
(39, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'vibram fivefingers kso evo mens barefoot shoes black 1', 4, 349, '2024-03-26 05:27:38'),
(40, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 'nvs', 9327020267, 'coleman darwin 2 plus tent camping tent', 4, 399, '2024-03-26 05:31:43'),
(41, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 'Navsari', 1234567890, 'coleman 60qt56.7 ltr wheeled cooler blue 5', 1, 399, '2024-03-28 05:03:27'),
(42, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 'Navsari', 1234567890, 'campingaz freez pack m30', 1, 249, '2024-03-28 05:03:27'),
(43, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 'Navsari', 1234567890, 'coleman 28qt26t ltr marine xtreme cooler 1', 1, 349, '2024-03-28 05:25:43'),
(44, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 'Navsari', 1234567890, 'coleman comfort bed single 1', 3, 449, '2024-03-28 05:25:43'),
(45, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 'Navsari', 1234567890, 'coleman palmetto sleeping bag ', 1, 349, '2024-03-28 05:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `RoomName` varchar(150) DEFAULT NULL,
  `RoomHotelName` int(11) DEFAULT NULL,
  `RoomDescription` longtext DEFAULT NULL,
  `PricePerNight` int(11) DEFAULT NULL,
  `rimage` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `RoomName`, `RoomHotelName`, `RoomDescription`, `PricePerNight`, `rimage`) VALUES
(31, 'Deluxe Room', 25, 'Good', 2586, '1.jpg'),
(32, '8-Bed Dormitory', 29, 'Good View', 6598, '2.jpg'),
(33, 'Double-Bed Luxary', 30, 'Nice Room, Good Privacy', 5214, '3.jpg'),
(35, '4-Bed Dormitory', 28, 'Good Atmosphere', 6532, '1.jpg'),
(36, 'Single-Bed', 32, 'Good Room', 1560, '2.jpg'),
(38, '4-Bed Dormitory', 37, 'Good Beds and nice rooms', 1300, 'room1.jpg'),
(39, '2-Bed Dormitory Luxury Room', 44, 'Nice Room Must Visit', 1950, '1.jpg'),
(40, '4-Bed Dormitory', 31, 'good view', 1560, '4.jpg'),
(42, '4-Bed Dormitory', 33, 'good view', 1200, '4.jpg'),
(43, '4-Bed Dormitory', 34, 'good', 670, '4.jpg'),
(45, '4-Bed Dormitory', 38, 'good', 799, 'room2.jpg'),
(46, 'Single-Bed', 39, 'good', 699, 'room3.jpg'),
(47, 'Single-Bed', 40, 'good', 700, 'room4.jpg'),
(48, 'Single-Bed', 41, 'good', 890, 'room5.jpg'),
(49, 'Single-Bed', 42, 'good', 1000, 'room6.jpg'),
(50, 'Single-Bed', 43, 'good', 800, 'room7.jpg'),
(52, 'Single-Bed', 45, 'good', 799, 'hostel2.jpg'),
(53, '2-Bed Dormitory', 46, 'good', 899, 'hostel3.jpg'),
(54, 'Single-Bed', 47, 'good view', 699, 'room1.jpg'),
(55, 'single or double bed', 48, 'good', 677, 'room2.jpg'),
(56, 'Single-Bed', 49, 'good view', 800, 'room1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `StateName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `StateName`, `CreationDate`) VALUES
(1, 'Goa', '2024-02-29 11:05:27'),
(2, 'Himachal Pradesh', '2024-02-29 11:05:54'),
(3, 'Rajasthan', '2024-02-29 11:06:02'),
(4, 'Kerala', '2024-02-29 11:06:12'),
(5, 'Maharashtra', '2024-02-29 11:06:18'),
(6, 'Uttar Pradesh', '2024-02-29 11:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(9) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `contact_number`, `address`, `password`, `code`, `date`) VALUES
(17, 'Maaz2503', 'shaikhmaaz1250@gmail.com', 9327020267, 'nvs', 'Maaz@2003', 0, '2024-03-20 11:04:27'),
(18, 'diyavashi1', 'vashidiya@gmail.com', 9327020267, 'navsari', 'Vashi@2004', 0, '2024-03-20 13:06:11'),
(19, 'MadhviTandel', 'tandelmadhvi2512@gmail.com', 1234567890, 'Navsari', 'Madhvi@2512', 0, '2024-03-28 10:16:20'),
(20, 'Maaz Shaikh', 'shaikhmazz1250@gmail.com', 9327020267, 'Navsari', 'Maaz@2503', 0, '2024-04-04 10:35:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
