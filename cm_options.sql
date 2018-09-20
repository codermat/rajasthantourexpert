-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 12:27 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajasthantourexpert`
--

-- --------------------------------------------------------

--
-- Table structure for table `cm_options`
--

CREATE TABLE IF NOT EXISTS `cm_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `option_name` varchar(100) NOT NULL,
  `option_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `cm_options`
--

INSERT INTO `cm_options` (`id`, `title`, `type`, `option_name`, `option_value`) VALUES
(1, 'Website Logo', 'image', 'cm_logo', ''),
(2, 'Website Meta Tag Title', 'text', 'meta_tag_title', 'Rajasthan Tour Experts is a famous name in India'),
(3, 'Website Meta Tag keywords', 'textarea', 'meta_tag_keywords', 'Rajasthan Tour Experts'),
(4, 'Website Meta Tag Descriptions', 'textarea', 'meta_tag_descriptions', 'Rajasthan Tour Experts'),
(5, 'Google Map Code', 'textarea', 'google_map_code', '<iframe src=\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.723427117973!2d75.77380811463617!3d26.912271283127815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db476c6f6bbef%3A0xc63910b28dadd108!2sRajasthan+Tour+Expert!5e0!3m2!1sen!2sin!4v1537428344025\\" width=\\"600\\" height=\\"450\\" frameborder=\\"0\\" style=\\"border:0\\" allowfullscreen></iframe>'),
(6, 'Address', 'textarea', 'address', '2, Near Loco, Yaadon ka Chowk, Hasanpura (A), Khatipura Road, Jaipur 302006 (Rajasthan) '),
(7, 'Contact No', 'text', 'contact_no', '+91- 8824101046'),
(8, 'Admin Email', 'text', 'admin_email', 'support@rajasthantourexpert.com'),
(9, 'Footer Copyright Text', 'textarea', 'footer_copyright_text', '© 2018 Rajastahn Tour Experts All Rights Reserved'),
(33, 'Footer Logo', 'image', 'footer_logo', ''),
(34, 'Footer Payment Image', 'image', 'footer_payment_image', ''),
(35, 'Social Media Links', 'social_media', 'social_media', 'a:9:{s:8:"Facebook";s:24:"http://www.facebook.com/";s:7:"Twitter";s:2:"tw";s:12:"Pin Interest";s:3:"pin";s:8:"LinkedIn";s:4:"link";s:11:"Google Plus";s:0:"";s:7:"Tumbler";s:0:"";s:9:"Instagram";s:5:"insta";s:7:"Youtube";s:24:"https://www.youtube.com/";s:8:"RSS Feed";s:0:"";}'),
(36, 'Max No of Slider Images', 'text', 'max_slider_image', '5'),
(37, 'Slider Images', 'slider_images', 'slider_images', 'a:2:{s:5:"image";a:5:{i:0;s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534732388_slide01.jpg";i:1;s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534732398_slide02.jpg";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}s:4:"link";a:5:{i:0;s:37:"Rajasthan <br> a culture of tradition";i:1;s:30:"Jaipur <br> it is an epic door";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}}'),
(38, 'Home Page First Image Ad', 'imageads', 'home_image_ad_1', 'a:2:{s:5:"image";s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534823036_banner2.jpg";s:4:"link";s:0:"";}'),
(39, 'Home Page Second Image Ad', 'imageads', 'home_image_ad_2', 'a:2:{s:5:"image";s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534821783_banner1.jpg";s:4:"link";s:46:"http://localhost/rajasthantourexpert/cm-admin/";}'),
(40, 'Sidebar Ad 1', 'imageads', 'sidebar_image_ad_1', 'a:2:{s:5:"image";s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534823036_banner2.jpg";s:4:"link";s:46:"http://localhost/rajasthantourexpert/cm-admin/";}'),
(41, 'Sidebar Ad 2', 'imageads', 'sidebar_image_ad_2', 'a:2:{s:5:"image";s:73:"http://localhost/rajasthantourexpert/uploads/08-18/1534821783_banner1.jpg";s:4:"link";s:46:"http://localhost/rajasthantourexpert/cm-admin/";}'),
(42, 'Trip Advisor Code', 'textarea', 'sidebar_trip_advisor_code', '<div id=\\"TA_selfserveprop380\\" class=\\"TA_selfserveprop\\">\r\n<ul id=\\"rmF8in8wYi\\" class=\\"TA_links Q6gibnUTu\\">\r\n<li id=\\"9ke81lGN\\" class=\\"96mczPBnA\\">\r\n<a target=\\"_blank\\" href=\\"https://www.tripadvisor.com/\\"><img src=\\"https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png\\" alt=\\"TripAdvisor\\"/></a>\r\n</li>\r\n</ul>\r\n</div>\r\n<script async src=\\"https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=380&amp;locationId=7374063&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2\\"></script>'),
(43, 'Home welcome page id', 'text', 'welcome_page_id', '5'),
(44, 'Home about india page id', 'text', 'about_inda_page_id', '2'),
(45, 'About India Page Image', 'image', 'about_india_image', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
