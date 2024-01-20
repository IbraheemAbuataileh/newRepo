-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 09:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ballegh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'شكاوي البيئة'),
(2, 'شكاوي انشائية'),
(3, 'شكاوي المياه'),
(4, 'شكاوي الطرق'),
(5, 'شكاوي تجارية '),
(6, 'شكاوي الصحة '),
(7, 'اخرى '),
(8, 'manager'),
(12, 'ibraheem mohammad'),
(13, 'abu haibeh'),
(14, 'sadasdadsa'),
(15, 'uhnyhub');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, '[عمان]'),
(2, '[اربد]'),
(3, '[الكرك]'),
(4, '[عجلون]'),
(5, '[المفرق]'),
(6, '[معان]'),
(7, '[العقبة]'),
(8, '[جرش]'),
(9, '[الرمثا]'),
(10, '[الزرقاء]'),
(11, '[البلقاء]'),
(12, '[الطفيلة]');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `lat` varchar(20) NOT NULL,
  `long` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `cat_id`, `sub_cat_id`, `phone`, `description`, `date`, `lat`, `long`) VALUES
(1, 1, 1, '523453245', 'شبسيبش سيب شبسي', '2023-01-13 05:00:15', '39.4275654643534', '9.4275654643534'),
(2, 1, 2, '0799599421', 'السلام عليكم ورحمة الله ', '2023-01-13 05:01:30', '39.4275654643534', '9.4275654643534'),
(3, 1, 1, '32455', 'adبيسلkhyjdgs,sdf', '2023-01-17 08:06:12', '39.4275654643534', '9.4275654643534'),
(4, 1, 1, '32455', 'adبيسلkhyjdgs,sdf', '2023-01-17 08:06:42', '39.4275654643534', '9.4275654643534'),
(5, 1, 1, '32455', 'adبيسلkhyjdgs,sdf', '2023-01-17 08:06:47', '39.4275654643534', '9.4275654643534'),
(6, 2, 1, '32455', 'adبيسلkhyjsdfdgs,sdf', '2023-01-17 08:07:06', '39.4275654643534', '9.4275654643534'),
(7, 1, 2, '324555644', 'محمد سمير ', '2023-01-17 08:07:54', '39.4275654643534', '9.4275654643534'),
(8, 1, 2, '324555644', 'محمد سمير ', '2023-01-17 08:31:05', '39.4275654643534', '9.4275654643534');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `stutes` int(11) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `report_id`, `stutes`, `date`) VALUES
(1, 1, 1, NULL),
(2, 2, 1, NULL),
(3, 1, 2, NULL),
(4, 1, 3, NULL),
(5, 3, 1, '2023-01-17 08:06:12'),
(6, 4, 1, '2023-01-17 08:06:42'),
(7, 5, 1, '2023-01-17 08:06:47'),
(8, 6, 1, '2023-01-17 08:07:06'),
(9, 7, 1, '2023-01-17 08:07:54'),
(10, 8, 1, '2023-01-17 08:31:05'),
(11, 8, 2, NULL),
(12, 2, 2, '2023-01-17 09:29:58'),
(13, 2, 3, '2023-01-17 09:30:28'),
(14, 7, 2, '2023-01-17 09:31:07'),
(15, 7, 3, '2023-01-17 09:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cat_id`, `title`) VALUES
(1, 1, ' ازالة مخلفات تقليم الاشجار '),
(2, 1, 'تربية الحيوانات الضارة '),
(3, 1, ' تراكم نفايات '),
(4, 1, ' تعشيب وتقليم '),
(5, 1, 'ترحيل طيور ومواشي '),
(6, 1, 'وجود نفايات حول الحاويات '),
(7, 1, 'طرح النفايات خارج الاماكن المخصصة '),
(8, 1, ' نظافة الساحات '),
(9, 1, 'صيانة حاويات '),
(10, 1, 'عدم مرور طاحنات '),
(11, 1, 'حرق النفايات '),
(12, 2, 'استغلال ارتداد امامي '),
(13, 2, 'اعمال انشائية في ساعات متاخرة '),
(14, 2, ' حفريات مهجورة '),
(15, 2, 'حفريات مخالفة '),
(16, 2, 'شكاوي ابنية منشآت مخالفة '),
(17, 2, 'شكوى على تغيير صفة الاستعمال لجزء من بناء '),
(18, 2, 'قذف رملي '),
(19, 2, 'طرح انقاض بانواعها '),
(20, 2, '  صيانة ادراج '),
(21, 2, 'صيانة جدران استنادية '),
(22, 2, ' شكوى على حفرية بنية تحتية '),
(23, 2, ' شكوى على ابنية لا يمكن ترخيصها '),
(24, 2, 'شكوى على صيانة المرافق الرياضية '),
(25, 3, 'دخول مياه الى المنازل '),
(26, 3, ' التخلص من المياه العادمة في غير مكانها '),
(27, 3, 'امتلاء حفرة امتصاصية '),
(28, 3, 'تجمع مياه امطار '),
(29, 3, 'تسريب مياه عادمة '),
(30, 3, 'تنظيف مناهل مياه الامطار '),
(31, 3, '  صيانة حفرة امتصاصية '),
(32, 4, 'حفر'),
(33, 4, 'مطبات اسمنتية عشوائية '),
(34, 4, 'استغلال رصيف عوائق '),
(35, 4, '  حواجز اسمنتية وحديدية عوائق '),
(36, 4, 'صيانة أطاريف و أرصفه '),
(37, 4, ' صيانة حفريات أو هبوط ضمن جسم الشارع '),
(38, 4, ' قلابات تطرح طمم عشوائي '),
(39, 4, 'نظافة شوارع '),
(40, 4, ' رفع أو تنزيل وتركيب منهل '),
(41, 4, 'وجود عوائق انشائية في سعة الشارع '),
(42, 4, 'وجود مواد ومخلفات ابنية في سعة الشارع '),
(43, 5, 'ازالة معرشات البيع '),
(44, 5, '  ازالة بسطات '),
(45, 5, 'تأثر منشآت مجاورة للحفريات '),
(46, 5, 'شكوى على لوحة اعلانية '),
(47, 5, 'عدم توفر شروط السلامة العامة في المنشأة '),
(48, 5, 'مخالفة اشتراطات صحية '),
(49, 5, ' ممارسة عمل يؤثر على الصحة '),
(50, 5, 'ممارسة مهنة تقلق الراحة العامة '),
(51, 5, 'ممارسة مهنة غير مصرح بها '),
(52, 5, ' ممارسة مهنة بدون ترخيص '),
(53, 5, 'عرض مواد غذائية على الرصيف '),
(54, 6, 'وجود مدخنة تلحق الضرر بالغير '),
(55, 6, 'احداث روائح كريهة '),
(56, 6, ' انبعاث روائح ناتجة عن مواد كيماوي '),
(57, 6, 'شكوى على مواد غذائية غير صالحة للاستهلاك '),
(58, 6, 'مواد غذائية منتهية الصلاحية '),
(59, 7, 'شكوى على اداء منطقة '),
(60, 0, 'ibraheem'),
(61, 14, 'zxczx'),
(62, 14, 'aboooooood'),
(63, 6, 'zxczcczxzx'),
(64, 6, 'zxczcczxzxsad'),
(65, 12, 'kjhlfjdhjkhas'),
(66, 15, 'hyhnh'),
(67, 8, 'nmnmmnmnmnnnm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cat_id`, `type`, `full_name`, `email`, `password`) VALUES
(1, 1, 1, 'admin1', 'admin1@gmail.com', '*6D45FD76D5E9C6A404E39C25106A7F032659ACB8'),
(2, 2, 2, 'admin2', 'admin2@gmail.com', '*0E6FD44C7B722784DAE6E67EF8C06FB1ACB3E0A6'),
(3, 0, 0, 'ibraheem', 'lksjda@gmail.com', ''),
(4, 0, 0, 'mahmoud', 'mahmoud@gmail.com', ''),
(5, 0, 0, 'ibraheem', 'xzczx@gmail.com', ''),
(6, 0, 0, 'mahmoud', 'as@gmail.com', 'sdf'),
(7, 0, 0, 'ibraheem', 'asdasd@gmail.com', '231213'),
(8, 12, 2, 'afsdfasd', 'as@gmail.com', '$2y$10$veYWK7Ix.k.yht7gyjbw6OMxwBjcuVghv2mTRYSR9vxHJkDgKulge'),
(9, 6, 2, 'ibraheem', 'asdsa@gmail.com', '$2y$10$Avd7BXnCpJnRPBfe9FUugOGXZLa45ye3Wt1vPJ7G9jLO2Ec5bZzui'),
(10, 5, 2, 'abuHaibeh', 'as@gmail.com', '$2y$10$irKRtTjhrjHoaF3xY4Wah.J7nd/A2lL8cXonHn27mm3mgOYssqcC6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`cat_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
