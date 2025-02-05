-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2025 at 03:39 PM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oicinter_muslimworldbiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `admin_designation` varchar(255) NOT NULL,
  `admin_email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `admin_designation`, `admin_email`, `password`) VALUES
(1, 'SAIDUR', 'WEB DEVELOPER', 'saidurrahman.uia@gmail.com', '1c31c58fe7d21fc3b46cd98572b2e8f3'),
(2, 'Laila', 'Chairman', 'laila@oictoday.biz', 'a93c84d77761a18e11fd83ee1a8cb240'),
(3, 'Wawa', 'Coordinator', 'salwa@muslimworldbiz.com', '2c1c2fabddaed734e6144e198320da07'),
(5, 'Ramesh', 'Business Development Manager', 'ramesh@oictoday.biz', '5778ad8cc35a7465c19200033f27d89f');

-- --------------------------------------------------------

--
-- Table structure for table `all_news`
--

CREATE TABLE `all_news` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_news`
--

INSERT INTO `all_news` (`id`, `filename`, `title`, `subtitle`, `slug`, `author`, `category`, `position`, `description`, `date`) VALUES
(1, 'd8d8c93f-13c0-4c6e-bc64-d0de900d1a86.jpg', '<p><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>About</strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\">The Muslim World Women&rsquo;s Summit Exhibition 2024</span></strong></span></span></p>', '<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The Muslim World Women&rsquo;s Exhibition is a leading trade event that consists of a Multi-sector International Exhibition and a number of specialised conferences in addition to prestigious award ceremonies.&nbsp;</span></span></span><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&rArr;</span></span></span></div>\r\n', 'the-muslim-world-womens-summit-exhibition-2024', 'MWB', 'About', 'Home', '<h3><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/d8d8c93f-13c0-4c6e-bc64-d0de900d1a86.jpg\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></h3>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:20px\">The Muslim World Women&rsquo;s Exhibition is a leading trade event that consists of a Multi-sector International Exhibition and a number of specialised conferences in addition to prestigious award ceremonies. The main goal of the event is to uplift the status of the Islamic economy by enhancing each of its components through cooperation between all stakeholders. To do so, the event brings together policy makers, organisational leaders, business professionals, economists and academicians to deliberate over compelling issues and formulate effective strategies.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:20px\">The Muslim World Biz contributes to the implementation of the OIC-2025 Programme of Action, which was announced by the OIC in 2016, to increase intra-OIC trade to be 25% by the year 2025. However, the event is not confined to serving only the 57 OIC member countries as the nearly 2 billion Muslim population is also established on all six continents. The Muslim World Biz leverages on the fact that the Islamic countries possess most of the world&rsquo;s natural resources, and more than a quarter of its human resources.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:20px\">The Muslim World Women&rsquo;s Exhibition has been restructured to organise the sub events as stand-alone events. The purpose of this is to provide more focus on each of its activities of the Muslim Women&rsquo;s in the world to maximise the benefits. However, the biggest of the activities for 2024 will be held from 16,17 &amp; 18 October 2024 comprising of the Conferences,and Presentation of the Muslim World Rania Award 2024.</span></span></p>', '2024-07-12 00:59:05'),
(2, 'founder-24.png', '<p><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Vision of The Founder</strong></span></span></span></p>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Allahyarham Dato&rsquo; Dr. Raja Mohamad Abdullah </strong></span></span></span></div>\r\n\r\n<div><strong><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Founder, Muslim World Biz &amp; OIC International Business Centre</span></span></span></strong></div>', '', 'vision-of-the-founder', 'MWB', 'Message', 'Home', '<h3><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/founder-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></h3>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">The prime theory of Allahyarham Dato&rsquo; Dr. Raja Mohamad Abdullah, the late CEO of the OIC International Business Centre Sdn Bhd, was that the Muslim world should focus on business, trade and enhancement of peaceful ways to resolve the massive economic problems it currently faces.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">He would say the Muslim world has seen its ugly share of wars, conflicts and crises and that Muslim populations are falling behind the rest of the world, pointing out his tenure as the CEO of the company, chairman of the Muslim World Business &amp; Investment Zone (Exhibition &amp; Conference), he would press on that it was time for a change, and to him it meant putting the economy ahead of the political debate. Allahyarham Dato&rsquo; Dr. Raja Mohamad Abdullah is the man that relentlessly stood for fellow Muslims, for economic progress, for global integration of the OIC member countries and for Malaysia to be known as the catalyst centre for global Islamic development.</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">&ldquo;But the economic well-being of the people is not catered for, leaving behind a trail of suffering, poverty and wars,&rdquo; he would say. And this will be one of the last no-holds-barred messages that Dato&rsquo; would have for the global Muslim community, a message that should remain engraved on the walls of history.</span></span></p>\r\n\r\n<blockquote>\r\n<p><strong><span style=\"font-size:26px\"><span style=\"font-family:Times New Roman,Times,serif\">&ldquo;But the economic well-being of the people is not catered for, leaving behind a trail of suffering, poverty and wars.&rdquo;</span></span></strong></p>\r\n</blockquote>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:20px\"><span style=\"font-family:Times New Roman,Times,serif\">Allahyarham Dato&rsquo; Dr. Raja Mohamad Abdullah</span></span></p>\r\n\r\n<p><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\"><strong><span style=\"font-size:20px\">Allahyarham Dato&rsquo; Dr. Raja Mohamad Abdullah<br />\r\nFounder, Muslim World Biz &amp; OIC International Business Centre</span></strong></span></p>', '2024-07-12 01:00:37'),
(3, 'advisor-24.png', '<p><span style=\"color:#cb3d95\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Message From The Advisor</span></span></strong></span></p>\r\n\r\n<div><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">Datuk Seri Dr. Noraini Ahmad</span></span></span></strong></div>\r\n\r\n<div><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">Deputy Minister,&nbsp;Ministry of Women, Family And Community</span></span></span></strong></div>\r\n\r\n<div><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">Advisor, The Muslim World Women&rsquo;s Summit</span></span></span></strong></div>', '', 'message-from-the-advisor', 'MWB', 'Message', 'Home', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/advisor-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">First and foremost, I would like to extend my warm wishes and sincere gratitude to everyone. I am honoured for being given the opportunity to embark on this initiative where compassion, unity and aspiration come together to shape the future of Women Empowerment.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">I would like to express my appreciation to the Government of Malaysia, the Organisation of Islamic Cooperation (OIC) and the Islamic Centre for Development of Trade (ICDT) for being the backbone and unwavering supporters of our initiatives over the years.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The Muslim World Women&#39;s Summit 2024 marks a significant moment in our shared journey in pursuing a common purpose where the topic of Women Empowerment globally needs the utmost attention. Even though we come from diverse backgrounds and cultures, I believe our goals and objectives are the same.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">In line with the theme, &ldquo;The Powerful Women Next Generation Vanguard of Feminine Power&rdquo;, The Muslim World Women&#39;s Summit 2024 is a platform to build bridges of understanding by facilitating space to foster dialogues and enhance intra-trade among participating nations. In addition, the conferences, exhibitions and award ceremony recognizes women leaders who have championed the causes of Women Empowerment.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">As the Advisor of The Muslim World Women&rsquo;s Summit I will stay committed to serving the interest of our shared common values to achieve progress. Together, we can shape a better tomorrow for ourselves, our children, and future generations. Let&#39;s come together and reap the benefits that this event has to offer.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Thank you. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Yours sincerely,</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>DATUK SERI DR. NORAINI AHMAD</strong></span></span></p>', '2024-07-12 01:02:18'),
(4, 'chairman-24.png', '<p><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\">Message From The Chairman</span></strong></span></span></p>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\">Datuk Wira Haji Johan Abd&nbsp;Aziz</span></strong></span></span></div>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><strong><span style=\"font-family:Arial,Helvetica,sans-serif\">Chairman, Muslim World Biz (MWB)</span></strong></span></span></div>', '', 'message-from-the-chairman', 'MWB', 'Message', 'Home', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/chairman-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">As the Chairman of the Muslim World Biz, it gives me an immense pleasure to be part of The Muslim World Women&#39;s Summit 2024, which is due to take place from 16,17 &amp; 18 October 2024 at World Trade Centre Kuala Lumpur,Malaysia.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">This year&rsquo;s event is going to be a grand highlight as our focus is on &lsquo;Women Empowerment&rsquo; where women leaders from Malaysia and other participating countries are coming together to contribute their ideas and share their experience.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">With the theme &quot;The Powerful Women Next Generation Vanguard of Feminine Power&rdquo;, The Muslim World Women&rsquo;s Summit 2024 is designed and catered to deliver an ever-lasting impact on the lives of every participant. The event encompasses three other incorporating platforms, namely the conference zone, the exhibition zone and an award ceremony. All these programs are strategically planned to ensure each one of them delivers a specific objective that can be fruitful to the attendees.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">I take this opportunity to express my sincere gratitude to the Government of Malaysia for continuously supporting our initiatives from day one. I would also like to thank the Organisation of Islamic Cooperation (OIC), the Islamic Centre for Development of Trade and the Association (ICDT) and all our local and international partners for their tremendous support to make this year&rsquo;s event a great success again.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">I anticipate and look forward to welcoming all of you to this prestigious event which is going to inspire, motivate and raise awareness of the importance of women empowerment in Malaysia as well as globally</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Thank you.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Yours sincerely,</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>DATUK WIRA HAJI JOHAN ABD&nbsp;AZIZ</strong></span></span></p>', '2024-07-31 08:04:50'),
(5, 'director-24.png', '<p><span style=\"color:#cb3d95\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Message From The &nbsp;Director General</span></span></strong></span></p>\r\n\r\n<div><span style=\"color:#000000\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Madam Latifa El Bouabdellaoui</span></span></strong></span></div>\r\n\r\n<div><span style=\"color:#000000\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Director General of The Islamic Centre For Development of Trade (ICDT)&nbsp;</span></span></strong></span></div>', '', 'message-from-the- director-general', 'MWB', 'Message', 'Home', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/director-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">On behalf of the Islamic Centre for Development of Trade (ICDT), it is my utmost pleasure and privilege to extend a warm and heartfelt welcome to all the distinguished attendees of The Muslim World Women&#39;s Summit 2024.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">As the Director General of ICDT, I extend my sincere gratitude to the organizing committee and the dedicated team who have worked tirelessly to bring this visionary event to life. Your commitment to empowering women and fostering positive change is commendable, and I express my deepest appreciation for your remarkable efforts.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Our shared mission at ICDT is to facilitate collaboration to enhance trade and investment in Muslim Countries and women economic empowerment is a key topic in our programs since they impact positively socio-economic development in our communities. Among our programs in this area are the training workshops organized with TFO Canada on market access and management of value chains for the benefit of women entrepreneurs. The first Edition was recently held in Casablanca (Kingdom of Morocco) in July 2023 and gathered 40 women owned enterprises and cooperatives from OIC Arab speaking Countries. The Centre will organize other editions for English and French speaking Countries during the last quarter of 2023 and implement other projects to improve women access to international trade and empower economically African women living in rural areas who are known to impact positively the socio-economic development and welfare of their communities.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The Muslim World Women&#39;s Summit encapsulates this common vision consisting in gathering experts, investors and stakeholders from Muslim Countries to discuss challenges faced by women entrepreneurs within the OIC Region and provide solutions to empower them.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">In this vein, ICDT has consistently been a strong supporter of Muslim World Biz, providing unwavering support for their initiatives over the years. Thus, ICDT remains committed to supporting future projects of Muslim World Biz, fostering mutual benefits and cooperation between our organizations for the betterment of Ummah and OIC member states.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">I encourage each and every one of you to actively engage, contribute, and collaborate throughout this event. Embrace this opportunity to forge new alliances, build networks, and develop enduring partnerships that will serve as pillars of support and inspiration long after the summit concludes.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Once again, I extend a warm welcome to The Muslim World Women&#39;s Summit 2024. May this gathering be a source of inspiration and empowerment for all participants and I hope to see you all from the 16,17 &amp; 18 October 2024 at World Trade Centre Kuala Lumpur,Malaaysia.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Thank you.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Yours sincerely</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>MADAM LATIFA EL BOUABDELLAOUI</strong></span></span></p>', '2024-07-12 01:04:05'),
(6, 'dr-laila-24.png', '<p><span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:16px\">Message From The Organiser</span></strong></span></span></p>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:16px\">Dr. Laila Rani Dato&rsquo; Dr. Raja Mohamad Abdullah</span></strong></span></span></div>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:16px\">Chairman, Association of Muslim World Business, Malaysia, </span></strong></span></span></div>\r\n\r\n<div><span style=\"color:#000000\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:16px\">Chairman, Muslim World Rania, Editor-in-chief, OIC Today</span></strong></span></span></div>', '', 'message-from-the-organiser', 'MWB', 'Message', 'Home', '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/dr-laila-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Since 2010, the Muslim World Business and Investment Zone has been promoting cooperation between companies from different OIC member countries. It has established a network of entrepreneurs and business leaders from many countries. We are truly proud that this event is now entering its tenth year, and this gives us more energy to work even harder to accomplish our mission represented in developing the Islamic economy, which in turn enhances the welfare of not only Muslims, but also humanity at large.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">What makes us even stronger is the continuous support we receive from the sponsors and partners in addition to the assistance from the Government of Malaysia and its various ministries and agencies, the Islamic Centre for Development of Trade and the Association of Arab Universities. For the upcoming &quot;The Muslim World Women&#39;s Summit 2024&quot;, we are preparing like we have not done before. This is simply because we can see the great potential this event has, not only to grow national economies but also to foster international ties so that people from different regions could live in peace and harmony.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">As usual the event will include three main components: the conference zone, the exhibition zone and the award ceremonies. However, the content and scale of these activities are going to be different in the sense that new and compelling topics will be discussed, more exhibitors and participants are expected to join and new strategies will be built to boost the progress of economic and social activities within the Muslim world and beyond. Be part of this annual event and get the benefits which reach individuals and organisations from local and international communities.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">With the theme &quot;The Powerful Women Next Generation Vanguard Of Feminine Power&quot; The Muslim World Women&#39;s Summit 2024 aims to build upon past achievements to attain future prosperity. For this we believe in the policy of inclusion so that everyone has a chance to participate. In particular, as the Chairman of the Muslim World Rania, I emphasise the roles of women in growing this event and increasing its positive impact globally. Therefore, I invite you to explore through this brochure to see which of the components match with your business operations, and our specialised teams will be there to assist you.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Finally, I would like to acknowledge and sincerely appreciate the support we receive from the Government of Malaysia as part of its constant contribution and renowned leading role to develop the Islamic economy. I also thank all the sponsors and partners who believe in our mission and I am confident that they will be rewarded with greater success.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Thank you.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Yours sincerely,</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>DR. LAILA RANI DATO&rsquo; DR. RAJA MOHAMAD ABDULLAH</strong></span></span></p>', '2024-07-12 01:05:15'),
(7, 'MAIN EVENT LOGO 2024.png', '<div><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#cb3d95\"><strong><span style=\"font-size:18px\">The Muslim World Women&rsquo;s &nbsp;Summit Conference 2024&nbsp;-</span></strong></span><span style=\"color:#000000\"><strong><span style=\"font-size:18px\">&nbsp;</span></strong><span style=\"font-size:18px\">The theme of &quot; The Powerful Women Next Generation, Vanguard of Feminine Power&quot; encapsulates the notion of a groundbreaking wave of remarkable women who are propelling substantial progress in gender equality and empowerment&nbsp;</span></span><span style=\"color:#cb3d95\"><span style=\"font-size:18px\">&rArr;</span></span></span></div>', '', 'the-muslim-world-womens- summit-conference-2024', 'MWB-2024', 'Conference', 'Home', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong>The Muslim World Women&rsquo;s &nbsp;Summit Conference 2024</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The theme of &quot; The Powerful Women Next Generation, Vanguard of Feminine Power&quot; encapsulates the notion of a groundbreaking wave of remarkable women who are propelling substantial progress in gender equality and empowerment. These visionary individuals serve as catalysts for transformative change, fearlessly breaking through societal barriers and reshaping conventional power structures. They embody the essence of feminine power by embracing their unique strengths, perspectives, and talents to drive positive social, economic, and political transformations. Through their unwavering inspiration and empowerment, they challenge gender norms, advocate for equal rights and opportunities, and ignite a path towards a more inclusive and harmonious world. The chosen theme emphasizes the crucial significance of recognizing and amplifying the voices and remarkable contributions of these trailblazing women who are shaping the future and forging the path towards a more inclusive and balanced world.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">For the third year, The Muslim World Women&rsquo;s Summit continues to be an exclusive platform to emphasise and highlight the role of women in the development of different sectors across the Muslim world. The participants share and exchange opinions on issues related to women&rsquo;s involvement in the social, political, business and educational sectors. The purpose is to amplify the message of empowerment and service to society and to highlight the many ways in which women contribute to the world. It also serves as a valuable space for women leaders to engage in dialogues about issues and solutions that affect their communities.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Using their inspirational life stories, the participating women will engage in meaningful dialogue during various sessions to reflect on previous experiences and plan for future progress. While this enhances the contribution of women leaders to the economic growth of their nations, it also serves to motivate the youth to appreciate the integration of efforts exerted by men and women for the betterment of humanity. They will be better prepared to face the challenges and create impactful solutions.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">SESSION 1 : WOMEN AND FINANCIAL EMPOWERMENT&nbsp;</span></strong></span></span></p>\r\n\r\n<div><span style=\"color:#cb3d95\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&quot; Empowering Women, Building Wealth &quot;&nbsp;</span></span></strong></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Key Focus Areas</span></span></strong></div>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The importance of financial literacy for women</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Financing women-owned businesses</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Entrepreneurship and womens</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Investing in women: wealth creation and management</span></span></li>\r\n</ul>\r\n\r\n<div><span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">SESSION 2 : WOMEN IN MEDIA</span><br />\r\n<span style=\"font-size:16px\">&quot; Media For And By Women, Game Changer &quot;</span></strong></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Key Focus Areas</span></span></strong></div>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Creating opportunities for women in media</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The role of media in shaping perceptions of women</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Leveraging digital platform&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Women&rsquo;s voices in media: amplifying stories and perspectives</span></span></li>\r\n</ul>\r\n\r\n<div><br />\r\n<span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">SESSION 3: TALKING IS A GIFT: COMMUNICATION SKILLS FOR WOMEN</span></strong></span></span></div>\r\n\r\n<div><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>&quot; Speak Up, Stand out, Succeed &quot;</strong></span></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Key Focus Areas</span></span></strong></div>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Communicating with confidence</span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Effective listening skills</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Using technology for effective communication</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Navigating difficult conversations and strategies for effective communication</span></span></li>\r\n</ul>\r\n\r\n<div><span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong><span style=\"font-size:18px\">SESSION 4 : VIOLENCE AGAINST WOMEN</span></strong></span></span></div>\r\n\r\n<div><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>&quot; No More Silence, No More Violence &quot;</strong></span></span></span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Key Focus Areas</span></span></strong></div>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Understanding the types of violence against women</span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">The impact of violence on women&rsquo;s physical and mental health</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">The role of community-based interventions in preventing violence against women</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:16px\">Empowering survivors: healing, recovery, and rebuilding lives</span></span></li>\r\n</ul>', '2024-07-11 07:21:28'),
(8, 'CONFERENCE-2024.png', '<div><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:#cb3d95\"><span style=\"font-size:18px\"><strong>World Islamic Fashion Conference 2024 -&nbsp;</strong></span></span><span style=\"color:#000000\"><span style=\"font-size:18px\">Islamic fashion, a rapidly growing industry, has emerged as a powerful tool for social change, empowering individuals and communities while redefining traditional notions of identity and self-expression. With its unique blend of modesty, creativity&nbsp;</span></span><span style=\"color:#cb3d95\"><span style=\"font-size:18px\">&rArr;</span></span></span></div>', '', 'world-islamic-fashion-conference-2024', 'MWB-2024', 'Conference', 'Home', '<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong>World Islamic Fashion Conference 2024</strong></span></span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Islamic fashion, a rapidly growing industry, has emerged as a powerful tool for social change, empowering individuals and communities while redefining traditional notions of identity and self-expression. With its unique blend of modesty, creativity, and cultural diversity, Islamic fashion has transcended boundaries, inspiring a wave of inclusivity and innovation within the fashion world.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Rooted in the principles of Islam, Islamic fashion adheres to the concept of modesty, emphasizing the importance of covering the body and maintaining a sense of dignity. However, far from being restrictive or monotonous, Islamic fashion has evolved into a vibrant and dynamic movement, showcasing the diversity and creativity within Muslim communities worldwide.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Furthermore, Islamic fashion has become an instrument for social change, fostering inclusivity and challenging mainstream beauty standards. The industry has witnessed the emergence of talented designers and entrepreneurs who are revolutionizing the fashion landscape by catering to the diverse needs of Muslim consumers. These designers are breaking barriers and pushing boundaries, creating garments that are both fashionable and in line with Islamic principles.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">True to the fact, Islamic fashion has emerged as a powerful force for social change, empowering individuals, challenging stereotypes, and fostering inclusivity and cultural dialogue. By combining modesty with creativity, Islamic fashion offers Muslim individuals a platform to express their identity, redefine beauty standards, and promote self-empowerment. As the industry continues to flourish, it has the potential to reshape societal perceptions, bridge cultural divides, and inspire a new era of diverse and inclusive fashion.</span></span></p>\r\n\r\n<p><br />\r\n<span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">SESSION 1 : SUSTAINABILITY IN FASHION<br />\r\n&nbsp;&quot;Be Bold, Be Fashionable, And Make a Difference. Embrace Sustainable Fashion For A Greener Future&quot;</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Sustainable materials of the future that could change the face of fashion</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Sustainable production</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Fashion and the environment</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Consumer behavior and sustainable fashion</span></span></li>\r\n</ul>\r\n\r\n<p><br />\r\n<span style=\"color:#cb3d95\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">SESSION 2: FASHION AND DIVERSITY<br />\r\n&nbsp;&quot;Fashion Has The Power To Unite Us All, Celebrating Diversity And Embracing Individuality One Style&quot;</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;The importance of diversity in fashion</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Inclusivity in fashion</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Collaborating across cultures</span></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">&nbsp;Overcoming bias and discrimination in fashion</span></span></li>\r\n</ul>', '2024-07-11 07:25:04'),
(9, 'rANIA2024.png', '<div><span style=\"color:#cb3d95\"><strong><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The Muslim World Rania Award 2024&nbsp;-&nbsp;</span></span></strong></span><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The meaning of &ldquo;Rania&rdquo; is derived from the word &ldquo;Queen&rdquo;. There is no doubt that women carry big responsibilities in their role of contributing to all aspects of human life. There has not been any known divine or man-made law that is not giving women&nbsp;</span></span></span><span style=\"color:#cb3d95\"><span style=\"font-size:18px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&rArr;</span></span></span></div>', '', 'the-muslim-world-rania-award-2024', 'mwb', 'Conference', 'Home', '<p><strong><span style=\"font-size:20px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The Muslim World Rania Award 2024</span></span></strong></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The meaning of &ldquo;Rania&rdquo; is derived from the word &ldquo;Queen&rdquo;. There is no doubt that women carry big responsibilities in their role of contributing to all aspects of human life. There has not been any known divine or man-made law that is not giving women their due rights in the society. Failing to clearly understand their role leads to disparage women&rsquo;s value and hence deny those rights. All stages of history are full of examples for women who excelled event better than their men counterparts.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Islam, for instance, elevates the status of women to be completely equal to men, and it rejects any act of downgrading their physical and/or intellectual capabilities. However, many people accuse the Islamic teachings of being unfair towards women. This accusation comes in the first place as a result of misinterpreting the verses of the Holy Quran, without looking at the authentic narrations and explanations. What support the critic of those people are perhaps some cultural practices which have no roots in any of the Quranic verses.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">In recognition of the women&rsquo;s efforts and to appreciate their feat in all sections of our life, the OIC International Business Centre has the pleasure to announce the presentation of &ldquo;The Muslim World Rania Award&rdquo; to selected distinguished women from around the Muslim world. The award presentation for the thirdtime, will take place at a special ceremony during the undertaking of the annual event &ldquo;The Muslim World Women&#39;s Summit 2024&rdquo;</span></span></p>\r\n\r\n<p><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">VISION</span></span></strong></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The award is to recognize and appreciate the rights of all women arounds the world by showing examples of outstanding women in the Muslim World , who face enormous challenges along the way towards success and excellence</span></span></p>\r\n\r\n<p><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">OBJECTIVES</span></span></strong></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>(1)</strong> Emphasize the role women play to attain comprehensive development of the Islamic economy.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>(2)&nbsp;</strong>Present real stories of how women can be successful business leaders without compromising their other duties.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>(3)</strong> Inspire the youth,especially girls, in their works towards getting utilising rights for their benefit and the benefits of others.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\"><strong>(4) </strong>Integrate the efforts of men and women based on mutual understanding and acceptance of each other&#39;s rights and responsibilities</span></span></p>\r\n\r\n<p><br />\r\n<strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The Muslim World Rania Award is mainly presented to celebrate the success and achievements of the awarded women</span></span></strong></p>', '2024-07-31 08:18:10'),
(10, 'talib12.png', '<p><span style=\"color:#cb3d95\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Message From The Organiser</span></span></strong></span></p>\r\n\r\n<div><strong><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Muhammad Talib B. Dato&rsquo; Dr Raja Mohamad Abdullah.</span></span></span></strong></div>\r\n\r\n<div><strong><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">CEO, OIC International Business Centre</span></span></span></strong></div>', '', 'message-from-the-co-organiser', 'MWB-2024', 'Message', 'Home', '<h3><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/talib-24.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></h3>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Warm greetings from OIC International Business Centre</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">We are pleased to announce The Muslim World Women&#39;s Summit 2024 will be organised at the World Trade Centre Kuala Lumpur, Malaysia. With the theme &ldquo;&lsquo;The Powerful Women Next Generation Vanguard Of Feminine Power&rdquo; the 10th edition of the event is expected to draw over 500 Malaysian and international exhibitors occupying close to 300 exhibition booths for two days. It is the ideal platform to network, create and promote brand awareness, conclude deals and expand your business.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">The Muslim World Women&rsquo;s Summit, comprised with international panel of experts, the event is expected to be well-attended by 2,000 delegates to exchange ideas and learn new concepts that are bound to lead to enriching the lives, knowledge and economies of the participating individuals, organisations and countries.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">I invite you to witness the presentation of The Muslim World Rania Award, which is one of the world&rsquo;s leading prestigious awards, to honour the movers &amp; shakers who have contributed towards the growth of the global Islamic economy.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">With the support of the Government of Malaysia, the Organisation of Islamic Cooperation (OIC) and other prominent organisations, The Muslim World Women&#39;s Summit 2024 is geared to play a leading role in increasing trade activities among the Muslim and non-Muslim countries. The main focus of the Muslim World Biz on providing the platform for business and investment opportunities has been remarkably successful for the last nine years with active participation from more than 50 countries worldwide.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Be a part of The Muslim World Women&#39;s Summit 2024, which will provide you with the golden opportunity to expand into the Muslim market both here in Malaysia as well as in other Muslim and non-Muslim countries worldwide. It is the perfect opportunity to tap into the 2 billion Muslim population worldwide.</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Thank you.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">Yours sincerely,&nbsp;</span></span></p>\r\n\r\n<p><strong><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:18px\">MUHAMMAD TALIB DATO&rsquo; DR RAJA MOHAMAD ABDULLAH</span></span></strong></p>', '2024-08-16 02:14:36'),
(11, 'dpm-2024.png', '<p><span style=\"color:#cb3d95\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Message From The</span></span></strong></span></p>\r\n\r\n<p><span style=\"color:#000000\"><strong><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Deputy Prime Minister of Malaysia&nbsp;</span></span></strong></span></p>', '<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">First of all, I am deeply honored to extend my warmest greetings and heartfelt support to each and every one of you as we embark on an extraordinary journey towards the empowerment of Muslim</span></span></span><span style=\"color:#ff0000\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&nbsp;</span></span></span><span style=\"color:#cb3d95\"><span style=\"font-size:16px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">&rArr;</span></span></span></div>\r\n', 'message-from-the-deputy-prime-minister-of-malaysia ', 'oictoday', 'About', 'Home', '<h3><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/dpm-2024.png\" style=\"float:left; height:378px; margin-right:10px; width:300px\" /></h3>\r\n\r\n<p><em><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">Assalamualaikum Warahmatullahi Wabarakatuh.</span></span></em></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">First of all, I am deeply honored to extend my warmest greetings and heartfelt support to each and every one of you as we embark on an extraordinary journey towards the empowerment of Muslim women worldwide. It is with great enthusiasm and pride that I convey my unwavering commitment to The Muslim World Women&#39;s Summit 2024, an event that promises to be a beacon of hope, inspiration, and transformation.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">The Muslim World Women&#39;s Summit is not just a conference; it is a testament to the unity and strength of the 57 member states of the Organization of Islamic Cooperation (OIC). It serves as a powerful reminder of the potential and resilience of Muslim women in our diverse societies. The challenges faced by women across the Muslim world are complex and multifaceted.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">The Muslim World Women&#39;s Summit 2024 is our platform for change, our stage for dialogue, and our canvas for innovation. It is where we gather to celebrate the remarkable achievements of Muslim women who have defied the odds, and it is where we formulate a roadmap to amplify the voices of those whose potential remains untapped.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">As the Deputy Prime Minister of Malaysia, I assure you of our unwavering support and commitment to making The Muslim World Women&#39;s Summit 2024 a resounding success. Malaysia is proud to be part of this transformative endeavor, and we look forward to hosting this event in our beautiful nation.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:18px\">I urge each and every one of you to participate wholeheartedly in this summit. Let us come together, in the spirit of solidarity, to share our experiences, forge alliances, and craft strategies that will uplift women across our nations. Lastly, I extend my deepest gratitude to the organizers for their tireless efforts in bringing this summit to fruition. May Allah (SWT) guide our deliberations, bless our efforts, and grant us success in our noble endeavor.</span></span></p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/userfiles/images/mwbiz-2024-11-7/madani.png\" style=\"height:100%; width:100%\" /></p>', '2024-07-11 07:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `businessmatching`
--

CREATE TABLE `businessmatching` (
  `id` int(11) NOT NULL,
  `client_type` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_code` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cluster` varchar(100) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `interested_field` varchar(100) NOT NULL,
  `other` varchar(255) NOT NULL,
  `event_number` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cover_photo`
--

CREATE TABLE `cover_photo` (
  `id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cover_photo`
--

INSERT INTO `cover_photo` (`id`, `filename`, `title`, `category`, `year`, `date`) VALUES
(4, 'IMGL6085-min.jpg', 'Dr. Laila Rani Dato  Dr. Raja Mohamad Abdullah', 'rania', '2024', '2024-07-02 02:02:54.670953'),
(5, 'DSC07214-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:00:07.553429'),
(6, 'DSC07222-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:03:22.932231'),
(7, 'DSC07423-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:03:38.840941'),
(8, 'DSC07424-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:03:52.834607'),
(9, 'DSC07426-min.jpg', 'Rania Award Recipient', 'rania', '2024', '2024-07-02 02:04:35.980219'),
(10, 'DSC07461-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:08:11.034795'),
(11, 'IMGL5708-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:08:24.360893'),
(12, 'IMGL6022-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:08:40.493587'),
(13, 'IMGL6138-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:08:54.425652'),
(14, 'IMGL6348(1)-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:09:12.002409'),
(15, 'IMGL6590-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:09:25.794702'),
(16, 'IMGL6763-min.jpg', 'Guest of Rania Award Ceremony', 'rania', '2024', '2024-07-02 02:09:39.063517'),
(17, 'IMGL6219-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:05:24.554451'),
(18, 'IMGL6375-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:05:36.196683'),
(19, 'IMGL6380-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:05:48.939406'),
(20, 'IMGL6490-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:06:00.837645'),
(21, 'IMGL6572-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:06:15.469128'),
(22, 'IMGL6600-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:06:31.777421'),
(23, 'IMGL6620-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:06:45.271737'),
(24, 'IMGL6705-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:06:56.024495'),
(25, 'IMGL6749-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:07:06.543541'),
(26, 'IMGL6754-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:07:18.718883'),
(27, 'IMGL6756-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:07:33.456486'),
(28, 'IMGL6766-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:07:46.179167'),
(29, 'IMGL6828-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:07:56.778743'),
(30, 'IMGL6964-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:08:07.707856'),
(31, 'IMGL6966-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:08:19.050704'),
(32, 'IMGL6985-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:08:30.318263'),
(33, 'IMGL7031-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:08:41.685335'),
(34, 'IMGL7045-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:08:53.299363'),
(35, 'IMGL7054-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:09:05.905258'),
(36, 'DSC07425-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:09:26.847488'),
(37, 'DSC07462-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:09:39.046653'),
(38, 'IMGL5577-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:09:50.220371'),
(39, 'IMGL5951-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:10:03.498685'),
(40, 'IMGL5973-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:10:17.812961'),
(41, 'IMGL6020-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:10:28.600106'),
(42, 'IMGL6030-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:10:41.615556'),
(43, 'IMGL6039-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:10:55.597414'),
(44, 'IMGL6075-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:11:07.896094'),
(45, 'IMGL6118-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:11:38.719897'),
(46, 'IMGL6134-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:11:55.523420'),
(47, 'IMGL6229-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:12:08.893908'),
(48, 'IMGL6232-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:12:20.728040'),
(49, 'IMGL6240-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:12:30.925525'),
(50, 'IMGL6326-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:12:41.581270'),
(51, 'IMGL6335-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:12:52.057059'),
(52, 'IMGL6344-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:13:03.743069'),
(53, 'IMGL6348-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:13:14.388225'),
(54, 'IMGL6353-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:13:25.156399'),
(55, 'IMGL6355-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:13:35.840170'),
(56, 'IMGL6362-min.jpg', 'Rania Award Ceremony', 'rania', '2024', '2024-07-02 03:13:47.073480'),
(57, 'IMGL0069-min.jpg', 'Rania Award Recipient', 'rania', '2024', '2024-07-02 03:47:14.776142'),
(58, 'DSC08686-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:29:24.626844'),
(59, 'DSC08710-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:29:31.645745'),
(60, 'DSC08714-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:29:44.237040'),
(61, 'DSC08734-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:03.021855'),
(62, 'DSC08763-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:12.041612'),
(63, 'IMGL0147-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:53.214359'),
(64, 'IMGL0475-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:45.279888'),
(65, 'IMGL0419-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:37.942169'),
(66, 'IMGL0409-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:30.545984'),
(67, 'IMGL0398-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:24.917817'),
(68, 'IMGL0326f-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:19.247990'),
(69, 'IMGL0154-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:13.845524'),
(70, 'IMGL0554-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:08.072795'),
(71, 'IMGL9898-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:31:03.329008'),
(72, 'IMGL9987-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:55.952633'),
(73, 'DSC08564-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:49.367297'),
(74, 'DSC08591-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:42.397113'),
(75, 'DSC08606-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:36.218911'),
(76, 'DSC08619-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:28.168036'),
(77, 'DSC08655-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:30:20.024315'),
(78, 'DSC08670-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:29:10.399655'),
(79, 'DSC08679-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:29:01.612498'),
(80, 'DSC08681-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:55.220973'),
(81, 'DSC08772-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:49.775819'),
(82, 'DSC08773-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:43.696542'),
(83, 'IMGL0035-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:35.931181'),
(84, 'IMGL0055-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:28.700147'),
(85, 'IMGL0072-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:28:18.554984'),
(86, 'IMGL0121-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:25:13.718476'),
(87, 'IMGL0124-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:25:29.713856'),
(88, 'IMGL0143-min.jpg', 'The Muslim World Women Summit', 'soft_lunch', '2024', '2024-07-02 04:25:42.939940'),
(89, 'BANNER-01.webp', 'Cover Photo', 'cover', 'cover', '2024-07-31 04:23:57.292227'),
(90, 'BANNER-02.webp', 'Cover Photo', 'cover', 'cover', '2024-07-31 04:24:09.434242'),
(91, 'BANNER-03.webp', 'Cover Photo', 'cover', 'cover', '2024-07-31 04:24:19.268499'),
(92, '5-12-07-2024.jpg', 'COVER PHOTO', 'cover', 'cover', '2024-07-12 07:30:45.373176'),
(93, '4-12-07-2024.jpg', 'COVERPHOTO', 'cover', 'cover', '2024-07-12 07:31:07.508618');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitor`
--

CREATE TABLE `exhibitor` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_code` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `interested_booking` varchar(255) NOT NULL,
  `primary_objective` varchar(255) NOT NULL,
  `objective_other` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cluster` varchar(100) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `interested_field` varchar(100) NOT NULL,
  `other` varchar(255) NOT NULL,
  `event_number` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exhibitor`
--

INSERT INTO `exhibitor` (`id`, `title`, `name`, `designation`, `email`, `mobile_code`, `mobile_number`, `interested_booking`, `primary_objective`, `objective_other`, `company`, `registration`, `profile`, `industry`, `status`, `cluster`, `address1`, `address2`, `city`, `postcode`, `state`, `country`, `country_code`, `company_phone`, `interested_field`, `other`, `event_number`, `date`) VALUES
(1, 'JP', 'qtmcHlFKUi', 'OpuSrZtJKlbfVaX', 'hahnidetf679@gmail.com', '967', '7575755841', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'QvdGcVrtT', 'CojSLqtVUPeRcix', 'solVWpiCThjvJkP', 'oGziBXdbC', 'eBMFsjucz', 'PHFLVgbORBlz', 'OhGzInJCBvTgVm', 'FAOTsvwVIhJqrNia', 'xmWujrOL', 'YtRLgDIf', 'DcOvzmyheUWSu', 'dSrpFzxqaGVDY', 'PDpBAUKflt', '967', '8571792692', 'Beauty & Wellness', 'HXRNfyWbr', '10MWBIZ', '2024-07-26 03:53:15'),
(2, 'JP', 'AHDqaMCnFVBEKk', 'StyfYFwmx', 'singletaryspamuelle1991@yahoo.com', '967', '9032347207', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'YWMZfOQGh', 'XcCDzFZJWvsIqfS', 'aPDNJhrCx', 'PNSCMiFyUeJ', 'raOGvZtTeEIsL', 'ZWUXtwlTHGBJFv', 'ZygdtkNx', 'OwSKXWIlmYGajBn', 'AYwdPghQnBvpOojJ', 'DEsURwhH', 'ZWFPfwYKD', 'XVozTQYNnlgG', 'lchUEIGYW', '967', '4690922185', 'Beauty & Wellness', 'iHUXYKnWx', '10MWBIZ', '2024-07-28 15:15:58'),
(3, 'JP', 'LxeAHlTFaIJ', 'JAkYxzLOn', 'rogerstammy9871@yahoo.com', '967', '9203615198', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'znRhGelm', 'dYNHLbrJxi', 'kOsDYVNJW', 'DEGTNPer', 'WpvJsBKmi', 'AIpoeTiUQBfZC', 'RdlPAtVHysG', 'fIQpCaRibAEd', 'vwmQVUhLGXni', 'GXVxgqlioh', 'kOSEDAloufp', 'aLlqoUJgr', 'oHbdrkZMcyWlax', '967', '9774868046', 'Beauty & Wellness', 'gZMpEKiPNvDyrVh', '10MWBIZ', '2024-08-03 03:55:09'),
(4, 'JP', 'CASuURJaI', 'smBQCpyrM', 'felixpeck8478@yahoo.com', '967', '6998055967', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'rzaYlOehgFftuH', 'rGTezBdlFbIMPo', 'ojervRnNEtkq', 'aKYFQyPvr', 'vaRdlGeAbjBSKgz', 'TroUJGxPWdu', 'HMIsfYiRZCaw', 'OQhHUquYdI', 'HrcDvVQWOsgtXBb', 'ZRqPmkhC', 'VSdecwkonmBugy', 'RsqjngCAtawIMH', 'NXAfmywclVQhGdEu', '967', '7086391924', 'Beauty & Wellness', 'YZAFpxTyk', '10MWBIZ', '2024-08-26 22:49:59'),
(5, 'JP', 'YcwbQmTESuNZ', 'tyfobeVU', 'caparasomike1986@yahoo.com', '967', '7433824428', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'xVpCGocTWHmFuIN', 'KatEVNwGXpqBF', 'LZcxlaytMunioFz', 'OdxNIUsQeLrT', 'PCkbpclmVrtw', 'VdBERmnWfQjSc', 'XUadcEuz', 'jPFBcLIVGWkeQEg', 'YJgWAEky', 'pqsawTEiVrholQe', 'RSfsuMqPZ', 'dfpeqXzFWsY', 'AQWRmuewvZ', '967', '9490842279', 'Beauty & Wellness', 'SUohWtROFiJXQeKG', '10MWBIZ', '2024-08-29 21:32:41'),
(6, 'JP', 'DnXrecHwgdimZsS', 'QFbrBDqMXlsKj', 'donald69barannlr@outlook.com', '967', '8683674594', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'xbTIFLgeiRMtoOj', 'JxkceirQUfnEhoN', 'MIAfqYHrnmhl', 'wFjCVESeM', 'utjSraDNcC', 'uRhLDHxbrmAZJN', 'CoOgKSrqZmlWzD', 'mengINzDxqsCfyc', 'AHIkYTpQUCSWfJ', 'YvKcSZoXAhGrI', 'gKQSymenBDMpxwoc', 'JiztRaHqOvIEux', 'iqjCoxMRkeaBs', '967', '9019885588', 'Beauty & Wellness', 'kwtbQcRiTgH', '10MWBIZ', '2024-09-07 19:13:55'),
(7, 'JP', 'JIekmqpjEVvB', 'lqFSUduKOb', 'pogikabataeka@yahoo.com', '967', '3311198860', 'BARE SPACE', 'PARTNER WITH AGENTS/DISTRIBUTORS  ', 'EdnrXbkG', 'AsnPdfbpyNGCz', 'ChJftkoGSwD', 'mSDRrgetQpWOajIv', 'BaGNOVXg', 'eCUzHEbtpqQP', 'pMOwGPjhIX', 'pvbVyFnWBaSdi', 'KqkPuNZmwCO', 'XJEKAHudg', 'XKLzujnSgUH', 'dYaGtnHL', 'tVaTEHAU', '967', '5687235555', 'Beauty & Wellness', 'elxTGhdUj', '10MWBIZ', '2024-09-16 01:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `media_partner`
--

CREATE TABLE `media_partner` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `media_type` varchar(100) NOT NULL,
  `readership` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `event_number` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `id` int(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `filename`, `name`, `title`, `category`, `year`, `date`) VALUES
(1, 'Faridahaziz.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>YBHG Tan Sri Rafidah Aziz</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\">Senior Independent Non-executive Chairman AirAsia X Berhad, Malaysia</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:43:36.614429'),
(2, 'eraslan.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Sibel Eraslan</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\">Journalist &amp; Writer, Republic of Turke</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:45:46.366244'),
(3, 'Bothaina Hassan.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Dr. Bothaina Hassan Al-Ansari</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\">Chairman Advisor, Just Real Estate, Qatar</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:49:18.661649'),
(4, 'moghimi.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Seyedeh Fatemah Moghimi</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\">Managing Director of Sadid Bar International Transportation Co. Iran</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:51:38.330110'),
(5, 'Nurhaliza Tarudin.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong><span style=\"font-size:20px\">YBHG Dato&rsquo; Sri Siti Nurhaliza Tarudin</span></strong></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#333333\">President of Simplysiti Sdn. Bhd., Malaysia</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:54:24.272211'),
(6, 'Allahverdiyeva.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:20px\"><strong>Dr. Lala Allahverdiyeva Ismayil</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\"><span style=\"font-size:16px\">Medical Scientist And Academician, Azerbaijan</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:56:41.392647'),
(8, 'Saideh Ghods.png', '<div style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Saideh Ghods</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#333333\">Founder, Mahak, Humanitarian And Philanthropist, Iran</span></span></span></div>', 'Rania', '2017', '2023-01-18 03:58:42.297686'),
(9, 'dryunusn.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Professor Dr. Muhammad Yunus</strong></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\">Founder &amp; Chairman of Yunus Centre, Bangladesh</span></span></div>', 'Jewels', '2017', '2023-01-09 06:49:24.924579'),
(10, 'muftimank2017.jpg', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong><span style=\"color:#000000\">Dr. Mufti Ismail Musa Menk</span></strong></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#111111\">Grand Mufti of Zimbabwe</span></span></span></div>', 'Jewels', '2017', '2023-01-09 06:50:43.119633'),
(11, 'hassane.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><strong><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Dr. El Hassane Hzaine</span></span></strong></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#111111\">Director General, Islamic Centre for Development of Trade (ICDT), Morocco</span></span></span></div>', 'Jewels', '2017', '2023-01-12 08:15:48.159976'),
(12, 'princesaudi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:20px\"><strong>Alwaleed Bin Talal Alsaud</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\">Royal Highness Prince , Founder &amp; Chairman Kingdom Holdings, Kingdom of Saudi Arabia</span></span></div>', 'Jewels', '2017', '2023-01-12 08:25:18.335027'),
(13, 'lubnaqasimi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Sheikha Lubna Bint Khalid Al Qasimi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#111111\">Minister of State for Tolerance &amp; President, Zayed University, U.A.E</span></span></span></div>', 'Jewels', '2017', '2023-01-09 07:04:19.451874'),
(14, 'mahdiyousefi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:20px\"><strong>Mahdi Yousefi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Managing Director, Pars Special Economic Energy Zone (PSEEZ) Organization, Iran</span></span></div>', 'Jewels', '2017', '2023-01-12 08:30:26.799383'),
(15, 'saidbinoman.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Said Bin Saleh Al Kiyumi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#111111\">Chairman of Oman Chamber of Commerce And Industry, Sultane of Oman</span></span></span></div>', 'Jewels', '2017', '2023-01-09 07:59:18.862394'),
(16, 'rezadayni.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong>Mohammad Reza Dayani</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#111111\">President/CEO of Entekhab Investment Development Group, Iran</span></span></span></div>', 'Jewels', '2017', '2023-01-09 08:02:31.884479'),
(17, 'abubacker.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Aboobacker Ahmed</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\">Founder , Jamia Markazu Ssaquafathi Ssunniyya &amp; General Secretary, All India Muslim Scholars Association, India</span></span></span></div>', 'Jewels', '2017', '2023-01-12 08:17:05.015711'),
(18, 'Untitled-1-19.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong><span style=\"color:#000000\"> Zulfiquar Ghadiyali</span></strong></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO, The Royal Officer of Sheikh Tahnoon Bin Saeed Bin Tahnoon Al &ndash; Nahyan, UAE</span></span></div>', 'Jewels', '2017', '2023-01-12 08:29:46.587532'),
(19, 'MORTEZAAKBARI2017.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Dr. Morteza Akbari</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\">Chief Executive Officer, Qarz Al Hasaneh Mehr Iran Bank, Iran</span></span></span></div>', 'Jewels', '2017', '2023-01-09 08:11:47.609136'),
(20, 'abdelaziz2017.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Abdelaziz Abughoush</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\">Ambassador of Palestine Embassy in Kuala Lumpur, Former Director of Coordination With Palestine Between The P.A.S.G&nbsp;of OIC</span></span></span></div>', 'Jewels', '2017', '2023-01-09 08:20:57.596186'),
(21, 'mustafaaydin.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong>Dr. Mustafa Aydin</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\"><span style=\"color:#000000\">President of The Board of Trustees, Istanbul Aydin University &amp; Chairman of Board, Bill Holdings, Turkey</span></span></span></div>', 'Jewels', '2017', '2023-01-12 08:27:01.216055'),
(22, 'aliallmadani.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong>Dr. Ahmad Mohamed Ali Al Madani</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\">President Islamic Development Bank (ISDB), Kingdom Of Saudi Arabia</span></span></span></div>', 'Jewels', '2017', '2023-01-09 08:25:28.808635'),
(23, 'rashidalleem.png', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:20px\"><span style=\"color:#000000\"><strong>Dr. Rashid Al Leem</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Director General Sharjah Free Zones Authorities, United Arab Emirates</span></span></div>', 'Jewels', '2017', '2023-01-09 08:27:18.324967'),
(24, 'mdali.png', '<div style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#000000\"><strong>Muhammad Al</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Legendary Boxer, United States of America</span></span></div>', 'Jewels', '2017', '2023-01-09 08:29:13.635236'),
(25, 'Garibaldi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Garibaldi Thohir</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">President Director PT Adaro Energy TBK, Indonesia</span></span></div>', 'Jewels', '2017', '2023-01-10 05:22:40.121376'),
(26, 'Rahmatgobel.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Rahmat Gobel</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">President Director PT Gobel International, Indonesia</span></span></div>', 'Jewels', '2017', '2023-01-10 05:27:07.486359'),
(27, 'Nadhmiauchi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Nadhmi Auchi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Founder, Chairman &amp; CEO General Mediterranean Holding S.A - Luxembourg</span></span></div>', 'Jewels', '2017', '2023-01-10 05:35:02.481859'),
(28, 'ekmeleddin.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Prof. Ekmeleddin Ihsanoglu</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Secretary General of Organization Islamic Cooperation, Saudi Arabia</span></span></span></div>', 'Jewels', '2017', '2023-01-10 05:40:06.503832'),
(29, 'arrahman.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>A.R. Rahman</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Music Director &amp; Composer, India</span></span></div>', 'Jewels', '2017', '2023-01-10 05:43:38.743716'),
(30, 'Asadollah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Asadollah Asgar - Oladi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">President of Hassad Export Co. Ltd, Iran</span></span></div>', 'Jewels', '2017', '2023-01-10 05:49:45.165972'),
(31, 'aymanasfari.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Ayman Asfari</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Group Chief Executive of Petrofac, United Kingdom</span></span></div>', 'Jewels', '2017', '2023-01-10 05:53:22.109813'),
(32, 'hassannaqi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Abdul Rahim Hassan Naqi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Secretary General of Federation of GCC Chambers (FGCCC), Saudi Arabia</span></span></div>', 'Jewels', '2017', '2023-01-10 05:58:11.165757'),
(33, 'Ibrahimnehramli.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Haji Ibrahim Nehramli</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">President Avesta Concern, Azerbaijan</span></span></div>', 'Jewels', '2017', '2023-01-12 08:31:26.647899'),
(34, 'YounesZhaeleh.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Younes Zhaeleh Sadabad</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Shirin Asal Food Industrial Group Company, Iran</span></span></div>', 'Jewels', '2017', '2023-01-12 08:31:38.264888'),
(35, 'MrGholamaliSoleimani.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Gholamali Soleimani</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Founder, Solico Group, Iran</span></span></div>', 'Jewels', '2017', '2023-01-12 08:31:52.876089'),
(36, 'samiyusuf.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Sami Yusuf</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Musician, Singer, Songwriter, Composer And Producer, United Kingdom</span></span></div>', 'Jewels', '2017', '2023-01-12 08:32:05.613634'),
(37, 'fawzimohammed.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Fawzi Mohammed Abdulmohsin Al - Kharafi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairman, Mohammed Abdulmohsin Al-khara Holding Company, Kuwait</span></span></div>', 'Jewels', '2017', '2023-01-12 08:32:45.091637'),
(38, 'mariabashir.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Maria Bashir</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chief Prosecutor General of Herat Province, Afghanistan</span></span></div>', 'Jewels', '2017', '2023-01-12 08:33:04.834120'),
(39, 'amerbukvic.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Amer Bukvic</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chief Executive Office, Bosna Bank International (BBI), Bosnia And Herzegovina</span></span></div>', 'Jewels', '2017', '2023-01-12 08:33:22.937643'),
(40, 'Abdulla al awar.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Abdulla Mohammed Al Awar</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO, Dubai Islamic Economy Development Centre (DIEDC), UAE</span></span></div>', 'Jewels', '2017', '2023-01-12 08:33:39.554454'),
(41, 'Salehabdullah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Sheikh Saleh Abdullah Kamel</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairman &amp; Founder, Dallahal Baraka Group, Kingdom Of Saudi Arabia</span></span></div>', 'Jewels', '2017', '2023-01-10 06:45:52.065241'),
(42, 'Abdulsalimalmurshidi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Abdulsalam Al Murshidi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Executive President, State General Reserve Fund &amp; Chairman of Uzbekistan-Oman Capital LLC</span></span></div>', 'Jewels', '2017', '2023-01-12 08:37:41.530188'),
(43, 'Tazyeen zahra.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Dr. Tazyeen Zahra Abidi</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairperson &amp; Founder, Zain&rsquo;s International, India</span></span></div>', 'Rania', '2017', '2023-01-18 04:01:21.462262'),
(44, 'Salahalmulla.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Lulwa Saleh Al-Mulla</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairwoman of The Women&rsquo;s Cultural And Social Society, Kuwait</span></span></div>', 'Rania', '2017', '2023-01-12 06:16:04.122704'),
(45, 'hapsah.jpg', '<div style=\"text-align:center\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">YBHG.Tan Sri Dato&#39; Seri Prof. Emerita Dr. Sharifah Hapsah Shahabudin</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">President of The National Council of Women&#39;s Organisations</span></span></div>', 'Rania', '2017', '2023-01-18 04:12:25.009459'),
(46, 'Al-matroushi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Dr. Huda Al-Matroushi</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairwoman of Gasco Recreation Committee, UAE</span></span></div>', 'Rania', '2017', '2023-01-12 06:26:59.899272'),
(47, 'Hajarhashimah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">YBHG Dato&rsquo; Hajah Hashimah Binti Hashim</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Executive Director, KLCC Projeks Sdn. Bhd., Malaysia</span></span></div>', 'Rania', '2017', '2023-01-12 06:31:47.917687'),
(48, 'kamarudin.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">YBHG. Prof.dato&#39; Sri Dr. Zaleha Kamaruddin</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Rector of The IIUM, Malaysia&nbsp;</span></span></div>', 'Rania', '2017', '2023-01-18 04:14:13.260403'),
(49, 'shamsudin.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>YBHG.Datuk Mohaiyani Shamsudin</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairman Maybank Berhad Malaysia</span></span></div>', 'Rania', '2017', '2023-01-18 04:16:35.270983'),
(50, 'jamelah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">YBHG.Dato&#39; Jamelaha Bakar</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"font-size:16px\">Chairman A &amp; W And Director of Kub, Malaysia</span></span></div>', 'Rania', '2017', '2023-01-18 04:21:36.246046'),
(51, 'Hajjah Hanifah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>YB Dato&rsquo; Hajjah Hanifah H. Taib-Alsree</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Businesswoman &amp; Member Of Parliament, Malaysia</span></span></div>', 'Rania', '2017', '2023-01-12 06:47:09.323173'),
(52, 'Mona Al Mansouri.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Dr. Mona Al Mansouri</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">World-Renowned Courtier, UAE</span></span></div>', 'Rania', '2017', '2023-01-12 06:54:37.868100'),
(53, 'Sakinah Haji Sheikh.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Sakinah Haji Sheikh Osman</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Group Managing Director of Intissar Baraqah &amp; Gemba Sdn Bhd, Malaysia</span></span></div>', 'Rania', '2017', '2023-01-12 06:58:06.287772'),
(54, 'zainuddin.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>YBHG.Dato&#39; Hazimah Zainuddin</strong></span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Group Managing Director Hyrax Oil Sdn. Bhd. Malaysi</span></span></div>', 'Rania', '2017', '2023-01-18 04:24:42.488344'),
(55, 'jad20201202-ass-senegal-aissatatallsall-01.jpg', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">H.E. Madam Aisatta Tall Sall</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Minister of Justice, Republic of Senegal</span></span></span></div>', 'Rania', '2024', '2024-07-10 07:52:04.694885'),
(56, '2-mazlan.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Tan Sri Dato&rsquo; Seri Dr Mazlan Othman</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Senior Fellow, Academy of Sciences Malaysia And Emeritus Professor, Universiti Kebangsaan Malaysia</span></span></span></div>', 'Rania', '2024', '2024-06-28 06:53:27.465774'),
(57, '3-azlina.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">YB Dato&rsquo; Sri Azalina Othman&nbsp;&nbsp; &nbsp;</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Minister in the Prime Minister&rsquo;s Department (Law &amp; Institutional Reform), Malaysia</span></span></span></div>', 'Rania', '2024', '2024-06-28 06:52:49.824190'),
(58, '4-dr-bahia.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">H.E. Ambassador Dr Bahia Jawad Al-Jishi &nbsp;</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Member of The Supreme Council For Women, Kingdom of Bahrain</span></span></div>', 'Rania', '2024', '2024-07-10 07:53:48.654183'),
(59, '5-Dr arshi.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Dr Arshi Ayub Zaveri</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO, Trust With Trade Group, United Arab Emirates (UAE)</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:02:56.439842'),
(60, '6-Dr-zarinah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Tan Sri Zarinah Anwar</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Chairman, University of Malaya &amp; Institute of Corporate Directors, Malaysia</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:06:17.092738'),
(61, '7-mishille.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Madam Michelle Hah</span></span></span></div>', '<div><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Vice President, Federation of Malaysian Manufacturers (FMM), Malaysia</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:08:38.251862'),
(62, '8-Mariyam.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Dr Maryam Tajabadi Ebrahimi</span></span></span>&nbsp;&nbsp; &nbsp;</div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO, Takgene Co. Islamic Republic of Iran</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:10:39.624813'),
(63, '9-lockman.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Madam Elain Lockman</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO &amp; Co-founder, Ata Plus, Malaysia</span></span></div>', 'Rania', '2024', '2024-06-28 07:13:00.988191'),
(64, '11-sai-yean.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Madam Amy Chiew Sai Yean</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Founder &amp; Director, Nth Global Sdn Bhd, Malaysia</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:20:07.296334'),
(65, '12-hartini.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Datin Dr (H.C.) Hajah Hartini Binti Osman</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Group Managing Director, Prihatin Group of Companies, Malaysia</span></span></span></div>', 'Rania', '2024', '2024-07-10 07:54:51.548600'),
(66, '13-zenda.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Madam Zenda Ng&nbsp;</span></span></span>&nbsp; &nbsp;</div>', '<div style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">CEO, Palaterium Sdn Bhd, Malaysia</span></span></div>', 'Rania', '2024', '2024-06-28 07:24:41.745041'),
(67, '14-Fadilah.png', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:20px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Dr Fadilah Majid</span></span></span></div>', '<div style=\"text-align:center\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">VICE President, The Singapore Malay Chamber of Commerce &amp; Industry (SMCCI), Singapore</span></span></span></div>', 'Rania', '2024', '2024-06-28 07:27:59.897055');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `code`, `admin_email`) VALUES
(1, '15ebc1456bf072', 'saidurrahman.uia@gmail.com'),
(4, '164acfd310f1cb', 'salwa@muslimworldbiz.com'),
(5, '164acfd339148c', 'salwa@muslimworldbiz.com');

-- --------------------------------------------------------

--
-- Table structure for table `trade_buyer`
--

CREATE TABLE `trade_buyer` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_code` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `industry` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `cluster` varchar(100) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `company_phone` varchar(100) NOT NULL,
  `interested_field` varchar(100) NOT NULL,
  `other` varchar(255) NOT NULL,
  `event_number` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_registration`
--

CREATE TABLE `visitor_registration` (
  `id` int(10) NOT NULL,
  `visitor_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `industry_type` varchar(355) NOT NULL,
  `other` varchar(255) NOT NULL,
  `visited_before` varchar(255) NOT NULL,
  `event_number` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_registration`
--

INSERT INTO `visitor_registration` (`id`, `visitor_type`, `title`, `name`, `company`, `designation`, `email`, `address`, `country`, `mobile`, `telephone`, `industry_type`, `other`, `visited_before`, `event_number`, `date`) VALUES
(1, 'Trade Visitor', 'JP', 'hTZvjiPtbG', 'YFnbwTcEBkR', 'igIBZUeJcnjPHmfN', 'hahnidetf679@gmail.com', 'VJjmPItb', 'LfuXqogFbsGaQx', '6612743184', '9608244152', 'Beauty & Wellness', 'SjlAuFMxe', 'NO', '10MWBIZ', '2024-07-26 03:52:51'),
(2, 'Trade Visitor', 'JP', 'hzMEWvxmnpiXFGg', 'BnsztyaqbrM', 'MKesmnqaO', 'singletaryspamuelle1991@yahoo.com', 'JfWvolpkFQm', 'joTSwftBUIesyHhN', '8677155503', '3758604872', 'Beauty & Wellness', 'hDGjvoPQLkJdXpR', 'NO', '10MWBIZ', '2024-07-28 15:15:44'),
(3, 'Trade Visitor', 'JP', 'DyIZqOgvcWLE', 'GFkpXqYCP', 'vMqOEFQUXCDB', 'bailey.john1995@yahoo.com', 'IZLpOvXftmjRYHSq', 'xaUspJkKo', '7240544209', '3100578955', 'Beauty & Wellness', 'hgsTPvOx', 'NO', '10MWBIZ', '2024-07-31 06:17:43'),
(4, 'Visitor', 'Mrs', 'HATIHANNA SELAMAT', '7HEAVENS SDN BHD', 'Founder', 'hatihanna@gmail.com', 'Y-2-49B,  BLK G, JLN PLUMBUM Y 7/Y, SEK 7, 40000 SHAH ALAM, SELANGOR', 'MALAYSIA', '60142899038', '0173161229', 'FOOD AND BEVERAGES,Education,Beauty & Wellness', '', 'NO', '10MWBIZ', '2024-08-02 04:57:11'),
(5, 'Trade Visitor', 'JP', 'MvdxDAIehSqU', 'SETYvtcX', 'svLDJKoQ', 'rogerstammy9871@yahoo.com', 'janpeDyIdfxSVZ', 'dExKsZLXNAimp', '5233627620', '9912372400', 'Beauty & Wellness', 'BYZaKnECPtNLGSwW', 'NO', '10MWBIZ', '2024-08-03 03:54:30'),
(6, 'Visitor', 'Mrs', 'FARAZILA BINTI NODIN', 'UNIVERSITY TECHNICAL MALAYSIA MALACCA', 'RESEARCHER', 'faralan2028@gmail.com', 'NO 9258-N, TMN SERI SIANTAN,76100 DURIAN TUNGGAL MELAKA', 'Malaysia', '0136164987', ' ', 'Education', '', 'NO', '10MWBIZ', '2024-08-12 07:08:19'),
(7, 'Trade Visitor', 'Mr', 'Soon Aun', 'Chop Eng Kian Hin Sdn Bhd', 'Retail', 'phuansoonaun@gmail.com', '467, Jalan Tiga, Simee, 31400, Ipoh', 'Malaysia', '0165312644', '055452031', 'Trading ', '', 'NO', '10MWBIZ', '2024-08-26 12:08:36'),
(8, 'Trade Visitor', 'JP', 'SmIlZbhTRyF', 'TFxivgNZU', 'NotOnDUGLIaj', 'felixpeck8478@yahoo.com', 'iYczjXAydOr', 'SqAIhHPeL', '4935865490', '8476205329', 'Beauty & Wellness', 'bdFAPtInM', 'NO', '10MWBIZ', '2024-08-26 22:50:14'),
(9, 'Trade Visitor', 'JP', 'PLAeOxIzkDtnXuwg', 'LfxuqlSobietIA', 'WjugnVcFYNKdAv', 'caparasomike1986@yahoo.com', 'UEiLfKjaJRg', 'ZuNhFqYDad', '7613899176', '9539584995', 'Beauty & Wellness', 'yVMQEOwdRtWsr', 'NO', '10MWBIZ', '2024-08-29 21:32:47'),
(10, 'Trade Visitor', 'Mr', 'MG MOHIUDDIN', 'MGMS TRADERS', 'Director', 'info@mgmstraders.com', 'Bahadurpura Hyderabad', 'India', '+918309068862', ' ', 'Cosmetics,Trading ,FOOD AND BEVERAGES,Medical & Pharmaceutical,Agriculture,Beauty & Wellness', '', 'NO', '10MWBIZ', '2024-09-06 07:36:25'),
(11, 'Trade Visitor', 'JP', 'wtxbdcVCUr', 'MRsHZFTgIQyE', 'NMBmfjWL', 'donald69barannlr@outlook.com', 'deDPwQMBGnlLv', 'rpTFeZwhxSNny', '2072730094', '6643699639', 'Beauty & Wellness', 'XiSJPutzDUQb', 'NO', '10MWBIZ', '2024-09-07 19:14:12'),
(12, 'Trade Visitor', 'Mr', 'ABHEESHEK SINGH', 'SUN ARIES', 'BUSINESS DEVELOPER', 'abhee023@gmail.com', 'SAI CITY APARTMENT, NEAR MISSION SCHOOL, AURANGABAD, BIHAR', 'INDIA', '9631499970', ' ', 'Management and service,Trading ,FOOD AND BEVERAGES,TEXTILE,Information Technology,Insurance and Banking,Education,Tourism', '', 'NO', '10MWBIZ', '2024-09-09 07:02:00'),
(13, 'Trade Visitor', 'Mr', 'JITENDRA KUMAR SINGH', 'SUN ARIES', 'BUSINESS EXECUTIVE', 'raghav2459@gmail.com', 'SAI CITY APARTMENT, NEAR MISSION SCHOOL, AURANGABAD, BIHAR', 'INDIA', '9431084080', ' ', 'Management and service,FOOD AND BEVERAGES,TEXTILE,Medical & Pharmaceutical,Information Technology,Agriculture,Insurance and Banking,Tourism', '', 'NO', '10MWBIZ', '2024-09-09 07:04:55'),
(14, 'Trade Visitor', 'Mrs', 'SABITA RAGHAV SINGH', 'SUN ARIES', 'BUSINESS OWNER', 'sabita.singh005@gmail.com', 'SAI CITY APARTMENT, NEAR MISSION SCHOOL, AURANGABAD, BIHAR', 'INDIA', '7870482220', ' ', 'Cosmetics,Government agency ,FOOD AND BEVERAGES,Medical & Pharmaceutical,Agriculture,Education,Tourism,Beauty & Wellness', '', 'NO', '10MWBIZ', '2024-09-09 07:06:28'),
(15, 'Trade Visitor', 'Mrs', 'ABHA SINGH', 'SUN ARIES', 'LEGAL EXECUTIVE', 'abha.singh009@gmail.com', 'SAI CITY APARTMENT, NEAR MISSION SCHOOL, AURANGABAD, BIHAR', 'INDIA', '7701955108', ' ', 'Cosmetics,Management and service,Government agency ,FOOD AND BEVERAGES,TEXTILE,E-commerce,Insurance and Banking,Education,Tourism,Beauty & Wellness', 'Legal', 'NO', '10MWBIZ', '2024-09-09 07:09:40'),
(16, 'Visitor', 'Mr', 'Ahmad Sohail Aziz', 'I&#39;m still a student', 'Student', 'ahm.soh.ail638@gmail.com', 'NO 4C, JLN WAWASAN 2/8 BDR BARU AMPANG 68000 AMPANG SELANGOR', 'Afghanistan', '0145501624', ' ', 'Education', '', 'NO', '10MWBIZ', '2024-10-13 08:07:41'),
(17, 'Visitor', 'Mr', 'Mryongcheehoe', 'Monazenterprise', 'Supervisor', 'gmail-jun681380@gmail.com', 'No. 29, jalan23, tamandesajaya, kepong 52100kualalumpur, Malaysia.', 'Malaysia', '010-7145637', '0107145637', 'Information Technology', '', 'YES', '10MWBIZ', '2024-11-01 06:22:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`admin_email`);

--
-- Indexes for table `all_news`
--
ALTER TABLE `all_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businessmatching`
--
ALTER TABLE `businessmatching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_photo`
--
ALTER TABLE `cover_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitor`
--
ALTER TABLE `exhibitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_partner`
--
ALTER TABLE `media_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade_buyer`
--
ALTER TABLE `trade_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_registration`
--
ALTER TABLE `visitor_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `all_news`
--
ALTER TABLE `all_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `businessmatching`
--
ALTER TABLE `businessmatching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cover_photo`
--
ALTER TABLE `cover_photo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `exhibitor`
--
ALTER TABLE `exhibitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media_partner`
--
ALTER TABLE `media_partner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trade_buyer`
--
ALTER TABLE `trade_buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_registration`
--
ALTER TABLE `visitor_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
