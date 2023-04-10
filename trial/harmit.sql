-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
-- Error reading structure for table harmit.employee: #1932 - Table 'harmit.employee' doesn't exist in engine
-- Error reading data for table harmit.employee: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`employee`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `files`
--
-- Error reading structure for table harmit.files: #1932 - Table 'harmit.files' doesn't exist in engine
-- Error reading data for table harmit.files: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`files`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--
-- Error reading structure for table harmit.mentor: #1932 - Table 'harmit.mentor' doesn't exist in engine
-- Error reading data for table harmit.mentor: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`mentor`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mentor_mentee`
--
-- Error reading structure for table harmit.mentor_mentee: #1932 - Table 'harmit.mentor_mentee' doesn't exist in engine
-- Error reading data for table harmit.mentor_mentee: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`mentor_mentee`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--
-- Error reading structure for table harmit.messages: #1932 - Table 'harmit.messages' doesn't exist in engine
-- Error reading data for table harmit.messages: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`messages`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--
-- Error reading structure for table harmit.profile: #1932 - Table 'harmit.profile' doesn't exist in engine
-- Error reading data for table harmit.profile: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`profile`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--
-- Error reading structure for table harmit.rooms: #1932 - Table 'harmit.rooms' doesn't exist in engine
-- Error reading data for table harmit.rooms: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`rooms`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `student`
--
-- Error reading structure for table harmit.student: #1932 - Table 'harmit.student' doesn't exist in engine
-- Error reading data for table harmit.student: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`student`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title`, `link`, `content`) VALUES
(1, 'How to reduce or compress image size while uploading using PHP', 'https://phppot.com/jquery/jquery-sidebar-expand-collapse/', 'It is very common to upload images to the server or website by the users and admins. Users mostly upload their images for setting their profile picture or to submit documents and so on. But most of the time images are uploaded by the users are not optimized for the web, thus taking much more ...'),
(2, 'Store and retrieve image from database using PHP and MySQL', 'https://phppot.com/jquery/jquery-sidebar-expand-collapse/', 'Upload and store an image into the database and later retrieve that image from the database is very easy and simple. But before store into the database table, the image should be encoded using base64_encode() function. So, in this tutorial, I will show you how to store and retrieve image from database using PHP and MySQL ...'),
(3, 'Login with Facebook using JavaScript SDK', 'https://phppot.com/jquery/jquery-sidebar-expand-collapse/', 'Login with Facebook using JavaScript SDK provides an easy and simple way to integrate login system to your website without any registration. My earlier tutorial has shown how to login with Facebook using PHP SDK and MySQL in a website. In this tutorial, I will demonstrate you step by step process to learn how to Login with Facebook using ...'),
(4, 'Login with Facebook using PHP and MySQL', 'https://phppot.com/jquery/jquery-sidebar-expand-collapse/', 'Registration through filling a long form is a headache to any user. After seeing such big form they run away. But short registration process helps to get more subscribers for your website. Meanwhile, Facebook is the largest social network in Earth and billions of users. Facebook provides PHP SDK through which you can easily integrate registration and login system ...'),
(5, 'Create a Facebook App ID for your website', 'https://phppot.com/category/php/', 'This article will show you how to create a Facebook app and get the app ID and app secret code from it. If you wish to use Facebook social, like, login button on your website, then you will need these app ID and secret code. In order to create a Facebook application, you will need ...'),
(6, 'Simplest way to add cross browser jQuery date and time picker in web page', 'https://phppot.com/category/php/', 'In this tutorial, I will show you how to add cross browser jQuery date and time picker in the web page. It is a plugin, and it is very simple and easy to implement. Also, this jQuery datetimepicker plugin provides various options to customize datetimepicker as per your requirements. This tutorial helps you to add jQuery date and time ...'),
(7, 'Add TinyMCE editor in PHP or HTML', 'https://phppot.com/category/php/', 'When you need to save formatted text or HTML content from users on your website, using any editor like TinyMCE, you need a textarea field. TinyMCE editor is web based WYSIWYG editor which enables you to convert HTML textarea field to an editor. The TinyMCE editor is converting the formatted text into HTML when the form is submitted to the ...'),
(8, 'Multi-step form processing using PHP with jQuery form validation', 'https://phppot.com/category/php/', 'This tutorial will help you to understand how multi-step form processing will work. Here in the tutorial, we will achieve this using PHP. Apart from multi-step form processing, you will also learn how to do form validation using the help of jQuery. Multi-step form processing is very useful functionality when users have to input too much ...'),
(9, 'Upload files to the server using jsp and servlet', 'https://phppot.com/category/php/', 'Upload files to the server using JSP and servlet is a very easy and a common task in Java. The following example will give you a clear idea about how to upload files to the server using JSP and servlet. But before start coding, you need to know some important things. Like, “enctype=multipart/form-data“,  “HTTP POST“ ...'),
(10, 'PHP login ', 'https://phppot.com/category/php/', 'In this tutorial, I will show you how to do PHP login with PDO connection. Unlike MySQL or SQL database specific. You can connect and use any database using PDO. Different databases may have slightly different connection methods, but its very easy to switch. User_Details Table Create the below table in the database ...'),
(11, 'Add Google Map with multiple markers to your website', 'https://phppot.com/category/jquery/', 'This tutorial, will help you to integrate or add Google Map with multiple markers to your website. You can also visit the following link, if you want to add Google Map with a single marker to your website. We will use Google Maps API for displaying the Google Map with your desired locations. HTML code — Add ...'),
(12, 'jQuery digital clock plugin', 'https://phppot.com/category/jquery/', 'Hi friends, in this tutorial, I will show you how to create a simple jQuery digital clock plugin with the help of jQuery and CSS. This clock displays dynamic time. Here is nothing hard enough to understand. Simple HTML, CSS, and jQuery codes are used here. HTML – jQuery digital clock The HTML is very ...'),
(13, 'Add Google Map with a marker to your website', 'https://phppot.com/category/jquery/', 'The easiest way to find an address is Google Map. It shows the address with different and shortest routes. You can easily add Google Map with a marker to your website. The marker is your address. In this tutorial, I will tell you how to add Google Map to your website. We will use Google ...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table harmit.users: #1932 - Table 'harmit.users' doesn't exist in engine
-- Error reading data for table harmit.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `harmit`.`users`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
