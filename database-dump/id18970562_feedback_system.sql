-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2022 at 06:59 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18970562_feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_events`
--

CREATE TABLE `course_events` (
  `event_id` int(11) NOT NULL,
  `teacher_name` varchar(250) NOT NULL,
  `event_title` varchar(280) NOT NULL,
  `event_description` varchar(350) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `school` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_events`
--

INSERT INTO `course_events` (`event_id`, `teacher_name`, `event_title`, `event_description`, `date_created`, `school`) VALUES
(1, 'MR. PUTIN', 'assignment feedback', 'how was the assignment', '0000-00-00 00:00:00', 'school of arts'),
(2, 'Dr. Gan Keng Hoon', 'Pixel 2022', 'FYP project', '2022-06-20 00:00:00', 'computer science');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `feedback_type` varchar(56) NOT NULL,
  `subject` varchar(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `student_name`, `comment`, `date`, `feedback_type`, `subject`) VALUES
(44, 'Cheah Chin Xiong ', 'Nice lecture', '2021-10-29 09:06:19', 'student_reviews', 'Unit Reviews'),
(45, 'TAN TEIK SEAN', 'very interactive', '2021-10-29 09:06:39', 'student_reviews', 'Course Rating'),
(46, 'Tang Wen Shuen', 'The lesson is pretty informative', '2021-10-29 09:07:19', 'student_reviews', 'Course Rating'),
(47, 'LOO KAI', '', '2021-10-29 09:10:55', 'student_reviews', 'Course Rating'),
(48, 'Shong Yi Xian', 'Very good', '2021-10-29 09:11:38', 'student_reviews', 'Lecturer Rating'),
(49, 'Teh Zhen Rong', '', '2021-10-29 09:14:52', 'student_reviews', 'Unit Reviews'),
(50, 'Son Yu De', 'It was interactive and informative.', '2021-10-29 09:15:27', 'student_reviews', 'Lecturer Rating'),
(51, 'Daniel Zairin bin Rozaimi', 'Easy to follow and I can see how the different domains are connected. Some terms/words/jargon are still alien to me but that is expected when learning a new subject. The activities were fun! I like how the activity relates NLP to real life (YouTube auto-generated captions).', '2021-10-29 09:23:27', 'student_reviews', 'Course Rating'),
(52, 'Wong Hao Jie', 'Everything is ok.', '2021-10-29 09:36:00', 'student_reviews', 'Lecturer Rating'),
(53, 'Yoseph Martin Lay', '\"The learning is well received', '2021-10-29 09:36:24', 'student_reviews', 'Unit Reviews'),
(54, 'LIM PHEI SZE', '\"The instruction for breakout session is unclear (about the application list)', '2021-10-29 09:44:03', 'student_reviews', 'Lecturer Rating'),
(55, 'Syarifah Nur Fatimah binti Syed Firdaus', '\"The lecture is okay', '2021-10-29 09:50:59', 'student_reviews', 'Lecturer Rating'),
(56, 'AZWAAR KHAN BIN AZLIM KHAN', 'Today was great! The lesson was enjoyable due to the activities that we were required to do. It helped me understand the content that was delivered!', '2021-10-28 22:00:16', 'student_reviews', 'Lecturer Rating'),
(57, 'Tan Chin Liang', '', '2021-10-28 23:11:58', 'student_reviews', 'Lecturer Rating'),
(58, 'Tan Chi Feng', '\"Overall okay', '2021-10-29 00:01:48', 'student_reviews', 'Lecturer Rating'),
(59, 'Thanish A/L Natarajan', 'Understandable.', '2021-10-29 00:05:25', 'student_reviews', 'Course Rating'),
(60, 'MUHAMMAD DANIAL BIN MUSTAFFA KAMAL ', 'i think the interaction class is good and we could communicate and work as a team. Its FUN!!!', '2021-10-29 00:51:08', 'student_reviews', 'Course Rating'),
(61, 'Loke Cherng Yi', '\"Overall is Good', '2021-10-29 01:30:32', 'student_reviews', 'Course Rating'),
(62, 'Ashley Wang Sze Mei', 'The breakout room and activities gave us opportunity for hands-on rather than listening all the way so it made things interesting. Even better if Dr specified how long the breakout session would be (or did I miss it? haha) so we could manage our discussion time accordingly.', '2021-10-29 01:49:26', 'student_reviews', 'Lecturer Rating'),
(63, 'Muhammad Fakhruddin Bin Norulhaizy', 'So far so good. Just have internet connection problem so sometimes cannot hear what lecturer are teaching.', '2021-10-30 04:51:57', 'student_reviews', 'Unit Reviews'),
(64, 'AFIQAH IFFAH', '\"For now', '2021-10-30 07:10:30', 'student_reviews', 'Lecturer Rating'),
(65, 'Chan Siang Sheng', 'Informative', '2021-10-31 06:21:03', 'student_reviews', 'Lecturer Rating'),
(66, 'Cheam Yu Chein', '\"The class can be taught faster a bit', '2021-10-31 06:01:50', 'student_reviews', 'Course Rating'),
(67, 'Kirtiniroopa A/P Shankar', '', '2021-10-31 06:36:06', 'student_reviews', 'Unit Reviews'),
(68, 'Tae Hong Xi', 'So far so good.', '2021-11-02 05:13:41', 'student_reviews', 'Unit Reviews'),
(69, 'Tiong Qin', 'Maybe Dr could create another padlet to put the different class activities so that it will be easier to see the related activities on particular day', '2021-11-03 08:59:58', 'student_reviews', 'Unit Reviews'),
(70, 'Intan Athirah Jailani', 'It is great and not boring', '2021-11-04 08:30:55', 'student_reviews', 'Course Rating'),
(71, 'SITI AISHAH BINTI SAIFUL BAHRI', 'The lecture is really entertaining. I just had a little confusion in the group work on what we are supposed to do. But apart from that everything is good and fun.', '2021-11-04 08:38:06', 'student_reviews', 'Lecturer Rating'),
(72, 'Wan Muhammad Rusyaidi Afifi Bin Wan Mohammad Zin @ Wan Fauzi', '\"really enjoyed the online lecture. I thought it was well planned and layed out', '2021-11-04 08:40:16', 'student_reviews', 'Course Rating'),
(73, 'Afiqah Umairah Binti Mohd Azni', 'Great!!', '2021-11-04 09:14:10', 'student_reviews', 'Unit Reviews'),
(74, 'YEO PUI YAN', 'Great', '2021-11-04 09:51:38', 'student_reviews', 'Lecturer Rating'),
(75, 'NOOR FILZA BINTI MOHAMAD FADIL', 'Interesting lecture as Dr. had use breakout room ', '2021-11-03 22:09:59', 'student_reviews', 'Unit Reviews'),
(76, 'Koo Xi Moon', '', '2021-11-03 22:16:37', 'student_reviews', 'Unit Reviews'),
(77, 'Liew Xue Yao 143452', 'Having fun to know more about NLP', '2021-11-03 23:58:58', 'student_reviews', 'Course Rating'),
(78, 'Muhammad Imran bin Roshidi', 'Very informative and not difficult to follow', '2021-11-04 03:03:09', 'student_reviews', 'Course Rating'),
(79, 'Sia Wey Sian', 'Very good', '2021-11-04 03:59:05', 'student_reviews', 'Course Rating'),
(80, 'TAN LAI YEE', '\"i like the whole class flow very much', '2021-11-05 02:30:03', 'student_reviews', 'Lecturer Rating'),
(81, 'li penglin', 'Good', '2021-11-05 05:27:12', 'student_reviews', 'Unit Reviews'),
(82, 'YANG DAISHENG', '', '2021-11-05 06:45:26', 'student_reviews', 'Lecturer Rating'),
(83, 'Teoh Sin Yee', '\"I love it since it is very interactive & trigger my interest to explore more about NLP. Dr also explained a complicated concepts in layman\'s terms. It is good to continue this T&L style', '2021-11-05 06:49:45', 'student_reviews', 'Lecturer Rating'),
(84, 'Ammar bin Nor Shahrin', '', '2021-11-05 07:07:14', 'student_reviews', 'Unit Reviews');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(280) NOT NULL,
  `full_names` varchar(350) NOT NULL,
  `course` varchar(350) NOT NULL,
  `school` varchar(250) NOT NULL,
  `date_registered` date NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(35) NOT NULL,
  `class_enrolled` varchar(230) NOT NULL,
  `interests` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `full_names`, `course`, `school`, `date_registered`, `user_type`, `class_enrolled`, `interests`) VALUES
