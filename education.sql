-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-22 12:38:37
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `Password` varchar(50) NOT NULL,
  `UserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Password`, `UserName`) VALUES
('21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `AM_C_1` int(2) NOT NULL,
  `AF_C_1` int(2) NOT NULL,
  `PM_C_1` int(2) NOT NULL,
  `AM_M_1` int(2) NOT NULL,
  `AF_M_1` int(2) NOT NULL,
  `PM_M_1` int(2) NOT NULL,
  `outline` text COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `section` int(5) NOT NULL,
  `coursename` varchar(30) COLLATE utf8_bin NOT NULL,
  `method` text COLLATE utf8_bin NOT NULL,
  `AM_C_2` int(11) NOT NULL,
  `AF_C_2` int(11) NOT NULL,
  `PM_C_2` int(11) NOT NULL,
  `AM_M_2` int(11) NOT NULL,
  `AF_M_2` int(11) NOT NULL,
  `PM_M_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`id`, `AM_C_1`, `AF_C_1`, `PM_C_1`, `AM_M_1`, `AF_M_1`, `PM_M_1`, `outline`, `content`, `section`, `coursename`, `method`, `AM_C_2`, `AF_C_2`, `PM_C_2`, `AM_M_2`, `AF_M_2`, `PM_M_2`) VALUES
(18, 0, 0, 0, 0, 0, 0, '测试', '', 1, '5', '测试', 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, '222', '2222_333', 2, '5', '测试', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `coursecate`
--

CREATE TABLE `coursecate` (
  `id` int(11) NOT NULL,
  `catename` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rank` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `coursecate`
--

INSERT INTO `coursecate` (`id`, `catename`, `rank`) VALUES
(1, '初级课程', 1),
(2, '中级课程', 2),
(3, '', 0),
(4, '', 0),
(5, '', 0),
(6, '测试', 0);

-- --------------------------------------------------------

--
-- 表的结构 `courselist`
--

CREATE TABLE `courselist` (
  `id` int(11) NOT NULL,
  `coursename` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `coursecont` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `coursecate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `courselist`
--

INSERT INTO `courselist` (`id`, `coursename`, `coursecont`, `coursecate`) VALUES
(5, 'asdsad', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `environment_display_case`
--

CREATE TABLE `environment_display_case` (
  `id` int(11) NOT NULL,
  `caseName` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `caseRank` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `environment_display_case`
--

INSERT INTO `environment_display_case` (`id`, `caseName`, `caseRank`) VALUES
(20, '11', 111),
(21, '11', 11),
(22, '12', 22);

-- --------------------------------------------------------

--
-- 表的结构 `environment_display_list`
--

CREATE TABLE `environment_display_list` (
  `id` int(11) NOT NULL,
  `listName` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `listCont` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `listPic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `listPicThumb` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `listCase` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `isTop` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `environment_display_list`
--

INSERT INTO `environment_display_list` (`id`, `listName`, `listCont`, `listPic`, `listPicThumb`, `listCase`, `isTop`) VALUES
(28, '11', '11', '', '', '17', 0),
(29, '111', '222', '1495185611_1209600575.jpg', 's_1495185611_1209600575.jpg', '21', 1);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `course` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ConsultationDate` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `period` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(15) NOT NULL,
  `qq` int(60) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `wechat` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remark` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `course`, `ConsultationDate`, `period`, `tel`, `qq`, `email`, `wechat`, `remark`) VALUES
(0, '', '', '1', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `InformationTitle` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationCont` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationContent` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `IsTop` tinyint(1) NOT NULL,
  `IsDes` tinyint(1) NOT NULL,
  `InformationAuthor` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationType` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationUpdate` int(50) NOT NULL,
  `InformationBigPic` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationPic` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationOrder` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `InformationTitle`, `InformationCont`, `InformationContent`, `IsTop`, `IsDes`, `InformationAuthor`, `InformationType`, `InformationUpdate`, `InformationBigPic`, `InformationPic`, `InformationOrder`) VALUES
(13, 'asdasd1', 'asdsad', 'asdsad<br />', 0, 0, 'asdasd', '20', 2017, '', '', '50');

-- --------------------------------------------------------

--
-- 表的结构 `newscate`
--

CREATE TABLE `newscate` (
  `id` int(5) NOT NULL,
  `cateintruduction` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `catename` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `newscate`
--

INSERT INTO `newscate` (`id`, `cateintruduction`, `catename`) VALUES
(20, '瞎编的', '不知道'),
(21, '测试', '新增分类');

-- --------------------------------------------------------

--
-- 表的结构 `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL,
  `styleName` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stylePic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stylePicThumb` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `styleCont` text CHARACTER SET utf8 COLLATE utf8_bin,
  `listCase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `style`
--

INSERT INTO `style` (`id`, `styleName`, `stylePic`, `stylePicThumb`, `styleCont`, `listCase`) VALUES
(11, '22', '1495162440_1517507688.jpg', 's_1495162440_1517507688.jpg', '222', 6);

-- --------------------------------------------------------

--
-- 表的结构 `stylecase`
--

CREATE TABLE `stylecase` (
  `id` int(11) NOT NULL,
  `caseName` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `caseRank` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `stylecase`
--

INSERT INTO `stylecase` (`id`, `caseName`, `caseRank`) VALUES
(6, '2016', ''),
(7, '2015', '2');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacherfield` varchar(30) DEFAULT NULL,
  `teachername` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pic` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pic_thumb` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `teacherhonor` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `opinion` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `advantage` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `experience` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `teacherfield`, `teachername`, `description`, `pic`, `pic_thumb`, `teacherhonor`, `opinion`, `advantage`, `experience`) VALUES
(20, NULL, '测试', '测试', '1495166223_1692260230.jpg', 's_1495166223_1692260230.jpg', '测试', '', '', ''),
(21, '5', 'rich', '121212', '1495164910_1560448430.png', 's_1495164910_1560448430.png', 'leader', '呵呵', '测试', '测试');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecate`
--
ALTER TABLE `coursecate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courselist`
--
ALTER TABLE `courselist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `environment_display_case`
--
ALTER TABLE `environment_display_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `environment_display_list`
--
ALTER TABLE `environment_display_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newscate`
--
ALTER TABLE `newscate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stylecase`
--
ALTER TABLE `stylecase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `coursecate`
--
ALTER TABLE `coursecate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `courselist`
--
ALTER TABLE `courselist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `environment_display_case`
--
ALTER TABLE `environment_display_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 使用表AUTO_INCREMENT `environment_display_list`
--
ALTER TABLE `environment_display_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `newscate`
--
ALTER TABLE `newscate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `stylecase`
--
ALTER TABLE `stylecase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
