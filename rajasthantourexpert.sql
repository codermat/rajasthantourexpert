-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 12:30 PM
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
-- Table structure for table `cm_destinations`
--

CREATE TABLE IF NOT EXISTS `cm_destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `seo_url` varchar(500) NOT NULL,
  `meta_tag_keywords` varchar(500) NOT NULL,
  `meta_tag_descriptions` varchar(500) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `desc` text NOT NULL,
  `featured_image` varchar(500) NOT NULL,
  `other_images` text NOT NULL,
  `sortorder` int(11) NOT NULL,
  `is_featured` enum('t','f') NOT NULL DEFAULT 'f',
  `in_footer` enum('t','f') NOT NULL DEFAULT 'f',
  `status` enum('t','f') NOT NULL DEFAULT 't',
  `dateadded` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cm_destinations`
--

INSERT INTO `cm_destinations` (`id`, `title`, `seo_url`, `meta_tag_keywords`, `meta_tag_descriptions`, `short_desc`, `desc`, `featured_image`, `other_images`, `sortorder`, `is_featured`, `in_footer`, `status`, `dateadded`) VALUES
(1, 'Jaipur 1', 'jaipur-1', 'Jaipur keywords 2', 'Jaipur tag desc 3', '<p>Jaipur, popularly known as the &quot;Pink City&quot;, and &quot;Paris of India&quot;, is the capital of Rajasthan state.</p>\r\n<p>&nbsp;</p>', '<p>&nbsp;Hello from desc</p>', 'http://localhost/rajasthantourexpert/uploads/08-18/1535184900_destination1.jpg', 'a:10:{i:0;s:75:"http://localhost/rajasthantourexpert/uploads/08-18/1535185177_gallery01.jpg";i:1;s:75:"http://localhost/rajasthantourexpert/uploads/08-18/1535185182_gallery02.jpg";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";}', 0, 't', 't', 't', 1535185191);

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

-- --------------------------------------------------------

--
-- Table structure for table `cm_pages`
--

CREATE TABLE IF NOT EXISTS `cm_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `pagetype` varchar(100) NOT NULL,
  `seo_url` varchar(500) NOT NULL,
  `meta_tag_keywords` text NOT NULL,
  `meta_tag_descriptions` text NOT NULL,
  `featured_image` varchar(500) NOT NULL,
  `short_desc` text NOT NULL,
  `desc` text NOT NULL,
  `status` enum('t','f') NOT NULL DEFAULT 'f',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cm_pages`
--

