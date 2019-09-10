-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2019 at 10:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seesouth_see-southern`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery_1`
--

CREATE TABLE `gallery_1` (
  `pic_id` int(11) NOT NULL,
  `pic_title` varchar(200) NOT NULL,
  `pic_name` varchar(45) NOT NULL,
  `pic_path` varchar(50) NOT NULL,
  `thumb_name` varchar(200) NOT NULL,
  `thumb_path` varchar(100) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_allow` int(11) NOT NULL DEFAULT '1',
  `allow_public` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_1`
--

INSERT INTO `gallery_1` (`pic_id`, `pic_title`, `pic_name`, `pic_path`, `thumb_name`, `thumb_path`, `date_add`, `admin_allow`, `allow_public`, `user_id`, `album_id`) VALUES
(1, 'Keep it a memory Tom and Danny', 'Selection_014.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Selection_014.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Selection_014.png', '2018-06-14 04:58:30', 1, 1, 3, 1),
(2, 'Ekeler', 'Workspace_1_013.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Workspace_1_013.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Workspace_1_013.png', '2018-06-17 10:45:48', 1, 0, 3, 1),
(3, 'November No Rain_18-June-2018', 'Cover_18June2018.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Cover_18June2018.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Cover_18June2018.png', '2018-06-19 04:44:51', 1, 1, 1, 1),
(4, 'beautiful girl enjoy the moment', 'Selection_034.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Selection_034.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Selection_034.png', '2018-06-21 10:20:02', 1, 1, 14, 1),
(5, 'Ekeler on the beach', 'Workspace_1_0131.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Workspace_1_0131.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Workspace_1_0131.png', '2018-06-21 10:20:53', 1, 1, 14, 1),
(6, 'อิ่มอร่อยเช้านี้', '20180622_100229.jpg', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_20180622_100229.jpg', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_20180622_100229.jpg', '2018-06-22 10:59:55', 1, 1, 1, 1),
(7, 'Andrea  Michael and Farook 25 May 2018', 'andrea-michael.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_andrea-michael.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_andrea-michael.png', '2018-06-24 08:44:30', 1, 1, 1, 1),
(8, 'น้องแก้ม Intern 27 June 2018', 'Selection_Kamm.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Selection_Kamm.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Selection_Kamm.png', '2018-06-27 03:58:09', 1, 0, 1, 1),
(9, 'น้องแก้ม 2 Intern 27 June 2018', '002_Kamm.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_002_Kamm.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_002_Kamm.png', '2018-06-27 04:02:58', 1, 1, 1, 1),
(10, 'Jim and Family See-southern', 'Jim_and_family.jpeg', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Jim_and_family.jpeg', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Jim_and_family.jpeg', '2018-06-30 08:14:41', 1, 1, 3, 1),
(11, 'Key word on farookphuket', 'keyword_farook.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_keyword_farook.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_keyword_farook.png', '2018-06-30 09:19:16', 1, 1, 3, 1),
(12, 'Sun in Kitchen', 'Sun-mix.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Sun-mix.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Sun-mix.png', '2018-07-02 08:08:30', 1, 1, 1, 1),
(13, 'Jordan and Loren', 'Jordan-and-Loren.JPG', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Jordan-and-Loren.JPG', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Jordan-and-Loren.JPG', '2018-07-03 09:46:20', 1, 1, 1, 1),
(14, 'moo-mooh', 'moo-mooh.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_moo-mooh.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_moo-mooh.png', '2018-07-03 10:00:48', 1, 0, 1, 1),
(15, 'test', 'Screenshot_20180703-070952.jpg', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_Screenshot_20180703-070952.jpg', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_Screenshot_20180703-0', '2018-07-03 07:57:40', 1, 0, 14, 1),
(16, '5-july-2018_small-storm-day', '5-july-2018_storm-day_EXP.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_5-july-2018_storm-day_EXP.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_5-july-2018_storm-day', '2018-07-06 07:21:45', 1, 1, 1, 1),
(17, 'pay_via_paypal', 'pay_by_paypal-1.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_pay_by_paypal-1.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_pay_by_paypal-1.png', '2018-07-12 07:17:39', 1, 1, 1, 1),
(18, 'Mel_sun-2-Sep-2018', 'mel_sun-2-aug-2018.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_mel_sun-2-aug-2018.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_mel_sun-2-aug-2018.pn', '2018-09-04 08:16:09', 1, 1, 14, 1),
(19, 'My-website_project-update_tue-4-Sep-2028', 'my-web_tue-4-sep-2018.png', '/home/seesouth/domains/see-southern.com/private_ht', '_Thumb_my-web_tue-4-sep-2018.png', '/home/seesouth/domains/see-southern.com/private_html/public/image/thumb/_Thumb_my-web_tue-4-sep-2018', '2018-09-04 08:16:56', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_cat`
--

CREATE TABLE `gallery_cat` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `date_add` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `kw_id` int(11) NOT NULL,
  `kw_page_keyword` text NOT NULL,
  `kw_page_des` text NOT NULL,
  `kw_robots` varchar(100) NOT NULL DEFAULT 'noodp,noydir',
  `kw_canonical` varchar(500) NOT NULL,
  `og_locale` varchar(60) NOT NULL DEFAULT 'en_US',
  `og_type` varchar(100) NOT NULL DEFAULT 'article',
  `og_title` varchar(60) NOT NULL,
  `og_description` text NOT NULL,
  `og_url` varchar(300) NOT NULL,
  `og_site_name` varchar(300) NOT NULL,
  `article_publisher` text NOT NULL,
  `kw_date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='for site seo';

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`kw_id`, `kw_page_keyword`, `kw_page_des`, `kw_robots`, `kw_canonical`, `og_locale`, `og_type`, `og_title`, `og_description`, `og_url`, `og_site_name`, `article_publisher`, `kw_date_add`) VALUES
(1, 'number 1', 'this is the des for test 1', 'noodp,noydir', 'https://www.see-southern.com/tour/detail/1', 'en_US', 'article', 'my tour number 1 this is the etst', 'this is the des for test 1', 'https://www.see-southern.com/tour/detail/1', 'https://www.see-southern.com/', 'farookphuket fuu time', '2019-05-25 00:17:59'),
(4, 'รีวิวซัมซุงกาแลคซี เอ50', 'ซัมซุงกาแลคซี่ A50 ทุกอย่างดีหมด แต่แบตแม่งห่วยริยำ', 'noodp,noydir', 'https://www.see-southern.com/article/read/3', 'en_US', 'article', 'รีวิวซัมซุงกาแลคซี เอ50', 'ซัมซุงกาแลคซี่ A50 ทุกอย่างดีหมด แต่แบตแม่งห่วยริยำ', 'https://www.see-southern.com/article/read/3', 'https://www.see-southern.com/', 'farookphuket fuu time', '2019-05-25 09:25:09'),
(5, 'Edit this for test my first keyword', 'Edit this for test my first description', 'noodp,noydir', 'https://www.see-southern.com/article/read/4', 'en_US', 'article', 'Edit this for test my first keyword', 'Edit this for test my first description', 'https://www.see-southern.com/article/read/4', 'https://www.see-southern.com/', 'farookphuket fuu time', '2019-06-11 10:21:15'),
(6, 'low budget self tour', 'the low budget tour is to just the post to keep this tour as a blog post', 'noodp,noydir', 'https://www.see-southern.com/article/read/5', 'en_US', 'article', 'low budget self tour', 'the low budget tour is to just the post to keep this tour as a blog post', 'https://www.see-southern.com/article/read/5', 'https://www.see-southern.com/', 'farookphuket fuu time', '2019-06-13 06:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `ar_id` int(11) NOT NULL,
  `kw_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ar_summary` text NOT NULL,
  `ar_title` varchar(255) NOT NULL,
  `ar_body` text NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ar_user_id` int(11) NOT NULL,
  `ar_show_public` int(11) NOT NULL DEFAULT '0',
  `ar_show_index` int(11) NOT NULL DEFAULT '0',
  `ar_read_count` tinyint(4) NOT NULL,
  `last_view_ip` varchar(25) NOT NULL,
  `last_view_date` date NOT NULL,
  `ar_post_by` varchar(50) NOT NULL,
  `ar_post_ip` varchar(45) NOT NULL,
  `ar_is_approve` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`ar_id`, `kw_id`, `cat_id`, `ar_summary`, `ar_title`, `ar_body`, `date_add`, `date_edit`, `ar_user_id`, `ar_show_public`, `ar_show_index`, `ar_read_count`, `last_view_ip`, `last_view_date`, `ar_post_by`, `ar_post_ip`, `ar_is_approve`) VALUES
(3, 4, 0, '<div class=\"row\">\r\n	<div class=\"col-md-4\">\r\n		<a href=\"https://lh3.googleusercontent.com/estIe3gaVb9BFLDSmMJwfJFZMQBXz1lLFEzviDczKBdm7Ad-9MQElIzzNV550ZmHPLQd5oi9PNrJlcHb5Q4knuTzxy26qDPVntqgNXZ_vqTv32Sg7sKtIuZs_ooWNmqlKyEZZEQPVbk=w2400\" target=\"_blak\" alt=\"click to see full size image\"> \r\n   	<img src=\"https://lh3.googleusercontent.com/estIe3gaVb9BFLDSmMJwfJFZMQBXz1lLFEzviDczKBdm7Ad-9MQElIzzNV550ZmHPLQd5oi9PNrJlcHb5Q4knuTzxy26qDPVntqgNXZ_vqTv32Sg7sKtIuZs_ooWNmqlKyEZZEQPVbk=w2400\" class=\"responsive\" />\r\n   	</a>\r\n      <p class=\"text-center\">\r\n			ซัมซุง กาแลคซี เอ 50      \r\n      </p>\r\n   </div>\r\n   <div class=\"col-md-8\">\r\n       <h2 class=\"text-center\">รีวิวเล็กๆ Samsung Galaxy A50</h2>\r\n       <p>ซื้อมาเมื่อวันที่ 15-5-2019 จาก ทรูชอปที่โลตัสกระบี่ ใช้มาจนถึงวันนี้(25-5-2019) แล้วบอกเลยประทับใจในคุณภาพครับ ถ้าจะให้ติก็แค่เรื่องเดียว \"แบต แม่งห่วย\" ตอนเช้า 7 โมงชาร์ตเต็ม 100% ถ้าวันไหนไม่พกสายชาร์ตล่ะก็แบตหมดก่อนเวลาอันควรแน่ๆ</p>\r\n<p>ก่อนซื้อผมก็ดูรีวิวพอสมควรนะ ใครๆ เค้าก็ว่าแบตมันดีอยู่ได้ทั้งวัน แต่ไม่มีรีวิวไหนเลยที่บอกว่า \"แบตห่วย\" เอ รึว่าไอ้ผมมันซวยได้ของห่วยมาวะ.</p>\r\n   </div>\r\n</div>\r\n                    ', 'ก๊อปเค้ามา รีวิว ซัมซุง A50 บอกเลยว่าทุกอย่างดีหมด แต่แบตแม่งห่วย', '<!--container div.container start-->\r\n<div class=\"container\">\r\n<div class=\"row\"><!--div.row start-->\r\n<div class=\"col-lg-12\"><!--1 div.col-lg-12 start-->\r\n<h1 class=\"text-center\">บางครั้งก็อดคิดไม่ได้นะว่า \"หรือว่ามีแต่กูวะ ที่ซื้อมือถือมาทีไรได้เครื่องที่มันแบตห่วยทุกทีสิ\"</h1>\r\n</div>\r\n<!--1 div.col-lg-12 end-->\r\n<div class=\"col-lg-12\">\r\n<div class=\"col-lg-4\"><a href=\"https://photos.app.goo.gl/ZsEdea1WTYjmKcwL6\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/pWLjaU9xeOWlricXAJPAUiQcrqxnvDqEL8NiJ9-3bJtGn1UdNVegSqRk0U0DND6Q0uU9zIiHnRYULRE_QqVx_X8gjvaeOnqpzBUz1AVI10QDJp0JSL8sRV009iZ24KXqmcJF4KQ_Oss=w2400\" /> </a>\r\n<p>คลิกที่รูปเพื่อเปิดดูรูปในอัลบั้มนี้ถ่ายที่สะพานสารสินภูเก็ต</p>\r\n</div>\r\n<div class=\"col-md-8\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/wiAD1N4giROy8Pk-RAE1SSCF01nPF4jXXoLlRnk5rqSSK2t8BBOE-gBsVwZiqqwlv-8gofmDUmOQV3VMeEojaO4umUqWO8gmM7iljZHMfS2-zowtJ7SH6Gf0aUvMs36lJalSd9hcXPw=w2400\" />\r\n<p class=\"text-center\">ไม่หล่อแต่เหี้ย</p>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-12\">\r\n<p>ผมดูรีวิวมาเยอะนะเพราะว่าชอบดูพวก คอมพิวเตอร์ โทรศัพท์มือถือ หรือพวกเทคโนโลยีต่างๆ ช่องนี้ก็เป็นอีกช่องนึง(ของคนไทยทำวิดิโอดีๆ เยอะมาก แต่เรามักจะชอบดูคลิปโป๊มากกว่า ดูแล้วมันสยิวดีไง) ที่ผมมักจะเข้าดูเป็นประจำ ผมชอบลีลาการพูดที่ไม่เหมือนใครและเป็นเอกลักษณ์ของ <strong>นดุจ</strong> มากครับ ผมว่าเค้าเป็นคนเก่งมากๆ คนนึงเลยแหละ</p>\r\n<p>&nbsp;</p>\r\n<div class=\"video-container\"><iframe src=\"https://www.youtube.com/embed/v20SLZkYiIU\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>\r\n<p>ก๊อปปี้รีวิวจาก StepGeek นดุจ</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<!--end div.row--></div>\r\n<!--div.container end-->\r\n<p>&nbsp;</p>', '2019-05-25 08:24:39', '2019-05-25 09:25:09', 0, 1, 1, 0, '', '0000-00-00', 'farookphuket fuu time', '1.46.168.96', 1),
(4, 5, 0, '<div class=\"row\">\r\n                        <!--statrt column 4 for the image this text will not be shown-->\r\n                        <div class=\"col-lg-4\">\r\n                            <img src=\"https://img.etimg.com/thumb/msid-61740239,width-643,imgsize-251731,resizemode-4/heres-why-the-mclaren-720s-worth-280000-is-a-difficult-car-to-love.jpg\" class=\"responsive\" />\r\n                            <p>my first test on this</p>\r\n                        </div>\r\n\r\n                        <div class=\"col-lg-8\">\r\n                            <h2 class=\"text-center\">Your title here</h2>\r\n                            <p>Your paragraph content all will be goes here</p>\r\n                            <p>if you want to change the picture on the right just find the tag \"src=\" then change to your photo source</p>\r\n                            <p>your result will show at the buttom of this text box after you click somewhere else </p>\r\n                            <p>You can change the teext in between \"&lt;p&gt;\" tag.</p>\r\n                        </div>\r\n                    \r\n                    </div>\r\n                    ', 'test my first', '<p>tesy a hoy</p>', '2019-06-11 10:21:15', '2019-06-11 10:24:25', 22, 0, 0, 0, '', '0000-00-00', 'farookphuket fuu time', '223.24.152.89', 0);
INSERT INTO `tbl_article` (`ar_id`, `kw_id`, `cat_id`, `ar_summary`, `ar_title`, `ar_body`, `date_add`, `date_edit`, `ar_user_id`, `ar_show_public`, `ar_show_index`, `ar_read_count`, `last_view_ip`, `last_view_date`, `ar_post_by`, `ar_post_ip`, `ar_is_approve`) VALUES
(5, 6, 0, '<div class=\"row\">\r\n	<div class=\"col-lg-4\">\r\n		<img src=\"https://lh3.googleusercontent.com/KvF2rMU_2zLiLD5-bC_gZrQ-iV_CsW1arYU_fHU4m99sUZyizXkxvpP3iZ04lhswjU6YVjkeZmeGavNCjYCQjKu3uPKeUOOmV9HdiVl4p8E8IsNC_-UNaYx-lXzAOxEPCozLrLY1TtA=w2400\" class=\"responsive\"/>\r\n		<p class=\"text-center\">\r\n		<strong>Just an Orchid</strong>\r\n		รูปดอกกล้วยไม้</p>\r\n	</div>\r\n	<div class=\"col-lg-8\">\r\n		<p>\r\n			<strong>Our self tour</strong>\r\n			on 29-may-2019 to 4-June-2019 (7 days 6 nights)\r\n		</p>\r\n		<p>This is a couple self tour and this is what we did.\r\n		<br />เราไปกันสองคนนะทริปนี้\r\n		</p>\r\n		<ul>\r\n			<li>\r\n				<p>We have our own car.\r\n				<br />เราใช้รถของเราเองนะ\r\n				</p>\r\n			</li>\r\n			<li>\r\n				<p>We stay in the cheap hotel we can find(Just one sleep).\r\n				<br />เราหาเช่าห้องพักราคาถูกๆ ก็แค่ซุกหัวนอน\r\n				</p>\r\n			</li>\r\n\r\n			<li>\r\n				<p>We  eat a local food.\r\n				<br /> เรากินง่าย อยู่ง่าย\r\n				</p>\r\n			</li>\r\n\r\n			<li>\r\n				<p>We just go to where we want to go without any plan.\r\n				<br />เราไปที่ที่เราอยากจะไป ไม่มีแผนการเดินทาง อยากไปก็ไป ขี้เกียจก็นอนเท่านั้นเอง\r\n				</p>\r\n			</li>\r\n		</ul>\r\n		<p>&nbsp;</p>\r\n		<h2 class=\"text-center\">What do we go?</h2>\r\n		<p class=\"text-center\">เราไปไหนกัน</p>\r\n		<ol>\r\n			<li>\r\n				<p>\r\n				<i>\r\nPhra Nakhon Si Ayutthaya\r\nจังหวัดพระนครศรีอยุธยา </i>	: 29 to 30 May 2019\r\n				</p>\r\n			</li>\r\n		</ol>\r\n	</div>\r\n</div>', '7 days 6 nights low budget tour.', '<section id=\"body_text\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-10\"><a target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/cR_i2ssc6W5-9TFhO69S02jM12FK_G_YeewaX4ilAPd9TmTmDD8Uq2zxOizo92Rsx_R7-wvvh1Ul5r26q1ptPBBpHqmKwtmtk4lZRAun_A9mIU07P51HeXnqXek8tcN_BtRWDgA0Qs4=w2400\" /></a>\r\n<p class=\"text-center\">รูปตั๋วทั้งหมด</p>\r\n</div>\r\n<div class=\"col-lg-6\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/lmMBhmEkjZc40JptUW1pj9OAmsnFiXRcI36yBxI0lVH037rcAv_cPKGQFIePpt2Ljh7tX3swcmbYNNZCREpzHnIjKmcAeeiODWKk_DNVMFqrKAJlmPQNj52dO5EaU5RAJfKVt0uUDLA=w2400\" />\r\n<p class=\"text-center\">รูปพี่มดหน้าแมคอยุธยา</p>\r\n</div>\r\n<div class=\"col-lg-6\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/PXsXqjm3HPk3gLIxN6rRV8SauKBEvOarpCNVhRkgmm-jYOXdPY-khCvZuJUUN1aHohugOmLwsmXuvzy_hZjcIO7-hMDBH3ddvYvtSUGMiEAKh6WOuMFgX1GT2ww4oslGcq0v6HvUFl0=w2400\" />\r\n<p class=\"text-center\">Show Map</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<p><strong> Start Day on 29-May-2019 : </strong> we got out from the \"Dorn-Muang\" airport in Bangkok then we drive along the road heading to \"R-Yuth-Ta-Ya(อยุธยา)\" (or Ayutthaya is how we Thai people write).</p>\r\n</div>\r\n<div class=\"col-lg-10\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/qMPopsKg7od_dAHV6GWLNJqG5j1oOK6OaYi560Ucu82xdz5SGTA4TgGmKmMEqdyXuXab8NMI4fK-hQH8ClOuqm8WdbxNSII-5zQ8fp51by3k3A-qjQsbDVffobxqMasHgsIQEvd6BMg=w2400\" />\r\n<p class=\"text-center\">หมู่บ้านญี่ปุ่น</p>\r\n<p>We come here in \"Japanese Village\" we paid 50 Thaibath/person to come visit here.</p>\r\n<a href=\"https://lh3.googleusercontent.com/_tcUyZ5VttRLatgF76jlI1-L_TOLTUsw_SCnUWVvuGhaoRkGYkDot9fn-znxTvskxIahObATALywz1643x9ostnackosa85VBAXwgRvRb2QsJClE9xj2l0HsR6Kztl_mJYjA53-QJBQ=w2400\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/_tcUyZ5VttRLatgF76jlI1-L_TOLTUsw_SCnUWVvuGhaoRkGYkDot9fn-znxTvskxIahObATALywz1643x9ostnackosa85VBAXwgRvRb2QsJClE9xj2l0HsR6Kztl_mJYjA53-QJBQ=w2400\" /></a>\r\n<p class=\"text-center\">Click to see the full size image (คลิกที่รูปเพื่อดูรูปใหญ่รูปป้ายหมู่บ้านญี่ปุ่น)</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<!--show photo album of \"Japanese Village\"--> <a href=\"https://photos.app.goo.gl/ks8Hu2zpr3v9adY76\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/1ti5QvnlfVlFDvs1Yfnac7pQID6ib6JXW7rLHH-df072lmqNs_jsZs4tXVD4Eo_5f6Cn2-AFcq1DyN0DSl8BzfnkAj8zLDrAo0rE4j3Fiozbk0v45BSTiZsLxCQZEGla8SE5dPopT-Q=w2400\" /> </a>\r\n<p class=\"text-center\">Click on the ticket picture to see the photo in \"Japanese Village\" album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"col-lg-10\"><!--show map of japanese Village หมู่บ้านญี่ปุ่น-->\r\n<div class=\"video-container\">\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.632562495576!2d100.57536011413787!3d14.33276318997351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e275d4667aefbd%3A0x6474ee080271a732!2sJapanese+Village+Museum!5e0!3m2!1sen!2sth!4v1559873969474!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p class=\"text-center\"><strong> Map of <em>Japanese Village</em> </strong></p>\r\n<p>&nbsp;</p>\r\n<!--end of show map--></div>\r\n<!--  //////////////////////////////////////////////////// - --> <!-- /////----------------where do we eat 29-5-19--//// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Where do we eat this afternoon</h1>\r\n<p>&nbsp;</p>\r\n<a href=\"https://photos.app.goo.gl/hTf9xr8JJLQ5CEHX7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/VJ4uF_kXfW3T8J5mifGbStYKLG3zc63PbgBeY-P1sIpbhtOhISwPFavN4XTIN-GwPVsE71Ah_33yeICO0uZPp-qxDj7Sze7AvS0FZyctlPohPXA6lSJPuGk4LCdhwXY_LTypoFk4SJs=w2400\" /> </a>\r\n<p class=\"text-center\">Click to see all photo in <strong><em>Fareda fried rice</em></strong> album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////////// End of Fareda --> <!-- //-------------------------------------------// --> <!--Show ayutthaya bouchic hotel start-->\r\n<div class=\"col-lg-10\">\r\n<p>&nbsp;</p>\r\n<h1 class=\"text-center\">Where we sleep tonight \"Ayutthaya Bouchic hostel\" 29-May-2019</h1>\r\n<p>&nbsp;</p>\r\n<a href=\"https://photos.app.goo.gl/U4gWxNxg86vhh2a68\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/GAA5GVf-FJrjHgmivcmU5x6pnWZ-gu7hU77LRcy6GQ5DcxA-lyTtIBW8FnCWPq80kl4cgSV6nQYauAq50dZgoEiA2PkXDgnVuK-zUxHpOL-GUqMzAdGLB-KI0J8HfRorYmeTcfSW1co=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> <em>Ayutthaya Bochic Hostel : </em> </strong> Click on the image to see ALL photo in this album.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!--END OF show ayutthaya Bouchic hostel--> <!--show map of ayutthaya bouchic hotel start-->\r\n<div class=\"col-lg-10\">\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.2912084034324!2d100.53509271413813!3d14.352551689960809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e275b56e36d2af%3A0xd7fc9a08df62b396!2sAyutthaya+Bouchic+Hostel!5e0!3m2!1sen!2sth!4v1559913386795!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p>&nbsp;</p>\r\n<p class=\"text-center\">SHOW MAP OF <strong> <em> Ayutthaya Bouchic Hostel </em> </strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!--show map of ayutthaya bouchic hotel start--> <!-- //////////////////////////////////--> <!-- //////////// Kong-KongH market 30-5-19-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Kong KongH Market 30-May-2019</h1>\r\n<a href=\"https://photos.app.goo.gl/WZWFG7GorEVZtKDM7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/sIsDdpfAA-hTAzfViLFYs9WlEAa5Rt4UD2hW9rwRJClTCVncLdq_zp_oGQazPw78X_Mkh9l3EPVEf5tAIrs_qAtfhZPS0f3HH-MZOs6bmEN6K5AhKbi0Ba4_C9m48u-0b3s7F05Oa1c=w2400\" /> </a>\r\n<p class=\"text-center\"><strong><em>Kong KongH</em></strong> market click on the photo to see more picture in this album</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<p>&nbsp;</p>\r\n<h1 class=\"text-center\">Kong KongH market (<strong>ตลาดโก้งโค้ง</strong>)show on map</h1>\r\n<p>&nbsp;</p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.4903513194563!2d100.57436911413711!3d14.28291819000544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e276f1031c2505%3A0x983d77ec0c67cd9a!2sKong+Khong+Market!5e0!3m2!1sen!2sth!4v1560038791528!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong>Kong-KongH (ตลาดโก้งโค้ง)</strong> market on the google map</p>\r\n<p>Form here we go to <strong>\"Wat Niwet Thammaprawat Ratchaworawihan\"</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////// END OF Kong-kongH market--> <!-- ////////////// GO TO \"Wat Niwet Thammaprawat Ratchaworawihan\" /////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Wat Niwet Thammaprawat Ratchaworawihan</h1>\r\n<a href=\"https://photos.app.goo.gl/1jCYvxyUKvcSTxoZA\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/XCKBDu6xKfPf4nV8uN48boQoJXw_F4ioEh9iihnQ8pS9rbol5ykzsFTKOiLrzBivlXUwxiVVYKR7I9IPBNhSB3eYoDECS6GBIQ95AcV7yTb5HGQnY_pRqGCH3IJnvE_8sBD-R15k3OY=w2400\" /> </a>\r\n<p class=\"text-center\"><em> Wat Niwet Thammaprawat Ratchaworawihan </em> (or in Thai <em>วัดนิเวศธรรมประวัติราชวรวิหาร</em>) Click on the picture to see more photo in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<p>&nbsp;</p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.372922761757!2d100.57395881413633!3d14.231454690038442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2784153bf4345%3A0xe1ef0ffc1bd09288!2sWat+Niwet+Thammaprawat+Ratchaworawihan!5e0!3m2!1sen!2sth!4v1560073907855!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong>Wat Niwet Thammaprawat Ratchaworawihan</strong> on google map</p>\r\n<p>From here we go to <strong>Million Toy Museum</strong> (<strong>\"พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ \"</strong>)</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////// END OF วัดนิเวศธรรมประวัติราชวรวิหาร   /////////////////--> <!-- //////////////////// พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ ////////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Million Toy Museum</h1>\r\n<p><em><em> พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ </em></em></p>\r\n<a href=\"https://photos.app.goo.gl/9X8dTFXvaAnXo2u88\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/KHdP7r7UK5JkJma9JCLD-nEZUanCT588uE2XnOw0MvFhyKJ7pGU1z1fjSfxRxc3O0_kDM6HyGUETpu6_Yz2ZavZSnesed8lvb_HC-WMMFsz95NiWxy_TH6abVt1_OzhpGdeG3ugdzXA=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Million Toy Museum </strong> (<strong> พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ </strong>)</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.161000427082!2d100.55075711413821!3d14.360092889955999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e274523d57682f%3A0xd6ba783ea9887ccf!2sMillion+Toy+Museum!5e0!3m2!1sen!2sth!4v1560079770143!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Million Toy Museum </strong> (<strong> พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ </strong>) on the google map.</p>\r\n<p>Form here we go to <strong> Ngern-Tem resort </strong> in <em>Nakhon Sawan</em> province.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////// END OF พิพิธภัณฑ์ล้านของเล่นเกริกยุ้นพันธ์ //////////////////// --> <!-- /////////////////////////////////////////////////////////////////////////--> <!-- //////////// Ngern-Tem resort ////////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">We sleep here in \"<em>Ngern-Tem</em> Resort\" tonight (30-May-2019)</h1>\r\n<a href=\"https://photos.app.goo.gl/fVBA4gXYiUawTzpv9\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/68KII4udNwIBL8P3RCDwbk2naLXgmIA9hkyV6HI518DfM3cXcIj9JssmDwuY47KLH-TEeaUlA3CWxb8N2wpGkqHvgVk7_Fdezpq7ijCqbbR1HvLWumIw1wTnB0mc6MkmBMx6Md5fGwY=w2400\" /> </a>\r\n<p class=\"text-center\"><strong>Ngern-Tem</strong> resort click on the picture to see more photo in this album</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Ngern-Tem resort on the google map</h1>\r\n<p>&nbsp;</p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.732696909923!2d100.14937061415831!3d15.659216289135362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e04ecf4a8e2ed5%3A0xa726769f1f7aa311!2z4LmA4LiH4Li04LiZ4LmA4LiV4LmH4LihIOC4o-C4teC4quC4reC4o-C5jOC4lw!5e0!3m2!1sen!2sth!4v1560041469258!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\">Ngern Tem resort on the google map</p>\r\n<p>today In the morning (31-May-2019) we leave from this resort to take some photo along the way and having some food on the way to go to <strong> Nakhon Sawan Tower (หอชมเมืองนครสวรรค์ ) </strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////// END OF Ngern-Tem Resort /////////////////// --> <!-- ///////////////////////////////////////////////////////////////////////--> <!-- //-----------------Show day  31-may-2019  START--> <!-- //////////////////// show other pic in Nakon-Sawan \"the morning picture in Nakon-Sawan\" ///-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Other picture in Nakon-Sawan</h1>\r\n<a href=\"https://photos.app.goo.gl/aoCUvv1PcdmZne5n7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/7xVPDAMrBHkkI2FLIFB6g4uQ5XU6eR8C2hHBRbG9tn2dF8QUb2WkFLy4QERhyflkZCGw1Q9GHtfU1XaVgov9Hc42lr19BBnNVd_9jTrscez-UDK7xxC9JFfQNg0fEZJwKJlReIsQpf8=w2400\" /> </a>\r\n<p class=\"text-center\">Click on the picture to see all photo in this album</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////////////Pic in the row start ////////////////////// --> <!-- ///////////////// PIC 1 ////////// -->\r\n<div class=\"col-lg-3\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/JfPNDO_QTG1wtFf7wdsga6bFAX3V--vcoktdcIkyKFnoZRw1nDTn9ch9IMaZzmdMwc1mvs_p5XfyM9maPJ7SuGr-7IevqXsUxX3R_DTWSp7uKJxOrNdN_sH-KP0dtioucMjhyVwul7g=w2400\" />\r\n<p class=\"text-center\">งานศิลเค้าละ</p>\r\n</div>\r\n<!-- /////////////// PIC 2 ///////// -->\r\n<div class=\"col-lg-3\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/OOpeNzNHYaqIGWSdsqaV_Fove0E9icWlVupAsEpkZpjnRdyJHBCd_kKHgwUwDRWhvvW615CjfornFMJ0Po5rUZOYC8cEw5-oU_c6AOMbOkEkJtyGoQTVSSf-gbCRiuKRMFBRfwL_6zE=w2400\" /></div>\r\n<!-- ///////////// PIC 3 ////////////// -->\r\n<div class=\"col-lg-3\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/QjA7WTYyrev_Z2RNYgc71DOu0rbZPtLdPwTUaolQP0Wes-GI8nfjZDUgtLyEJOAwiwVKtuE4KqlNYzpbo5gGNstvZ4amRwyHexDWCCE9JHBoHCbWgT6cLh1rSkpwO5LSWBPT_iN3pIU=w2400\" /></div>\r\n<!-- ///////////// PIC 4 ///////////// -->\r\n<div class=\"col-lg-3\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/HLtn3AWoYpYiGnhxwZnMYH1L0eYJTONbKLZVz6MlXBP30MhG-A77gWWb0-KnEJr79ExbheMznxR1GsJbHWdgbNTvix4YC7rqKUkfyHOq8tvRTYPpCDXiZrzT7AL6vsQ7sFpZbeq-wZM=w2400\" /></div>\r\n<!-- ///////////////////// END OF PIC in the row /////////// --> <!-- ////////////////////////////////////////////////////////////////////////////////// --> <!-- //////////////////// Nakon Sawan Tower ////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Nakhon Sawan Tower</h1>\r\n<p>หอชมเมืองนครสวรรค์</p>\r\n<a href=\"https://photos.app.goo.gl/a16BSVvrGxeTPkMq8\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/vvZWQGlgQF8P2m-GVf2nLyF1BkZu0gUNSqFthaupnlvRiQlzYpDX4XHUi1wQw0Gx2465aALjzMzGpUU8hSlSHkSHpEBezayTijHm-IWZplQktwBJMt5UL5Yn3TzEbno-ACfutq1Y_gM=w2400\" /> </a>\r\n<p class=\"text-center\">Click on the picture to see more photos in this album</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////// Map of Nakon sawan tower//-->\r\n<div class=\"col-lg-10\">\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.624468354686!2d100.12138341415927!3d15.718070389098667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e04f9db9a182bb%3A0x45d8899bda337735!2sNakhon+Sawan+Tower!5e0!3m2!1sen!2sth!4v1560085602235!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong>Nakhon Sawan Tower</strong> On the google map</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////////////////////////////////////////////////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Day 31-May-2019 Kao-Nor</h1>\r\n<a href=\"https://photos.app.goo.gl/Z9Z6LKpLDzqn1sYe9\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/K1Y7MTCKFfHdBCfs60x4oshpKybbGIfDG6Xf1a30NzDg--bj9jhE3y7NUkeIa5VKsJ4d7WYE1bWEHdgyOy4ar1RFYjwpPQuG_Jexryvz0rZd4plnBLcb9ZpN91bpGg8xDu4CXagouhQ=w2400\" /> </a>\r\n<p class=\"text-center\"><strong>Kao-Nor</strong> Click on the photo see All photos in this album.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>There</strong> are thousand of monkey there</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////--Embed Map of kao-nor -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Kao-Nor on the google map</h1>\r\n<p>&nbsp;</p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.3754484833703!2d99.87398931416291!3d15.941757988959807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e08ac88f7e652f%3A0xbc7c88fde216164e!2z4LmA4LiC4Liy4Lir4LiZ4LmI4LitLeC5gOC4guC4suC5geC4geC5ieC4pyDguJrguKPguKPguJ7guJXguJ7guLTguKrguLHguKI!5e0!3m2!1sen!2sth!4v1560037608569!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\">Map to go to <strong><em>Kao-Nor </em></strong></p>\r\n<p>From here we go to <strong>Kiang-Num-Ping resort</strong> (<strong> เคียงน้ำปิงรีสอร์ท </strong>) in Kosamphi, Kosamphi Nakhon District, Kamphaeng Phet 62000</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //-----------------Show day  31-may-2019  END-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Kiang-Num-Ping resort</h1>\r\n<p><strong> เคียงน้ำปิงรีสอร์ท จังหวัดกำแพงเพชร</strong></p>\r\n<a href=\"https://photos.app.goo.gl/uFwsBuGCsAaoPi5CA\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/R86Ef1YSkPtcXiurAUE_FkA9wnXIArY8snKHWY9C_hJ8XHNrSEVPBsxoy6XaxaDBvGtchWlMKLTVSESKJFofKk8TZYPI-VRzKA433R4zpUoEY3Bh0xrYljmsP9GSF_Z_GxkfT2_4fGA=w1920-h1080\" /> </a>\r\n<p class=\"text-center\">Click on the picture to see more photos in this album</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////////////////////////////////////////// --> <!-- ////////////////// บ่อน้ำพุร้อนพระร่วง //////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bo Nam Phu Ron Phra Ruang</h1>\r\n<p>บ่อน้ำพุร้อนพระร่วง</p>\r\n<a href=\"https://photos.app.goo.gl/Qo1jkuBZDrXy64hC9\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/0w9BZQ6T-Me0KQr-5CHgkPn7gWQVKbeUUOBd8BqWlerJKzjRPSB2rLbsywKbtI3esmDHxbKKQFiyeu9kIOpVzeJeNbwatkMwi3vOtmMlGNM8Br5JgoWOdfO9_iGGtsBxW4sho4SF_mA=w1920-h1080\" /> </a>\r\n<p class=\"text-center\"><strong> Bo Nam Phu Ron Phra Ruang </strong> บ่อน้ำพุร้อนพระร่วง</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15289.504203444401!2d99.45930081745196!3d16.658055116310496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30de148f924243f3%3A0x9c3e31af5dcaef4f!2sBo+Nam+Phu+Ron+Phra+Ruang!5e0!3m2!1sen!2sth!4v1560089532379!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> บ่อน้ำพุร้อนพระร่วง </strong></p>\r\n<p>The other place that we stop by is \"<strong>Kamphaengphet Historical Park</strong>\" but I am not really got a photo from this place much because I was so lazy to walk so from here we go to <strong> Ra-Biang-Num resort </strong> in <strong>PhiChit</strong> province.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////////////END OF บ่อน้ำพุร้อนพระร่วง ///////////// --> <!-- //////////////// PIC IN THE ROW START /////////////////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">another picture in <em> กำแพงเพชร - ตาก </em></h1>\r\n<a href=\"https://photos.app.goo.gl/9an6iiXjLBM6S2ez9\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/j4SPvPjT_DsFzDnKB4MOpJyK0hNr3Ah2SAsutEP3W9u6EqGmDQ67FlxoGXWMIGT60f2wtFkl2pHAkbKFSuuRgHKONro7yb24iRrKUgFzEalRZ3CcqGpvNR0KgWDHWNLGjx9Ux1OJR6M=w1920-h1080\" /> </a>\r\n<p class=\"text-center\">Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////////////// ROW BIG PHOTO //////// --> <!-- /////////// PIC 1 ////////// -->\r\n<div class=\"col-lg-4\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/hIjvIky3f4zoWCk1DmBdIGgbK0vZOwI1zVvL8AQF0JhO4rFFWH_ur1xHssUd0a_DQA2RQ9fkoeHdGH4en6v28wFT06NhYffnWbTLc10ADjL2Us27GmNoHB3ZvzpIJS2fw3GJpC6HRAM=w1920-h1080\" />\r\n<p class=\"text-center\">We stop by to having lunch here and it was great</p>\r\n</div>\r\n<!-- /////////// PIC 2 ////////// -->\r\n<div class=\"col-lg-4\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/a6yT16EFIBMJlOjVv15WpfeTK5vxxUjLHJ1P_yHP-rupyXL_4kJgVw0JTpj2EvzNHmQ2DHIwH1pOnmjAcyYO7pcs53f1nJ345UetROZuPXQiQ4G1o2Q3BKc2tPZ_q4WjvntEYBKDuIc=w1920-h1080\" />\r\n<p class=\"text-center\">Good food you can tell</p>\r\n</div>\r\n<!-- /////////// PIC 3 ////////// -->\r\n<div class=\"col-lg-4\"><img class=\"responsive\" src=\"https://lh3.googleusercontent.com/KwdKEtcWi9Met1N3SIOsXMUHGvlk9uG-RlTD8d0kFXmQixgYCVY1I6M15TozoEsfTCzIpKDu_SDpmvTNqDycTvbUDjRqjCkmQx2NbytnKAE_o-vHRHrxAo_WMux2htdw5sSQRE59qNs=w1920-h1080\" />\r\n<p class=\"text-center\">This market in Taak just to by <strong> Avocado </strong></p>\r\n</div>\r\n<div class=\"col-lg-10\">\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////////// PIC IN THE ROW END ////////////////////////// --> <!-- ///////////// เราไม่ได้นอนที่จังหวัด ตาก เพราะว่าไม่สามารถหาห้องที่ถูกใจได้ ////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">We been in \"TAAK\" too but we not doing much there.</h1>\r\n<p>We also been to \"Taak\" just to buy some \"Avocado\" then we have lunch and laundry there we cannot find some good resort to stay there a lot of sign on the side road said \"Hotel 450 Thaibath\" but none of them will be 450 per night! many hotel in TAAK that we found are 700+ Thaibath. and they doesn\'t look that good as you willing to pay in that price(and 700 Thaibath per night for the hotel to stay is way too much out from our budget so no no.)</p>\r\n<p><strong>DO NOT</strong> beleive in the sign that you see on the side road!</p>\r\n<p>PS : <strong>(good for us mean clean ,cheap,look good)</strong></p>\r\n<p><strong> Anywhere </strong> after we have been doing some stuff(even though it not that much) we just drive to <strong>Phichit</strong> to stay at <strong>Ra-Biang-Num resort</strong> as it in the price that meet our expectation and you know it is very very <strong>awesome</strong> to stay over night there</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////////////////////////////////////////////////////////////////////////////// --> <!-- ////////////////////// ระเบียงน้ำ รีสอร์ท  START ////////////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Rabeangnum Resort</h1>\r\n<p>ระเบียงน้ำรีสอร์ท</p>\r\n<a href=\"https://photos.app.goo.gl/nmKkbDaS8AYCBDjt7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/sYBxpbC8QNcO1kEEmvquQDAMoIaiTeVWYBThmsRQaetIm9qKaO4bJmEg-8HByAWPXYK4MZFGWjCO4ki4Fmllzh0j4cYXxss1NNOSjRUSuTapvyHO4tjrAssEYlZFytQcp30ZAwCuUfQ=w1920-h1080\" /> </a>\r\n<p class=\"text-center\">Click on the photo to see more photo in this album.</p>\r\n<p>This <strong> Resort </strong> is the best place for all of the whole trip we can fond.</p>\r\n<p><strong>In the morning</strong> we go to <strong><em>\"Bueng Si Fai\"(บึงสีไฟ)</em></strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////////////////////// map of ระเบียงน้ำรีสอร์ท //////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Rabeangnum Resort on google map.</h1>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.8781031374706!2d100.35886531417106!3d16.43101608865835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311728cfd5f210d5%3A0x494eb0a5cad04145!2sRabeangnum+Resort!5e0!3m2!1sen!2sth!4v1560134601003!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\">Rabeangnum Resort</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////////////////////// End of google map //////////////// --> <!-- ////////////////////// ระเบียงน้ำ รีสอร์ท  END ////////////////// --> <!-- ///////////////////////////////////////////////////////////////////////////// --> <!-- ///////////////////// Bueng-Si-Fai ////////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bueng-Si-Fai</h1>\r\n<a href=\"https://photos.app.goo.gl/ceDEb68PHLvgvHNh6\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/pud_oCfsV67mMukxeerFnuk8fjHrRGLlov5wKX3zNkNYNG_uSca1qvicXFR4MN9EP9qOZjaCFg7gde5C12ps3LiLZzKRDgRLrSv15h04_ZRoxmeqgo3AOMVpRFIZ6RNvXoaHpwSUzjw=w1920-h1080\" /> </a>\r\n<p class=\"text-center\"><strong>Bueng-Si-Fai (บึงสีไฟ)</strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////////// บึงสีไฟ map /////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bueng-Si-Fai in Phichit.</h1>\r\n<p><strong>บึงสีไฟ</strong> จังหวัดพิจิตร</p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15308.292617504501!2d100.32596741738747!3d16.421110668628224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfe66271f9ef89%3A0x85cfec7a9238876b!2sBueng+Si+Fai!5e0!3m2!1sen!2sth!4v1560136364811!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Bueng-Si-Fai </strong> on google map.</p>\r\n<p>from here we go to \"Ta-lad-wung-krod(ตลาดเมืองเก่า)\" in \"Thetsaban 9 Rd, Tambon Ban Bueng, Amphoe Mueang Phichit, Chang Wat Phichit 66000\"</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////////////////////End of บึงสีไฟ  ///////////////////////// --> <!-- //////////ตลาดเมืองเก่า ////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Wung-Krod old market</h1>\r\n<p class=\"text-center\"><strong> ตลาดย่านเก่าวังกรด </strong></p>\r\n<a href=\"https://photos.app.goo.gl/snss5n4g64zRpKri6\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/Q8rPot0ZlBOVxEx6fg31jQcEvx5rlNDkCKHxhwRu0v1AUya4TCPg7Yups-Ru68qTlq0OwGCMQgUCv6vZortMKyQFx2_n8LbdQnk_t7rndLgv_eXiZzuskmVZlNbn26vxDHHMzdLv_YA=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Wung-Krod old market </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////// show map //////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Wung-Krod old market</h1>\r\n<p><strong>ตลาดย่านเก่าวังกรด</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.5117210621634!2d100.38681951417047!3d16.398817388678015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfe45c201f56f3%3A0xb04d0ee849dba2a!2z4LiV4Lil4Liy4LiU4Lii4LmI4Liy4LiZ4LmA4LiB4LmI4Liy4Lin4Lix4LiH4LiB4Lij4LiU!5e0!3m2!1sen!2sth!4v1560242885799!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Wung-Krod old market </strong> on google map.</p>\r\n<p>From here we go to <strong> Chai Nat Bird Park (สวนนกชัยนาท) </strong>. in \"Khao Tha Phra, Mueang Chai Nat District, Chai Nat 17000\"</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////////End of ตลาดเก่าวังกรด /////////// --> <!-- //////////// Chai Nat Bird Park (สวนนกชัยนาท) START//// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Chai Nat Bird Park</h1>\r\n<p class=\"text-center\"><strong> สวนนกชัยนาท </strong></p>\r\n<a href=\"https://photos.app.goo.gl/xS38Ce5sttDvZurb9\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/3LSAYbAtpYlylACmNPj3DOTgwG4XjydNaPBq4YAbE5swVhf0823vzVzYoQ9vdrG5U_7dtpoEBPfZjzyyHZSmwj0UnPg_vnd7ZY_TzpQxu3MbupwYOaUAv83macuGImcaCaRBZ3EWBvw=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Chai Nat Bird Park </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////show map ////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Chai Nat Bird Park</h1>\r\n<p><strong>สวนนกชัยนาท</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.114094398589!2d100.1497156141511!3d15.20692128941863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e1bdc6bc94b37f%3A0xe8dc037d8c684c95!2sChai+Nat+Bird+Park!5e0!3m2!1sen!2sth!4v1560243517370!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Chai Nat Bird Park </strong> on google map.</p>\r\n<p>From here we go to <strong>Name of the next place</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////////// Chai Nat Bird Park (สวนนกชัยนาท) END //// --> <!-- //// About the cha-learm-krung //// -->\r\n<div class=\"col-lg-6\"><a href=\"https://lh3.googleusercontent.com/hnk4lGKRqP-l1KDPxDnuCpaz72qPe_NfuDe_FPOm4lUum2Je43l6nZ-_8YfxhcMsABaYJ7hroOYIZHOxpW8FL_xm1cSbwCR5_5LlK4tZ-WfsItJFoFO4tpvk99LuEmDjjJq5aEsDBk0=w2400\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/hnk4lGKRqP-l1KDPxDnuCpaz72qPe_NfuDe_FPOm4lUum2Je43l6nZ-_8YfxhcMsABaYJ7hroOYIZHOxpW8FL_xm1cSbwCR5_5LlK4tZ-WfsItJFoFO4tpvk99LuEmDjjJq5aEsDBk0=w2400\" /> </a>\r\n<p class=\"text-center\">Great food ,good dish</p>\r\n</div>\r\n<div class=\"col-lg-6\"><a href=\"https://lh3.googleusercontent.com/mY9NCkfnFyqMHSof3RyoFPtzPFMc71lAlA-NoBsULF6GmBaGnL2DfNetl8x6xNMTGFJYyDTxcwqrknW0QQsGWj-RD2Ak1A00RmnnET5fIsBYHf3m2P5PJB87Rxml3lrRUDTD8cpL2Sg=w2400\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/mY9NCkfnFyqMHSof3RyoFPtzPFMc71lAlA-NoBsULF6GmBaGnL2DfNetl8x6xNMTGFJYyDTxcwqrknW0QQsGWj-RD2Ak1A00RmnnET5fIsBYHf3m2P5PJB87Rxml3lrRUDTD8cpL2Sg=w2400\" /> </a>\r\n<p class=\"text-center\">The view near by the restuarent</p>\r\n</div>\r\n<!-- ////// Text about cha-learm-krung ///// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">I will say \"my apologize\" to the owner!</h1>\r\n<p class=\"text-center\"><strong> The </strong> afternoon after we got out from <strong>Chai Nat Bird Park</strong> we stop by the local restuarent call \"<strong>Cha-Lerm-Krung(เฉลิมกรุง)</strong>\" it is I suppose very near by \"<strong>Goodwill Caf&eacute;</strong>\".I am so apologize to the owner that I cannot find your place on the google map as I want to put your place location to show in this write too. <br /> we having a very relax atmosphere sitting close to the river in the small side road local restuarent while we drink some beer.There were 3 men and 2 ladies on the opposite table and 2 ladies at the table next to our. <br />The wind is seem to be picking up so strong than normal and make all those unwell hanging thing fallen out from the wall.the other table behind me was 10 of the students awaiting and take a photo having fun together with their group.<br /> My partner was order \"fried shrimp with basil leaves\" , \"spycy soup with seafood(Tom-Yum-Ta-Lay)\" and three dishes of rice while we were starving.a very few moment after(as you know that it is not too many order await) there\'s come our food and it the time to eat.before I get start. but wait! there were something which is not supposed to be in there but it is in that dish some \"pork meat\"! me and my partner we not eat beef or meat(we not eat big animal) we rejected it after we found out.my partner told this to the cook and very soon they made another dish for us which is make me feel really appreciate.<br /> We eat a lot and finish our dish in just like a lightning! 20 minute after we left the place and go to the resort call \"<strong>Bank Resort</strong>\" as we saw the sign earlier on the way we got here. I can\'t believe that I forgot to post the location of the place where I eat as I always done this! well I will do it on my next post if I go there again.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////	END OF text //////// --> <!-- ///////// Bank resort ///////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bank Resort</h1>\r\n<p class=\"text-center\"><strong> แบ้งค์รีสอร์ท </strong></p>\r\n<a href=\"https://photos.app.goo.gl/EynmJWWvtfQ9qVB57\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/-EVcgjQxF4Pmnp4DsKiKGUna2aQv1xtqTKD95sqSF7J0JRexgVHhoEr-BteA1sCHZ6O2nu2RmET38LbVT-JZHmIThZTJeiR__L_bQ__h7ZUNiIrvhZ0wiHKpgd0FoOtPKfRciqdY6Bo=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Bank Resort </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////// show map of Bank resort ////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bank resort</h1>\r\n<p><strong>แบ้งค์รีสอร์ท</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.7989053253027!2d100.14068671415049!3d15.169384589442219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e196237ecc8981%3A0x6f2546461165a4e8!2sBank+Resort!5e0!3m2!1sen!2sth!4v1560255551628!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Bank resort </strong> on google map.</p>\r\n<p><strong>This Resort</strong> is seem to be a very beautiful little house that set by a local.<br /> <strong>Look and feel :</strong> it is wooden build of the whole thing.good looking and functional toilet which is including hot shower(is it Thailand not hot enough? so you will need a hot shower hah!).<br /> <strong>Location :</strong> it is not hard to find this place at all if you can read what I\'ve write in this page if your mobile phone can use google map or even you\'re walking on the side road.it is a little bit hidden from the road to get here but there were plenty of space in their area so do not worry about your car park when you get here.<br /> <strong>what do we say : </strong> not a bad place to spent another night here in <em>Chai Nat</em>. 550 Thaibath or 17.59 USD.(1 usd = 31.28 THB. exchange rate on 11 june 2019) is quite expensive than any other resort that we have paid on the whole trip! anywhere it is more than just \"okay\" in the word if we about to compare a few resort that we were ask for in \"TAAK\" province <br />next morning after we have some coffee we go to do a little bit of sign seeing in <strong>Chai Nat </strong> drive along the road and take some photo again as something we should do.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////// END OF Bank resort ////// --> <!-- //////// bung kra-jub yai START/////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">See more photo</h1>\r\n<p class=\"text-center\"><strong> Bueng-Kra-Jub-Yai(บึงกระจับใหญ่) </strong></p>\r\n<a href=\"https://photos.app.goo.gl/9CsYHdJZA59NW4KF8\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/q160oZDG3KO8SnIhvHo1UFWAn-C1l80CHK9XDMfErLkYYxKyTdrSii4KI3n9vSlpj8cjcH-9c-kRMDPWiZYO2OmvbvFZqjbA2AwkVwG7L9nsZj_9PM-QASAplxRNXtXJ1ABf-3I-hmU=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Bueng-Kra-Jub-Yai(บึงกระจับใหญ่) </strong> Click on the picture to see more picture in this album.</p>\r\n<p><strong>You should NOT</strong> drive your car around this place because there\'s only a dirt road with fully of hole! if it rain you maybe will spent another night here because you will stuck! well ,maybe it will be not that bad, but who know?<br /> After we have enjoy ourself with the beauty of the bird around we drive again to <strong>\" Bueng Chawak Chaloem Phrakiet (บึงฉวากเฉลิมพระเกียรติ) \"</strong> in <em>Highway 3216 , Doem Bang , 72120 Doem Bang Nang Buat , Suphan Buri, Tambon Pak Nam, Amphoe Doem Bang Nang Buat, Chang Wat Suphan Buri 72120</em>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////// bung kra-jub yai END/////// --> <!-- /////// Bueng Chawak Chaloem Phrakiet START//// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bueng Chawak Chaloem Phrakiet</h1>\r\n<p class=\"text-center\"><strong> บึงฉวากเฉลิมพระเกียรติ </strong></p>\r\n<a href=\"https://photos.app.goo.gl/JNoMnz64kMWGZDYe7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/O65K7v0PrnGr4EpNsZoC4Vqvd3dIZTsBEmcCydF0ByfiKAdr0t6nfVPYwikX387QZonxs8uuxsepoXxXT3hRVfgrcDJqlTmuCnz6kTozAZq769N9bsyu3LvyksxjS00CRSbAjT4ClDg=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Name of the place </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////// Show map /////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Bueng Chawak Chaloem Phrakiet</h1>\r\n<p><strong>บึงฉวากเฉลิมพระเกียรติ</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3855.1715252855784!2d100.04592351414678!3d14.927534189594901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e185c78a0ea511%3A0xd8627a63d5fc1140!2sBueng+Chawak+Chaloem+Phrakiet!5e0!3m2!1sen!2sth!4v1560269786741!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Bueng Chawak Chaloem Phrakiet </strong> on google map.</p>\r\n<p>From here we go to <strong> Khun Dan Prakarn Chon Dam (เขื่อนขุนด่านปราการชล )</strong> in \"หมู่ที่ 2 บ้านคลองสีสุก หมู่ที่ 1 บ้านท่าด่าน Hin Tung, Mueang Nakhon Nayok District, Chang Wat Nakhon Nayok 26000\".</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////// Bueng Chawak Chaloem Phrakiet END//// --> <!-- ////////Khun Dan Prakarn Chon Dam START////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Khun Dan Prakarn Chon Dam</h1>\r\n<p class=\"text-center\"><strong> (เขื่อนขุนด่านปราการชล ) </strong></p>\r\n<a href=\"https://photos.app.goo.gl/epoumyZXXcn3jc6k8\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/__8Gdh6iV8LXyDnLHUA2tSSrERprvIL4MfaT5fsXvW8p76-mrzBisdx2SSJxDWNzxUtc4XfaQTJJofw03adwtCs_SAzoqPV1wFKWVH9sfKyDT0QHij5ZEvU4-3htGsiNtaOxNid669U=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Khun Dan Prakarn Chon Dam </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////////// show on the map //////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Khun Dan Prakarn Chon Dam</h1>\r\n<p><strong>(เขื่อนขุนด่านปราการชล )</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.940813399762!2d101.32022271413756!3d14.314870689984946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311db4bfbc7adfc7%3A0xc586dcf6cf6c2947!2sKhun+Dan+Prakarn+Chon+Dam!5e0!3m2!1sen!2sth!4v1560324097058!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Khun Dan Prakarn Chon Dam </strong> on google map.</p>\r\n<p><strong>We</strong> got here on the late of the day (5:00 p.m.)<br /> we got on the local but to go sign seeing around this cost 30 Thaibath/person on the 20-30 minute on the tour which is great so this way I can take some photo without having to walk(as you know I was drive for a long day I now I\'m just lazy).<br /> From here we go to <strong>Pull-Ta-Wun Resort(ภูตะวันรีสอร์ท)</strong> in <strong>Sarika, Mueang Nakhon Nayok District, <em>Nakhon Nayok 26000</em></strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////Khun Dan Prakarn Chon Dam END////// --> <!-- ///////// Pull-Ta-Wun Resort START //////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Pull-Ta-Wun Resort(ภูตะวันรีสอร์ท)</h1>\r\n<p class=\"text-center\"><strong> ภูตะวันรีสอร์ท </strong></p>\r\n<a href=\"https://photos.app.goo.gl/MWivqwHT3RZNWAvC8\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/emj3XIyYjHjazkmU98ccGwGbKr5w7eglUaF5uxd6fUFeHU_1N9kDRAegonlrVGfXKb-D6EPiDXp2DCjzBoJ4xFgXsxC1DSDKOJ0mw9UW3L5ghD_YfgzGkbgr8ECoMOHKgEPWMAzFHg4=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Pull-Ta-Wun </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////// Show map ////////////////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Pull-Ta-Wun</h1>\r\n<p><strong>ภูตะวันรีสอร์ท</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2734.0139442943105!2d101.2788467579838!3d14.283544004473903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311db3921d89d6c5%3A0xbd51c3a625c71e84!2z4Lig4Li54LiV4Liw4Lin4Lix4LiZ4Lij4Li14Liq4Lit4Lij4LmM4LiX!5e0!3m2!1sen!2sth!4v1560325967843!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Pull-Ta-Wun </strong> on google map.</p>\r\n<p>From here we go to <strong>\" Wang Ta Krai Waterfall (น้ำตกวังตะไคร้)\"</strong> in <strong>Hin Tung, Mueang Nakhon Nayok District, <em>Nakhon Nayok 26000</em></strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ///////// Pull-Ta-Wun Resort END ///////// --> <!-- /////////// Wang Ta Krai Waterfall ( น้ำตกวังตะไคร้ ) START ////-->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Wang Ta Krai Waterfall</h1>\r\n<p class=\"text-center\"><strong> น้ำตกวังตะไคร้ </strong></p>\r\n<a href=\"https://photos.app.goo.gl/7jdj9aVT8JqSP5Xw7\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/3ZCCho-9f4Vnj2mBfSndvkrvgEIpRwr4Zgc4jXIouzRSR_wnFxqW7mMg7TPuhwBA8A9FPcIta4efT5TAbhJRP_hQshdF4-urF__HLflcF4KJ0RXQC2aPRHG1X_KUCBCivjzpPs-8qRk=w2400\" /> </a>\r\n<p class=\"text-center\"><strong> Wang Ta Krai Waterfall </strong> Click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- ////////// Show on Map  /////////////// -->\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"text-center\">Wang Ta Krai Waterfall</h1>\r\n<p><strong>น้ำตกวังตะไคร้</strong></p>\r\n<div class=\"video-container\"><iframe style=\"border: 0;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.5832159873808!2d101.30399961413784!3d14.335625489971639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311db4fb9c27762b%3A0x873d594423497ae9!2sWang+Ta+Krai+Waterfall!5e0!3m2!1sen!2sth!4v1560326527760!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></div>\r\n<p class=\"text-center\"><strong> Wang Ta Krai Waterfall </strong> on google map.</p>\r\n<p><strong>We</strong> were here in the moning of (4-june-2019). it is very nice and quiet place to be(well it still in the morning ,right?).luckily we\'re not come here for swim From here we go to <strong>Haew Na-Rok Waterfall(น้ำตกเหวนรก)</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- /////////// Wang Ta Krai Waterfall (น้ำตกวังตะไคร้) END ////--> <!-- //////////////////////////// Show day 4-June-2019 ////////////// --> <!-- //////////////////// น้ำตกเหวนรก ///////////////////////// -->\r\n<div class=\"col-lg-10\">\r\n<p>&nbsp;</p>\r\n<h1 class=\"text-center\">Haew Na-Rok Waterfall</h1>\r\n<a href=\"https://photos.app.goo.gl/HJ48mCT4vD4qWs8Q6\" target=\"_blank\"> <img class=\"responsive\" src=\"https://lh3.googleusercontent.com/QABvLiDIv7iOdYupPR8zsA13vyY5K9izVkj2hugcvlWxws8fgntULWi6LjaSemWrH42H2G1ROnh1ULKFk9kL8G6hZwRlJXFUn-y4_0qCDBR4WY4V4cxs1oLJ1UD0k1oKGcVF4jbA4s4=w2400\" /> </a>\r\n<p class=\"text-center\">Haew Na-Rok water fall click on the picture to see more picture in this album.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<!-- //////////// End of Haew na rok water fall //--> <!-- ////////////////////////////////////////////////////////////////////////// --> <!--do not delete this line--></div>\r\n<!--end of div.row--></div>\r\n<!--end of div.container wrapper--></section>', '2019-06-13 06:13:11', '2019-06-13 06:18:06', 0, 1, 1, 0, '', '0000-00-00', 'farookphuket fuu time', '1.46.166.16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `TBL_ARTICLE_HISTORY`
--

CREATE TABLE `TBL_ARTICLE_HISTORY` (
  `his_id` int(11) NOT NULL,
  `his_title` varchar(300) NOT NULL,
  `his_body` text NOT NULL,
  `ar_id` int(11) NOT NULL,
  `view_ip` varchar(25) NOT NULL,
  `date_of_view` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Kept the history';

--
-- Dumping data for table `TBL_ARTICLE_HISTORY`
--

INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(1, 'New view count for 1! on 2018-05-15 by IP 183.89.49.193', 'The IP 183.89.49.193 has view article id 1 on 2018-05-15 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 1, '183.89.49.193', '2018-05-15'),
(2, 'New view count for 2! on 2018-05-15 by IP 183.89.49.193', 'The IP 183.89.49.193 has view article id 2 on 2018-05-15 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 2, '183.89.49.193', '2018-05-15'),
(3, 'New view count for 3! on 2018-05-15 by IP 183.89.49.193', 'The IP 183.89.49.193 has view article id 3 on 2018-05-15 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 3, '183.89.49.193', '2018-05-15'),
(4, 'New view count for 3! on 2018-05-15 by IP 1.47.203.218', 'The IP 1.47.203.218 has view article id 3 on 2018-05-15 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 3, '1.47.203.218', '2018-05-15'),
(5, 'New view count for 1! on 2018-05-15 by IP 1.47.203.218', 'The IP 1.47.203.218 has view article id 1 on 2018-05-15 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 1, '1.47.203.218', '2018-05-15'),
(6, 'New view count for 1! on 2018-05-16 by IP 1.47.203.218', 'The IP 1.47.203.218 has view article id 1 on 2018-05-16 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 1, '1.47.203.218', '2018-05-16'),
(7, 'New view count for 3! on 2018-05-16 by IP 1.47.203.218', 'The IP 1.47.203.218 has view article id 3 on 2018-05-16 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 3, '1.47.203.218', '2018-05-16'),
(8, 'New view count for 3! on 2018-05-17 by IP 1.47.203.218', 'The IP 1.47.203.218 has view article id 3 on 2018-05-17 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 3, '1.47.203.218', '2018-05-17'),
(9, 'New view count for 4! on 2018-05-18 by IP 183.89.48.63', 'The IP 183.89.48.63 has view article id 4 on 2018-05-18 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 4, '183.89.48.63', '2018-05-18'),
(10, 'New view count for 3! on 2018-05-18 by IP 183.89.48.63', 'The IP 183.89.48.63 has view article id 3 on 2018-05-18 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 3, '183.89.48.63', '2018-05-18'),
(11, 'New view count for 4! on 2018-05-19 by IP 183.89.48.63', 'The IP 183.89.48.63 has view article id 4 on 2018-05-19 using os Linux browser Browser Opera version 53.0.2907.37 by user Farook Fuu Time', 4, '183.89.48.63', '2018-05-19'),
(12, 'New view count for 7! on 2018-05-20 by IP 1.47.34.134', 'The IP 1.47.34.134 has view article id 7 on 2018-05-20 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 7, '1.47.34.134', '2018-05-20'),
(13, 'New view count for 6! on 2018-05-23 by IP 183.88.110.240', 'The IP 183.88.110.240 has view article id 6 on 2018-05-23 using os Linux browser Browser Opera version 53.0.2907.57 by user test', 6, '183.88.110.240', '2018-05-23'),
(14, 'New view count for 4! on 2018-05-23 by IP 183.88.110.240', 'The IP 183.88.110.240 has view article id 4 on 2018-05-23 using os Linux browser Browser Opera version 53.0.2907.57 by user Anonymous', 4, '183.88.110.240', '2018-05-23'),
(15, 'New view count for 8! on 2018-05-23 by IP 183.88.110.240', 'The IP 183.88.110.240 has view article id 8 on 2018-05-23 using os Linux browser Browser Opera version 53.0.2907.57 by user Anonymous', 8, '183.88.110.240', '2018-05-23'),
(16, 'New view count for 3! on 2018-05-23 by IP 183.88.110.240', 'The IP 183.88.110.240 has view article id 3 on 2018-05-23 using os Linux browser Browser Opera version 53.0.2907.57 by user Anonymous', 3, '183.88.110.240', '2018-05-23'),
(17, 'New view count for 4! on 2018-05-24 by IP 183.88.110.240', 'The IP 183.88.110.240 has view article id 4 on 2018-05-24 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 4, '183.88.110.240', '2018-05-24'),
(18, 'New view count for 4! on 2018-05-29 by IP 183.89.53.93', 'The IP 183.89.53.93 has view article id 4 on 2018-05-29 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 4, '183.89.53.93', '2018-05-29'),
(19, 'New view count for 19! on 2018-05-31 by IP 183.89.53.93', 'The IP 183.89.53.93 has view article id 19 on 2018-05-31 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 19, '183.89.53.93', '2018-05-31'),
(20, 'New view count for 17! on 2018-05-31 by IP 183.89.53.93', 'The IP 183.89.53.93 has view article id 17 on 2018-05-31 using os Linux browser Browser Firefox version 60.0 by user test', 17, '183.89.53.93', '2018-05-31'),
(21, 'New view count for 13! on 2018-05-31 by IP 183.89.53.93', 'The IP 183.89.53.93 has view article id 13 on 2018-05-31 using os Linux browser Browser Firefox version 60.0 by user test', 13, '183.89.53.93', '2018-05-31'),
(22, 'New view count for 20! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 20 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 20, '183.89.53.115', '2018-06-04'),
(23, 'New view count for 14! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 14 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 14, '183.89.53.115', '2018-06-04'),
(24, 'New view count for 16! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 16 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 16, '183.89.53.115', '2018-06-04'),
(25, 'New view count for 13! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 13 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 13, '183.89.53.115', '2018-06-04'),
(26, 'New view count for 11! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 11 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 11, '183.89.53.115', '2018-06-04'),
(27, 'New view count for 18! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 18 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 18, '183.89.53.115', '2018-06-04'),
(28, 'New view count for 17! on 2018-06-04 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 17 on 2018-06-04 using os Linux browser Browser Firefox version 60.0 by user test', 17, '183.89.53.115', '2018-06-04'),
(29, 'New view count for 22! on 2018-06-05 by IP 183.89.53.115', 'The IP 183.89.53.115 has view article id 22 on 2018-06-05 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 22, '183.89.53.115', '2018-06-05'),
(30, 'New view count for 28! on 2018-07-14 by IP 1.46.46.134', 'The IP 1.46.46.134 has view article id 28 on 2018-07-14 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 28, '1.46.46.134', '2018-07-14'),
(31, 'New view count for 27! on 2018-07-14 by IP 1.46.46.134', 'The IP 1.46.46.134 has view article id 27 on 2018-07-14 using os Linux browser Browser Firefox version 60.0 by user Anonymous', 27, '1.46.46.134', '2018-07-14'),
(32, 'New view count for 14! on 2018-07-15 by IP 207.46.13.212', 'The IP 207.46.13.212 has view article id 14 on 2018-07-15 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '207.46.13.212', '2018-07-15'),
(33, 'New view count for 26! on 2018-07-15 by IP 184.22.163.105', 'The IP 184.22.163.105 has view article id 26 on 2018-07-15 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 26, '184.22.163.105', '2018-07-15'),
(34, 'New view count for 28! on 2018-07-16 by IP 223.207.147.83', 'The IP 223.207.147.83 has view article id 28 on 2018-07-16 using os Android browser Browser Chrome version 66.0.3359.158 by user Anonymous', 28, '223.207.147.83', '2018-07-16'),
(35, 'New view count for 19! on 2018-07-16 by IP 66.249.79.5', 'The IP 66.249.79.5 has view article id 19 on 2018-07-16 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.5', '2018-07-16'),
(36, 'New view count for 2! on 2018-07-17 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-07-17 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-07-17'),
(37, 'New view count for 26! on 2018-07-17 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 26 on 2018-07-17 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '178.154.200.36', '2018-07-17'),
(38, 'New view count for 27! on 2018-07-17 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 27 on 2018-07-17 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '178.154.200.36', '2018-07-17'),
(39, 'New view count for 26! on 2018-07-17 by IP 180.183.155.113', 'The IP 180.183.155.113 has view article id 26 on 2018-07-17 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 26, '180.183.155.113', '2018-07-17'),
(40, 'New view count for 13! on 2018-07-17 by IP 157.55.39.224', 'The IP 157.55.39.224 has view article id 13 on 2018-07-17 using os Unknown Platform browser Browser  version  by user Anonymous', 13, '157.55.39.224', '2018-07-17'),
(41, 'New view count for 2! on 2018-07-19 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-07-19 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-07-19'),
(42, 'New view count for 3! on 2018-07-19 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 3 on 2018-07-19 using os Android browser Browser  version  by user Anonymous', 3, '66.249.79.1', '2018-07-19'),
(43, 'New view count for 1! on 2018-07-22 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 1 on 2018-07-22 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '178.154.200.36', '2018-07-22'),
(44, 'New view count for 2! on 2018-07-22 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-07-22 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-07-22'),
(45, 'New view count for 4! on 2018-07-22 by IP 180.76.15.19', 'The IP 180.76.15.19 has view article id 4 on 2018-07-22 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '180.76.15.19', '2018-07-22'),
(46, 'New view count for 4! on 2018-07-23 by IP 180.76.15.18', 'The IP 180.76.15.18 has view article id 4 on 2018-07-23 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '180.76.15.18', '2018-07-23'),
(47, 'New view count for 18! on 2018-07-23 by IP 180.76.15.152', 'The IP 180.76.15.152 has view article id 18 on 2018-07-23 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '180.76.15.152', '2018-07-23'),
(48, 'New view count for 24! on 2018-07-23 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 24 on 2018-07-23 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.31', '2018-07-23'),
(49, 'New view count for 26! on 2018-07-23 by IP 49.229.88.204', 'The IP 49.229.88.204 has view article id 26 on 2018-07-23 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 26, '49.229.88.204', '2018-07-23'),
(50, 'New view count for 17! on 2018-07-24 by IP 180.76.15.16', 'The IP 180.76.15.16 has view article id 17 on 2018-07-24 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '180.76.15.16', '2018-07-24'),
(51, 'New view count for 20! on 2018-07-24 by IP 158.69.225.33', 'The IP 158.69.225.33 has view article id 20 on 2018-07-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '158.69.225.33', '2018-07-24'),
(52, 'New view count for 22! on 2018-07-24 by IP 158.69.225.33', 'The IP 158.69.225.33 has view article id 22 on 2018-07-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '158.69.225.33', '2018-07-24'),
(53, 'New view count for 25! on 2018-07-24 by IP 158.69.225.33', 'The IP 158.69.225.33 has view article id 25 on 2018-07-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '158.69.225.33', '2018-07-24'),
(54, 'New view count for 23! on 2018-07-24 by IP 158.69.225.33', 'The IP 158.69.225.33 has view article id 23 on 2018-07-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '158.69.225.33', '2018-07-24'),
(55, 'New view count for 19! on 2018-07-24 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 19 on 2018-07-24 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.1', '2018-07-24'),
(56, 'New view count for 2! on 2018-07-24 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 2 on 2018-07-24 using os Android browser Browser  version  by user Anonymous', 2, '66.249.79.31', '2018-07-24'),
(57, 'New view count for 16! on 2018-07-24 by IP 207.46.13.160', 'The IP 207.46.13.160 has view article id 16 on 2018-07-24 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.160', '2018-07-24'),
(58, 'New view count for 17! on 2018-07-25 by IP 180.76.15.158', 'The IP 180.76.15.158 has view article id 17 on 2018-07-25 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '180.76.15.158', '2018-07-25'),
(59, 'New view count for 16! on 2018-07-26 by IP 180.76.15.144', 'The IP 180.76.15.144 has view article id 16 on 2018-07-26 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '180.76.15.144', '2018-07-26'),
(60, 'New view count for 25! on 2018-07-26 by IP 180.76.15.150', 'The IP 180.76.15.150 has view article id 25 on 2018-07-26 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.150', '2018-07-26'),
(61, 'New view count for 18! on 2018-07-27 by IP 40.77.167.77', 'The IP 40.77.167.77 has view article id 18 on 2018-07-27 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.77', '2018-07-27'),
(62, 'New view count for 17! on 2018-07-27 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 17 on 2018-07-27 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.111', '2018-07-27'),
(63, 'New view count for 22! on 2018-07-27 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 22 on 2018-07-27 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '40.77.167.111', '2018-07-27'),
(64, 'New view count for 23! on 2018-07-27 by IP 207.46.13.118', 'The IP 207.46.13.118 has view article id 23 on 2018-07-27 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.118', '2018-07-27'),
(65, 'New view count for 28! on 2018-07-27 by IP 1.46.12.92', 'The IP 1.46.12.92 has view article id 28 on 2018-07-27 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '1.46.12.92', '2018-07-27'),
(66, 'New view count for 19! on 2018-07-28 by IP 157.55.39.210', 'The IP 157.55.39.210 has view article id 19 on 2018-07-28 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '157.55.39.210', '2018-07-28'),
(67, 'New view count for 25! on 2018-07-28 by IP 66.249.79.5', 'The IP 66.249.79.5 has view article id 25 on 2018-07-28 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.5', '2018-07-28'),
(68, 'New view count for 28! on 2018-07-28 by IP 1.46.12.92', 'The IP 1.46.12.92 has view article id 28 on 2018-07-28 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '1.46.12.92', '2018-07-28'),
(69, 'New view count for 28! on 2018-07-28 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 28 on 2018-07-28 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.1', '2018-07-28'),
(70, 'New view count for 28! on 2018-07-28 by IP 1.46.12.92', 'The IP 1.46.12.92 has view article id 28 on 2018-07-28 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '1.46.12.92', '2018-07-28'),
(71, 'New view count for 25! on 2018-07-28 by IP 40.77.167.196', 'The IP 40.77.167.196 has view article id 25 on 2018-07-28 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.196', '2018-07-28'),
(72, 'New view count for 15! on 2018-07-30 by IP 40.77.167.192', 'The IP 40.77.167.192 has view article id 15 on 2018-07-30 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.192', '2018-07-30'),
(73, 'New view count for 7! on 2018-07-31 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 7 on 2018-07-31 using os Unknown Platform browser Browser  version  by user Anonymous', 7, '66.249.79.1', '2018-07-31'),
(74, 'New view count for 6! on 2018-07-31 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 6 on 2018-07-31 using os Unknown Platform browser Browser  version  by user Anonymous', 6, '66.249.79.31', '2018-07-31'),
(75, 'New view count for 28! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 28 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 28, '104.192.74.38', '2018-07-31'),
(76, 'New view count for 27! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 27 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 27, '104.192.74.38', '2018-07-31'),
(77, 'New view count for 26! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 26 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 26, '104.192.74.38', '2018-07-31'),
(78, 'New view count for 25! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 25 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 25, '104.192.74.38', '2018-07-31'),
(79, 'New view count for 24! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 24 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 24, '104.192.74.38', '2018-07-31'),
(80, 'New view count for 23! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 23 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 23, '104.192.74.38', '2018-07-31'),
(81, 'New view count for 20! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 20 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 20, '104.192.74.38', '2018-07-31'),
(82, 'New view count for 22! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 22 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 22, '104.192.74.38', '2018-07-31'),
(83, 'New view count for 19! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 19 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 19, '104.192.74.38', '2018-07-31'),
(84, 'New view count for 18! on 2018-07-31 by IP 104.192.74.38', 'The IP 104.192.74.38 has view article id 18 on 2018-07-31 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 18, '104.192.74.38', '2018-07-31'),
(85, 'New view count for 4! on 2018-07-31 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 4 on 2018-07-31 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '66.249.79.1', '2018-07-31'),
(86, 'New view count for 26! on 2018-08-01 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 26 on 2018-08-01 using os Android browser Browser  version  by user Anonymous', 26, '66.249.79.31', '2018-08-01'),
(87, 'New view count for 7! on 2018-08-01 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 7 on 2018-08-01 using os Android browser Browser  version  by user Anonymous', 7, '66.249.79.99', '2018-08-01'),
(88, 'New view count for 28! on 2018-08-01 by IP 223.104.31.145', 'The IP 223.104.31.145 has view article id 28 on 2018-08-01 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '223.104.31.145', '2018-08-01'),
(89, 'New view count for 28! on 2018-08-03 by IP 171.112.231.171', 'The IP 171.112.231.171 has view article id 28 on 2018-08-03 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '171.112.231.171', '2018-08-03'),
(90, 'New view count for 15! on 2018-08-05 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 15 on 2018-08-05 using os Android browser Browser  version  by user Anonymous', 15, '66.249.79.31', '2018-08-05'),
(91, 'New view count for 28! on 2018-08-05 by IP 171.112.231.171', 'The IP 171.112.231.171 has view article id 28 on 2018-08-05 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '171.112.231.171', '2018-08-05'),
(92, 'New view count for 26! on 2018-08-05 by IP 40.77.167.107', 'The IP 40.77.167.107 has view article id 26 on 2018-08-05 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.107', '2018-08-05'),
(93, 'New view count for 28! on 2018-08-05 by IP 117.136.83.31', 'The IP 117.136.83.31 has view article id 28 on 2018-08-05 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '117.136.83.31', '2018-08-05'),
(94, 'New view count for 24! on 2018-08-06 by IP 207.46.13.151', 'The IP 207.46.13.151 has view article id 24 on 2018-08-06 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.151', '2018-08-06'),
(95, 'New view count for 15! on 2018-08-07 by IP 23.229.43.154', 'The IP 23.229.43.154 has view article id 15 on 2018-08-07 using os Windows 7 browser Browser Opera version 51.0.2830.55 by user Anonymous', 15, '23.229.43.154', '2018-08-07'),
(96, 'New view count for 1! on 2018-08-07 by IP 195.201.140.232', 'The IP 195.201.140.232 has view article id 1 on 2018-08-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '195.201.140.232', '2018-08-07'),
(97, 'New view count for 2! on 2018-08-07 by IP 195.201.140.232', 'The IP 195.201.140.232 has view article id 2 on 2018-08-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '195.201.140.232', '2018-08-07'),
(98, 'New view count for 3! on 2018-08-07 by IP 195.201.140.232', 'The IP 195.201.140.232 has view article id 3 on 2018-08-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '195.201.140.232', '2018-08-07'),
(99, 'New view count for 4! on 2018-08-07 by IP 195.201.140.232', 'The IP 195.201.140.232 has view article id 4 on 2018-08-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '195.201.140.232', '2018-08-07'),
(100, 'New view count for 6! on 2018-08-07 by IP 195.201.140.232', 'The IP 195.201.140.232 has view article id 6 on 2018-08-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '195.201.140.232', '2018-08-07'),
(101, 'New view count for 25! on 2018-08-07 by IP 1.47.101.90', 'The IP 1.47.101.90 has view article id 25 on 2018-08-07 using os Linux browser Browser Firefox version 61.0 by user test', 25, '1.47.101.90', '2018-08-07'),
(102, 'New view count for 15! on 2018-08-07 by IP 1.47.101.90', 'The IP 1.47.101.90 has view article id 15 on 2018-08-07 using os Linux browser Browser Firefox version 61.0 by user test', 15, '1.47.101.90', '2018-08-07'),
(103, 'New view count for 27! on 2018-08-08 by IP 66.249.69.67', 'The IP 66.249.69.67 has view article id 27 on 2018-08-08 using os Android browser Browser  version  by user Anonymous', 27, '66.249.69.67', '2018-08-08'),
(104, 'New view count for 2! on 2018-08-08 by IP 37.9.113.196', 'The IP 37.9.113.196 has view article id 2 on 2018-08-08 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '37.9.113.196', '2018-08-08'),
(105, 'New view count for 4! on 2018-08-08 by IP 141.8.142.102', 'The IP 141.8.142.102 has view article id 4 on 2018-08-08 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '141.8.142.102', '2018-08-08'),
(106, 'New view count for 29! on 2018-08-09 by IP 1.47.107.61', 'The IP 1.47.107.61 has view article id 29 on 2018-08-09 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 29, '1.47.107.61', '2018-08-09'),
(107, 'New view count for 29! on 2018-08-09 by IP 211.249.40.13', 'The IP 211.249.40.13 has view article id 29 on 2018-08-09 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '211.249.40.13', '2018-08-09'),
(108, 'New view count for 29! on 2018-08-09 by IP 1.47.107.61', 'The IP 1.47.107.61 has view article id 29 on 2018-08-09 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 29, '1.47.107.61', '2018-08-09'),
(109, 'New view count for 27! on 2018-08-09 by IP 40.77.167.51', 'The IP 40.77.167.51 has view article id 27 on 2018-08-09 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '40.77.167.51', '2018-08-09'),
(110, 'New view count for 4! on 2018-08-09 by IP 66.249.79.5', 'The IP 66.249.79.5 has view article id 4 on 2018-08-09 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.5', '2018-08-09'),
(111, 'New view count for 28! on 2018-08-09 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 28 on 2018-08-09 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.1', '2018-08-09'),
(112, 'New view count for 20! on 2018-08-09 by IP 157.55.39.101', 'The IP 157.55.39.101 has view article id 20 on 2018-08-09 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.101', '2018-08-09'),
(113, 'New view count for 4! on 2018-08-09 by IP 66.249.79.31', 'The IP 66.249.79.31 has view article id 4 on 2018-08-09 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.31', '2018-08-09'),
(114, 'New view count for 20! on 2018-08-09 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 20 on 2018-08-09 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.127', '2018-08-09'),
(115, 'New view count for 23! on 2018-08-10 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 23 on 2018-08-10 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.96', '2018-08-10'),
(116, 'New view count for 7! on 2018-08-10 by IP 94.154.239.69', 'The IP 94.154.239.69 has view article id 7 on 2018-08-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '94.154.239.69', '2018-08-10'),
(117, 'New view count for 28! on 2018-08-11 by IP 40.77.167.187', 'The IP 40.77.167.187 has view article id 28 on 2018-08-11 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '40.77.167.187', '2018-08-11'),
(118, 'New view count for 29! on 2018-08-12 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 29 on 2018-08-12 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '178.154.200.36', '2018-08-12'),
(119, 'New view count for 2! on 2018-08-12 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-08-12 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-08-12'),
(120, 'New view count for 19! on 2018-08-13 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 19 on 2018-08-13 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.99', '2018-08-13'),
(121, 'New view count for 19! on 2018-08-13 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 19 on 2018-08-13 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.127', '2018-08-13'),
(122, 'New view count for 23! on 2018-08-13 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 23 on 2018-08-13 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '66.249.79.99', '2018-08-13'),
(123, 'New view count for 9! on 2018-08-14 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 9 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 9, '66.249.79.96', '2018-08-14'),
(124, 'New view count for 29! on 2018-08-14 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 29 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '66.249.79.127', '2018-08-14'),
(125, 'New view count for 10! on 2018-08-14 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 10 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 10, '66.249.79.127', '2018-08-14'),
(126, 'New view count for 12! on 2018-08-14 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 12 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 12, '66.249.79.99', '2018-08-14'),
(127, 'New view count for 11! on 2018-08-14 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 11 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 11, '66.249.79.127', '2018-08-14'),
(128, 'New view count for 18! on 2018-08-14 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 18 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '66.249.79.96', '2018-08-14'),
(129, 'New view count for 29! on 2018-08-14 by IP 211.249.40.10', 'The IP 211.249.40.10 has view article id 29 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '211.249.40.10', '2018-08-14'),
(130, 'New view count for 29! on 2018-08-14 by IP 1.47.1.75', 'The IP 1.47.1.75 has view article id 29 on 2018-08-14 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 29, '1.47.1.75', '2018-08-14'),
(131, 'New view count for 26! on 2018-08-14 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 26 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '66.249.79.127', '2018-08-14'),
(132, 'New view count for 19! on 2018-08-14 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 19 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '66.249.79.99', '2018-08-14'),
(133, 'New view count for 15! on 2018-08-14 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 15 on 2018-08-14 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '66.249.79.99', '2018-08-14'),
(134, 'New view count for 28! on 2018-08-14 by IP 1.46.198.232', 'The IP 1.46.198.232 has view article id 28 on 2018-08-14 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 28, '1.46.198.232', '2018-08-14'),
(135, 'New view count for 22! on 2018-08-15 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 22 on 2018-08-15 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '66.249.79.99', '2018-08-15'),
(136, 'New view count for 17! on 2018-08-15 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 17 on 2018-08-15 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '66.249.79.127', '2018-08-15'),
(137, 'New view count for 16! on 2018-08-15 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 16 on 2018-08-15 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '66.249.79.96', '2018-08-15'),
(138, 'New view count for 24! on 2018-08-15 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 24 on 2018-08-15 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '66.249.79.99', '2018-08-15'),
(139, 'New view count for 14! on 2018-08-15 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 14 on 2018-08-15 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '66.249.79.99', '2018-08-15'),
(140, 'New view count for 20! on 2018-08-16 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 20 on 2018-08-16 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '66.249.79.99', '2018-08-16'),
(141, 'New view count for 13! on 2018-08-16 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 13 on 2018-08-16 using os Unknown Platform browser Browser  version  by user Anonymous', 13, '66.249.79.96', '2018-08-16'),
(142, 'New view count for 16! on 2018-08-16 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 16 on 2018-08-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '145.239.92.38', '2018-08-16'),
(143, 'New view count for 17! on 2018-08-16 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 17 on 2018-08-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '145.239.92.38', '2018-08-16'),
(144, 'New view count for 26! on 2018-08-16 by IP 1.47.237.237', 'The IP 1.47.237.237 has view article id 26 on 2018-08-16 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 26, '1.47.237.237', '2018-08-16'),
(145, 'New view count for 8! on 2018-08-16 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 8 on 2018-08-16 using os Unknown Platform browser Browser  version  by user Anonymous', 8, '66.249.79.99', '2018-08-16'),
(146, 'New view count for 27! on 2018-08-16 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 27 on 2018-08-16 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '66.249.79.127', '2018-08-16'),
(147, 'New view count for 1! on 2018-08-17 by IP 66.249.79.95', 'The IP 66.249.79.95 has view article id 1 on 2018-08-17 using os Android browser Browser  version  by user Anonymous', 1, '66.249.79.95', '2018-08-17'),
(148, 'New view count for 26! on 2018-08-20 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 26 on 2018-08-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.76.171', '2018-08-20'),
(149, 'New view count for 26! on 2018-08-20 by IP 182.232.101.180', 'The IP 182.232.101.180 has view article id 26 on 2018-08-20 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 26, '182.232.101.180', '2018-08-20'),
(150, 'New view count for 25! on 2018-08-20 by IP 40.77.167.108', 'The IP 40.77.167.108 has view article id 25 on 2018-08-20 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.108', '2018-08-20'),
(151, 'New view count for 17! on 2018-08-24 by IP 157.55.39.246', 'The IP 157.55.39.246 has view article id 17 on 2018-08-24 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.246', '2018-08-24'),
(152, 'New view count for 22! on 2018-08-24 by IP 157.55.39.246', 'The IP 157.55.39.246 has view article id 22 on 2018-08-24 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '157.55.39.246', '2018-08-24'),
(153, 'New view count for 18! on 2018-08-24 by IP 157.55.39.88', 'The IP 157.55.39.88 has view article id 18 on 2018-08-24 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.88', '2018-08-24'),
(154, 'New view count for 18! on 2018-08-24 by IP 88.198.33.145', 'The IP 88.198.33.145 has view article id 18 on 2018-08-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '88.198.33.145', '2018-08-24'),
(155, 'New view count for 19! on 2018-08-24 by IP 88.198.33.145', 'The IP 88.198.33.145 has view article id 19 on 2018-08-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '88.198.33.145', '2018-08-24'),
(156, 'New view count for 20! on 2018-08-24 by IP 88.198.33.145', 'The IP 88.198.33.145 has view article id 20 on 2018-08-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '88.198.33.145', '2018-08-24'),
(157, 'New view count for 22! on 2018-08-24 by IP 88.198.33.145', 'The IP 88.198.33.145 has view article id 22 on 2018-08-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '88.198.33.145', '2018-08-24'),
(158, 'New view count for 15! on 2018-08-24 by IP 207.46.13.242', 'The IP 207.46.13.242 has view article id 15 on 2018-08-24 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '207.46.13.242', '2018-08-24'),
(159, 'New view count for 19! on 2018-08-24 by IP 66.249.79.67', 'The IP 66.249.79.67 has view article id 19 on 2018-08-24 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.67', '2018-08-24'),
(160, 'New view count for 27! on 2018-08-24 by IP 66.249.79.95', 'The IP 66.249.79.95 has view article id 27 on 2018-08-24 using os Android browser Browser  version  by user Anonymous', 27, '66.249.79.95', '2018-08-24'),
(161, 'New view count for 26! on 2018-08-26 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 26 on 2018-08-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.109', '2018-08-26'),
(162, 'New view count for 23! on 2018-08-27 by IP 95.91.13.15', 'The IP 95.91.13.15 has view article id 23 on 2018-08-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '95.91.13.15', '2018-08-27'),
(163, 'New view count for 16! on 2018-08-27 by IP 207.46.13.82', 'The IP 207.46.13.82 has view article id 16 on 2018-08-27 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.82', '2018-08-27'),
(164, 'New view count for 28! on 2018-08-28 by IP 183.89.49.42', 'The IP 183.89.49.42 has view article id 28 on 2018-08-28 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 28, '183.89.49.42', '2018-08-28'),
(165, 'New view count for 27! on 2018-08-28 by IP 183.89.49.42', 'The IP 183.89.49.42 has view article id 27 on 2018-08-28 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 27, '183.89.49.42', '2018-08-28'),
(166, 'New view count for 26! on 2018-08-28 by IP 66.249.79.67', 'The IP 66.249.79.67 has view article id 26 on 2018-08-28 using os Android browser Browser  version  by user Anonymous', 26, '66.249.79.67', '2018-08-28'),
(167, 'New view count for 20! on 2018-08-28 by IP 66.249.79.67', 'The IP 66.249.79.67 has view article id 20 on 2018-08-28 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.67', '2018-08-28'),
(168, 'New view count for 26! on 2018-08-28 by IP 223.24.190.184', 'The IP 223.24.190.184 has view article id 26 on 2018-08-28 using os Android browser Browser Chrome version 66.0.3359.126 by user Anonymous', 26, '223.24.190.184', '2018-08-28'),
(169, 'New view count for 27! on 2018-08-28 by IP 66.249.79.64', 'The IP 66.249.79.64 has view article id 27 on 2018-08-28 using os Android browser Browser  version  by user Anonymous', 27, '66.249.79.64', '2018-08-28'),
(170, 'New view count for 19! on 2018-08-29 by IP 180.76.15.7', 'The IP 180.76.15.7 has view article id 19 on 2018-08-29 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '180.76.15.7', '2018-08-29'),
(171, 'New view count for 3! on 2018-08-29 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 3 on 2018-08-29 using os Unknown Platform browser Browser  version  by user Anonymous', 3, '178.154.200.36', '2018-08-29'),
(172, 'New view count for 3! on 2018-08-29 by IP 66.249.79.67', 'The IP 66.249.79.67 has view article id 3 on 2018-08-29 using os Android browser Browser  version  by user Anonymous', 3, '66.249.79.67', '2018-08-29'),
(173, 'New view count for 26! on 2018-08-30 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 26 on 2018-08-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.11', '2018-08-30'),
(174, 'New view count for 28! on 2018-08-31 by IP 106.121.61.207', 'The IP 106.121.61.207 has view article id 28 on 2018-08-31 using os iOS browser Browser Safari version 604.1 by user Anonymous', 28, '106.121.61.207', '2018-08-31'),
(175, 'New view count for 19! on 2018-09-01 by IP 180.76.15.152', 'The IP 180.76.15.152 has view article id 19 on 2018-09-01 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '180.76.15.152', '2018-09-01'),
(176, 'New view count for 29! on 2018-09-01 by IP 176.115.96.204', 'The IP 176.115.96.204 has view article id 29 on 2018-09-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '176.115.96.204', '2018-09-01'),
(177, 'New view count for 26! on 2018-09-02 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 26 on 2018-09-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.168', '2018-09-02'),
(178, 'New view count for 13! on 2018-09-03 by IP 5.45.207.52', 'The IP 5.45.207.52 has view article id 13 on 2018-09-03 using os Unknown Platform browser Browser  version  by user Anonymous', 13, '5.45.207.52', '2018-09-03'),
(179, 'New view count for 26! on 2018-09-04 by IP 77.75.78.171', 'The IP 77.75.78.171 has view article id 26 on 2018-09-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.171', '2018-09-04'),
(180, 'New view count for 8! on 2018-09-04 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 8 on 2018-09-04 using os Unknown Platform browser Browser  version  by user Anonymous', 8, '178.154.200.36', '2018-09-04'),
(181, 'New view count for 18! on 2018-09-04 by IP 1.47.107.200', 'The IP 1.47.107.200 has view article id 18 on 2018-09-04 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 18, '1.47.107.200', '2018-09-04'),
(182, 'New view count for 14! on 2018-09-04 by IP 1.47.107.200', 'The IP 1.47.107.200 has view article id 14 on 2018-09-04 using os Linux browser Browser Firefox version 61.0 by user test', 14, '1.47.107.200', '2018-09-04'),
(183, 'New view count for 14! on 2018-09-04 by IP 37.9.113.53', 'The IP 37.9.113.53 has view article id 14 on 2018-09-04 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '37.9.113.53', '2018-09-04'),
(184, 'New view count for 24! on 2018-09-04 by IP 207.46.13.228', 'The IP 207.46.13.228 has view article id 24 on 2018-09-04 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.228', '2018-09-04'),
(185, 'New view count for 28! on 2018-09-04 by IP 1.47.239.192', 'The IP 1.47.239.192 has view article id 28 on 2018-09-04 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 28, '1.47.239.192', '2018-09-04'),
(186, 'New view count for 30! on 2018-09-04 by IP 1.47.239.192', 'The IP 1.47.239.192 has view article id 30 on 2018-09-04 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 30, '1.47.239.192', '2018-09-04'),
(187, 'New view count for 27! on 2018-09-05 by IP 157.55.39.211', 'The IP 157.55.39.211 has view article id 27 on 2018-09-05 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '157.55.39.211', '2018-09-05'),
(188, 'New view count for 23! on 2018-09-05 by IP 207.46.13.228', 'The IP 207.46.13.228 has view article id 23 on 2018-09-05 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.228', '2018-09-05'),
(189, 'New view count for 30! on 2018-09-05 by IP 1.47.175.228', 'The IP 1.47.175.228 has view article id 30 on 2018-09-05 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 30, '1.47.175.228', '2018-09-05'),
(190, 'New view count for 30! on 2018-09-05 by IP 66.102.6.221', 'The IP 66.102.6.221 has view article id 30 on 2018-09-05 using os Linux browser Browser Chrome version 56.0.2924.87 by user Anonymous', 30, '66.102.6.221', '2018-09-05'),
(191, 'New view count for 30! on 2018-09-05 by IP 72.14.199.128', 'The IP 72.14.199.128 has view article id 30 on 2018-09-05 using os Mac OS X browser Browser Chrome version 28.0.1500.71 by user Anonymous', 30, '72.14.199.128', '2018-09-05'),
(192, 'New view count for 30! on 2018-09-05 by IP 1.47.175.228', 'The IP 1.47.175.228 has view article id 30 on 2018-09-05 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 30, '1.47.175.228', '2018-09-05'),
(193, 'New view count for 30! on 2018-09-05 by IP 203.104.137.200', 'The IP 203.104.137.200 has view article id 30 on 2018-09-05 using os Unknown Platform browser Browser  version  by user Anonymous', 30, '203.104.137.200', '2018-09-05'),
(194, 'New view count for 30! on 2018-09-05 by IP 1.47.175.228', 'The IP 1.47.175.228 has view article id 30 on 2018-09-05 using os Android browser Browser Chrome version 68.0.3440.91 by user Anonymous', 30, '1.47.175.228', '2018-09-05'),
(195, 'New view count for 25! on 2018-09-05 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 25 on 2018-09-05 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.136', '2018-09-05'),
(196, 'New view count for 26! on 2018-09-05 by IP 1.47.175.228', 'The IP 1.47.175.228 has view article id 26 on 2018-09-05 using os Android browser Browser Chrome version 59.0.3071.125 by user Anonymous', 26, '1.47.175.228', '2018-09-05'),
(197, 'New view count for 30! on 2018-09-05 by IP 171.6.245.160', 'The IP 171.6.245.160 has view article id 30 on 2018-09-05 using os Linux browser Browser Firefox version 61.0 by user Anonymous', 30, '171.6.245.160', '2018-09-05'),
(198, 'New view count for 19! on 2018-09-07 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 19 on 2018-09-07 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.254', '2018-09-07'),
(199, 'New view count for 18! on 2018-09-07 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 18 on 2018-09-07 using os Android browser Browser  version  by user Anonymous', 18, '66.249.79.254', '2018-09-07'),
(200, 'New view count for 4! on 2018-09-07 by IP 66.249.79.228', 'The IP 66.249.79.228 has view article id 4 on 2018-09-07 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.228', '2018-09-07'),
(201, 'New view count for 26! on 2018-09-07 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 26 on 2018-09-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.79.54', '2018-09-07'),
(202, 'New view count for 16! on 2018-09-08 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 16 on 2018-09-08 using os Android browser Browser  version  by user Anonymous', 16, '66.249.79.254', '2018-09-08'),
(203, 'New view count for 20! on 2018-09-08 by IP 66.249.79.228', 'The IP 66.249.79.228 has view article id 20 on 2018-09-08 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.228', '2018-09-08'),
(204, 'New view count for 28! on 2018-09-08 by IP 207.46.13.146', 'The IP 207.46.13.146 has view article id 28 on 2018-09-08 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.146', '2018-09-08'),
(205, 'New view count for 24! on 2018-09-09 by IP 204.12.208.10', 'The IP 204.12.208.10 has view article id 24 on 2018-09-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '204.12.208.10', '2018-09-09'),
(206, 'New view count for 19! on 2018-09-10 by IP 157.55.39.74', 'The IP 157.55.39.74 has view article id 19 on 2018-09-10 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '157.55.39.74', '2018-09-10'),
(207, 'New view count for 14! on 2018-09-10 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 14 on 2018-09-10 using os Android browser Browser  version  by user Anonymous', 14, '66.249.79.254', '2018-09-10'),
(208, 'New view count for 1! on 2018-09-11 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 1 on 2018-09-11 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '178.154.200.36', '2018-09-11'),
(209, 'New view count for 23! on 2018-09-12 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 23 on 2018-09-12 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.254', '2018-09-12'),
(210, 'New view count for 28! on 2018-09-12 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 28 on 2018-09-12 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.254', '2018-09-12'),
(211, 'New view count for 31! on 2018-09-14 by IP 40.77.167.146', 'The IP 40.77.167.146 has view article id 31 on 2018-09-14 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.167.146', '2018-09-14'),
(212, 'New view count for 25! on 2018-09-15 by IP 5.9.61.101', 'The IP 5.9.61.101 has view article id 25 on 2018-09-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '5.9.61.101', '2018-09-15'),
(213, 'New view count for 31! on 2018-09-15 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 31 on 2018-09-15 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '178.154.200.36', '2018-09-15'),
(214, 'New view count for 31! on 2018-09-16 by IP 95.216.41.162', 'The IP 95.216.41.162 has view article id 31 on 2018-09-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '95.216.41.162', '2018-09-16'),
(215, 'New view count for 26! on 2018-09-17 by IP 180.76.15.5', 'The IP 180.76.15.5 has view article id 26 on 2018-09-17 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.5', '2018-09-17'),
(216, 'New view count for 25! on 2018-09-17 by IP 157.55.39.42', 'The IP 157.55.39.42 has view article id 25 on 2018-09-17 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.42', '2018-09-17'),
(217, 'New view count for 18! on 2018-09-17 by IP 165.231.51.25', 'The IP 165.231.51.25 has view article id 18 on 2018-09-17 using os Windows 7 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 18, '165.231.51.25', '2018-09-17');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(218, 'New view count for 25! on 2018-09-18 by IP 180.76.15.6', 'The IP 180.76.15.6 has view article id 25 on 2018-09-18 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.6', '2018-09-18'),
(219, 'New view count for 29! on 2018-09-18 by IP 5.45.207.52', 'The IP 5.45.207.52 has view article id 29 on 2018-09-18 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '5.45.207.52', '2018-09-18'),
(220, 'New view count for 18! on 2018-09-18 by IP 157.55.39.175', 'The IP 157.55.39.175 has view article id 18 on 2018-09-18 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.175', '2018-09-18'),
(221, 'New view count for 23! on 2018-09-18 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 23 on 2018-09-18 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '178.154.200.36', '2018-09-18'),
(222, 'New view count for 31! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 31 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 31, '167.114.90.32', '2018-09-20'),
(223, 'New view count for 29! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 29 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 29, '167.114.90.32', '2018-09-20'),
(224, 'New view count for 28! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 28 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 28, '167.114.90.32', '2018-09-20'),
(225, 'New view count for 27! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 27 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 27, '167.114.90.32', '2018-09-20'),
(226, 'New view count for 26! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 26 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 26, '167.114.90.32', '2018-09-20'),
(227, 'New view count for 25! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 25 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 25, '167.114.90.32', '2018-09-20'),
(228, 'New view count for 24! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 24 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 24, '167.114.90.32', '2018-09-20'),
(229, 'New view count for 23! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 23 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 23, '167.114.90.32', '2018-09-20'),
(230, 'New view count for 22! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 22 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 22, '167.114.90.32', '2018-09-20'),
(231, 'New view count for 20! on 2018-09-20 by IP 167.114.90.32', 'The IP 167.114.90.32 has view article id 20 on 2018-09-20 using os Windows 10 browser Browser Chrome version 52.0.2743.116 by user Anonymous', 20, '167.114.90.32', '2018-09-20'),
(232, 'New view count for 20! on 2018-09-20 by IP 180.76.15.28', 'The IP 180.76.15.28 has view article id 20 on 2018-09-20 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.28', '2018-09-20'),
(233, 'New view count for 31! on 2018-09-20 by IP 213.180.203.26', 'The IP 213.180.203.26 has view article id 31 on 2018-09-20 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '213.180.203.26', '2018-09-20'),
(234, 'New view count for 26! on 2018-09-21 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 26 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '144.76.96.236', '2018-09-21'),
(235, 'New view count for 31! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 31 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '159.69.117.172', '2018-09-21'),
(236, 'New view count for 29! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 29 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '159.69.117.172', '2018-09-21'),
(237, 'New view count for 28! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 28 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '159.69.117.172', '2018-09-21'),
(238, 'New view count for 27! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 27 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '159.69.117.172', '2018-09-21'),
(239, 'New view count for 26! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 26 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '159.69.117.172', '2018-09-21'),
(240, 'New view count for 25! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 25 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '159.69.117.172', '2018-09-21'),
(241, 'New view count for 24! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 24 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '159.69.117.172', '2018-09-21'),
(242, 'New view count for 23! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 23 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '159.69.117.172', '2018-09-21'),
(243, 'New view count for 22! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 22 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '159.69.117.172', '2018-09-21'),
(244, 'New view count for 20! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 20 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '159.69.117.172', '2018-09-21'),
(245, 'New view count for 2! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 2 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '159.69.117.172', '2018-09-21'),
(246, 'New view count for 30! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 30 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '159.69.117.172', '2018-09-21'),
(247, 'New view count for 15! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 15 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '159.69.117.172', '2018-09-21'),
(248, 'New view count for 14! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 14 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '159.69.117.172', '2018-09-21'),
(249, 'New view count for 13! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 13 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '159.69.117.172', '2018-09-21'),
(250, 'New view count for 12! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 12 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '159.69.117.172', '2018-09-21'),
(251, 'New view count for 11! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 11 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '159.69.117.172', '2018-09-21'),
(252, 'New view count for 10! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 10 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '159.69.117.172', '2018-09-21'),
(253, 'New view count for 9! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 9 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '159.69.117.172', '2018-09-21'),
(254, 'New view count for 8! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 8 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '159.69.117.172', '2018-09-21'),
(255, 'New view count for 6! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 6 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '159.69.117.172', '2018-09-21'),
(256, 'New view count for 4! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 4 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '159.69.117.172', '2018-09-21'),
(257, 'New view count for 3! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 3 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '159.69.117.172', '2018-09-21'),
(258, 'New view count for 1! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 1 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '159.69.117.172', '2018-09-21'),
(259, 'New view count for 18! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 18 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '159.69.117.172', '2018-09-21'),
(260, 'New view count for 19! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 19 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '159.69.117.172', '2018-09-21'),
(261, 'New view count for 17! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 17 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '159.69.117.172', '2018-09-21'),
(262, 'New view count for 16! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 16 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '159.69.117.172', '2018-09-21'),
(263, 'New view count for 7! on 2018-09-21 by IP 159.69.117.172', 'The IP 159.69.117.172 has view article id 7 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '159.69.117.172', '2018-09-21'),
(264, 'New view count for 26! on 2018-09-21 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 26 on 2018-09-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.76.167', '2018-09-21'),
(265, 'New view count for 25! on 2018-09-21 by IP 40.77.167.219', 'The IP 40.77.167.219 has view article id 25 on 2018-09-21 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.219', '2018-09-21'),
(266, 'New view count for 29! on 2018-09-22 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 29 on 2018-09-22 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '178.154.200.36', '2018-09-22'),
(267, 'New view count for 20! on 2018-09-22 by IP 157.55.39.81', 'The IP 157.55.39.81 has view article id 20 on 2018-09-22 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.81', '2018-09-22'),
(268, 'New view count for 31! on 2018-09-23 by IP 5.45.207.52', 'The IP 5.45.207.52 has view article id 31 on 2018-09-23 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '5.45.207.52', '2018-09-23'),
(269, 'New view count for 29! on 2018-09-23 by IP 180.76.15.143', 'The IP 180.76.15.143 has view article id 29 on 2018-09-23 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.143', '2018-09-23'),
(270, 'New view count for 30! on 2018-09-23 by IP 178.151.245.174', 'The IP 178.151.245.174 has view article id 30 on 2018-09-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '178.151.245.174', '2018-09-23'),
(271, 'New view count for 28! on 2018-09-24 by IP 5.9.70.117', 'The IP 5.9.70.117 has view article id 28 on 2018-09-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '5.9.70.117', '2018-09-24'),
(272, 'New view count for 14! on 2018-09-24 by IP 207.46.13.115', 'The IP 207.46.13.115 has view article id 14 on 2018-09-24 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '207.46.13.115', '2018-09-24'),
(273, 'New view count for 16! on 2018-09-25 by IP 66.249.79.254', 'The IP 66.249.79.254 has view article id 16 on 2018-09-25 using os Android browser Browser  version  by user Anonymous', 16, '66.249.79.254', '2018-09-25'),
(274, 'New view count for 29! on 2018-09-25 by IP 180.76.15.7', 'The IP 180.76.15.7 has view article id 29 on 2018-09-25 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.7', '2018-09-25'),
(275, 'New view count for 31! on 2018-09-26 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 31 on 2018-09-26 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '178.154.200.36', '2018-09-26'),
(276, 'New view count for 31! on 2018-09-26 by IP 66.249.79.224', 'The IP 66.249.79.224 has view article id 31 on 2018-09-26 using os Android browser Browser  version  by user Anonymous', 31, '66.249.79.224', '2018-09-26'),
(277, 'New view count for 31! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 31 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '159.69.117.173', '2018-09-26'),
(278, 'New view count for 29! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 29 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '159.69.117.173', '2018-09-26'),
(279, 'New view count for 28! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 28 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '159.69.117.173', '2018-09-26'),
(280, 'New view count for 27! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 27 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '159.69.117.173', '2018-09-26'),
(281, 'New view count for 26! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 26 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '159.69.117.173', '2018-09-26'),
(282, 'New view count for 25! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 25 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '159.69.117.173', '2018-09-26'),
(283, 'New view count for 24! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 24 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '159.69.117.173', '2018-09-26'),
(284, 'New view count for 23! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 23 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '159.69.117.173', '2018-09-26'),
(285, 'New view count for 22! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 22 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '159.69.117.173', '2018-09-26'),
(286, 'New view count for 20! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 20 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '159.69.117.173', '2018-09-26'),
(287, 'New view count for 2! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 2 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '159.69.117.173', '2018-09-26'),
(288, 'New view count for 30! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 30 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '159.69.117.173', '2018-09-26'),
(289, 'New view count for 15! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 15 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '159.69.117.173', '2018-09-26'),
(290, 'New view count for 14! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 14 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '159.69.117.173', '2018-09-26'),
(291, 'New view count for 13! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 13 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '159.69.117.173', '2018-09-26'),
(292, 'New view count for 12! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 12 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '159.69.117.173', '2018-09-26'),
(293, 'New view count for 11! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 11 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '159.69.117.173', '2018-09-26'),
(294, 'New view count for 10! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 10 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '159.69.117.173', '2018-09-26'),
(295, 'New view count for 9! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 9 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '159.69.117.173', '2018-09-26'),
(296, 'New view count for 8! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 8 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '159.69.117.173', '2018-09-26'),
(297, 'New view count for 6! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 6 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '159.69.117.173', '2018-09-26'),
(298, 'New view count for 4! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 4 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '159.69.117.173', '2018-09-26'),
(299, 'New view count for 3! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 3 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '159.69.117.173', '2018-09-26'),
(300, 'New view count for 1! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 1 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '159.69.117.173', '2018-09-26'),
(301, 'New view count for 18! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 18 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '159.69.117.173', '2018-09-26'),
(302, 'New view count for 19! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 19 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '159.69.117.173', '2018-09-26'),
(303, 'New view count for 17! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 17 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '159.69.117.173', '2018-09-26'),
(304, 'New view count for 16! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 16 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '159.69.117.173', '2018-09-26'),
(305, 'New view count for 7! on 2018-09-26 by IP 159.69.117.173', 'The IP 159.69.117.173 has view article id 7 on 2018-09-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '159.69.117.173', '2018-09-26'),
(306, 'New view count for 17! on 2018-09-27 by IP 157.55.39.143', 'The IP 157.55.39.143 has view article id 17 on 2018-09-27 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.143', '2018-09-27'),
(307, 'New view count for 24! on 2018-09-28 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 24 on 2018-09-28 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '178.154.200.36', '2018-09-28'),
(308, 'New view count for 2! on 2018-09-29 by IP 213.180.203.26', 'The IP 213.180.203.26 has view article id 2 on 2018-09-29 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '213.180.203.26', '2018-09-29'),
(309, 'New view count for 23! on 2018-09-29 by IP 66.249.71.139', 'The IP 66.249.71.139 has view article id 23 on 2018-09-29 using os Android browser Browser  version  by user Anonymous', 23, '66.249.71.139', '2018-09-29'),
(310, 'New view count for 20! on 2018-09-29 by IP 66.249.71.139', 'The IP 66.249.71.139 has view article id 20 on 2018-09-29 using os Android browser Browser  version  by user Anonymous', 20, '66.249.71.139', '2018-09-29'),
(311, 'New view count for 18! on 2018-09-29 by IP 66.249.71.139', 'The IP 66.249.71.139 has view article id 18 on 2018-09-29 using os Android browser Browser  version  by user Anonymous', 18, '66.249.71.139', '2018-09-29'),
(312, 'New view count for 7! on 2018-09-29 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 7 on 2018-09-29 using os Unknown Platform browser Browser  version  by user Anonymous', 7, '178.154.200.36', '2018-09-29'),
(313, 'New view count for 26! on 2018-09-29 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 26 on 2018-09-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.76.163', '2018-09-29'),
(314, 'New view count for 25! on 2018-09-29 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 25 on 2018-09-29 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '178.154.200.36', '2018-09-29'),
(315, 'New view count for 22! on 2018-09-29 by IP 213.180.203.26', 'The IP 213.180.203.26 has view article id 22 on 2018-09-29 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '213.180.203.26', '2018-09-29'),
(316, 'New view count for 24! on 2018-09-30 by IP 157.55.39.78', 'The IP 157.55.39.78 has view article id 24 on 2018-09-30 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.78', '2018-09-30'),
(317, 'New view count for 23! on 2018-09-30 by IP 213.180.203.66', 'The IP 213.180.203.66 has view article id 23 on 2018-09-30 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '213.180.203.66', '2018-09-30'),
(318, 'New view count for 2! on 2018-10-01 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-10-01 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-10-01'),
(319, 'New view count for 19! on 2018-10-01 by IP 66.249.71.141', 'The IP 66.249.71.141 has view article id 19 on 2018-10-01 using os Android browser Browser  version  by user Anonymous', 19, '66.249.71.141', '2018-10-01'),
(320, 'New view count for 29! on 2018-10-01 by IP 207.46.13.186', 'The IP 207.46.13.186 has view article id 29 on 2018-10-01 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '207.46.13.186', '2018-10-01'),
(321, 'New view count for 28! on 2018-10-02 by IP 66.249.75.73', 'The IP 66.249.75.73 has view article id 28 on 2018-10-02 using os Android browser Browser  version  by user Anonymous', 28, '66.249.75.73', '2018-10-02'),
(322, 'New view count for 24! on 2018-10-02 by IP 66.249.71.67', 'The IP 66.249.71.67 has view article id 24 on 2018-10-02 using os Android browser Browser  version  by user Anonymous', 24, '66.249.71.67', '2018-10-02'),
(323, 'New view count for 26! on 2018-10-02 by IP 40.77.167.67', 'The IP 40.77.167.67 has view article id 26 on 2018-10-02 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.67', '2018-10-02'),
(324, 'New view count for 2! on 2018-10-03 by IP 178.154.200.36', 'The IP 178.154.200.36 has view article id 2 on 2018-10-03 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '178.154.200.36', '2018-10-03'),
(325, 'New view count for 16! on 2018-10-03 by IP 40.77.167.155', 'The IP 40.77.167.155 has view article id 16 on 2018-10-03 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '40.77.167.155', '2018-10-03'),
(326, 'New view count for 26! on 2018-10-03 by IP 180.76.15.5', 'The IP 180.76.15.5 has view article id 26 on 2018-10-03 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.5', '2018-10-03'),
(327, 'New view count for 26! on 2018-10-04 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 26 on 2018-10-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.32', '2018-10-04'),
(328, 'New view count for 26! on 2018-10-05 by IP 180.76.15.135', 'The IP 180.76.15.135 has view article id 26 on 2018-10-05 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.135', '2018-10-05'),
(329, 'New view count for 2! on 2018-10-06 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 2 on 2018-10-06 using os Unknown Platform browser Browser  version  by user Anonymous', 2, '37.9.113.4', '2018-10-06'),
(330, 'New view count for 26! on 2018-10-07 by IP 180.76.15.142', 'The IP 180.76.15.142 has view article id 26 on 2018-10-07 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.142', '2018-10-07'),
(331, 'New view count for 17! on 2018-10-07 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 17 on 2018-10-07 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '37.9.113.4', '2018-10-07'),
(332, 'New view count for 19! on 2018-10-08 by IP 66.249.79.5', 'The IP 66.249.79.5 has view article id 19 on 2018-10-08 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.5', '2018-10-08'),
(333, 'New view count for 28! on 2018-10-08 by IP 157.55.39.220', 'The IP 157.55.39.220 has view article id 28 on 2018-10-08 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '157.55.39.220', '2018-10-08'),
(334, 'New view count for 23! on 2018-10-08 by IP 157.55.39.220', 'The IP 157.55.39.220 has view article id 23 on 2018-10-08 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.220', '2018-10-08'),
(335, 'New view count for 14! on 2018-10-09 by IP 66.249.79.1', 'The IP 66.249.79.1 has view article id 14 on 2018-10-09 using os Android browser Browser  version  by user Anonymous', 14, '66.249.79.1', '2018-10-09'),
(336, 'New view count for 14! on 2018-10-10 by IP 207.46.13.38', 'The IP 207.46.13.38 has view article id 14 on 2018-10-10 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '207.46.13.38', '2018-10-10'),
(337, 'New view count for 15! on 2018-10-10 by IP 40.77.167.24', 'The IP 40.77.167.24 has view article id 15 on 2018-10-10 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.24', '2018-10-10'),
(338, 'New view count for 25! on 2018-10-10 by IP 180.76.15.16', 'The IP 180.76.15.16 has view article id 25 on 2018-10-10 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.16', '2018-10-10'),
(339, 'New view count for 29! on 2018-10-11 by IP 180.76.15.134', 'The IP 180.76.15.134 has view article id 29 on 2018-10-11 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.134', '2018-10-11'),
(340, 'New view count for 18! on 2018-10-11 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 18 on 2018-10-11 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '37.9.113.4', '2018-10-11'),
(341, 'New view count for 31! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 31 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 31, '104.192.74.37', '2018-10-11'),
(342, 'New view count for 29! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 29 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 29, '104.192.74.37', '2018-10-11'),
(343, 'New view count for 28! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 28 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 28, '104.192.74.37', '2018-10-11'),
(344, 'New view count for 27! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 27 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 27, '104.192.74.37', '2018-10-11'),
(345, 'New view count for 26! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 26 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 26, '104.192.74.37', '2018-10-11'),
(346, 'New view count for 25! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 25 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 25, '104.192.74.37', '2018-10-11'),
(347, 'New view count for 24! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 24 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 24, '104.192.74.37', '2018-10-11'),
(348, 'New view count for 23! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 23 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 23, '104.192.74.37', '2018-10-11'),
(349, 'New view count for 20! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 20 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 20, '104.192.74.37', '2018-10-11'),
(350, 'New view count for 22! on 2018-10-11 by IP 104.192.74.37', 'The IP 104.192.74.37 has view article id 22 on 2018-10-11 using os Mac OS X browser Browser Chrome version 58.0.3029.110 by user Anonymous', 22, '104.192.74.37', '2018-10-11'),
(351, 'New view count for 23! on 2018-10-12 by IP 66.249.79.5', 'The IP 66.249.79.5 has view article id 23 on 2018-10-12 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.5', '2018-10-12'),
(352, 'New view count for 25! on 2018-10-12 by IP 180.76.15.137', 'The IP 180.76.15.137 has view article id 25 on 2018-10-12 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.137', '2018-10-12'),
(353, 'New view count for 25! on 2018-10-13 by IP 180.76.15.12', 'The IP 180.76.15.12 has view article id 25 on 2018-10-13 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.12', '2018-10-13'),
(354, 'New view count for 17! on 2018-10-13 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 17 on 2018-10-13 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '141.8.142.76', '2018-10-13'),
(355, 'New view count for 26! on 2018-10-14 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 26 on 2018-10-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.166', '2018-10-14'),
(356, 'New view count for 15! on 2018-10-14 by IP 157.55.39.113', 'The IP 157.55.39.113 has view article id 15 on 2018-10-14 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.113', '2018-10-14'),
(357, 'New view count for 3! on 2018-10-14 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 3 on 2018-10-14 using os Unknown Platform browser Browser  version  by user Anonymous', 3, '37.9.113.4', '2018-10-14'),
(358, 'New view count for 25! on 2018-10-14 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 25 on 2018-10-14 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.136', '2018-10-14'),
(359, 'New view count for 20! on 2018-10-14 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 20 on 2018-10-14 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '207.46.13.174', '2018-10-14'),
(360, 'New view count for 25! on 2018-10-15 by IP 180.76.15.16', 'The IP 180.76.15.16 has view article id 25 on 2018-10-15 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.16', '2018-10-15'),
(361, 'New view count for 20! on 2018-10-15 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 20 on 2018-10-15 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '141.8.142.76', '2018-10-15'),
(362, 'New view count for 20! on 2018-10-15 by IP 66.249.79.96', 'The IP 66.249.79.96 has view article id 20 on 2018-10-15 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.96', '2018-10-15'),
(363, 'New view count for 19! on 2018-10-16 by IP 207.46.13.107', 'The IP 207.46.13.107 has view article id 19 on 2018-10-16 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '207.46.13.107', '2018-10-16'),
(364, 'New view count for 26! on 2018-10-16 by IP 207.46.13.220', 'The IP 207.46.13.220 has view article id 26 on 2018-10-16 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '207.46.13.220', '2018-10-16'),
(365, 'New view count for 27! on 2018-10-17 by IP 180.76.15.30', 'The IP 180.76.15.30 has view article id 27 on 2018-10-17 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.30', '2018-10-17'),
(366, 'New view count for 17! on 2018-10-18 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 17 on 2018-10-18 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '37.9.113.4', '2018-10-18'),
(367, 'New view count for 16! on 2018-10-18 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 16 on 2018-10-18 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '141.8.142.76', '2018-10-18'),
(368, 'New view count for 26! on 2018-10-18 by IP 223.24.166.196', 'The IP 223.24.166.196 has view article id 26 on 2018-10-18 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 26, '223.24.166.196', '2018-10-18'),
(369, 'New view count for 28! on 2018-10-20 by IP 66.249.79.99', 'The IP 66.249.79.99 has view article id 28 on 2018-10-20 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.99', '2018-10-20'),
(370, 'New view count for 16! on 2018-10-20 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 16 on 2018-10-20 using os Android browser Browser  version  by user Anonymous', 16, '66.249.79.127', '2018-10-20'),
(371, 'New view count for 17! on 2018-10-20 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 17 on 2018-10-20 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '37.9.113.4', '2018-10-20'),
(372, 'New view count for 24! on 2018-10-21 by IP 66.249.79.127', 'The IP 66.249.79.127 has view article id 24 on 2018-10-21 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.127', '2018-10-21'),
(373, 'New view count for 22! on 2018-10-21 by IP 157.55.39.98', 'The IP 157.55.39.98 has view article id 22 on 2018-10-21 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '157.55.39.98', '2018-10-21'),
(374, 'New view count for 31! on 2018-10-22 by IP 89.234.68.77', 'The IP 89.234.68.77 has view article id 31 on 2018-10-22 using os Windows XP browser Browser Firefox version 3.6.8 by user Anonymous', 31, '89.234.68.77', '2018-10-22'),
(375, 'New view count for 29! on 2018-10-22 by IP 89.234.68.77', 'The IP 89.234.68.77 has view article id 29 on 2018-10-22 using os Windows XP browser Browser Firefox version 3.6.8 by user Anonymous', 29, '89.234.68.77', '2018-10-22'),
(376, 'New view count for 31! on 2018-10-23 by IP 158.69.225.35', 'The IP 158.69.225.35 has view article id 31 on 2018-10-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '158.69.225.35', '2018-10-23'),
(377, 'New view count for 23! on 2018-10-23 by IP 158.69.225.35', 'The IP 158.69.225.35 has view article id 23 on 2018-10-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '158.69.225.35', '2018-10-23'),
(378, 'New view count for 20! on 2018-10-23 by IP 158.69.225.35', 'The IP 158.69.225.35 has view article id 20 on 2018-10-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '158.69.225.35', '2018-10-23'),
(379, 'New view count for 25! on 2018-10-23 by IP 158.69.225.35', 'The IP 158.69.225.35 has view article id 25 on 2018-10-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '158.69.225.35', '2018-10-23'),
(380, 'New view count for 18! on 2018-10-23 by IP 40.77.167.41', 'The IP 40.77.167.41 has view article id 18 on 2018-10-23 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.41', '2018-10-23'),
(381, 'New view count for 1! on 2018-10-24 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 1 on 2018-10-24 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '37.9.113.4', '2018-10-24'),
(382, 'New view count for 27! on 2018-10-24 by IP 40.77.167.20', 'The IP 40.77.167.20 has view article id 27 on 2018-10-24 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '40.77.167.20', '2018-10-24'),
(383, 'New view count for 31! on 2018-10-24 by IP 40.77.169.27', 'The IP 40.77.169.27 has view article id 31 on 2018-10-24 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.169.27', '2018-10-24'),
(384, 'New view count for 24! on 2018-10-24 by IP 157.55.39.86', 'The IP 157.55.39.86 has view article id 24 on 2018-10-24 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.86', '2018-10-24'),
(385, 'New view count for 20! on 2018-10-24 by IP 180.76.15.156', 'The IP 180.76.15.156 has view article id 20 on 2018-10-24 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.156', '2018-10-24'),
(386, 'New view count for 25! on 2018-10-25 by IP 157.55.39.98', 'The IP 157.55.39.98 has view article id 25 on 2018-10-25 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.98', '2018-10-25'),
(387, 'New view count for 25! on 2018-10-25 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 25 on 2018-10-25 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.52', '2018-10-25'),
(388, 'New view count for 31! on 2018-10-25 by IP 40.77.167.33', 'The IP 40.77.167.33 has view article id 31 on 2018-10-25 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.167.33', '2018-10-25'),
(389, 'New view count for 17! on 2018-10-25 by IP 157.55.39.98', 'The IP 157.55.39.98 has view article id 17 on 2018-10-25 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.98', '2018-10-25'),
(390, 'New view count for 3! on 2018-10-26 by IP 213.180.203.45', 'The IP 213.180.203.45 has view article id 3 on 2018-10-26 using os iOS browser Browser  version  by user Anonymous', 3, '213.180.203.45', '2018-10-26'),
(391, 'New view count for 20! on 2018-10-26 by IP 180.76.15.139', 'The IP 180.76.15.139 has view article id 20 on 2018-10-26 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.139', '2018-10-26'),
(392, 'New view count for 1! on 2018-10-26 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 1 on 2018-10-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '144.76.96.236', '2018-10-26'),
(393, 'New view count for 2! on 2018-10-26 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 2 on 2018-10-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '144.76.96.236', '2018-10-26'),
(394, 'New view count for 3! on 2018-10-26 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 3 on 2018-10-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '144.76.96.236', '2018-10-26'),
(395, 'New view count for 4! on 2018-10-26 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 4 on 2018-10-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '144.76.96.236', '2018-10-26'),
(396, 'New view count for 6! on 2018-10-26 by IP 144.76.96.236', 'The IP 144.76.96.236 has view article id 6 on 2018-10-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '144.76.96.236', '2018-10-26'),
(397, 'New view count for 14! on 2018-10-26 by IP 40.77.167.33', 'The IP 40.77.167.33 has view article id 14 on 2018-10-26 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '40.77.167.33', '2018-10-26'),
(398, 'New view count for 23! on 2018-10-26 by IP 66.249.79.95', 'The IP 66.249.79.95 has view article id 23 on 2018-10-26 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.95', '2018-10-26'),
(399, 'New view count for 4! on 2018-10-26 by IP 66.249.79.67', 'The IP 66.249.79.67 has view article id 4 on 2018-10-26 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.67', '2018-10-26'),
(400, 'New view count for 29! on 2018-10-26 by IP 180.76.15.135', 'The IP 180.76.15.135 has view article id 29 on 2018-10-26 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.135', '2018-10-26'),
(401, 'New view count for 31! on 2018-10-27 by IP 89.234.68.69', 'The IP 89.234.68.69 has view article id 31 on 2018-10-27 using os Windows XP browser Browser Firefox version 3.6.8 by user Anonymous', 31, '89.234.68.69', '2018-10-27'),
(402, 'New view count for 29! on 2018-10-27 by IP 89.234.68.69', 'The IP 89.234.68.69 has view article id 29 on 2018-10-27 using os Windows XP browser Browser Firefox version 3.6.8 by user Anonymous', 29, '89.234.68.69', '2018-10-27'),
(403, 'New view count for 28! on 2018-10-27 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 28 on 2018-10-27 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '141.8.142.76', '2018-10-27'),
(404, 'New view count for 31! on 2018-10-28 by IP 49.230.91.85', 'The IP 49.230.91.85 has view article id 31 on 2018-10-28 using os Android browser Browser Chrome version 69.0.3497.100 by user Anonymous', 31, '49.230.91.85', '2018-10-28'),
(405, 'New view count for 27! on 2018-10-28 by IP 207.46.13.135', 'The IP 207.46.13.135 has view article id 27 on 2018-10-28 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.135', '2018-10-28'),
(406, 'New view count for 27! on 2018-10-29 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 27 on 2018-10-29 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.136', '2018-10-29'),
(407, 'New view count for 7! on 2018-10-29 by IP 144.76.176.171', 'The IP 144.76.176.171 has view article id 7 on 2018-10-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '144.76.176.171', '2018-10-29'),
(408, 'New view count for 19! on 2018-10-29 by IP 207.46.13.135', 'The IP 207.46.13.135 has view article id 19 on 2018-10-29 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '207.46.13.135', '2018-10-29'),
(409, 'New view count for 25! on 2018-10-31 by IP 40.77.167.48', 'The IP 40.77.167.48 has view article id 25 on 2018-10-31 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.48', '2018-10-31'),
(410, 'New view count for 19! on 2018-10-31 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 19 on 2018-10-31 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '37.9.113.4', '2018-10-31'),
(411, 'New view count for 18! on 2018-10-31 by IP 40.77.167.47', 'The IP 40.77.167.47 has view article id 18 on 2018-10-31 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.47', '2018-10-31'),
(412, 'New view count for 31! on 2018-10-31 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 31 on 2018-10-31 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '37.9.113.4', '2018-10-31'),
(413, 'New view count for 23! on 2018-11-01 by IP 207.46.13.106', 'The IP 207.46.13.106 has view article id 23 on 2018-11-01 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.106', '2018-11-01'),
(414, 'New view count for 15! on 2018-11-01 by IP 40.77.167.75', 'The IP 40.77.167.75 has view article id 15 on 2018-11-01 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.75', '2018-11-01'),
(415, 'New view count for 7! on 2018-11-01 by IP 5.9.152.73', 'The IP 5.9.152.73 has view article id 7 on 2018-11-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '5.9.152.73', '2018-11-01'),
(416, 'New view count for 20! on 2018-11-02 by IP 66.249.71.25', 'The IP 66.249.71.25 has view article id 20 on 2018-11-02 using os Android browser Browser  version  by user Anonymous', 20, '66.249.71.25', '2018-11-02'),
(417, 'New view count for 28! on 2018-11-03 by IP 207.46.13.198', 'The IP 207.46.13.198 has view article id 28 on 2018-11-03 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.198', '2018-11-03'),
(418, 'New view count for 16! on 2018-11-04 by IP 144.76.120.197', 'The IP 144.76.120.197 has view article id 16 on 2018-11-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '144.76.120.197', '2018-11-04'),
(419, 'New view count for 17! on 2018-11-04 by IP 144.76.120.197', 'The IP 144.76.120.197 has view article id 17 on 2018-11-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '144.76.120.197', '2018-11-04'),
(420, 'New view count for 26! on 2018-11-04 by IP 180.76.15.8', 'The IP 180.76.15.8 has view article id 26 on 2018-11-04 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.8', '2018-11-04'),
(421, 'New view count for 24! on 2018-11-05 by IP 66.249.71.107', 'The IP 66.249.71.107 has view article id 24 on 2018-11-05 using os Android browser Browser  version  by user Anonymous', 24, '66.249.71.107', '2018-11-05'),
(422, 'New view count for 29! on 2018-11-06 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 29 on 2018-11-06 using os Android browser Browser  version  by user Anonymous', 29, '66.249.79.49', '2018-11-06'),
(423, 'New view count for 28! on 2018-11-06 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 28 on 2018-11-06 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.46', '2018-11-06'),
(424, 'New view count for 27! on 2018-11-06 by IP 223.24.61.94', 'The IP 223.24.61.94 has view article id 27 on 2018-11-06 using os Android browser Browser Chrome version 61.0.3163.98 by user Anonymous', 27, '223.24.61.94', '2018-11-06'),
(425, 'New view count for 24! on 2018-11-07 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 24 on 2018-11-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.77.32', '2018-11-07'),
(426, 'New view count for 23! on 2018-11-07 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 23 on 2018-11-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.77.32', '2018-11-07'),
(427, 'New view count for 27! on 2018-11-07 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 27 on 2018-11-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.77.32', '2018-11-07'),
(428, 'New view count for 6! on 2018-11-07 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 6 on 2018-11-07 using os Unknown Platform browser Browser  version  by user Anonymous', 6, '37.9.113.4', '2018-11-07'),
(429, 'New view count for 27! on 2018-11-07 by IP 77.75.76.160', 'The IP 77.75.76.160 has view article id 27 on 2018-11-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.76.160', '2018-11-07');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(430, 'New view count for 1! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 1 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '95.216.20.167', '2018-11-10'),
(431, 'New view count for 16! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 16 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '95.216.20.167', '2018-11-10'),
(432, 'New view count for 17! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 17 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '95.216.20.167', '2018-11-10'),
(433, 'New view count for 18! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 18 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '95.216.20.167', '2018-11-10'),
(434, 'New view count for 19! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 19 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '95.216.20.167', '2018-11-10'),
(435, 'New view count for 2! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 2 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '95.216.20.167', '2018-11-10'),
(436, 'New view count for 20! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 20 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '95.216.20.167', '2018-11-10'),
(437, 'New view count for 22! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 22 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '95.216.20.167', '2018-11-10'),
(438, 'New view count for 24! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 24 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '95.216.20.167', '2018-11-10'),
(439, 'New view count for 25! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 25 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '95.216.20.167', '2018-11-10'),
(440, 'New view count for 26! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 26 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '95.216.20.167', '2018-11-10'),
(441, 'New view count for 28! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 28 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '95.216.20.167', '2018-11-10'),
(442, 'New view count for 29! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 29 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '95.216.20.167', '2018-11-10'),
(443, 'New view count for 3! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 3 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '95.216.20.167', '2018-11-10'),
(444, 'New view count for 31! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 31 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '95.216.20.167', '2018-11-10'),
(445, 'New view count for 4! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 4 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '95.216.20.167', '2018-11-10'),
(446, 'New view count for 6! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 6 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '95.216.20.167', '2018-11-10'),
(447, 'New view count for 7! on 2018-11-10 by IP 95.216.20.167', 'The IP 95.216.20.167 has view article id 7 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '95.216.20.167', '2018-11-10'),
(448, 'New view count for 22! on 2018-11-10 by IP 157.55.39.108', 'The IP 157.55.39.108 has view article id 22 on 2018-11-10 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '157.55.39.108', '2018-11-10'),
(449, 'New view count for 27! on 2018-11-10 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 27 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.78.161', '2018-11-10'),
(450, 'New view count for 30! on 2018-11-10 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 30 on 2018-11-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.76.171', '2018-11-10'),
(451, 'New view count for 26! on 2018-11-11 by IP 40.77.167.99', 'The IP 40.77.167.99 has view article id 26 on 2018-11-11 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.99', '2018-11-11'),
(452, 'New view count for 24! on 2018-11-13 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 24 on 2018-11-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.77.36', '2018-11-13'),
(453, 'New view count for 26! on 2018-11-13 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 26 on 2018-11-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.36', '2018-11-13'),
(454, 'New view count for 25! on 2018-11-13 by IP 77.75.77.72', 'The IP 77.75.77.72 has view article id 25 on 2018-11-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.77.72', '2018-11-13'),
(455, 'New view count for 23! on 2018-11-13 by IP 66.249.71.35', 'The IP 66.249.71.35 has view article id 23 on 2018-11-13 using os Android browser Browser  version  by user Anonymous', 23, '66.249.71.35', '2018-11-13'),
(456, 'New view count for 23! on 2018-11-14 by IP 66.249.71.26', 'The IP 66.249.71.26 has view article id 23 on 2018-11-14 using os Android browser Browser  version  by user Anonymous', 23, '66.249.71.26', '2018-11-14'),
(457, 'New view count for 20! on 2018-11-14 by IP 5.196.87.53', 'The IP 5.196.87.53 has view article id 20 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '5.196.87.53', '2018-11-14'),
(458, 'New view count for 24! on 2018-11-14 by IP 5.196.87.47', 'The IP 5.196.87.47 has view article id 24 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '5.196.87.47', '2018-11-14'),
(459, 'New view count for 31! on 2018-11-14 by IP 151.80.39.160', 'The IP 151.80.39.160 has view article id 31 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '151.80.39.160', '2018-11-14'),
(460, 'New view count for 29! on 2018-11-14 by IP 151.80.39.191', 'The IP 151.80.39.191 has view article id 29 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '151.80.39.191', '2018-11-14'),
(461, 'New view count for 26! on 2018-11-14 by IP 151.80.39.151', 'The IP 151.80.39.151 has view article id 26 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '151.80.39.151', '2018-11-14'),
(462, 'New view count for 27! on 2018-11-14 by IP 151.80.39.116', 'The IP 151.80.39.116 has view article id 27 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '151.80.39.116', '2018-11-14'),
(463, 'New view count for 17! on 2018-11-14 by IP 40.77.167.172', 'The IP 40.77.167.172 has view article id 17 on 2018-11-14 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.172', '2018-11-14'),
(464, 'New view count for 28! on 2018-11-14 by IP 77.75.77.54', 'The IP 77.75.77.54 has view article id 28 on 2018-11-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.77.54', '2018-11-14'),
(465, 'New view count for 15! on 2018-11-14 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 15 on 2018-11-14 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '37.9.113.4', '2018-11-14'),
(466, 'New view count for 20! on 2018-11-15 by IP 207.46.13.71', 'The IP 207.46.13.71 has view article id 20 on 2018-11-15 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '207.46.13.71', '2018-11-15'),
(467, 'New view count for 26! on 2018-11-15 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 26 on 2018-11-15 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '37.9.113.4', '2018-11-15'),
(468, 'New view count for 20! on 2018-11-15 by IP 54.36.150.172', 'The IP 54.36.150.172 has view article id 20 on 2018-11-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '54.36.150.172', '2018-11-15'),
(469, 'New view count for 24! on 2018-11-15 by IP 54.36.149.53', 'The IP 54.36.149.53 has view article id 24 on 2018-11-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.149.53', '2018-11-15'),
(470, 'New view count for 26! on 2018-11-15 by IP 54.36.149.92', 'The IP 54.36.149.92 has view article id 26 on 2018-11-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.149.92', '2018-11-15'),
(471, 'New view count for 27! on 2018-11-15 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 27 on 2018-11-15 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '37.9.113.4', '2018-11-15'),
(472, 'New view count for 25! on 2018-11-17 by IP 180.76.15.135', 'The IP 180.76.15.135 has view article id 25 on 2018-11-17 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.135', '2018-11-17'),
(473, 'New view count for 31! on 2018-11-17 by IP 54.36.150.163', 'The IP 54.36.150.163 has view article id 31 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '54.36.150.163', '2018-11-17'),
(474, 'New view count for 27! on 2018-11-17 by IP 54.36.150.147', 'The IP 54.36.150.147 has view article id 27 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '54.36.150.147', '2018-11-17'),
(475, 'New view count for 29! on 2018-11-17 by IP 151.80.39.36', 'The IP 151.80.39.36 has view article id 29 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '151.80.39.36', '2018-11-17'),
(476, 'New view count for 26! on 2018-11-17 by IP 54.36.148.113', 'The IP 54.36.148.113 has view article id 26 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.148.113', '2018-11-17'),
(477, 'New view count for 24! on 2018-11-17 by IP 54.36.148.225', 'The IP 54.36.148.225 has view article id 24 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.148.225', '2018-11-17'),
(478, 'New view count for 20! on 2018-11-17 by IP 54.36.148.43', 'The IP 54.36.148.43 has view article id 20 on 2018-11-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '54.36.148.43', '2018-11-17'),
(479, 'New view count for 24! on 2018-11-18 by IP 40.77.167.154', 'The IP 40.77.167.154 has view article id 24 on 2018-11-18 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '40.77.167.154', '2018-11-18'),
(480, 'New view count for 25! on 2018-11-18 by IP 180.76.15.147', 'The IP 180.76.15.147 has view article id 25 on 2018-11-18 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.147', '2018-11-18'),
(481, 'New view count for 31! on 2018-11-18 by IP 5.196.87.25', 'The IP 5.196.87.25 has view article id 31 on 2018-11-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '5.196.87.25', '2018-11-18'),
(482, 'New view count for 27! on 2018-11-18 by IP 54.36.150.177', 'The IP 54.36.150.177 has view article id 27 on 2018-11-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '54.36.150.177', '2018-11-18'),
(483, 'New view count for 29! on 2018-11-18 by IP 54.36.150.149', 'The IP 54.36.150.149 has view article id 29 on 2018-11-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.150.149', '2018-11-18'),
(484, 'New view count for 26! on 2018-11-18 by IP 54.36.149.44', 'The IP 54.36.149.44 has view article id 26 on 2018-11-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.149.44', '2018-11-18'),
(485, 'New view count for 24! on 2018-11-18 by IP 151.80.39.107', 'The IP 151.80.39.107 has view article id 24 on 2018-11-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '151.80.39.107', '2018-11-18'),
(486, 'New view count for 16! on 2018-11-19 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 16 on 2018-11-19 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '37.9.113.4', '2018-11-19'),
(487, 'New view count for 20! on 2018-11-19 by IP 180.76.15.32', 'The IP 180.76.15.32 has view article id 20 on 2018-11-19 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.32', '2018-11-19'),
(488, 'New view count for 27! on 2018-11-19 by IP 207.46.13.71', 'The IP 207.46.13.71 has view article id 27 on 2018-11-19 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.71', '2018-11-19'),
(489, 'New view count for 20! on 2018-11-19 by IP 5.196.87.21', 'The IP 5.196.87.21 has view article id 20 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '5.196.87.21', '2018-11-19'),
(490, 'New view count for 14! on 2018-11-19 by IP 157.55.39.209', 'The IP 157.55.39.209 has view article id 14 on 2018-11-19 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '157.55.39.209', '2018-11-19'),
(491, 'New view count for 31! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 31 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '167.114.65.240', '2018-11-19'),
(492, 'New view count for 23! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 23 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '167.114.65.240', '2018-11-19'),
(493, 'New view count for 20! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 20 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '167.114.65.240', '2018-11-19'),
(494, 'New view count for 25! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 25 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '167.114.65.240', '2018-11-19'),
(495, 'New view count for 22! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 22 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '167.114.65.240', '2018-11-19'),
(496, 'New view count for 27! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 27 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '167.114.65.240', '2018-11-19'),
(497, 'New view count for 24! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 24 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '167.114.65.240', '2018-11-19'),
(498, 'New view count for 29! on 2018-11-19 by IP 167.114.65.240', 'The IP 167.114.65.240 has view article id 29 on 2018-11-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '167.114.65.240', '2018-11-19'),
(499, 'New view count for 29! on 2018-11-19 by IP 180.76.15.163', 'The IP 180.76.15.163 has view article id 29 on 2018-11-19 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.163', '2018-11-19'),
(500, 'New view count for 31! on 2018-11-20 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 31 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.77.62', '2018-11-20'),
(501, 'New view count for 24! on 2018-11-20 by IP 54.36.148.119', 'The IP 54.36.148.119 has view article id 24 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.148.119', '2018-11-20'),
(502, 'New view count for 26! on 2018-11-20 by IP 54.36.148.253', 'The IP 54.36.148.253 has view article id 26 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.148.253', '2018-11-20'),
(503, 'New view count for 29! on 2018-11-20 by IP 54.36.150.141', 'The IP 54.36.150.141 has view article id 29 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.150.141', '2018-11-20'),
(504, 'New view count for 27! on 2018-11-20 by IP 5.196.87.40', 'The IP 5.196.87.40 has view article id 27 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '5.196.87.40', '2018-11-20'),
(505, 'New view count for 31! on 2018-11-20 by IP 54.36.148.154', 'The IP 54.36.148.154 has view article id 31 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '54.36.148.154', '2018-11-20'),
(506, 'New view count for 25! on 2018-11-20 by IP 180.76.15.134', 'The IP 180.76.15.134 has view article id 25 on 2018-11-20 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.134', '2018-11-20'),
(507, 'New view count for 26! on 2018-11-20 by IP 180.76.15.147', 'The IP 180.76.15.147 has view article id 26 on 2018-11-20 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.147', '2018-11-20'),
(508, 'New view count for 20! on 2018-11-20 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 20 on 2018-11-20 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.49', '2018-11-20'),
(509, 'New view count for 20! on 2018-11-20 by IP 151.80.39.148', 'The IP 151.80.39.148 has view article id 20 on 2018-11-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '151.80.39.148', '2018-11-20'),
(510, 'New view count for 20! on 2018-11-21 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 20 on 2018-11-21 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.136', '2018-11-21'),
(511, 'New view count for 25! on 2018-11-21 by IP 180.76.15.24', 'The IP 180.76.15.24 has view article id 25 on 2018-11-21 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.24', '2018-11-21'),
(512, 'New view count for 3! on 2018-11-21 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 3 on 2018-11-21 using os Android browser Browser  version  by user Anonymous', 3, '66.249.79.52', '2018-11-21'),
(513, 'New view count for 29! on 2018-11-21 by IP 180.76.15.31', 'The IP 180.76.15.31 has view article id 29 on 2018-11-21 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.31', '2018-11-21'),
(514, 'New view count for 20! on 2018-11-22 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 20 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.166', '2018-11-22'),
(515, 'New view count for 31! on 2018-11-22 by IP 151.80.39.107', 'The IP 151.80.39.107 has view article id 31 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '151.80.39.107', '2018-11-22'),
(516, 'New view count for 27! on 2018-11-22 by IP 54.36.148.127', 'The IP 54.36.148.127 has view article id 27 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '54.36.148.127', '2018-11-22'),
(517, 'New view count for 29! on 2018-11-22 by IP 54.36.150.152', 'The IP 54.36.150.152 has view article id 29 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.150.152', '2018-11-22'),
(518, 'New view count for 26! on 2018-11-22 by IP 151.80.39.156', 'The IP 151.80.39.156 has view article id 26 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '151.80.39.156', '2018-11-22'),
(519, 'New view count for 24! on 2018-11-22 by IP 151.80.39.146', 'The IP 151.80.39.146 has view article id 24 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '151.80.39.146', '2018-11-22'),
(520, 'New view count for 3! on 2018-11-22 by IP 66.249.65.137', 'The IP 66.249.65.137 has view article id 3 on 2018-11-22 using os Android browser Browser  version  by user Anonymous', 3, '66.249.65.137', '2018-11-22'),
(521, 'New view count for 31! on 2018-11-22 by IP 158.69.127.133', 'The IP 158.69.127.133 has view article id 31 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '158.69.127.133', '2018-11-22'),
(522, 'New view count for 23! on 2018-11-22 by IP 158.69.127.133', 'The IP 158.69.127.133 has view article id 23 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '158.69.127.133', '2018-11-22'),
(523, 'New view count for 20! on 2018-11-22 by IP 158.69.127.133', 'The IP 158.69.127.133 has view article id 20 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '158.69.127.133', '2018-11-22'),
(524, 'New view count for 25! on 2018-11-22 by IP 158.69.127.133', 'The IP 158.69.127.133 has view article id 25 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '158.69.127.133', '2018-11-22'),
(525, 'New view count for 20! on 2018-11-22 by IP 54.36.149.101', 'The IP 54.36.149.101 has view article id 20 on 2018-11-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '54.36.149.101', '2018-11-22'),
(526, 'New view count for 23! on 2018-11-22 by IP 157.55.39.249', 'The IP 157.55.39.249 has view article id 23 on 2018-11-22 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.249', '2018-11-22'),
(527, 'New view count for 29! on 2018-11-23 by IP 180.76.15.134', 'The IP 180.76.15.134 has view article id 29 on 2018-11-23 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.134', '2018-11-23'),
(528, 'New view count for 15! on 2018-11-23 by IP 207.46.13.189', 'The IP 207.46.13.189 has view article id 15 on 2018-11-23 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '207.46.13.189', '2018-11-23'),
(529, 'New view count for 27! on 2018-11-24 by IP 167.114.113.14', 'The IP 167.114.113.14 has view article id 27 on 2018-11-24 using os Windows 8 browser Browser Opera version 41.9.4315.9043 by user Anonymous', 27, '167.114.113.14', '2018-11-24'),
(530, 'New view count for 26! on 2018-11-24 by IP 180.76.15.20', 'The IP 180.76.15.20 has view article id 26 on 2018-11-24 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.20', '2018-11-24'),
(531, 'New view count for 25! on 2018-11-24 by IP 157.55.39.194', 'The IP 157.55.39.194 has view article id 25 on 2018-11-24 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.194', '2018-11-24'),
(532, 'New view count for 23! on 2018-11-25 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 23 on 2018-11-25 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.46', '2018-11-25'),
(533, 'New view count for 29! on 2018-11-25 by IP 157.55.39.194', 'The IP 157.55.39.194 has view article id 29 on 2018-11-25 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.194', '2018-11-25'),
(534, 'New view count for 31! on 2018-11-26 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 31 on 2018-11-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.77.36', '2018-11-26'),
(535, 'New view count for 28! on 2018-11-26 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 28 on 2018-11-26 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '37.9.113.4', '2018-11-26'),
(536, 'New view count for 22! on 2018-11-26 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 22 on 2018-11-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.165', '2018-11-26'),
(537, 'New view count for 27! on 2018-11-27 by IP 180.76.15.151', 'The IP 180.76.15.151 has view article id 27 on 2018-11-27 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.151', '2018-11-27'),
(538, 'New view count for 23! on 2018-11-27 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 23 on 2018-11-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.78.169', '2018-11-27'),
(539, 'New view count for 3! on 2018-11-27 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 3 on 2018-11-27 using os Unknown Platform browser Browser  version  by user Anonymous', 3, '37.9.113.4', '2018-11-27'),
(540, 'New view count for 29! on 2018-11-28 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 29 on 2018-11-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.163', '2018-11-28'),
(541, 'New view count for 25! on 2018-11-28 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 25 on 2018-11-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.78.161', '2018-11-28'),
(542, 'New view count for 30! on 2018-11-28 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 30 on 2018-11-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.78.165', '2018-11-28'),
(543, 'New view count for 27! on 2018-11-29 by IP 180.76.15.159', 'The IP 180.76.15.159 has view article id 27 on 2018-11-29 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.159', '2018-11-29'),
(544, 'New view count for 4! on 2018-11-29 by IP 141.8.142.30', 'The IP 141.8.142.30 has view article id 4 on 2018-11-29 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '141.8.142.30', '2018-11-29'),
(545, 'New view count for 19! on 2018-11-30 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 19 on 2018-11-30 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '37.9.113.4', '2018-11-30'),
(546, 'New view count for 25! on 2018-11-30 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 25 on 2018-11-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.78.166', '2018-11-30'),
(547, 'New view count for 30! on 2018-11-30 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 30 on 2018-11-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.77.62', '2018-11-30'),
(548, 'New view count for 28! on 2018-11-30 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 28 on 2018-11-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.78.161', '2018-11-30'),
(549, 'New view count for 29! on 2018-11-30 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 29 on 2018-11-30 using os Android browser Browser  version  by user Anonymous', 29, '66.249.79.46', '2018-11-30'),
(550, 'New view count for 20! on 2018-12-01 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 20 on 2018-12-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.169', '2018-12-01'),
(551, 'New view count for 27! on 2018-12-01 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 27 on 2018-12-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.78.169', '2018-12-01'),
(552, 'New view count for 29! on 2018-12-01 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 29 on 2018-12-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.161', '2018-12-01'),
(553, 'New view count for 24! on 2018-12-01 by IP 77.75.76.169', 'The IP 77.75.76.169 has view article id 24 on 2018-12-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.76.169', '2018-12-01'),
(554, 'New view count for 27! on 2018-12-01 by IP 180.76.15.148', 'The IP 180.76.15.148 has view article id 27 on 2018-12-01 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.148', '2018-12-01'),
(555, 'New view count for 28! on 2018-12-01 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 28 on 2018-12-01 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.46', '2018-12-01'),
(556, 'New view count for 22! on 2018-12-01 by IP 77.75.79.36', 'The IP 77.75.79.36 has view article id 22 on 2018-12-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.79.36', '2018-12-01'),
(557, 'New view count for 26! on 2018-12-02 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 26 on 2018-12-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.161', '2018-12-02'),
(558, 'New view count for 4! on 2018-12-02 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 4 on 2018-12-02 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.49', '2018-12-02'),
(559, 'New view count for 24! on 2018-12-02 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 24 on 2018-12-02 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.49', '2018-12-02'),
(560, 'New view count for 28! on 2018-12-02 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 28 on 2018-12-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.77.62', '2018-12-02'),
(561, 'New view count for 20! on 2018-12-03 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 20 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.161', '2018-12-03'),
(562, 'New view count for 27! on 2018-12-03 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 27 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.79.17', '2018-12-03'),
(563, 'New view count for 27! on 2018-12-03 by IP 180.76.15.144', 'The IP 180.76.15.144 has view article id 27 on 2018-12-03 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.144', '2018-12-03'),
(564, 'New view count for 22! on 2018-12-03 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 22 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.172', '2018-12-03'),
(565, 'New view count for 24! on 2018-12-03 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 24 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.78.166', '2018-12-03'),
(566, 'New view count for 29! on 2018-12-03 by IP 77.75.77.101', 'The IP 77.75.77.101 has view article id 29 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.77.101', '2018-12-03'),
(567, 'New view count for 23! on 2018-12-03 by IP 77.75.77.17', 'The IP 77.75.77.17 has view article id 23 on 2018-12-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.77.17', '2018-12-03'),
(568, 'New view count for 22! on 2018-12-04 by IP 40.77.167.48', 'The IP 40.77.167.48 has view article id 22 on 2018-12-04 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '40.77.167.48', '2018-12-04'),
(569, 'New view count for 18! on 2018-12-04 by IP 207.46.13.8', 'The IP 207.46.13.8 has view article id 18 on 2018-12-04 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '207.46.13.8', '2018-12-04'),
(570, 'New view count for 12! on 2018-12-04 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 12 on 2018-12-04 using os Unknown Platform browser Browser  version  by user Anonymous', 12, '37.9.113.4', '2018-12-04'),
(571, 'New view count for 1! on 2018-12-05 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 1 on 2018-12-05 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '37.9.113.4', '2018-12-05'),
(572, 'New view count for 27! on 2018-12-05 by IP 40.77.167.89', 'The IP 40.77.167.89 has view article id 27 on 2018-12-05 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '40.77.167.89', '2018-12-05'),
(573, 'New view count for 31! on 2018-12-05 by IP 151.80.39.163', 'The IP 151.80.39.163 has view article id 31 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '151.80.39.163', '2018-12-05'),
(574, 'New view count for 27! on 2018-12-05 by IP 151.80.39.167', 'The IP 151.80.39.167 has view article id 27 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '151.80.39.167', '2018-12-05'),
(575, 'New view count for 29! on 2018-12-05 by IP 54.36.150.145', 'The IP 54.36.150.145 has view article id 29 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.150.145', '2018-12-05'),
(576, 'New view count for 26! on 2018-12-05 by IP 54.36.148.92', 'The IP 54.36.148.92 has view article id 26 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.148.92', '2018-12-05'),
(577, 'New view count for 24! on 2018-12-05 by IP 54.36.150.162', 'The IP 54.36.150.162 has view article id 24 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.150.162', '2018-12-05'),
(578, 'New view count for 20! on 2018-12-05 by IP 151.80.39.103', 'The IP 151.80.39.103 has view article id 20 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '151.80.39.103', '2018-12-05'),
(579, 'New view count for 22! on 2018-12-05 by IP 5.196.87.38', 'The IP 5.196.87.38 has view article id 22 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '5.196.87.38', '2018-12-05'),
(580, 'New view count for 23! on 2018-12-05 by IP 54.36.150.170', 'The IP 54.36.150.170 has view article id 23 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '54.36.150.170', '2018-12-05'),
(581, 'New view count for 27! on 2018-12-05 by IP 180.76.15.31', 'The IP 180.76.15.31 has view article id 27 on 2018-12-05 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.31', '2018-12-05'),
(582, 'New view count for 25! on 2018-12-05 by IP 5.196.87.51', 'The IP 5.196.87.51 has view article id 25 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '5.196.87.51', '2018-12-05'),
(583, 'New view count for 28! on 2018-12-05 by IP 5.196.87.8', 'The IP 5.196.87.8 has view article id 28 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '5.196.87.8', '2018-12-05'),
(584, 'New view count for 26! on 2018-12-05 by IP 207.46.13.37', 'The IP 207.46.13.37 has view article id 26 on 2018-12-05 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '207.46.13.37', '2018-12-05'),
(585, 'New view count for 14! on 2018-12-05 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 14 on 2018-12-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.168', '2018-12-05'),
(586, 'New view count for 20! on 2018-12-06 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 20 on 2018-12-06 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.49', '2018-12-06'),
(587, 'New view count for 15! on 2018-12-06 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 15 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.76.162', '2018-12-06'),
(588, 'New view count for 31! on 2018-12-06 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 31 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.76.162', '2018-12-06'),
(589, 'New view count for 13! on 2018-12-06 by IP 77.75.79.36', 'The IP 77.75.79.36 has view article id 13 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.79.36', '2018-12-06'),
(590, 'New view count for 28! on 2018-12-06 by IP 207.46.13.30', 'The IP 207.46.13.30 has view article id 28 on 2018-12-06 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.30', '2018-12-06'),
(591, 'New view count for 31! on 2018-12-06 by IP 54.36.148.14', 'The IP 54.36.148.14 has view article id 31 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '54.36.148.14', '2018-12-06'),
(592, 'New view count for 27! on 2018-12-06 by IP 54.36.148.71', 'The IP 54.36.148.71 has view article id 27 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '54.36.148.71', '2018-12-06'),
(593, 'New view count for 29! on 2018-12-06 by IP 54.36.148.134', 'The IP 54.36.148.134 has view article id 29 on 2018-12-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.148.134', '2018-12-06'),
(594, 'New view count for 26! on 2018-12-07 by IP 54.36.148.185', 'The IP 54.36.148.185 has view article id 26 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.148.185', '2018-12-07'),
(595, 'New view count for 24! on 2018-12-07 by IP 54.36.148.251', 'The IP 54.36.148.251 has view article id 24 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.148.251', '2018-12-07'),
(596, 'New view count for 20! on 2018-12-07 by IP 54.36.148.15', 'The IP 54.36.148.15 has view article id 20 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '54.36.148.15', '2018-12-07'),
(597, 'New view count for 22! on 2018-12-07 by IP 54.36.149.21', 'The IP 54.36.149.21 has view article id 22 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '54.36.149.21', '2018-12-07'),
(598, 'New view count for 23! on 2018-12-07 by IP 54.36.148.9', 'The IP 54.36.148.9 has view article id 23 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '54.36.148.9', '2018-12-07'),
(599, 'New view count for 25! on 2018-12-07 by IP 54.36.149.78', 'The IP 54.36.149.78 has view article id 25 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '54.36.149.78', '2018-12-07'),
(600, 'New view count for 28! on 2018-12-07 by IP 54.36.148.190', 'The IP 54.36.148.190 has view article id 28 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '54.36.148.190', '2018-12-07'),
(601, 'New view count for 14! on 2018-12-07 by IP 40.77.167.130', 'The IP 40.77.167.130 has view article id 14 on 2018-12-07 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '40.77.167.130', '2018-12-07'),
(602, 'New view count for 12! on 2018-12-07 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 12 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.172', '2018-12-07'),
(603, 'New view count for 13! on 2018-12-07 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 13 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.78.172', '2018-12-07'),
(604, 'New view count for 15! on 2018-12-07 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 15 on 2018-12-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.76.163', '2018-12-07'),
(605, 'New view count for 24! on 2018-12-08 by IP 40.77.167.129', 'The IP 40.77.167.129 has view article id 24 on 2018-12-08 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '40.77.167.129', '2018-12-08'),
(606, 'New view count for 14! on 2018-12-08 by IP 77.75.76.166', 'The IP 77.75.76.166 has view article id 14 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.76.166', '2018-12-08'),
(607, 'New view count for 28! on 2018-12-08 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 28 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.77.109', '2018-12-08'),
(608, 'New view count for 31! on 2018-12-08 by IP 40.77.167.177', 'The IP 40.77.167.177 has view article id 31 on 2018-12-08 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.167.177', '2018-12-08'),
(609, 'New view count for 17! on 2018-12-08 by IP 207.46.13.182', 'The IP 207.46.13.182 has view article id 17 on 2018-12-08 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '207.46.13.182', '2018-12-08'),
(610, 'New view count for 31! on 2018-12-08 by IP 5.196.87.63', 'The IP 5.196.87.63 has view article id 31 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '5.196.87.63', '2018-12-08'),
(611, 'New view count for 27! on 2018-12-08 by IP 5.196.87.25', 'The IP 5.196.87.25 has view article id 27 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '5.196.87.25', '2018-12-08'),
(612, 'New view count for 29! on 2018-12-08 by IP 5.196.87.26', 'The IP 5.196.87.26 has view article id 29 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '5.196.87.26', '2018-12-08'),
(613, 'New view count for 26! on 2018-12-08 by IP 151.80.39.121', 'The IP 151.80.39.121 has view article id 26 on 2018-12-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '151.80.39.121', '2018-12-08'),
(614, 'New view count for 30! on 2018-12-08 by IP 141.8.142.30', 'The IP 141.8.142.30 has view article id 30 on 2018-12-08 using os Unknown Platform browser Browser  version  by user Anonymous', 30, '141.8.142.30', '2018-12-08'),
(615, 'New view count for 11! on 2018-12-09 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 11 on 2018-12-09 using os Unknown Platform browser Browser  version  by user Anonymous', 11, '37.9.113.4', '2018-12-09'),
(616, 'New view count for 10! on 2018-12-09 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 10 on 2018-12-09 using os Unknown Platform browser Browser  version  by user Anonymous', 10, '37.9.113.4', '2018-12-09'),
(617, 'New view count for 30! on 2018-12-10 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 30 on 2018-12-10 using os Android browser Browser  version  by user Anonymous', 30, '66.249.79.52', '2018-12-10'),
(618, 'New view count for 27! on 2018-12-10 by IP 77.75.78.160', 'The IP 77.75.78.160 has view article id 27 on 2018-12-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.78.160', '2018-12-10'),
(619, 'New view count for 24! on 2018-12-10 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 24 on 2018-12-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.77.36', '2018-12-10'),
(620, 'New view count for 31! on 2018-12-10 by IP 77.75.78.160', 'The IP 77.75.78.160 has view article id 31 on 2018-12-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.78.160', '2018-12-10'),
(621, 'New view count for 26! on 2018-12-11 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 26 on 2018-12-11 using os Android browser Browser  version  by user Anonymous', 26, '66.249.79.46', '2018-12-11'),
(622, 'New view count for 23! on 2018-12-11 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 23 on 2018-12-11 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.49', '2018-12-11'),
(623, 'New view count for 13! on 2018-12-11 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 13 on 2018-12-11 using os Unknown Platform browser Browser  version  by user Anonymous', 13, '141.8.142.76', '2018-12-11'),
(624, 'New view count for 9! on 2018-12-11 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 9 on 2018-12-11 using os Unknown Platform browser Browser  version  by user Anonymous', 9, '37.9.113.4', '2018-12-11'),
(625, 'New view count for 20! on 2018-12-12 by IP 157.55.39.129', 'The IP 157.55.39.129 has view article id 20 on 2018-12-12 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.129', '2018-12-12'),
(626, 'New view count for 29! on 2018-12-12 by IP 107.160.226.139', 'The IP 107.160.226.139 has view article id 29 on 2018-12-12 using os Windows 7 browser Browser Firefox version 52.0 by user Anonymous', 29, '107.160.226.139', '2018-12-12'),
(627, 'New view count for 14! on 2018-12-12 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 14 on 2018-12-12 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '141.8.142.76', '2018-12-12'),
(628, 'New view count for 20! on 2018-12-12 by IP 180.76.15.24', 'The IP 180.76.15.24 has view article id 20 on 2018-12-12 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.24', '2018-12-12'),
(629, 'New view count for 30! on 2018-12-12 by IP 75.162.204.110', 'The IP 75.162.204.110 has view article id 30 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '75.162.204.110', '2018-12-12'),
(630, 'New view count for 14! on 2018-12-12 by IP 86.34.6.135', 'The IP 86.34.6.135 has view article id 14 on 2018-12-12 using os Windows 10 browser Browser Chrome version 69.0.3497.100 by user Anonymous', 14, '86.34.6.135', '2018-12-12'),
(631, 'New view count for 24! on 2018-12-12 by IP 54.36.148.235', 'The IP 54.36.148.235 has view article id 24 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.148.235', '2018-12-12'),
(632, 'New view count for 20! on 2018-12-12 by IP 54.36.149.69', 'The IP 54.36.149.69 has view article id 20 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '54.36.149.69', '2018-12-12'),
(633, 'New view count for 22! on 2018-12-12 by IP 54.36.149.101', 'The IP 54.36.149.101 has view article id 22 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '54.36.149.101', '2018-12-12'),
(634, 'New view count for 23! on 2018-12-12 by IP 54.36.148.125', 'The IP 54.36.148.125 has view article id 23 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '54.36.148.125', '2018-12-12'),
(635, 'New view count for 25! on 2018-12-12 by IP 151.80.39.26', 'The IP 151.80.39.26 has view article id 25 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '151.80.39.26', '2018-12-12'),
(636, 'New view count for 30! on 2018-12-12 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 30 on 2018-12-12 using os Unknown Platform browser Browser  version  by user Anonymous', 30, '37.9.113.4', '2018-12-12'),
(637, 'New view count for 23! on 2018-12-12 by IP 54.36.149.14', 'The IP 54.36.149.14 has view article id 23 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '54.36.149.14', '2018-12-12'),
(638, 'New view count for 25! on 2018-12-12 by IP 54.36.149.5', 'The IP 54.36.149.5 has view article id 25 on 2018-12-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '54.36.149.5', '2018-12-12'),
(639, 'New view count for 28! on 2018-12-13 by IP 54.36.148.126', 'The IP 54.36.148.126 has view article id 28 on 2018-12-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '54.36.148.126', '2018-12-13'),
(640, 'New view count for 31! on 2018-12-13 by IP 54.36.149.105', 'The IP 54.36.149.105 has view article id 31 on 2018-12-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '54.36.149.105', '2018-12-13'),
(641, 'New view count for 27! on 2018-12-13 by IP 151.80.39.151', 'The IP 151.80.39.151 has view article id 27 on 2018-12-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '151.80.39.151', '2018-12-13');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(642, 'New view count for 29! on 2018-12-13 by IP 54.36.149.59', 'The IP 54.36.149.59 has view article id 29 on 2018-12-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.36.149.59', '2018-12-13'),
(643, 'New view count for 26! on 2018-12-13 by IP 54.36.150.173', 'The IP 54.36.150.173 has view article id 26 on 2018-12-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '54.36.150.173', '2018-12-13'),
(644, 'New view count for 29! on 2018-12-13 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 29 on 2018-12-13 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '37.9.113.4', '2018-12-13'),
(645, 'New view count for 25! on 2018-12-14 by IP 66.249.69.95', 'The IP 66.249.69.95 has view article id 25 on 2018-12-14 using os Android browser Browser  version  by user Anonymous', 25, '66.249.69.95', '2018-12-14'),
(646, 'New view count for 12! on 2018-12-14 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 12 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.163', '2018-12-14'),
(647, 'New view count for 29! on 2018-12-14 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 29 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.79.54', '2018-12-14'),
(648, 'New view count for 22! on 2018-12-14 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 22 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.76.168', '2018-12-14'),
(649, 'New view count for 24! on 2018-12-14 by IP 54.36.148.82', 'The IP 54.36.148.82 has view article id 24 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '54.36.148.82', '2018-12-14'),
(650, 'New view count for 20! on 2018-12-14 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 20 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.76.170', '2018-12-14'),
(651, 'New view count for 13! on 2018-12-14 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 13 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.76.170', '2018-12-14'),
(652, 'New view count for 20! on 2018-12-14 by IP 5.196.87.9', 'The IP 5.196.87.9 has view article id 20 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '5.196.87.9', '2018-12-14'),
(653, 'New view count for 22! on 2018-12-14 by IP 54.36.148.111', 'The IP 54.36.148.111 has view article id 22 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '54.36.148.111', '2018-12-14'),
(654, 'New view count for 23! on 2018-12-14 by IP 151.80.39.36', 'The IP 151.80.39.36 has view article id 23 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '151.80.39.36', '2018-12-14'),
(655, 'New view count for 25! on 2018-12-14 by IP 54.36.148.12', 'The IP 54.36.148.12 has view article id 25 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '54.36.148.12', '2018-12-14'),
(656, 'New view count for 20! on 2018-12-14 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 20 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.76.170', '2018-12-14'),
(657, 'New view count for 14! on 2018-12-14 by IP 77.75.79.11', 'The IP 77.75.79.11 has view article id 14 on 2018-12-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.79.11', '2018-12-14'),
(658, 'New view count for 20! on 2018-12-14 by IP 180.76.15.5', 'The IP 180.76.15.5 has view article id 20 on 2018-12-14 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.5', '2018-12-14'),
(659, 'New view count for 15! on 2018-12-15 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 15 on 2018-12-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.166', '2018-12-15'),
(660, 'New view count for 29! on 2018-12-16 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 29 on 2018-12-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.76.163', '2018-12-16'),
(661, 'New view count for 22! on 2018-12-17 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 22 on 2018-12-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.163', '2018-12-17'),
(662, 'New view count for 20! on 2018-12-17 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 20 on 2018-12-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.76.168', '2018-12-17'),
(663, 'New view count for 12! on 2018-12-17 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 12 on 2018-12-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.79.32', '2018-12-17'),
(664, 'New view count for 26! on 2018-12-17 by IP 180.76.15.143', 'The IP 180.76.15.143 has view article id 26 on 2018-12-17 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.143', '2018-12-17'),
(665, 'New view count for 30! on 2018-12-17 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 30 on 2018-12-17 using os Unknown Platform browser Browser  version  by user Anonymous', 30, '141.8.142.76', '2018-12-17'),
(666, 'New view count for 19! on 2018-12-17 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 19 on 2018-12-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.78.164', '2018-12-17'),
(667, 'New view count for 23! on 2018-12-18 by IP 207.46.13.34', 'The IP 207.46.13.34 has view article id 23 on 2018-12-18 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.34', '2018-12-18'),
(668, 'New view count for 15! on 2018-12-18 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 15 on 2018-12-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.79.32', '2018-12-18'),
(669, 'New view count for 25! on 2018-12-18 by IP 77.75.79.109', 'The IP 77.75.79.109 has view article id 25 on 2018-12-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.79.109', '2018-12-18'),
(670, 'New view count for 17! on 2018-12-18 by IP 207.46.13.37', 'The IP 207.46.13.37 has view article id 17 on 2018-12-18 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '207.46.13.37', '2018-12-18'),
(671, 'New view count for 22! on 2018-12-18 by IP 40.77.167.43', 'The IP 40.77.167.43 has view article id 22 on 2018-12-18 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '40.77.167.43', '2018-12-18'),
(672, 'New view count for 19! on 2018-12-19 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 19 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.76.162', '2018-12-19'),
(673, 'New view count for 11! on 2018-12-19 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 11 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.77.109', '2018-12-19'),
(674, 'New view count for 15! on 2018-12-19 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 15 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.77.109', '2018-12-19'),
(675, 'New view count for 29! on 2018-12-19 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 29 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.77.109', '2018-12-19'),
(676, 'New view count for 26! on 2018-12-19 by IP 180.76.15.17', 'The IP 180.76.15.17 has view article id 26 on 2018-12-19 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.17', '2018-12-19'),
(677, 'New view count for 10! on 2018-12-19 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 10 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.76.167', '2018-12-19'),
(678, 'New view count for 12! on 2018-12-19 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 12 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.164', '2018-12-19'),
(679, 'New view count for 9! on 2018-12-19 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 9 on 2018-12-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.169', '2018-12-19'),
(680, 'New view count for 8! on 2018-12-20 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 8 on 2018-12-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.79.62', '2018-12-20'),
(681, 'New view count for 30! on 2018-12-20 by IP 77.75.77.17', 'The IP 77.75.77.17 has view article id 30 on 2018-12-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.77.17', '2018-12-20'),
(682, 'New view count for 22! on 2018-12-20 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 22 on 2018-12-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.172', '2018-12-20'),
(683, 'New view count for 29! on 2018-12-20 by IP 157.55.39.174', 'The IP 157.55.39.174 has view article id 29 on 2018-12-20 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.174', '2018-12-20'),
(684, 'New view count for 8! on 2018-12-21 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 8 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.76.168', '2018-12-21'),
(685, 'New view count for 9! on 2018-12-21 by IP 77.75.78.171', 'The IP 77.75.78.171 has view article id 9 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.171', '2018-12-21'),
(686, 'New view count for 25! on 2018-12-21 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 25 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.79.54', '2018-12-21'),
(687, 'New view count for 11! on 2018-12-21 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 11 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.79.62', '2018-12-21'),
(688, 'New view count for 10! on 2018-12-21 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 10 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.78.164', '2018-12-21'),
(689, 'New view count for 26! on 2018-12-21 by IP 180.76.15.148', 'The IP 180.76.15.148 has view article id 26 on 2018-12-21 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.148', '2018-12-21'),
(690, 'New view count for 15! on 2018-12-21 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 15 on 2018-12-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.164', '2018-12-21'),
(691, 'New view count for 31! on 2018-12-22 by IP 158.69.54.207', 'The IP 158.69.54.207 has view article id 31 on 2018-12-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '158.69.54.207', '2018-12-22'),
(692, 'New view count for 23! on 2018-12-22 by IP 158.69.54.207', 'The IP 158.69.54.207 has view article id 23 on 2018-12-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '158.69.54.207', '2018-12-22'),
(693, 'New view count for 20! on 2018-12-22 by IP 158.69.54.207', 'The IP 158.69.54.207 has view article id 20 on 2018-12-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '158.69.54.207', '2018-12-22'),
(694, 'New view count for 25! on 2018-12-22 by IP 158.69.54.207', 'The IP 158.69.54.207 has view article id 25 on 2018-12-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '158.69.54.207', '2018-12-22'),
(695, 'New view count for 18! on 2018-12-22 by IP 207.46.13.208', 'The IP 207.46.13.208 has view article id 18 on 2018-12-22 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '207.46.13.208', '2018-12-22'),
(696, 'New view count for 20! on 2018-12-22 by IP 77.75.79.109', 'The IP 77.75.79.109 has view article id 20 on 2018-12-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.79.109', '2018-12-22'),
(697, 'New view count for 11! on 2018-12-23 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 11 on 2018-12-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.79.32', '2018-12-23'),
(698, 'New view count for 26! on 2018-12-23 by IP 180.76.15.147', 'The IP 180.76.15.147 has view article id 26 on 2018-12-23 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.147', '2018-12-23'),
(699, 'New view count for 25! on 2018-12-23 by IP 180.76.15.10', 'The IP 180.76.15.10 has view article id 25 on 2018-12-23 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.10', '2018-12-23'),
(700, 'New view count for 25! on 2018-12-24 by IP 180.76.15.159', 'The IP 180.76.15.159 has view article id 25 on 2018-12-24 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.159', '2018-12-24'),
(701, 'New view count for 29! on 2018-12-25 by IP 180.76.15.141', 'The IP 180.76.15.141 has view article id 29 on 2018-12-25 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.141', '2018-12-25'),
(702, 'New view count for 26! on 2018-12-25 by IP 180.76.15.16', 'The IP 180.76.15.16 has view article id 26 on 2018-12-25 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.16', '2018-12-25'),
(703, 'New view count for 9! on 2018-12-25 by IP 77.75.79.11', 'The IP 77.75.79.11 has view article id 9 on 2018-12-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.79.11', '2018-12-25'),
(704, 'New view count for 31! on 2018-12-25 by IP 54.90.234.23', 'The IP 54.90.234.23 has view article id 31 on 2018-12-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '54.90.234.23', '2018-12-25'),
(705, 'New view count for 29! on 2018-12-25 by IP 54.90.234.23', 'The IP 54.90.234.23 has view article id 29 on 2018-12-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '54.90.234.23', '2018-12-25'),
(706, 'New view count for 23! on 2018-12-26 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 23 on 2018-12-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.77.109', '2018-12-26'),
(707, 'New view count for 4! on 2018-12-26 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 4 on 2018-12-26 using os iOS browser Browser  version  by user Anonymous', 4, '141.8.142.76', '2018-12-26'),
(708, 'New view count for 29! on 2018-12-26 by IP 180.76.15.26', 'The IP 180.76.15.26 has view article id 29 on 2018-12-26 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.26', '2018-12-26'),
(709, 'New view count for 25! on 2018-12-26 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 25 on 2018-12-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.77.36', '2018-12-26'),
(710, 'New view count for 15! on 2018-12-26 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 15 on 2018-12-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.79.32', '2018-12-26'),
(711, 'New view count for 20! on 2018-12-26 by IP 66.249.69.67', 'The IP 66.249.69.67 has view article id 20 on 2018-12-26 using os Android browser Browser  version  by user Anonymous', 20, '66.249.69.67', '2018-12-26'),
(712, 'New view count for 18! on 2018-12-27 by IP 157.55.39.195', 'The IP 157.55.39.195 has view article id 18 on 2018-12-27 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.195', '2018-12-27'),
(713, 'New view count for 28! on 2018-12-27 by IP 207.46.13.144', 'The IP 207.46.13.144 has view article id 28 on 2018-12-27 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.144', '2018-12-27'),
(714, 'New view count for 13! on 2018-12-27 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 13 on 2018-12-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.77.62', '2018-12-27'),
(715, 'New view count for 29! on 2018-12-27 by IP 180.76.15.5', 'The IP 180.76.15.5 has view article id 29 on 2018-12-27 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.5', '2018-12-27'),
(716, 'New view count for 14! on 2018-12-27 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 14 on 2018-12-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.169', '2018-12-27'),
(717, 'New view count for 26! on 2018-12-27 by IP 180.76.15.13', 'The IP 180.76.15.13 has view article id 26 on 2018-12-27 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.13', '2018-12-27'),
(718, 'New view count for 28! on 2018-12-28 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 28 on 2018-12-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.79.62', '2018-12-28'),
(719, 'New view count for 31! on 2018-12-28 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 31 on 2018-12-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.77.62', '2018-12-28'),
(720, 'New view count for 29! on 2018-12-28 by IP 180.76.15.18', 'The IP 180.76.15.18 has view article id 29 on 2018-12-28 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.18', '2018-12-28'),
(721, 'New view count for 19! on 2018-12-28 by IP 77.75.79.11', 'The IP 77.75.79.11 has view article id 19 on 2018-12-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.79.11', '2018-12-28'),
(722, 'New view count for 16! on 2018-12-28 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 16 on 2018-12-28 using os Android browser Browser  version  by user Anonymous', 16, '66.249.79.46', '2018-12-28'),
(723, 'New view count for 18! on 2018-12-28 by IP 77.75.76.172', 'The IP 77.75.76.172 has view article id 18 on 2018-12-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.172', '2018-12-28'),
(724, 'New view count for 18! on 2018-12-29 by IP 77.75.76.172', 'The IP 77.75.76.172 has view article id 18 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.172', '2018-12-29'),
(725, 'New view count for 13! on 2018-12-29 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 13 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.78.168', '2018-12-29'),
(726, 'New view count for 29! on 2018-12-29 by IP 180.76.15.151', 'The IP 180.76.15.151 has view article id 29 on 2018-12-29 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.151', '2018-12-29'),
(727, 'New view count for 27! on 2018-12-29 by IP 180.76.15.160', 'The IP 180.76.15.160 has view article id 27 on 2018-12-29 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.160', '2018-12-29'),
(728, 'New view count for 8! on 2018-12-29 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 8 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.79.101', '2018-12-29'),
(729, 'New view count for 23! on 2018-12-29 by IP 66.249.66.137', 'The IP 66.249.66.137 has view article id 23 on 2018-12-29 using os Android browser Browser  version  by user Anonymous', 23, '66.249.66.137', '2018-12-29'),
(730, 'New view count for 25! on 2018-12-29 by IP 66.249.66.137', 'The IP 66.249.66.137 has view article id 25 on 2018-12-29 using os Android browser Browser  version  by user Anonymous', 25, '66.249.66.137', '2018-12-29'),
(731, 'New view count for 29! on 2018-12-29 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 29 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.76.171', '2018-12-29'),
(732, 'New view count for 26! on 2018-12-29 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 26 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.79.62', '2018-12-29'),
(733, 'New view count for 30! on 2018-12-29 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 30 on 2018-12-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.78.163', '2018-12-29'),
(734, 'New view count for 19! on 2018-12-30 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 19 on 2018-12-30 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '141.8.142.76', '2018-12-30'),
(735, 'New view count for 11! on 2018-12-30 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 11 on 2018-12-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.76.162', '2018-12-30'),
(736, 'New view count for 18! on 2018-12-30 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 18 on 2018-12-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.78.168', '2018-12-30'),
(737, 'New view count for 19! on 2018-12-30 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 19 on 2018-12-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.76.163', '2018-12-30'),
(738, 'New view count for 12! on 2018-12-31 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 12 on 2018-12-31 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.76.171', '2018-12-31'),
(739, 'New view count for 14! on 2018-12-31 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 14 on 2018-12-31 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.79.101', '2018-12-31'),
(740, 'New view count for 29! on 2018-12-31 by IP 180.76.15.28', 'The IP 180.76.15.28 has view article id 29 on 2018-12-31 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '180.76.15.28', '2018-12-31'),
(741, 'New view count for 23! on 2019-01-01 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 23 on 2019-01-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.79.32', '2019-01-01'),
(742, 'New view count for 30! on 2019-01-01 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 30 on 2019-01-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.78.169', '2019-01-01'),
(743, 'New view count for 25! on 2019-01-01 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 25 on 2019-01-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.79.17', '2019-01-01'),
(744, 'New view count for 9! on 2019-01-01 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 9 on 2019-01-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.170', '2019-01-01'),
(745, 'New view count for 31! on 2019-01-01 by IP 77.75.78.160', 'The IP 77.75.78.160 has view article id 31 on 2019-01-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.78.160', '2019-01-01'),
(746, 'New view count for 10! on 2019-01-02 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 10 on 2019-01-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.76.162', '2019-01-02'),
(747, 'New view count for 13! on 2019-01-02 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 13 on 2019-01-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.76.162', '2019-01-02'),
(748, 'New view count for 19! on 2019-01-02 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 19 on 2019-01-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.78.170', '2019-01-02'),
(749, 'New view count for 27! on 2019-01-02 by IP 180.76.15.32', 'The IP 180.76.15.32 has view article id 27 on 2019-01-02 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '180.76.15.32', '2019-01-02'),
(750, 'New view count for 15! on 2019-01-02 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 15 on 2019-01-02 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '37.9.113.4', '2019-01-02'),
(751, 'New view count for 24! on 2019-01-03 by IP 157.55.39.55', 'The IP 157.55.39.55 has view article id 24 on 2019-01-03 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.55', '2019-01-03'),
(752, 'New view count for 24! on 2019-01-03 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 24 on 2019-01-03 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.49', '2019-01-03'),
(753, 'New view count for 28! on 2019-01-03 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 28 on 2019-01-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.76.162', '2019-01-03'),
(754, 'New view count for 12! on 2019-01-04 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 12 on 2019-01-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.167', '2019-01-04'),
(755, 'New view count for 11! on 2019-01-04 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 11 on 2019-01-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.78.164', '2019-01-04'),
(756, 'New view count for 17! on 2019-01-05 by IP 157.55.39.251', 'The IP 157.55.39.251 has view article id 17 on 2019-01-05 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.251', '2019-01-05'),
(757, 'New view count for 27! on 2019-01-05 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 27 on 2019-01-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.76.163', '2019-01-05'),
(758, 'New view count for 24! on 2019-01-05 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 24 on 2019-01-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.78.172', '2019-01-05'),
(759, 'New view count for 10! on 2019-01-05 by IP 77.75.77.17', 'The IP 77.75.77.17 has view article id 10 on 2019-01-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.77.17', '2019-01-05'),
(760, 'New view count for 31! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 31 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 31, '116.203.43.188', '2019-01-06'),
(761, 'New view count for 29! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 29 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 29, '116.203.43.188', '2019-01-06'),
(762, 'New view count for 28! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 28 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 28, '116.203.43.188', '2019-01-06'),
(763, 'New view count for 27! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 27 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 27, '116.203.43.188', '2019-01-06'),
(764, 'New view count for 26! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 26 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 26, '116.203.43.188', '2019-01-06'),
(765, 'New view count for 25! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 25 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 25, '116.203.43.188', '2019-01-06'),
(766, 'New view count for 24! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 24 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 24, '116.203.43.188', '2019-01-06'),
(767, 'New view count for 23! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 23 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 23, '116.203.43.188', '2019-01-06'),
(768, 'New view count for 22! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 22 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 22, '116.203.43.188', '2019-01-06'),
(769, 'New view count for 20! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 20 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 20, '116.203.43.188', '2019-01-06'),
(770, 'New view count for 2! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 2 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 2, '116.203.43.188', '2019-01-06'),
(771, 'New view count for 30! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 30 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 30, '116.203.43.188', '2019-01-06'),
(772, 'New view count for 15! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 15 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 15, '116.203.43.188', '2019-01-06'),
(773, 'New view count for 14! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 14 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 14, '116.203.43.188', '2019-01-06'),
(774, 'New view count for 13! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 13 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 13, '116.203.43.188', '2019-01-06'),
(775, 'New view count for 12! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 12 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 12, '116.203.43.188', '2019-01-06'),
(776, 'New view count for 11! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 11 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 11, '116.203.43.188', '2019-01-06'),
(777, 'New view count for 10! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 10 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 10, '116.203.43.188', '2019-01-06'),
(778, 'New view count for 9! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 9 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 9, '116.203.43.188', '2019-01-06'),
(779, 'New view count for 8! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 8 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 8, '116.203.43.188', '2019-01-06'),
(780, 'New view count for 6! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 6 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 6, '116.203.43.188', '2019-01-06'),
(781, 'New view count for 4! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 4 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 4, '116.203.43.188', '2019-01-06'),
(782, 'New view count for 3! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 3 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 3, '116.203.43.188', '2019-01-06'),
(783, 'New view count for 1! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 1 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 1, '116.203.43.188', '2019-01-06'),
(784, 'New view count for 18! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 18 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 18, '116.203.43.188', '2019-01-06'),
(785, 'New view count for 19! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 19 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 19, '116.203.43.188', '2019-01-06'),
(786, 'New view count for 17! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 17 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 17, '116.203.43.188', '2019-01-06'),
(787, 'New view count for 16! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 16 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 16, '116.203.43.188', '2019-01-06'),
(788, 'New view count for 7! on 2019-01-06 by IP 116.203.43.188', 'The IP 116.203.43.188 has view article id 7 on 2019-01-06 using os Windows 10 browser Browser Chrome version 68.0.3440.84 by user Anonymous', 7, '116.203.43.188', '2019-01-06'),
(789, 'New view count for 29! on 2019-01-07 by IP 40.77.167.32', 'The IP 40.77.167.32 has view article id 29 on 2019-01-07 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '40.77.167.32', '2019-01-07'),
(790, 'New view count for 15! on 2019-01-07 by IP 40.77.167.121', 'The IP 40.77.167.121 has view article id 15 on 2019-01-07 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.121', '2019-01-07'),
(791, 'New view count for 18! on 2019-01-07 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 18 on 2019-01-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.77.11', '2019-01-07'),
(792, 'New view count for 11! on 2019-01-07 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 11 on 2019-01-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.79.101', '2019-01-07'),
(793, 'New view count for 9! on 2019-01-08 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 9 on 2019-01-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.161', '2019-01-08'),
(794, 'New view count for 23! on 2019-01-09 by IP 157.55.39.107', 'The IP 157.55.39.107 has view article id 23 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.107', '2019-01-09'),
(795, 'New view count for 22! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 22 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '78.46.206.172', '2019-01-09'),
(796, 'New view count for 29! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 29 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '78.46.206.172', '2019-01-09'),
(797, 'New view count for 31! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 31 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '78.46.206.172', '2019-01-09'),
(798, 'New view count for 23! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 23 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '78.46.206.172', '2019-01-09'),
(799, 'New view count for 26! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 26 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '78.46.206.172', '2019-01-09'),
(800, 'New view count for 28! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 28 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '78.46.206.172', '2019-01-09'),
(801, 'New view count for 25! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 25 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '78.46.206.172', '2019-01-09'),
(802, 'New view count for 24! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 24 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '78.46.206.172', '2019-01-09'),
(803, 'New view count for 27! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 27 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '78.46.206.172', '2019-01-09'),
(804, 'New view count for 20! on 2019-01-09 by IP 78.46.206.172', 'The IP 78.46.206.172 has view article id 20 on 2019-01-09 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '78.46.206.172', '2019-01-09'),
(805, 'New view count for 19! on 2019-01-10 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 19 on 2019-01-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.79.32', '2019-01-10'),
(806, 'New view count for 23! on 2019-01-10 by IP 104.192.74.237', 'The IP 104.192.74.237 has view article id 23 on 2019-01-10 using os Linux browser Browser Chrome version 70.0.3538.110 by user Anonymous', 23, '104.192.74.237', '2019-01-10'),
(807, 'New view count for 8! on 2019-01-11 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 8 on 2019-01-11 using os Unknown Platform browser Browser  version  by user Anonymous', 8, '37.9.113.4', '2019-01-11'),
(808, 'New view count for 7! on 2019-01-11 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 7 on 2019-01-11 using os Unknown Platform browser Browser  version  by user Anonymous', 7, '141.8.142.76', '2019-01-11'),
(809, 'New view count for 8! on 2019-01-11 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 8 on 2019-01-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.77.109', '2019-01-11'),
(810, 'New view count for 18! on 2019-01-12 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 18 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.78.166', '2019-01-12'),
(811, 'New view count for 10! on 2019-01-12 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 10 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.78.166', '2019-01-12'),
(812, 'New view count for 22! on 2019-01-12 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 22 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.172', '2019-01-12'),
(813, 'New view count for 27! on 2019-01-12 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 27 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.78.172', '2019-01-12'),
(814, 'New view count for 15! on 2019-01-12 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 15 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.77.109', '2019-01-12'),
(815, 'New view count for 9! on 2019-01-12 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 9 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.76.164', '2019-01-12'),
(816, 'New view count for 24! on 2019-01-12 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 24 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.77.62', '2019-01-12'),
(817, 'New view count for 14! on 2019-01-12 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 14 on 2019-01-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.79.17', '2019-01-12'),
(818, 'New view count for 28! on 2019-01-12 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 28 on 2019-01-12 using os Android browser Browser  version  by user Anonymous', 28, '66.249.79.49', '2019-01-12'),
(819, 'New view count for 26! on 2019-01-12 by IP 180.76.15.31', 'The IP 180.76.15.31 has view article id 26 on 2019-01-12 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.31', '2019-01-12'),
(820, 'New view count for 26! on 2019-01-14 by IP 185.217.71.150', 'The IP 185.217.71.150 has view article id 26 on 2019-01-14 using os Mac OS X browser Browser Chrome version 64.0.3282.167 by user Anonymous', 26, '185.217.71.150', '2019-01-14'),
(821, 'New view count for 8! on 2019-01-14 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 8 on 2019-01-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.78.166', '2019-01-14'),
(822, 'New view count for 3! on 2019-01-14 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 3 on 2019-01-14 using os Unknown Platform browser Browser  version  by user Anonymous', 3, '37.9.113.4', '2019-01-14'),
(823, 'New view count for 18! on 2019-01-14 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 18 on 2019-01-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.78.164', '2019-01-14'),
(824, 'New view count for 19! on 2019-01-14 by IP 40.77.167.140', 'The IP 40.77.167.140 has view article id 19 on 2019-01-14 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.140', '2019-01-14'),
(825, 'New view count for 26! on 2019-01-16 by IP 49.229.250.173', 'The IP 49.229.250.173 has view article id 26 on 2019-01-16 using os Android browser Browser Chrome version 71.0.3578.99 by user Anonymous', 26, '49.229.250.173', '2019-01-16'),
(826, 'New view count for 26! on 2019-01-16 by IP 180.76.15.7', 'The IP 180.76.15.7 has view article id 26 on 2019-01-16 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.7', '2019-01-16'),
(827, 'New view count for 27! on 2019-01-16 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 27 on 2019-01-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.79.62', '2019-01-16'),
(828, 'New view count for 15! on 2019-01-17 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 15 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.79.62', '2019-01-17'),
(829, 'New view count for 4! on 2019-01-17 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 4 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.79.62', '2019-01-17'),
(830, 'New view count for 22! on 2019-01-17 by IP 77.75.76.166', 'The IP 77.75.76.166 has view article id 22 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.76.166', '2019-01-17'),
(831, 'New view count for 1! on 2019-01-17 by IP 77.75.76.166', 'The IP 77.75.76.166 has view article id 1 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.76.166', '2019-01-17'),
(832, 'New view count for 20! on 2019-01-17 by IP 77.75.76.160', 'The IP 77.75.76.160 has view article id 20 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.76.160', '2019-01-17'),
(833, 'New view count for 3! on 2019-01-17 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 3 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.79.95', '2019-01-17'),
(834, 'New view count for 29! on 2019-01-17 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 29 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.161', '2019-01-17'),
(835, 'New view count for 6! on 2019-01-17 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 6 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.161', '2019-01-17'),
(836, 'New view count for 18! on 2019-01-17 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 18 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.79.54', '2019-01-17'),
(837, 'New view count for 9! on 2019-01-17 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 9 on 2019-01-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.79.101', '2019-01-17'),
(838, 'New view count for 31! on 2019-01-19 by IP 223.24.189.27', 'The IP 223.24.189.27 has view article id 31 on 2019-01-19 using os Linux browser Browser Firefox version 64.0 by user Anonymous', 31, '223.24.189.27', '2019-01-19'),
(839, 'New view count for 27! on 2019-01-19 by IP 1.46.131.167', 'The IP 1.46.131.167 has view article id 27 on 2019-01-19 using os Android browser Browser Chrome version 71.0.3578.99 by user Anonymous', 27, '1.46.131.167', '2019-01-19'),
(840, 'New view count for 29! on 2019-01-19 by IP 223.24.189.27', 'The IP 223.24.189.27 has view article id 29 on 2019-01-19 using os Linux browser Browser Firefox version 64.0 by user Anonymous', 29, '223.24.189.27', '2019-01-19'),
(841, 'New view count for 31! on 2019-01-19 by IP 1.46.131.167', 'The IP 1.46.131.167 has view article id 31 on 2019-01-19 using os Android browser Browser Chrome version 71.0.3578.99 by user Anonymous', 31, '1.46.131.167', '2019-01-19'),
(842, 'New view count for 27! on 2019-01-19 by IP 207.46.13.229', 'The IP 207.46.13.229 has view article id 27 on 2019-01-19 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.229', '2019-01-19'),
(843, 'New view count for 20! on 2019-01-19 by IP 49.229.74.177', 'The IP 49.229.74.177 has view article id 20 on 2019-01-19 using os Android browser Browser Chrome version 71.0.3578.99 by user Anonymous', 20, '49.229.74.177', '2019-01-19'),
(844, 'New view count for 31! on 2019-01-19 by IP 101.165.208.17', 'The IP 101.165.208.17 has view article id 31 on 2019-01-19 using os iOS browser Browser Mozilla version 5.0 by user Anonymous', 31, '101.165.208.17', '2019-01-19'),
(845, 'New view count for 20! on 2019-01-19 by IP 206.189.8.141', 'The IP 206.189.8.141 has view article id 20 on 2019-01-19 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '206.189.8.141', '2019-01-19'),
(846, 'New view count for 18! on 2019-01-19 by IP 206.189.8.141', 'The IP 206.189.8.141 has view article id 18 on 2019-01-19 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '206.189.8.141', '2019-01-19'),
(847, 'New view count for 17! on 2019-01-19 by IP 157.55.39.69', 'The IP 157.55.39.69 has view article id 17 on 2019-01-19 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.69', '2019-01-19'),
(848, 'New view count for 8! on 2019-01-19 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 8 on 2019-01-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.77.11', '2019-01-19'),
(849, 'New view count for 3! on 2019-01-19 by IP 77.75.77.54', 'The IP 77.75.77.54 has view article id 3 on 2019-01-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.77.54', '2019-01-19'),
(850, 'New view count for 6! on 2019-01-19 by IP 77.75.76.160', 'The IP 77.75.76.160 has view article id 6 on 2019-01-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.76.160', '2019-01-19'),
(851, 'New view count for 4! on 2019-01-19 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 4 on 2019-01-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.77.11', '2019-01-19'),
(852, 'New view count for 16! on 2019-01-19 by IP 207.46.13.182', 'The IP 207.46.13.182 has view article id 16 on 2019-01-19 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.182', '2019-01-19'),
(853, 'New view count for 1! on 2019-01-19 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 1 on 2019-01-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.167', '2019-01-19');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(854, 'New view count for 23! on 2019-01-19 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 23 on 2019-01-19 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.46', '2019-01-19'),
(855, 'New view count for 20! on 2019-01-19 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 20 on 2019-01-19 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.52', '2019-01-19'),
(856, 'New view count for 20! on 2019-01-20 by IP 223.24.146.130', 'The IP 223.24.146.130 has view article id 20 on 2019-01-20 using os Linux browser Browser Firefox version 64.0 by user Anonymous', 20, '223.24.146.130', '2019-01-20'),
(857, 'New view count for 25! on 2019-01-20 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 25 on 2019-01-20 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.52', '2019-01-20'),
(858, 'New view count for 3! on 2019-01-20 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 3 on 2019-01-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.79.54', '2019-01-20'),
(859, 'New view count for 20! on 2019-01-21 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 20 on 2019-01-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.163', '2019-01-21'),
(860, 'New view count for 15! on 2019-01-21 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 15 on 2019-01-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.164', '2019-01-21'),
(861, 'New view count for 16! on 2019-01-21 by IP 207.46.13.224', 'The IP 207.46.13.224 has view article id 16 on 2019-01-21 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.224', '2019-01-21'),
(862, 'New view count for 14! on 2019-01-21 by IP 207.46.13.29', 'The IP 207.46.13.29 has view article id 14 on 2019-01-21 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '207.46.13.29', '2019-01-21'),
(863, 'New view count for 11! on 2019-01-21 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 11 on 2019-01-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.76.170', '2019-01-21'),
(864, 'New view count for 20! on 2019-01-21 by IP 180.76.15.33', 'The IP 180.76.15.33 has view article id 20 on 2019-01-21 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.33', '2019-01-21'),
(865, 'New view count for 28! on 2019-01-22 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 28 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.174', '2019-01-22'),
(866, 'New view count for 24! on 2019-01-22 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 24 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.174', '2019-01-22'),
(867, 'New view count for 23! on 2019-01-22 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 23 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.174', '2019-01-22'),
(868, 'New view count for 16! on 2019-01-22 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 16 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.174', '2019-01-22'),
(869, 'New view count for 25! on 2019-01-22 by IP 40.77.167.103', 'The IP 40.77.167.103 has view article id 25 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.103', '2019-01-22'),
(870, 'New view count for 22! on 2019-01-22 by IP 40.77.167.103', 'The IP 40.77.167.103 has view article id 22 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '40.77.167.103', '2019-01-22'),
(871, 'New view count for 17! on 2019-01-22 by IP 40.77.167.103', 'The IP 40.77.167.103 has view article id 17 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.103', '2019-01-22'),
(872, 'New view count for 27! on 2019-01-22 by IP 157.55.39.164', 'The IP 157.55.39.164 has view article id 27 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '157.55.39.164', '2019-01-22'),
(873, 'New view count for 20! on 2019-01-22 by IP 157.55.39.164', 'The IP 157.55.39.164 has view article id 20 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.164', '2019-01-22'),
(874, 'New view count for 19! on 2019-01-22 by IP 157.55.39.164', 'The IP 157.55.39.164 has view article id 19 on 2019-01-22 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '157.55.39.164', '2019-01-22'),
(875, 'New view count for 3! on 2019-01-22 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 3 on 2019-01-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.78.163', '2019-01-22'),
(876, 'New view count for 4! on 2019-01-22 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 4 on 2019-01-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.78.165', '2019-01-22'),
(877, 'New view count for 6! on 2019-01-22 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 6 on 2019-01-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.76.163', '2019-01-22'),
(878, 'New view count for 1! on 2019-01-22 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 1 on 2019-01-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.165', '2019-01-22'),
(879, 'New view count for 8! on 2019-01-23 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 8 on 2019-01-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.76.171', '2019-01-23'),
(880, 'New view count for 19! on 2019-01-23 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 19 on 2019-01-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.76.170', '2019-01-23'),
(881, 'New view count for 20! on 2019-01-23 by IP 223.24.144.232', 'The IP 223.24.144.232 has view article id 20 on 2019-01-23 using os Windows 7 browser Browser Chrome version 71.0.3578.98 by user Anonymous', 20, '223.24.144.232', '2019-01-23'),
(882, 'New view count for 29! on 2019-01-23 by IP 77.75.79.11', 'The IP 77.75.79.11 has view article id 29 on 2019-01-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.79.11', '2019-01-23'),
(883, 'New view count for 20! on 2019-01-23 by IP 66.249.75.153', 'The IP 66.249.75.153 has view article id 20 on 2019-01-23 using os Android browser Browser  version  by user Anonymous', 20, '66.249.75.153', '2019-01-23'),
(884, 'New view count for 25! on 2019-01-24 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 25 on 2019-01-24 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.46', '2019-01-24'),
(885, 'New view count for 1! on 2019-01-24 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 1 on 2019-01-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.165', '2019-01-24'),
(886, 'New view count for 25! on 2019-01-24 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 25 on 2019-01-24 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.49', '2019-01-24'),
(887, 'New view count for 8! on 2019-01-24 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 8 on 2019-01-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.76.162', '2019-01-24'),
(888, 'New view count for 6! on 2019-01-25 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 6 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.166', '2019-01-25'),
(889, 'New view count for 6! on 2019-01-25 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 6 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.169', '2019-01-25'),
(890, 'New view count for 15! on 2019-01-25 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 15 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.77.36', '2019-01-25'),
(891, 'New view count for 20! on 2019-01-25 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 20 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.79.62', '2019-01-25'),
(892, 'New view count for 25! on 2019-01-25 by IP 207.46.13.147', 'The IP 207.46.13.147 has view article id 25 on 2019-01-25 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.147', '2019-01-25'),
(893, 'New view count for 26! on 2019-01-25 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 26 on 2019-01-25 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.136', '2019-01-25'),
(894, 'New view count for 4! on 2019-01-25 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 4 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.79.95', '2019-01-25'),
(895, 'New view count for 11! on 2019-01-25 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 11 on 2019-01-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.77.36', '2019-01-25'),
(896, 'New view count for 20! on 2019-01-26 by IP 31.207.5.55', 'The IP 31.207.5.55 has view article id 20 on 2019-01-26 using os Linux browser Browser Firefox version 52.9 by user Anonymous', 20, '31.207.5.55', '2019-01-26'),
(897, 'New view count for 13! on 2019-01-26 by IP 77.75.77.72', 'The IP 77.75.77.72 has view article id 13 on 2019-01-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.77.72', '2019-01-26'),
(898, 'New view count for 10! on 2019-01-26 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 10 on 2019-01-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.76.171', '2019-01-26'),
(899, 'New view count for 29! on 2019-01-26 by IP 40.77.167.110', 'The IP 40.77.167.110 has view article id 29 on 2019-01-26 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '40.77.167.110', '2019-01-26'),
(900, 'New view count for 28! on 2019-01-26 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 28 on 2019-01-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.76.164', '2019-01-26'),
(901, 'New view count for 25! on 2019-01-26 by IP 180.76.15.28', 'The IP 180.76.15.28 has view article id 25 on 2019-01-26 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.28', '2019-01-26'),
(902, 'New view count for 9! on 2019-01-26 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 9 on 2019-01-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.168', '2019-01-26'),
(903, 'New view count for 31! on 2019-01-27 by IP 141.8.142.30', 'The IP 141.8.142.30 has view article id 31 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '141.8.142.30', '2019-01-27'),
(904, 'New view count for 26! on 2019-01-27 by IP 157.55.39.112', 'The IP 157.55.39.112 has view article id 26 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '157.55.39.112', '2019-01-27'),
(905, 'New view count for 14! on 2019-01-27 by IP 157.55.39.112', 'The IP 157.55.39.112 has view article id 14 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '157.55.39.112', '2019-01-27'),
(906, 'New view count for 18! on 2019-01-27 by IP 157.55.39.112', 'The IP 157.55.39.112 has view article id 18 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.112', '2019-01-27'),
(907, 'New view count for 27! on 2019-01-27 by IP 207.46.13.176', 'The IP 207.46.13.176 has view article id 27 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.176', '2019-01-27'),
(908, 'New view count for 15! on 2019-01-27 by IP 207.46.13.176', 'The IP 207.46.13.176 has view article id 15 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '207.46.13.176', '2019-01-27'),
(909, 'New view count for 20! on 2019-01-27 by IP 207.46.13.176', 'The IP 207.46.13.176 has view article id 20 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '207.46.13.176', '2019-01-27'),
(910, 'New view count for 19! on 2019-01-27 by IP 207.46.13.176', 'The IP 207.46.13.176 has view article id 19 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '207.46.13.176', '2019-01-27'),
(911, 'New view count for 28! on 2019-01-27 by IP 157.55.39.229', 'The IP 157.55.39.229 has view article id 28 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '157.55.39.229', '2019-01-27'),
(912, 'New view count for 24! on 2019-01-27 by IP 157.55.39.229', 'The IP 157.55.39.229 has view article id 24 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.229', '2019-01-27'),
(913, 'New view count for 23! on 2019-01-27 by IP 157.55.39.229', 'The IP 157.55.39.229 has view article id 23 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.229', '2019-01-27'),
(914, 'New view count for 16! on 2019-01-27 by IP 157.55.39.229', 'The IP 157.55.39.229 has view article id 16 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '157.55.39.229', '2019-01-27'),
(915, 'New view count for 25! on 2019-01-27 by IP 40.77.167.64', 'The IP 40.77.167.64 has view article id 25 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.64', '2019-01-27'),
(916, 'New view count for 22! on 2019-01-27 by IP 40.77.167.64', 'The IP 40.77.167.64 has view article id 22 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '40.77.167.64', '2019-01-27'),
(917, 'New view count for 17! on 2019-01-27 by IP 40.77.167.64', 'The IP 40.77.167.64 has view article id 17 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.64', '2019-01-27'),
(918, 'New view count for 20! on 2019-01-27 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 20 on 2019-01-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.76.164', '2019-01-27'),
(919, 'New view count for 17! on 2019-01-27 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 17 on 2019-01-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.77.119', '2019-01-27'),
(920, 'New view count for 25! on 2019-01-27 by IP 180.76.15.23', 'The IP 180.76.15.23 has view article id 25 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.23', '2019-01-27'),
(921, 'New view count for 19! on 2019-01-27 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 19 on 2019-01-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.78.163', '2019-01-27'),
(922, 'New view count for 11! on 2019-01-27 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 11 on 2019-01-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.76.164', '2019-01-27'),
(923, 'New view count for 23! on 2019-01-27 by IP 207.46.13.110', 'The IP 207.46.13.110 has view article id 23 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.110', '2019-01-27'),
(924, 'New view count for 25! on 2019-01-27 by IP 180.76.15.163', 'The IP 180.76.15.163 has view article id 25 on 2019-01-27 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '180.76.15.163', '2019-01-27'),
(925, 'New view count for 16! on 2019-01-28 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 16 on 2019-01-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.77.119', '2019-01-28'),
(926, 'New view count for 4! on 2019-01-28 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 4 on 2019-01-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.79.95', '2019-01-28'),
(927, 'New view count for 12! on 2019-01-28 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 12 on 2019-01-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.76.167', '2019-01-28'),
(928, 'New view count for 29! on 2019-01-28 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 29 on 2019-01-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.76.167', '2019-01-28'),
(929, 'New view count for 25! on 2019-01-28 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 25 on 2019-01-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.77.62', '2019-01-28'),
(930, 'New view count for 1! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 1 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '145.239.92.38', '2019-01-29'),
(931, 'New view count for 16! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 16 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '145.239.92.38', '2019-01-29'),
(932, 'New view count for 17! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 17 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '145.239.92.38', '2019-01-29'),
(933, 'New view count for 19! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 19 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '145.239.92.38', '2019-01-29'),
(934, 'New view count for 2! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 2 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '145.239.92.38', '2019-01-29'),
(935, 'New view count for 20! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 20 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '145.239.92.38', '2019-01-29'),
(936, 'New view count for 22! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 22 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '145.239.92.38', '2019-01-29'),
(937, 'New view count for 24! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 24 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '145.239.92.38', '2019-01-29'),
(938, 'New view count for 25! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 25 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '145.239.92.38', '2019-01-29'),
(939, 'New view count for 28! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 28 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '145.239.92.38', '2019-01-29'),
(940, 'New view count for 3! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 3 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '145.239.92.38', '2019-01-29'),
(941, 'New view count for 31! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 31 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '145.239.92.38', '2019-01-29'),
(942, 'New view count for 4! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 4 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '145.239.92.38', '2019-01-29'),
(943, 'New view count for 7! on 2019-01-29 by IP 145.239.92.38', 'The IP 145.239.92.38 has view article id 7 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '145.239.92.38', '2019-01-29'),
(944, 'New view count for 30! on 2019-01-29 by IP 144.76.3.131', 'The IP 144.76.3.131 has view article id 30 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '144.76.3.131', '2019-01-29'),
(945, 'New view count for 6! on 2019-01-29 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 6 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.76.164', '2019-01-29'),
(946, 'New view count for 13! on 2019-01-29 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 13 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.78.162', '2019-01-29'),
(947, 'New view count for 7! on 2019-01-29 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 7 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.78.162', '2019-01-29'),
(948, 'New view count for 16! on 2019-01-29 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 16 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.78.169', '2019-01-29'),
(949, 'New view count for 28! on 2019-01-29 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 28 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.78.169', '2019-01-29'),
(950, 'New view count for 10! on 2019-01-29 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 10 on 2019-01-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.79.54', '2019-01-29'),
(951, 'New view count for 9! on 2019-01-30 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 9 on 2019-01-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.77.109', '2019-01-30'),
(952, 'New view count for 24! on 2019-01-30 by IP 213.180.203.39', 'The IP 213.180.203.39 has view article id 24 on 2019-01-30 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '213.180.203.39', '2019-01-30'),
(953, 'New view count for 23! on 2019-01-30 by IP 178.154.171.82', 'The IP 178.154.171.82 has view article id 23 on 2019-01-30 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '178.154.171.82', '2019-01-30'),
(954, 'New view count for 17! on 2019-01-30 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 17 on 2019-01-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.79.95', '2019-01-30'),
(955, 'New view count for 4! on 2019-01-30 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 4 on 2019-01-30 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.77.119', '2019-01-30'),
(956, 'New view count for 25! on 2019-01-30 by IP 178.154.244.16', 'The IP 178.154.244.16 has view article id 25 on 2019-01-30 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '178.154.244.16', '2019-01-30'),
(957, 'New view count for 24! on 2019-01-31 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 24 on 2019-01-31 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.52', '2019-01-31'),
(958, 'New view count for 23! on 2019-01-31 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 23 on 2019-01-31 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.49', '2019-01-31'),
(959, 'New view count for 13! on 2019-01-31 by IP 77.75.77.72', 'The IP 77.75.77.72 has view article id 13 on 2019-01-31 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.77.72', '2019-01-31'),
(960, 'New view count for 29! on 2019-01-31 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 29 on 2019-01-31 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.79.32', '2019-01-31'),
(961, 'New view count for 20! on 2019-02-01 by IP 180.76.15.135', 'The IP 180.76.15.135 has view article id 20 on 2019-02-01 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.135', '2019-02-01'),
(962, 'New view count for 25! on 2019-02-01 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 25 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.78.166', '2019-02-01'),
(963, 'New view count for 12! on 2019-02-01 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 12 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.163', '2019-02-01'),
(964, 'New view count for 10! on 2019-02-01 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 10 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.77.62', '2019-02-01'),
(965, 'New view count for 17! on 2019-02-01 by IP 77.75.78.171', 'The IP 77.75.78.171 has view article id 17 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.78.171', '2019-02-01'),
(966, 'New view count for 16! on 2019-02-01 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 16 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.79.95', '2019-02-01'),
(967, 'New view count for 7! on 2019-02-01 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 7 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.79.95', '2019-02-01'),
(968, 'New view count for 9! on 2019-02-01 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 9 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.78.162', '2019-02-01'),
(969, 'New view count for 28! on 2019-02-01 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 28 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.76.163', '2019-02-01'),
(970, 'New view count for 29! on 2019-02-01 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 29 on 2019-02-01 using os Android browser Browser  version  by user Anonymous', 29, '66.249.79.46', '2019-02-01'),
(971, 'New view count for 6! on 2019-02-01 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 6 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.77.36', '2019-02-01'),
(972, 'New view count for 1! on 2019-02-01 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 1 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.76.163', '2019-02-01'),
(973, 'New view count for 3! on 2019-02-01 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 3 on 2019-02-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.76.163', '2019-02-01'),
(974, 'New view count for 23! on 2019-02-02 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 23 on 2019-02-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.77.119', '2019-02-02'),
(975, 'New view count for 18! on 2019-02-02 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 18 on 2019-02-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.167', '2019-02-02'),
(976, 'New view count for 24! on 2019-02-02 by IP 207.46.13.50', 'The IP 207.46.13.50 has view article id 24 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.50', '2019-02-02'),
(977, 'New view count for 30! on 2019-02-02 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 30 on 2019-02-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.79.54', '2019-02-02'),
(978, 'New view count for 18! on 2019-02-02 by IP 148.251.36.84', 'The IP 148.251.36.84 has view article id 18 on 2019-02-02 using os Windows 8 browser Browser Chrome version 66.0.3359.139 by user Anonymous', 18, '148.251.36.84', '2019-02-02'),
(979, 'New view count for 26! on 2019-02-02 by IP 157.55.39.60', 'The IP 157.55.39.60 has view article id 26 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '157.55.39.60', '2019-02-02'),
(980, 'New view count for 18! on 2019-02-02 by IP 157.55.39.60', 'The IP 157.55.39.60 has view article id 18 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.60', '2019-02-02'),
(981, 'New view count for 14! on 2019-02-02 by IP 157.55.39.60', 'The IP 157.55.39.60 has view article id 14 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '157.55.39.60', '2019-02-02'),
(982, 'New view count for 16! on 2019-02-02 by IP 207.46.13.2', 'The IP 207.46.13.2 has view article id 16 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.2', '2019-02-02'),
(983, 'New view count for 23! on 2019-02-02 by IP 207.46.13.2', 'The IP 207.46.13.2 has view article id 23 on 2019-02-02 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.2', '2019-02-02'),
(984, 'New view count for 25! on 2019-02-02 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 25 on 2019-02-02 using os Android browser Browser  version  by user Anonymous', 25, '66.249.79.52', '2019-02-02'),
(985, 'New view count for 20! on 2019-02-03 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 20 on 2019-02-03 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.52', '2019-02-03'),
(986, 'New view count for 22! on 2019-02-03 by IP 5.255.253.23', 'The IP 5.255.253.23 has view article id 22 on 2019-02-03 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '5.255.253.23', '2019-02-03'),
(987, 'New view count for 7! on 2019-02-03 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 7 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.79.54', '2019-02-03'),
(988, 'New view count for 23! on 2019-02-03 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 23 on 2019-02-03 using os Android browser Browser  version  by user Anonymous', 23, '66.249.79.46', '2019-02-03'),
(989, 'New view count for 29! on 2019-02-03 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 29 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.79.62', '2019-02-03'),
(990, 'New view count for 17! on 2019-02-03 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 17 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.79.62', '2019-02-03'),
(991, 'New view count for 12! on 2019-02-03 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 12 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.169', '2019-02-03'),
(992, 'New view count for 26! on 2019-02-03 by IP 40.77.167.5', 'The IP 40.77.167.5 has view article id 26 on 2019-02-03 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.5', '2019-02-03'),
(993, 'New view count for 25! on 2019-02-03 by IP 157.55.39.170', 'The IP 157.55.39.170 has view article id 25 on 2019-02-03 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.170', '2019-02-03'),
(994, 'New view count for 1! on 2019-02-03 by IP 77.75.78.171', 'The IP 77.75.78.171 has view article id 1 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.171', '2019-02-03'),
(995, 'New view count for 25! on 2019-02-03 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 25 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.77.95', '2019-02-03'),
(996, 'New view count for 14! on 2019-02-03 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 14 on 2019-02-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.79.54', '2019-02-03'),
(997, 'New view count for 23! on 2019-02-04 by IP 157.55.39.217', 'The IP 157.55.39.217 has view article id 23 on 2019-02-04 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.217', '2019-02-04'),
(998, 'New view count for 23! on 2019-02-04 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 23 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.79.54', '2019-02-04'),
(999, 'New view count for 30! on 2019-02-04 by IP 77.75.76.172', 'The IP 77.75.76.172 has view article id 30 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.76.172', '2019-02-04'),
(1000, 'New view count for 18! on 2019-02-04 by IP 40.77.167.46', 'The IP 40.77.167.46 has view article id 18 on 2019-02-04 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.46', '2019-02-04'),
(1001, 'New view count for 18! on 2019-02-04 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 18 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.163', '2019-02-04'),
(1002, 'New view count for 29! on 2019-02-04 by IP 157.55.39.54', 'The IP 157.55.39.54 has view article id 29 on 2019-02-04 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.54', '2019-02-04'),
(1003, 'New view count for 23! on 2019-02-04 by IP 207.241.229.50', 'The IP 207.241.229.50 has view article id 23 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '207.241.229.50', '2019-02-04'),
(1004, 'New view count for 26! on 2019-02-04 by IP 207.241.229.147', 'The IP 207.241.229.147 has view article id 26 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '207.241.229.147', '2019-02-04'),
(1005, 'New view count for 29! on 2019-02-04 by IP 207.241.231.150', 'The IP 207.241.231.150 has view article id 29 on 2019-02-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '207.241.231.150', '2019-02-04'),
(1006, 'New view count for 24! on 2019-02-05 by IP 207.241.231.142', 'The IP 207.241.231.142 has view article id 24 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '207.241.231.142', '2019-02-05'),
(1007, 'New view count for 20! on 2019-02-05 by IP 40.77.167.152', 'The IP 40.77.167.152 has view article id 20 on 2019-02-05 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '40.77.167.152', '2019-02-05'),
(1008, 'New view count for 20! on 2019-02-05 by IP 207.241.229.50', 'The IP 207.241.229.50 has view article id 20 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '207.241.229.50', '2019-02-05'),
(1009, 'New view count for 25! on 2019-02-05 by IP 207.241.229.147', 'The IP 207.241.229.147 has view article id 25 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '207.241.229.147', '2019-02-05'),
(1010, 'New view count for 28! on 2019-02-05 by IP 207.241.229.212', 'The IP 207.241.229.212 has view article id 28 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '207.241.229.212', '2019-02-05'),
(1011, 'New view count for 27! on 2019-02-05 by IP 207.241.229.212', 'The IP 207.241.229.212 has view article id 27 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '207.241.229.212', '2019-02-05'),
(1012, 'New view count for 19! on 2019-02-05 by IP 207.241.229.50', 'The IP 207.241.229.50 has view article id 19 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '207.241.229.50', '2019-02-05'),
(1013, 'New view count for 22! on 2019-02-05 by IP 207.241.231.142', 'The IP 207.241.231.142 has view article id 22 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '207.241.231.142', '2019-02-05'),
(1014, 'New view count for 4! on 2019-02-05 by IP 77.75.77.17', 'The IP 77.75.77.17 has view article id 4 on 2019-02-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.77.17', '2019-02-05'),
(1015, 'New view count for 25! on 2019-02-06 by IP 207.46.13.113', 'The IP 207.46.13.113 has view article id 25 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.113', '2019-02-06'),
(1016, 'New view count for 22! on 2019-02-06 by IP 207.46.13.113', 'The IP 207.46.13.113 has view article id 22 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '207.46.13.113', '2019-02-06'),
(1017, 'New view count for 24! on 2019-02-06 by IP 157.55.39.104', 'The IP 157.55.39.104 has view article id 24 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.104', '2019-02-06'),
(1018, 'New view count for 19! on 2019-02-06 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 19 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.111', '2019-02-06'),
(1019, 'New view count for 20! on 2019-02-06 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 20 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '40.77.167.111', '2019-02-06'),
(1020, 'New view count for 27! on 2019-02-06 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 27 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '40.77.167.111', '2019-02-06'),
(1021, 'New view count for 18! on 2019-02-06 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 18 on 2019-02-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.79.32', '2019-02-06'),
(1022, 'New view count for 14! on 2019-02-06 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 14 on 2019-02-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.77.36', '2019-02-06'),
(1023, 'New view count for 3! on 2019-02-06 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 3 on 2019-02-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.77.36', '2019-02-06'),
(1024, 'New view count for 15! on 2019-02-06 by IP 40.77.167.147', 'The IP 40.77.167.147 has view article id 15 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.147', '2019-02-06'),
(1025, 'New view count for 24! on 2019-02-06 by IP 157.55.39.195', 'The IP 157.55.39.195 has view article id 24 on 2019-02-06 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.195', '2019-02-06'),
(1026, 'New view count for 1! on 2019-02-06 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 1 on 2019-02-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.166', '2019-02-06'),
(1027, 'New view count for 27! on 2019-02-08 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 27 on 2019-02-08 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.174', '2019-02-08'),
(1028, 'New view count for 31! on 2019-02-08 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 31 on 2019-02-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.78.163', '2019-02-08'),
(1029, 'New view count for 22! on 2019-02-08 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 22 on 2019-02-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.163', '2019-02-08'),
(1030, 'New view count for 14! on 2019-02-08 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 14 on 2019-02-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.169', '2019-02-08'),
(1031, 'New view count for 20! on 2019-02-08 by IP 180.76.15.24', 'The IP 180.76.15.24 has view article id 20 on 2019-02-08 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.24', '2019-02-08'),
(1032, 'New view count for 24! on 2019-02-08 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 24 on 2019-02-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.77.119', '2019-02-08'),
(1033, 'New view count for 27! on 2019-02-09 by IP 77.75.76.172', 'The IP 77.75.76.172 has view article id 27 on 2019-02-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.76.172', '2019-02-09'),
(1034, 'New view count for 18! on 2019-02-09 by IP 157.55.39.52', 'The IP 157.55.39.52 has view article id 18 on 2019-02-09 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.52', '2019-02-09'),
(1035, 'New view count for 30! on 2019-02-10 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 30 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 30, '37.9.113.4', '2019-02-10'),
(1036, 'New view count for 13! on 2019-02-10 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 13 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 13, '141.8.142.76', '2019-02-10'),
(1037, 'New view count for 19! on 2019-02-10 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 19 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '37.9.113.4', '2019-02-10'),
(1038, 'New view count for 15! on 2019-02-10 by IP 157.55.39.220', 'The IP 157.55.39.220 has view article id 15 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.220', '2019-02-10'),
(1039, 'New view count for 16! on 2019-02-10 by IP 207.46.13.45', 'The IP 207.46.13.45 has view article id 16 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.45', '2019-02-10'),
(1040, 'New view count for 28! on 2019-02-10 by IP 207.46.13.45', 'The IP 207.46.13.45 has view article id 28 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.45', '2019-02-10'),
(1041, 'New view count for 17! on 2019-02-10 by IP 157.55.39.156', 'The IP 157.55.39.156 has view article id 17 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.156', '2019-02-10'),
(1042, 'New view count for 18! on 2019-02-10 by IP 40.77.167.126', 'The IP 40.77.167.126 has view article id 18 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.126', '2019-02-10'),
(1043, 'New view count for 14! on 2019-02-10 by IP 40.77.167.126', 'The IP 40.77.167.126 has view article id 14 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '40.77.167.126', '2019-02-10'),
(1044, 'New view count for 28! on 2019-02-10 by IP 157.55.39.121', 'The IP 157.55.39.121 has view article id 28 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '157.55.39.121', '2019-02-10'),
(1045, 'New view count for 28! on 2019-02-10 by IP 207.46.13.1', 'The IP 207.46.13.1 has view article id 28 on 2019-02-10 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.1', '2019-02-10'),
(1046, 'New view count for 8! on 2019-02-10 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 8 on 2019-02-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.78.165', '2019-02-10'),
(1047, 'New view count for 31! on 2019-02-11 by IP 207.46.13.121', 'The IP 207.46.13.121 has view article id 31 on 2019-02-11 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '207.46.13.121', '2019-02-11'),
(1048, 'New view count for 20! on 2019-02-11 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 20 on 2019-02-11 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.49', '2019-02-11'),
(1049, 'New view count for 22! on 2019-02-12 by IP 77.75.76.172', 'The IP 77.75.76.172 has view article id 22 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.76.172', '2019-02-12'),
(1050, 'New view count for 24! on 2019-02-12 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 24 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.78.164', '2019-02-12'),
(1051, 'New view count for 31! on 2019-02-12 by IP 77.75.77.54', 'The IP 77.75.77.54 has view article id 31 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.77.54', '2019-02-12'),
(1052, 'New view count for 27! on 2019-02-12 by IP 77.75.76.161', 'The IP 77.75.76.161 has view article id 27 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.76.161', '2019-02-12'),
(1053, 'New view count for 26! on 2019-02-12 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 26 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.109', '2019-02-12'),
(1054, 'New view count for 17! on 2019-02-12 by IP 157.55.39.144', 'The IP 157.55.39.144 has view article id 17 on 2019-02-12 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.144', '2019-02-12'),
(1055, 'New view count for 4! on 2019-02-12 by IP 66.249.79.46', 'The IP 66.249.79.46 has view article id 4 on 2019-02-12 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.46', '2019-02-12'),
(1056, 'New view count for 16! on 2019-02-12 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 16 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.79.101', '2019-02-12'),
(1057, 'New view count for 11! on 2019-02-12 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 11 on 2019-02-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.76.164', '2019-02-12'),
(1058, 'New view count for 25! on 2019-02-13 by IP 207.46.13.223', 'The IP 207.46.13.223 has view article id 25 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.223', '2019-02-13'),
(1059, 'New view count for 22! on 2019-02-13 by IP 207.46.13.223', 'The IP 207.46.13.223 has view article id 22 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '207.46.13.223', '2019-02-13'),
(1060, 'New view count for 26! on 2019-02-13 by IP 157.55.39.175', 'The IP 157.55.39.175 has view article id 26 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '157.55.39.175', '2019-02-13'),
(1061, 'New view count for 24! on 2019-02-13 by IP 157.55.39.172', 'The IP 157.55.39.172 has view article id 24 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.172', '2019-02-13'),
(1062, 'New view count for 23! on 2019-02-13 by IP 157.55.39.172', 'The IP 157.55.39.172 has view article id 23 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.172', '2019-02-13'),
(1063, 'New view count for 20! on 2019-02-13 by IP 157.55.39.190', 'The IP 157.55.39.190 has view article id 20 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.190', '2019-02-13'),
(1064, 'New view count for 19! on 2019-02-13 by IP 157.55.39.190', 'The IP 157.55.39.190 has view article id 19 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '157.55.39.190', '2019-02-13'),
(1065, 'New view count for 27! on 2019-02-13 by IP 157.55.39.190', 'The IP 157.55.39.190 has view article id 27 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '157.55.39.190', '2019-02-13'),
(1066, 'New view count for 16! on 2019-02-13 by IP 207.46.13.210', 'The IP 207.46.13.210 has view article id 16 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.210', '2019-02-13');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(1067, 'New view count for 22! on 2019-02-13 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 22 on 2019-02-13 using os Android browser Browser  version  by user Anonymous', 22, '66.249.79.52', '2019-02-13'),
(1068, 'New view count for 14! on 2019-02-13 by IP 40.77.167.23', 'The IP 40.77.167.23 has view article id 14 on 2019-02-13 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '40.77.167.23', '2019-02-13'),
(1069, 'New view count for 27! on 2019-02-15 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 27 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.79.54', '2019-02-15'),
(1070, 'New view count for 31! on 2019-02-15 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 31 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.79.32', '2019-02-15'),
(1071, 'New view count for 3! on 2019-02-15 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 3 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.77.119', '2019-02-15'),
(1072, 'New view count for 31! on 2019-02-15 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 31 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.76.171', '2019-02-15'),
(1073, 'New view count for 27! on 2019-02-15 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 27 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.77.11', '2019-02-15'),
(1074, 'New view count for 6! on 2019-02-15 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 6 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.165', '2019-02-15'),
(1075, 'New view count for 26! on 2019-02-15 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 26 on 2019-02-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.76.171', '2019-02-15'),
(1076, 'New view count for 16! on 2019-02-16 by IP 77.75.79.72', 'The IP 77.75.79.72 has view article id 16 on 2019-02-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.79.72', '2019-02-16'),
(1077, 'New view count for 11! on 2019-02-16 by IP 77.75.76.160', 'The IP 77.75.76.160 has view article id 11 on 2019-02-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.76.160', '2019-02-16'),
(1078, 'New view count for 7! on 2019-02-16 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 7 on 2019-02-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.77.36', '2019-02-16'),
(1079, 'New view count for 17! on 2019-02-16 by IP 77.75.77.54', 'The IP 77.75.77.54 has view article id 17 on 2019-02-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.77.54', '2019-02-16'),
(1080, 'New view count for 17! on 2019-02-16 by IP 157.55.39.140', 'The IP 157.55.39.140 has view article id 17 on 2019-02-16 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.140', '2019-02-16'),
(1081, 'New view count for 16! on 2019-02-16 by IP 40.77.167.2', 'The IP 40.77.167.2 has view article id 16 on 2019-02-16 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '40.77.167.2', '2019-02-16'),
(1082, 'New view count for 18! on 2019-02-16 by IP 207.46.13.52', 'The IP 207.46.13.52 has view article id 18 on 2019-02-16 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '207.46.13.52', '2019-02-16'),
(1083, 'New view count for 14! on 2019-02-16 by IP 207.46.13.52', 'The IP 207.46.13.52 has view article id 14 on 2019-02-16 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '207.46.13.52', '2019-02-16'),
(1084, 'New view count for 26! on 2019-02-16 by IP 180.76.15.142', 'The IP 180.76.15.142 has view article id 26 on 2019-02-16 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.142', '2019-02-16'),
(1085, 'New view count for 16! on 2019-02-17 by IP 40.77.167.4', 'The IP 40.77.167.4 has view article id 16 on 2019-02-17 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '40.77.167.4', '2019-02-17'),
(1086, 'New view count for 25! on 2019-02-17 by IP 207.46.13.207', 'The IP 207.46.13.207 has view article id 25 on 2019-02-17 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.207', '2019-02-17'),
(1087, 'New view count for 26! on 2019-02-17 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 26 on 2019-02-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.164', '2019-02-17'),
(1088, 'New view count for 6! on 2019-02-17 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 6 on 2019-02-17 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.76.167', '2019-02-17'),
(1089, 'New view count for 17! on 2019-02-18 by IP 207.46.13.4', 'The IP 207.46.13.4 has view article id 17 on 2019-02-18 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '207.46.13.4', '2019-02-18'),
(1090, 'New view count for 4! on 2019-02-18 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 4 on 2019-02-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.79.32', '2019-02-18'),
(1091, 'New view count for 26! on 2019-02-18 by IP 45.76.158.113', 'The IP 45.76.158.113 has view article id 26 on 2019-02-18 using os Linux browser Browser Firefox version 52.9 by user Anonymous', 26, '45.76.158.113', '2019-02-18'),
(1092, 'New view count for 17! on 2019-02-18 by IP 157.55.39.4', 'The IP 157.55.39.4 has view article id 17 on 2019-02-18 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.4', '2019-02-18'),
(1093, 'New view count for 19! on 2019-02-18 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 19 on 2019-02-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.77.11', '2019-02-18'),
(1094, 'New view count for 3! on 2019-02-19 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 3 on 2019-02-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.76.163', '2019-02-19'),
(1095, 'New view count for 18! on 2019-02-19 by IP 141.8.142.164', 'The IP 141.8.142.164 has view article id 18 on 2019-02-19 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '141.8.142.164', '2019-02-19'),
(1096, 'New view count for 15! on 2019-02-20 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 15 on 2019-02-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.79.95', '2019-02-20'),
(1097, 'New view count for 15! on 2019-02-20 by IP 40.77.167.19', 'The IP 40.77.167.19 has view article id 15 on 2019-02-20 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.19', '2019-02-20'),
(1098, 'New view count for 1! on 2019-02-21 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 1 on 2019-02-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.76.167', '2019-02-21'),
(1099, 'New view count for 19! on 2019-02-21 by IP 77.75.78.171', 'The IP 77.75.78.171 has view article id 19 on 2019-02-21 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.78.171', '2019-02-21'),
(1100, 'New view count for 22! on 2019-02-22 by IP 207.46.13.2', 'The IP 207.46.13.2 has view article id 22 on 2019-02-22 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '207.46.13.2', '2019-02-22'),
(1101, 'New view count for 24! on 2019-02-22 by IP 157.55.39.148', 'The IP 157.55.39.148 has view article id 24 on 2019-02-22 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.148', '2019-02-22'),
(1102, 'New view count for 17! on 2019-02-23 by IP 141.8.183.204', 'The IP 141.8.183.204 has view article id 17 on 2019-02-23 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '141.8.183.204', '2019-02-23'),
(1103, 'New view count for 8! on 2019-02-23 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 8 on 2019-02-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.78.163', '2019-02-23'),
(1104, 'New view count for 31! on 2019-02-23 by IP 157.55.39.104', 'The IP 157.55.39.104 has view article id 31 on 2019-02-23 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '157.55.39.104', '2019-02-23'),
(1105, 'New view count for 15! on 2019-02-23 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 15 on 2019-02-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.169', '2019-02-23'),
(1106, 'New view count for 26! on 2019-02-23 by IP 40.77.167.196', 'The IP 40.77.167.196 has view article id 26 on 2019-02-23 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.196', '2019-02-23'),
(1107, 'New view count for 20! on 2019-02-24 by IP 157.55.39.200', 'The IP 157.55.39.200 has view article id 20 on 2019-02-24 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '157.55.39.200', '2019-02-24'),
(1108, 'New view count for 23! on 2019-02-24 by IP 207.46.13.98', 'The IP 207.46.13.98 has view article id 23 on 2019-02-24 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.98', '2019-02-24'),
(1109, 'New view count for 8! on 2019-02-24 by IP 141.8.142.15', 'The IP 141.8.142.15 has view article id 8 on 2019-02-24 using os Unknown Platform browser Browser  version  by user Anonymous', 8, '141.8.142.15', '2019-02-24'),
(1110, 'New view count for 17! on 2019-02-25 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 17 on 2019-02-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.77.95', '2019-02-25'),
(1111, 'New view count for 7! on 2019-02-25 by IP 77.75.76.169', 'The IP 77.75.76.169 has view article id 7 on 2019-02-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.76.169', '2019-02-25'),
(1112, 'New view count for 15! on 2019-02-25 by IP 157.55.39.145', 'The IP 157.55.39.145 has view article id 15 on 2019-02-25 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.145', '2019-02-25'),
(1113, 'New view count for 20! on 2019-02-25 by IP 141.8.142.98', 'The IP 141.8.142.98 has view article id 20 on 2019-02-25 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '141.8.142.98', '2019-02-25'),
(1114, 'New view count for 6! on 2019-02-25 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 6 on 2019-02-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.164', '2019-02-25'),
(1115, 'New view count for 4! on 2019-02-25 by IP 77.75.78.160', 'The IP 77.75.78.160 has view article id 4 on 2019-02-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.78.160', '2019-02-25'),
(1116, 'New view count for 10! on 2019-02-26 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 10 on 2019-02-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.78.164', '2019-02-26'),
(1117, 'New view count for 9! on 2019-02-26 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 9 on 2019-02-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.79.17', '2019-02-26'),
(1118, 'New view count for 29! on 2019-02-26 by IP 40.77.167.74', 'The IP 40.77.167.74 has view article id 29 on 2019-02-26 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '40.77.167.74', '2019-02-26'),
(1119, 'New view count for 31! on 2019-02-26 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 31 on 2019-02-26 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '37.9.113.4', '2019-02-26'),
(1120, 'New view count for 25! on 2019-02-26 by IP 157.55.39.165', 'The IP 157.55.39.165 has view article id 25 on 2019-02-26 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.165', '2019-02-26'),
(1121, 'New view count for 31! on 2019-02-26 by IP 66.249.75.135', 'The IP 66.249.75.135 has view article id 31 on 2019-02-26 using os Android browser Browser  version  by user Anonymous', 31, '66.249.75.135', '2019-02-26'),
(1122, 'New view count for 24! on 2019-02-27 by IP 157.55.39.239', 'The IP 157.55.39.239 has view article id 24 on 2019-02-27 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '157.55.39.239', '2019-02-27'),
(1123, 'New view count for 1! on 2019-02-27 by IP 178.154.171.12', 'The IP 178.154.171.12 has view article id 1 on 2019-02-27 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '178.154.171.12', '2019-02-27'),
(1124, 'New view count for 19! on 2019-02-27 by IP 40.77.167.110', 'The IP 40.77.167.110 has view article id 19 on 2019-02-27 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.110', '2019-02-27'),
(1125, 'New view count for 26! on 2019-02-27 by IP 157.55.39.250', 'The IP 157.55.39.250 has view article id 26 on 2019-02-27 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '157.55.39.250', '2019-02-27'),
(1126, 'New view count for 1! on 2019-02-27 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 1 on 2019-02-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.167', '2019-02-27'),
(1127, 'New view count for 18! on 2019-02-28 by IP 77.75.79.109', 'The IP 77.75.79.109 has view article id 18 on 2019-02-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.79.109', '2019-02-28'),
(1128, 'New view count for 30! on 2019-02-28 by IP 66.249.79.55', 'The IP 66.249.79.55 has view article id 30 on 2019-02-28 using os Android browser Browser  version  by user Anonymous', 30, '66.249.79.55', '2019-02-28'),
(1129, 'New view count for 18! on 2019-02-28 by IP 40.77.167.44', 'The IP 40.77.167.44 has view article id 18 on 2019-02-28 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.44', '2019-02-28'),
(1130, 'New view count for 19! on 2019-02-28 by IP 40.77.167.5', 'The IP 40.77.167.5 has view article id 19 on 2019-02-28 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.5', '2019-02-28'),
(1131, 'New view count for 27! on 2019-02-28 by IP 207.46.13.15', 'The IP 207.46.13.15 has view article id 27 on 2019-02-28 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.15', '2019-02-28'),
(1132, 'New view count for 26! on 2019-03-01 by IP 201.59.187.162', 'The IP 201.59.187.162 has view article id 26 on 2019-03-01 using os Linux browser Browser Mozilla version 5.0 by user Anonymous', 26, '201.59.187.162', '2019-03-01'),
(1133, 'New view count for 17! on 2019-03-01 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 17 on 2019-03-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.78.170', '2019-03-01'),
(1134, 'New view count for 8! on 2019-03-01 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 8 on 2019-03-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.78.172', '2019-03-01'),
(1135, 'New view count for 26! on 2019-03-01 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 26 on 2019-03-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.163', '2019-03-01'),
(1136, 'New view count for 7! on 2019-03-01 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 7 on 2019-03-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.78.170', '2019-03-01'),
(1137, 'New view count for 28! on 2019-03-02 by IP 157.55.39.99', 'The IP 157.55.39.99 has view article id 28 on 2019-03-02 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '157.55.39.99', '2019-03-02'),
(1138, 'New view count for 18! on 2019-03-02 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 18 on 2019-03-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.171', '2019-03-02'),
(1139, 'New view count for 13! on 2019-03-03 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 13 on 2019-03-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.77.95', '2019-03-03'),
(1140, 'New view count for 4! on 2019-03-03 by IP 141.8.142.76', 'The IP 141.8.142.76 has view article id 4 on 2019-03-03 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '141.8.142.76', '2019-03-03'),
(1141, 'New view count for 18! on 2019-03-03 by IP 207.46.13.191', 'The IP 207.46.13.191 has view article id 18 on 2019-03-03 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '207.46.13.191', '2019-03-03'),
(1142, 'New view count for 17! on 2019-03-03 by IP 40.77.167.121', 'The IP 40.77.167.121 has view article id 17 on 2019-03-03 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.121', '2019-03-03'),
(1143, 'New view count for 19! on 2019-03-03 by IP 207.46.13.181', 'The IP 207.46.13.181 has view article id 19 on 2019-03-03 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '207.46.13.181', '2019-03-03'),
(1144, 'New view count for 19! on 2019-03-04 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 19 on 2019-03-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.79.95', '2019-03-04'),
(1145, 'New view count for 20! on 2019-03-04 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 20 on 2019-03-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.79.95', '2019-03-04'),
(1146, 'New view count for 31! on 2019-03-04 by IP 207.46.13.60', 'The IP 207.46.13.60 has view article id 31 on 2019-03-04 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '207.46.13.60', '2019-03-04'),
(1147, 'New view count for 28! on 2019-03-05 by IP 207.46.13.86', 'The IP 207.46.13.86 has view article id 28 on 2019-03-05 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.86', '2019-03-05'),
(1148, 'New view count for 14! on 2019-03-05 by IP 37.9.113.80', 'The IP 37.9.113.80 has view article id 14 on 2019-03-05 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '37.9.113.80', '2019-03-05'),
(1149, 'New view count for 20! on 2019-03-06 by IP 180.76.15.160', 'The IP 180.76.15.160 has view article id 20 on 2019-03-06 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.160', '2019-03-06'),
(1150, 'New view count for 12! on 2019-03-06 by IP 77.75.77.101', 'The IP 77.75.77.101 has view article id 12 on 2019-03-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.77.101', '2019-03-06'),
(1151, 'New view count for 29! on 2019-03-06 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 29 on 2019-03-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.172', '2019-03-06'),
(1152, 'New view count for 13! on 2019-03-06 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 13 on 2019-03-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.78.172', '2019-03-06'),
(1153, 'New view count for 26! on 2019-03-07 by IP 180.76.15.139', 'The IP 180.76.15.139 has view article id 26 on 2019-03-07 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.139', '2019-03-07'),
(1154, 'New view count for 26! on 2019-03-08 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 26 on 2019-03-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.76.167', '2019-03-08'),
(1155, 'New view count for 19! on 2019-03-08 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 19 on 2019-03-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.78.168', '2019-03-08'),
(1156, 'New view count for 16! on 2019-03-10 by IP 157.55.39.253', 'The IP 157.55.39.253 has view article id 16 on 2019-03-10 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '157.55.39.253', '2019-03-10'),
(1157, 'New view count for 16! on 2019-03-10 by IP 77.75.76.164', 'The IP 77.75.76.164 has view article id 16 on 2019-03-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.76.164', '2019-03-10'),
(1158, 'New view count for 10! on 2019-03-10 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 10 on 2019-03-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.76.167', '2019-03-10'),
(1159, 'New view count for 15! on 2019-03-10 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 15 on 2019-03-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.167', '2019-03-10'),
(1160, 'New view count for 14! on 2019-03-10 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 14 on 2019-03-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.167', '2019-03-10'),
(1161, 'New view count for 9! on 2019-03-10 by IP 77.75.76.169', 'The IP 77.75.76.169 has view article id 9 on 2019-03-10 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.76.169', '2019-03-10'),
(1162, 'New view count for 28! on 2019-03-11 by IP 77.75.79.95', 'The IP 77.75.79.95 has view article id 28 on 2019-03-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.79.95', '2019-03-11'),
(1163, 'New view count for 12! on 2019-03-11 by IP 77.75.79.109', 'The IP 77.75.79.109 has view article id 12 on 2019-03-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.79.109', '2019-03-11'),
(1164, 'New view count for 6! on 2019-03-11 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 6 on 2019-03-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.78.164', '2019-03-11'),
(1165, 'New view count for 4! on 2019-03-11 by IP 77.75.77.17', 'The IP 77.75.77.17 has view article id 4 on 2019-03-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.77.17', '2019-03-11'),
(1166, 'New view count for 19! on 2019-03-11 by IP 5.45.207.3', 'The IP 5.45.207.3 has view article id 19 on 2019-03-11 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '5.45.207.3', '2019-03-11'),
(1167, 'New view count for 25! on 2019-03-12 by IP 157.55.39.251', 'The IP 157.55.39.251 has view article id 25 on 2019-03-12 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.251', '2019-03-12'),
(1168, 'New view count for 23! on 2019-03-12 by IP 207.46.13.150', 'The IP 207.46.13.150 has view article id 23 on 2019-03-12 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.150', '2019-03-12'),
(1169, 'New view count for 16! on 2019-03-12 by IP 207.46.13.220', 'The IP 207.46.13.220 has view article id 16 on 2019-03-12 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.220', '2019-03-12'),
(1170, 'New view count for 25! on 2019-03-12 by IP 77.75.77.72', 'The IP 77.75.77.72 has view article id 25 on 2019-03-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.77.72', '2019-03-12'),
(1171, 'New view count for 26! on 2019-03-12 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 26 on 2019-03-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.109', '2019-03-12'),
(1172, 'New view count for 27! on 2019-03-13 by IP 207.46.13.155', 'The IP 207.46.13.155 has view article id 27 on 2019-03-13 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '207.46.13.155', '2019-03-13'),
(1173, 'New view count for 29! on 2019-03-14 by IP 157.55.39.107', 'The IP 157.55.39.107 has view article id 29 on 2019-03-14 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.107', '2019-03-14'),
(1174, 'New view count for 16! on 2019-03-14 by IP 77.75.76.165', 'The IP 77.75.76.165 has view article id 16 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.76.165', '2019-03-14'),
(1175, 'New view count for 17! on 2019-03-14 by IP 157.55.39.179', 'The IP 157.55.39.179 has view article id 17 on 2019-03-14 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.179', '2019-03-14'),
(1176, 'New view count for 10! on 2019-03-14 by IP 77.75.76.166', 'The IP 77.75.76.166 has view article id 10 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.76.166', '2019-03-14'),
(1177, 'New view count for 26! on 2019-03-14 by IP 180.76.15.138', 'The IP 180.76.15.138 has view article id 26 on 2019-03-14 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.138', '2019-03-14'),
(1178, 'New view count for 9! on 2019-03-14 by IP 77.75.79.36', 'The IP 77.75.79.36 has view article id 9 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.79.36', '2019-03-14'),
(1179, 'New view count for 15! on 2019-03-14 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 15 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.78.169', '2019-03-14'),
(1180, 'New view count for 7! on 2019-03-14 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 7 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.77.95', '2019-03-14'),
(1181, 'New view count for 17! on 2019-03-14 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 17 on 2019-03-14 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.76.171', '2019-03-14'),
(1182, 'New view count for 29! on 2019-03-16 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 29 on 2019-03-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.77.32', '2019-03-16'),
(1183, 'New view count for 3! on 2019-03-17 by IP 37.9.113.114', 'The IP 37.9.113.114 has view article id 3 on 2019-03-17 using os Unknown Platform browser Browser  version  by user Anonymous', 3, '37.9.113.114', '2019-03-17'),
(1184, 'New view count for 3! on 2019-03-18 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 3 on 2019-03-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.78.164', '2019-03-18'),
(1185, 'New view count for 11! on 2019-03-18 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 11 on 2019-03-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.79.62', '2019-03-18'),
(1186, 'New view count for 30! on 2019-03-18 by IP 77.75.79.62', 'The IP 77.75.79.62 has view article id 30 on 2019-03-18 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.79.62', '2019-03-18'),
(1187, 'New view count for 23! on 2019-03-19 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 23 on 2019-03-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.76.168', '2019-03-19'),
(1188, 'New view count for 16! on 2019-03-19 by IP 66.249.79.23', 'The IP 66.249.79.23 has view article id 16 on 2019-03-19 using os Android browser Browser  version  by user Anonymous', 16, '66.249.79.23', '2019-03-19'),
(1189, 'New view count for 26! on 2019-03-19 by IP 207.46.13.122', 'The IP 207.46.13.122 has view article id 26 on 2019-03-19 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '207.46.13.122', '2019-03-19'),
(1190, 'New view count for 20! on 2019-03-20 by IP 180.76.15.155', 'The IP 180.76.15.155 has view article id 20 on 2019-03-20 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.155', '2019-03-20'),
(1191, 'New view count for 15! on 2019-03-20 by IP 157.55.39.241', 'The IP 157.55.39.241 has view article id 15 on 2019-03-20 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.241', '2019-03-20'),
(1192, 'New view count for 22! on 2019-03-20 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 22 on 2019-03-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.77.95', '2019-03-20'),
(1193, 'New view count for 20! on 2019-03-22 by IP 45.57.211.96', 'The IP 45.57.211.96 has view article id 20 on 2019-03-22 using os Mac OS X browser Browser Firefox version 59.0 by user Anonymous', 20, '45.57.211.96', '2019-03-22'),
(1194, 'New view count for 16! on 2019-03-22 by IP 207.46.13.6', 'The IP 207.46.13.6 has view article id 16 on 2019-03-22 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.6', '2019-03-22'),
(1195, 'New view count for 25! on 2019-03-23 by IP 207.46.13.186', 'The IP 207.46.13.186 has view article id 25 on 2019-03-23 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.186', '2019-03-23'),
(1196, 'New view count for 14! on 2019-03-23 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 14 on 2019-03-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.77.109', '2019-03-23'),
(1197, 'New view count for 11! on 2019-03-23 by IP 77.75.77.36', 'The IP 77.75.77.36 has view article id 11 on 2019-03-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.77.36', '2019-03-23'),
(1198, 'New view count for 25! on 2019-03-23 by IP 157.55.39.115', 'The IP 157.55.39.115 has view article id 25 on 2019-03-23 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '157.55.39.115', '2019-03-23'),
(1199, 'New view count for 13! on 2019-03-23 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 13 on 2019-03-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.77.119', '2019-03-23'),
(1200, 'New view count for 17! on 2019-03-23 by IP 207.46.13.137', 'The IP 207.46.13.137 has view article id 17 on 2019-03-23 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '207.46.13.137', '2019-03-23'),
(1201, 'New view count for 19! on 2019-03-23 by IP 157.55.39.234', 'The IP 157.55.39.234 has view article id 19 on 2019-03-23 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '157.55.39.234', '2019-03-23'),
(1202, 'New view count for 28! on 2019-03-24 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 28 on 2019-03-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.76.167', '2019-03-24'),
(1203, 'New view count for 3! on 2019-03-24 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 3 on 2019-03-24 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.77.109', '2019-03-24'),
(1204, 'New view count for 20! on 2019-03-24 by IP 40.77.167.166', 'The IP 40.77.167.166 has view article id 20 on 2019-03-24 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '40.77.167.166', '2019-03-24'),
(1205, 'New view count for 24! on 2019-03-26 by IP 40.77.167.142', 'The IP 40.77.167.142 has view article id 24 on 2019-03-26 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '40.77.167.142', '2019-03-26'),
(1206, 'New view count for 12! on 2019-03-26 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 12 on 2019-03-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.77.119', '2019-03-26'),
(1207, 'New view count for 29! on 2019-03-26 by IP 207.46.13.111', 'The IP 207.46.13.111 has view article id 29 on 2019-03-26 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '207.46.13.111', '2019-03-26'),
(1208, 'New view count for 27! on 2019-03-26 by IP 202.28.79.194', 'The IP 202.28.79.194 has view article id 27 on 2019-03-26 using os Linux browser Browser Firefox version 65.0 by user Anonymous', 27, '202.28.79.194', '2019-03-26'),
(1209, 'New view count for 31! on 2019-03-26 by IP 202.28.79.194', 'The IP 202.28.79.194 has view article id 31 on 2019-03-26 using os Linux browser Browser Firefox version 65.0 by user Anonymous', 31, '202.28.79.194', '2019-03-26'),
(1210, 'New view count for 15! on 2019-03-26 by IP 157.55.39.247', 'The IP 157.55.39.247 has view article id 15 on 2019-03-26 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.247', '2019-03-26'),
(1211, 'New view count for 20! on 2019-03-26 by IP 77.75.78.160', 'The IP 77.75.78.160 has view article id 20 on 2019-03-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.160', '2019-03-26'),
(1212, 'New view count for 16! on 2019-03-26 by IP 95.108.181.75', 'The IP 95.108.181.75 has view article id 16 on 2019-03-26 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '95.108.181.75', '2019-03-26'),
(1213, 'New view count for 25! on 2019-03-26 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 25 on 2019-03-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.79.17', '2019-03-26'),
(1214, 'New view count for 31! on 2019-03-26 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 31 on 2019-03-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.76.170', '2019-03-26'),
(1215, 'New view count for 18! on 2019-03-26 by IP 77.75.77.32', 'The IP 77.75.77.32 has view article id 18 on 2019-03-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.77.32', '2019-03-26'),
(1216, 'New view count for 26! on 2019-03-27 by IP 77.75.79.36', 'The IP 77.75.79.36 has view article id 26 on 2019-03-27 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.79.36', '2019-03-27'),
(1217, 'New view count for 8! on 2019-03-27 by IP 178.154.244.42', 'The IP 178.154.244.42 has view article id 8 on 2019-03-27 using os Unknown Platform browser Browser  version  by user Anonymous', 8, '178.154.244.42', '2019-03-27'),
(1218, 'New view count for 25! on 2019-03-28 by IP 40.77.167.64', 'The IP 40.77.167.64 has view article id 25 on 2019-03-28 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.64', '2019-03-28'),
(1219, 'New view count for 22! on 2019-03-28 by IP 207.46.13.194', 'The IP 207.46.13.194 has view article id 22 on 2019-03-28 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '207.46.13.194', '2019-03-28'),
(1220, 'New view count for 13! on 2019-03-28 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 13 on 2019-03-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.78.172', '2019-03-28'),
(1221, 'New view count for 24! on 2019-03-28 by IP 207.46.13.221', 'The IP 207.46.13.221 has view article id 24 on 2019-03-28 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.221', '2019-03-28'),
(1222, 'New view count for 15! on 2019-03-28 by IP 157.55.39.215', 'The IP 157.55.39.215 has view article id 15 on 2019-03-28 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.215', '2019-03-28'),
(1223, 'New view count for 19! on 2019-03-29 by IP 77.75.76.165', 'The IP 77.75.76.165 has view article id 19 on 2019-03-29 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.76.165', '2019-03-29'),
(1224, 'New view count for 31! on 2019-03-29 by IP 207.46.13.131', 'The IP 207.46.13.131 has view article id 31 on 2019-03-29 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '207.46.13.131', '2019-03-29'),
(1225, 'New view count for 26! on 2019-03-30 by IP 157.55.39.203', 'The IP 157.55.39.203 has view article id 26 on 2019-03-30 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '157.55.39.203', '2019-03-30'),
(1226, 'New view count for 26! on 2019-03-30 by IP 180.76.15.161', 'The IP 180.76.15.161 has view article id 26 on 2019-03-30 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.161', '2019-03-30'),
(1227, 'New view count for 28! on 2019-03-31 by IP 141.8.142.59', 'The IP 141.8.142.59 has view article id 28 on 2019-03-31 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '141.8.142.59', '2019-03-31'),
(1228, 'New view count for 17! on 2019-04-01 by IP 157.55.39.123', 'The IP 157.55.39.123 has view article id 17 on 2019-04-01 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '157.55.39.123', '2019-04-01'),
(1229, 'New view count for 24! on 2019-04-01 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 24 on 2019-04-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.78.167', '2019-04-01'),
(1230, 'New view count for 12! on 2019-04-01 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 12 on 2019-04-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.78.168', '2019-04-01'),
(1231, 'New view count for 24! on 2019-04-01 by IP 77.75.78.168', 'The IP 77.75.78.168 has view article id 24 on 2019-04-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 24, '77.75.78.168', '2019-04-01'),
(1232, 'New view count for 26! on 2019-04-02 by IP 40.77.167.168', 'The IP 40.77.167.168 has view article id 26 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '40.77.167.168', '2019-04-02'),
(1233, 'New view count for 23! on 2019-04-02 by IP 40.77.167.125', 'The IP 40.77.167.125 has view article id 23 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '40.77.167.125', '2019-04-02'),
(1234, 'New view count for 23! on 2019-04-02 by IP 157.55.39.101', 'The IP 157.55.39.101 has view article id 23 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.101', '2019-04-02'),
(1235, 'New view count for 18! on 2019-04-02 by IP 207.46.13.216', 'The IP 207.46.13.216 has view article id 18 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '207.46.13.216', '2019-04-02'),
(1236, 'New view count for 25! on 2019-04-02 by IP 207.46.13.146', 'The IP 207.46.13.146 has view article id 25 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '207.46.13.146', '2019-04-02'),
(1237, 'New view count for 28! on 2019-04-02 by IP 40.77.167.133', 'The IP 40.77.167.133 has view article id 28 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '40.77.167.133', '2019-04-02'),
(1238, 'New view count for 2! on 2019-04-02 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 2 on 2019-04-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.78.166', '2019-04-02'),
(1239, 'New view count for 1! on 2019-04-02 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 1 on 2019-04-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.169', '2019-04-02'),
(1240, 'New view count for 16! on 2019-04-02 by IP 157.55.39.125', 'The IP 157.55.39.125 has view article id 16 on 2019-04-02 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '157.55.39.125', '2019-04-02'),
(1241, 'New view count for 31! on 2019-04-03 by IP 40.77.167.123', 'The IP 40.77.167.123 has view article id 31 on 2019-04-03 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.167.123', '2019-04-03'),
(1242, 'New view count for 29! on 2019-04-03 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 29 on 2019-04-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.166', '2019-04-03'),
(1243, 'New view count for 20! on 2019-04-03 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 20 on 2019-04-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.78.170', '2019-04-03'),
(1244, 'New view count for 27! on 2019-04-03 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 27 on 2019-04-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.76.167', '2019-04-03'),
(1245, 'New view count for 24! on 2019-04-03 by IP 207.46.13.192', 'The IP 207.46.13.192 has view article id 24 on 2019-04-03 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.192', '2019-04-03'),
(1246, 'New view count for 2! on 2019-04-05 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 2 on 2019-04-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.77.62', '2019-04-05'),
(1247, 'New view count for 9! on 2019-04-05 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 9 on 2019-04-05 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 9, '77.75.77.62', '2019-04-05'),
(1248, 'New view count for 19! on 2019-04-05 by IP 40.77.167.185', 'The IP 40.77.167.185 has view article id 19 on 2019-04-05 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.185', '2019-04-05'),
(1249, 'New view count for 8! on 2019-04-06 by IP 77.75.78.170', 'The IP 77.75.78.170 has view article id 8 on 2019-04-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.78.170', '2019-04-06'),
(1250, 'New view count for 16! on 2019-04-06 by IP 77.75.78.164', 'The IP 77.75.78.164 has view article id 16 on 2019-04-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 16, '77.75.78.164', '2019-04-06'),
(1251, 'New view count for 26! on 2019-04-07 by IP 180.76.15.150', 'The IP 180.76.15.150 has view article id 26 on 2019-04-07 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.150', '2019-04-07'),
(1252, 'New view count for 27! on 2019-04-07 by IP 157.55.39.116', 'The IP 157.55.39.116 has view article id 27 on 2019-04-07 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '157.55.39.116', '2019-04-07'),
(1253, 'New view count for 28! on 2019-04-08 by IP 207.46.13.183', 'The IP 207.46.13.183 has view article id 28 on 2019-04-08 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.183', '2019-04-08'),
(1254, 'New view count for 2! on 2019-04-08 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 2 on 2019-04-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.79.101', '2019-04-08'),
(1255, 'New view count for 31! on 2019-04-08 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 31 on 2019-04-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.76.162', '2019-04-08'),
(1256, 'New view count for 20! on 2019-04-08 by IP 180.76.15.152', 'The IP 180.76.15.152 has view article id 20 on 2019-04-08 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.152', '2019-04-08'),
(1257, 'New view count for 26! on 2019-04-08 by IP 180.76.15.157', 'The IP 180.76.15.157 has view article id 26 on 2019-04-08 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.157', '2019-04-08'),
(1258, 'New view count for 14! on 2019-04-09 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 14 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.161', '2019-04-09'),
(1259, 'New view count for 29! on 2019-04-09 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 29 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.78.161', '2019-04-09'),
(1260, 'New view count for 6! on 2019-04-09 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 6 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.79.32', '2019-04-09'),
(1261, 'New view count for 4! on 2019-04-09 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 4 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.78.165', '2019-04-09'),
(1262, 'New view count for 17! on 2019-04-09 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 17 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.78.172', '2019-04-09'),
(1263, 'New view count for 1! on 2019-04-09 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 1 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.169', '2019-04-09'),
(1264, 'New view count for 15! on 2019-04-09 by IP 77.75.79.109', 'The IP 77.75.79.109 has view article id 15 on 2019-04-09 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 15, '77.75.79.109', '2019-04-09'),
(1265, 'New view count for 7! on 2019-04-11 by IP 77.75.76.167', 'The IP 77.75.76.167 has view article id 7 on 2019-04-11 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.76.167', '2019-04-11'),
(1266, 'New view count for 19! on 2019-04-12 by IP 66.249.79.121', 'The IP 66.249.79.121 has view article id 19 on 2019-04-12 using os Android browser Browser  version  by user Anonymous', 19, '66.249.79.121', '2019-04-12'),
(1267, 'New view count for 20! on 2019-04-12 by IP 180.76.15.136', 'The IP 180.76.15.136 has view article id 20 on 2019-04-12 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.136', '2019-04-12'),
(1268, 'New view count for 31! on 2019-04-12 by IP 40.77.167.94', 'The IP 40.77.167.94 has view article id 31 on 2019-04-12 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '40.77.167.94', '2019-04-12'),
(1269, 'New view count for 23! on 2019-04-12 by IP 207.46.13.174', 'The IP 207.46.13.174 has view article id 23 on 2019-04-12 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.174', '2019-04-12'),
(1270, 'New view count for 27! on 2019-04-13 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 27 on 2019-04-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '77.75.78.162', '2019-04-13'),
(1271, 'New view count for 28! on 2019-04-13 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 28 on 2019-04-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.78.162', '2019-04-13'),
(1272, 'New view count for 8! on 2019-04-13 by IP 77.75.77.101', 'The IP 77.75.77.101 has view article id 8 on 2019-04-13 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.77.101', '2019-04-13'),
(1273, 'New view count for 26! on 2019-04-13 by IP 207.46.13.183', 'The IP 207.46.13.183 has view article id 26 on 2019-04-13 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '207.46.13.183', '2019-04-13'),
(1274, 'New view count for 24! on 2019-04-13 by IP 207.46.13.187', 'The IP 207.46.13.187 has view article id 24 on 2019-04-13 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.187', '2019-04-13'),
(1275, 'New view count for 25! on 2019-04-13 by IP 40.77.167.143', 'The IP 40.77.167.143 has view article id 25 on 2019-04-13 using os Unknown Platform browser Browser  version  by user Anonymous', 25, '40.77.167.143', '2019-04-13'),
(1276, 'New view count for 17! on 2019-04-14 by IP 207.46.13.3', 'The IP 207.46.13.3 has view article id 17 on 2019-04-14 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '207.46.13.3', '2019-04-14'),
(1277, 'New view count for 20! on 2019-04-14 by IP 202.28.79.194', 'The IP 202.28.79.194 has view article id 20 on 2019-04-14 using os Linux browser Browser Chrome version 73.0.3683.86 by user Anonymous', 20, '202.28.79.194', '2019-04-14'),
(1278, 'New view count for 27! on 2019-04-14 by IP 157.55.39.84', 'The IP 157.55.39.84 has view article id 27 on 2019-04-14 using os Unknown Platform browser Browser  version  by user Anonymous', 27, '157.55.39.84', '2019-04-14'),
(1279, 'New view count for 18! on 2019-04-14 by IP 157.55.39.131', 'The IP 157.55.39.131 has view article id 18 on 2019-04-14 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.131', '2019-04-14');
INSERT INTO `TBL_ARTICLE_HISTORY` (`his_id`, `his_title`, `his_body`, `ar_id`, `view_ip`, `date_of_view`) VALUES
(1280, 'New view count for 29! on 2019-04-15 by IP 157.55.39.149', 'The IP 157.55.39.149 has view article id 29 on 2019-04-15 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.149', '2019-04-15'),
(1281, 'New view count for 24! on 2019-04-15 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 24 on 2019-04-15 using os Android browser Browser  version  by user Anonymous', 24, '66.249.79.49', '2019-04-15'),
(1282, 'New view count for 20! on 2019-04-15 by IP 45.57.211.98', 'The IP 45.57.211.98 has view article id 20 on 2019-04-15 using os Windows 7 browser Browser Internet Explorer version 10.0 by user Anonymous', 20, '45.57.211.98', '2019-04-15'),
(1283, 'New view count for 20! on 2019-04-15 by IP 66.249.79.55', 'The IP 66.249.79.55 has view article id 20 on 2019-04-15 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.55', '2019-04-15'),
(1284, 'New view count for 28! on 2019-04-15 by IP 207.46.13.69', 'The IP 207.46.13.69 has view article id 28 on 2019-04-15 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '207.46.13.69', '2019-04-15'),
(1285, 'New view count for 17! on 2019-04-15 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 17 on 2019-04-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.77.119', '2019-04-15'),
(1286, 'New view count for 6! on 2019-04-15 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 6 on 2019-04-15 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.77.109', '2019-04-15'),
(1287, 'New view count for 14! on 2019-04-16 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 14 on 2019-04-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.78.161', '2019-04-16'),
(1288, 'New view count for 29! on 2019-04-16 by IP 157.55.39.236', 'The IP 157.55.39.236 has view article id 29 on 2019-04-16 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.236', '2019-04-16'),
(1289, 'New view count for 16! on 2019-04-16 by IP 207.46.13.75', 'The IP 207.46.13.75 has view article id 16 on 2019-04-16 using os Unknown Platform browser Browser  version  by user Anonymous', 16, '207.46.13.75', '2019-04-16'),
(1290, 'New view count for 4! on 2019-04-16 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 4 on 2019-04-16 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.78.161', '2019-04-16'),
(1291, 'New view count for 18! on 2019-04-16 by IP 66.249.79.55', 'The IP 66.249.79.55 has view article id 18 on 2019-04-16 using os Android browser Browser  version  by user Anonymous', 18, '66.249.79.55', '2019-04-16'),
(1292, 'New view count for 20! on 2019-04-16 by IP 180.76.15.17', 'The IP 180.76.15.17 has view article id 20 on 2019-04-16 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.17', '2019-04-16'),
(1293, 'New view count for 15! on 2019-04-16 by IP 157.55.39.133', 'The IP 157.55.39.133 has view article id 15 on 2019-04-16 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '157.55.39.133', '2019-04-16'),
(1294, 'New view count for 29! on 2019-04-17 by IP 223.24.95.70', 'The IP 223.24.95.70 has view article id 29 on 2019-04-17 using os Android browser Browser Chrome version 73.0.3683.90 by user Anonymous', 29, '223.24.95.70', '2019-04-17'),
(1295, 'New view count for 18! on 2019-04-18 by IP 157.55.39.224', 'The IP 157.55.39.224 has view article id 18 on 2019-04-18 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.224', '2019-04-18'),
(1296, 'New view count for 25! on 2019-04-19 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 25 on 2019-04-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.78.169', '2019-04-19'),
(1297, 'New view count for 7! on 2019-04-19 by IP 77.75.76.170', 'The IP 77.75.76.170 has view article id 7 on 2019-04-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.76.170', '2019-04-19'),
(1298, 'New view count for 11! on 2019-04-19 by IP 77.75.78.167', 'The IP 77.75.78.167 has view article id 11 on 2019-04-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.78.167', '2019-04-19'),
(1299, 'New view count for 23! on 2019-04-19 by IP 148.251.46.70', 'The IP 148.251.46.70 has view article id 23 on 2019-04-19 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '148.251.46.70', '2019-04-19'),
(1300, 'New view count for 27! on 2019-04-20 by IP 173.208.130.202', 'The IP 173.208.130.202 has view article id 27 on 2019-04-20 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 27, '173.208.130.202', '2019-04-20'),
(1301, 'New view count for 29! on 2019-04-20 by IP 87.250.224.103', 'The IP 87.250.224.103 has view article id 29 on 2019-04-20 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '87.250.224.103', '2019-04-20'),
(1302, 'New view count for 22! on 2019-04-21 by IP 157.55.39.165', 'The IP 157.55.39.165 has view article id 22 on 2019-04-21 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '157.55.39.165', '2019-04-21'),
(1303, 'New view count for 24! on 2019-04-21 by IP 40.77.167.134', 'The IP 40.77.167.134 has view article id 24 on 2019-04-21 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '40.77.167.134', '2019-04-21'),
(1304, 'New view count for 20! on 2019-04-22 by IP 40.77.167.69', 'The IP 40.77.167.69 has view article id 20 on 2019-04-22 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '40.77.167.69', '2019-04-22'),
(1305, 'New view count for 26! on 2019-04-22 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 26 on 2019-04-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.77.109', '2019-04-22'),
(1306, 'New view count for 2! on 2019-04-22 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 2 on 2019-04-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.77.109', '2019-04-22'),
(1307, 'New view count for 28! on 2019-04-22 by IP 77.75.77.11', 'The IP 77.75.77.11 has view article id 28 on 2019-04-22 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.77.11', '2019-04-22'),
(1308, 'New view count for 23! on 2019-04-23 by IP 207.46.13.83', 'The IP 207.46.13.83 has view article id 23 on 2019-04-23 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.83', '2019-04-23'),
(1309, 'New view count for 3! on 2019-04-23 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 3 on 2019-04-23 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.77.109', '2019-04-23'),
(1310, 'New view count for 19! on 2019-04-23 by IP 40.77.167.65', 'The IP 40.77.167.65 has view article id 19 on 2019-04-23 using os Unknown Platform browser Browser  version  by user Anonymous', 19, '40.77.167.65', '2019-04-23'),
(1311, 'New view count for 29! on 2019-04-24 by IP 157.55.39.245', 'The IP 157.55.39.245 has view article id 29 on 2019-04-24 using os Unknown Platform browser Browser  version  by user Anonymous', 29, '157.55.39.245', '2019-04-24'),
(1312, 'New view count for 29! on 2019-04-24 by IP 223.24.190.210', 'The IP 223.24.190.210 has view article id 29 on 2019-04-24 using os Linux browser Browser Firefox version 66.0 by user Anonymous', 29, '223.24.190.210', '2019-04-24'),
(1313, 'New view count for 29! on 2019-04-24 by IP 88.198.251.6', 'The IP 88.198.251.6 has view article id 29 on 2019-04-24 using os Linux browser Browser Firefox version 59.0 by user Anonymous', 29, '88.198.251.6', '2019-04-24'),
(1314, 'New view count for 22! on 2019-04-25 by IP 27.55.31.174', 'The IP 27.55.31.174 has view article id 22 on 2019-04-25 using os Linux browser Browser Firefox version 66.0 by user Anonymous', 22, '27.55.31.174', '2019-04-25'),
(1315, 'New view count for 22! on 2019-04-25 by IP 88.198.251.6', 'The IP 88.198.251.6 has view article id 22 on 2019-04-25 using os Linux browser Browser Firefox version 59.0 by user Anonymous', 22, '88.198.251.6', '2019-04-25'),
(1316, 'New view count for 20! on 2019-04-25 by IP 27.55.31.174', 'The IP 27.55.31.174 has view article id 20 on 2019-04-25 using os Linux browser Browser Firefox version 66.0 by user Anonymous', 20, '27.55.31.174', '2019-04-25'),
(1317, 'New view count for 20! on 2019-04-25 by IP 88.198.251.6', 'The IP 88.198.251.6 has view article id 20 on 2019-04-25 using os Linux browser Browser Firefox version 59.0 by user Anonymous', 20, '88.198.251.6', '2019-04-25'),
(1318, 'New view count for 2! on 2019-04-25 by IP 77.75.79.54', 'The IP 77.75.79.54 has view article id 2 on 2019-04-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.79.54', '2019-04-25'),
(1319, 'New view count for 18! on 2019-04-25 by IP 77.75.76.162', 'The IP 77.75.76.162 has view article id 18 on 2019-04-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.76.162', '2019-04-25'),
(1320, 'New view count for 15! on 2019-04-25 by IP 40.77.167.73', 'The IP 40.77.167.73 has view article id 15 on 2019-04-25 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.73', '2019-04-25'),
(1321, 'New view count for 22! on 2019-04-25 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 22 on 2019-04-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.172', '2019-04-25'),
(1322, 'New view count for 25! on 2019-04-25 by IP 77.75.79.101', 'The IP 77.75.79.101 has view article id 25 on 2019-04-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 25, '77.75.79.101', '2019-04-25'),
(1323, 'New view count for 26! on 2019-04-25 by IP 180.76.15.9', 'The IP 180.76.15.9 has view article id 26 on 2019-04-25 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.9', '2019-04-25'),
(1324, 'New view count for 13! on 2019-04-25 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 13 on 2019-04-25 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 13, '77.75.76.171', '2019-04-25'),
(1325, 'New view count for 12! on 2019-04-26 by IP 77.75.76.169', 'The IP 77.75.76.169 has view article id 12 on 2019-04-26 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 12, '77.75.76.169', '2019-04-26'),
(1326, 'New view count for 20! on 2019-04-26 by IP 180.76.15.20', 'The IP 180.76.15.20 has view article id 20 on 2019-04-26 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '180.76.15.20', '2019-04-26'),
(1327, 'New view count for 18! on 2019-04-27 by IP 40.77.167.160', 'The IP 40.77.167.160 has view article id 18 on 2019-04-27 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '40.77.167.160', '2019-04-27'),
(1328, 'New view count for 24! on 2019-04-27 by IP 40.77.167.145', 'The IP 40.77.167.145 has view article id 24 on 2019-04-27 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '40.77.167.145', '2019-04-27'),
(1329, 'New view count for 26! on 2019-04-27 by IP 180.76.15.22', 'The IP 180.76.15.22 has view article id 26 on 2019-04-27 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '180.76.15.22', '2019-04-27'),
(1330, 'New view count for 10! on 2019-04-28 by IP 77.75.79.11', 'The IP 77.75.79.11 has view article id 10 on 2019-04-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.79.11', '2019-04-28'),
(1331, 'New view count for 15! on 2019-04-28 by IP 40.77.167.8', 'The IP 40.77.167.8 has view article id 15 on 2019-04-28 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '40.77.167.8', '2019-04-28'),
(1332, 'New view count for 30! on 2019-04-28 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 30 on 2019-04-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.76.163', '2019-04-28'),
(1333, 'New view count for 26! on 2019-04-28 by IP 77.75.78.161', 'The IP 77.75.78.161 has view article id 26 on 2019-04-28 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 26, '77.75.78.161', '2019-04-28'),
(1334, 'New view count for 26! on 2019-04-29 by IP 207.46.13.107', 'The IP 207.46.13.107 has view article id 26 on 2019-04-29 using os Unknown Platform browser Browser  version  by user Anonymous', 26, '207.46.13.107', '2019-04-29'),
(1335, 'New view count for 31! on 2019-04-30 by IP 202.28.79.194', 'The IP 202.28.79.194 has view article id 31 on 2019-04-30 using os Linux browser Browser Firefox version 66.0 by user Anonymous', 31, '202.28.79.194', '2019-04-30'),
(1336, 'New view count for 31! on 2019-04-30 by IP 88.198.251.8', 'The IP 88.198.251.8 has view article id 31 on 2019-04-30 using os Linux browser Browser Firefox version 59.0 by user Anonymous', 31, '88.198.251.8', '2019-04-30'),
(1337, 'New view count for 15! on 2019-04-30 by IP 207.46.13.169', 'The IP 207.46.13.169 has view article id 15 on 2019-04-30 using os Unknown Platform browser Browser  version  by user Anonymous', 15, '207.46.13.169', '2019-04-30'),
(1338, 'New view count for 23! on 2019-05-01 by IP 77.75.78.172', 'The IP 77.75.78.172 has view article id 23 on 2019-05-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.78.172', '2019-05-01'),
(1339, 'New view count for 18! on 2019-05-01 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 18 on 2019-05-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 18, '77.75.78.165', '2019-05-01'),
(1340, 'New view count for 2! on 2019-05-01 by IP 77.75.78.165', 'The IP 77.75.78.165 has view article id 2 on 2019-05-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.78.165', '2019-05-01'),
(1341, 'New view count for 22! on 2019-05-01 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 22 on 2019-05-01 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 22, '77.75.78.169', '2019-05-01'),
(1342, 'New view count for 20! on 2019-05-02 by IP 77.75.79.17', 'The IP 77.75.79.17 has view article id 20 on 2019-05-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 20, '77.75.79.17', '2019-05-02'),
(1343, 'New view count for 29! on 2019-05-02 by IP 77.75.76.160', 'The IP 77.75.76.160 has view article id 29 on 2019-05-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 29, '77.75.76.160', '2019-05-02'),
(1344, 'New view count for 1! on 2019-05-02 by IP 77.75.78.166', 'The IP 77.75.78.166 has view article id 1 on 2019-05-02 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 1, '77.75.78.166', '2019-05-02'),
(1345, 'New view count for 31! on 2019-05-03 by IP 207.46.13.41', 'The IP 207.46.13.41 has view article id 31 on 2019-05-03 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '207.46.13.41', '2019-05-03'),
(1346, 'New view count for 31! on 2019-05-03 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 31 on 2019-05-03 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.77.119', '2019-05-03'),
(1347, 'New view count for 30! on 2019-05-04 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 30 on 2019-05-04 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 30, '77.75.76.168', '2019-05-04'),
(1348, 'New view count for 20! on 2019-05-04 by IP 66.249.79.49', 'The IP 66.249.79.49 has view article id 20 on 2019-05-04 using os Android browser Browser  version  by user Anonymous', 20, '66.249.79.49', '2019-05-04'),
(1349, 'New view count for 1! on 2019-05-05 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 1 on 2019-05-05 using os Unknown Platform browser Browser  version  by user Anonymous', 1, '37.9.113.4', '2019-05-05'),
(1350, 'New view count for 18! on 2019-05-05 by IP 157.55.39.8', 'The IP 157.55.39.8 has view article id 18 on 2019-05-05 using os Unknown Platform browser Browser  version  by user Anonymous', 18, '157.55.39.8', '2019-05-05'),
(1351, 'New view count for 23! on 2019-05-05 by IP 157.55.39.68', 'The IP 157.55.39.68 has view article id 23 on 2019-05-05 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '157.55.39.68', '2019-05-05'),
(1352, 'New view count for 28! on 2019-05-05 by IP 1.47.202.160', 'The IP 1.47.202.160 has view article id 28 on 2019-05-05 using os Android browser Browser Chrome version 74.0.3729.136 by user Anonymous', 28, '1.47.202.160', '2019-05-05'),
(1353, 'New view count for 26! on 2019-05-05 by IP 1.47.202.160', 'The IP 1.47.202.160 has view article id 26 on 2019-05-05 using os Android browser Browser Chrome version 74.0.3729.136 by user Anonymous', 26, '1.47.202.160', '2019-05-05'),
(1354, 'New view count for 22! on 2019-05-05 by IP 207.46.13.200', 'The IP 207.46.13.200 has view article id 22 on 2019-05-05 using os Unknown Platform browser Browser  version  by user Anonymous', 22, '207.46.13.200', '2019-05-05'),
(1355, 'New view count for 20! on 2019-05-05 by IP 207.46.13.49', 'The IP 207.46.13.49 has view article id 20 on 2019-05-05 using os Unknown Platform browser Browser  version  by user Anonymous', 20, '207.46.13.49', '2019-05-05'),
(1356, 'New view count for 7! on 2019-05-06 by IP 77.75.77.62', 'The IP 77.75.77.62 has view article id 7 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 7, '77.75.77.62', '2019-05-06'),
(1357, 'New view count for 19! on 2019-05-06 by IP 77.75.77.72', 'The IP 77.75.77.72 has view article id 19 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.77.72', '2019-05-06'),
(1358, 'New view count for 2! on 2019-05-06 by IP 77.75.79.32', 'The IP 77.75.79.32 has view article id 2 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 2, '77.75.79.32', '2019-05-06'),
(1359, 'New view count for 10! on 2019-05-06 by IP 77.75.77.101', 'The IP 77.75.77.101 has view article id 10 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 10, '77.75.77.101', '2019-05-06'),
(1360, 'New view count for 23! on 2019-05-06 by IP 77.75.78.162', 'The IP 77.75.78.162 has view article id 23 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 23, '77.75.78.162', '2019-05-06'),
(1361, 'New view count for 14! on 2019-05-06 by IP 77.75.77.109', 'The IP 77.75.77.109 has view article id 14 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 14, '77.75.77.109', '2019-05-06'),
(1362, 'New view count for 8! on 2019-05-06 by IP 77.75.77.119', 'The IP 77.75.77.119 has view article id 8 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 8, '77.75.77.119', '2019-05-06'),
(1363, 'New view count for 17! on 2019-05-06 by IP 77.75.76.168', 'The IP 77.75.76.168 has view article id 17 on 2019-05-06 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 17, '77.75.76.168', '2019-05-06'),
(1364, 'New view count for 11! on 2019-05-07 by IP 77.75.78.163', 'The IP 77.75.78.163 has view article id 11 on 2019-05-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 11, '77.75.78.163', '2019-05-07'),
(1365, 'New view count for 6! on 2019-05-07 by IP 77.75.76.171', 'The IP 77.75.76.171 has view article id 6 on 2019-05-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 6, '77.75.76.171', '2019-05-07'),
(1366, 'New view count for 4! on 2019-05-07 by IP 77.75.78.169', 'The IP 77.75.78.169 has view article id 4 on 2019-05-07 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 4, '77.75.78.169', '2019-05-07'),
(1367, 'New view count for 20! on 2019-05-08 by IP 66.249.64.155', 'The IP 66.249.64.155 has view article id 20 on 2019-05-08 using os Android browser Browser  version  by user Anonymous', 20, '66.249.64.155', '2019-05-08'),
(1368, 'New view count for 31! on 2019-05-08 by IP 77.75.76.163', 'The IP 77.75.76.163 has view article id 31 on 2019-05-08 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 31, '77.75.76.163', '2019-05-08'),
(1369, 'New view count for 17! on 2019-05-08 by IP 40.77.167.111', 'The IP 40.77.167.111 has view article id 17 on 2019-05-08 using os Unknown Platform browser Browser  version  by user Anonymous', 17, '40.77.167.111', '2019-05-08'),
(1370, 'New view count for 31! on 2019-05-09 by IP 207.46.13.52', 'The IP 207.46.13.52 has view article id 31 on 2019-05-09 using os Unknown Platform browser Browser  version  by user Anonymous', 31, '207.46.13.52', '2019-05-09'),
(1371, 'New view count for 4! on 2019-05-09 by IP 178.154.171.77', 'The IP 178.154.171.77 has view article id 4 on 2019-05-09 using os Unknown Platform browser Browser  version  by user Anonymous', 4, '178.154.171.77', '2019-05-09'),
(1372, 'New view count for 24! on 2019-05-10 by IP 207.46.13.47', 'The IP 207.46.13.47 has view article id 24 on 2019-05-10 using os Unknown Platform browser Browser  version  by user Anonymous', 24, '207.46.13.47', '2019-05-10'),
(1373, 'New view count for 14! on 2019-05-11 by IP 37.9.113.4', 'The IP 37.9.113.4 has view article id 14 on 2019-05-11 using os Unknown Platform browser Browser  version  by user Anonymous', 14, '37.9.113.4', '2019-05-11'),
(1374, 'New view count for 4! on 2019-05-11 by IP 66.249.79.52', 'The IP 66.249.79.52 has view article id 4 on 2019-05-11 using os Android browser Browser  version  by user Anonymous', 4, '66.249.79.52', '2019-05-11'),
(1375, 'New view count for 28! on 2019-05-11 by IP 40.77.167.17', 'The IP 40.77.167.17 has view article id 28 on 2019-05-11 using os Unknown Platform browser Browser  version  by user Anonymous', 28, '40.77.167.17', '2019-05-11'),
(1376, 'New view count for 20! on 2019-05-12 by IP 1.47.102.160', 'The IP 1.47.102.160 has view article id 20 on 2019-05-12 using os Linux browser Browser Opera version 60.0.3255.70 by user Anonymous', 20, '1.47.102.160', '2019-05-12'),
(1377, 'New view count for 19! on 2019-05-12 by IP 77.75.77.95', 'The IP 77.75.77.95 has view article id 19 on 2019-05-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 19, '77.75.77.95', '2019-05-12'),
(1378, 'New view count for 28! on 2019-05-12 by IP 77.75.79.72', 'The IP 77.75.79.72 has view article id 28 on 2019-05-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 28, '77.75.79.72', '2019-05-12'),
(1379, 'New view count for 3! on 2019-05-12 by IP 77.75.79.36', 'The IP 77.75.79.36 has view article id 3 on 2019-05-12 using os Unknown Platform browser Browser Mozilla version 5.0 by user Anonymous', 3, '77.75.79.36', '2019-05-12'),
(1380, 'New view count for 23! on 2019-05-13 by IP 207.46.13.218', 'The IP 207.46.13.218 has view article id 23 on 2019-05-13 using os Unknown Platform browser Browser  version  by user Anonymous', 23, '207.46.13.218', '2019-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bk_id` int(11) NOT NULL,
  `booking_code` varchar(20) NOT NULL,
  `bk_email` varchar(56) NOT NULL,
  `bk_ip` varchar(20) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(400) NOT NULL DEFAULT 'CANOE_JOHNGRAY',
  `mark_as_done` int(11) NOT NULL,
  `booking_cancle` int(11) NOT NULL,
  `bk_date` date NOT NULL,
  `going_date` date NOT NULL,
  `bk_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bk_pay_status` varchar(60) NOT NULL DEFAULT 'wait_for_pay',
  `bk_confirm` int(11) NOT NULL DEFAULT '0',
  `conf_ip` varchar(20) NOT NULL,
  `conf_id` int(11) NOT NULL,
  `conf_name` varchar(25) NOT NULL,
  `bk_date_conf` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bk_id`, `booking_code`, `bk_email`, `bk_ip`, `tour_id`, `tour_name`, `mark_as_done`, `booking_cancle`, `bk_date`, `going_date`, `bk_datetime`, `bk_pay_status`, `bk_confirm`, `conf_ip`, `conf_id`, `conf_name`, `bk_date_conf`) VALUES
(1, 'i1dbqxykfj', 'farook_jgsc@hotmail.com', '223.24.62.87', 69, '14 days 13 nights at Southern of Thailand', 0, 0, '2019-04-23', '2019-04-26', '2019-04-23 08:52:32', '0', 0, '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_payment_info`
--

CREATE TABLE `tbl_booking_payment_info` (
  `bk_pay_id` int(11) NOT NULL,
  `bk_id` int(11) NOT NULL,
  `pay_full_price` int(15) NOT NULL,
  `pay_deposite` int(10) NOT NULL,
  `must_pay_deposite` int(10) NOT NULL,
  `collect_more` int(10) NOT NULL,
  `must_collect_more` int(10) NOT NULL,
  `day_pay_record` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_has_pay` int(11) NOT NULL,
  `user_pay_as` varchar(40) NOT NULL DEFAULT 'NOT_PAY',
  `user_payment_img` varchar(200) DEFAULT '0',
  `payment_img_thumb` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking_payment_info`
--

INSERT INTO `tbl_booking_payment_info` (`bk_pay_id`, `bk_id`, `pay_full_price`, `pay_deposite`, `must_pay_deposite`, `collect_more`, `must_collect_more`, `day_pay_record`, `user_has_pay`, `user_pay_as`, `user_payment_img`, `payment_img_thumb`) VALUES
(1, 1, 144000, 0, 36000, 0, 0, '2019-04-23 08:52:32', 0, 'Never Pay', '', '_Thumb_');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_user_info`
--

CREATE TABLE `tbl_booking_user_info` (
  `bk_book_id` int(11) NOT NULL,
  `bk_id` int(11) NOT NULL,
  `bk_user_ip` varchar(100) NOT NULL,
  `bk_user_id` int(11) NOT NULL,
  `bk_user_name` varchar(50) NOT NULL,
  `bk_user_email` varchar(50) NOT NULL,
  `bk_user_more` text NOT NULL,
  `bk_num_people` int(11) NOT NULL,
  `book_record_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bk_date_going` date NOT NULL,
  `bk_date_booking` date NOT NULL,
  `bk_date_remain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking_user_info`
--

INSERT INTO `tbl_booking_user_info` (`bk_book_id`, `bk_id`, `bk_user_ip`, `bk_user_id`, `bk_user_name`, `bk_user_email`, `bk_user_more`, `bk_num_people`, `book_record_day`, `bk_date_going`, `bk_date_booking`, `bk_date_remain`) VALUES
(1, 1, '223.24.62.87', 0, 'fa frook far from here', 'farook_jgsc@hotmail.com', 'this is the test there is no hotel room number 2000', 2, '2019-04-23 08:52:32', '2019-04-26', '2019-04-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `cat_section` varchar(25) NOT NULL,
  `cat_des` text NOT NULL,
  `allow_user_change` int(11) NOT NULL,
  `cat_show_public` int(11) NOT NULL,
  `has_content` int(11) NOT NULL,
  `cat_user_id` int(11) NOT NULL,
  `cat_user_type` varchar(10) NOT NULL,
  `date_create` date NOT NULL,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_allow_show` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cat_id`, `cat_title`, `cat_section`, `cat_des`, `allow_user_change`, `cat_show_public`, `has_content`, `cat_user_id`, `cat_user_type`, `date_create`, `last_update`, `admin_allow_show`) VALUES
(1, 'Ajax', 'Programming', 'The category Ajax has create on 2018-09-04 08:48:29 by farook.', 0, 1, 2, 1, 'admin', '2018-09-04', '2018-09-04 08:48:29', 2),
(2, 'Ajax Article From Internet', 'Programming', 'The category Ajax Article From Internet has create on 2018-09-04 08:40:13 by farook.', 0, 2, 1, 1, 'admin', '2018-09-04', '2018-09-04 08:40:13', 2),
(3, 'Programming', 'Programming', 'The category Programming has create on 2018-09-04 08:48:47 by farook.', 0, 1, 1, 1, 'admin', '2018-09-04', '2018-09-04 08:48:47', 2),
(4, 'Copy From net', 'COPY', 'The category Copy From net has create on 2018-09-04 08:48:39 by farook.', 0, 1, 12, 1, 'admin', '2018-09-04', '2018-09-04 08:48:39', 2),
(5, 'Keep it a memory', 'SOCIAL', 'The category Keep it a memory has create on 2018-09-04 08:40:36 by farook.', 0, 2, 12, 1, 'admin', '2018-09-04', '2018-09-04 08:40:36', 2),
(6, 'คำคม copy จากชาวบ้านมา', 'COPY_From_net', '', 0, 1, 0, 1, '', '0000-00-00', '2018-09-04 08:38:08', 0),
(7, 'software installer', 'KNOWLEDGE', 'The category software installer has create on 2018-09-04 08:41:06 by farook.', 0, 1, 1, 1, 'admin', '2018-09-04', '2018-09-04 08:41:06', 2),
(8, 'Fix it problem', 'System Ubuntu', 'The category Fix it problem has create on 2018-09-04 08:48:17 by farook.', 0, 1, 1, 1, 'admin', '2018-09-04', '2018-09-04 08:48:17', 2),
(9, 'Fix it problem Website', 'programming', '', 0, 1, 1, 1, '', '0000-00-00', '2018-09-04 08:38:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `c_id` int(11) NOT NULL,
  `c_section_name` varchar(25) NOT NULL,
  `c_status` int(1) NOT NULL DEFAULT '1',
  `c_status_txt` varchar(45) NOT NULL DEFAULT 'Wait',
  `c_show` int(11) NOT NULL,
  `c_comment_url` varchar(500) NOT NULL,
  `c_item_id` int(11) NOT NULL,
  `c_user_ip` varchar(20) NOT NULL,
  `c_user_id` int(11) NOT NULL,
  `c_user_name` varchar(25) NOT NULL,
  `c_user_email` varchar(50) NOT NULL,
  `c_comment_title` varchar(100) NOT NULL,
  `c_comment_body` text NOT NULL,
  `c_date_create` date NOT NULL,
  `c_date_update` date NOT NULL,
  `c_comment_time` time NOT NULL,
  `c_last_access` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`c_id`, `c_section_name`, `c_status`, `c_status_txt`, `c_show`, `c_comment_url`, `c_item_id`, `c_user_ip`, `c_user_id`, `c_user_name`, `c_user_email`, `c_comment_title`, `c_comment_body`, `c_date_create`, `c_date_update`, `c_comment_time`, `c_last_access`) VALUES
(1, 'tour', 0, 'Wait', 0, '', 12, '1.47.132.41', 0, 'Cristho_rim', 'crist.ph@bst.com', 'Thak you very much.', 'I have read this and I think it is a sample project isn\'t it?\r\nif it so I am happy now I can see what I want you to see.', '2018-07-23', '2018-07-23', '08:36:54', '2018-07-23 08:36:05'),
(2, 'article', 2, 'Approve', 1, 'https://www.see-southern.com/article/read/2', 2, '223.24.185.180', 0, 'fun funny', 'farook_jgsc@hotmail.com', 'what are you try to do?', '<p>this is what is the thing that you were trying to do brother?</p>\r\n<p>I know I love this programming so much</p>', '2019-05-27', '2019-05-27', '12:46:45', '2019-05-27 12:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_user_id` int(11) NOT NULL,
  `faq_ip` varchar(20) NOT NULL,
  `faq_name` varchar(45) NOT NULL,
  `faq_email` varchar(45) NOT NULL,
  `faq_title` varchar(100) NOT NULL,
  `faq_body` text NOT NULL,
  `faq_date` date NOT NULL,
  `faq_time` time NOT NULL,
  `faq_is_show` int(11) NOT NULL DEFAULT '0',
  `faq_count` int(11) NOT NULL,
  `faq_has_ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_answer`
--

CREATE TABLE `tbl_faq_answer` (
  `ans_id` int(11) NOT NULL,
  `faq_id` int(11) NOT NULL,
  `ans_title` varchar(100) NOT NULL,
  `ans_body` text NOT NULL,
  `ans_date` datetime NOT NULL,
  `ans_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notice_id` int(11) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_body` text NOT NULL,
  `notice_ip` varchar(20) NOT NULL,
  `by_user_name` varchar(60) NOT NULL,
  `notice_link` varchar(200) NOT NULL,
  `notice_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notice_read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pd_title` text NOT NULL,
  `pd_body` text NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL,
  `pd_public` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cat`
--

CREATE TABLE `tbl_product_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(45) NOT NULL,
  `cat_des` text NOT NULL,
  `cat_show_public` int(11) NOT NULL,
  `cat_user_id` int(11) NOT NULL,
  `cat_has_content` int(11) NOT NULL,
  `cat_date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(60) NOT NULL,
  `sub_user_data` text NOT NULL,
  `sub_by_ip` varchar(40) NOT NULL,
  `email_is_confirm` int(11) NOT NULL,
  `email_confirm_date` datetime NOT NULL,
  `accept_news` int(11) NOT NULL,
  `sub_by_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`sub_id`, `sub_email`, `sub_user_data`, `sub_by_ip`, `email_is_confirm`, `email_confirm_date`, `accept_news`, `sub_by_date`) VALUES
(1, 'farook_jgsc@hotmail.com', '[os : Linux][ ip : 27.55.31.174][Browser : Browser Firefox version 66.0]', '27.55.31.174', 0, '0000-00-00 00:00:00', 0, '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour`
--

CREATE TABLE `tbl_tour` (
  `t_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `kw_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_summary` text NOT NULL,
  `t_duration` varchar(100) NOT NULL DEFAULT '2 days 1 night',
  `t_destination` varchar(400) NOT NULL,
  `t_program` text NOT NULL,
  `full_price` int(11) NOT NULL,
  `mark_draft` int(11) NOT NULL DEFAULT '1',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `t_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tour`
--

INSERT INTO `tbl_tour` (`t_id`, `cat_id`, `kw_id`, `user_id`, `t_name`, `t_summary`, `t_duration`, `t_destination`, `t_program`, `full_price`, `mark_draft`, `date_create`, `date_update`, `t_star`) VALUES
(1, 0, 1, 17, 'my tour number 1 this is the etst', '<div class=\"row\">\r\n                        <div class=\"col-md-4\">\r\n                            <a href=\"https://lh3.googleusercontent.com/gm_Bt5qxGFEnQFVW19B-K4ErEuNyUT7Ybs_U_5jNFTfe1gtTCCYB-IahaZNX5vTNqz9txvBgxf3OxHrmuwurNS9Ibfwp_JNFkTluk-89iJZCGStKM1mMKxeyoBu_s5P2j9CsX3ZZGw=w2400\" target=\"blank\" alt=\"see the full size image\">\r\n                            <img src=\"https://lh3.googleusercontent.com/gm_Bt5qxGFEnQFVW19B-K4ErEuNyUT7Ybs_U_5jNFTfe1gtTCCYB-IahaZNX5vTNqz9txvBgxf3OxHrmuwurNS9Ibfwp_JNFkTluk-89iJZCGStKM1mMKxeyoBu_s5P2j9CsX3ZZGw=w2400\" class=\"responsive\"/>\r\n                            </a>\r\n                            <p>test data 1</p>\r\n                        </div>\r\n                        <div class=\"col-lg-8\">\r\n                            <p>test data 1 tets again</p>\r\n                        </div>\r\n                    </div>\r\n                    ', '2 days 1 night', 'phuket', '', 10000, 0, '2019-05-25 00:17:59', '2019-05-25 01:02:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visiter`
--

CREATE TABLE `tbl_visiter` (
  `v_id` int(11) NOT NULL,
  `v_ip` varchar(25) NOT NULL,
  `v_user_id` int(11) NOT NULL,
  `v_user_name` varchar(50) NOT NULL,
  `v_browser` varchar(50) NOT NULL,
  `v_os` varchar(50) NOT NULL,
  `v_month` int(11) NOT NULL,
  `v_year` int(11) NOT NULL,
  `v_cur_visit_date` date NOT NULL,
  `v_cur_visit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `v_last_visit_date` date NOT NULL,
  `v_last_visit_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `v_num_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_visiter`
--

INSERT INTO `tbl_visiter` (`v_id`, `v_ip`, `v_user_id`, `v_user_name`, `v_browser`, `v_os`, `v_month`, `v_year`, `v_cur_visit_date`, `v_cur_visit_time`, `v_last_visit_date`, `v_last_visit_time`, `v_num_time`) VALUES
(5, '183.88.108.172', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 5, 2018, '2018-05-23', '2018-05-23 07:30:28', '2018-05-23', '2018-05-23 07:30:28', 1),
(6, '1.46.204.14', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-23', '2018-05-23 07:44:29', '2018-05-23', '2018-05-23 07:44:29', 1),
(7, '183.88.110.240', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Linux', 5, 2018, '2018-05-23', '2018-05-23 05:11:32', '2018-05-23', '2018-05-23 05:11:32', 1),
(8, '183.88.110.240', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 5, 2018, '2018-05-24', '2018-05-24 06:43:40', '2018-05-24', '2018-05-24 06:43:40', 1),
(9, '173.252.98.115', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 5, 2018, '2018-05-24', '2018-05-24 07:03:02', '2018-05-24', '2018-05-24 07:03:02', 1),
(10, '1.46.232.47', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-24', '2018-05-24 07:54:57', '2018-05-24', '2018-05-24 07:54:57', 1),
(11, '61.7.168.90', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-24', '2018-05-24 08:01:29', '2018-05-24', '2018-05-24 08:01:29', 1),
(12, '1.46.204.14', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-24', '2018-05-24 08:01:35', '2018-05-24', '2018-05-24 08:01:35', 1),
(13, '1.46.232.47', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-25', '2018-05-25 03:25:41', '2018-05-25', '2018-05-25 03:25:41', 1),
(14, '1.47.14.28', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-25', '2018-05-25 06:13:45', '2018-05-25', '2018-05-25 06:13:45', 1),
(15, '66.249.79.64', 0, 'Anonymous', 'Browser  version ', 'Android', 5, 2018, '2018-05-25', '2018-05-25 08:08:01', '2018-05-25', '2018-05-25 08:08:01', 1),
(16, '183.88.110.240', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Linux', 5, 2018, '2018-05-25', '2018-05-25 08:11:20', '2018-05-25', '2018-05-25 08:11:20', 1),
(17, '120.18.69.238', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 5, 2018, '2018-05-25', '2018-05-25 01:52:29', '2018-05-25', '2018-05-25 01:52:29', 1),
(18, '120.21.97.246', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 5, 2018, '2018-05-25', '2018-05-25 08:12:02', '2018-05-25', '2018-05-25 08:12:02', 1),
(19, '66.249.79.127', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 5, 2018, '2018-05-25', '2018-05-25 08:14:53', '2018-05-25', '2018-05-25 08:14:53', 1),
(20, '66.249.79.99', 0, 'Anonymous', 'Browser  version ', 'Android', 5, 2018, '2018-05-25', '2018-05-25 09:32:34', '2018-05-25', '2018-05-25 09:32:34', 1),
(21, '183.88.110.240', 0, 'Anonymous', 'Browser Firefox version 59.0', 'Linux', 5, 2018, '2018-05-26', '2018-05-26 04:03:59', '2018-05-26', '2018-05-26 04:03:59', 1),
(22, '183.88.110.240', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Linux', 5, 2018, '2018-05-27', '2018-05-27 09:37:48', '2018-05-27', '2018-05-27 09:37:48', 1),
(23, '1.46.232.47', 0, 'Anonymous', 'Browser Opera version 53.0.2907.68', 'Linux', 5, 2018, '2018-05-28', '2018-05-28 05:52:57', '2018-05-28', '2018-05-28 05:52:57', 1),
(24, '1.47.14.28', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-28', '2018-05-28 07:43:09', '2018-05-28', '2018-05-28 07:43:09', 1),
(25, '202.28.79.194', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Windows 10', 5, 2018, '2018-05-28', '2018-05-28 10:22:43', '2018-05-28', '2018-05-28 10:22:43', 1),
(26, '182.232.236.170', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-28', '2018-05-28 12:04:32', '2018-05-28', '2018-05-28 12:04:32', 1),
(27, '49.229.142.134', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-28', '2018-05-28 09:33:59', '2018-05-28', '2018-05-28 09:33:59', 1),
(28, '183.89.53.93', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 5, 2018, '2018-05-29', '2018-05-29 07:34:01', '2018-05-29', '2018-05-29 07:34:01', 1),
(29, '171.5.21.154', 0, 'Anonymous', 'Browser Chrome version 62.0.3202.84', 'Android', 5, 2018, '2018-05-29', '2018-05-29 10:47:13', '2018-05-29', '2018-05-29 10:47:13', 1),
(30, '183.89.53.93', 0, 'Anonymous', 'Browser Opera version 53.0.2907.68', 'Linux', 5, 2018, '2018-05-30', '2018-05-30 04:33:15', '2018-05-30', '2018-05-30 04:33:15', 1),
(31, '183.89.53.93', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 5, 2018, '2018-05-31', '2018-05-31 05:59:46', '2018-05-31', '2018-05-31 05:59:46', 1),
(32, '66.220.151.208', 0, 'Anonymous', 'Browser Safari version 602.1', 'iOS', 5, 2018, '2018-05-31', '2018-05-31 05:23:23', '2018-05-31', '2018-05-31 05:23:23', 1),
(33, '49.230.21.73', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 5, 2018, '2018-05-31', '2018-05-31 06:18:38', '2018-05-31', '2018-05-31 06:18:38', 1),
(34, '1.46.174.161', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-01', '2018-06-01 08:00:08', '2018-06-01', '2018-06-01 08:00:08', 1),
(35, '183.89.53.93', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-01', '2018-06-01 09:42:47', '2018-06-01', '2018-06-01 09:42:47', 1),
(36, '183.89.53.93', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-02', '2018-06-02 07:21:36', '2018-06-02', '2018-06-02 07:21:36', 1),
(37, '183.89.53.115', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.62', 'Linux', 6, 2018, '2018-06-02', '2018-06-02 08:52:23', '2018-06-02', '2018-06-02 08:52:23', 1),
(38, '183.89.53.115', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.62', 'Linux', 6, 2018, '2018-06-03', '2018-06-03 05:02:29', '2018-06-03', '2018-06-03 05:02:29', 1),
(39, '183.89.53.115', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-04', '2018-06-04 07:54:12', '2018-06-04', '2018-06-04 07:54:12', 1),
(40, '1.47.9.226', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-04', '2018-06-04 10:53:31', '2018-06-04', '2018-06-04 10:53:31', 1),
(41, '1.47.104.77', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-04', '2018-06-04 10:57:02', '2018-06-04', '2018-06-04 10:57:02', 1),
(42, '182.232.112.212', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-04', '2018-06-04 11:39:39', '2018-06-04', '2018-06-04 11:39:39', 1),
(43, '64.233.172.191', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 6, 2018, '2018-06-04', '2018-06-04 07:05:46', '2018-06-04', '2018-06-04 07:05:46', 1),
(44, '183.89.53.115', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.62', 'Linux', 6, 2018, '2018-06-05', '2018-06-05 03:52:03', '2018-06-05', '2018-06-05 03:52:03', 1),
(45, '1.47.33.101', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-05', '2018-06-05 06:15:22', '2018-06-05', '2018-06-05 06:15:22', 1),
(46, '1.46.172.241', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-05', '2018-06-05 05:45:16', '2018-06-05', '2018-06-05 05:45:16', 1),
(47, '66.249.77.14', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2018, '2018-06-05', '2018-06-05 11:35:41', '2018-06-05', '2018-06-05 11:35:41', 1),
(48, '183.89.53.115', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.62', 'Linux', 6, 2018, '2018-06-06', '2018-06-06 04:26:54', '2018-06-06', '2018-06-06 04:26:54', 1),
(49, '1.46.172.241', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-06', '2018-06-06 07:04:31', '2018-06-06', '2018-06-06 07:04:31', 1),
(50, '1.46.78.149', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-06', '2018-06-06 02:19:21', '2018-06-06', '2018-06-06 02:19:21', 1),
(51, '66.249.71.24', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2018, '2018-06-07', '2018-06-07 04:04:39', '2018-06-07', '2018-06-07 04:04:39', 1),
(52, '184.22.163.10', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Windows 8.1', 6, 2018, '2018-06-08', '2018-06-08 08:54:54', '2018-06-08', '2018-06-08 08:54:54', 1),
(53, '1.47.194.13', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.62', 'Linux', 6, 2018, '2018-06-09', '2018-06-09 04:30:52', '2018-06-09', '2018-06-09 04:30:52', 1),
(54, '66.249.79.127', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2018, '2018-06-10', '2018-06-10 05:02:29', '2018-06-10', '2018-06-10 05:02:29', 1),
(55, '191.253.123.64', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-10', '2018-06-10 11:37:32', '2018-06-10', '2018-06-10 11:37:32', 1),
(56, '183.88.111.248', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.79', 'Linux', 6, 2018, '2018-06-11', '2018-06-11 07:42:25', '2018-06-11', '2018-06-11 07:42:25', 1),
(57, '14.207.78.6', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-12', '2018-06-12 05:05:09', '2018-06-12', '2018-06-12 05:05:09', 1),
(58, '95.24.141.153', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-13', '2018-06-13 11:51:20', '2018-06-13', '2018-06-13 11:51:20', 1),
(59, '176.59.50.249', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-13', '2018-06-13 08:14:32', '2018-06-13', '2018-06-13 08:14:32', 1),
(60, '183.89.196.5', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-14', '2018-06-14 04:41:11', '2018-06-14', '2018-06-14 04:41:11', 1),
(61, '223.24.177.17', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 6, 2018, '2018-06-14', '2018-06-14 07:44:07', '2018-06-14', '2018-06-14 07:44:07', 1),
(62, '1.46.42.238', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 6, 2018, '2018-06-14', '2018-06-14 08:02:33', '2018-06-14', '2018-06-14 08:02:33', 1),
(63, '183.89.138.184', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-16', '2018-06-16 10:21:29', '2018-06-16', '2018-06-16 10:21:29', 1),
(64, '183.89.138.184', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-17', '2018-06-17 10:41:39', '2018-06-17', '2018-06-17 10:41:39', 1),
(65, '183.89.138.184', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.79', 'Linux', 6, 2018, '2018-06-19', '2018-06-19 04:41:37', '2018-06-19', '2018-06-19 04:41:37', 1),
(66, '14.207.77.171', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.79', 'Linux', 6, 2018, '2018-06-21', '2018-06-21 09:00:42', '2018-06-21', '2018-06-21 09:00:42', 1),
(67, '1.47.36.255', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.79', 'Linux', 6, 2018, '2018-06-21', '2018-06-21 10:14:11', '2018-06-21', '2018-06-21 10:14:11', 1),
(68, '14.207.77.171', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-22', '2018-06-22 07:02:29', '2018-06-22', '2018-06-22 07:02:29', 1),
(69, '1.46.201.160', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 6, 2018, '2018-06-22', '2018-06-22 10:58:01', '2018-06-22', '2018-06-22 10:58:01', 1),
(70, '192.0.91.199', 0, 'Anonymous', 'Browser Chrome version 67.0.3372.0', 'Linux', 6, 2018, '2018-06-22', '2018-06-22 11:22:53', '2018-06-22', '2018-06-22 11:22:53', 1),
(71, '202.28.79.194', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Windows 10', 6, 2018, '2018-06-24', '2018-06-24 08:23:38', '2018-06-24', '2018-06-24 08:23:38', 1),
(72, '14.207.77.171', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.79', 'Linux', 6, 2018, '2018-06-24', '2018-06-24 08:38:51', '2018-06-24', '2018-06-24 08:38:51', 1),
(73, '1.46.35.85', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 6, 2018, '2018-06-24', '2018-06-24 08:58:55', '2018-06-24', '2018-06-24 08:58:55', 1),
(74, '49.230.217.36', 0, 'Anonymous', 'Browser Safari version 8.8.0', 'iOS', 6, 2018, '2018-06-24', '2018-06-24 09:59:21', '2018-06-24', '2018-06-24 09:59:21', 1),
(75, '66.249.79.125', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2018, '2018-06-25', '2018-06-25 02:25:58', '2018-06-25', '2018-06-25 02:25:58', 1),
(76, '66.249.79.127', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2018, '2018-06-25', '2018-06-25 06:11:43', '2018-06-25', '2018-06-25 06:11:43', 1),
(77, '23.229.70.147', 0, 'Anonymous', 'Browser Firefox version 57.0', 'Windows 8.1', 6, 2018, '2018-06-25', '2018-06-25 06:40:58', '2018-06-25', '2018-06-25 06:40:58', 1),
(78, '183.89.199.73', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Linux', 6, 2018, '2018-06-26', '2018-06-26 08:01:07', '2018-06-26', '2018-06-26 08:01:07', 1),
(79, '183.89.199.73', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Linux', 6, 2018, '2018-06-27', '2018-06-27 03:56:37', '2018-06-27', '2018-06-27 03:56:37', 1),
(80, '183.89.199.73', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-30', '2018-06-30 08:08:20', '2018-06-30', '2018-06-30 08:08:20', 1),
(81, '1.47.36.35', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 6, 2018, '2018-06-30', '2018-06-30 10:54:16', '2018-06-30', '2018-06-30 10:54:16', 1),
(82, '1.47.133.50', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-01', '2018-07-01 07:49:03', '2018-07-01', '2018-07-01 07:49:03', 1),
(83, '1.47.143.163', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-01', '2018-07-01 08:37:06', '2018-07-01', '2018-07-01 08:37:06', 1),
(84, '183.89.138.209', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Linux', 7, 2018, '2018-07-02', '2018-07-02 08:07:26', '2018-07-02', '2018-07-02 08:07:26', 1),
(85, '1.47.34.162', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 09:35:35', '2018-07-02', '2018-07-02 09:35:35', 1),
(86, '223.207.192.207', 0, 'Anonymous', 'Browser Chrome version 61.0.3163.98', 'Android', 7, 2018, '2018-07-02', '2018-07-02 09:49:41', '2018-07-02', '2018-07-02 09:49:41', 1),
(87, '110.168.249.31', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 7, 2018, '2018-07-02', '2018-07-02 09:49:55', '2018-07-02', '2018-07-02 09:49:55', 1),
(88, '116.58.248.89', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 7', 7, 2018, '2018-07-02', '2018-07-02 09:50:41', '2018-07-02', '2018-07-02 09:50:41', 1),
(89, '1.47.142.41', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.116', 'Android', 7, 2018, '2018-07-02', '2018-07-02 09:53:38', '2018-07-02', '2018-07-02 09:53:38', 1),
(90, '184.22.173.141', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 09:55:08', '2018-07-02', '2018-07-02 09:55:08', 1),
(91, '1.46.160.17', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 10:00:55', '2018-07-02', '2018-07-02 10:00:55', 1),
(92, '183.89.193.203', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 10:01:42', '2018-07-02', '2018-07-02 10:01:42', 1),
(93, '223.24.62.124', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 10:04:10', '2018-07-02', '2018-07-02 10:04:10', 1),
(94, '69.171.240.119', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 10:05:48', '2018-07-02', '2018-07-02 10:05:48', 1),
(95, '118.173.155.92', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 10:09:13', '2018-07-02', '2018-07-02 10:09:13', 1),
(96, '182.232.106.55', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 10:59:15', '2018-07-02', '2018-07-02 10:59:15', 1),
(97, '115.87.250.138', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 11:02:57', '2018-07-02', '2018-07-02 11:02:57', 1),
(98, '1.47.226.132', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 11:05:39', '2018-07-02', '2018-07-02 11:05:39', 1),
(99, '182.53.223.154', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 11:41:36', '2018-07-02', '2018-07-02 11:41:36', 1),
(100, '1.47.238.168', 0, 'Anonymous', 'Browser Chrome version 65.0.3325.109', 'Android', 7, 2018, '2018-07-02', '2018-07-02 12:16:49', '2018-07-02', '2018-07-02 12:16:49', 1),
(101, '49.229.135.215', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 12:47:52', '2018-07-02', '2018-07-02 12:47:52', 1),
(102, '159.192.248.63', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 7', 7, 2018, '2018-07-02', '2018-07-02 12:59:51', '2018-07-02', '2018-07-02 12:59:51', 1),
(103, '182.232.96.141', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 01:48:36', '2018-07-02', '2018-07-02 01:48:36', 1),
(104, '1.47.137.139', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 02:02:34', '2018-07-02', '2018-07-02 02:02:34', 1),
(105, '119.76.121.193', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 06:21:31', '2018-07-02', '2018-07-02 06:21:31', 1),
(106, '110.168.248.2', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 07:39:04', '2018-07-02', '2018-07-02 07:39:04', 1),
(107, '171.5.2.167', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-02', '2018-07-02 07:40:00', '2018-07-02', '2018-07-02 07:40:00', 1),
(108, '1.47.65.202', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-02', '2018-07-02 08:52:01', '2018-07-02', '2018-07-02 08:52:01', 1),
(109, '182.232.19.37', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-03', '2018-07-03 12:59:17', '2018-07-03', '2018-07-03 12:59:17', 1),
(110, '223.24.173.104', 0, 'Anonymous', 'Browser Chrome version 64.0.3282.137', 'Android', 7, 2018, '2018-07-03', '2018-07-03 01:57:31', '2018-07-03', '2018-07-03 01:57:31', 1),
(111, '27.55.165.112', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-03', '2018-07-03 02:52:48', '2018-07-03', '2018-07-03 02:52:48', 1),
(112, '184.22.157.177', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-03', '2018-07-03 08:08:20', '2018-07-03', '2018-07-03 08:08:20', 1),
(113, '122.154.60.146', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-03', '2018-07-03 08:14:04', '2018-07-03', '2018-07-03 08:14:04', 1),
(114, '1.47.237.42', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-03', '2018-07-03 08:39:23', '2018-07-03', '2018-07-03 08:39:23', 1),
(115, '183.89.193.203', 0, 'Anonymous', 'Browser Safari version 8.8.0', 'iOS', 7, 2018, '2018-07-03', '2018-07-03 08:42:15', '2018-07-03', '2018-07-03 08:42:15', 1),
(116, '66.249.79.127', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2018, '2018-07-03', '2018-07-03 09:19:01', '2018-07-03', '2018-07-03 09:19:01', 1),
(117, '183.89.138.209', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Linux', 7, 2018, '2018-07-03', '2018-07-03 09:44:46', '2018-07-03', '2018-07-03 09:44:46', 1),
(118, '1.47.239.136', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-03', '2018-07-03 10:27:36', '2018-07-03', '2018-07-03 10:27:36', 1),
(119, '1.47.164.253', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-03', '2018-07-03 07:50:44', '2018-07-03', '2018-07-03 07:50:44', 1),
(120, '223.24.188.211', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-04', '2018-07-04 07:15:12', '2018-07-04', '2018-07-04 07:15:12', 1),
(121, '171.6.240.217', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-04', '2018-07-04 12:07:39', '2018-07-04', '2018-07-04 12:07:39', 1),
(122, '1.47.140.3', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-04', '2018-07-04 12:08:02', '2018-07-04', '2018-07-04 12:08:02', 1),
(123, '49.230.215.248', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-04', '2018-07-04 08:10:56', '2018-07-04', '2018-07-04 08:10:56', 1),
(124, '171.5.0.164', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 7', 7, 2018, '2018-07-05', '2018-07-05 12:47:42', '2018-07-05', '2018-07-05 12:47:42', 1),
(125, '171.101.211.201', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-05', '2018-07-05 09:19:18', '2018-07-05', '2018-07-05 09:19:18', 1),
(126, '182.232.231.27', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 7, 2018, '2018-07-06', '2018-07-06 02:41:38', '2018-07-06', '2018-07-06 02:41:38', 1),
(127, '183.89.54.143', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Linux', 7, 2018, '2018-07-06', '2018-07-06 07:20:58', '2018-07-06', '2018-07-06 07:20:58', 1),
(128, '119.76.122.245', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-06', '2018-07-06 07:41:56', '2018-07-06', '2018-07-06 07:41:56', 1),
(129, '119.42.83.138', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-06', '2018-07-06 07:42:17', '2018-07-06', '2018-07-06 07:42:17', 1),
(130, '171.5.29.232', 0, 'Anonymous', 'Browser Chrome version 55.0.2883.91', 'Android', 7, 2018, '2018-07-06', '2018-07-06 08:35:23', '2018-07-06', '2018-07-06 08:35:23', 1),
(131, '1.47.7.202', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-06', '2018-07-06 08:43:34', '2018-07-06', '2018-07-06 08:43:34', 1),
(132, '49.230.208.37', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-06', '2018-07-06 08:53:12', '2018-07-06', '2018-07-06 08:53:12', 1),
(133, '223.24.190.114', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-06', '2018-07-06 10:10:36', '2018-07-06', '2018-07-06 10:10:36', 1),
(134, '1.46.110.14', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-06', '2018-07-06 12:51:35', '2018-07-06', '2018-07-06 12:51:35', 1),
(135, '184.22.174.232', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-06', '2018-07-06 03:27:39', '2018-07-06', '2018-07-06 03:27:39', 1),
(136, '171.5.9.130', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.81', 'Android', 7, 2018, '2018-07-06', '2018-07-06 06:41:22', '2018-07-06', '2018-07-06 06:41:22', 1),
(137, '1.47.13.247', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-06', '2018-07-06 10:37:11', '2018-07-06', '2018-07-06 10:37:11', 1),
(138, '1.47.96.149', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-07', '2018-07-07 01:27:39', '2018-07-07', '2018-07-07 01:27:39', 1),
(139, '223.207.194.106', 0, 'Anonymous', 'Browser Chrome version 55.0.2883.91', 'Android', 7, 2018, '2018-07-07', '2018-07-07 02:42:27', '2018-07-07', '2018-07-07 02:42:27', 1),
(140, '1.47.237.216', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-07', '2018-07-07 07:27:36', '2018-07-07', '2018-07-07 07:27:36', 1),
(141, '184.22.174.36', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 10', 7, 2018, '2018-07-07', '2018-07-07 10:46:59', '2018-07-07', '2018-07-07 10:46:59', 1),
(142, '188.25.50.104', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-08', '2018-07-08 02:15:42', '2018-07-08', '2018-07-08 02:15:42', 1),
(143, '171.5.14.94', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-08', '2018-07-08 03:02:23', '2018-07-08', '2018-07-08 03:02:23', 1),
(144, '183.89.54.143', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 7, 2018, '2018-07-08', '2018-07-08 03:59:41', '2018-07-08', '2018-07-08 03:59:41', 1),
(145, '66.249.79.96', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2018, '2018-07-08', '2018-07-08 02:11:45', '2018-07-08', '2018-07-08 02:11:45', 1),
(146, '66.249.79.127', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2018, '2018-07-08', '2018-07-08 02:53:28', '2018-07-08', '2018-07-08 02:53:28', 1),
(147, '49.230.206.72', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-09', '2018-07-09 08:21:49', '2018-07-09', '2018-07-09 08:21:49', 1),
(148, '223.24.5.222', 0, 'Anonymous', 'Browser Chrome version 65.0.3325.109', 'Android', 7, 2018, '2018-07-11', '2018-07-11 07:59:46', '2018-07-11', '2018-07-11 07:59:46', 1),
(149, '183.89.197.59', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-11', '2018-07-11 09:33:18', '2018-07-11', '2018-07-11 09:33:18', 1),
(150, '220.253.117.232', 0, 'Anonymous', 'Browser Chrome version 59.0.3071.125', 'Android', 7, 2018, '2018-07-11', '2018-07-11 09:47:23', '2018-07-11', '2018-07-11 09:47:23', 1),
(151, '1.46.194.48', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-11', '2018-07-11 06:54:43', '2018-07-11', '2018-07-11 06:54:43', 1),
(152, '183.88.109.179', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Linux', 7, 2018, '2018-07-11', '2018-07-11 06:58:37', '2018-07-11', '2018-07-11 06:58:37', 1),
(153, '66.102.6.221', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 7, 2018, '2018-07-11', '2018-07-11 07:07:15', '2018-07-11', '2018-07-11 07:07:15', 1),
(154, '183.88.109.179', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 7, 2018, '2018-07-12', '2018-07-12 03:34:36', '2018-07-12', '2018-07-12 03:34:36', 1),
(155, '1.46.194.48', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-12', '2018-07-12 08:10:41', '2018-07-12', '2018-07-12 08:10:41', 1),
(156, '1.47.68.30', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-12', '2018-07-12 08:15:48', '2018-07-12', '2018-07-12 08:15:48', 1),
(157, '184.22.163.201', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 8.1', 7, 2018, '2018-07-12', '2018-07-12 09:53:53', '2018-07-12', '2018-07-12 09:53:53', 1),
(158, '182.232.76.46', 0, 'Anonymous', 'Browser Chrome version 65.0.3325.109', 'Android', 7, 2018, '2018-07-12', '2018-07-12 10:03:59', '2018-07-12', '2018-07-12 10:03:59', 1),
(159, '1.47.97.143', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-12', '2018-07-12 11:54:58', '2018-07-12', '2018-07-12 11:54:58', 1),
(160, '1.47.235.37', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-12', '2018-07-12 10:30:03', '2018-07-12', '2018-07-12 10:30:03', 1),
(161, '1.46.46.134', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 7, 2018, '2018-07-13', '2018-07-13 04:19:43', '2018-07-13', '2018-07-13 04:19:43', 1),
(162, '1.47.143.127', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-13', '2018-07-13 07:13:16', '2018-07-13', '2018-07-13 07:13:16', 1),
(163, '171.6.243.146', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-13', '2018-07-13 03:52:28', '2018-07-13', '2018-07-13 03:52:28', 1),
(164, '1.46.46.134', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 7, 2018, '2018-07-14', '2018-07-14 11:51:29', '2018-07-14', '2018-07-14 11:51:29', 1),
(165, '1.46.46.134', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 7, 2018, '2018-07-15', '2018-07-15 01:42:19', '2018-07-15', '2018-07-15 01:42:19', 1),
(166, '171.6.242.224', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-15', '2018-07-15 12:47:57', '2018-07-15', '2018-07-15 12:47:57', 1),
(167, '184.22.163.105', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-15', '2018-07-15 03:08:01', '2018-07-15', '2018-07-15 03:08:01', 1),
(168, '223.207.147.83', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.158', 'Android', 7, 2018, '2018-07-16', '2018-07-16 01:07:14', '2018-07-16', '2018-07-16 01:07:14', 1),
(169, '178.154.200.36', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 7, 2018, '2018-07-17', '2018-07-17 06:15:50', '2018-07-17', '2018-07-17 06:15:50', 1),
(170, '54.157.181.137', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.50', 'Linux', 7, 2018, '2018-07-20', '2018-07-20 07:54:38', '2018-07-20', '2018-07-20 07:54:38', 1),
(171, '1.46.140.182', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.181', 'Linux', 7, 2018, '2018-07-21', '2018-07-21 08:40:51', '2018-07-21', '2018-07-21 08:40:51', 1),
(172, '1.47.132.41', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 7, 2018, '2018-07-23', '2018-07-23 08:21:46', '2018-07-23', '2018-07-23 08:21:46', 1),
(173, '1.47.132.41', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 7, 2018, '2018-07-24', '2018-07-24 08:13:15', '2018-07-24', '2018-07-24 08:13:15', 1),
(174, '66.249.79.31', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 7, 2018, '2018-07-26', '2018-07-26 01:51:51', '2018-07-26', '2018-07-26 01:51:51', 1),
(175, '1.47.102.23', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-27', '2018-07-27 06:57:25', '2018-07-27', '2018-07-27 06:57:25', 1),
(176, '1.46.194.171', 0, 'Anonymous', 'Browser Safari version 537.36', 'Android', 7, 2018, '2018-07-27', '2018-07-27 06:58:18', '2018-07-27', '2018-07-27 06:58:18', 1),
(177, '1.46.12.92', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-27', '2018-07-27 08:04:22', '2018-07-27', '2018-07-27 08:04:22', 1),
(178, '223.104.20.17', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 7, 2018, '2018-07-27', '2018-07-27 08:04:38', '2018-07-27', '2018-07-27 08:04:38', 1),
(179, '1.46.12.92', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 7, 2018, '2018-07-28', '2018-07-28 06:38:35', '2018-07-28', '2018-07-28 06:38:35', 1),
(180, '1.47.236.73', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 7, 2018, '2018-07-28', '2018-07-28 06:43:13', '2018-07-28', '2018-07-28 06:43:13', 1),
(181, '66.249.79.1', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2018, '2018-08-03', '2018-08-03 10:47:45', '2018-08-03', '2018-08-03 10:47:45', 1),
(182, '171.112.231.171', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-03', '2018-08-03 05:40:41', '2018-08-03', '2018-08-03 05:40:41', 1),
(183, '182.232.173.24', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.85', 'Android', 8, 2018, '2018-08-03', '2018-08-03 07:11:23', '2018-08-03', '2018-08-03 07:11:23', 1),
(184, '31.13.114.49', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-04', '2018-08-04 08:55:37', '2018-08-04', '2018-08-04 08:55:37', 1),
(185, '66.220.151.179', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-04', '2018-08-04 08:55:42', '2018-08-04', '2018-08-04 08:55:42', 1),
(186, '1.47.136.237', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-05', '2018-08-05 03:09:47', '2018-08-05', '2018-08-05 03:09:47', 1),
(187, '171.112.231.171', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-05', '2018-08-05 03:46:42', '2018-08-05', '2018-08-05 03:46:42', 1),
(188, '117.136.83.31', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-05', '2018-08-05 09:54:16', '2018-08-05', '2018-08-05 09:54:16', 1),
(189, '134.196.45.69', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.85', 'Android', 8, 2018, '2018-08-06', '2018-08-06 09:01:52', '2018-08-06', '2018-08-06 09:01:52', 1),
(190, '69.171.240.16', 0, 'Anonymous', 'Browser Spartan version 17.17134', 'Windows 10', 8, 2018, '2018-08-06', '2018-08-06 09:02:22', '2018-08-06', '2018-08-06 09:02:22', 1),
(191, '1.47.101.90', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 8, 2018, '2018-08-07', '2018-08-07 11:21:11', '2018-08-07', '2018-08-07 11:21:11', 1),
(192, '1.47.107.61', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-09', '2018-08-09 03:05:43', '2018-08-09', '2018-08-09 03:05:43', 1),
(193, '66.249.79.31', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2018, '2018-08-09', '2018-08-09 09:13:51', '2018-08-09', '2018-08-09 09:13:51', 1),
(194, '66.249.79.5', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 8, 2018, '2018-08-09', '2018-08-09 09:44:08', '2018-08-09', '2018-08-09 09:44:08', 1),
(195, '66.220.156.19', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-09', '2018-08-09 10:28:58', '2018-08-09', '2018-08-09 10:28:58', 1),
(196, '1.47.168.61', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-10', '2018-08-10 08:18:57', '2018-08-10', '2018-08-10 08:18:57', 1),
(197, '1.46.97.166', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-10', '2018-08-10 11:17:30', '2018-08-10', '2018-08-10 11:17:30', 1),
(198, '66.220.149.1', 0, 'Anonymous', 'Browser Chrome version 40.0.2214.85', 'Windows 7', 8, 2018, '2018-08-13', '2018-08-13 05:41:58', '2018-08-13', '2018-08-13 05:41:58', 1),
(199, '173.252.99.18', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-13', '2018-08-13 05:41:58', '2018-08-13', '2018-08-13 05:41:58', 1),
(200, '31.13.115.7', 0, 'Anonymous', 'Browser Internet Explorer version 9.0', 'Windows 7', 8, 2018, '2018-08-13', '2018-08-13 05:41:59', '2018-08-13', '2018-08-13 05:41:59', 1),
(201, '31.13.115.7', 0, 'Anonymous', 'Browser Spartan version 17.17134', 'Windows 10', 8, 2018, '2018-08-13', '2018-08-13 05:41:59', '2018-08-13', '2018-08-13 05:41:59', 1),
(202, '1.47.1.75', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-14', '2018-08-14 07:33:32', '2018-08-14', '2018-08-14 07:33:32', 1),
(203, '66.102.6.217', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 8, 2018, '2018-08-14', '2018-08-14 08:13:17', '2018-08-14', '2018-08-14 08:13:17', 1),
(204, '1.46.198.232', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-14', '2018-08-14 06:19:53', '2018-08-14', '2018-08-14 06:19:53', 1),
(205, '1.46.134.154', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-15', '2018-08-15 09:20:35', '2018-08-15', '2018-08-15 09:20:35', 1),
(206, '182.232.37.245', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-15', '2018-08-15 09:54:51', '2018-08-15', '2018-08-15 09:54:51', 1),
(207, '182.232.58.234', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-15', '2018-08-15 12:20:19', '2018-08-15', '2018-08-15 12:20:19', 1),
(208, '171.6.244.124', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-15', '2018-08-15 12:24:19', '2018-08-15', '2018-08-15 12:24:19', 1),
(209, '1.46.169.133', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 8, 2018, '2018-08-15', '2018-08-15 10:04:50', '2018-08-15', '2018-08-15 10:04:50', 1),
(210, '69.171.251.15', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-16', '2018-08-16 01:04:52', '2018-08-16', '2018-08-16 01:04:52', 1),
(211, '1.47.237.237', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.75', 'Linux', 8, 2018, '2018-08-16', '2018-08-16 09:17:24', '2018-08-16', '2018-08-16 09:17:24', 1),
(212, '1.46.4.198', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 8, 2018, '2018-08-16', '2018-08-16 10:17:14', '2018-08-16', '2018-08-16 10:17:14', 1),
(213, '1.46.4.198', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-17', '2018-08-17 12:39:16', '2018-08-17', '2018-08-17 12:39:16', 1),
(214, '182.232.163.87', 0, 'Anonymous', 'Browser Chrome version 59.0.3071.125', 'Android', 8, 2018, '2018-08-17', '2018-08-17 12:41:33', '2018-08-17', '2018-08-17 12:41:33', 1),
(215, '1.46.4.198', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-18', '2018-08-18 05:57:52', '2018-08-18', '2018-08-18 05:57:52', 1),
(216, '1.46.4.198', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-19', '2018-08-19 08:38:45', '2018-08-19', '2018-08-19 08:38:45', 1),
(217, '49.229.136.30', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-19', '2018-08-19 05:37:47', '2018-08-19', '2018-08-19 05:37:47', 1),
(218, '49.229.128.99', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-19', '2018-08-19 07:19:33', '2018-08-19', '2018-08-19 07:19:33', 1),
(219, '1.46.4.198', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-20', '2018-08-20 08:23:30', '2018-08-20', '2018-08-20 08:23:30', 1),
(220, '182.232.218.33', 0, 'Anonymous', 'Browser Safari version 604.1.38', 'Mac OS X', 8, 2018, '2018-08-20', '2018-08-20 10:59:34', '2018-08-20', '2018-08-20 10:59:34', 1),
(221, '49.229.135.210', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-20', '2018-08-20 11:06:58', '2018-08-20', '2018-08-20 11:06:58', 1),
(222, '182.232.193.225', 0, 'Anonymous', 'Browser Safari version 604.1.38', 'Mac OS X', 8, 2018, '2018-08-20', '2018-08-20 11:07:30', '2018-08-20', '2018-08-20 11:07:30', 1),
(223, '182.232.212.179', 0, 'Anonymous', 'Browser Safari version 604.1.38', 'Mac OS X', 8, 2018, '2018-08-20', '2018-08-20 11:09:03', '2018-08-20', '2018-08-20 11:09:03', 1),
(224, '182.232.193.189', 0, 'Anonymous', 'Browser Safari version 604.1.38', 'Mac OS X', 8, 2018, '2018-08-20', '2018-08-20 11:12:30', '2018-08-20', '2018-08-20 11:12:30', 1),
(225, '182.232.218.149', 0, 'Anonymous', 'Browser Safari version 604.1.38', 'Mac OS X', 8, 2018, '2018-08-20', '2018-08-20 11:13:04', '2018-08-20', '2018-08-20 11:13:04', 1),
(226, '49.229.134.141', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-20', '2018-08-20 01:29:14', '2018-08-20', '2018-08-20 01:29:14', 1),
(227, '49.229.147.219', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-20', '2018-08-20 02:43:57', '2018-08-20', '2018-08-20 02:43:57', 1),
(228, '182.232.101.180', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 8, 2018, '2018-08-20', '2018-08-20 05:54:48', '2018-08-20', '2018-08-20 05:54:48', 1),
(229, '1.47.79.141', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.106', 'Linux', 8, 2018, '2018-08-21', '2018-08-21 09:40:17', '2018-08-21', '2018-08-21 09:40:17', 1),
(230, '178.154.200.36', 0, 'Anonymous', 'Browser  version ', 'iOS', 8, 2018, '2018-08-22', '2018-08-22 03:41:27', '2018-08-22', '2018-08-22 03:41:27', 1),
(231, '1.47.137.190', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-22', '2018-08-22 06:34:40', '2018-08-22', '2018-08-22 06:34:40', 1),
(232, '66.249.79.64', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2018, '2018-08-23', '2018-08-23 07:11:13', '2018-08-23', '2018-08-23 07:11:13', 1),
(233, '1.46.15.16', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 8, 2018, '2018-08-24', '2018-08-24 02:05:40', '2018-08-24', '2018-08-24 02:05:40', 1),
(234, '66.249.79.95', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 8, 2018, '2018-08-24', '2018-08-24 02:27:15', '2018-08-24', '2018-08-24 02:27:15', 1),
(235, '49.229.134.32', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-26', '2018-08-26 09:58:23', '2018-08-26', '2018-08-26 09:58:23', 1),
(236, '178.154.200.36', 0, 'Anonymous', 'Browser  version ', 'iOS', 8, 2018, '2018-08-27', '2018-08-27 07:13:12', '2018-08-27', '2018-08-27 07:13:12', 1),
(237, '183.89.49.42', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 8, 2018, '2018-08-28', '2018-08-28 12:52:13', '2018-08-28', '2018-08-28 12:52:13', 1),
(238, '223.24.190.184', 0, 'Anonymous', 'Browser Chrome version 66.0.3359.126', 'Android', 8, 2018, '2018-08-28', '2018-08-28 03:07:04', '2018-08-28', '2018-08-28 03:07:04', 1),
(239, '106.121.61.207', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 8, 2018, '2018-08-31', '2018-08-31 10:24:59', '2018-08-31', '2018-08-31 10:24:59', 1),
(240, '66.249.79.64', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2018, '2018-08-31', '2018-08-31 06:45:21', '2018-08-31', '2018-08-31 06:45:21', 1),
(241, '1.47.107.200', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 9, 2018, '2018-09-04', '2018-09-04 07:26:18', '2018-09-04', '2018-09-04 07:26:18', 1),
(242, '1.47.239.192', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 9, 2018, '2018-09-04', '2018-09-04 03:58:03', '2018-09-04', '2018-09-04 03:58:03', 1),
(243, '173.252.95.1', 0, 'Anonymous', 'Browser Chrome version 40.0.2214.85', 'Windows 7', 9, 2018, '2018-09-05', '2018-09-05 02:04:52', '2018-09-05', '2018-09-05 02:04:52', 1),
(244, '1.47.175.228', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.91', 'Android', 9, 2018, '2018-09-05', '2018-09-05 06:58:22', '2018-09-05', '2018-09-05 06:58:22', 1),
(245, '171.6.245.160', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 9, 2018, '2018-09-05', '2018-09-05 10:00:29', '2018-09-05', '2018-09-05 10:00:29', 1),
(246, '182.232.231.103', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 9, 2018, '2018-09-06', '2018-09-06 11:02:50', '2018-09-06', '2018-09-06 11:02:50', 1),
(247, '66.249.79.254', 0, 'Anonymous', 'Browser  version ', 'Android', 9, 2018, '2018-09-07', '2018-09-07 11:57:57', '2018-09-07', '2018-09-07 11:57:57', 1),
(248, '173.252.95.4', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 9, 2018, '2018-09-11', '2018-09-11 07:45:43', '2018-09-11', '2018-09-11 07:45:43', 1),
(249, '171.6.245.143', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.81', 'Linux', 9, 2018, '2018-09-14', '2018-09-14 05:28:48', '2018-09-14', '2018-09-14 05:28:48', 1),
(250, '1.47.173.244', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 9, 2018, '2018-09-19', '2018-09-19 01:58:25', '2018-09-19', '2018-09-19 01:58:25', 1),
(251, '1.46.96.109', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 9, 2018, '2018-09-19', '2018-09-19 08:57:10', '2018-09-19', '2018-09-19 08:57:10', 1),
(252, '171.6.240.136', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 9, 2018, '2018-09-20', '2018-09-20 03:56:25', '2018-09-20', '2018-09-20 03:56:25', 1),
(253, '1.46.96.109', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.91', 'Android', 9, 2018, '2018-09-20', '2018-09-20 04:04:48', '2018-09-20', '2018-09-20 04:04:48', 1),
(254, '66.102.6.45', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 9, 2018, '2018-09-20', '2018-09-20 05:47:03', '2018-09-20', '2018-09-20 05:47:03', 1),
(255, '66.102.6.41', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 9, 2018, '2018-09-20', '2018-09-20 05:47:03', '2018-09-20', '2018-09-20 05:47:03', 1),
(256, '1.47.35.63', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 9, 2018, '2018-09-20', '2018-09-20 11:54:56', '2018-09-20', '2018-09-20 11:54:56', 1),
(257, '182.232.97.209', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 9, 2018, '2018-09-20', '2018-09-20 11:55:54', '2018-09-20', '2018-09-20 11:55:54', 1),
(258, '1.46.136.102', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.91', 'Android', 9, 2018, '2018-09-20', '2018-09-20 04:58:24', '2018-09-20', '2018-09-20 04:58:24', 1),
(259, '1.47.35.63', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 9, 2018, '2018-09-21', '2018-09-21 12:53:26', '2018-09-21', '2018-09-21 12:53:26', 1),
(260, '173.252.127.4', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 9, 2018, '2018-09-22', '2018-09-22 06:36:51', '2018-09-22', '2018-09-22 06:36:51', 1),
(261, '171.6.241.132', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.81', 'Linux', 9, 2018, '2018-09-22', '2018-09-22 10:11:17', '2018-09-22', '2018-09-22 10:11:17', 1),
(262, '23.95.200.142', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.99', 'Windows 8.1', 9, 2018, '2018-09-23', '2018-09-23 02:30:55', '2018-09-23', '2018-09-23 02:30:55', 1),
(263, '173.252.127.21', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 9, 2018, '2018-09-23', '2018-09-23 07:52:57', '2018-09-23', '2018-09-23 07:52:57', 1),
(264, '66.249.79.254', 0, 'Anonymous', 'Browser  version ', 'Android', 9, 2018, '2018-09-25', '2018-09-25 04:14:18', '2018-09-25', '2018-09-25 04:14:18', 1),
(265, '37.9.113.148', 0, 'Anonymous', 'Browser  version ', 'iOS', 9, 2018, '2018-09-30', '2018-09-30 08:35:44', '2018-09-30', '2018-09-30 08:35:44', 1),
(266, '171.6.243.170', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-01', '2018-10-01 08:41:20', '2018-10-01', '2018-10-01 08:41:20', 1),
(267, '1.46.109.245', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-02', '2018-10-02 09:29:13', '2018-10-02', '2018-10-02 09:29:13', 1),
(268, '49.229.118.189', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 10, 2018, '2018-10-04', '2018-10-04 11:03:21', '2018-10-04', '2018-10-04 11:03:21', 1),
(269, '171.6.241.58', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-07', '2018-10-07 04:38:02', '2018-10-07', '2018-10-07 04:38:02', 1),
(270, '49.229.115.142', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 10, 2018, '2018-10-07', '2018-10-07 02:38:23', '2018-10-07', '2018-10-07 02:38:23', 1),
(271, '110.77.246.14', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 10, 2018, '2018-10-07', '2018-10-07 11:28:33', '2018-10-07', '2018-10-07 11:28:33', 1),
(272, '118.173.205.103', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 10, 2018, '2018-10-07', '2018-10-07 11:30:17', '2018-10-07', '2018-10-07 11:30:17', 1),
(273, '173.252.95.13', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 10, 2018, '2018-10-08', '2018-10-08 02:48:58', '2018-10-08', '2018-10-08 02:48:58', 1),
(274, '69.171.251.20', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 10, 2018, '2018-10-08', '2018-10-08 03:34:40', '2018-10-08', '2018-10-08 03:34:40', 1),
(275, '66.249.79.31', 0, 'Anonymous', 'Browser  version ', 'Android', 10, 2018, '2018-10-08', '2018-10-08 05:37:30', '2018-10-08', '2018-10-08 05:37:30', 1),
(276, '171.6.244.21', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-10', '2018-10-10 09:25:33', '2018-10-10', '2018-10-10 09:25:33', 1),
(277, '1.46.96.138', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-10', '2018-10-10 04:24:52', '2018-10-10', '2018-10-10 04:24:52', 1),
(278, '1.46.9.37', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 10, 2018, '2018-10-11', '2018-10-11 08:20:25', '2018-10-11', '2018-10-11 08:20:25', 1),
(279, '66.249.79.31', 0, 'Anonymous', 'Browser  version ', 'Android', 10, 2018, '2018-10-12', '2018-10-12 05:54:25', '2018-10-12', '2018-10-12 05:54:25', 1),
(280, '54.191.66.67', 0, 'Anonymous', 'Browser Firefox version 63.0', 'Windows 10', 10, 2018, '2018-10-20', '2018-10-20 12:16:38', '2018-10-20', '2018-10-20 12:16:38', 1),
(281, '171.6.245.219', 0, 'Anonymous', 'Browser Firefox version 62.0', 'Linux', 10, 2018, '2018-10-22', '2018-10-22 05:50:08', '2018-10-22', '2018-10-22 05:50:08', 1),
(282, '49.177.141.57', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 10, 2018, '2018-10-23', '2018-10-23 02:56:15', '2018-10-23', '2018-10-23 02:56:15', 1),
(283, '206.41.175.246', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Windows 10', 10, 2018, '2018-10-24', '2018-10-24 01:41:26', '2018-10-24', '2018-10-24 01:41:26', 1),
(284, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 10, 2018, '2018-10-25', '2018-10-25 12:08:55', '2018-10-25', '2018-10-25 12:08:55', 1),
(285, '37.9.113.4', 0, 'Anonymous', 'Browser  version ', 'iOS', 10, 2018, '2018-10-26', '2018-10-26 03:14:28', '2018-10-26', '2018-10-26 03:14:28', 1),
(286, '49.177.141.57', 0, 'Anonymous', 'Browser Safari version 604.1', 'iOS', 10, 2018, '2018-10-26', '2018-10-26 06:53:43', '2018-10-26', '2018-10-26 06:53:43', 1),
(287, '49.230.91.85', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Android', 10, 2018, '2018-10-28', '2018-10-28 12:14:45', '2018-10-28', '2018-10-28 12:14:45', 1),
(288, '31.13.115.8', 0, 'Anonymous', 'Browser Internet Explorer version 9.0', 'Windows 7', 10, 2018, '2018-10-31', '2018-10-31 04:13:01', '2018-10-31', '2018-10-31 04:13:01', 1),
(289, '69.171.251.27', 0, 'Anonymous', 'Browser Spartan version 17.17134', 'Windows 10', 11, 2018, '2018-11-02', '2018-11-02 03:49:01', '2018-11-02', '2018-11-02 03:49:01', 1),
(290, '1.46.46.143', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.80', 'Android', 11, 2018, '2018-11-03', '2018-11-03 12:15:46', '2018-11-03', '2018-11-03 12:15:46', 1),
(291, '1.46.96.64', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'iOS', 11, 2018, '2018-11-03', '2018-11-03 12:18:21', '2018-11-03', '2018-11-03 12:18:21', 1),
(292, '223.24.61.94', 0, 'Anonymous', 'Browser Chrome version 61.0.3163.98', 'Android', 11, 2018, '2018-11-06', '2018-11-06 08:24:56', '2018-11-06', '2018-11-06 08:24:56', 1),
(293, '66.249.79.1', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 11, 2018, '2018-11-08', '2018-11-08 10:48:09', '2018-11-08', '2018-11-08 10:48:09', 1),
(294, '1.46.206.84', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.77', 'Linux', 11, 2018, '2018-11-09', '2018-11-09 09:12:46', '2018-11-09', '2018-11-09 09:12:46', 1),
(295, '60.51.17.17', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.77', 'Windows 7', 11, 2018, '2018-11-09', '2018-11-09 10:51:23', '2018-11-09', '2018-11-09 10:51:23', 1),
(296, '66.249.71.26', 0, 'Anonymous', 'Browser  version ', 'Android', 11, 2018, '2018-11-14', '2018-11-14 05:35:43', '2018-11-14', '2018-11-14 05:35:43', 1),
(297, '45.61.160.250', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Windows 10', 11, 2018, '2018-11-15', '2018-11-15 01:36:08', '2018-11-15', '2018-11-15 01:36:08', 1),
(298, '66.102.6.43', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 11, 2018, '2018-11-17', '2018-11-17 09:18:27', '2018-11-17', '2018-11-17 09:18:27', 1),
(299, '61.19.198.51', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.102', 'Windows 7', 11, 2018, '2018-11-21', '2018-11-21 11:39:20', '2018-11-21', '2018-11-21 11:39:20', 1),
(300, '41.204.99.232', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.102', 'Windows 7', 11, 2018, '2018-11-22', '2018-11-22 05:08:21', '2018-11-22', '2018-11-22 05:08:21', 1);
INSERT INTO `tbl_visiter` (`v_id`, `v_ip`, `v_user_id`, `v_user_name`, `v_browser`, `v_os`, `v_month`, `v_year`, `v_cur_visit_date`, `v_cur_visit_time`, `v_last_visit_date`, `v_last_visit_time`, `v_num_time`) VALUES
(301, '192.157.240.106', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Windows 10', 11, 2018, '2018-11-22', '2018-11-22 07:33:34', '2018-11-22', '2018-11-22 07:33:34', 1),
(302, '66.220.149.7', 0, 'Anonymous', 'Browser Chrome version 40.0.2214.85', 'Windows 7', 11, 2018, '2018-11-23', '2018-11-23 03:36:17', '2018-11-23', '2018-11-23 03:36:17', 1),
(303, '54.38.69.64', 0, 'Anonymous', 'Browser Chrome version 71.0.3563.0', 'Linux', 11, 2018, '2018-11-24', '2018-11-24 06:56:45', '2018-11-24', '2018-11-24 06:56:45', 1),
(304, '125.209.235.170', 0, 'Anonymous', 'Browser Chrome version 63.0.3239.0', 'Windows 7', 11, 2018, '2018-11-26', '2018-11-26 10:42:43', '2018-11-26', '2018-11-26 10:42:43', 1),
(305, '1.46.100.169', 0, 'Anonymous', 'Browser Firefox version 63.0', 'Linux', 11, 2018, '2018-11-27', '2018-11-27 08:17:46', '2018-11-27', '2018-11-27 08:17:46', 1),
(306, '66.249.79.46', 0, 'Anonymous', 'Browser  version ', 'Android', 11, 2018, '2018-11-27', '2018-11-27 02:57:41', '2018-11-27', '2018-11-27 02:57:41', 1),
(307, '138.128.1.197', 0, 'Anonymous', 'Browser Firefox version 57.0', 'Windows 8.1', 11, 2018, '2018-11-27', '2018-11-27 09:56:03', '2018-11-27', '2018-11-27 09:56:03', 1),
(308, '23.106.246.121', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Windows 10', 12, 2018, '2018-12-02', '2018-12-02 06:13:18', '2018-12-02', '2018-12-02 06:13:18', 1),
(309, '69.171.251.34', 0, 'Anonymous', 'Browser Spartan version 17.17134', 'Windows 10', 12, 2018, '2018-12-02', '2018-12-02 08:24:57', '2018-12-02', '2018-12-02 08:24:57', 1),
(310, '1.47.13.232', 0, 'Anonymous', 'Browser Firefox version 63.0', 'Linux', 12, 2018, '2018-12-03', '2018-12-03 11:19:05', '2018-12-03', '2018-12-03 11:19:05', 1),
(311, '1.46.38.113', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.110', 'Android', 12, 2018, '2018-12-04', '2018-12-04 04:23:10', '2018-12-04', '2018-12-04 04:23:10', 1),
(312, '23.94.148.9', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.50', 'Linux', 12, 2018, '2018-12-05', '2018-12-05 09:36:13', '2018-12-05', '2018-12-05 09:36:13', 1),
(313, '61.19.198.51', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.110', 'Windows 7', 12, 2018, '2018-12-07', '2018-12-07 11:20:28', '2018-12-07', '2018-12-07 11:20:28', 1),
(314, '42.236.10.117', 0, 'Anonymous', 'Browser Opera version 11.2.3.102637', 'Android', 12, 2018, '2018-12-08', '2018-12-08 06:25:12', '2018-12-08', '2018-12-08 06:25:12', 1),
(315, '42.236.10.114', 0, 'Anonymous', 'Browser Opera version 11.2.3.102637', 'Android', 12, 2018, '2018-12-08', '2018-12-08 06:25:13', '2018-12-08', '2018-12-08 06:25:13', 1),
(316, '171.13.14.14', 0, 'Anonymous', 'Browser Safari version 534.30', 'Android', 12, 2018, '2018-12-08', '2018-12-08 07:16:37', '2018-12-08', '2018-12-08 07:16:37', 1),
(317, '1.46.70.191', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.110', 'Android', 12, 2018, '2018-12-08', '2018-12-08 08:18:27', '2018-12-08', '2018-12-08 08:18:27', 1),
(318, '66.249.79.46', 0, 'Anonymous', 'Browser  version ', 'Android', 12, 2018, '2018-12-09', '2018-12-09 05:39:46', '2018-12-09', '2018-12-09 05:39:46', 1),
(319, '50.116.16.218', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.50', 'Linux', 12, 2018, '2018-12-09', '2018-12-09 08:17:20', '2018-12-09', '2018-12-09 08:17:20', 1),
(320, '182.68.63.1', 0, 'Anonymous', 'Browser Firefox version 52.0', 'Windows XP', 12, 2018, '2018-12-10', '2018-12-10 02:02:35', '2018-12-10', '2018-12-10 02:02:35', 1),
(321, '66.249.73.95', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 12, 2018, '2018-12-16', '2018-12-16 11:06:21', '2018-12-16', '2018-12-16 11:06:21', 1),
(322, '223.24.190.195', 0, 'Anonymous', 'Browser Firefox version 64.0', 'Linux', 12, 2018, '2018-12-21', '2018-12-21 07:17:12', '2018-12-21', '2018-12-21 07:17:12', 1),
(323, '66.220.149.35', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.98', 'Windows 10', 12, 2018, '2018-12-21', '2018-12-21 03:13:53', '2018-12-21', '2018-12-21 03:13:53', 1),
(324, '66.220.149.42', 0, 'Anonymous', 'Browser Chrome version 40.0.2214.85', 'Windows 7', 12, 2018, '2018-12-23', '2018-12-23 04:50:10', '2018-12-23', '2018-12-23 04:50:10', 1),
(325, '182.232.5.234', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.98', 'Windows 7', 12, 2018, '2018-12-25', '2018-12-25 11:36:10', '2018-12-25', '2018-12-25 11:36:10', 1),
(326, '141.8.142.76', 0, 'Anonymous', 'Browser  version ', 'iOS', 12, 2018, '2018-12-26', '2018-12-26 07:36:32', '2018-12-26', '2018-12-26 07:36:32', 1),
(327, '66.249.66.133', 0, 'Anonymous', 'Browser  version ', 'Android', 12, 2018, '2018-12-29', '2018-12-29 10:24:20', '2018-12-29', '2018-12-29 10:24:20', 1),
(328, '1.46.100.32', 0, 'Anonymous', 'Browser Firefox version 63.0', 'Linux', 12, 2018, '2018-12-31', '2018-12-31 07:36:39', '2018-12-31', '2018-12-31 07:36:39', 1),
(329, '209.99.165.69', 0, 'Anonymous', 'Browser Chrome version 69.0.3497.100', 'Windows 10', 1, 2019, '2019-01-02', '2019-01-02 01:23:26', '2019-01-02', '2019-01-02 01:23:26', 1),
(330, '37.9.113.4', 0, 'Anonymous', 'Browser  version ', 'iOS', 1, 2019, '2019-01-04', '2019-01-04 08:32:15', '2019-01-04', '2019-01-04 08:32:15', 1),
(331, '1.47.175.107', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.99', 'Android', 1, 2019, '2019-01-06', '2019-01-06 09:54:24', '2019-01-06', '2019-01-06 09:54:24', 1),
(332, '31.13.115.20', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.98', 'Windows 7', 1, 2019, '2019-01-07', '2019-01-07 03:38:30', '2019-01-07', '2019-01-07 03:38:30', 1),
(333, '141.8.142.76', 0, 'Anonymous', 'Browser  version ', 'iOS', 1, 2019, '2019-01-08', '2019-01-08 09:34:54', '2019-01-08', '2019-01-08 09:34:54', 1),
(334, '66.249.93.95', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Linux', 1, 2019, '2019-01-09', '2019-01-09 12:17:52', '2019-01-09', '2019-01-09 12:17:52', 1),
(335, '66.249.93.65', 0, 'Anonymous', 'Browser Chrome version 41.0.2272.118', 'Android', 1, 2019, '2019-01-09', '2019-01-09 12:17:53', '2019-01-09', '2019-01-09 12:17:53', 1),
(336, '104.192.74.237', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.110', 'Linux', 1, 2019, '2019-01-10', '2019-01-10 10:56:13', '2019-01-10', '2019-01-10 10:56:13', 1),
(337, '66.249.79.46', 0, 'Anonymous', 'Browser  version ', 'Android', 1, 2019, '2019-01-13', '2019-01-13 08:24:40', '2019-01-13', '2019-01-13 08:24:40', 1),
(338, '66.249.79.46', 0, 'Anonymous', 'Browser  version ', 'Android', 1, 2019, '2019-01-14', '2019-01-14 11:52:08', '2019-01-14', '2019-01-14 11:52:08', 1),
(339, '58.11.5.68', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.98', 'Windows 10', 1, 2019, '2019-01-14', '2019-01-14 01:57:55', '2019-01-14', '2019-01-14 01:57:55', 1),
(340, '49.229.250.173', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.99', 'Android', 1, 2019, '2019-01-16', '2019-01-16 02:34:55', '2019-01-16', '2019-01-16 02:34:55', 1),
(341, '125.209.235.186', 0, 'Anonymous', 'Browser Chrome version 63.0.3239.0', 'Windows 7', 1, 2019, '2019-01-18', '2019-01-18 04:52:42', '2019-01-18', '2019-01-18 04:52:42', 1),
(342, '223.24.170.20', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.98', 'Linux', 1, 2019, '2019-01-18', '2019-01-18 08:14:18', '2019-01-18', '2019-01-18 08:14:18', 1),
(343, '1.46.97.144', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.99', 'Android', 1, 2019, '2019-01-18', '2019-01-18 07:10:27', '2019-01-18', '2019-01-18 07:10:27', 1),
(344, '1.46.131.167', 0, 'Anonymous', 'Browser Chrome version 71.0.3578.99', 'Android', 1, 2019, '2019-01-18', '2019-01-18 07:26:18', '2019-01-18', '2019-01-18 07:26:18', 1),
(345, '49.229.226.196', 0, 'Anonymous', 'Browser Chrome version 63.0.3239.111', 'Android', 1, 2019, '2019-01-19', '2019-01-19 05:47:29', '2019-01-19', '2019-01-19 05:47:29', 1),
(346, '223.24.189.27', 0, 'Anonymous', 'Browser Firefox version 64.0', 'Linux', 1, 2019, '2019-01-19', '2019-01-19 06:25:45', '2019-01-19', '2019-01-19 06:25:45', 1),
(347, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 1, 2019, '2019-01-28', '2019-01-28 04:53:13', '2019-01-28', '2019-01-28 04:53:13', 1),
(348, '66.249.75.28', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 2, 2019, '2019-02-06', '2019-02-06 04:10:00', '2019-02-06', '2019-02-06 04:10:00', 1),
(349, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 2, 2019, '2019-02-24', '2019-02-24 04:56:33', '2019-02-24', '2019-02-24 04:56:33', 1),
(350, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 3, 2019, '2019-03-02', '2019-03-02 06:00:28', '2019-03-02', '2019-03-02 06:00:28', 1),
(351, '66.249.79.23', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 3, 2019, '2019-03-16', '2019-03-16 12:39:22', '2019-03-16', '2019-03-16 12:39:22', 1),
(352, '66.249.79.52', 0, 'Anonymous', 'Browser  version ', 'Android', 3, 2019, '2019-03-28', '2019-03-28 05:32:55', '2019-03-28', '2019-03-28 05:32:55', 1),
(353, '66.249.71.89', 0, 'Anonymous', 'Browser  version ', 'Android', 4, 2019, '2019-04-08', '2019-04-08 10:55:12', '2019-04-08', '2019-04-08 10:55:12', 1),
(354, '66.249.79.55', 0, 'Anonymous', 'Browser  version ', 'Android', 4, 2019, '2019-04-10', '2019-04-10 09:53:09', '2019-04-10', '2019-04-10 09:53:09', 1),
(355, '66.249.79.52', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 4, 2019, '2019-04-16', '2019-04-16 09:45:10', '2019-04-16', '2019-04-16 09:45:10', 1),
(356, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 4, 2019, '2019-04-16', '2019-04-16 08:16:38', '2019-04-16', '2019-04-16 08:16:38', 1),
(357, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 5, 2019, '2019-05-22', '2019-05-22 04:59:36', '2019-05-22', '2019-05-22 04:59:36', 1),
(358, '1.46.168.96', 0, 'Anonymous', 'Browser Opera version 60.0.3255.95', 'Linux', 5, 2019, '2019-05-24', '2019-05-24 11:11:58', '2019-05-24', '2019-05-24 11:11:58', 1),
(359, '1.46.168.96', 0, 'Anonymous', 'Browser Opera version 60.0.3255.95', 'Linux', 5, 2019, '2019-05-25', '2019-05-25 12:00:04', '2019-05-25', '2019-05-25 12:00:04', 1),
(360, '223.24.162.126', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 5, 2019, '2019-05-25', '2019-05-25 01:04:45', '2019-05-25', '2019-05-25 01:04:45', 1),
(361, '1.46.168.96', 0, 'Anonymous', 'Browser Firefox version 66.0', 'Linux', 5, 2019, '2019-05-26', '2019-05-26 05:35:24', '2019-05-26', '2019-05-26 05:35:24', 1),
(362, '223.24.185.180', 0, 'Anonymous', 'Browser Chrome version 73.0.3683.86', 'Linux', 5, 2019, '2019-05-27', '2019-05-27 12:41:09', '2019-05-27', '2019-05-27 12:41:09', 1),
(363, '110.169.11.162', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Android', 5, 2019, '2019-05-27', '2019-05-27 09:05:52', '2019-05-27', '2019-05-27 09:05:52', 1),
(364, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 5, 2019, '2019-05-27', '2019-05-27 11:12:54', '2019-05-27', '2019-05-27 11:12:54', 1),
(365, '223.24.163.9', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Linux', 5, 2019, '2019-05-28', '2019-05-28 07:58:16', '2019-05-28', '2019-05-28 07:58:16', 1),
(366, '1.46.168.96', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Android', 5, 2019, '2019-05-28', '2019-05-28 09:15:05', '2019-05-28', '2019-05-28 09:15:05', 1),
(367, '1.47.225.23', 0, 'Anonymous', 'Browser Safari version 9.7.1', 'iOS', 5, 2019, '2019-05-29', '2019-05-29 07:22:15', '2019-05-29', '2019-05-29 07:22:15', 1),
(368, '1.46.143.56', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.112', 'Android', 5, 2019, '2019-05-31', '2019-05-31 04:11:27', '2019-05-31', '2019-05-31 04:11:27', 1),
(369, '27.55.64.38', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Linux', 6, 2019, '2019-06-02', '2019-06-02 02:55:06', '2019-06-02', '2019-06-02 02:55:06', 1),
(370, '202.28.79.194', 0, 'Anonymous', 'Browser Opera version 60.0.3255.109', 'Linux', 6, 2019, '2019-06-06', '2019-06-06 07:53:31', '2019-06-06', '2019-06-06 07:53:31', 1),
(371, '223.24.160.68', 0, 'Anonymous', 'Browser Chrome version 67.0.3396.87', 'Android', 6, 2019, '2019-06-06', '2019-06-06 08:00:39', '2019-06-06', '2019-06-06 08:00:39', 1),
(372, '1.46.13.240', 0, 'Anonymous', 'Browser Firefox version 67.0', 'Android', 6, 2019, '2019-06-06', '2019-06-06 10:24:39', '2019-06-06', '2019-06-06 10:24:39', 1),
(373, '66.249.71.87', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2019, '2019-06-07', '2019-06-07 10:17:36', '2019-06-07', '2019-06-07 10:17:36', 1),
(374, '182.232.222.64', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Android', 6, 2019, '2019-06-08', '2019-06-08 11:23:04', '2019-06-08', '2019-06-08 11:23:04', 1),
(375, '69.171.251.14', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.169', 'Windows 10', 6, 2019, '2019-06-08', '2019-06-08 02:15:37', '2019-06-08', '2019-06-08 02:15:37', 1),
(376, '104.140.22.147', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.7', 'Windows 7', 6, 2019, '2019-06-09', '2019-06-09 10:37:18', '2019-06-09', '2019-06-09 10:37:18', 1),
(377, '223.24.152.89', 0, 'Anonymous', 'Browser Chrome version 75.0.3770.67', 'Android', 6, 2019, '2019-06-11', '2019-06-11 10:19:40', '2019-06-11', '2019-06-11 10:19:40', 1),
(378, '66.249.71.87', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2019, '2019-06-11', '2019-06-11 04:18:32', '2019-06-11', '2019-06-11 04:18:32', 1),
(379, '1.46.166.16', 0, 'Anonymous', 'Browser Firefox version 67.0', 'Linux', 6, 2019, '2019-06-13', '2019-06-13 05:48:56', '2019-06-13', '2019-06-13 05:48:56', 1),
(380, '118.175.45.4', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.169', 'Windows 10', 6, 2019, '2019-06-13', '2019-06-13 06:16:06', '2019-06-13', '2019-06-13 06:16:06', 1),
(381, '1.46.166.16', 0, 'Anonymous', 'Browser Spartan version 14.14393', 'Windows 10', 6, 2019, '2019-06-14', '2019-06-14 02:25:14', '2019-06-14', '2019-06-14 02:25:14', 1),
(382, '193.111.199.130', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.7', 'Windows 7', 6, 2019, '2019-06-19', '2019-06-19 08:31:43', '2019-06-19', '2019-06-19 08:31:43', 1),
(383, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 6, 2019, '2019-06-23', '2019-06-23 01:25:08', '2019-06-23', '2019-06-23 01:25:08', 1),
(384, '27.55.168.141', 0, 'Anonymous', 'Browser Firefox version 67.0', 'Linux', 6, 2019, '2019-06-27', '2019-06-27 05:30:09', '2019-06-27', '2019-06-27 05:30:09', 1),
(385, '51.77.129.167', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'Unknown Platform', 6, 2019, '2019-06-27', '2019-06-27 09:04:06', '2019-06-27', '2019-06-27 09:04:06', 1),
(386, '104.192.74.236', 0, 'Anonymous', 'Browser Chrome version 70.0.3538.110', 'Linux', 6, 2019, '2019-06-27', '2019-06-27 12:28:02', '2019-06-27', '2019-06-27 12:28:02', 1),
(387, '1.47.231.249', 0, 'Anonymous', 'Browser Opera version 60.0.3255.170', 'Linux', 6, 2019, '2019-06-28', '2019-06-28 09:11:19', '2019-06-28', '2019-06-28 09:11:19', 1),
(388, '66.249.79.119', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-05', '2019-07-05 02:55:52', '2019-07-05', '2019-07-05 02:55:52', 1),
(389, '125.209.235.177', 0, 'Anonymous', 'Browser Chrome version 63.0.3239.0', 'Windows 7', 7, 2019, '2019-07-06', '2019-07-06 06:21:27', '2019-07-06', '2019-07-06 06:21:27', 1),
(390, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-07', '2019-07-07 10:20:30', '2019-07-07', '2019-07-07 10:20:30', 1),
(391, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 7, 2019, '2019-07-08', '2019-07-08 07:57:31', '2019-07-08', '2019-07-08 07:57:31', 1),
(392, '52.87.12.229', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.50', 'Linux', 7, 2019, '2019-07-10', '2019-07-10 07:16:35', '2019-07-10', '2019-07-10 07:16:35', 1),
(393, '66.249.79.75', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-12', '2019-07-12 12:20:45', '2019-07-12', '2019-07-12 12:20:45', 1),
(394, '66.249.79.79', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-12', '2019-07-12 12:55:40', '2019-07-12', '2019-07-12 12:55:40', 1),
(395, '66.249.79.52', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-12', '2019-07-12 09:28:02', '2019-07-12', '2019-07-12 09:28:02', 1),
(396, '66.220.149.14', 0, 'Anonymous', 'Browser Chrome version 56.0.2924.87', 'Windows 7', 7, 2019, '2019-07-16', '2019-07-16 02:43:39', '2019-07-16', '2019-07-16 02:43:39', 1),
(397, '202.28.79.194', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Linux', 7, 2019, '2019-07-20', '2019-07-20 04:03:36', '2019-07-20', '2019-07-20 04:03:36', 1),
(398, '66.249.71.87', 0, 'Anonymous', 'Browser  version ', 'Android', 7, 2019, '2019-07-23', '2019-07-23 09:43:16', '2019-07-23', '2019-07-23 09:43:16', 1),
(399, '202.28.79.194', 0, 'Anonymous', 'Browser Chrome version 75.0.3770.90', 'Linux', 7, 2019, '2019-07-26', '2019-07-26 12:37:25', '2019-07-26', '2019-07-26 12:37:25', 1),
(400, '51.77.246.201', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'Unknown Platform', 7, 2019, '2019-07-27', '2019-07-27 08:42:07', '2019-07-27', '2019-07-27 08:42:07', 1),
(401, '202.28.79.194', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Linux', 7, 2019, '2019-07-28', '2019-07-28 08:58:01', '2019-07-28', '2019-07-28 08:58:01', 1),
(402, '103.240.250.194', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.7', 'Windows 7', 7, 2019, '2019-07-31', '2019-07-31 05:29:14', '2019-07-31', '2019-07-31 05:29:14', 1),
(403, '109.175.104.130', 0, 'Anonymous', 'Browser Chrome version 75.0.3770.142', 'Windows 10', 8, 2019, '2019-08-02', '2019-08-02 03:05:37', '2019-08-02', '2019-08-02 03:05:37', 1),
(404, '202.28.79.194', 0, 'Anonymous', 'Browser Chrome version 75.0.3770.142', 'Linux', 8, 2019, '2019-08-07', '2019-08-07 08:45:09', '2019-08-07', '2019-08-07 08:45:09', 1),
(405, '202.28.79.194', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Linux', 8, 2019, '2019-08-08', '2019-08-08 02:04:56', '2019-08-08', '2019-08-08 02:04:56', 1),
(406, '66.249.71.89', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2019, '2019-08-11', '2019-08-11 12:47:13', '2019-08-11', '2019-08-11 12:47:13', 1),
(407, '66.249.71.91', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 8, 2019, '2019-08-12', '2019-08-12 09:33:25', '2019-08-12', '2019-08-12 09:33:25', 1),
(408, '1.46.10.253', 0, 'Anonymous', 'Browser Chrome version 76.0.3809.111', 'Android', 8, 2019, '2019-08-17', '2019-08-17 10:14:56', '2019-08-17', '2019-08-17 10:14:56', 1),
(409, '66.249.71.87', 0, 'Anonymous', 'Browser  version ', 'Android', 8, 2019, '2019-08-17', '2019-08-17 06:43:09', '2019-08-17', '2019-08-17 06:43:09', 1),
(410, '51.77.246.200', 0, 'Anonymous', 'Browser Mozilla version 5.0', 'Unknown Platform', 8, 2019, '2019-08-22', '2019-08-22 05:04:18', '2019-08-22', '2019-08-22 05:04:18', 1),
(411, '66.220.149.41', 0, 'Anonymous', 'Browser Chrome version 41.0.2228.0', 'Windows 7', 8, 2019, '2019-08-22', '2019-08-22 03:46:38', '2019-08-22', '2019-08-22 03:46:38', 1),
(412, '183.88.48.201', 0, 'Anonymous', 'Browser Chrome version 76.0.3809.100', 'Windows 10', 8, 2019, '2019-08-23', '2019-08-23 09:53:38', '2019-08-23', '2019-08-23 09:53:38', 1),
(413, '1.46.198.13', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Linux', 8, 2019, '2019-08-23', '2019-08-23 09:46:51', '2019-08-23', '2019-08-23 09:46:51', 1),
(414, '223.24.60.186', 0, 'Anonymous', 'Browser Chrome version 76.0.3809.111', 'Android', 8, 2019, '2019-08-26', '2019-08-26 07:56:25', '2019-08-26', '2019-08-26 07:56:25', 1),
(415, '84.9.130.225', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Windows 10', 8, 2019, '2019-08-26', '2019-08-26 10:15:20', '2019-08-26', '2019-08-26 10:15:20', 1),
(416, '1.46.79.52', 0, 'Anonymous', 'Browser Firefox version 68.0', 'Linux', 8, 2019, '2019-08-27', '2019-08-27 08:39:47', '2019-08-27', '2019-08-27 08:39:47', 1),
(417, '66.249.79.49', 0, 'Anonymous', 'Browser  version ', 'Unknown Platform', 8, 2019, '2019-08-29', '2019-08-29 08:48:44', '2019-08-29', '2019-08-29 08:48:44', 1),
(418, '207.237.148.242', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.7', 'Windows 7', 8, 2019, '2019-08-31', '2019-08-31 03:52:06', '2019-08-31', '2019-08-31 03:52:06', 1),
(419, '52.23.213.225', 0, 'Anonymous', 'Browser Chrome version 60.0.3112.50', 'Linux', 9, 2019, '2019-09-01', '2019-09-01 01:45:08', '2019-09-01', '2019-09-01 01:45:08', 1),
(420, '1.46.168.233', 0, 'Anonymous', 'Browser Chrome version 76.0.3809.132', 'Android', 9, 2019, '2019-09-01', '2019-09-01 02:28:32', '2019-09-01', '2019-09-01 02:28:32', 1),
(421, '125.209.235.176', 0, 'Anonymous', 'Browser Chrome version 63.0.3239.0', 'Windows 7', 9, 2019, '2019-09-02', '2019-09-02 06:43:56', '2019-09-02', '2019-09-02 06:43:56', 1),
(422, '23.108.46.96', 0, 'Anonymous', 'Browser Chrome version 68.0.3440.7', 'Windows 7', 9, 2019, '2019-09-05', '2019-09-05 07:02:09', '2019-09-05', '2019-09-05 07:02:09', 1),
(423, '220.181.77.162', 0, 'Anonymous', 'Browser Safari version 523.12.2', 'Android', 9, 2019, '2019-09-06', '2019-09-06 05:58:30', '2019-09-06', '2019-09-06 05:58:30', 1),
(424, '185.213.26.154', 0, 'Anonymous', 'Browser Chrome version 76.0.3803.0', 'Linux', 9, 2019, '2019-09-09', '2019-09-09 08:50:25', '2019-09-09', '2019-09-09 08:50:25', 1),
(425, '1.47.162.38', 0, 'Anonymous', 'Browser Firefox version 69.0', 'Linux', 9, 2019, '2019-09-10', '2019-09-10 08:34:41', '2019-09-10', '2019-09-10 08:34:41', 1),
(426, '107.178.239.206', 0, 'Anonymous', 'Browser Chrome version 69.0.3494.0', 'Linux', 9, 2019, '2019-09-10', '2019-09-10 10:41:43', '2019-09-10', '2019-09-10 10:41:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `about_user` text NOT NULL,
  `user_type` int(11) NOT NULL,
  `moderate` int(11) NOT NULL,
  `is_activated` int(11) NOT NULL,
  `is_ban` int(11) NOT NULL,
  `date_register` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `passwd`, `email`, `user_ip`, `tel`, `about_user`, `user_type`, `moderate`, `is_activated`, `is_ban`, `date_register`, `last_update`) VALUES
(2, 'tee2018', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'tee@gmail.com', '', '', '<div class=\'alert alert-danger\'><h2>Dear tee2018 </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 1, 2, 0, '2018-05-15', '0000-00-00'),
(3, 'tom2018', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'tome@gmail.com', '', '', '<div class=\'alert alert-danger\'><h2>Dear tom2018 </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 1, 2, 0, '2018-05-15', '0000-00-00'),
(14, 'test', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'test@testing.co', '', '', '<div class=\'alert alert-danger\'><h2>Dear test </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 0, 2, 0, '2018-05-23', '0000-00-00'),
(21, 'farAdmin', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'firefrook@gmail.com', '202.28.79.194', '', '<div class=\'card\'>\n      <img class=\'card-img-top\' src=\'https://lh3.googleusercontent.com/C8xLEuw3_ANTsHvdc3sq_T6Q0kePR0V3mhBz6jWBGkcIwtiiqsAxM4noaZKpdh0ubioe1ZnDyNOoLbrrQPA0AAQAe5ejk-L5EKAFYZCyRhFFVCr9dXOznz9AIEEAWKeaY-G4VZENRAU=w2400\'/>\n      <div class=\'card-header\'>Info of farAdmin</div>\n      <div class=\'card-body\'>\n      <p>\n      <strong>About me :</strong>\n      my name is farAdmin I am ... year old I live in ....\n      </p>\n      <p>\n      <strong>E-Mail :</strong>\n      firefrook@gmail.com\n      </p>\n      <p>&nbsp;</p>\n      <p>This is the an automatic message you can change it by delete everything and put the info that you wish into the above box html tag is will be allow for the input.</p>\n      <p>The above picture you can change by simple replace the url in \'src\' to you image url.</p>\n      </div>\n      </div>', 642, 0, 1, 0, '2019-06-06', '2019-06-06'),
(24, 'farookphuket fuu time', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'firefrook@gmail.com', '', '', '', 642, 0, 1, 0, '2019-06-13', '0000-00-00'),
(25, 'Jasadaporn Kabtrab', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'farookphuket@gmail.com', '', '', '', 409, 0, 1, 0, '2019-07-20', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery_1`
--
ALTER TABLE `gallery_1`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`kw_id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `TBL_ARTICLE_HISTORY`
--
ALTER TABLE `TBL_ARTICLE_HISTORY`
  ADD PRIMARY KEY (`his_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `tbl_booking_payment_info`
--
ALTER TABLE `tbl_booking_payment_info`
  ADD PRIMARY KEY (`bk_pay_id`);

--
-- Indexes for table `tbl_booking_user_info`
--
ALTER TABLE `tbl_booking_user_info`
  ADD PRIMARY KEY (`bk_book_id`);

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_answer`
--
ALTER TABLE `tbl_faq_answer`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_name` (`t_name`);

--
-- Indexes for table `tbl_visiter`
--
ALTER TABLE `tbl_visiter`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery_1`
--
ALTER TABLE `gallery_1`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `kw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `TBL_ARTICLE_HISTORY`
--
ALTER TABLE `TBL_ARTICLE_HISTORY`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1381;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking_payment_info`
--
ALTER TABLE `tbl_booking_payment_info`
  MODIFY `bk_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking_user_info`
--
ALTER TABLE `tbl_booking_user_info`
  MODIFY `bk_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_faq_answer`
--
ALTER TABLE `tbl_faq_answer`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product_cat`
--
ALTER TABLE `tbl_product_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_visiter`
--
ALTER TABLE `tbl_visiter`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
