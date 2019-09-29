-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2019 at 04:49 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seesouth2018`
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
(1, 'show_empty', 'Workspace_1_0012.png', '/var/www/html/see-southern.inlocal/public/image/Wo', '_Thumb_Workspace_1_0012.png', '/var/www/html/see-southern.inlocal/public/image/thumb/_Thumb_Workspace_1_0012.png', '2018-07-16 06:05:52', 1, 1, 1, 1);

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
  `kw_canonical` varchar(1500) NOT NULL,
  `og_locale` varchar(60) NOT NULL DEFAULT 'en_US',
  `og_type` varchar(100) NOT NULL DEFAULT 'article',
  `og_title` varchar(60) NOT NULL,
  `og_description` text NOT NULL,
  `og_url` varchar(1500) NOT NULL,
  `og_site_name` varchar(300) NOT NULL,
  `article_publisher` text NOT NULL,
  `kw_date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='for site seo';

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`kw_id`, `kw_page_keyword`, `kw_page_des`, `kw_robots`, `kw_canonical`, `og_locale`, `og_type`, `og_title`, `og_description`, `og_url`, `og_site_name`, `article_publisher`, `kw_date_add`) VALUES
(2, 'there is no way to touch me ', '', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/UXQFRTYE2WMYUJSEUVSBBEMGE6P8D75ORGRM2FSD41BD3RMCMZ9PTAFYKGJHSKPN5FSF', 'en_US', 'article', 'there is no way to touch me ', '', 'http://127.0.0.1/see-southern/article/read/UXQFRTYE2WMYUJSEUVSBBEMGE6P8D75ORGRM2FSD41BD3RMCMZ9PTAFYKGJHSKPN5FSF', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-16 20:18:32'),
(3, '', '', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/K2UPMMRDE5MXVEFMUBJYB1GEO4FGZ5RWFUS8KCYF3QSRHJFYSNTT2DS7PEPDA69BRGMS', 'en_US', 'article', '', '', 'http://127.0.0.1/see-southern/article/read/K2UPMMRDE5MXVEFMUBJYB1GEO4FGZ5RWFUS8KCYF3QSRHJFYSNTT2DS7PEPDA69BRGMS', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-17 01:29:41'),
(4, 'joke about lady', 'Some Important Things Men should know about women see the joke', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/WSR3UP6TSEBGPVMRK7F4RBMHJESKOBQ9DCG2MDE5DS8MFAFM5JZTSP1GNYUYXRFF2YEU', 'en_US', 'article', 'joke about lady', 'Some Important Things Men should know about women see the joke', 'http://127.0.0.1/see-southern/article/read/WSR3UP6TSEBGPVMRK7F4RBMHJESKOBQ9DCG2MDE5DS8MFAFM5JZTSP1GNYUYXRFF2YEU', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-17 06:58:54'),
(5, 'สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่', 'สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่น่ามอง', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/MWPOJTUMGJFFDKE4GBSMFSM17RKSPEBXEH8BYNUSDP2Y6GDFVZ2TQRYSFC9A5RU5R3EM', 'en_US', 'article', 'สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่', 'สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่น่ามอง', 'http://127.0.0.1/see-southern/article/read/MWPOJTUMGJFFDKE4GBSMFSM17RKSPEBXEH8BYNUSDP2Y6GDFVZ2TQRYSFC9A5RU5R3EM', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-20 07:31:45'),
(6, 'copy from line.me.th', 'รุ่นเก่าก็ต้องลดราคา! Priceza ชี้นาทีทองคนชอบของเซลล์ \"iPhone XR\" คุ้มสุดหากไม่คิดสอย \"iPhone 11\"', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/M75P3TERMKGUEKCROUQP6MFGYBDMH9U2ZYTBFGSANFS4MJSBR8D1ERDJSE2PFYV5WFSX', 'en_US', 'article', 'copy from line.me.th', 'รุ่นเก่าก็ต้องลดราคา! Priceza ชี้นาทีทองคนชอบของเซลล์ \"iPhone XR\" คุ้มสุดหากไม่คิดสอย \"iPhone 11\"', 'http://127.0.0.1/see-southern/article/read/M75P3TERMKGUEKCROUQP6MFGYBDMH9U2ZYTBFGSANFS4MJSBR8D1ERDJSE2PFYV5WFSX', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-20 08:35:47'),
(7, 'หนังสือเสียง,เพชรพระอุมา,จอมผีดิบมันตรัย', 'ฟังนิยายเพชรพระอุมา จอมผีดิบมันตรัย', 'noodp,noydir', 'http://127.0.0.1/see-southern/article/read/FYNMJ5RV9SMYX3BFY25DEBZQ8PSESJWKPHMSEKRRGDGPUBM7UFRFUTA4O6M1CEFST2DG', 'en_US', 'article', 'หนังสือเสียง,เพชรพระอุมา,จอมผีดิบมันตรัย', 'ฟังนิยายเพชรพระอุมา จอมผีดิบมันตรัย', 'http://127.0.0.1/see-southern/article/read/FYNMJ5RV9SMYX3BFY25DEBZQ8PSESJWKPHMSEKRRGDGPUBM7UFRFUTA4O6M1CEFST2DG', 'http://127.0.0.1/see-southern/', 'farook', '2019-09-20 12:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `ar_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `kw_id` int(11) NOT NULL,
  `uniq_id` text NOT NULL,
  `ar_summary` text NOT NULL,
  `ar_title` varchar(255) NOT NULL,
  `ar_body` text NOT NULL,
  `date_add` datetime NOT NULL,
  `date_edit` datetime NOT NULL,
  `ar_user_id` int(11) NOT NULL,
  `ar_show_public` int(11) NOT NULL DEFAULT '0',
  `ar_show_index` int(11) NOT NULL DEFAULT '0',
  `ar_read_count` tinyint(4) NOT NULL,
  `last_view_ip` varchar(25) NOT NULL,
  `last_view_date` date NOT NULL,
  `ar_post_by` varchar(50) NOT NULL,
  `ar_post_ip` varchar(50) NOT NULL,
  `ar_is_approve` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`ar_id`, `cat_id`, `kw_id`, `uniq_id`, `ar_summary`, `ar_title`, `ar_body`, `date_add`, `date_edit`, `ar_user_id`, `ar_show_public`, `ar_show_index`, `ar_read_count`, `last_view_ip`, `last_view_date`, `ar_post_by`, `ar_post_ip`, `ar_is_approve`) VALUES
(2, 0, 2, 'UXQFRTYE2WMYUJSEUVSBBEMGE6P8D75ORGRM2FSD41BD3RMCMZ9PTAFYKGJHSKPN5FSF', '<div class=\" tm-timeline-item\">\r\n                    <div class=\"tm-timeline-item-inner\">\r\n                      <img src=\"https://news-cdn.softpedia.com/images/news2/gentlemen-here-s-what-it-means-if-the-ladies-laugh-at-your-jokes-490963-2.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n                      <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n                      <div class=\"tm-timeline-description-wrap\">\r\n                          <div class=\"tm-bg-dark tm-timeline-description\">\r\n                                <h3 class=\"tm-text-green tm-font-400\">\r\n                                What women say What women mean\r\n                                </h3>\r\n                                <p style=\"color:white;font-weight:bold;\">\r\n                                    FINE: This is the word women use to end an argument when they feel they are right and you need to shut up. Never use \"fine\" to describe how a woman looks. This will cause you to \r\nhave one of \"those\" arguments.\r\n                                \r\n                                </p>\r\n                                <p class=\"tm-text-green float-left mb-0\">\r\n                                 Sure enough  Create on 16/09/2019.\r\n                                </p>\r\n                                <div class=\"float-right\">\r\n                                  <a href=\"http://127.0.0.1/see-southern/article/read/UXQFRTYE2WMYUJSEUVSBBEMGE6P8D75ORGRM2FSD41BD3RMCMZ9PTAFYKGJHSKPN5FSF\" class=\"btn btn-primary\">Read More</a>\r\n                                </div>\r\n                          </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"tm-timeline-connector-vertical\"></div>\r\n                </div>\r\n\r\n\r\n\r\n\r\n                        ', 'What women say What women mean', '<p class=\"heading\">What women say What women mean</p>\r\n<p>ARE YOU WILLING TO: This means you better do it.<br /><br />FINE: This is the word women use to end an argument when they feel they are right and you need to shut up. Never use \"fine\" to describe how a woman looks. This will cause you to&nbsp;<br />have one of \"those\" arguments.<br /><br />FIVE MINUTES: This is half an hour. It is equivalent to the five minutes that your football game is going to last before you take out the trash, so it\'s an even trade.<br /><br />NOTHING: This means \"something\" and you should be on your toes. \"Nothing\" is usually used to describe the feeling a woman has of wanting to turn you inside out, upside down, and&nbsp;<br />backwards. \"Nothing\" usually signifies an argument that will last \"Five Minutes\" and will end with the word \"Fine\".<br /><br />GO AHEAD (With Raised Eyebrows): This is a dare. One that will result in a woman getting upset over \"Nothing\" and will end with the word \"Fine\".<br /><br />GO AHEAD (Normal Eyebrows): This means \"I give up\" or \"do what you want because I don\'t care\". You will get a \"Raised Eyebrow Go Ahead\" in just a few minutes, followed by&nbsp;<br />\"Nothing\" and \"Fine\", and she will talk to you in about \"Five Minutes\" when she cools off.<br /><br />LOUD SIGH: This is not actually a word, but is a non-verbal statement often misunderstood by men. A \"Loud Sigh\" means she thinks you are an idiot at that moment, and wonders why&nbsp;<br />she is wasting her time standing here arguing with you over \"Nothing\".<br /><br />SOFT SIGH: Again, not a word, but a non-verbal statement. \"Soft Sigh\" means that she is content. Your best bet is not to move or breathe, and she will stay content.<br /><br />THAT\'S OKAY: This is one of the most dangerous statements that a woman can make to a man. \"That\'s Okay\" means that she wants to think long and hard before paying you back for&nbsp;<br />whatever it is that you have done. \"That\'s Okay\" is often used with the word \"Fine\" and in conjunction with a \"Raised Eyebrow Go Ahead\". At some point in the near future, you&nbsp;<br />are going to be in some mighty big trouble.<br /><br /><br />PLEASE DO: This is not a statement, it is an offer. A woman is giving you the chance to come up with whatever excuse or reason you have for doing whatever it is that you have&nbsp;<br />done. You have a fair chance with the truth, so be careful and you shouldn\'t get a \"That\'s Okay\".<br /><br />THANKS: A woman is thanking you. Do not faint. Just say \"you\'re welcome\".<br /><br />THANKS A LOT: This is much different than \"Thanks\". A woman will say \"Thanks A Lot\" when she is really ticked off at you. It signifies that you have offended her in some callous&nbsp;<br />way, and will be followed by the \"Loud Sigh\". Be careful not to ask what is wrong after the \"Loud Sigh\" as she will only tell you \"Nothing\".</p>\r\n<p class=\"submitter\">Submitted by: Edric</p>', '2019-09-16 20:18:32', '2019-09-17 02:07:39', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1),
(3, 0, 3, 'K2UPMMRDE5MXVEFMUBJYB1GEO4FGZ5RWFUS8KCYF3QSRHJFYSNTT2DS7PEPDA69BRGMS', '<div class=\"tm-timeline-item\">\r\n			        <div class=\"tm-timeline-item-inner\">\r\n			          <img src=\"https://1eu.funnyjunk.com/pictures/The_b2acb7_5599206.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n			          <div class=\"tm-timeline-connector\">\r\n				          <p class=\"mb-0\">&nbsp;</p>\r\n			          </div>\r\n\r\n			    <div class=\"tm-timeline-description-wrap\">\r\n				<div class=\"tm-bg-dark-light tm-timeline-description\">\r\n            <h3 class=\"tm-text-cyan tm-font-400\">\r\n                Some Important Things Men should know about women\r\n            </h3>\r\n				    <p>Why is a Laundromat a really bad place to pick up a woman?\r\nBecause a woman who can\'t even afford a washing machine will never be able to support you.</p>\r\n\r\n            <p class=\"tm-text-yellow float-left mb-0\">Important! thing again  . \r\n              create on 9/17/2019, 7:54:43 AM\r\n            </p>\r\n<div class=\"float-right\">\r\n<a href=\"http://127.0.0.1/see-southern/article/read/K2UPMMRDE5MXVEFMUBJYB1GEO4FGZ5RWFUS8KCYF3QSRHJFYSNTT2DS7PEPDA69BRGMS\" target=\"_blank\" style=\"color:white;font-weight:bold;\" class=\"btn btn-primary\">Read More...</a>\r\n</div>\r\n				</div>\r\n			    </div>\r\n			</div>\r\n			<div class=\"tm-timeline-connector-vertical\"></div>\r\n		    </div>\r\n\r\n        ', 'Some Important Things Men should know about women', '<p>Why is a Laundromat a really bad place to pick up a woman?<br />Because a woman who can\'t even afford a washing machine will never be able to support you.<br /><br />Why do women have smaller feet than men?<br />So they can stand closer to the sink.<br /><br />How do you know when a woman\'s about to say something smart?<br />When she starts her sentence with \"A man once told me....\"<br /><br />How do you fix a woman\'s watch?<br />You don\'t, there\'s a clock on the oven!<br /><br />Why do men pass gas more than women?<br />Because women won\'t shut up long enough to build up pressure.<br /><br />If your dog is barking at the back door and your wife is yelling at the front door, who do you let in first?<br />The dog of course, at least he\'ll shut up after you let him in!<br /><br />One golfer tells another: \"Hey, guess what? I got a set of golf clubs for my wife!\"<br />The other replies: \"GREAT trade!\"<br /><br />How many men does it take to open a beer?<br />None, it should be opened by the time she brings it in.<br /><br />What\'s worse than a Male Chauvinist Pig?<br />A woman that won\'t do what she\'s told!<br /><br />What do you call a woman with two brain cells?<br />Pregnant.</p>\r\n<p class=\"submitter\">Submitted by: Fred</p>', '2019-09-17 01:29:41', '2019-09-17 07:52:04', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1),
(4, 0, 4, 'WSR3UP6TSEBGPVMRK7F4RBMHJESKOBQ9DCG2MDE5DS8MFAFM5JZTSP1GNYUYXRFF2YEU', '<div class=\"tm-timeline-item\">\r\n			        <div class=\"tm-timeline-item-inner\">\r\n			          <img src=\"https://1eu.funnyjunk.com/pictures/The_b2acb7_5599206.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n			          <div class=\"tm-timeline-connector\">\r\n				          <p class=\"mb-0\">&nbsp;</p>\r\n			          </div>\r\n\r\n			    <div class=\"tm-timeline-description-wrap\">\r\n				<div class=\"tm-bg-dark tm-timeline-description\">\r\n            <h3 class=\"tm-text-yellow tm-font-400\">\r\n                Some Important Things Men should know about women\r\n            </h3>\r\n				    <p>Why is a Laundromat a really bad place to pick up a woman?\r\nBecause a woman who can\'t even afford a washing machine will never be able to support you.</p>\r\n\r\n            <p class=\"tm-text-yellow float-left mb-0\">Important!  . \r\n              create on 9/17/2019, 6:54:43 AM\r\n            </p>\r\n<div class=\"float-right\">\r\n<a href=\"http://127.0.0.1/see-southern/article/read/WSR3UP6TSEBGPVMRK7F4RBMHJESKOBQ9DCG2MDE5DS8MFAFM5JZTSP1GNYUYXRFF2YEU\" target=\"_blank\" style=\"color:white;font-weight:bold;\" class=\"btn btn-primary\">Read More...</a>\r\n</div>\r\n				</div>\r\n			    </div>\r\n			</div>\r\n			<div class=\"tm-timeline-connector-vertical\"></div>\r\n		    </div>\r\n\r\n        ', 'A ha edit me now', '<div class=\"container tm-container-2\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<h1 class=\"tm-welcome-text\">Some Important Things Men should know about women.</h1>\r\n</div>\r\n</div>\r\n<div class=\"row tm-section-mb\">\r\n<div class=\"col-lg-12\">\r\n<p style=\"color: black; fontweight: bold;\">All this text is generate by the default template on 9/17/2019, 6:54:43 AM</p>\r\n<p style=\"color: black; fontweight: bold;\"><img src=\"http://funnyandhumorous.com/thumb/funny-men-1.jpg\" alt=\"\" width=\"400\" height=\"303\" /></p>\r\n<p>Why is a Laundromat a really bad place to pick up a woman?<br />Because a woman who can\'t even afford a washing machine will never be able to support you.<br /><br />Why do women have smaller feet than men?<br />So they can stand closer to the sink.<br /><br />How do you know when a woman\'s about to say something smart?<br />When she starts her sentence with \"A man once told me....\"<br /><br />How do you fix a woman\'s watch?<br />You don\'t, there\'s a clock on the oven!<br /><br />Why do men pass gas more than women?<br />Because women won\'t shut up long enough to build up pressure.<br /><br />If your dog is barking at the back door and your wife is yelling at the front door, who do you let in first?<br />The dog of course, at least he\'ll shut up after you let him in!<br /><br />One golfer tells another: \"Hey, guess what? I got a set of golf clubs for my wife!\"<br />The other replies: \"GREAT trade!\"<br /><br />How many men does it take to open a beer?<br />None, it should be opened by the time she brings it in.<br /><br />What\'s worse than a Male Chauvinist Pig?<br />A woman that won\'t do what she\'s told!<br /><br />What do you call a woman with two brain cells?<br />Pregnant.</p>\r\n<p class=\"submitter\">Submitted by: Fred copy from&nbsp;<a href=\"http://funnyandhumorous.com/\">http://funnyandhumorous.com/</a></p>\r\n</div>\r\n</div>\r\n</div>', '2019-09-17 06:58:54', '2019-09-17 08:14:11', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1),
(5, 0, 5, 'MWPOJTUMGJFFDKE4GBSMFSM17RKSPEBXEH8BYNUSDP2Y6GDFVZ2TQRYSFC9A5RU5R3EM', '<div class=\"tm-timeline-item\">\r\n			        <div class=\"tm-timeline-item-inner\">\r\n			          <img src=\"https://obs.line-scdn.net/0hi96hVTyeNhYLERktPihJQTFHNXk4fSUVbydnFVd_aCIuJSNCPnAteCgSaSckInFIYnR9ciYRLSchKXhEYHMt/w644\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n			          <div class=\"tm-timeline-connector\">\r\n				          <p class=\"mb-0\">&nbsp;</p>\r\n			          </div>\r\n\r\n			    <div class=\"tm-timeline-description-wrap\">\r\n				<div class=\"tm-bg-dark-light tm-timeline-description\">\r\n            <h3 class=\"tm-text-cyan tm-font-400\">\r\n                สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่น่ามอง ส่อง \'30 แฟชั่นสาวอวบ\' จาก IG : cr5p__br\r\n            </h3>\r\n				    <p>สวยระยะปลอดภัย สาวรูปร่างเซ็กซี่ขั้นสุด อวบอึ๋ม แถมหน้าตาดี</b> อีกหนึ่งสาวที่น่า<u><b>กดติดตาม</b></u> สาวไทยที่หุ่นใกล้เคียงสาวคนนี้อย่าได้กังวลนะคะ เพราะเราไม่ได้น้อยหน้าสาวตัวเล็กผอมบาง เรามีดีในแบบที่เราควรจะมี ทั้งหน้าอก ก้น และรูปร่างโดยรวมที่แซ่บเวอร์<br><b>เธอคนนี้มาพร้อมแฟชั่นสุดเซ็กซี่ที่สาวอวบอย่างเราๆ ไม่ควรพลาด</b> วันนี้เราได้ขนเอาแฟชั่นของสาวคนนี้มาให้ชมกันถึง <b>30 แฟชั่น</b> และมีหลากหลายแบบเลยจ้า ทั้งเสื้อผ้าแฟชั่นที่เหมาะกับสาวร่างอวบ และชุดว่ายน้ำสุดแซ่บ ไปชมพร้อมๆ กันเลยค่ะ<br></p>\r\n\r\n            <p class=\"tm-text-cyan float-left mb-0\">\r\n              copy from <a href=\"https://today.line.me/th/pc/article/สาวอวบไม่ต้องกังวล+อวบๆนี่แหละดี+เซ็กซี่น่ามอง+ส่อง+30+แฟชั่นสาวอวบ+จาก+IG+cr5p+br-2e645ad3876f7a3ea16c1eac718e578dfbbf69d05195a14b50f5de09ea116565\"  class=\"btn btn-warning\" style=\"color:white;font-weight:bold;\" target=\"_blank\">Line Me</a> on 9/20/2019, 7:22:45 AM\r\n            </p>\r\n            <div class=\"float-right\">\r\n              <a href=\"http://127.0.0.1/see-southern/article/read/MWPOJTUMGJFFDKE4GBSMFSM17RKSPEBXEH8BYNUSDP2Y6GDFVZ2TQRYSFC9A5RU5R3EM\" target=\"_blank\" class=\"btn btn-primary\" style=\"color:white;font-weight:bold;\">Read More</a>\r\n            </div>\r\n\r\n				</div>\r\n			    </div>\r\n			</div>\r\n			<div class=\"tm-timeline-connector-vertical\"></div>\r\n		    </div>\r\n\r\n        ', 'สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่น่ามอง', '<div class=\"container tm-container-2\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<h1 class=\"tm-welcome-text\">\"สาวอวบไม่ต้องกังวล อวบๆนี่แหละดี เซ็กซี่น่ามอง\".</h1>\r\n</div>\r\n</div>\r\n<div class=\"row tm-section-mb\">\r\n<div class=\"col-lg-12\">\r\n<p>สวยระยะปลอดภัย สาวรูปร่างเซ็กซี่ขั้นสุด อวบอึ๋ม แถมหน้าตาดี อีกหนึ่งสาวที่น่า<u><strong>กดติดตาม</strong></u> สาวไทยที่หุ่นใกล้เคียงสาวคนนี้อย่าได้กังวลนะคะ เพราะเราไม่ได้น้อยหน้าสาวตัวเล็กผอมบาง เรามีดีในแบบที่เราควรจะมี ทั้งหน้าอก ก้น และรูปร่างโดยรวมที่แซ่บเวอร์<br /><strong>เธอคนนี้มาพร้อมแฟชั่นสุดเซ็กซี่ที่สาวอวบอย่างเราๆ ไม่ควรพลาด</strong> วันนี้เราได้ขนเอาแฟชั่นของสาวคนนี้มาให้ชมกันถึง <strong>30 แฟชั่น</strong> และมีหลากหลายแบบเลยจ้า ทั้งเสื้อผ้าแฟชั่นที่เหมาะกับสาวร่างอวบ และชุดว่ายน้ำสุดแซ่บ ไปชมพร้อมๆ กันเลยค่ะ</p>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0h49q14Y4SaxZMSEQteW0UQXYeaHl_JHgVKH46FRAmNSJpfH5CeSgneG8YNHZkfyxIInkmcmBBcCdmcCVEJykn/w644\" alt=\"\" data-hashid=\"0h49q14Y4SaxZMSEQteW0UQXYeaHl_JHgVKH46FRAmNSJpfH5CeSgneG8YNHZkfyxIInkmcmBBcCdmcCVEJykn\" data-index=\"1\" /></div>\r\n<figcaption>เสื้อสีแดงผูกปมได้ ขาวสั้นยีนส์</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hpej_RLTHL0pXJgBxYgdQHW1wLCVkSjxJMxB-SQtIcX5yEjoeYkZnJHQhdHl5F2gUPkBiJXshNHt9HmEYPEdn/w644\" alt=\"\" data-hashid=\"0hpej_RLTHL0pXJgBxYgdQHW1wLCVkSjxJMxB-SQtIcX5yEjoeYkZnJHQhdHl5F2gUPkBiJXshNHt9HmEYPEdn\" data-index=\"2\" /></div>\r\n<figcaption>เดรสสั้นลายจุดโทนสีพื้นดำจุดขาวเล็กๆ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0ht2hh1NNGKx1VEQQmYDRUSm9HKHJmfTgeMSd6Hgl_dSlwJT5JYHFnc3ZCcyV-JGxDOyBmeXkSMCx_KWVPPnBn/w644\" alt=\"\" data-hashid=\"0ht2hh1NNGKx1VEQQmYDRUSm9HKHJmfTgeMSd6Hgl_dSlwJT5JYHFnc3ZCcyV-JGxDOyBmeXkSMCx_KWVPPnBn\" data-index=\"3\" /></div>\r\n<figcaption>เสื้อสายเดี่ยวสีน้ำตาล มีเชือกผูกไขว้ตรงบริเวณหน้าอก ขาสั้นยีนส์ปลายขาดลุ่ย</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hjbdkC2AtNU1ZEhp2bDJKGmNENiJqfiZOPSRkTgV8a3l8JiAZbHJ8I3pHPC58JnITMHR4InUaLnxzKnsfMnN8/w644\" alt=\"\" data-hashid=\"0hjbdkC2AtNU1ZEhp2bDJKGmNENiJqfiZOPSRkTgV8a3l8JiAZbHJ8I3pHPC58JnITMHR4InUaLnxzKnsfMnN8\" data-index=\"4\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เดรสรัดรูปปยีนส์ อวดทรวดทรง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hCWTl66VtHHhpFTNDXDZjL1NDHxdaeQ97DSNNezV7QkxMIQksXHVWFkpAQ09Nd1smByRRG08RB0lDLVIqAnRW/w644\" alt=\"\" data-hashid=\"0hCWTl66VtHHhpFTNDXDZjL1NDHxdaeQ97DSNNezV7QkxMIQksXHVWFkpAQ09Nd1smByRRG08RB0lDLVIqAnRW\" data-index=\"5\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อสีขาวหน้าอกแหวกเห็นหมด กับขาสั้น ใครที่กลัวโป๊ก็ใส่เสื้อข้างในได้เด้อ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hi96hVTyeNhYLERktPihJQTFHNXk4fSUVbydnFVd_aCIuJSNCPnAteCgSaSckInFIYnR9ciYRLSchKXhEYHMt/w644\" alt=\"\" data-hashid=\"0hi96hVTyeNhYLERktPihJQTFHNXk4fSUVbydnFVd_aCIuJSNCPnAteCgSaSckInFIYnR9ciYRLSchKXhEYHMt\" data-index=\"6\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปขาวขอบแดง กางเกงว่ายน้ำสีแดง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hECBQVHf-Gmx_KDVXSgxlO0V-GQNMRAlvGx5LbyNGRFhaHA84SkhXAlx4Rl5aSl0yERlXD1stAV1VEFQ-FElX/w644\" alt=\"\" data-hashid=\"0hECBQVHf-Gmx_KDVXSgxlO0V-GQNMRAlvGx5LbyNGRFhaHA84SkhXAlx4Rl5aSl0yERlXD1stAV1VEFQ-FElX\" data-index=\"7\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อสายเดี่ยวโทนสีอุ่น กางเกงยีนส์ขายาวเอวสูง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hCucOsyXrHFpeNjNhaxVjDWRgHzVtWg9ZOgBNWQJYQm57AgkOa1ZWNH0yEGpwD1sEMAdROXs1B2t0DlIINVdW/w644\" alt=\"\" data-hashid=\"0hCucOsyXrHFpeNjNhaxVjDWRgHzVtWg9ZOgBNWQJYQm57AgkOa1ZWNH0yEGpwD1sEMAdROXs1B2t0DlIINVdW\" data-index=\"8\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสีแดง กางเกงขาสั้นสีดำ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hEyDuDLq4GlZ5DDVtTCllAUNaGTlKYAlVHTpLVSViRGJcOA8CTGxWOFoEF2JTa10IFz1XMlULAWdTNFQEEm1W/w644\" alt=\"\" data-hashid=\"0hEyDuDLq4GlZ5DDVtTCllAUNaGTlKYAlVHTpLVSViRGJcOA8CTGxWOFoEF2JTa10IFz1XMlULAWdTNFQEEm1W\" data-index=\"9\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เดรสแขนกุด รัดรูปลายน้ำเงินสลับฟ้า</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hnmwcjxQWMUJKGh55fz5OFXBMMi15diJBLixgQRZ0b3ZvLiQWf3p8LGkdaXpvKHYcI3x8LWgbKnNgIn8QIXt8/w644\" alt=\"\" data-hashid=\"0hnmwcjxQWMUJKGh55fz5OFXBMMi15diJBLixgQRZ0b3ZvLiQWf3p8LGkdaXpvKHYcI3x8LWgbKnNgIn8QIXt8\" data-index=\"10\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อครอปโทนสีเทา เสื้อคลุมยีนส์ และกางเกงเอวสูงผ้ามันเงา</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0h0QRwW8Ogb35vDkBFWioQKVVYbBFcYnx9Czg-fTNgMUpKOnoqWm4iEEwPMBlCPyggAT8iHUsNdE9FNiEsBG8i/w644\" alt=\"\" data-hashid=\"0h0QRwW8Ogb35vDkBFWioQKVVYbBFcYnx9Czg-fTNgMUpKOnoqWm4iEEwPMBlCPyggAT8iHUsNdE9FNiEsBG8i\" data-index=\"11\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อกล้ามดำ เสื้อคลุมลายสก๊อต กางเกงยีนส์เอวสูง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0h4rtII6yja11JMERmfBcUCnNmaDJ6XHheLQY6XhVeNWlsBH4JfFFzM2plNGljCCwDIFUgPmw1cGxjCCUPIlEl/w644\" alt=\"\" data-hashid=\"0h4rtII6yja11JMERmfBcUCnNmaDJ6XHheLQY6XhVeNWlsBH4JfFFzM2plNGljCCwDIFUgPmw1cGxjCCUPIlEl\" data-index=\"12\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เดรสรัดรูปและแจ็คเก็ตยีนส์</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hzkOmqfm0JURyFAp_RyxaE0hCJitBeDZHFiJ0Ry56e3BXIDAQR3U9KlEXfHRbJGIaG3FuJ1YWPnVYLGsWGXY9/w644\" alt=\"\" data-hashid=\"0hzkOmqfm0JURyFAp_RyxaE0hCJitBeDZHFiJ0Ry56e3BXIDAQR3U9KlEXfHRbJGIaG3FuJ1YWPnVYLGsWGXY9\" data-index=\"13\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อสีขาวแขนยาว กระโปรงทรงเอสีชมพูอ่อน</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hzQRmEOBeJX5vFApFWixaKVVCJhFceDZ9CyJ0fTN6e0pKIDAqWnU9EExAeRsRJGIgBnFuHUsXPk9FLGssBHY9/w644\" alt=\"\" data-hashid=\"0hzQRmEOBeJX5vFApFWixaKVVCJhFceDZ9CyJ0fTN6e0pKIDAqWnU9EExAeRsRJGIgBnFuHUsXPk9FLGssBHY9\" data-index=\"14\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสีดำเน้นหน้าอก สายไขว้คอ กระโปรงยีนส์ขาดปลายเซ็กซี่มาก</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hqUkIFf-6LnpWMAFBYxNRLWxmLRVlXD15MgZ_eQpecE5zBDsuY1BkFHU2dBl7UGkkOAFjGXM3NUt8CGAoPVFk/w644\" alt=\"\" data-hashid=\"0hqUkIFf-6LnpWMAFBYxNRLWxmLRVlXD15MgZ_eQpecE5zBDsuY1BkFHU2dBl7UGkkOAFjGXM3NUt8CGAoPVFk\" data-index=\"15\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เปิดไหล่โทนชมพูเขียว กางเกงยีนส์เอวสูงขายาว</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hKF6R1IEbFGkLKztSPgxrPjF9FwY4Rwdqbx1FaldFSl0uHwE9PktaBygsSFx0HlM3Yk5fCi0qD1ghE1o7YEpa/w644\" alt=\"\" data-hashid=\"0hKF6R1IEbFGkLKztSPgxrPjF9FwY4Rwdqbx1FaldFSl0uHwE9PktaBygsSFx0HlM3Yk5fCi0qD1ghE1o7YEpa\" data-index=\"16\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสีขาวกับกางเกงยีนส์สั้น</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0h_7t_OcMuABhJJi8jfAV_T3NwA3d6ShMbLRBRGxVIXixsEhVMfEZKdmohXSxsREdGJxdNe28lGyljHk5KIkdK/w644\" alt=\"\" data-hashid=\"0h_7t_OcMuABhJJi8jfAV_T3NwA3d6ShMbLRBRGxVIXixsEhVMfEZKdmohXSxsREdGJxdNe28lGyljHk5KIkdK\" data-index=\"17\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อยืดดำสกรีนลาย กระโปรงหนังทรงเอ แจ็คเก็ตสีเขียวขี้ม้า</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hx70vi7AaJxgNDwgjODZYTzdZJHc-YzQbaTl2G1FheSwoOzJMOG48di4OfCEjNmBGZGpsfCAOPCknN2lKZm08/w644\" alt=\"\" data-hashid=\"0hx70vi7AaJxgNDwgjODZYTzdZJHc-YzQbaTl2G1FheSwoOzJMOG48di4OfCEjNmBGZGpsfCAOPCknN2lKZm08\" data-index=\"18\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปแขนยาวสีดำ ตรงกลางเป็นรูปหัวใจ กระโปรงสั้นสีดำ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hdY_laZp5O3ZiFRRNVzZEIVhDOBlReSh1BiNqdT57ZUJHIS4iV3VxGEEWYE9JJHwoDCR2FUYdIEdILXUkCXRx/w644\" alt=\"\" data-hashid=\"0hdY_laZp5O3ZiFRRNVzZEIVhDOBlReSh1BiNqdT57ZUJHIS4iV3VxGEEWYE9JJHwoDCR2FUYdIEdILXUkCXRx\" data-index=\"19\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อสีเขียว เดรสสายเดี่ยวสีดำ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hhY7Mx5HRN3YKNBhNPw1IITBiNBk5WCR1bgJmdVZaaUIvACIiP1UsGClhYUQjAnAoY1F8EiY9LEcgDHkkYVYs/w644\" alt=\"\" data-hashid=\"0hhY7Mx5HRN3YKNBhNPw1IITBiNBk5WCR1bgJmdVZaaUIvACIiP1UsGClhYUQjAnAoY1F8EiY9LEcgDHkkYVYs\" data-index=\"20\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อคลุมฮาวายกับครอปสีขาวสายเดี่ยว กางเกงยีนส์ปลายขาด</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hhHxfG2K4N2dFHxhccDhIMH9JNAh2cyRkISlmZBlxaVNgKyIzcH95CWZIagc8KnA5LHp8BGMdLFZvJ3k1Ln55/w644\" alt=\"\" data-hashid=\"0hhHxfG2K4N2dFHxhccDhIMH9JNAh2cyRkISlmZBlxaVNgKyIzcH95CWZIagc8KnA5LHp8BGMdLFZvJ3k1Ln55\" data-index=\"21\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสายเดี่ยวสีเทาดำ เสื้อแจ็คเก็ตเท่ๆ ขาสั้นยีนส์ปลายลุ่ย</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hyhna-VNMJkdTGAl8ZjtZEGlOJShgdDVENy53RA92eHN2LDMTZnhsKXAYLSd5eGEZPSlrJHUZPXZ5IGgVOHls/w644\" alt=\"\" data-hashid=\"0hyhna-VNMJkdTGAl8ZjtZEGlOJShgdDVENy53RA92eHN2LDMTZnhsKXAYLSd5eGEZPSlrJHUZPXZ5IGgVOHls\" data-index=\"22\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสีขาว คลุมลายสก๊อต กางเกงยีนส์สั้น</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hxiCkNfhHJ0Z-Egh9SzRYEUREJClNfjRFGiR2RSJ8eXJbJjISS3JoKF0SfSNWKmAYF3dsJV4SPHdUKmkUFXNo/w644\" alt=\"\" data-hashid=\"0hxiCkNfhHJ0Z-Egh9SzRYEUREJClNfjRFGiR2RSJ8eXJbJjISS3JoKF0SfSNWKmAYF3dsJV4SPHdUKmkUFXNo\" data-index=\"23\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อครอปสีเทา เสื้อคลุมธรรมดาสีเทาอ่อนกว่า ขาสั้นโทนเทาดำ</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hREDb9-7MDWp5GyJRTD5yPUNNDgVKdx5pHS1caSV1U15cLxg-THtBBFocB1xRLko0FypADlQbFltTI0M4EnpB/w644\" alt=\"\" data-hashid=\"0hREDb9-7MDWp5GyJRTD5yPUNNDgVKdx5pHS1caSV1U15cLxg-THtBBFocB1xRLko0FypADlQbFltTI0M4EnpB\" data-index=\"24\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อโอเวอร์ไซส์ กับกางเกงขาสั้นปลายลุ่ย</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hvVLKBgjCKXlxMgZCRBJWLktkKhZCXjp6FQR4ei1cd01UBjwtRFJgF1JlIkAPC24nGFRkFlwzMkhbCmcrGlNg/w644\" alt=\"\" data-hashid=\"0hvVLKBgjCKXlxMgZCRBJWLktkKhZCXjp6FQR4ei1cd01UBjwtRFJgF1JlIkAPC24nGFRkFlwzMkhbCmcrGlNg\" data-index=\"25\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อโทนสีเทาเข้มยัดใส่กางเกงขาสั้นสีขาวปลายขาด</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hb1uQXaRNPR5IKBIlfQpCSXJ-PnF7RC4dLB5sHRRGYyptHChKfUh2cGt9NihkH3pAJhlwfW8gJi9iEHNMI0l2/w644\" alt=\"\" data-hashid=\"0hb1uQXaRNPR5IKBIlfQpCSXJ-PnF7RC4dLB5sHRRGYyptHChKfUh2cGt9NihkH3pAJhlwfW8gJi9iEHNMI0l2\" data-index=\"26\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ครอปสายเดี่ยวโทรสีครีม เสื้อคลุมก็สีครีม กางเกงขาสั้นสีดำเอวสูง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hamrMXK46PkJPNBF5ehJBFXViPS18WC1BKwJvQRNaYHZqACsWelRxLGwwY3Y3U3kcJlF1IWg9JXNlDHAQJFVx/w644\" alt=\"\" data-hashid=\"0hamrMXK46PkJPNBF5ehJBFXViPS18WC1BKwJvQRNaYHZqACsWelRxLGwwY3Y3U3kcJlF1IWg9JXNlDHAQJFVx\" data-index=\"27\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>เสื้อกล้ามลายหลากสีโทนสีน่ารักกับกางเกงยีนส์ขาสั้นปลายฉีกขาด</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hc754UcYJPBgITRMjPW5DTzIbP3c7IS8bbHttG1QjYiwteSlMPS12ditMN3oifXtGZnxxey1IJykidXJKYyx2/w644\" alt=\"\" data-hashid=\"0hc754UcYJPBgITRMjPW5DTzIbP3c7IS8bbHttG1QjYiwteSlMPS12ditMN3oifXtGZnxxey1IJykidXJKYyx2\" data-index=\"28\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ชุดว่ายน้ำโทนสีขาว</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hjnLdnWEiNUFxHRp6RD9KFktLNi5CcSZCFStkQi1za3VUKSAVRH1-L1IePHZaJXIfHyx4IlYfLnBbJXsTGnx-/w644\" alt=\"\" data-hashid=\"0hjnLdnWEiNUFxHRp6RD9KFktLNi5CcSZCFStkQi1za3VUKSAVRH1-L1IePHZaJXIfHyx4IlYfLnBbJXsTGnx-\" data-index=\"29\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ชุดว่ายน้ำโทนสีเหลือง</figcaption>\r\n</figure>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hQ_g3h80CDnBaSiFLb29xJ2AcDR9pJh1zPnxfcwYkUER_fhskbypCHnlIVUh0KkkuMyxDH3tOFUFwckAiMStC/w644\" alt=\"\" data-hashid=\"0hQ_g3h80CDnBaSiFLb29xJ2AcDR9pJh1zPnxfcwYkUER_fhskbypCHnlIVUh0KkkuMyxDH3tOFUFwckAiMStC\" data-index=\"30\" />\r\n<p>&nbsp;</p>\r\n</div>\r\n<figcaption>ชุดว่ายน้ำโทนดำมาพร้อมขาสั้นยีนส์และเสื้อคลุมลายสก็อต</figcaption>\r\n</figure>\r\n<p>เรียกได้ว่าแซ่บแบบไม่รู้จบ<strong>ยังมีแฟชั่นสาวอวบอีกเยอะมากในไอจีเธอคนนี้</strong> อย่าลืมตามไปส่องกันเด้อ โดยส่วนใหญ่จากที่สังเกต <strong>ด้วยรูปร่างที่เซ็กซี่ อวบอึ๋ม ส่วนใหญ่เสื้อผ้าที่เธอเลือกใส่จะค่อนข้างรัดรูป เปิดเผยรูปร่าง คล้ายกับการอวดหุ่น</strong> ซึ่งมันเป็นเรื่องของ<u><strong>ความมั่นใจ</strong></u>ไง แล้วมันก็ดีมากๆ สำหรับสาวๆ ที่ไม่กล้า และไม่ค่อยมีความมั่นใจต้องดูเลยอ่ะ ดีจริงๆ แต่ก็ระวังๆ หน่อยนะ โลกไม่ค่อยปลอดภัยเท่าไหร่ ไปก่อนนะ สวัสดีค่ะ</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"alert alert-warning\"><a class=\"btn btn-primary\" style=\"color: red; font-weight: bold;\" href=\"https://today.line.me/th/pc/article/%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%AD%E0%B8%A7%E0%B8%9A%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%87%E0%B8%A7%E0%B8%A5+%E0%B8%AD%E0%B8%A7%E0%B8%9A%E0%B9%86%E0%B8%99%E0%B8%B5%E0%B9%88%E0%B9%81%E0%B8%AB%E0%B8%A5%E0%B8%B0%E0%B8%94%E0%B8%B5+%E0%B9%80%E0%B8%8B%E0%B9%87%E0%B8%81%E0%B8%8B%E0%B8%B5%E0%B9%88%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A1%E0%B8%AD%E0%B8%87+%E0%B8%AA%E0%B9%88%E0%B8%AD%E0%B8%87+30+%E0%B9%81%E0%B8%9F%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%AD%E0%B8%A7%E0%B8%9A+%E0%B8%88%E0%B8%B2%E0%B8%81+IG+cr5p+br-2e645ad3876f7a3ea16c1eac718e578dfbbf69d05195a14b50f5de09ea116565\" target=\"_blank\">อ่านโพสต้นฉบับ</a></div>', '2019-09-20 07:31:45', '2019-09-20 09:41:38', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1),
(6, 0, 6, 'M75P3TERMKGUEKCROUQP6MFGYBDMH9U2ZYTBFGSANFS4MJSBR8D1ERDJSE2PFYV5WFSX', '<div class=\"tm-timeline-item\">\r\n			        <div class=\"tm-timeline-item-inner\">\r\n			          <img src=\"https://obs.line-scdn.net/0hDVZm5dBJG3lnFDCdwddkLl1CGBZUeAh6AyJKejt6RU0fLV5_CHpRTEscRhlNcFwnCSdQGEUSAEgadwt6WHtR/w644\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n			          <div class=\"tm-timeline-connector\">\r\n				          <p class=\"mb-0\">&nbsp;</p>\r\n			          </div>\r\n\r\n			    <div class=\"tm-timeline-description-wrap\">\r\n				<div class=\"tm-bg-dark-light tm-timeline-description\">\r\n            <h3 class=\"tm-text-cyan tm-font-400\">\r\n                รุ่นเก่าก็ต้องลดราคา! Priceza ชี้นาทีทองคนชอบของเซลล์ \"iPhone XR\" คุ้มสุดหากไม่คิดสอย \"iPhone 11\"\r\n            </h3>\r\n				    <p>ประกาศเปิดตัวรุ่นใหม่ <b>iPhone 11</b>และที่น่าสนใจคือข้อมูลเชิงสถิติเกี่ยวกับการค้นหาและการซื้อของบนเว็บไซต์ <a href=\"https://www.priceza.com/article/\" target=\"_blank\"><b>Priceza.com</b></a> พบว่าในช่วงเวลา iPhone รุ่นใหม่เปิดตัวและเริ่มวางขาย ผู้ใช้จะให้ความสนใจและเลือกซื้อ iPhone รุ่นเก่า ๆ ที่ถูกปรับลดราคาลงมามากกว่า iPhone รุ่นใหม่</p>\r\n\r\n            <p class=\"tm-text-cyan float-left mb-0\">\r\n copy from <a href=\"https://today.line.me/th/pc/article/%E0%B8%A3%E0%B8%B8%E0%B9%88%E0%B8%99%E0%B9%80%E0%B8%81%E0%B9%88%E0%B8%B2%E0%B8%81%E0%B9%87%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%A5%E0%B8%94%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2+Priceza+%E0%B8%8A%E0%B8%B5%E0%B9%89%E0%B8%99%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%99%E0%B8%8A%E0%B8%AD%E0%B8%9A%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%8B%E0%B8%A5%E0%B8%A5%E0%B9%8C+iPhone+XR+%E0%B8%84%E0%B8%B8%E0%B9%89%E0%B8%A1%E0%B8%AA%E0%B8%B8%E0%B8%94%E0%B8%AB%E0%B8%B2%E0%B8%81%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B8%AA%E0%B8%AD%E0%B8%A2+iPhone+11-pqna6q\" class=\"btn btn-warning\" style=\"color:white;font-weight:bold;\">Line Me</a>\r\n               on 9/20/2019, 8:24:40 AM\r\n            </p>\r\n            <div class=\"float-right\">\r\n              <a href=\"http://127.0.0.1/see-southern/article/read/M75P3TERMKGUEKCROUQP6MFGYBDMH9U2ZYTBFGSANFS4MJSBR8D1ERDJSE2PFYV5WFSX\" target=\"_blank\" class=\"btn btn-primary\" style=\"color:white;font-weight:bold;\">Read More</a>\r\n            </div>\r\n\r\n				</div>\r\n			    </div>\r\n			</div>\r\n			<div class=\"tm-timeline-connector-vertical\"></div>\r\n		    </div>\r\n\r\n        ', 'รุ่นเก่าก็ต้องลดราคา! Priceza ชี้นาทีทองคนชอบของเซลล์ \"iPhone XR\" คุ้มสุดหากไม่คิดสอย \"iPhone 11\"', '<div class=\"container tm-container-2\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<h1 class=\"tm-welcome-text\">edit the title for \"รุ่นเก่าก็ต้องลดราคา! Priceza ชี้นาทีทองคนชอบของเซลล์ \"iPhone XR\" คุ้มสุดหากไม่คิดสอย \"iPhone 11\"\".</h1>\r\n</div>\r\n</div>\r\n<div class=\"row tm-section-mb\">\r\n<div class=\"col-lg-12\"><img class=\"responsive\" src=\"https://obs.line-scdn.net/0hDVZm5dBJG3lnFDCdwddkLl1CGBZUeAh6AyJKejt6RU0fLV5_CHpRTEscRhlNcFwnCSdQGEUSAEgadwt6WHtR/w644\" />\r\n<p>ประกาศเปิดตัวรุ่นใหม่ <strong>iPhone 11</strong> เอาใจสาวก apple ไปแล้ว และแน่นอนว่าเมื่อรุ่นใหม่มา iPhone รุ่นที่วางตลาดอยู่แล้วก็ต้องปรับราคาลง</p>\r\n<p>และที่น่าสนใจคือข้อมูลเชิงสถิติเกี่ยวกับการค้นหาและการซื้อของบนเว็บไซต์ <a href=\"https://www.priceza.com/article/\" target=\"_blank\"><strong>Priceza.com</strong></a> พบว่าในช่วงเวลา iPhone รุ่นใหม่เปิดตัวและเริ่มวางขาย ผู้ใช้จะให้ความสนใจและเลือกซื้อ iPhone รุ่นเก่า ๆ ที่ถูกปรับลดราคาลงมามากกว่า iPhone รุ่นใหม่</p>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0h4NejCNrca2FYE0CF_tIUNmJFaA5rf3hiPCU6YgR9NVUgKi5nN30jVHRDMVZ0dCw_NiAgAXwUcFAlcHtiZ3wj/w644\" alt=\"\" data-hashid=\"0h4NejCNrca2FYE0CF_tIUNmJFaA5rf3hiPCU6YgR9NVUgKi5nN30jVHRDMVZ0dCw_NiAgAXwUcFAlcHtiZ3wj\" data-index=\"1\" /></div>\r\n<figcaption></figcaption>\r\n</figure>\r\n<p>จากกราฟ <strong>iPhone 6s</strong> และ <strong>iPhone 6s Plus</strong> เป็นไอโฟนรุ่นที่มีจำนวนครั้งการคลิกสินค้าและมีอัตราการซื้อ (Conversion Rate) สูงที่สุด สูงกว่าจำนวนของ iPhone 8, iPhone 8 Plus, iPhone X, iPhone XR, iPhone XS และ iPhone XS Max รวมกัน</p>\r\n<p>เพราะราคา <strong>iPhone 6s</strong> ที่ถูกปรับจนอยู่ในระดับที่เข้าถึงง่าย<strong>เหลือไม่ถึง 10,000 บาท</strong>ในบางร้านค้า แต่ก็ยังมีสเปกภาพรวมที่ตอบโจทย์ต่อการใช้งานในปัจจุบันได้ดี</p>\r\n<p>ยิ่งไปกว่านั้นจากกราฟด้านล่างเห็นได้ชัดว่าในช่วงครึ่งปีแรกของปีนี้ ออเดอร์รวมของ <strong>iPhone 7 และ 7 Plus นั้นมีจำนวนสูงที่สุด และสูงกว่า iPhone รุ่นปี 2018 ทุกรุ่นรวมกัน</strong> ตอกย้ำที่ว่าผู้บริโภคให้ความสนใจ iPhone รุ่นเก่ามากกว่า</p>\r\n<figure class=\"fig-cont include-image\">\r\n<div class=\"fig-img-wrap\"><img src=\"https://obs.line-scdn.net/0hLN76_2ZME2EKTziFrI5sNjAZEA45IwBibnlCYlYhTVVydlZnZSFbVCYcTwInfFQ_ZHxYAS5MCFB3LANiNSBb/w644\" alt=\"\" data-hashid=\"0hLN76_2ZME2EKTziFrI5sNjAZEA45IwBibnlCYlYhTVVydlZnZSFbVCYcTwInfFQ_ZHxYAS5MCFB3LANiNSBb\" data-index=\"2\" /></div>\r\n<figcaption></figcaption>\r\n</figure>\r\n<p>ข้อมูลในส่วนนี้แสดงให้เห็นว่า <strong>&ldquo;ราคา&rdquo;</strong> ยังคงเป็นปัจจัยอันดับต้น ๆ ที่ผู้บริโภคให้ความสำคัญ โดยเฉพาะกับสมาร์ทโฟนที่ตกรุ่นช้า มีราคาขายต่อมือสองสูง และมีการรองรับอัพเดตซอฟต์แวร์ระบบเฉลี่ยถึง 5 ปี แบบ iPhone ที่ผู้ใช้แทบจะไม่มีความจำเป็นต้องเปลี่ยนเครื่องใหม่บ่อย ๆ หากตัวเครื่องยังใช้งานได้ปกติ</p>\r\n<p>และด้วยสภาวะที่ค่าเงินบาทแข็งค่ามาก จึงน่าจะทำให้ iPhone 11 เปิดราคาขายในไทยมาได้ถูกลงมากกว่าปกติ ก็ยิ่งน่าจะส่งผลให้ไ<strong>อโฟนรุ่นเก่ามี ราคาปรับลดในอัตราที่มากขึ้นอยู่ที่ 20 &ndash; 35%</strong> อิงจากราคา <strong>iPhone 8</strong> ล่าสุดที่ประกาศออกมา ที่ร่วงจาก 23,900 บาท <strong>เหลือแค่ 15,900 บาท</strong>สำหรับความจุ 64GB&nbsp; ส่วนความจุ 128GB อยู่ที่ 17,900 บาท &nbsp;ขณะที่ <strong>iPhone 8 Plus </strong>&nbsp;<strong>19,900 บาท</strong>สำหรับความจุ 64GB และ 21,900 บาท สำหรับความจุ 128GB</p>\r\n<p>ด้าน <strong>iPhone XR</strong> เดิมราคา 29,900 <strong>เหลือเพียง 21,900 บาท</strong> สำหรับความจุ 64GB และ 23,900 บาทสำหรับความจุ 128GB &nbsp;&nbsp;ซึ่งทำให้ iPhone XR มีความน่าสนใจมากในแง่ของความคุ้มค่าที่สเปกที่ใกล้เคียงกับ iPhone XS รุ่นสูงสุด อาทิ การกล้องหลักและชิปประมวลผลชนิดเดียวกัน &nbsp;แต่ยังมีหน้าจอที่ได้ความละเอียดน้อยกว่า เป็นต้น</p>\r\n<p>ฉะนั้น นาทีนี้สำหรับคนที่ไม่ได้ต้องการเทคโนโลยีไฮเอนด์แบบสุดๆ ก็เป็นจังหวะที่ดีที่จะเสิร์ชและเปรียบเทียบ<strong>&ldquo;สเป็ก-ราคา&rdquo;</strong> เพื่อหาสิ่งที่เหมาะกับการใช้งานของตัวเองมากที่สุด</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><!-- original article --> <a class=\"btn_txt\" title=\"ดูข่าวต้นฉบับ\" href=\"https://www.prachachat.net/ict/news-373293\" target=\"_blank\"> ดูข่าวต้นฉบับ </a></p>\r\n</div>\r\n</div>\r\n</div>', '2019-09-20 08:35:47', '2019-09-20 08:41:53', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1),
(7, 0, 7, 'FYNMJ5RV9SMYX3BFY25DEBZQ8PSESJWKPHMSEKRRGDGPUBM7UFRFUTA4O6M1CEFST2DG', '<div class=\"tm-timeline-item\">\r\n			        <div class=\"tm-timeline-item-inner\">\r\n			          <img src=\"https://lh3.googleusercontent.com/nCAkv61YMvUH9XADXuvcl9Jo9jDQKZ-c96gWul8vQWY6fNDLGX-A1p_L75CO83L8CNHMU0m6PFvQSsa217OuJOt_Qmvy7DEhzObFvUhz5bT5XaN9XrJZdrojnb3yG4El4kfq126zuwo=w2400\" alt=\"Image\" class=\"rounded-circle tm-img-timeline responsive\">\r\n			          <div class=\"tm-timeline-connector\">\r\n				          <p class=\"mb-0\">&nbsp;</p>\r\n			          </div>\r\n\r\n			    <div class=\"tm-timeline-description-wrap\">\r\n				<div class=\"tm-bg-dark-light tm-timeline-description\">\r\n            <h3 class=\"tm-text-cyan tm-font-400\">\r\n               ฟังนิยายเพชรพระอุมา จอมผีดิบมันตรัย\r\n            </h3>\r\n<p>\r\nAll Credit will be thanks to เครดิตให้ผู้เขียนนามปากกา <b>\"พนมเทียน\"</b><br />\r\nจอมผีดิบมันตรัย หนังสือเสียง เพชรพระอุมา อ่านโดย คุณศศวรรณ   อรรถจรรยากุล <br />\r\n        Edit Sound by Ubuntu 18.04 | Audacity | farookphuket | 20-Aug-2019\r\n</p>\r\n\r\n            <p class=\"tm-text-cyan float-left mb-0\">\r\n              create on 9/20/2019, 12:13:15 PM\r\n            </p>\r\n            <div class=\"float-right\">\r\n              <a href=\"http://127.0.0.1/see-southern/article/read/FYNMJ5RV9SMYX3BFY25DEBZQ8PSESJWKPHMSEKRRGDGPUBM7UFRFUTA4O6M1CEFST2DG\" target=\"_blank\" class=\"btn btn-primary\" style=\"color:white;font-weight:bold;\">Read More</a>\r\n            </div>\r\n\r\n				</div>\r\n			    </div>\r\n			</div>\r\n			<div class=\"tm-timeline-connector-vertical\"></div>\r\n		    </div>\r\n\r\n        ', 'ฟังนิยายเพชรพระอุมา จอมผีดิบมันตรัย', '<div class=\"container tm-container-2\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<h1 class=\"tm-welcome-text\">\"ฟังนิยายเพชรพระอุมา จอมผีดิบมันตรัย\".</h1>\r\n</div>\r\n</div>\r\n<div class=\"row tm-section-mb\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"col-lg-12\">\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 59 to 62</h1>\r\n<p><iframe src=\"https://archive.org/embed/59606162\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 5 ชั่วโมง 40 นาที 32 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 63 to 66</h1>\r\n<p><iframe src=\"https://archive.org/embed/63646566\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 5 ชั่วโมง 35 นาที 15 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 67 to 71</h1>\r\n<p><iframe src=\"https://archive.org/embed/6771_20190830\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 7 ชั่วโมง 15 นาที 58 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 72 to 74</h1>\r\n<p><iframe src=\"https://archive.org/embed/727374\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 4 ชั่วโมง 14 นาที 53 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 75 to 79</h1>\r\n<p><iframe src=\"https://archive.org/embed/7579_20190901\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 7 ชั่วโมง 26 นาที 31 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 80 to 84</h1>\r\n<p><iframe src=\"https://archive.org/embed/80to84\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 7 ชั่วโมง 14 นาที 26 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 85 ถึง 89</h1>\r\n<p><iframe src=\"https://archive.org/embed/85to89\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 7 ชั่วโมง 11 นาที 52 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li>\r\n<h1 class=\"text-center\">คลิปเสียงที่ 90 ถึง 95</h1>\r\n<p><iframe src=\"https://archive.org/embed/90to95\" width=\"500\" height=\"30\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>ความยาว 8 ชั่วโมง 40 นาที 47 วินาที</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>วันนี้พอแค่นี้ก่อนนะครับ ผมจะมา Update ใหม่ให้อีกครั้งในวันที่ 15 ตุลาคม 2562 ครับ</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2019-09-20 12:21:04', '2019-09-20 12:50:50', 1, 1, 1, 1, '127.0.0.1', '2019-09-20', 'farook', '127.0.0.1', 1);

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
(21, 'New view count for 13! on 2018-05-31 by IP 183.89.53.93', 'The IP 183.89.53.93 has view article id 13 on 2018-05-31 using os Linux browser Browser Firefox version 60.0 by user test', 13, '183.89.53.93', '2018-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bk_id` int(11) NOT NULL,
  `bk_ip` varchar(20) NOT NULL,
  `bk_name` varchar(60) NOT NULL,
  `bk_email` varchar(60) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(40) NOT NULL DEFAULT 'CANOE_JOHNGRAY',
  `bk_more` text NOT NULL,
  `bk_num` int(11) NOT NULL,
  `price_of_deposite` mediumint(11) NOT NULL DEFAULT '0',
  `price_per_one` int(11) NOT NULL,
  `price_total` int(11) NOT NULL,
  `mark_as_done` int(11) NOT NULL,
  `collect_more` int(11) NOT NULL,
  `going_date` date NOT NULL,
  `bk_date` date NOT NULL,
  `bk_confirm` int(11) NOT NULL DEFAULT '0',
  `conf_ip` varchar(20) NOT NULL,
  `conf_id` int(11) NOT NULL,
  `conf_name` varchar(25) NOT NULL,
  `bk_date_conf` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `save_as_draft` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bk_id`, `bk_ip`, `bk_name`, `bk_email`, `tour_id`, `tour_name`, `bk_more`, `bk_num`, `price_of_deposite`, `price_per_one`, `price_total`, `mark_as_done`, `collect_more`, `going_date`, `bk_date`, `bk_confirm`, `conf_ip`, `conf_id`, `conf_name`, `bk_date_conf`, `save_as_draft`) VALUES
(1, '127.0.0.1', 'มุฮัมหมัด ซัดอาลี', 'muhumman@me.in', 3, 'Tour with John Gray Sea Canoe', 'hotel best #3344', 4, 4000, 3950, 15800, 0, 0, '2018-05-16', '2018-05-15', 0, '', 0, '', '2018-05-15 10:46:44', 1),
(2, '127.0.0.1', 'mingter', 'mingter@me.th', 3, 'Tour with John Gray Sea Canoe', 'hotem in pung nga room number 3356', 5, 5000, 3950, 19750, 0, 0, '2018-05-19', '2018-05-15', 0, '', 0, '', '2018-05-15 11:01:03', 1),
(3, '183.89.49.193', 'mente', 'mintra@me.th', 6, 'One Day Rock Climbing  ปีนเขาวันเดียว', 'the hotel is in patong hotel', 5, 2500, 1711, 8555, 0, 0, '2018-05-18', '2018-05-15', 0, '', 0, '', '2018-05-15 17:22:17', 1),
(4, '64.233.173.28', 'freedomme', 'freedomme@my.in', 6, 'One Day Rock Climbing  ปีนเขาวันเดียว', 'the hotel in toew room 554', 4, 2000, 1711, 6844, 0, 0, '2018-05-23', '2018-05-15', 0, '', 0, '', '2018-05-15 17:56:27', 1),
(5, '183.89.49.193', 'มุฮัมหมัด ซัดอาลี', 'email@hgto.th', 3, 'Tour with John Gray Sea Canoe', 'hotel room 234 \r\ni am เทศ ไม่ให้ทิปด้วย', 4, 4000, 3950, 15800, 0, 0, '2018-05-18', '2018-05-16', 1, '183.89.49.193', 3, 'tom2018', '2018-05-16 05:33:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `cat_section` varchar(25) NOT NULL,
  `allow_user_change` int(11) NOT NULL,
  `cat_show_public` int(11) NOT NULL,
  `has_content` int(11) NOT NULL,
  `cat_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cat_id`, `cat_title`, `cat_section`, `allow_user_change`, `cat_show_public`, `has_content`, `cat_user_id`) VALUES
(1, 'Ajax', 'Programming', 0, 1, 1, 1),
(2, 'Ajax Article From Internet', 'Programming', 0, 1, 1, 1),
(3, 'Programming', 'Programming', 0, 1, 1, 1),
(4, 'Copy From net', 'COPY', 0, 1, 12, 1),
(5, 'Keep it a memory', 'SOCIAL', 0, 1, 3, 1),
(6, 'คำคม copy จากชาวบ้านมา', 'COPY_From_net', 0, 1, 0, 1),
(7, 'software installer', 'KNOWLEDGE', 0, 1, 1, 1),
(8, 'Fix it problem', 'System Ubuntu', 0, 1, 1, 1),
(9, 'Fix it problem Website', 'programming', 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `c_id` int(11) NOT NULL,
  `c_section_name` varchar(25) NOT NULL,
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

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notice_id`, `notice_title`, `notice_body`, `notice_ip`, `by_user_name`, `notice_link`, `notice_date`, `notice_read`) VALUES
(1, 'New register from 183.89.49.193 on 2018-05-15', 'New Register from user farook E-Mail firefrook@gmail.com on 2018-05-15  IP 183.89.49.193 OS Linux Browser Opera version 53.0.2907.37', '183.89.49.193', 'farook', '', '2018-05-15 17:04:23', 0),
(2, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-15 05:06:22.', '183.89.49.193', 'farook', '', '2018-05-15 17:06:22', 0),
(3, 'New Login from 183.89.49.193 name tee2018', 'The user name tee2018 has login using IP 183.89.49.193 on 2018-05-15 05:07:57.', '183.89.49.193', 'tee2018', '', '2018-05-15 17:07:57', 0),
(4, 'New Login from 183.89.49.193 name tee2018', 'The user name tee2018 has login using IP 183.89.49.193 on 2018-05-15 05:09:26.', '183.89.49.193', 'tee2018', '', '2018-05-15 17:09:26', 0),
(5, 'New Login from 183.89.49.193 name tom2018', 'The user name tom2018 has login using IP 183.89.49.193 on 2018-05-15 05:11:26.', '183.89.49.193', 'tom2018', '', '2018-05-15 17:11:26', 0),
(6, 'New Login from 1.47.203.218 name tee2018', 'The user name tee2018 has login using IP 1.47.203.218 on 2018-05-15 05:13:20.', '1.47.203.218', 'tee2018', '', '2018-05-15 17:13:20', 0),
(7, 'New Login from 1.46.40.249 name tee2018', 'The user name tee2018 has login using IP 1.46.40.249 on 2018-05-15 05:15:05.', '1.46.40.249', 'tee2018', '', '2018-05-15 17:15:05', 0),
(8, 'New booking from 183.89.49.193 on 2018-05-15', 'The user ip 183.89.49.193 has booking on 2018-05-15', '183.89.49.193', 'mente', '', '2018-05-15 05:22:17', 0),
(9, 'New Login from 1.46.40.249 name farook', 'The user name farook has login using IP 1.46.40.249 on 2018-05-15 05:47:08.', '1.46.40.249', 'farook', '', '2018-05-15 17:47:09', 0),
(10, 'New booking from 64.233.173.28 on 2018-05-15', 'The user ip 64.233.173.28 has booking on 2018-05-15', '64.233.173.28', 'freedomme', '', '2018-05-15 05:56:28', 0),
(11, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-15 08:18:24.', '183.89.49.193', 'farook', '', '2018-05-15 20:18:24', 0),
(12, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-15 08:58:46.', '183.89.49.193', 'farook', '', '2018-05-15 20:58:46', 0),
(13, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-16 04:09:56.', '183.89.49.193', 'farook', '', '2018-05-16 04:09:56', 0),
(14, 'New Login from 1.47.203.218 name tee2018', 'The user name tee2018 has login using IP 1.47.203.218 on 2018-05-16 05:17:47.', '1.47.203.218', 'tee2018', '', '2018-05-16 05:17:47', 0),
(15, 'New Login from 183.89.49.193 name tee2018', 'The user name tee2018 has login using IP 183.89.49.193 on 2018-05-16 05:20:24.', '183.89.49.193', 'tee2018', '', '2018-05-16 05:20:24', 0),
(16, 'New Login from 183.89.49.193 name tom2018', 'The user name tom2018 has login using IP 183.89.49.193 on 2018-05-16 05:22:59.', '183.89.49.193', 'tom2018', '', '2018-05-16 05:22:59', 0),
(17, 'New booking from 183.89.49.193 on 2018-05-16', 'The user ip 183.89.49.193 has booking on 2018-05-16', '183.89.49.193', 'มุฮัมหมัด ซัดอาลี', '', '2018-05-16 05:29:09', 0),
(18, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-16 06:30:27.', '183.89.49.193', 'farook', '', '2018-05-16 06:30:28', 0),
(19, 'New Login from 1.46.40.249 name tom2018', 'The user name tom2018 has login using IP 1.46.40.249 on 2018-05-16 09:34:36.', '1.46.40.249', 'tom2018', '', '2018-05-16 09:34:36', 0),
(20, 'New cahnge from moderate tom2018 on Article', 'moderate tom2018 Has modifiles item 3  to Article by ip 1.46.40.249 on 2018-05-16 09:37:15', '1.46.40.249', 'tom2018', '', '2018-05-16 09:37:15', 0),
(21, 'New Login from 182.232.211.29 name tom2018', 'The user name tom2018 has login using IP 182.232.211.29 on 2018-05-16 11:01:30.', '182.232.211.29', 'tom2018', '', '2018-05-16 11:01:30', 0),
(22, 'New Login from 1.47.203.218 name tom2018', 'The user name tom2018 has login using IP 1.47.203.218 on 2018-05-17 08:08:32.', '1.47.203.218', 'tom2018', '', '2018-05-17 08:08:32', 0),
(23, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-17 09:41:31.', '183.89.49.193', 'farook', '', '2018-05-17 09:41:31', 0),
(24, 'New Login from 1.47.203.218 name tom2018', 'The user name tom2018 has login using IP 1.47.203.218 on 2018-05-17 09:53:45.', '1.47.203.218', 'tom2018', '', '2018-05-17 09:53:45', 0),
(25, 'New Login from 183.89.49.193 name farook', 'The user name farook has login using IP 183.89.49.193 on 2018-05-17 09:56:54.', '183.89.49.193', 'farook', '', '2018-05-17 09:56:54', 0),
(26, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-17 10:20:47.', '183.89.48.63', 'farook', '', '2018-05-17 22:20:47', 0),
(27, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 06:57:36.', '183.89.48.63', 'farook', '', '2018-05-18 06:57:36', 0),
(28, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 07:05:50.', '183.89.48.63', 'farook', '', '2018-05-18 07:05:50', 0),
(29, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:56:25.', '183.89.48.63', 'farook', '', '2018-05-18 08:56:25', 0),
(30, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:57:00.', '183.89.48.63', 'farook', '', '2018-05-18 08:57:00', 0),
(31, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:57:10.', '183.89.48.63', 'farook', '', '2018-05-18 08:57:10', 0),
(32, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:57:27.', '183.89.48.63', 'farook', '', '2018-05-18 08:57:27', 0),
(33, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:57:36.', '183.89.48.63', 'farook', '', '2018-05-18 08:57:36', 0),
(34, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:58:06.', '183.89.48.63', 'farook', '', '2018-05-18 08:58:06', 0),
(35, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:58:34.', '183.89.48.63', 'farook', '', '2018-05-18 08:58:34', 0),
(36, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:58:34.', '183.89.48.63', 'farook', '', '2018-05-18 08:58:34', 0),
(37, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 08:59:54.', '183.89.48.63', 'farook', '', '2018-05-18 08:59:54', 0),
(38, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:11:36.', '183.89.48.63', 'farook', '', '2018-05-18 09:11:36', 0),
(39, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:11:38.', '183.89.48.63', 'farook', '', '2018-05-18 09:11:38', 0),
(40, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:12:03.', '183.89.48.63', 'farook', '', '2018-05-18 09:12:03', 0),
(41, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:12:07.', '183.89.48.63', 'farook', '', '2018-05-18 09:12:07', 0),
(42, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:12:24.', '183.89.48.63', 'farook', '', '2018-05-18 09:12:24', 0),
(43, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:12:36.', '183.89.48.63', 'farook', '', '2018-05-18 09:12:36', 0),
(44, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:13:14.', '183.89.48.63', 'farook', '', '2018-05-18 09:13:14', 0),
(45, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:13:15.', '183.89.48.63', 'farook', '', '2018-05-18 09:13:15', 0),
(46, 'New Login from 183.89.48.63 name farook', 'The user name farook has login using IP 183.89.48.63 on 2018-05-18 09:23:45.', '183.89.48.63', 'farook', '', '2018-05-18 09:23:45', 0),
(47, 'new Create in article table from Farook Fuu Time', 'The user name Farook Fuu Time \n            has made Create in article table on 2018-05-18 02:47:51\n            the action from user name Farook Fuu Time using IP 183.89.48.63 os Linux Browser Firefox version 60.0\n            ', '183.89.48.63', 'Farook Fuu Time', '', '2018-05-18 14:47:52', 0),
(48, 'new read Article by user Farook Fuu Time on 2018-05-18 10:41:34', 'The user name Farook Fuu Time has read aticle id 3\n            on 2018-05-18 10:41:34 this operation has done by os Linux browserBrowser Firefox version 60.0 IP 183.89.48.63 \n            \n            ', '183.89.48.63', 'Farook Fuu Time', '', '2018-05-18 10:41:34', 0),
(49, 'new read Article by user Farook Fuu Time on 2018-05-18 10:42:16', 'The user name Farook Fuu Time has read aticle id 3\n            on 2018-05-18 10:42:16 this operation has done by os Linux browserBrowser Firefox version 60.0 IP 183.89.48.63 \n            \n            ', '183.89.48.63', 'Farook Fuu Time', '', '2018-05-18 10:42:16', 0),
(50, 'new read Article by user Farook Fuu Time on 2018-05-19 07:00:56', 'The user name Farook Fuu Time has read aticle id 4\n            on 2018-05-19 07:00:56 this operation has done by os Linux browserBrowser Opera version 53.0.2907.37 IP 183.89.48.63 \n            \n            ', '183.89.48.63', 'Farook Fuu Time', '', '2018-05-19 07:00:56', 0),
(51, 'New cahnge from moderate tom2018 on Article', 'moderate tom2018 Has create new  item on Article table  to Article by ip 1.47.203.218 on 2018-05-19 10:11:32', '1.47.203.218', 'tom2018', '', '2018-05-19 10:11:32', 0),
(52, 'new read Article by user test on 2018-05-23 05:25:09', 'The user name test has read aticle id 6\n            on 2018-05-23 05:25:09 this operation has done by os Linux browserBrowser Opera version 53.0.2907.57 IP 183.88.110.240 \n            \n            ', '183.88.110.240', 'test', '', '2018-05-23 05:25:09', 0),
(53, 'new read Article by user test on 2018-05-31 06:47:58', 'The user name test has read aticle id 17\n            on 2018-05-31 06:47:58 this operation has done by os Linux browserBrowser Firefox version 60.0 IP 183.89.53.93 \n            \n            ', '183.89.53.93', 'test', '', '2018-05-31 06:47:58', 0),
(54, 'new read Article by user test on 2018-05-31 06:50:54', 'The user name test has read aticle id 13\n            on 2018-05-31 06:50:54 this operation has done by os Linux browserBrowser Firefox version 60.0 IP 183.89.53.93 \n            \n            ', '183.89.53.93', 'test', '', '2018-05-31 06:50:54', 0),
(55, 'New cahnge from moderate tom2018 on Article', 'moderate tom2018 Has modifiles item 8  to Article by ip 183.89.53.93 on 2018-05-31 07:07:45', '183.89.53.93', 'tom2018', '', '2018-05-31 07:07:45', 0),
(56, 'new read Article by user Farook Fuu Time on 2018-05-31 04:29:52', 'The user name Farook Fuu Time has read aticle id 17\n            on 2018-05-31 04:29:52 this operation has done by os Linux browserBrowser Opera version 53.0.2907.68 IP 183.89.53.93 \n            \n            ', '183.89.53.93', 'Farook Fuu Time', '', '2018-05-31 04:29:52', 0);

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
-- Table structure for table `tbl_tour`
--

CREATE TABLE `tbl_tour` (
  `t_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `t_name` varchar(250) NOT NULL,
  `t_summary` text NOT NULL,
  `t_program` text NOT NULL,
  `full_price` int(11) NOT NULL,
  `min_price` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `t_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tour`
--

INSERT INTO `tbl_tour` (`t_id`, `cat_id`, `user_id`, `t_name`, `t_summary`, `t_program`, `full_price`, `min_price`, `date_create`, `date_update`, `t_star`) VALUES
(3, 0, 3, 'Tour with John Gray Sea Canoe', 'FOR: All Phuket visitors. Rated tops on Trip Advisor!<br />\r\nWARNING: The first one isn’t “Free” but you may become addicted to ‘’John Gray’s Natural History By Sea Kayak”.<br />\r\nEnjoy an afternoon of sea cave exploring literally inside Phang Nga Bay’s marine geology, - including the caves and hidden lagoons John Gray found in 1989. Great nature and wildlife surrounds you.', '<div id=\"tourTabContent\" class=\"tab-content\">\r\n<div id=\"tab2\" class=\"tab-pane active\">\r\n<h2>FOR: All Phuket visitors. Rated tops on Trip Advisor!</h2>\r\n<p>WARNING: The first one isn&rsquo;t &ldquo;Free&rdquo; but you may become addicted to &lsquo;&rsquo;John Gray&rsquo;s Natural History By Sea Kayak&rdquo;.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><iframe src=\"//www.youtube.com/embed/aLJlQ-7cvlI\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>&nbsp;</p>\r\n<p>Enjoy an afternoon of sea cave exploring literally inside Phang Nga Bay&rsquo;s marine geology, - including the caves and hidden lagoons John Gray found in 1989. Great nature and wildlife surrounds you.</p>\r\n<p>Our World Famous Entry Trip starts mid-day to avoid the crowds, customized transfers included. Don&rsquo;t eat lunch &ndash; we serve you on board of our comfortable support boat. After lunch, briefing and a raptor show, a professional guide paddles you through Phang Nga Bay&rsquo;s &ldquo;Tidal Nape Sea Caves&rdquo; in our custom designed kayaks hand-made in Oregon by SOTAR, the World&rsquo;s premier white water raft manufacturer. The unique experience is dramatic, but Caveman&rsquo;s SOTAR custom kayaks are specially designed for your trip. We&rsquo;ve never capsized, punctured or had an accident.</p>\r\n<p>After a detailed briefing, your professional guide paddles you and your partner through &ldquo;Tidal Nape&rdquo; Sea Caves literally inside Phang Nga Bay&rsquo;s marine limestone karstic islands into &ldquo;Hongs&ldquo;(Thai for &ldquo;Room&rdquo;)</p>\r\n<p>The hidden cliff-lined lagoons are populated with macaques, water monitors, kingfishers, mudskippers, egrets, Sea Eagles and Brahminy Kites.</p>\r\n<p>We finish after dark by floating your own self-made flower &ldquo;Kratong&rdquo; in a spiritual and spectacular Natural light show. Eating our delicious seafood-vegan buffet on the trip back, you return to the pier two hours after sunset.</p>\r\n<p>Guests say our evening Loi Kratong ceremony complete with fireflies and dinoflagellates (bioluminescent plankton) is a \"Spiritual Experience\", \"Best Trip of our lives-anywhere\", and \"Best Thai Food We\'ve ever had &ndash; and on a boat\".</p>\r\n<p>We shop daily for the highest quality healthy ingredients. Seafood is net caught and chicken are free range. Brown, red, and black rice is served with &ldquo;Broke &lsquo;da Mouth&rdquo; homemade Masaman curry.</p>\r\n<p>And this is just the intro trip.<br />Pick-up &amp; Drop-off from entire Phuket Island by Luxury Mini-van included! Customized Van transfer one or two hour(s) before Departure, depending on location of accommodation.</p>\r\n<p>What to bring: towel, bathing clothes, dry &amp; warm clothes for the way back, sunglasses, sun cream, good weather and a camera or smart phone (at own risk&hellip; we do provide dry-bags&hellip; at your own risk;)</p>\r\n<p>For custom packages Click here</p>\r\n<p>Keep another Vacation Day Free For Click here</p>\r\n<h2>&nbsp;</h2>\r\n<h2>Itenary</h2>\r\n<p>&nbsp;</p>\r\n<table id=\"AutoNumber1\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1130 - 1230</strong></td>\r\n<td valign=\"top\" width=\"80%\">Hotel Pick-up</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1200 - 1300<br /></strong></td>\r\n<td valign=\"top\" width=\"80%\">Arrive Ao Po, Board our modern Twin-engine escort boat, Thai style light lunch, trip and Nature Game briefing</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1430</strong></td>\r\n<td valign=\"top\" width=\"80%\">Arrive first island and explore 1-2 caves and hongs</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1530</strong></td>\r\n<td valign=\"top\" width=\"80%\">Return to the escort boat and move to the second island</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1600</strong></td>\r\n<td valign=\"top\" width=\"80%\">Explore two more caves and hongs</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1800</strong></td>\r\n<td valign=\"top\" width=\"80%\">Thai seafood buffet dinner during Phang Nga Bay Sunset</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>1900</strong></td>\r\n<td valign=\"top\" width=\"80%\">Return to your kayak after dark to float your Loi Kratong</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>2000</strong></td>\r\n<td valign=\"top\" width=\"80%\">Depart for Ao Po.</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>2100</strong></td>\r\n<td valign=\"top\" width=\"80%\">Arrive Ao Po and transfer to your mini-van.</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\" width=\"20%\"><strong>2130-2200</strong></td>\r\n<td valign=\"top\" width=\"80%\">Drop off at your hotel. End of JGSC service.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><strong>NOTE:</strong> Trip itinerary may change according to the tides</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"http://www.johngray-seacanoe.com/templates/jgsc/images/hong_by_starlight_route_map.gif\" alt=\"img\" width=\"457\" height=\"540\" /></p>\r\n<p><strong>Tour include : What John Gray\'s Sea Canoe Costs Cover:</strong></p>\r\n<ul>\r\n<li>Hotel or Airport pick-up and drop off</li>\r\n<li>Escort boat (when applicable)</li>\r\n<li>John Gray\'s Sea Canoe gear</li>\r\n<li>John Gray\'s Sea Canoe well educated and experienced guides</li>\r\n<li>Full Board meal plan</li>\r\n<li>Soft Drinks and Water Camping and Cooking gear</li>\r\n<li>User fees</li>\r\n<li>John Gray\'s Sea Canoe Ground tours. (Trip itineraries lists any exceptions)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Do not include : John Gray\'s Sea Canoe Costs do not cover:</strong></p>\r\n<ul>\r\n<li>Airfares (unless stated), Hotels (unless stated), Ground transfers (except to and from Sea Canoe)</li>\r\n<li>Additional sightseeing- Visa/ Airport Fees</li>\r\n<li>Tips</li>\r\n<li>Excess baggage charges</li>\r\n<li>Medical Immunizations</li>\r\n<li>Alcoholic Beverages</li>\r\n<li>Medical or Travel Insurance.</li>\r\n<li>Medical and Hospitalization costs</li>\r\n<li>Emergency Evacuation costs</li>\r\n<li>Items of a Personal Nature</li>\r\n<li>Trip Delay compensation beyond the control of John Gray\'s Sea Canoe or our agents</li>\r\nJohn Gray\'s Sea Canoe holds public liability insurance with the New Hampshire Insurance Company. We advise all guests to take out travel and medical insurance before making a trip\r\n<li>John Gray\'s Sea Canoe reserves the right to make reasonable changes in your itinerary where deemed advisable for the comfort and well being of trip members</li>\r\n<li>By advancing your deposit to John Gray\'s Sea Canoe or our agents, you therefore agree to be bound by the above terms and conditions</li>\r\n</ul>\r\n</div>\r\n</div>', 3950, 1000, '2018-05-13 05:05:07', '2018-05-15 05:19:43', 0),
(5, 0, 19, 'touris is rocker', 'this is the tourrist is rocker', '<p>this i sthe nu,ber for the full time service</p>', 4500, 1000, '2018-05-14 11:15:50', '2018-05-14 23:15:50', 0),
(6, 0, 19, 'One Day Rock Climbing  ปีนเขาวันเดียว', 'Fun Fun rock climbing for one day Make fun together<br />\r\nแพ็คเกจนี้รวม:<br />\r\nทัวร์ปีนผาเต็มวัน (ใช้บริการทัวร์ร่วมกับลูกทัวร์ท่านอื่น)<br />\r\nมีอาหารกลางวัน<br />\r\nมีไกด์ภาษาอังกฤษนำทัวร์<br />\r\nไม่อนุญาตให้เด็กต่ำกว่า 12 ปี ร่วมทัวร์<br />\r\nช่วงเวลาทำการจอง:	10 พ.ย. 2017 ถึง 31 ธ.ค. 2018<br />\r\nช่วงเวลาที่เดินทาง:	10 พ.ย. 2017 ถึง 31 ธ.ค. 2018', '<p>&nbsp;</p>\r\n<table style=\"font-weight: 400;\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<h3>แพ็คเกจนี้รวม:</h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n<li>ทัวร์ปีนผาเต็มวัน (ใช้บริการทัวร์ร่วมกับลูกทัวร์ท่านอื่น)</li>\r\n<li>มีอาหารกลางวัน</li>\r\n<li>มีไกด์ภาษาอังกฤษนำทัวร์</li>\r\n<li>ไม่อนุญาตให้เด็กต่ำกว่า 12 ปี ร่วมทัวร์</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table style=\"font-weight: 400;\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td><strong>ช่วงเวลาทำการจอง:</strong></td>\r\n<td>10 พ.ย. 2017&nbsp;ถึง&nbsp;31 ธ.ค. 2018</td>\r\n</tr>\r\n<tr>\r\n<td><strong>ช่วงเวลาที่เดินทาง:</strong></td>\r\n<td>10 พ.ย. 2017&nbsp;ถึง&nbsp;31 ธ.ค. 2018</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td colspan=\"2\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style=\"font-weight: 400;\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<h3>ทัวร์ปีนผาเต็มวัน&nbsp;</h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p><strong>ทัวร์ปีนหน้าผาโดย&nbsp;</strong><strong>King Climbers Railay Beach</strong></p>\r\n<p>King Climbers ก่อตั้งมาเป็นเวลากว่า 10 ปี เรามีคอร์สต่างๆ ไว้รองรับนักปีนผาทุกระดับความสามารถ ไม่ว่าท่านจะอายุมากหรือน้อย อ้วนหรือผอม มีทักษะหรือไม่ ครูสอนปีนผาของเราสามารถแนะนำสถานที่ที่ท่านจะลองปีนได้&nbsp;</p>\r\n<p>สำหรับท่านที่ชอบความท้าทาย เรามีเส้นทางกว่า 400 เส้นทางให้เลือก เรายังมีเส้นทางมาตรฐานไว้รองรับอีกด้วย (ดูรายละเอียดด้านล่าง) คอร์สเหล่านี้ออกแบบมาสำหรับผู้เริ่มต้นและนักปีนผาระดับกลาง หากท่านมองหากิจกรรมอย่างอื่น หรืออยากจะเรียนคอร์สอื่นต่อ เรายินดีที่จะอำนวยความสะดวกท่านอย่างเต็มที่&nbsp;</p>\r\n<p><strong>รายการทัวร์</strong><strong>:</strong></p>\r\n<p>08.30 น. รถรับจากโรงแรม</p>\r\n<p>09.00 น. ภาคเช้าจะเหมือนกับทัวร์ครึ่งวัน</p>\r\n<p>12.00 น. พักกลางวัน</p>\r\n<p>13.00 น. เดินชมหาดพระนาง ไปชมถ้ำ \"เขาหลักฉุย\"</p>\r\n<p>- ครูสอนปีนผาจะขึ้นไปขึงเชือกเชื่อมจุดต่างๆบนผาเข้าด้วยกัน (จุดปลอดภัย)</p>\r\n<p>- นักเรียนจะได้เรียนเทคนิคการโรยตัว (ค่อยๆหย่อนตัวลงมาที่พื้นล่าง)</p>\r\n<p>- ปีนต่อไปเส้นทางอื่นๆ</p>\r\n<p>18.00 น. จบคอร์สปีนผาตอนเย็น</p>\r\n<p>ไม่อนุญาตให้เด็กอายุต่ำกว่า 12 ปี ร่วมทัวร์</p>\r\n<p>อุปกรณ์: ราคาคอร์สเหล่านี้รวมค่าไกด์และอุปกรณ์ต่างๆ สิ่งที่ท่านต้องนำมาเอง คือกล้องถ่ายรูป!</p>\r\n<p><strong><u>หมายเหตุสำคัญ</u></strong><strong><u>&nbsp;:</u></strong></p>\r\n<p>-&nbsp;<strong>โปรดทราบ! เมื่อท่านจองกับเรา&nbsp;</strong>กรุณาใช้ชื่อเดียวกับที่ท่านใช้เช็คอินที่โรงแรมเพื่อหลีกเลี่ยงความเข้าใจผิดเมื่อเจ้าหน้าที่ทัวร์ไปรับท่านที่ล็อบบี้โรงแรม</p>\r\n<p>&nbsp;-&nbsp;<strong>หากท่านใช้ชื่ออื่นในการจองทัวร์&nbsp;</strong>กรุณาโทรแจ้งหมายเลขห้องพักให้เราทราบก่อนวันทัวร์ เพื่อสะดวกในการตามตัวท่านที่โรงแรม หากท่านไม่ได้แจ้งหมายเลขห้องพักให้เราทราบ และเราไม่สามารถตามตัวท่านมาขึ้นรถทัวร์ได้ (no show) Asiatravel ขอสงวนสิทธิ์ในการเรียกเก็บค่าใช้จ่ายจากท่าน ในกรณีที่ท่านไม่มาแสดงตัวตามเวลาที่นัดหมายไว้</p>\r\n<p>&nbsp;-&nbsp;<strong>บริการรับ-ส่ง เป็นบริการสำหรับโรงแรมในเมืองกระบี่และอ่าวนางเท่านั้น</strong>&nbsp;ส่วนท่านที่พัก ณ หาดไร่เลย์ จะมีบริการเรือหางยาวรับ-ส่ง : ราคาสุทธิ 1,100 บาท /เรือส่วนตัว 1 ลำ/เที่ยว ซึ่งเจ้าหน้าที่แผนกสำรองทัวร์จะแจ้งท่านเมื่อทำจอง</p>\r\n<p><strong>กรุณาโทรติดต่อเอเชียทราเวลได้ที่หมายเลข: +66 2 6797185 หรือ +66 2 6797187 เพื่อสอบถามข้อมูลเพิ่มเติม</strong></p>\r\n<p><strong>Pickup Time:</strong>&nbsp;08.30 น. เช้า</p>\r\n<p><strong>Tour Starts Time:</strong>&nbsp;09.00 น. เช้า</p>\r\n<p><strong>Duration:</strong>&nbsp;9.5 ช.ม.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"http://packages.asiatravel.com/packageImage/Tour/AddtlImages/202/One%20Day%20Rock%20Climbing%202.jpg\" alt=\"\" width=\"450\" height=\"291\" />&nbsp;&nbsp;<img src=\"http://packages.asiatravel.com/packageImage/Tour/AddtlImages/202/One%20Day%20Rock%20Climbing%206.jpg\" alt=\"\" width=\"400\" height=\"271\" />&nbsp;<img src=\"http://packages.asiatravel.com/packageImage/Tour/AddtlImages/202/Railay%20Beach1.jpg\" alt=\"\" width=\"489\" height=\"300\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"http://packages.asiatravel.com/packageImage/Tour/AddtlImages/202/One%20Day%20Rock%20Climbing1.jpg\" alt=\"\" width=\"550\" height=\"300\" /></p>\r\n<p>&nbsp;</p>\r\n<table style=\"font-weight: 400; height: 328px;\" width=\"1472\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 1462px;\">\r\n<h3>ทัวร์ปีนผาเต็มวัน&nbsp;</h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 1462px;\">\r\n<p>โปรดมารอที่ล็อบบี้โรงแรมล่วงหน้า 10 นาที ก่อนเวลารถมารับไกด์นำเที่ยวจะรอท่านที่ล็อบบี้โรงแรมอยู่ประมาณ 10 นาที นับจากเวลาที่นัดหมายกันไว้ในกรณีที่เราไม่สามารถตามตัวท่านได้รถทัวร์จะออกตามเวลาที่กำหนด และท่านจะไม่สามารถขอรับเงินค่าทัวร์คืนได้แม้ว่าท่านจะไม่ได้ร่วมทัวร์</p>\r\n<p><strong>-&nbsp;</strong><strong>โปรดทราบ! เมื่อท่านจองกับเรา&nbsp;</strong>กรุณาใช้ชื่อเดียวกับที่ท่านใช้เช็คอินที่โรงแรม เพื่อหลีกเลี่ยงการเข้าใจผิด เมื่อเจ้าหน้าที่ทัวร์ของเรามารับท่านที่ล็อบบี้โรงแรม</p>\r\n<p><strong>- หากท่านใช้ชื่ออื่นในการจองทัวร์&nbsp;</strong>กรุณาโทรแจ้งหมายเลขห้องพักให้เราทราบก่อนวันทัวร์ เพื่อสะดวกในการตามตัวท่านที่โรงแรม หากท่านไม่ได้แจ้งหมายเลขห้องพักให้เราทราบ และเราไม่สามารถตามตัวท่านมาขึ้นรถทัวร์ได้ (no show) Asiatravel ขอสงวนสิทธิ์ในการเรียกเก็บค่าใช้จ่ายจากท่าน ในกรณีที่ท่านไม่มาแสดงตัวตามเวลาที่นัดหมายไว้</p>\r\n<p>&nbsp;-&nbsp;<strong>บริการรับ-ส่ง เป็นบริการสำหรับโรงแรมในเมืองกระบี่และอ่าวนางเท่านั้น</strong>&nbsp;ส่วนท่านที่พัก ณ หาดไร่เลย์ จะมีบริการเรือหางยาวรับ-ส่ง : ราคาสุทธิ 1,100 บาท /เรือส่วนตัว 1 ลำ/เที่ยว ซึ่งเจ้าหน้าที่แผนกสำรองทัวร์จะแจ้งท่านเมื่อทำจอง</p>\r\n<p>ค่าทิปคนขับรถและไกด์นำเที่ยวไม่รวมอยู่ในราคาแพ็คเกจ ท่านสามารถพิจารณาให้ทิปได้ตามอัธยาศัย&nbsp;</p>\r\n<p>รายการทัวร์อาจมีการเปลี่ยนแปลง ทั้งนี้ขึ้นกับสภาพการจราจรหรือสภาพอากาศ</p>\r\n<p><strong>-&nbsp;</strong><strong>สำหรับข้อมูลเพิ่มเติม</strong>&nbsp;กรุณาโทรติดต่อเอเชียทราเวลได้ที่หมายเลข: +66 2 6797185, +66 2 6797187 (09.00 น. - 20.00 น. ทุกวัน)</p>\r\n<p><strong>- สำหรับบริการรถรับ-ส่งในช่วงเช้าเพื่อไปร่วมทัวร์และการเดินทาง&nbsp;</strong>กรุณาติดต่อที่หมายเลขฮอทไลน์สายด่วน : +66 90 984 5180 (24 ช.ม.)</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table style=\"height: 381px;\" width=\"1499\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 1495px;\">\r\n<h3><span id=\"UCDPackageOverview_UCDPackageOverviewTermsConditions_Label_TermsConditions\">ข้อตกลงและเงื่อนไข</span></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 1495px;\">\r\n<ul>\r\n<li>ชื่อลูกค้าที่ระบุในแบบฟอร์มการจอง จะต้องตรงกับชื่อในหนังสือเดินทาง</li>\r\n<li>สำหรับวีซ่าเข้าเมืองและวีซ่าทรานซิท จะต้องใช้หนังสือเดินทางที่มีอายุคงเหลืออย่างน้อย 6 เดือน หลังจากสิ้นสุดการเดินทางแล้ว</li>\r\n<li>การยื่นคำร้องขอวีซ่าเข้าประเทศหรือวีซ่าทรานซิท ถือเป็นความรับผิดชอบของลูกค้า</li>\r\n<li>การตรวจสอบข้อผิดพลาดอย่างถี่ถ้วนเมื่อได้รับรายละเอียดการจอง กำหนดการเที่ยวบิน และเอกสารการเดินทาง (Travel Voucher) ถือเป็นความรับผิดชอบของลูกค้า</li>\r\n<li>โปรดตรวจสอบสกุลเงินที่ปรากฏในแพคเก็จให้ถูกต้อง สกุลเงินที่ปรากฏนั้นจะเป็นจำนวนเงินที่ลูกค้าต้องชำระ</li>\r\n<li>ราคาสามารถเปลี่ยนแปลงได้ โดยอาจมีค่าธรรมเนียมช่วงฤดูท่องเที่ยวและวันหยุดเพิ่มเข้ามา</li>\r\n<li>พนักงานของเอเชียทราเวลมีหน้าที่ให้ข้อมูลเพื่อการเสนอแนะเท่านั้น และจะไม่รับผิดชอบในกรณีที่มีการเปลี่ยนแปลงข้อมูลเป็นอื่น</li>\r\n<li>ก่อนการออกเอกสารการเดินทาง ราคาตั๋วและเงื่อนไขอาจเปลี่ยนแปลงได้ โดยไม่ต้องแจ้งล่วงหน้า</li>\r\n<li>ราคาสามารถเปลี่ยนแปลงได้จนกว่าจะได้รับการชำระเงินเต็มจำนวนจากลูกค้า และมีการออกเอกสารการเดินทางแล้วเท่านั้น</li>\r\n<li>เอเชียทราเวลขอสงวนสิทธิ์ในการยกเลิกการจองในกรณีที่จำเป็น</li>\r\n<li>การยกเลิก/การเปลี่ยนแปลงแก้ไขการจองอาจมีค่าธรรมเนียมเพิ่มเติม กรุณาอ่านนโยบายเรื่องการยกเลิก/การเปลี่ยนแปลงแก้ไขการจองของเอเชียทราเวลเพื่อความเข้าใจของท่าน</li>\r\n<li>แพคเก็จไม่สามารถโอนให้ผู้อื่นและไม่สามารถแลกเปลี่ยนเป็นสินค้าหรือบริการใดๆได้</li>\r\n<li>การเปลี่ยนแปลงแก้ไขรายละเอียดการจองใดๆ หลังจากที่บริษัทได้ออกเอกสารการเดินทางให้ลูกค้าแล้ว จะถือว่าเป็นการยกเลิกการจองเดิม และจะมีค่าธรรมเนียมในการยกเลิกการจอง กรุณาอ่านนโยบายเรื่องการยกเลิกการจองของเอเชียทราเวลเพื่อความเข้าใจของท่าน</li>\r\n<li>ลูกค้าจะต้องให้อีเมลล์ที่ถูกต้อง และยินยอมให้อีเมลล์ดังกล่าวเป็นสื่อกลางในการติดต่อสื่อสารกับเอเชียทราเวล รับเอกสารการเดินทางและอีเมล์ยืนยันการจอง ทั้งนี้ เอเชียทราเวลจะไม่รับผิดชอบต่อเอกสารการเดินทางหรืออีเมล์ยืนยันการจองที่ท่านไม่ได้รับ</li>\r\n<li>www.asiatravel.com อาจขอให้ลูกค้าส่งสำเนาบัตรเครดิต (ทั้งด้านหน้าและหลัง) และส่งแบบฟอร์มมอบอำนาจการชำระเงินด้วยบัตรเครดิตกลับมา อันเป็นขั้นตอนในการตรวจสอบและปกป้องลูกค้าจากการถูกโจรกรรมบัตรเครดิตไปใช้โดยบุคคลที่ 3 เจ้าหน้าที่สำรองทัวร์อาจขอความร่วมมือข้างต้นจากลูกค้า แม้ว่าลูกค้าอาจชำระเงินผ่านบัตรเครดิตเรียบร้อยแล้ว ลูกค้ายินยอมส่งมอบเอกสารดังกล่าวให้แก่ www.asiatravel.com ตามที่เจ้าหน้าที่สำรองทัวร์ได้แจ้งไป</li>\r\n<li>กรุณาอย่านำตั๋วไปขายต่อให้แก่บุคคลอื่น</li>\r\n<li>ตั๋วนี้เป็นตั๋วสำหรับนักท่องเที่ยวชาวต่างชาติและนักท่องเที่ยวในประเทศ</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Copy From&nbsp;&nbsp;http://packages.asiatravel.com/packagebooking/package.search.aspx?lan=th-TH&amp;scode=PWS79492SG&amp;pid=1331</p>\r\n<p>&nbsp;</p>', 1711, 500, '2018-05-15 01:28:23', '2018-05-15 04:56:59', 0),
(7, 0, 1, 'Bird watching with Tom | ทัวร์ดูนก', '2 days 1 night bird watching @Trung by Tom', '<p>bird wathing</p>\r\n<p><span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>1-2.ภูเก็ต-ตรัง วัดถ้ำเสือกระบี่ นอนตรัง<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>Thammarin Thana Hotelรุ่งเช้าลงอ่าวปากเมง(ถ้ำมรกต-เกาะกระดาน) กลับมานอนThammarin Thana Hotel อีกคืน<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>3.ตรัง-พัทลุง แวะถ้ำเลเขากอบ-ทะเลน้อย นอนศรีปากประ รุ่งเช้าลงเรือดูควายน้ำ บัว<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>4.ตรัง-นคร แวะคีรีวงศ์ บ้านหนังตลุงศรีสุชาติ เช็คอินทวินโลตัส<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>5.นคร-ขนอม เข้าชมวัดพระธาตุ เดินทางไปขนอมแวะถ้ำเขาวังทอง เช็คอิน อลงกตรีสอร์ทขนอม<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>6.ขนอม-สุราษฎร์ธานี ลงเรือหางยาวชมแม่น้ำตาปี เช็คอินไดมอนด์ พลาซ่า ดินเนอร์กินผัดไทยตลาดศาลเจ้า<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>7.กลับภูเก็ต-เขาหลัก แวะlunchที่ภูผาลำธาร - ตลาดนัดวันอาทิตย์ตะกั่วป่า ส่งที่พัก..<span data-ccp-props=\"{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}\">&nbsp;</span></p>\r\n<p>&nbsp;</p>\r\n<p><img src=\"https://lh3.googleusercontent.com/E9HjCdPps-bP30bU311TwUCFByxajq39W-GGtsGtjhQsI6uegmhwdMrq4df9QsBDFCJ2x0mi2rgTlNgXPzcDu0AsW6SgrpwobMa-mCeNkRE_P1QyB2PdaWwb830c4vXdbAPTgzMokllvZM8N6ChjZGsWC2cCehSFZH9-1S8lZfiJV7-dwxPanYjjzvUj194C6Z-8D3URTW-F3XjgarSkmrXk_5XEouizzKUpZLvhczy5HwP2G3uQGZmwRddfi-fBRsa0RGEJLuLVMwBnJIlPKlsuAPE1lwWs4nRhyec5KPAW3psmGOAp2tVsDz0xWVzBmXs_r-J6LJCQxWoZqjHos5MjqgOInJSo2b7bxmm_yHwT_B0W64amY9Bjpd4rRIELD9wkVPNZbL8-4j6vCkXKI_mXhNkJU3H2yfnRczSk9wADy5vz9V9cGarVqcjEkQ9WA-n6YBdnszgUjOVE5m91DsAYl_tYLlGNlHdbPdq7KoqNSDOd5KH8a3i4KI7ZNRItGaH7UAkrpfh8Lt_Q2hspqkuxkw4PV7J2PYl1H6J0O_LUQMvZ9NjlQsaNkJbCOOOhD9U8Dh0u2YOzYvG8p5rKmlW2QGwuGtuj-iJGr8wc=w1196-h668-no\" alt=\"\" width=\"1196\" height=\"668\" /></p>', 5000, 1500, '2018-05-17 09:52:43', '2018-05-17 10:24:19', 0),
(8, 0, 1, '1 day Kaeng Krachan Bird Watching Day Trip by P\'Tu', '1 day Kaeng Krachan Bird Watching Day Trip by P\'Tung | ทัวร์ดูนกสุดชิค ที่แก่งกระจาน กับพี่ตุ้ง eagle Eye.', '<h3 class=\"projects-title\">Trip Summary</h3>\r\n<ul class=\"iconlist\">\r\n<li><strong> Duration:</strong> 1 Day</li>\r\n<li><strong> Trip Grade:</strong> Easy</li>\r\n<li><strong> Group Style:</strong> Private Tour</li>\r\n<li><strong> Group Size:</strong> 1 to 8 persons</li>\r\n<li><strong> Season:</strong> Nov to April</li>\r\n<li><a class=\"link\" href=\"http://www.thailandbirdwatching.com/bird-lists/kaeng-krachan-bird-watching.php\">Kaeng Krachan Bird List</a>&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"http://www.thailandbirdwatching.com/images/one-day/kaeng-krachan-02.jpg\" alt=\"\" width=\"700\" height=\"465\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"http://www.thailandbirdwatching.com/images/one-day/kaeng-krachan-03.jpg\" alt=\"\" width=\"650\" height=\"432\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"http://www.thailandbirdwatching.com/images/one-day/kaeng-krachan-04.jpg\" alt=\"\" width=\"650\" height=\"432\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"http://www.thailandbirdwatching.com/images/one-day/kaeng-krachan-05.jpg\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">Nestled on the western brink of the country four-hours drive from Bangkok is a wilderness unparalleled for its rich diversity of birds, large mammals and flora. <strong>Kaeng Krachan</strong> is <strong>Thailand\'s largest national par</strong>k (2,914 sq km) and part of a continuous forest complex covering 30,000 sq km of land spanning the border with Myanmar. The park lies at the junction of biogeographic zones so biodiversity in the area is a mix of Indo-Burmese and Malaysian forms.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>activities. The waterways turn from trickles at their sources to raging water columns in mid-course, to gentle meandering wide streams in the lowlands. Along these waterways lie mineral licks and wallows fed by smaller forest streams where a plethora of fauna including Fea\'s barking deer, Tapir, Asian elephant come to feed. Tiger, Asiatic leopard, and wild dog lurk along trails leading to the mineral licks waiting for these prey species to emerge in the dead of night. Endangered Siamese crocodile nest along the banks of the Petchburi River. The Banded leaf monkey is also commonly seen.</p>\r\n<p>&nbsp;</p>\r\n<p>Spanning altitudes ranging from 300 to 1,513m, Kaeng Krachan hosts a diversity of vegetation and is home to a rich bird fauna. Over 400 species are recorded, including the rare Ratchet-tailed treepie, found nowhere else in Thailand. Yellow-vented and White-bellied Pigeons, Grey Peacock Pheasant, six species of hornbill and seven kinds of broadbill are also present.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h2><strong><a href=\"http://folio.clickmedesign.com/\">http://folio.clickmedesign.com/</a>&nbsp;create thailand bird watching&nbsp;</strong></h2>\r\n<div class=\"main-text\">\r\n<h1><strong>Itinerary</strong></h1>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n<div class=\"col-md-1\"><strong>04:00</strong></div>\r\n<div class=\"col-md-11\">Pick up from your Hotel in Bangkok,and take about 3.30 hours from Bangkok.</div>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n<div class=\"col-md-1\"><strong>07:30</strong></div>\r\n<div class=\"col-md-11\">Arrive at Kaeng Krachan National Park/Drive up to Phanern Thung Summit,to explore Ratchet-tailed Treepie,White-hooded Babbler,White-browed Shrike-Babbler,Orange-bellied Leafbird, Streaked Spiderhunter,Mountain Imperial Pigeon and other species. Breakfast/ 9 O\'clock drive down to km.27,the others point to explore Ratchet-tailed Treepie,Red-headed Trogon,Great,Wreathed Hornbill,Golden Babbler,Lesser Racket-tailed Drongo,Green Magpie and many more..!</div>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n<div class=\"col-md-1\"><strong>12:00</strong></div>\r\n<div class=\"col-md-11\">Lunch.</div>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n<div class=\"col-md-1\"><strong>13:30</strong></div>\r\n<div class=\"col-md-11\">Continue to afternoon program,to explore Blue Pitta,Stork-billed Kingfisher,Black-backed Kingfisher,Green Magpie,Banded Broadbill,Black-and-Yellow Broadbill,Long-tailed Broadbill,Great-slaty Woodpecker,Silver-breasted Broadbill, Sultan Tit,Velvet-fronted Nuthatch,Grey-headed Flycatcher and other birds.</div>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n<div class=\"col-md-1\"><strong>17:00</strong></div>\r\n<div class=\"col-md-11\">Transfer back to your hotel in Bangkok.</div>\r\n<div class=\"col-md-11\">&nbsp;</div>\r\n<div class=\"col-md-11\">&nbsp;</div>\r\n<div class=\"col-md-11\">&nbsp;</div>\r\n<div class=\"col-md-11\">&nbsp;</div>\r\n<div class=\"content-tab\">\r\n<div class=\"content-inner active\">\r\n<div class=\"toggle-content\">\r\n<div class=\"col-md-6 col-sm-12\">- English-speaking Bird leader</div>\r\n<div class=\"col-md-6 col-sm-12\">- Park entrance fees (400 Baht/per/person)</div>\r\n<div class=\"col-md-6 col-sm-12\">- Refreshment</div>\r\n<div class=\"col-md-6 col-sm-12\">- Insurance</div>\r\n<div class=\"col-md-6 col-sm-12\">- Vat 7%</div>\r\n<div class=\"col-md-6 col-sm-12\">- Bird check list</div>\r\n<div class=\"col-md-6 col-sm-12\">- Transportations</div>\r\n<div class=\"col-md-6 col-sm-12\">- Meals, Fruits, Coffee and Tea</div>\r\n</div>\r\n</div>\r\n<!-- /.content-inner -->\r\n<div class=\"content-inder\">\r\n<div class=\"toggle-content\">\r\n<div class=\"col-md-6 col-sm-12\">- Any other service not mentioned in the programs</div>\r\n<div class=\"col-md-6 col-sm-12\">- Personal expenses</div>\r\n<div class=\"col-md-6 col-sm-12\">- All alcoholic.</div>\r\n</div>\r\n</div>\r\n<!-- /.content-inner -->\r\n<div class=\"content-inner\">\r\n<div class=\"toggle-content\"><strong>Preparation :</strong><br />\r\n<div class=\"col-md-6 col-sm-12\">- Light walking boots or sports shoes</div>\r\n<div class=\"col-md-6 col-sm-12\">- Spotting Scope and binoculars</div>\r\n<div class=\"col-md-6 col-sm-12\">- Long trousers and long sleeved shirt for walking in the forest</div>\r\n<div class=\"col-md-6 col-sm-12\">- Mosquito repellent,sun hat and sun cream</div>\r\n<div class=\"col-md-6 col-sm-12\">&nbsp;</div>\r\n<div class=\"col-md-6 col-sm-12\">&nbsp;</div>\r\n<div class=\"col-md-6 col-sm-12\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<!-- /.content-inner --></div>\r\n<!-- /.content-tab -->\r\n<h2><strong>program copy from :&nbsp;http://www.thailandbirdwatching.com/day-tours/kaeng-krachan-bird-watching-day-trip.php</strong></h2>\r\n<div class=\"line_orange\">&nbsp;</div>\r\n</div>', 7200, 2000, '2018-05-17 10:54:55', '2018-05-17 22:54:55', 0),
(9, 0, 1, 'Phang nga one day Bird watching | โปรแกรมดูนกที่พังา', 'one day Phang nga bird watching visit 2 places | โปรแกรมดูนกในจังหวัดพังงาเต็มวัน กับ 2 สถานที่สุดชิลลล', '<h1 style=\"text-align: center;\">Daytrip Phang nga bird watching&nbsp;&nbsp;</h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><img src=\"http://park.dnp.go.th/dnp/ptascene/1056scene250311_93310.jpg\" alt=\"\" width=\"640\" height=\"480\" /></p>\r\n<p style=\"text-align: center;\">Thank you photo from : http://oknation.nationtv.tv/blog/PeeThong/2013/09/15/entry-2</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<div class=\"table-responsive\">\r\n<table style=\"height: 274px; width: 865px; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<thead>\r\n<tr style=\"height: 28px;\">\r\n<th style=\"width: 855px; height: 28px;\" colspan=\"2\">Tour detail</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr style=\"height: 31px;\">\r\n<th style=\"width: 200px; height: 31px;\">06 : 00 a.m.</th>\r\n<td style=\"width: 649px; height: 31px;\">Pick up from your hotel</td>\r\n</tr>\r\n<tr style=\"height: 31px;\">\r\n<th style=\"width: 200px; height: 31px;\">07 : 30 a.m.</th>\r\n<td style=\"width: 649px; height: 31px;\">start in the first track birdwatching exploring the mangrove swamp</td>\r\n</tr>\r\n<tr style=\"height: 31px;\">\r\n<th style=\"width: 200px; height: 31px;\">10: 00 a.m.</th>\r\n<td style=\"width: 649px; height: 31px;\">start exploring the second point</td>\r\n</tr>\r\n<tr style=\"height: 31px;\">\r\n<th style=\"width: 200px; height: 31px;\">12: 00 p.m.</th>\r\n<td style=\"width: 649px; height: 31px;\">Lunch time at the most sweetest place</td>\r\n</tr>\r\n<tr style=\"height: 31.4688px;\">\r\n<th style=\"width: 200px; height: 31.4688px;\">13: 00 p.m.</th>\r\n<td style=\"width: 649px; height: 31.4688px;\">go on exploring at the Phang nga lagoon</td>\r\n</tr>\r\n<tr style=\"height: 32px;\">\r\n<th style=\"width: 200px; height: 32px;\">17: 40 p.m.</th>\r\n<td style=\"width: 649px; text-align: center; height: 32px;\">return the hotel</td>\r\n</tr>\r\n<tr style=\"height: 32px;\">\r\n<th style=\"width: 200px; height: 32px;\">price / deposite</th>\r\n<td style=\"width: 649px; text-align: center; height: 32px;\">full price per person 4500 / deposite per person 1500</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 4500, 1500, '2018-05-28 11:40:58', '2018-05-28 11:47:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_status`
--

CREATE TABLE `tbl_user_status` (
  `st_id` int(11) NOT NULL,
  `st_user_id` int(11) NOT NULL,
  `uniq_id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `st_title` varchar(200) NOT NULL,
  `img_url` text NOT NULL,
  `st_body` text NOT NULL,
  `show_public` int(11) NOT NULL DEFAULT '1',
  `friend_only` int(11) NOT NULL DEFAULT '1',
  `private_only` int(11) NOT NULL DEFAULT '1',
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `st_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_status`
--

INSERT INTO `tbl_user_status` (`st_id`, `st_user_id`, `uniq_id`, `st_title`, `img_url`, `st_body`, `show_public`, `friend_only`, `private_only`, `date_create`, `date_update`, `st_delete`) VALUES
(1, 14, '1P52U8RSTMRRSDFKYB7KGSMOUJMWGZBBFE92PC6FUSXHREVEMGYMQNDP4EJYT35SFD', 'test new status 2019-09-18 09:34:31', '', 'Copy and paste your image url here', 0, 0, 0, '2019-09-18 09:34:31', '2019-09-18 09:34:31', 0),
(2, 14, 'M1XGMVJCMSFM5TYYFW2UFJDUA32RDEBQG84SPEFS5KRRBSUNEB6OPGYTFRHPE9K7DS', 'test new status 2019-09-18 09:36:27', '', 'Copy and paste your image url here', 0, 0, 0, '2019-09-18 09:36:27', '2019-09-18 09:36:27', 0),
(3, 14, 'USFDKFYM26X2EZY5E9ESFPFGGDTSBUS5JGMH4APRJRQKMVCMBRP3NFBRE8TY1OM7SW', 'test new status 2019-09-18 11:32:07', 'https://developers.google.com/web/tools/chrome-devtools/javascript/imgs/editor.svg', '<div class=\"tm-timeline-item\">\r\n            <div class=\"tm-timeline-item-inner\">\r\n                <img src=\"https://developers.google.com/web/tools/chrome-devtools/javascript/imgs/editor.svg\" class=\"tm-img-timeline rounded-circle responsive\">\r\n                <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n              <div class=\"tm-timeline-description-wrap\">\r\n                <div class=\"tm-bg-dark tm-timeline-description\">\r\n                  <h3 class=\"tm-text-green tm-font-400\">\r\n                    Change your title here! เปลี่ยนหัวเรื่อง\r\n                  </h3>\r\n                  <p>\r\n                    Change your detail here! <br />เปลี่ยนข้อความที่นี่เป็นข้อความของคุณ\r\n                  </p>\r\n                  <p class=\"tm-text-green float-right mb-0\">\r\n                  test date on 9/18/2019, 11:31:59 AM\r\n                  </p>\r\n                </div>\r\n              </div>\r\n                \r\n            </div>\r\n              <div class=\"tm-timeline-connector-vertical\"></div>\r\n \r\n          </div>\r\n\r\n\r\n', 0, 0, 0, '2019-09-18 11:32:07', '2019-09-18 11:32:07', 0),
(4, 14, '587KCBWGGN4ZBMPUFRKFSS9MM5DYBUTST3OEFE1EVJPEYXQMJSPADHURRFFYSM2G6D', 'test new status 2019-09-18 11:35:06', 'https://cdn.motor1.com/images/mgl/Z2ZlK/s1/bugatti-la-voiture-noire.jpg', '<div class=\"tm-timeline-item\">\r\n            <div class=\"tm-timeline-item-inner\">\r\n                <img src=\"https://cdn.motor1.com/images/mgl/Z2ZlK/s1/bugatti-la-voiture-noire.jpg\" class=\"tm-img-timeline rounded-circle responsive\">\r\n                <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n              <div class=\"tm-timeline-description-wrap\">\r\n                <div class=\"tm-bg-dark tm-timeline-description\">\r\n                  <h3 class=\"tm-text-green tm-font-400\">\r\n                    Change your title here! เปลี่ยนหัวเรื่อง\r\n                  </h3>\r\n                  <p>\r\n                    Change your detail here! <br />เปลี่ยนข้อความที่นี่เป็นข้อความของคุณ this is my number two\r\n                  </p>\r\n                  <p class=\"tm-text-green float-right mb-0\">\r\n                  test date on 9/18/2019, 11:34:11 AM\r\n                  </p>\r\n                </div>\r\n              </div>\r\n                \r\n            </div>\r\n              <div class=\"tm-timeline-connector-vertical\"></div>\r\n \r\n          </div>\r\n\r\n\r\n', 0, 0, 0, '2019-09-18 11:35:06', '2019-09-18 11:35:06', 0),
(5, 14, 'SF67P1Y3RMJMRTZUSS2MEGFMXUTQWMPVFECB58BRPY2FDNAG4RKED5JUHGFDOESKY9', 'test new status 2019-09-18 11:50:03', 'https://cdn.motor1.com/images/mgl/V1VbM/s1/bugatti-la-voiture-noire.jpg', '<div class=\"tm-timeline-item\">\r\n            <div class=\"tm-timeline-item-inner\">\r\n                <img src=\"https://cdn.motor1.com/images/mgl/V1VbM/s1/bugatti-la-voiture-noire.jpg\" class=\"tm-img-timeline rounded-circle responsive\">\r\n                <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n              <div class=\"tm-timeline-description-wrap\">\r\n                <div class=\"tm-bg-dark-light tm-timeline-description\">\r\n                  <h3 class=\"tm-text-yellow tm-font-400\">\r\n                   Gallery: Bugatti La Voiture Noire at the 2019 Geneva Motor Show\r\n                  </h3>\r\n                  <p>\r\n                    Unfortunately, the clip doesn\'t provide an opportunity to see La Voiture Noire show off its performance or make music from the six exhaust outlets. The car never goes quicker than a slow walking pace, and the ambient noise makes hearing the engine difficult. The vehicle only seems to make a high-pitched note that sounds a little like an electric motor. \r\n                  </p>\r\n                  <p class=\"tm-text-green float-right mb-0\">\r\n                  my new car date on 9/18/2019, 11:48:05 AM\r\n                  </p>\r\n                </div>\r\n              </div>\r\n                \r\n            </div>\r\n              <div class=\"tm-timeline-connector-vertical\"></div>\r\n \r\n          </div>\r\n\r\n\r\n', 0, 0, 0, '2019-09-18 11:50:03', '2019-09-18 11:50:03', 0),
(6, 14, 'UFAKPYF2S5EDGFQ7FTKM4OWSBSRMCE5YSZDU31PST9REYGNMJRGMDM2JVXRF86BBUH', 'test new status 2019-09-18 19:55:23', 'https://amp.businessinsider.com/images/58b99baa46017818038b48db-1334-1001.jpg', '<div class=\"tm-timeline-item\">\r\n            <div class=\"tm-timeline-item-inner\">\r\n                <img src=\"https://amp.businessinsider.com/images/58b99baa46017818038b48db-1334-1001.jpg\" class=\"tm-img-timeline rounded-circle responsive\">\r\n                <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n              <div class=\"tm-timeline-description-wrap\">\r\n                <div class=\"tm-bg-dark tm-timeline-description\">\r\n                  <h3 class=\"tm-text-green tm-font-400\">\r\n                    10. Mazda MX-5: Over the past quarter century, the Mazda MX-5 Miata has become the best-selling sports car of all time.\r\n                  </h3>\r\n                  <p>\r\n                    Although earlier generations have not been known as style icons, the current fourth-generation model is a different story. The current MX-5 conveys the car\'s sporting heritage in a charismatic and aesthetically pleasing package.\r\n                  </p>\r\n                  <p class=\"tm-text-green float-left mb-0\">\r\n                  รถใหม่ของผม ซื้อวันนี้ date on 9/18/2019, 7:52:16 PM\r\n                  </p>\r\n                  <div class=\"float-right\">\r\n                    <a class=\"btn btn-primary\" href=\"https://www.businessinsider.com/most-beautiful-cars-on-sale-today-2017-5#although-earlier-generations-have-not-been-known-as-style-icons-the-current-fourth-generation-model-is-a-different-story-the-current-mx-5-conveys-the-cars-sporting-heritage-in-a-charismatic-and-aesthetically-pleasing-package-2\" style=\"font-weight;color:white;\" target=\"_blank\">Read More</a>\r\n                  </div>\r\n                </div>\r\n              </div>\r\n                \r\n            </div>\r\n              <div class=\"tm-timeline-connector-vertical\"></div>\r\n \r\n          </div>\r\n\r\n\r\n', 0, 0, 0, '2019-09-18 19:55:23', '2019-09-18 19:55:23', 0),
(7, 14, 'MF9KUT1BTYF7JE4YGUGSQSSSAR2S6PF2V5RMXP8ZGRPFUHBNOM5MBEWRMDCDEJEYK3', 'test new status 2019-09-19 16:17:49', 'https://images.pexels.com/photos/745767/pexels-photo-745767.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940', '<div class=\"tm-timeline-item\">\r\n            <div class=\"tm-timeline-item-inner\">\r\n                <img src=\"https://images.pexels.com/photos/745767/pexels-photo-745767.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"tm-img-timeline rounded-circle responsive\">\r\n                <div class=\"tm-timeline-connector\">\r\n                      <p class=\"mb-0\">&nbsp;</p>\r\n                      </div>\r\n              <div class=\"tm-timeline-description-wrap\">\r\n                <div class=\"tm-bg-dark tm-timeline-description\">\r\n                  <h3 class=\"tm-text-green tm-font-400\">\r\n                    This is OOhhhh Zaaaa! edit\r\n                  </h3>\r\n                  <p>\r\n                    edit my now Change your detail here! <br />เปลี่ยนข้อความที่นี่เป็นข้อความของคุณ\r\n                  </p>\r\n                  <p class=\"tm-text-green float-left mb-0\">\r\n                  test date on 9/19/2019, 4:17:23 PM\r\n                  </p>\r\n                  <div class=\"float-right\">\r\n                    <a class=\"btn btn-primary\" target=\"_blank\" href=\"https://th.carro.co/taladrod/nissan-sunny\" style=\"font-weight;color:white;\">Read More</a>\r\n                  </div>\r\n                </div>\r\n              </div>\r\n                \r\n            </div>\r\n              <div class=\"tm-timeline-connector-vertical\"></div>\r\n \r\n          </div>\r\n<p>&nbsp;</p><p>&nbsp;</p>\r\n\r\n', 2, 0, 0, '2019-09-19 16:17:49', '2019-09-19 23:50:46', 0),
(9, 0, '', '', 'https://www.brighttv.co.th/wp-content/uploads/2017/05/18447038_1328708627177464_4423264547038738073_n.jpg', '<div class=\"tm-timeline-item\">\r\n          <div class=\"tm-timeline-item-inner\">\r\n\r\n            <img src=\"https://www.brighttv.co.th/wp-content/uploads/2017/05/18447038_1328708627177464_4423264547038738073_n.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline\">\r\n\r\n                            <div class=\"tm-timeline-connector\">\r\n\r\n                                <p class=\"mb-0\">&nbsp;</p>\r\n\r\n                            </div>\r\n\r\n                            <div class=\"tm-timeline-description-wrap\">\r\n\r\n              <div class=\"tm-bg-dark tm-timeline-description\">\r\n\r\n                  <h3 class=\"tm-text-orange tm-font-400\">Test h3</h3>\r\n\r\n                  <p>Place here content</p>\r\n\r\n                  <p class=\"tm-text-orange float-left mb-0\">\r\n                  farook on 9/19/2019, 11:48:29 PM\r\n                  </p>\r\n                  <div class=\"float-right\">\r\n                  <a style=\"color:white;font-weight:bold;\" class=\"btn btn-primary\" href=\"\" target=\"_blank\">Read More</a>\r\n                  </div>\r\n\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n\r\n\r\n\r\n', 2, 0, 0, '2019-09-19 23:48:37', '2019-09-19 23:48:37', 0),
(10, 1, '', '', 'https://images.livemint.com/img/2019/04/16/600x338/Kerala_1555430371601.jpg', '<div class=\"tm-timeline-item\">\r\n          <div class=\"tm-timeline-item-inner\">\r\n\r\n            <img src=\"https://images.livemint.com/img/2019/04/16/600x338/Kerala_1555430371601.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline\">\r\n\r\n                            <div class=\"tm-timeline-connector\">\r\n\r\n                                <p class=\"mb-0\">&nbsp;</p>\r\n\r\n                            </div>\r\n\r\n                            <div class=\"tm-timeline-description-wrap\">\r\n\r\n              <div class=\"tm-bg-dark-light tm-timeline-description\">\r\n\r\n                  <h3 class=\"tm-text-yellow tm-font-400\">Kerala’s vacant houses are high on nostalgia, not on returns</h3>\r\n\r\n                  <p>Drive down the coastal belt of Kerala, and you will find the landscape dotted by huge independent houses, built in traditional style. A typical metropolitan resident may, perhaps, envy the people who live in these houses</p>\r\n\r\n                  <p class=\"tm-text-white float-left mb-0\">\r\n                  farook on 9/19/2019, 11:49:45 PM\r\n                  </p>\r\n                  <div class=\"float-right\">\r\n                  <a style=\"color:white;font-weight:bold;\" class=\"btn btn-primary\" href=\"https://www.livemint.com/money/personal-finance/kerala-s-vacant-houses-are-high-on-nostalgia-not-on-returns-1555430125374.html\" target=\"_blank\">Read More</a>\r\n                  </div>\r\n\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n\r\n\r\n<p>&nbsp;</p>\r\n', 2, 0, 0, '2019-09-19 23:49:50', '2019-09-20 00:03:49', 0),
(11, 1, '', '', 'https://www.brighttv.co.th/wp-content/uploads/2017/05/18447038_1328708627177464_4423264547038738073_n.jpg', '<div class=\"tm-timeline-item\">\r\n          <div class=\"tm-timeline-item-inner\">\r\n\r\n            <img src=\"https://www.brighttv.co.th/wp-content/uploads/2017/05/18447038_1328708627177464_4423264547038738073_n.jpg\" alt=\"Image\" class=\"rounded-circle tm-img-timeline\">\r\n\r\n                            <div class=\"tm-timeline-connector\">\r\n\r\n                                <p class=\"mb-0\">&nbsp;</p>\r\n\r\n                            </div>\r\n\r\n                            <div class=\"tm-timeline-description-wrap\">\r\n\r\n              <div class=\"tm-bg-dark tm-timeline-description\">\r\n\r\n                  <h3 class=\"tm-text-orange tm-font-400\">สาวโชว์หุ่นอวบในชุดบิกินี่ ตะลึงงานนี้แชร์หนักมาก</h3>\r\n\r\n                  <p>นี่อาจจะเป็นอีกเทรนด์ทางเลือกของสาวๆรวมถึงหนุ่มๆที่หลงใหลในเสน่ห์ของสาวเจ้าเนื้อเมื่อมีการแชร์ภาพจากสมาชิกเฟซบุ๊ก ธนภรณ์ จันทา สาวหุ่นจ้ำม่ำในชุดบิกินี่ริมทะเลที่ดูแล้วเซ็กซี่มากจริงๆ</p>\r\n\r\n                  <p class=\"tm-text-orange float-left mb-0\">\r\n                  farook on 9/19/2019, 11:58:06 PM\r\n                  </p>\r\n                  <div class=\"float-right\">\r\n                  <a style=\"color:white;font-weight:bold;\" class=\"btn btn-primary\" href=\"https://www.brighttv.co.th/social-news/66042\" target=\"_blank\">Read More</a>\r\n                  </div>\r\n\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n<p>&nbsp;</p>\r\n\r\n\r\n', 2, 0, 0, '2019-09-19 23:58:32', '2019-09-20 00:01:11', 0);

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
(34, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 5, 2018, '2018-05-31', '2018-05-31 09:00:19', '2018-05-31', '2018-05-31 09:00:19', 1),
(35, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 6, 2018, '2018-06-14', '2018-06-14 05:31:02', '2018-06-14', '2018-06-14 05:31:02', 1),
(36, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 7, 2018, '2018-07-14', '2018-07-14 12:07:03', '2018-07-14', '2018-07-14 12:07:03', 1),
(37, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 60.0', 'Linux', 7, 2018, '2018-07-16', '2018-07-16 05:52:32', '2018-07-16', '2018-07-16 05:52:32', 1),
(38, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 9, 2018, '2018-09-03', '2018-09-03 11:06:27', '2018-09-03', '2018-09-03 11:06:27', 1),
(39, '127.0.0.1', 0, 'Anonymous', 'Browser Firefox version 61.0', 'Linux', 9, 2018, '2018-09-04', '2018-09-04 04:28:49', '2018-09-04', '2018-09-04 04:28:49', 1),
(40, '127.0.0.1', 0, 'Anonymous', 'Browser Chrome version 74.0.3729.157', 'Linux', 6, 2019, '2019-06-02', '2019-06-02 02:57:55', '2019-06-02', '2019-06-02 02:57:55', 1),
(41, '127.0.0.1', 1, 'farook', 'Browser Chrome version 75.0.3770.100', 'Linux', 7, 2019, '2019-07-14', '2019-07-14 02:15:08', '2019-07-14', '2019-07-14 02:15:08', 1);

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
(1, 'farook', '8f346707b37c098a129f46f3c1a1b337b35cfae5889f6a738e723e17f633fc8dcca70b0cb5e4027dbc5a5b5851125a49dd32782f42dbbf15ece3527b7d855b2d', 'firefrook@gmail.com', '183.89.49.193', '', '<div class=\'alert alert-info\'>\n        <h2>Dear farook welcome to https://www.see-southern.com/</h2>\n\n        <p>\n        You can change this message by \'Delete\'\n        this message in the below textbox and change\n        it to what you like.\n        </p>\n\n        </div>', 642, 0, 1, 0, '2018-05-15', '0000-00-00'),
(2, 'tee2018', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'tee@gmail.com', '', '', '<div class=\'alert alert-danger\'><h2>Dear tee2018 </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 1, 2, 0, '2018-05-15', '0000-00-00'),
(3, 'tom2018', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'tome@gmail.com', '', '', '<div class=\'alert alert-danger\'><h2>Dear tom2018 </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 1, 2, 0, '2018-05-15', '0000-00-00'),
(13, 'Farook Fuu Time', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'farookphuket@gmail.com', '183.89.48.63', '', '', 409, 0, 1, 0, '2018-05-18', '2018-05-23'),
(14, 'test', 'c7bf3837059acfd70201c75f2e351977eae37087e28214bbea7cc6fcd33b2e3b64dedae9927545c9b5d562248e2d9cd136b58db358d6a486327d61ae6979bb5a', 'test@testing.co', '', '', '<div class=\'alert alert-danger\'><h2>Dear test </h2>\n        <p>Your account is create by Admin </p>\n        <p>Your default password is using 1234 </p>\n        <p>Your password is insecure</p>\n        <h2>please note </h2>\n        <p>You have to change your password once you have login to your account\n        for your safety purpose</p>\n        <pre>\n            รหัสผ่านของคุณคือ 1234 และมันไม่ปลอดภัย กรุณาเปลี่ยนเสียด้วย\n        </pre>\n        </div>\n        ', 409, 0, 2, 0, '2018-05-23', '0000-00-00');

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
-- Indexes for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_name` (`t_name`);

--
-- Indexes for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD PRIMARY KEY (`st_id`);

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
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `kw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `TBL_ARTICLE_HISTORY`
--
ALTER TABLE `TBL_ARTICLE_HISTORY`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
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
-- AUTO_INCREMENT for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_visiter`
--
ALTER TABLE `tbl_visiter`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