(1, 'johndoe@gmail.com', 'johndoe', 'John doe msomi', 'BSC. Medicine', 'School of the Biological sciences', '2022-05-12', 'student', '', ''),
(70, 'CheahChinXiong@gmail.com', 'ac27b77292582bc293a51055bfc994ee', 'Cheah Chin Xiong ', 'BSC Mathematics', 'School of the Computer sciences', '2022-05-26', 'student', '', ''),
(71, 'TANTEIKSEAN@gmail.com', '0cb929eae7a499e50248a3a78f7acfc7', 'TAN TEIK SEAN', 'BSC IT', 'School of the Chemical sciences', '2022-05-26', 'student', '', ''),
(72, 'TangWenShuen@gmail.com', '86109d400f0ed29e840b47ed72777c84', 'Tang Wen Shuen', 'BSC Mathematics', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(73, 'LOOKAI@gmail.com', '7990ec44fcf3d7a0e5a2add28362213c', 'LOO KAI', 'BSC Medicine', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(74, 'ShongYiXian@gmail.com', '6a7dc0811b68d34739654a26ebdb707f', 'Shong Yi Xian', 'BSC Mathematics', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(75, 'TanMayMin@gmail.com', '9bdb8b1faffa4b3d41779bb495d79fb9', 'Tan May Min', 'BSC Mathematics', 'School of Communication', '2022-05-26', 'student', '', ''),
(76, 'ChewYouShen@gmail.com', 'bea6cfd50b4f5e3c735a972cf0eb8450', 'Chew You Shen', 'BSC Medicine', 'School of the Computer sciences', '2022-05-26', 'student', '', ''),
(77, 'TehZhenRong@gmail.com', 'ee80e0a74aac64251238cecee2b066ca', 'Teh Zhen Rong', 'BBIT', 'School of the arts', '2022-05-26', 'student', '', ''),
(78, 'ElwinChiongZhenHui@gmail.com', 'c1d53b7a97707b5cd1815c8d228d8ef1', 'Elwin Chiong Zhen Hui', 'BSC Mathematics', 'School of the Management', '2022-05-26', 'student', '', ''),
(79, 'SonYuDe@gmail.com', 'ccf0304d099baecfbe7ff6844e1f6d91', 'Son Yu De', 'BSC Mathematics', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(80, 'KHORZHONGQUAN@gmail.com', '9b698eb3105bd82528f23d0c92dedfc0', 'KHOR ZHONG QUAN', 'BSC Mathematics', 'School of the arts', '2022-05-26', 'student', '', ''),
(81, 'Adityamurtikusumaatmaja@gmail.com', '068004fef1759529ff6f29015cde17cd', 'Aditya murti kusuma atmaja', 'BBIT', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(82, 'DanielZairinbinRozaimi@gmail.com', '90525e70b7842930586545c6f1c9310c', 'Daniel Zairin bin Rozaimi', 'BSC Medicine', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(83, 'WongHaoJie@gmail.com', '677fa4059ee76333f9bb9a7920aef719', 'Wong Hao Jie', 'BSC Medicine', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(84, 'YosephMartinLay@gmail.com', '226d1f15ecd35f784d2a20c3ecf56d7f', 'Yoseph Martin Lay', 'BSC IT', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(85, 'LIMPHEISZE@gmail.com', '7e3315fe390974fcf25e44a9445bd821', 'LIM PHEI SZE', 'BSC Mathematics', 'School of the arts', '2022-05-26', 'student', '', ''),
(86, 'SyarifahNurFatimahbintiSyedFirdaus@gmail.com', 'c203d8a151612acf12457e4d67635a95', 'Syarifah Nur Fatimah binti Syed Firdaus', 'BSC Mathematics', 'School of the Computer sciences', '2022-05-26', 'student', '', ''),
(87, 'AZWAARKHANBINAZLIMKHAN@gmail.com', '1cd138d0499a68f4bb72bee04bbec2d7', 'AZWAAR KHAN BIN AZLIM KHAN', 'BBIT', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(88, 'TanChinLiang@gmail.com', '9a3f54913bf27e648d1759c18d007165', 'Tan Chin Liang', 'BBC Business', 'School of Communication', '2022-05-26', 'student', '', ''),
(89, 'TanChiFeng@gmail.com', 'd7657583058394c828ee150fada65345', 'Tan Chi Feng', 'BSC IT', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(90, 'ThanishA/LNatarajan@gmail.com', '432aca3a1e345e339f35a30c8f65edce', 'Thanish A/L Natarajan', 'BSC IT', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(91, 'MUHAMMADDANIALBINMUSTAFFAKAMAL@gmail.com', '3335881e06d4d23091389226225e17c7', 'MUHAMMAD DANIAL BIN MUSTAFFA KAMAL ', 'BBC Business', 'School of the Biological sciences', '2022-05-26', 'student', '', ''),
(92, 'SHUHUIYII@gmail.com', '98c7242894844ecd6ec94af67ac8247d', 'SHU HUI YII', 'BBIT', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(93, 'LokeCherngYi@gmail.com', 'aba54c23d97bf1321a4275e21d615112', 'Loke Cherng Yi', 'BBIT', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(94, 'AshleyWangSzeMei@gmail.com', '8e065119c74efe3a47aec8796964cf8b', 'Ashley Wang Sze Mei', 'BBIT', 'School of the arts', '2022-05-26', 'student', '', ''),
(95, 'KATHEERAVANA/LBALASUBRAMANIAM@gmail.com', '131f383b434fdf48079bff1e44e2d9a5', 'KATHEERAVAN A/L BALASUBRAMANIAM', 'BSC IT', 'School of Communication', '2022-05-26', 'student', '', ''),
(96, 'LimShauHong@gmail.com', '147540e129e096fa91700e9db6588354', 'Lim Shau Hong', 'BSC Mathematics', 'School of Communication', '2022-05-26', 'student', '', ''),
(97, 'MuhammadFakhruddinBinNorulhaizy@gmail.com', '45624a44b89793087e9ef4d076018adb', 'Muhammad Fakhruddin Bin Norulhaizy', 'BBC Business', 'School of the Computer sciences', '2022-05-26', 'student', '', ''),
(98, 'LingGaomian@gmail.com', '97788494d0cb9c4ad37af9a76290b361', 'Ling Gaomian', 'BSC Mathematics', 'School of the arts', '2022-05-26', 'student', '', ''),
(99, 'HoKhumLeon@gmail.com', '54f5f4071faca32ad5285fef87b78646', 'Ho Khum Leon', 'BSC Medicine', 'School of Communication', '2022-05-26', 'student', '', ''),
(100, 'AFIQAHIFFAH@gmail.com', '6ea3f1874b188558fafbab78e8c3a968', 'AFIQAH IFFAH', 'BSC IT', 'School of the arts', '2022-05-26', 'student', '', ''),
(101, 'ChanSiangSheng@gmail.com', '0e3a37aa85a14e359df74fa77eded3f6', 'Chan Siang Sheng', 'BSC Medicine', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(102, 'HalimShodri@gmail.com', 'ea6979872125d5acbac6068f186a0359', 'Halim Shodri', 'BBC Business', 'School of the arts', '2022-05-26', 'student', '', ''),
(103, 'CheamYuChein@gmail.com', '07c5807d0d927dcd0980f86024e5208b', 'Cheam Yu Chein', 'BSC Medicine', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(104, 'KirtiniroopaA/PShankar@gmail.com', '9ff0525c64bf3d4c9957a1d4397f1b40', 'Kirtiniroopa A/P Shankar', 'BSC IT', 'School of the Management', '2022-05-26', 'student', '', ''),
(105, 'MuhamadIhramRashkyKamal@gmail.com', '5505712229fb1eb500efadddc0353264', 'Muhamad Ihram Rashky Kamal', 'BBC Business', 'School of the Biological sciences', '2022-05-26', 'student', '', ''),
(106, 'TaeHongXi@gmail.com', '7fea637fd6d02b8f0adf6f7dc36aed93', 'Tae Hong Xi', 'BBC Business', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(107, 'OMSYARANA/LCHANDRAN@gmail.com', '72b32a1f754ba1c09b3695e0cb6cde7f', 'OMSYARAN A/L CHANDRAN', 'BSC Mathematics', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(108, 'Ch\'ngGuoYang@gmail.com', 'b3e3e393c77e35a4a3f3cbd1e429b5dc', 'Ch\'ng Guo Yang', 'BBC Business', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(109, 'TiongQin@gmail.com', '2e0d41e02c5be4668ec1b0730b3346a8', 'Tiong Qin', 'BSC Mathematics', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(110, 'IntanAthirahJailani@gmail.com', '3b220b436e5f3d917a1e649a0dc0281c', 'Intan Athirah Jailani', 'BBC Business', 'School of the Biological sciences', '2022-05-26', 'student', '', ''),
(111, 'SITIAISHAHBINTISAIFULBAHRI@gmail.com', '8725fb777f25776ffa9076e44fcfd776', 'SITI AISHAH BINTI SAIFUL BAHRI', 'BBC Business', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(112, 'WanMuhammadRusyaidiAfifiBinWanMohammadZin@WanFauzi@gmail.com', '5eac43aceba42c8757b54003a58277b5', 'Wan Muhammad Rusyaidi Afifi Bin Wan Mohammad Zin @ Wan Fauzi', 'BBIT', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(113, 'AfiqahUmairahBintiMohdAzni@gmail.com', 'e8a642ed6a9ad20fb159472950db3d65', 'Afiqah Umairah Binti Mohd Azni', 'BBC Business', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(114, 'YEOPUIYAN@gmail.com', 'e551d3ddbf87bddac369765bd58213a5', 'YEO PUI YAN', 'BSC Mathematics', 'School of Educational Studies', '2022-05-26', 'student', '', ''),
(115, 'NOORFILZABINTIMOHAMADFADIL@gmail.com', '30de24287a6d8f07b37c716ad51623a7', 'NOOR FILZA BINTI MOHAMAD FADIL', 'BSC Medicine', 'School of Communication', '2022-05-26', 'student', '', ''),
(116, 'KooXiMoon@gmail.com', 'cacbf64b8a464fa1974da1eb0aa92851', 'Koo Xi Moon', 'BBC Business', 'School of Communication', '2022-05-26', 'student', '', ''),
(117, 'LiewXueYao143452@gmail.com', '05ec04f7fb3bc3281f1db83bfc1a2490', 'Liew Xue Yao 143452', 'BBIT', 'School of the Management', '2022-05-26', 'student', '', ''),
(118, 'MuhammadImranbinRoshidi@gmail.com', 'b075703bbe07a50ddcccfaac424bb6d9', 'Muhammad Imran bin Roshidi', 'BSC Mathematics', 'School of the Computer sciences', '2022-05-26', 'student', '', ''),
(119, 'SiaWeySian@gmail.com', '2e907f44e0a9616314cf3d964d4e3c93', 'Sia Wey Sian', 'BBC Business', 'School of Communication', '2022-05-26', 'student', '', ''),
(120, 'TANLAIYEE@gmail.com', 'e7a0ac723159df05cb1edaa7683e1a53', 'TAN LAI YEE', 'BSC Mathematics', 'School of the arts', '2022-05-26', 'student', '', ''),
(121, 'lipenglin@gmail.com', 'd005ce7aeef46bd18515f783fb8e87fa', 'li penglin', 'BSC IT', 'School of Housing, Building And Planning', '2022-05-26', 'student', '', ''),
(122, 'YANGDAISHENG@gmail.com', '1c824be2be6ac655657c6bc78527dfd7', 'YANG DAISHENG', 'BSC IT', 'School of the Chemical sciences', '2022-05-26', 'student', '', ''),
(123, 'TeohSinYee@gmail.com', 'b085c4fa543afe32970749f5e2bcdc6a', 'Teoh Sin Yee', 'BSC Mathematics', 'School of the Chemical sciences', '2022-05-26', 'student', '', ''),
(124, 'AmmarbinNorShahrin@gmail.com', 'f6e794a75c5d51de081dbefa224304f9', 'Ammar bin Nor Shahrin', 'BSC IT', 'School of the Biological sciences', '2022-05-26', 'student', '', ''),
(125, 'johndoe@gmail.com', 'johndoe', 'John doe msomi', 'BSC. Medicine', 'School of the Biological sciences', '2022-05-12', 'student', '', ''),
(126, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. Arts', 'School of the arts', '2022-05-13', 'student', '', ''),
(127, 'johndoemsomi@gmail.com', 'admin', 'Joan doe ', 'BSC. Agriculture', 'School of the Biological sciences', '2022-05-13', 'student', '', ''),
(128, 'joddsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. IT', 'School of the Computer sciences', '2022-05-13', 'student', '', ''),
(129, 'frr@gmail.com', 'admin', 'francis', 'BSC Business', 'School of the Management', '2022-05-13', 'student', '', ''),
(130, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. Medicine', 'School of the arts', '2022-05-13', 'student', '', ''),
(131, 'johndoemsomi@gmail.com', 'admin', 'Joan doe ', 'BSC. IT', 'School of Communication', '2022-05-13', 'student', '', ''),
(132, 'johndoemsomi@gmail.com', 'admin', 'francis g', 'BSC. Agriculture', 'School of Educational Studies', '2022-05-13', 'student', '', ''),
(133, 'johndoemsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. Agriculture', 'School of the Management', '2022-05-13', 'student', '', ''),
(134, 'johndoemsomi@gmail.com', 'admin', 'francis g', 'BSC. Medicine', 'School of the Biological sciences', '2022-05-13', 'student', '', ''),
(135, 'johndoemsomi@gmail.com', 'admin', 'Jon doe ', 'BSC. IT', 'School of Educational Studies', '2022-05-13', 'student', '', ''),
(136, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC Business', 'School of the Management', '2022-05-13', 'student', '', ''),
(137, 'johndoemsomi@gmail.com', 'admin', 'John doe msomi', 'BSC. IT', 'School of the arts', '2022-05-13', 'student', '', ''),
(138, 'johndoemsomi2@gmail.com', 'admin', 'John doe msomi', 'BSC. Agriculture', 'School of Communication', '2022-05-23', 'student', '', ''),
(139, 'jkk@jkk.com', 'jkk@jkk.com', 'jkk', 'BSC Computer Science', 'School of the Chemical sciences', '2022-05-23', 'student', 'Bachelor of Science', 'N/A'),
(140, 'Kll@gmail.com', '123', 'Kll', 'Mnn', 'School of the Biological sciences', '2022-05-23', 'student', 'Bachelor of Science', 'N/A'),
(141, '1668590501@qq.com', '123', 'wang jun hao', 'CAT400', 'School of the Computer sciences', '2022-05-23', 'student', 'Bachelor of Science', 'N/A'),
(142, 'karenloti45@gmail.com', 'Karen@123', 'Karen loti', 'Business information technology', 'School of the Computer sciences', '2022-05-25', 'student', 'Bachelor of Science', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_events`
--
ALTER TABLE `course_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_events`
--
ALTER TABLE `course_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