INSERT INTO `cm_pages` (`id`, `title`, `pagetype`, `seo_url`, `meta_tag_keywords`, `meta_tag_descriptions`, `featured_image`, `short_desc`, `desc`, `status`) VALUES
(1, 'About Us', 'left-sidebar', 'about-us', 'About Us', 'About Us', 'http://localhost/rajasthantourexpert/uploads/08-18/1533717686_header1.jpg', '<p>Govinda aala re aala</p>', '<p>&nbsp;desc</p>', 't'),
(2, 'Terms & Conditions', 'full-width', 'terms-amp-conditions', 'Terms & Conditions', 'Terms & Conditions', '', '<p>&nbsp;sdfsd</p>', '<h1><strong>Introduction</strong></h1>\r\n<p>These Website Standard Terms  and Conditions determine and manage your use of this website. These  Terms will be fully applied and affectively restricted to your use of  this Website. By using this Website, you agreed to accept all terms and  conditions written below. You must not use this Website if you disagree  with any of these Website Standard Terms and Conditions.</p>\r\n<p><em>This  site is designed as a commercial platform; any illegal contents or  products will be deleted immediately&nbsp;and&nbsp;without notification.</em></p>\r\n<p><em>Any content which carry any racism or discriminations will be deleted immediately&nbsp;and&nbsp;without notification.</em></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Intellectual Property Rights</strong></h3>\r\n<p>Other  than the content you own, under these Terms, Impexly.com and/or  its licensors own all the intellectual property rights and materials  contained in this Website.</p>\r\n<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>\r\n<h3><strong>Restrictions</strong></h3>\r\n<p>You are specifically restricted from all of the following:</p>\r\n<ul>\r\n    <li>\r\n    <p>Publishing any Website material in any other media;</p>\r\n    </li>\r\n    <li>\r\n    <p>Selling, sublicensing and/or otherwise commercializing any Website material;</p>\r\n    </li>\r\n    <li>\r\n    <p>Publicly performing and/or showing any Website material;</p>\r\n    </li>\r\n    <li>\r\n    <p>Using this Website in any way that is or may be damaging to this Website;</p>\r\n    </li>\r\n    <li>\r\n    <p>Using this Website in any way that impacts user access to this Website;</p>\r\n    </li>\r\n    <li>\r\n    <p>Using  this Website contrary to applicable laws and regulations, or in any way  may cause harm to the Website, or to any person or business entity;</p>\r\n    </li>\r\n    <li>\r\n    <p>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</p>\r\n    </li>\r\n    <li>\r\n    <p>Using this Website to engage in any advertising or marketing unless its agreed or part of your business.</p>\r\n    </li>\r\n</ul>\r\n<p>Certain  areas of this Website are restricted from being access by you and Impexly.com may further restrict access by you to any areas of this  Website, at any time, in absolute discretion. Any user ID and password  you may have for this Website are confidential and you must maintain  confidentiality as well.</p>\r\n<h3><strong>The Content</strong></h3>\r\n<p>In  these Website Standard Terms and Conditions, &ldquo;Your Content&rdquo; shall mean  any audio, video text, images or other material you choose to display on  this Website. By displaying Your Content, you grant the impexly.com  a non-exclusive, worldwide irrevocable, sub licensable license to use,  reproduce, adapt, publish, translate and distribute it in any and all  media.</p>\r\n<p>Your Content must be your own and must not be invading  any third-party&rsquo;s rights. Impexly.com reserves the right to  remove any of Your Content from this Website at any time without notice.</p>\r\n<h3><strong>Sales &amp; Payments </strong></h3>\r\n<p>You must understand that Impexly.com is not charging any fee or commission for providing an online platform, other than agreed annual fee. Also impexly.com is not involved or take any responsibility of Buyer\\''s payment to Supplier\\''s or Supplier\\''s product quality or any other issue between buyer and supplier. Its 100% buyers and suppliers responsibility to make sure that they are choosing right buyer or supplier to make deal.</p>\r\n<h3><strong>No warranties</strong></h3>\r\n<p>This  Website is provided &ldquo;as is,&rdquo; with all faults, and Impexly.com  express no representations or warranties, of any kind related to this  Website or the materials contained on this Website. Also, nothing  contained on this Website shall be interpreted as advising you.</p>\r\n<h3><strong>Limitation of liability</strong></h3>\r\n<p>In  no event shall Impexly.com, nor any of its officers, directors  and employees, shall be held liable for anything arising out of or in  any way connected with your use of this Website&nbsp;whether such liability  is under contract. &nbsp;The Impexly.com, including its officers,  directors and employees shall not be held liable for any indirect,  consequential or special liability arising out of or in any way related  to your use of this Website.</p>\r\n<h3><strong>Indemnification</strong></h3>\r\n<p>You  hereby indemnify to the fullest extent Impexly.com from and  against any and/or all liabilities, costs, demands, causes of action,  damages and expenses arising in any way related to your breach of any of  the provisions of these Terms.</p>\r\n<h3><strong>Severability</strong></h3>\r\n<p>If  any provision of these Terms is found to be invalid under any  applicable law, such provisions shall be deleted without affecting the  remaining provisions herein.</p>\r\n<h3><strong>Variation of Terms</strong></h3>\r\n<p>Impexly.com is permitted to revise these Terms at any time as it  sees fit, and by using this Website you are expected to review these  Terms on a regular basis.</p>\r\n<h3><strong>Assignment</strong></h3>\r\n<p>Impexly.com is allowed to assign, transfer, and subcontract its  rights and/or obligations under these Terms without any notification.  However, you are not allowed to assign, transfer, or subcontract any of  your rights and/or obligations under these Terms.</p>\r\n<h3><strong>Entire Agreement</strong></h3>\r\n<p>These  Terms constitute the entire agreement between Impexly.come and  you in relation to your use of this Website, and supersede all prior  agreements and understandings.</p>\r\n<h3><strong>Goveing&nbsp;Law &amp; Jurisdiction</strong></h3>\r\n<p>These  Terms will be goveed by and interpreted in accordance with the laws of United Kingdom, and you submit to the non-exclusive jurisdiction of the state  and federal courts located in United Kingdom for the resolution of any disputes.</p>\r\n<p>&nbsp;</p>\r\n<p><em>This Site is designed as a commercial platform, any illegal product or service will be deleted immediately without notification.</em></p>\r\n<p>&nbsp;</p>', 't'),
(3, 'FAQ', 'faq', 'faq', 'FAQ', 'FAQ', '', '', '', 't'),
(4, 'Contact Us', 'contact-us', 'contact-us', 'Contact Us', 'Contact Us', '', '', '', 't'),
(5, 'WELCOME TO RAJASTHAN TOUR EXPERTS', 'left-sidebar', 'welcome-to-rajasthan-tour-experts', 'WELCOME TO RAJASTHAN TOUR EXPERTS', 'WELCOME TO RAJASTHAN TOUR EXPERTS', 'http://localhost/rajasthantourexpert/uploads/09-18/1537433035_header3.jpg', '<p>&nbsp;<span style=\\"\\\\&quot;\\\\\\\\&quot;color:\\\\&quot;\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</span></p>\r\n<p style=\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\">From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.</p>\r\n<p style=\\"\\\\&quot;\\\\\\\\&quot;box-sizing:\\\\&quot;\\">Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>', '<p class=\\"title\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>\r\n<p>From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.  Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>\r\n<p class=\\"title\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>\r\n<p>From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.  Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>\r\n<p class=\\"title\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>\r\n<p>From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.  Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>\r\n<p class=\\"title\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>\r\n<p>From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.  Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>', 't');

