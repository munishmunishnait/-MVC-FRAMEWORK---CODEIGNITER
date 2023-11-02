-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2023 at 06:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmunish1_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_articles`
--

CREATE TABLE `ci_articles` (
  `title` varchar(255) NOT NULL,
  `articles` longtext NOT NULL,
  `filename` varchar(255) NOT NULL,
  `articles_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ci_articles`
--

INSERT INTO `ci_articles` (`title`, `articles`, `filename`, `articles_id`, `author_id`) VALUES
('The Golden Temple', 'Golden Temple, also known as Sri Harmandir Sahib, is a revered Sikh gurdwara located in the city of Amritsar in the Punjab region of India. It is considered the holiest shrine of Sikhism and is visited by millions of pilgrims and tourists from all over the world every year.\r\n\r\nThe temple was built in the 16th century by the fifth Sikh guru, Guru Arjan Dev Ji, and was designed to be a place of worship and community for people of all faiths and backgrounds. The temple is renowned for its stunning architecture, including its golden dome and marble walls, which are decorated with intricate carvings and inlaid with precious stones.\r\n\r\nOne of the most significant features of the Golden Temple is its Sarovar, a large pool of water that surrounds the temple and is considered to be a holy site for Sikhs. The temple also houses the Guru Granth Sahib, the Sikh holy scripture, which is recited daily by priests and worshippers.\r\n\r\nThe Golden Temple is not only a place of religious significance but also a symbol of Sikh heritage and culture. The langar or free community kitchen at the temple serves meals to thousands of visitors every day, regardless of their religion, caste, or social status, embodying the Sikh principle of equality and sharing.\r\n\r\nOverall, the Golden Temple is a deeply spiritual and cultural site that holds immense significance for Sikhs and is a must-visit destination for anyone interested in learning about Sikhism or experiencing the rich cultural heritage of the Punjab region.', 'golden-temple.jpg', 1, 2),
('Taj Mahal', 'The Taj Mahal is an iconic symbol of India and one of the most beautiful buildings in the world. Located in Agra, Uttar Pradesh, the Taj Mahal is a white marble mausoleum that was commissioned by the Mughal emperor Shah Jahan in memory of his beloved wife Mumtaz Mahal. The construction of the Taj Mahal began in 1632 and was completed in 1653, taking 22 years to finish. Today, the Taj Mahal attracts millions of visitors every year from all over the world.\r\n\r\nThe Taj Mahal is considered a masterpiece of Mughal architecture, blending Islamic, Persian, and Indian styles. The symmetrical layout of the Taj Mahal includes a central dome surrounded by four smaller domes, and four minarets standing at each corner of the platform. The intricate marble carvings, calligraphy, and inlay work of precious stones like lapis lazuli, turquoise, and jade, make the Taj Mahal an awe-inspiring sight. Visitors can also witness the changing colors of the Taj Mahal as the sun rises and sets, creating a magical experience.\r\n\r\nThe construction of the Taj Mahal took a massive effort from over 20,000 workers who came from all over India and Central Asia. The white marble used in the construction of the Taj Mahal was brought from Makrana in Rajasthan, while the red sandstone was sourced from Fatehpur Sikri. The Taj Mahal was built using advanced engineering techniques, such as a double dome and hollow foundation, which make it earthquake resistant. The water from the river Yamuna was brought to the site through a network of canals and wells to be used in the fountains and gardens.\r\n\r\n\r\n\r\n\r\n', 'taj-mahal.jpeg', 2, 2),
('The Red Fort', 'The Red Fort, also known as Lal Qila in Hindi, is a historic fort located in Old Delhi, India. It was built by the Mughal emperor Shah Jahan in the mid-17th century as his palace and administrative center of the Mughal Empire. The fort\'s construction began in 1638 and was completed in 1648, with its red sandstone walls and iconic architecture becoming a symbol of the Mughal dynasty\'s power.\r\n\r\nThe Red Fort covers an area of approximately 254.67 acres and is surrounded by a moat on its eastern side. It has two main entrances, the Lahore Gate and the Delhi Gate, which are both decorated with intricate carvings and designs. The fort\'s most iconic feature is the Diwan-i-Aam, or Hall of Public Audiences, which was used by the emperor to meet with the common people and hear their grievances.\r\n\r\nInside the fort, visitors can also see the Diwan-i-Khas, or Hall of Private Audiences, which was used by the emperor to meet with important guests and hold private meetings. Other notable features of the Red Fort include the Rang Mahal, or Palace of Colors, which was used by the emperor\'s wives and mistresses, and the Mumtaz Mahal, which was built by Shah Jahan as a memorial to his beloved wife Mumtaz Mahal.', 'red-fort.jpg', 3, 3),
('Hawa Mahal', 'Hawa Mahal is a famous palace located in the heart of Jaipur, the capital city of Rajasthan, India. It is also known as the Palace of Winds due to its unique architecture, which has numerous small windows or jharokhas that allow cool air to circulate inside the palace, providing respite from the scorching desert heat. The palace was built in 1799 by Maharaja Sawai Pratap Singh, and it is considered one of the most iconic landmarks of Jaipur.\r\n\r\nThe five-story palace was built in the shape of a crown of Lord Krishna, and it is constructed of pink sandstone. The palace has 953 small windows or jharokhas, which are decorated with intricate latticework. These jharokhas were originally built for the royal ladies to observe the everyday life of the people on the streets without being seen. The palace also has a courtyard and a small museum that showcases artifacts related to the history and culture of Jaipur.\r\n\r\nThe palace was designed by Lal Chand Usta, a renowned architect of that time, and it is an excellent example of Rajputana architecture. The palace is adorned with beautiful frescoes, which depict the culture and lifestyle of the Rajput dynasty. The palace has an open-air platform, which is used for various cultural and religious events. The palace is illuminated at night, giving it a magical look and attracting a large number of tourists.\r\n\r\n', 'hawa-mahal.jpg', 4, 3),
('Amber Fort ', 'Amber Fort, also known as Amer Fort, is a magnificent fort located in Amer, a town situated around 11 km from Jaipur, the capital city of Rajasthan, India. The fort is a major tourist attraction and a UNESCO World Heritage Site. Built by Raja Man Singh I in the 16th century, the fort was later expanded by the successive rulers of Jaipur.\r\n\r\nThe fort is built with red sandstone and marble and is situated on top of a hill, offering a breathtaking view of the surrounding landscape. The fort is known for its unique blend of Rajput and Mughal architecture, featuring intricate carvings, stunning courtyards, and beautiful gardens.\r\n\r\nOne of the most impressive features of the fort is the Sheesh Mahal, also known as the Palace of Mirrors. The palace is adorned with thousands of small mirrors and colored glasses, creating a mesmerizing effect. Another highlight of the fort is the Ganesh Pol, a beautifully decorated gate that leads to the private apartments of the royal family.', 'amber-amer-fort-jaipur-india_l.jpeg', 5, 4),
('Banff', 'Banff is a resort town located in the province of Alberta in western Canada. It is situated in the heart of the Canadian Rockies, surrounded by towering peaks, pristine lakes, and vast forests. The town is known for its natural beauty and offers visitors a range of activities throughout the year, from skiing and snowboarding in the winter to hiking and wildlife watching in the summer.\r\n\r\nOne of the main attractions in Banff is Banff National Park, which was established in 1885 and is Canada\'s oldest national park. The park covers an area of over 6,500 square kilometers and is home to a diverse range of wildlife, including grizzly bears, black bears, elk, moose, and wolves. Visitors can explore the park by hiking, biking, or taking a scenic drive along the Icefields Parkway.\r\n\r\nBanff is also home to three world-class ski resorts: Mount Norquay, Sunshine Village, and Lake Louise Ski Resort. The ski season typically runs from November to May, with over 8,000 acres of skiable terrain available across the three resorts. Banff also offers a range of other winter activities, including ice skating, dog sledding, and snowshoeing.', 'banff.jpeg', 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_articles`
--
ALTER TABLE `ci_articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_articles`
--
ALTER TABLE `ci_articles`
  MODIFY `articles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
