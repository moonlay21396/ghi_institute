-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql1005.mochahost.com
-- Generation Time: Sep 18, 2019 at 02:04 AM
-- Server version: 5.6.39
-- PHP Version: 7.2.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aungko_ghi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `photo`, `name`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5d7cf753b55a7_robot.jpg', 'Industrial Robots', '<p style="text-align: justify; font-size: 18px; line-height: 1.4; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; border-radius: 0px !important;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">An industrial robot is an automatically controlled, reprogrammable, multipurpose manipulator programmable in three or more axes.</span><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">The field of industrial robotics may be more practically defined as the study, design and use of robot systems for manufacturing (a top-level definition relying on the prior definition of robot).</span><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">Typical applications of industrial robots include welding, painting, ironing, assembly, pick and place, palletizing, product inspection, and testing, all accomplished with high endurance, speed, and precision.</span></p>', 1, '2019-09-08 08:49:59', '2019-09-14 18:22:27'),
(3, '5d7cffc1d78f5_ros.jpg', 'Robot Operating System(ROS)', '<p style="margin-bottom: 32px; padding: 0px; border: 0px; vertical-align: baseline; min-height: 0px; min-width: 0px; color: rgb(38, 45, 61); font-size: medium; line-height: 30px; font-family: Merriweather, Georgia, &quot;Times New Roman&quot;, serif;"><span style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">The&nbsp;</span><em style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; min-height: 0px; min-width: 0px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Robot Operating System</span></em><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;(ROS) is not an actual operating system, but a framework and set of tools that provide functionality of an operating system on a heterogeneous computer cluster. Its usefulness is not limited to robots, but the majority of tools provided are focused on working with peripheral hardware.</span></span></p><p style="margin-bottom: 32px; padding: 0px; border: 0px; vertical-align: baseline; min-height: 0px; min-width: 0px; color: rgb(38, 45, 61); font-size: medium; line-height: 30px; font-family: Merriweather, Georgia, &quot;Times New Roman&quot;, serif;"><span style="background-color: rgb(255, 255, 255);"><a href="http://www.ros.org/" rel="noopener noreferrer" style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; min-height: 0px; min-width: 0px; text-decoration: underline; color: rgb(32, 78, 207);"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">ROS</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;is split up in more than 2000 packages, each package providing specialized functionality. The number of tools connected to the framework are probably its biggest power.</span><span style="color: rgb(38, 45, 61); font-size: 18px; font-family: &quot;Times New Roman&quot;;">ROS provides functionality for hardware abstraction, device drivers, communication between processes over multiple machines, tools for testing and visualization, and much more.</span></span></p>', 2, '2019-09-10 00:22:09', '2019-09-14 18:57:22'),
(4, '5d7cf8934fdb4_webDesign.jpg', 'Web Design', '<p style="text-align: justify; background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; margin-bottom: 20px; padding: 0px; line-height: 1.6; color: rgb(64, 64, 64); font-variant-ligatures: common-ligatures;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the mid-2010s, design for mobile and tablet browsers has become ever-increasingly important.</span></p><p style="text-align: justify; background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; margin-bottom: 20px; padding: 0px; line-height: 1.6; color: rgb(64, 64, 64); font-variant-ligatures: common-ligatures;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">A web designer works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to&nbsp;</span><i style="background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">how</span></i><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;information is structured and categorized. A good web design is easy to use, aesthetically pleasing, and suits the user group and brand of the website. Many webpages are designed with a focus on simplicity, so that no extraneous information and functionality that might distract or confuse users appears. As the keystone of a web designer’s output is a site that wins and fosters the trust of the target audience, removing as many potential points of user frustration as possible is a critical consideration.</span></p><p style="text-align: justify; background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; padding: 0px; line-height: 1.6; color: rgb(64, 64, 64); font-variant-ligatures: common-ligatures; margin-bottom: 0px !important;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">Two of the most common methods for designing websites that work well both on desktop and mobile are&nbsp;</span><i style="background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">responsive</span></i><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;and&nbsp;</span><i style="background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">adaptive</span></i><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;design. In responsive design, content&nbsp;</span><i style="background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">moves dynamically</span></i><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;depending on screen size; in adaptive design, the website content is&nbsp;</span><i style="background-position: 50% center; background-repeat: no-repeat; box-sizing: inherit; font-family: inherit;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">fixed</span></i><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;in layout sizes that match common screen sizes. Preserving a layout that is as consistent as possible between devices is crucial to maintaining user trust and engagement. As responsive design can present difficulties in this regard, designers must be careful in relinquishing control of how their work will appear. If they are responsible for the content as well, while they may need to broaden their skillset, they will enjoy having the advantage of full control of the finished product.</span></p>', 1, '2019-09-14 18:26:27', '2019-09-14 18:42:57'),
(5, '5d7cfa613c046_webdeve.jpg', 'Web Development', '<div style="text-align: justify;"><span style="color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;">Web development is also known as by website development (to make you understand in simpler term.)</span></div><span style="color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;"><div style="text-align: justify;"><span style="color: rgb(51, 51, 51);">&nbsp;So, Web development largely denotes to the tasks associated with developing websites for hosting via intranet and internet. The web development process comprises of Web design, Web content and network configuration amongst other tasks.</span></div></span><span style="color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;"><div style="text-align: justify;"><span style="color: rgb(51, 51, 51);">&nbsp;</span><b style="font-weight: bold; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif; font-size: 15px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Front end development:</span></b><span style="color: rgb(51, 51, 51);">&nbsp;It is a part of a code, on the front of the application. Front end development or client side development usually interacts with the user and it presents the data in a proper manner.</span></div></span><span style="color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;"><div style="text-align: justify;"><span style="color: rgb(51, 51, 51);">&nbsp;Front-end developers are accountable for a website’s user-facing code and the design the immersive user experiences. In order to implement those intentions, frontend developers must be skillful at three main languages:&nbsp;</span><span class="qlink_container" style="direction: ltr; unicode-bidi: isolate; color: rgb(51, 51, 51);"><a href="http://blog.udacity.com/2014/12/front-end-vs-back-end-vs-full-stack-web-developers.html" rel="noopener nofollow" target="_blank" class="external_link" data-qt-tooltip="udacity.com" data-tooltip="attached" style="background-image: url(&quot;//qsf.fs.quoracdn.net/-3-images.new_grid.external_link.svg-26-7f84ed22dfd7e97b.svg&quot;); background-position: 100% 50%; background-size: 10.5px; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration: none; color: rgb(43, 109, 173); padding-right: 15px;">HTML, CSS</a></span><span style="color: rgb(51, 51, 51);">, and&nbsp;</span><span class="qlink_container" style="direction: ltr; unicode-bidi: isolate; color: rgb(51, 51, 51);"><a href="https://www.udacity.com/course/object-oriented-javascript--ud015" rel="noopener nofollow" target="_blank" class="external_link" data-qt-tooltip="udacity.com" style="background-image: url(&quot;//qsf.fs.quoracdn.net/-3-images.new_grid.external_link.svg-26-7f84ed22dfd7e97b.svg&quot;); background-position: 100% 50%; background-size: 10.5px; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration: none; color: rgb(43, 109, 173); padding-right: 15px;">JavaScript programming</a></span><span style="color: rgb(51, 51, 51);">.</span></div></span><span style="color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;"><div style="text-align: justify;"><span style="color: rgb(51, 51, 51);">&nbsp;</span><b style="font-weight: bold; color: rgb(51, 51, 51); font-family: q_serif, Georgia, Times, &quot;Times New Roman&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, Meiryo, serif; font-size: 15px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Back end development:</span></b><span style="color: rgb(51, 51, 51);">&nbsp;In much simpler words, it is never visible to the user, it generates the results. The core responsibilities of backend development are, sending contact form, editing page content and signing from newsletter. The back end of a website comprises of a server, an application, and a database. A backend developer shapes and maintains the technology that powers those components, it enable the user-facing side of the website to even be in the first place.</span></div></span>', 1, '2019-09-14 18:34:09', '2019-09-14 18:41:52'),
(6, '5d7cfb684c37b_webtech.png', 'Web Technology', '<p style="text-align: justify; "><span style="font-size: 18px;">﻿</span><span style="color: rgb(85, 85, 85); font-family: &quot;Times New Roman&quot;; font-size: 18px;">Computers don''t communicate with each other the way that people do. Instead, computers require codes, or directions. These binary codes and commands allow computers to process needed information. Every second, billions upon billions of ones and zeros are processed in order to provide you with the information you need.</span><span style="color: rgb(85, 85, 85); font-family: &quot;Times New Roman&quot;; font-size: 18px;">The methods by which computers communicate with each other through the use of markup languages and multimedia packages is known as&nbsp;</span><span style="font-weight: 700; color: rgb(85, 85, 85); font-family: &quot;Times New Roman&quot;; font-size: 18px;">web technology</span><span style="color: rgb(85, 85, 85); font-family: &quot;Times New Roman&quot;; font-size: 18px;">. In the past few decades, web technology has undergone a dramatic transition, from a few marked up web pages to the ability to do very specific work on a network without interruption. Let''s look at some examples of web technology.</span><br></p>', 1, '2019-09-14 18:38:32', '2019-09-14 18:43:32'),
(7, '5d7cfec654b2b_iot.jpg', 'Internet of things (IoT)', '<p><span style="background-color: rgb(255, 255, 255);"><span style="color: rgb(108, 108, 108); font-family: &quot;Times New Roman&quot;; font-size: 18px;">The internet of things, or IoT, is a system of interrelated computing devices, mechanical and digital machines, objects, animals or people that are provided with unique identifiers (</span><a href="https://internetofthingsagenda.techtarget.com/definition/unique-identifier-UID" style="text-decoration: underline; color: rgb(167, 211, 35); transition: color 0.2s ease 0s; font-family: Arial, sans-serif; font-size: 18px; font-weight: 400;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">UIDs</span></a><span style="color: rgb(108, 108, 108); font-family: &quot;Times New Roman&quot;; font-size: 18px;">) and the ability to transfer data over a network without requiring human-to-human or human-to-computer interaction.</span></span></p><p style="margin-top: 1.5em; margin-bottom: 1.5em; font-size: 18px; line-height: 1.67em; color: rgb(108, 108, 108); font-family: Arial, sans-serif;"><span style="background-color: rgb(255, 255, 255);"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">A&nbsp;</span><a href="https://internetofthingsagenda.techtarget.com/definition/thing-in-the-Internet-of-Things" style="text-decoration: underline; color: rgb(167, 211, 35); transition: color 0.2s ease 0s;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">thing</span></a><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;</span><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">in the internet of things can be a person with a heart monitor implant, a farm animal with a</span><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;</span><a href="https://internetofthingsagenda.techtarget.com/definition/injectable-ID-chip-biochip-transponder" style="text-decoration: underline; color: rgb(167, 211, 35); transition: color 0.2s ease 0s;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">biochip transponder</span></a><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">, an automobile that has built-in&nbsp;</span><a href="https://whatis.techtarget.com/definition/sensor" style="text-decoration: underline; color: rgb(167, 211, 35); transition: color 0.2s ease 0s;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">sensors</span></a><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px;">&nbsp;to alert the driver when tire pressure is low or any other natural or man-made object that can be assigned an IP address and is able to transfer data over a network.</span></span></p><p style="margin-top: 1.5em; margin-bottom: 1.5em; font-size: 18px; line-height: 1.67em; color: rgb(108, 108, 108); font-family: Arial, sans-serif;"><span style="font-family: &quot;Times New Roman&quot;; font-size: 18px; background-color: rgb(255, 255, 255);">Increasingly, organizations in a variety of industries are using IoT to operate more efficiently, better understand customers to deliver enhanced customer service, improve decision-making and increase the value of the business.</span></p><p><br></p>', 1, '2019-09-14 18:52:54', '2019-09-14 18:52:54'),
(8, '5d7d04ba11734_linux.jpg', 'Linux System Administration', '<p style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);"><span style="font-size: 18px; background-color: rgb(255, 255, 255); font-family: &quot;Times New Roman&quot;;">Linux is a major force in computing technology, powering everything from mobile phones and personal computers to supercomputers and servers. The job of a systems administrator is to manage the operations of a computer system. As most co</span></p><li style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-left: 21px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;; background-color: rgb(255, 255, 255);">Linux file systems</span></li><li style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-left: 21px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;; background-color: rgb(255, 255, 255);">File system hierarchy</span></li><li style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-left: 21px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;; background-color: rgb(255, 255, 255);">Linux online manual page</span></li><li style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-left: 21px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;; background-color: rgb(255, 255, 255);">Root/super user</span></li><li style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-left: 21px;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;; background-color: rgb(255, 255, 255);">Handling files and directories</span></li><p style="text-align: justify; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);"><br></p>', 2, '2019-09-14 19:18:18', '2019-09-15 09:24:15'),
(9, '5d7d0674191a5_arduino.jpg', 'Arduino', '<p style="text-align: justify; margin-right: auto; margin-bottom: 1.5em; margin-left: auto; padding: 0px; direction: ltr; color: rgb(79, 78, 78); font-family: &quot;TyponineSans Regular 18&quot;, &quot;Lucida Grande&quot;, Lucida, Verdana, sans-serif; font-size: 18px;"><span style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Arduino is an open-source electronics platform based on easy-to-use hardware and software.&nbsp;</span><a class="wikilink" href="https://www.arduino.cc/en/Main/Products" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Arduino boards</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">are able to read inputs - light on a sensor, a finger on a button, or a Twitter message - and turn it into an output - activating a motor, turning on an LED, publishing something online. You can tell your board what to do by sending a set of instructions to the microcontroller on the board. To do so you use the</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="wikilink" href="https://www.arduino.cc/en/Reference/HomePage" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Arduino programming language</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">(based on</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="urllink" href="http://wiring.org.co/" rel="nofollow" target="_blank" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Wiring</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">), and</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="wikilink" href="https://www.arduino.cc/en/Main/Software" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">the Arduino Software (IDE)</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">, based on</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="urllink" href="https://processing.org/" rel="nofollow" target="_blank" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Processing</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">.</span></span></p><p style="text-align: justify; margin-right: auto; margin-bottom: 1.5em; margin-left: auto; padding: 0px; direction: ltr; color: rgb(79, 78, 78); font-family: &quot;TyponineSans Regular 18&quot;, &quot;Lucida Grande&quot;, Lucida, Verdana, sans-serif; font-size: 18px;"><span style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Over the years Arduino has been the brain of thousands of projects, from everyday objects to complex scientific instruments. A worldwide community of makers - students, hobbyists, artists, programmers, and professionals - has gathered around this open-source platform, their contributions have added up to an incredible amount of</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="urllink" href="http://forum.arduino.cc/" rel="nofollow" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">accessible knowledge</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">that can be of great help to novices and experts alike.</span></span></p><p style="text-align: justify; margin-right: auto; margin-bottom: 1.5em; margin-left: auto; padding: 0px; direction: ltr; color: rgb(79, 78, 78); font-family: &quot;TyponineSans Regular 18&quot;, &quot;Lucida Grande&quot;, Lucida, Verdana, sans-serif; font-size: 18px;"><span style="background-color: rgb(255, 255, 255);"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">Arduino was born at the Ivrea Interaction Design Institute as an easy tool for fast prototyping, aimed at students without a background in electronics and programming. As soon as it reached a wider community, the Arduino board started changing to adapt to new needs and challenges, differentiating its offer from simple 8-bit boards to products for</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><span class="wikiword" style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">IoT</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">applications, wearable, 3D printing, and embedded environments. All Arduino boards are completely open-source, empowering users to build them independently and eventually adapt them to their particular needs. The</span><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">&nbsp;</span><a class="wikilink" href="https://www.arduino.cc/en/Main/Software" style="color: rgb(0, 151, 156); text-decoration: none; line-height: inherit;"><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">software</span></a><span style="font-size: 18px; font-family: &quot;Times New Roman&quot;;">, too, is open-source, and it is growing through the contributions of users worldwide.</span></span></p>', 2, '2019-09-14 19:25:40', '2019-09-14 19:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forhome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `photo`, `start_date`, `duration`, `fee`, `description`, `category`, `forhome`, `created_at`, `updated_at`) VALUES
(1, 'Level 4 Diploma In Computing', '5d78cfcacaea4_8.png', '2019-10-01', '2 Years', '2019 Intake', '<p>The Level 4 Diploma in Computing is a 120-credit Ofqual regulated qualification. It provides the core knowledge, understanding and skills to support learners planning to further their studies in computing.<br></p>', 'academic', 'default', '2019-09-10 00:49:33', '2019-09-14 09:57:04'),
(2, 'Web Development with PHP', '5d78e964e7a5b_5.png', '2019-09-18', '3 month', '150000', '<p><span style="color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);">Web Development Course with (PHP, MySQL, AJAX, JSON, PHP OOP and MVC)</span><br></p>', 'diploma', 'home', '2019-09-10 00:50:25', '2019-09-13 00:34:45'),
(3, 'Front End Development', '5d78d0e36b76f_4.png', '2019-09-28', '3 Month', '100000', '<p><span style="color: rgba(255, 255, 255, 0.75); font-family: Roboto, sans-serif; font-size: 13px; background-color: rgba(0, 0, 0, 0.5);">Front End Development Course with (HTML,CSS,BOOTSTRAP,JavaScript,jQuery)</span><br></p>', 'diploma', 'home', '2019-09-10 00:51:09', '2019-09-14 16:41:52'),
(4, 'Android Development', '5d78d21d06a18_6.png', '2019-09-11', '3 Month', '250,000', '<p>Android Development with (Java, Kotalin)<br></p>', 'diploma', 'home', '2019-09-11 04:23:17', '2019-09-14 16:45:20'),
(5, 'Linux Adminstration', '5d78d28ac19ff_7.png', '2019-09-16', '3 Month', '100,000', '<span style="font-family: &quot;Times New Roman&quot;;">Linux System with (Network Engineer, System Administrator)</span>', 'diploma', 'home', '2019-09-11 04:25:06', '2019-09-15 09:19:49'),
(9, 'Level 5 Diploma in Computing', '5d7dc7f5031d9_Level_5_Diploma.png', '2020-10-01', '1 Year', '2020 Intake', '<p>The Level 5 Diploma in Computing is a 120-credit Ofqual regulated \r\nqualification. It provides the core knowledge, understanding and skills \r\nto support learners planning to further their studies in computing.<br></p>', 'academic', 'default', '2019-09-14 15:18:44', '2019-09-15 09:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE IF NOT EXISTS `course_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'academic', NULL, NULL),
(2, 'diploma', NULL, NULL),
(3, 'online course', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `photo`, `title`, `fee`, `date`, `timing`, `location`, `event_category`, `detail`, `created_at`, `updated_at`) VALUES
(1, '5d7dde98be861_ghi1.jpg', 'လက္မွတ္ေ၇းထုိးျခင္း', 'free', '2019-09-03', '11am', 'Yangon', 'academy', '<p>Green Hackers Institute ၏CEO ဦးစိုး​ေအာင္ ​ႏြင္​့ Winner computer Center-mawlamyine (Principal) ဦးသိႏ္​း​ေဇာ္​တို႔ IT ပညာရပ္​ဆိုင္​ရာ ႏွီေႏွာဖလွယ္ျခင္းးႏြင္​့ ​လာမၫ့္ႏွစ္ နၫ္​းပညာမ်ား ပူး​ေပါင္​းလုပ္​​ေဆာင္​ရႏ္​အၾတက္​ MOU လက္​မြတ္​​ေရးထိုးစၪ္။<br></p>', '2019-09-10 04:53:28', '2019-09-15 10:47:52'),
(2, '5d7dcde285079_ghi.jpg', 'Green Hackers Institute', 'free', '2019-09-11', '10am to 12pm', 'Thanlyin', 'other', '<p><font color="#1c1e21" face="Helvetica, Arial, sans-serif"><span style="font-size: 14px;">Green Hackers Institute သည္ ၉ ရက္ ၉လ ၂၀၁၉ ခုႏွစ္တြင္ သုတနည္းပညာဌာန နည္းပညာတကၠသိုလ္ (သန္လ်င္) မွ ေနာက္ဆုံးႏွစ္‌ ေက်ာင္းသူေက်ာင္းသားမ်ား၏ ဘြဲ႕ႀကိဳစာတမ္းဖတ္သည့္ အခမ္းအနားတြင္ External Examiner အျဖစ္ ပါဝင္ေဆာင္႐ြက္ေပးခဲ့ပါသည္။</span></font><br></p>', '2019-09-10 04:57:54', '2019-09-15 10:48:18'),
(3, '5d7ddfc130131_ghi2.jpg', 'Green Hackers Institute', 'free', '2019-09-02', '9am-4pm', 'yangon', 'other', '<div style="line-height: 19px;"><div style="line-height: 19px;"><font face="Times New Roman">Raspberry Pi ကို အသံုးျပဳပီး</font></div><div style="line-height: 19px;"><font face="Times New Roman">&gt;&gt; LED blinking</font></div><div style="line-height: 19px;"><font face="Times New Roman">&gt;&gt; DHT22 စတဲ့ Beginner projects ႏွစ္ခုကို step by step coding ႐ွင္းလင္းျခင္းနဲ့အတူ ေဖာ္ျပထားပါသည္</font></div><div style="line-height: 19px;"><font face="Times New Roman"><br></font></div><div style="line-height: 19px;"><font face="Times New Roman">pdf ျဖင့္ ရယူ လိုပါက comment ၾတင္ ေတာင္းယူႏိုင္ပါသၫ္။</font></div><div style="line-height: 19px;"><font face="Times New Roman"><br></font></div><div style="line-height: 19px;"><font face="Times New Roman">project ျပဳလုပ္ရင္း error တစၥံုတစ္ရာ ရွိပါက ေအာက္ပါေနရာမ်ားမာ လာေရာက္ ေမးျမႏ္းႏို္င္ပါသည္</font></div><div style="line-height: 19px;"><font face="Times New Roman"><br></font></div><div style="line-height: 19px;"><font face="Times New Roman">https://www.facebook.com/Win-Htut-Green-Hackers-1013742465487525/?modal=admin_todo_tour</font></div><div style="line-height: 19px;"><font face="Times New Roman"><br></font></div><div style="line-height: 19px;"><font face="Times New Roman">https://www.facebook.com/WinHtutEquation</font></div></div>', '2019-09-15 10:37:48', '2019-09-15 10:55:28'),
(4, '5d7de233a14f3_ghi3.jpg', 'သန္လ်င္ နၫ္းပညာတကၠသိုလ္', 'FREE', '2019-08-30', '9AM - 3PM', 'Thanlyin', 'academy', '<p>Green Hackers Instituteမြာတာ၀န္ရွိသူမ်ားအ ေနျဖင့္&nbsp; သုတနၫ္းပညာအင္ဂ်င္နီယာဌာန နၫ္းပညာတကၠသိုလ္ (သန္လ်င္) ႏြင့္ ပူးေပါင္း၍ ပဥၥမႏြစ္သဳတနၫ္းပညာေက်ာင္းသားေကာင္းသူမ်ား၏ Web Technology, Embedded System, Software Development, Networking ႏြင့္ Virtualization အစရွိသၫ့္ Projects မ်ားႏွင့္ ပတ္သက္ၿပီး အျကံျပဳေဆြး&nbsp;ေႏြးျခင္းမ်ားျပဳလုပ္ခဲ့ပါသည္။</p><p><br></p><p>Green Hackers Institute မွ တာဝန္ရွိသူမ်ားအ ေနျဖင့္ သုတနည္းပညာအင္ဂ်င္နီယာ ဌာန၊နည္းပညာတကၠသိုလ္ (သန္လ်င္) ႏွင့္ပူးေပါင္း၍ ပၪၥမႏွစ္ သုတနည္းပညာေက်ာင္းသားေက်ာင္းသူမ်ား၏ Web Technology, Embedded System, Software Development</p><p>Networking ႏွင့္ Virtualization အစရွိသည့္ Projects မ်ားႏွင့္ပတ္သက္ၿပီး အႀကံျပဳ ေဆြးေႏြးျခင္းမ်ား ျပဳလုပ္ေပးခဲ့ပါသည္။</p>', '2019-09-15 11:03:15', '2019-09-15 11:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `eventstudents`
--

CREATE TABLE IF NOT EXISTS `eventstudents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `eventstudents`
--

INSERT INTO `eventstudents` (`id`, `event_id`, `name`, `email`, `phone`, `job`, `education`, `address`, `created_at`, `updated_at`) VALUES
(3, 2, 'Moon Lay', 'moonlay@gmail.com', '09543345876', 'IT', 'B.Tech(IT)', 'fbbgfhfghfh', '2019-09-11 08:23:59', '2019-09-11 08:23:59'),
(4, 1, 'SayarThu Yein Soe', 'thuyein@gmail.com', '09797294931', 'IT', 'B.Tech(IT)', 'rgretertertertert', '2019-09-11 09:13:09', '2019-09-11 09:13:09'),
(6, 2, 'Moon Lay', 'moonlay@gmail.com', '09543345876', 'IT', 'B.Tech(IT)', 'Dagon', '2019-09-15 09:21:01', '2019-09-15 09:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `photo`, `name`, `position`, `university`, `degree`, `fb_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '5d7cc01cb5932_1.png', 'Dr. Aung Win Hut', 'Principal', 'MOSCOW POWER ENGINEERING INSITIUTE', 'PH.D (ELECTRICAL POWER)', 'https://www.facebook.com/AungWinHtutGH', '<p style="text-align: center;"><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; text-align: start;">Founder of Green Hackers Team, and Co-Founder of Green Hackers Institute. A well-known educator, currently working as a Principal of Green Hackers Institute and holding a position of Director of Teaching and Learning.</span><br></p>', '2019-09-08 05:54:08', '2019-09-14 14:25:32'),
(2, '5d7cc27fbbf12_2.png', 'Dr. Thein Naing Tun', 'Lecturer (Electrical Machines )', 'MOSCOW POWER ENGINEERING INSTITUTE', 'Ph.D (Electrical Power)', 'https://www.facebook.com', '<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">A highly motivated and experienced educator, currently working in Higher Education Field. Excellent administrative skill. Also got a Ph.D. degree focused on Electrical Machine from Moscow Power Engineering Institute.</span><br>', '2019-09-10 02:02:10', '2019-09-15 11:17:39'),
(3, '5d7cc2f7a352d_3.png', 'Pyae Soan Aung', 'COMPUTER SCIENCE', 'DEFENSE SERVICE ACADEMY', 'B.Sc', 'https://www.facebook.com/Ghostman.44', '<span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">A highly motivated and experienced educator, currently working in Higher Education Field. Focus on Robot Operating System and Computer Science.</span><br>', '2019-09-11 10:13:50', '2019-09-14 14:37:43'),
(4, '5d7c851626b75_6.png', 'Hla Myo Aung', 'Lecturer ( Electrical & Electronics Control )', 'MOSCOW POWER ENGINEERING INSTITUTE', 'PH.D CANDIDATE (ELECTRIAL POWER)', 'http://www.facebook.com/hlamyoaung.aung.758', '<p><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Strong experienced in Microcontroller, Electrical, and Electronic. Also a well-known educator in Microchip Technology. Currently working as a lecturer, teaching PIC controller.</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p><br></p>', '2019-09-11 10:16:42', '2019-09-15 11:19:19'),
(5, '5d7cc45e947c1_7.png', 'Shu Aung Win', 'Lecturer ( Electronics )Curriculum Development', 'BAUMAN MOSCOW STATE TECHNICAL UNIVERSITY', 'Ph.D (Candidate)(Electronics)', 'https://www.facebook.com/knge1', '<p><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">Strong experienced in Microcontroller, Electrical, and Electronic. Also a well-known educator in Microchip Technology. Currently working as a lecturer, teaching PIC controller.</span><br></p>', '2019-09-11 20:07:26', '2019-09-15 11:25:01'),
(6, '5d7cd8f474b2c_Tin_Moe_Aung.jpg', 'Tin Moe Aung', 'Lecturer (Information System Security )', 'MOSCOW AVIATION INSTITUTE', 'B.C.SC  , M.E ( Tech )', '#', '<p><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">A highly motivated and experienced educator, currently working in Higher Education Field. Excellent administrative skill. Also got a M.E degree&nbsp; from Moscow Aviation Institute.</span><br></p>', '2019-09-11 20:09:13', '2019-09-15 11:26:11'),
(8, '5d7cd28a09f7b_4.png', 'Thu Yein Soe', 'WEB DEVELOPMENT', 'MOSCOW POWER ENGINEERING INSTITUTE', 'M.SC.(NUCLEAR PHYSICS)', 'https://www.facebook.com/profile.php?id=100011464260891', '<p><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">A well-known Web Developer and Educator, Specialized in Database Architecture. Has experienced in Web Development projects. Now he is working as a product development director at Green Hackers Institute.</span><br></p>', '2019-09-11 20:11:07', '2019-09-14 15:44:10'),
(10, '5d7cb68584422_5.png', 'Win Htut', 'EMBEDDED SYSTEM', 'UNIVERSITY OF YADANARBON', 'LLB', 'https://www.facebook.com/WinHtutEquation', '<p><span style="color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;">Young, Enthusiastic and a well-known educator. Specializing in an embedded system.</span><br></p>', '2019-09-14 13:44:37', '2019-09-14 15:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_08_095934_create_course_categories_table', 2),
(4, '2019_09_08_100219_create_courses_table', 3),
(5, '2019_09_08_100840_create_members_table', 4),
(6, '2019_09_08_101359_create_events_table', 5),
(7, '2019_09_08_101905_create_blogs_table', 6),
(8, '2019_09_11_082756_create_enroll__students_table', 7),
(9, '2019_09_11_085322_create_eventstudents_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$s0wCyWVFjl4GEd6cDe0V4.EpKIP47BhDulqErsQADMK6GfQ2/VXCi', 'admin', NULL, '2019-09-08 00:28:44', '2019-09-08 00:28:44'),
(2, 'teacher', 'teacher@gmail.com', NULL, '$2y$10$9lVsACELlWM3Upm7S/ugEetd3hJiJLjGlAIGVZKoqxWyF.Btvfkni', 'teacher', NULL, '2019-09-08 00:31:16', '2019-09-08 00:31:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