-- --------------------------------------------------------

--
-- Table structure for table `cm_services`
--

CREATE TABLE IF NOT EXISTS `cm_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_desc` text NOT NULL,
  `read_more_link` varchar(500) NOT NULL,
  `status` enum('t','f') NOT NULL DEFAULT 't',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cm_services`
--

INSERT INTO `cm_services` (`id`, `title`, `service_icon`, `service_desc`, `read_more_link`, `status`) VALUES
(2, 'Hotel Booking', 'fa-user', 'A great selection and professional service at reasonable prices.', 'https://github.com/FortAwesome/Font-Awesome/wiki/Font-Awesome-HTML-Dropdown-Select-List', 't');

-- --------------------------------------------------------

--
-- Table structure for table `cm_testimonials`
--

CREATE TABLE IF NOT EXISTS `cm_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(500) NOT NULL,
  `testimonials_desc` text NOT NULL,
  `is_featured` enum('t','f') NOT NULL DEFAULT 'f',
  `status` enum('t','f') NOT NULL DEFAULT 't',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cm_testimonials`
--

INSERT INTO `cm_testimonials` (`id`, `author`, `testimonials_desc`, `is_featured`, `status`) VALUES
(1, 'Scott | Houston, TX', 'Curabitur elementum, diam ut rhoncus venenatis, erat nulla dictum odio, id laoreet lacus sapien in ex. Etiam pellentesque sollicitudin nibh vel accumsan. Sed tempus eget tortor eget vehicula. Praesent gravida, diam sit amet venenatis vestibulum, diam odio elementum ex, sed feugiat nisl eros dapibus dolor. Quisque efficitur dui ipsum, nec tempus augue luctus nec', 'f', 't'),
(2, 'Martin | Houston, TX', 'Nunc rutrum ullamcorper nunc et tincidunt. Mauris leo augue, rhoncus vel suscipit quis, dictum sed risus. Ut ultrices risus ut mauris vehicula feugiat vehicula id mauris. Vestibulum commodo risus tempor massa finibus sodales. Morbi nec dolor in magna mollis congue.', 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `cm_tours`
--

CREATE TABLE IF NOT EXISTS `cm_tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tourpackageid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `seo_url` varchar(500) NOT NULL,
  `meta_tag_keywords` varchar(500) NOT NULL,
  `meta_tag_descriptions` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `destination` varchar(500) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `desc` text NOT NULL,
  `tour_map` text NOT NULL,
  `featured_image` varchar(500) NOT NULL,
  `other_images` text NOT NULL,
  `sortorder` int(11) NOT NULL,
  `is_parent` enum('t','f') NOT NULL DEFAULT 'f',
  `status` enum('t','f') NOT NULL DEFAULT 't',
  `dateadded` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cm_tours`
--

INSERT INTO `cm_tours` (`id`, `tourpackageid`, `title`, `seo_url`, `meta_tag_keywords`, `meta_tag_descriptions`, `duration`, `destination`, `short_desc`, `desc`, `tour_map`, `featured_image`, `other_images`, `sortorder`, `is_parent`, `status`, `dateadded`) VALUES
(1, 1, 'Rajasthan Tour', 'rajasthan-tour', 'meta tag', 'tag desc', '6 Night & 7 Days', 'Jaipur -> Jodhpur -> Bikaner', '<p class=\\"title\\" style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif;\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>\r\n<p style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 16px;\\">From sightseeing and private day tours for Jaipur and', '<p>&nbsp;<span style=\\"color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold;\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</span></p>\r\n<p style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 16px;\\">From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.</p>\r\n<p style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 16px;\\">Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>', '', 'http://localhost/rajasthantourexpert/uploads/08-18/1533712884_delhi.jpg', 'a:10:{i:0;s:77:"http://localhost/rajasthantourexpert/uploads/08-18/1533712938_chittorghar.jpg";i:1;s:78:"http://localhost/rajasthantourexpert/uploads/08-18/1533712941_destination5.jpg";i:2;s:78:"http://localhost/rajasthantourexpert/uploads/08-18/1533712945_destination6.jpg";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";}', 0, 'f', 't', 1533712949),
(2, 2, 'Rajasthan Tour', 'rajasthan-tour', 'meta tag', 'tag desc', '', '', '<p class=\\"\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;title\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;\\" style=\\"\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;box-sizing:\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</p>', '<p>&nbsp;<span style=\\"color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold;\\">Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.</span></p>\r\n<p style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 16px;\\">From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.</p>\r\n<p style=\\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(25, 21, 9); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 16px;\\">Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>', '<p><iframe src=\\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d492483.97256756667!2d73.7321241772587!3d15.347700332586278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfba106336b741%3A0xeaf887ff62f34092!2sGoa!5e0!3m2!1sen!2sin!4v1532082463158\\" width=\\"100%\\" height=\\"450\\" frameborder=\\"0\\" style=\\"border:0\\" allowfullscreen=\\"\\"></iframe></p>', 'http://localhost/rajasthantourexpert/uploads/08-18/1534962169_destination11.jpg', 'a:10:{i:0;s:77:"http://localhost/rajasthantourexpert/uploads/08-18/1533712938_chittorghar.jpg";i:1;s:78:"http://localhost/rajasthantourexpert/uploads/08-18/1533712941_destination5.jpg";i:2;s:78:"http://localhost/rajasthantourexpert/uploads/08-18/1533712945_destination6.jpg";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";}', 0, 'f', 't', 1533712995);

-- --------------------------------------------------------

--
-- Table structure for table `cm_tour_packages`
--

CREATE TABLE IF NOT EXISTS `cm_tour_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pcatid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `seo_url` varchar(500) NOT NULL,
  `meta_tag_keywords` varchar(500) NOT NULL,
  `meta_tag_descriptions` varchar(500) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `desc` text NOT NULL,
  `featured_image` varchar(500) NOT NULL,
  `sortorder` int(11) NOT NULL,
  `is_parent` enum('t','f') NOT NULL DEFAULT 'f',
  `in_footer` enum('t','f') NOT NULL DEFAULT 'f',
  `status` enum('t','f') NOT NULL DEFAULT 't',
  `dateadded` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cm_tour_packages`
--

INSERT INTO `cm_tour_packages` (`id`, `pcatid`, `title`, `seo_url`, `meta_tag_keywords`, `meta_tag_descriptions`, `short_desc`, `desc`, `featured_image`, `sortorder`, `is_parent`, `in_footer`, `status`, `dateadded`) VALUES
(1, 0, 'Rajasthan Tours 1', 'rajasthan-tours-1', 'Rajasthan Tours 1 Keyworkds', 'Rajasthan Tours 1 Keyworkds desc', '', '<p>&nbsp;<span style=\\"\\\\&quot;color:\\">Curabitur elementum, diam ut rhoncus venenatis, erat nulla dictum odio, id laoreet lacus sapien in ex. Etiam pellentesque sollicitudin nibh vel accumsan. Sed tempus eget tortor eget vehicula. Praesent gravida, diam sit amet venenatis vestibulum, diam odio elementum ex, sed feugiat nisl eros dapibus dolor.</span></p>\r\n<p style=\\"\\\\&quot;box-sizing:\\">Quisque efficitur dui ipsum, nec tempus augue luctus nec. Mauris pretium lectus mi, ut volutpat felis bibendum ac. Maecenas consectetur scelerisque tincidunt. Nunc tincidunt ante augue, a vestibulum quam molestie et. Praesent finibus risus iaculis ipsum maximus viverra.</p>', 'http://localhost/rajasthantourexpert/uploads/08-18/1535563784_header1.jpg', 0, 'f', 't', 't', 0),
(2, 0, 'Same Day Tours', 'same-day-tours', 'Same Day Tours', 'Same Day Tours', '<p>&nbsp;Same Day Tours</p>', '', '', 0, 'f', 't', 't', 1537435544);

-- --------------------------------------------------------

--
-- Table structure for table `cm_users`
--

CREATE TABLE IF NOT EXISTS `cm_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_title` varchar(100) NOT NULL,
  `user_login` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_pass` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `security_key` varchar(500) NOT NULL,
  `key_time` varchar(100) NOT NULL,
  `user_type` varchar(64) NOT NULL,
  `user_nicename` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `user_email` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `dateadded` int(11) NOT NULL,
  `user_status` enum('t','f') NOT NULL DEFAULT 'f',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cm_users`
--

INSERT INTO `cm_users` (`ID`, `user_title`, `user_login`, `user_pass`, `security_key`, `key_time`, `user_type`, `user_nicename`, `user_email`, `dateadded`, `user_status`) VALUES
(1, 'Rajasthan Tour Experts', 'admin', 'cmFqYXN0aGFuX3RvdXJhZG1pbkAxMjM=', '', '', 'administrator', 'Rajasthan Tour Experts', 'codermat@gmail.com', 2018, 't');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
