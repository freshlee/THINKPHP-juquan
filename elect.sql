-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 27 日 16:33
-- 服务器版本: 5.5.40
-- PHP 版本: 5.4.33

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `elect`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `Remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`UserID`, `UserName`, `Password`, `rank`, `Remark`) VALUES
(1, 'admin', '320b0716327f7bc6cfee29a3c2b2b3d3', 1, ''),
(4, 'admin1', '9a24fad58c267f52318935512606c6b9', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_adsid` int(11) NOT NULL,
  `ad_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `ad_img` varchar(50) COLLATE utf8_bin NOT NULL,
  `ad_link` varchar(100) COLLATE utf8_bin NOT NULL,
  `ad_onoff` tinyint(4) NOT NULL,
  `ad_sort` tinyint(4) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `advert`
--

INSERT INTO `advert` (`ad_id`, `ad_adsid`, `ad_name`, `ad_img`, `ad_link`, `ad_onoff`, `ad_sort`) VALUES
(1, 4, '广告2-1', '57dbbca86b86d.png', 'http://www.letu.com', 1, 50),
(3, 1, '广告1-1', '57db7d830ff95.png', 'https://www.baidu.com', 1, 50),
(4, 1, '广告1-2', '57db604aa88fd.png', 'https://www.baidu.com', 1, 50),
(5, 1, '广告1-3', '57db7df5053ec.png', 'https://www.baidu.com', 1, 50),
(10, 5, '现代1', '57de35b99ec96.png', '#', 1, 50),
(7, 4, '广告2-2', '57dbbcbe11679.png', 'https://www.baidu.com', 1, 50),
(8, 4, '广告2-3', '57db7dd76de93.png', 'https://www.baidu.com', 1, 50),
(11, 5, '现代2', '57de35cc8bf3a.jpg', '#', 1, 50),
(12, 5, '现代3', '57de35f518519.png', '#', 1, 50),
(13, 1, '标题图片', '57e001d3496f5.jpg', '#', 1, 51),
(14, 4, '标题图片', '57e002187b06a.jpg', '#', 1, 51),
(15, 5, '标题图片', '57e00225dbd2e.jpg', '#', 1, 51);

-- --------------------------------------------------------

--
-- 表的结构 `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_adsid` int(11) NOT NULL,
  `ad_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `ad_img` varchar(50) COLLATE utf8_bin NOT NULL,
  `ad_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `ad_onoff` tinyint(4) NOT NULL,
  `ad_sort` int(11) NOT NULL,
  `ad_content` text COLLATE utf8_bin NOT NULL,
  `ad_econtent` text COLLATE utf8_bin NOT NULL,
  `ad_simg` varchar(30) COLLATE utf8_bin NOT NULL,
  `ad_update` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `advertisement`
--

INSERT INTO `advertisement` (`ad_id`, `ad_adsid`, `ad_name`, `ad_img`, `ad_link`, `ad_onoff`, `ad_sort`, `ad_content`, `ad_econtent`, `ad_simg`, `ad_update`) VALUES
(1, 1, '公司', '58f99138024b8.jpg', '', 1, 50, '<span style="font-size:14px;"><span style="font-size:16px;"><span style="font-family:FangSong_GB2312;font-size:16px;"><span style="font-size:18px;"><strong> \r\n<p>\r\n	</strong></span></span></span></span><span style="line-height:1.5;">&nbsp;</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#000000;font-size:20pt;font-weight:normal;"><span style="font-family:NSimSun;font-size:24px;">&nbsp;&nbsp;&nbsp; <span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">佛山市顺德区世锐电器实业有限公司是</span></span><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">LED射灯等产品专业生产加工的公司，拥有完整、科学的质量管理体系。佛山市顺德区世锐五金实业有限公司的诚信、实力和产品质量获得业界的认可。欢迎各界朋友莅临参观、指导和业务洽谈。公司具备雄厚</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#000000;font-size:20pt;font-weight:normal;"><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">的研发和生产能力团队，拥有行业资深产品研发团队，引进世界先进的生产设备和工艺。公司自创立之初，即秉持</span><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">“品种齐全，质量可靠，供货稳定，服务周全”的企业理念，广获新老客户的信赖和支持。</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#000000;font-size:20pt;font-weight:normal;"></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:2;font-style:normal;font-family:NSimSun;background:#ffffff;color:#666666;font-size:18px;font-weight:normal;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="line-height:2;font-style:normal;font-family:NSimSun;background:#ffffff;color:#666666;font-size:18px;font-weight:normal;"><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">公司位于广东第三大城市，中国近代明清的天下四聚之一佛山。我们有最好的产品和专业的销售和技术团队，在公司发展壮大的这些年里，我们为客户提供最好的产品，良好的技术支持、健全的售后服务。本公司是一家自主研发、生产、销售为一体的高科技民营企业。产品的质量和服务赢得了广大用户及行业批发商的好评。公司主要烟机</span></span><span style="line-height:2;font-style:normal;font-family:NSimSun;background:#ffffff;color:#666666;font-size:18px;font-weight:normal;">LED，冰箱LED,橱柜LED等产品。</span><span style="line-height:2;font-style:normal;font-family:NSimSun;background:#ffffff;color:#666666;font-size:18px;font-weight:normal;"><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">佛山市顺德区世锐电器实业有限公司</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#000000;font-size:20pt;font-weight:normal;"><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">用心追求完美品质、用心做好每一灯、用心服务每一位顾客</span><span style="line-height:2;font-family:NSimSun;color:#666666;font-size:18px;">……让您尽情的体验光的魅力，享受美好生活。</span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp;\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp;\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp;\r\n</p>', 'ffsdg fdgdf sdgtuj yjt ftgh df<img alt="" src="/Public/images/upload/image/20170413/20170413091826_34617.png" /><br />', 's_58f99138024b8.jpg', '2017-04-12'),
(2, 4, '首页内容-中文1', '58eeead4a6810.png', '世锐', 1, 50, '', '', 's_58eeead4a6810.png', '2017-04-13'),
(3, 4, '首页内容-中文2', '58f0780806d60.jpg', '专于各类照明制造商', 1, 50, '', '', 's_58f0780806d60.jpg', '2017-04-13'),
(4, 5, '底部', '', '#', 1, 50, '<table class="ke-zeroborder" cellspacing="0" cellpadding="0" border="0" width="980">\r\n	<tbody>\r\n		<tr>\r\n			<td style="color:#aaaaa9;" valign="top" height="76" width="323">\r\n				世锐电器<br />\r\n邮箱:info@shirui.com\r\n			</td>\r\n			<td style="color:#aaaaa9;" valign="top" width="329">\r\n				电话：+86 0757 22252815<br />\r\n传真：+86 0757 22252815\r\n			</td>\r\n			<td style="color:#aaaaa9;" valign="top" width="328">\r\n				地址：广东省佛山市顺德区 <br />\r\n邮政编码：528318\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table class="ke-zeroborder" cellspacing="0" cellpadding="0" border="0" width="980">\r\n	<tbody>\r\n		<tr>\r\n			<td style="color:#aaaaa9;" valign="top" height="76" width="323">\r\n				shiruidianqi<br />\r\nemail:info@shirui.com\r\n			</td>\r\n			<td style="color:#aaaaa9;" valign="top" width="329">\r\n				tel：+86 0757 22252815<br />\r\nfax：+86 0757 22252815\r\n			</td>\r\n			<td style="color:#aaaaa9;" valign="top" width="328">\r\n				address：广东省中山市小榄镇绩西同安工业区新丰路2号 <br />\r\npostcode：528318\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '', '2017-04-13'),
(5, 2, '留言', '58f997507ba20.jpg', '', 1, 50, '111', '222', 's_58f997507ba20.jpg', '2017-04-13'),
(6, 3, '联系', '58f9965a05f50.jpg', '', 1, 50, '<span style="font-size:small;" class="Apple-style-span"><span style="line-height:normal;" class="Apple-style-span"></span></span><span style="font-size:small;" class="Apple-style-span"><span style="line-height:normal;" class="Apple-style-span"><strong><span style="color:#666666;">&nbsp;</span></strong> \r\n<p style="text-align:left;" class="MsoNormal">\r\n	<span style="line-height:2;font-style:normal;font-family:微软雅黑;background:#ffffff;color:#666666;font-size:24px;font-weight:normal;"><span style="line-height:2;color:#666666;font-size:24px;"><strong>佛山市顺德区世锐五金实业有限公司</strong></span></span> \r\n</p>\r\n<p style="text-align:left;" class="MsoNormal">\r\n	<span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"><span style="line-height:2;color:#666666;font-size:16px;">联</span><span style="line-height:2;color:#666666;font-size:16px;">&nbsp;系&nbsp;&nbsp;人：陈小姐&nbsp;</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"></span> \r\n</p>\r\n<p style="text-align:left;" class="MsoNormal">\r\n	<span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"><span style="line-height:2;color:#666666;font-size:16px;">电</span><span style="line-height:2;color:#666666;font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：0757-23666251</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"></span> \r\n</p>\r\n<p style="text-align:left;" class="MsoNormal">\r\n	<span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"><span style="line-height:2;color:#666666;font-size:16px;">传</span><span style="line-height:2;color:#666666;font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;真：0757-29390361</span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"></span> \r\n</p>\r\n<p style="text-align:left;" class="MsoNormal">\r\n	<span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"><span style="line-height:2;color:#666666;font-size:16px;">地</span><span style="line-height:2;color:#666666;font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：广东省佛山市顺德区勒流港集约工业开发区1-4号地之五 </span></span><span style="font-style:normal;font-family:微软雅黑;background:#ffffff;color:#888888;font-size:20pt;font-weight:normal;"></span>\r\n</p>\r\n<p class="p0">\r\n	<span style="font-family:Microsoft YaHei;color:#000000;font-size:16px;font-weight:bold;">\r\n</p>\r\n<p class="p0">\r\n	</span></span></span><span style="font-size:small;" class="Apple-style-span"><strong><span></span></strong><img alt="" src="/Public/images/upload/image/20170422/20170422114811_25899.jpg" /> \r\n</p>\r\n</span>', '55', 's_58f9965a05f50.jpg', '2017-04-13'),
(8, 6, '产品中心图2', '58fadc26d0b10.jpg', '', 1, 60, '', '', 's_58fadc26d0b10.jpg', '2017-04-14'),
(17, 9, '1', '58f9908d20918.jpg', '/', 1, 2, '', '', 's_58f9908d20918.jpg', '2017-04-20'),
(18, 9, '2', '58f9910872d80.jpg', '/', 1, 3, '', '', 's_58f9910872d80.jpg', '2017-04-20'),
(19, 9, '3', '58f98f1759358.jpg', '/', 1, 1, '', '', 's_58f98f1759358.jpg', '2017-04-20'),
(20, 10, 'HEAVEN GLASS 2.0 FLAT', '590176cc9b078.jpg', '', 1, 50, '', '', 's_590176cc9b078.jpg', '2017-04-27'),
(21, 10, 'HEAVEN GLASS 2.0 FLAT1', '5901773b17318.jpg', '', 1, 50, '', '', 's_5901773b17318.jpg', '2017-04-27'),
(22, 10, 'HEAVEN GLASS 2.0 FLAT2', '5901774c86088.jpg', '', 1, 50, '', '', 's_5901774c86088.jpg', '2017-04-27'),
(23, 10, 'HEAVEN GLASS 2.0 FLAT3', '5901775c89f08.jpg', '', 1, 50, '', '', 's_5901775c89f08.jpg', '2017-04-27'),
(24, 10, 'HEAVEN GLASS 2.0 FLAT4', '59018f2161e68.jpg', '', 1, 50, '', '', 's_59018f2161e68.jpg', '2017-04-27'),
(25, 11, '公司简介幻灯片', '5901907d186a0.jpg', '', 1, 50, '', '', 's_5901907d186a0.jpg', '2017-04-27'),
(9, 7, '证书1', '58f6d53658d18.jpg', '', 0, 50, '', '', 's_58f6d53658d18.jpg', '2017-04-14'),
(13, 8, 'qq', '', '', 1, 50, '464740346|客服-小小|1,369915247|客服-美美|1,3223537873|售后-紫紫|1,369915247|售前-亮亮|1', '464740346|客服-小小|1,369915247|客服-美美|1,3223537873|售后-紫紫|1,369915247|售前-亮亮|1', '', '2017-04-15'),
(16, 8, '微信', '', '', 1, 60, '<br />', '', '', '2017-04-15'),
(7, 6, '产品中心图1', '58facbf558548.jpg', '', 1, 50, '', '', 's_58facbf558548.jpg', '2017-04-14');

-- --------------------------------------------------------

--
-- 表的结构 `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `ads_onoff` tinyint(4) NOT NULL,
  `ads_sort` int(11) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `advertisements`
--

INSERT INTO `advertisements` (`ads_id`, `ads_name`, `ads_onoff`, `ads_sort`) VALUES
(1, '公司简介', 1, 50),
(2, '留言', 1, 50),
(3, '联系', 1, 50),
(4, '首页内容-中文', 1, 50),
(5, '底部', 1, 50),
(6, '产品中心', 1, 50),
(7, '证书', 1, 50),
(8, '客服', 1, 50),
(9, '首页幻灯片', 1, 50),
(10, '首页展示图', 1, 50),
(11, '公司简介幻灯片', 1, 50);

-- --------------------------------------------------------

--
-- 表的结构 `adverts`
--

CREATE TABLE IF NOT EXISTS `adverts` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ads_onoff` tinyint(4) NOT NULL,
  `ads_sort` int(11) NOT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `adverts`
--

INSERT INTO `adverts` (`ads_id`, `ads_name`, `ads_onoff`, `ads_sort`) VALUES
(1, '欧式风格', 1, 5),
(4, '古典风格', 1, 50),
(5, '现代风格', 1, 50);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `simple` varchar(255) COLLATE utf8_bin NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  `img` varchar(50) COLLATE utf8_bin NOT NULL,
  `simg` varchar(50) COLLATE utf8_bin NOT NULL,
  `ename` varchar(50) COLLATE utf8_bin NOT NULL,
  `isrecom` tinyint(4) NOT NULL,
  `ismy` tinyint(4) NOT NULL,
  `sort` int(11) NOT NULL,
  `isok` tinyint(4) NOT NULL,
  `model` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '型号',
  `spec` varchar(200) COLLATE utf8_bin NOT NULL,
  `size` varchar(50) COLLATE utf8_bin NOT NULL,
  `dspec` varchar(50) COLLATE utf8_bin NOT NULL,
  `colour` varchar(20) COLLATE utf8_bin NOT NULL,
  `light` varchar(30) COLLATE utf8_bin NOT NULL,
  `ident` varchar(30) COLLATE utf8_bin NOT NULL,
  `other` varchar(200) COLLATE utf8_bin NOT NULL,
  `eother` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `tid`, `sid`, `name`, `simple`, `desc`, `img`, `simg`, `ename`, `isrecom`, `ismy`, `sort`, `isok`, `model`, `spec`, `size`, `dspec`, `colour`, `light`, `ident`, `other`, `eother`) VALUES
(13, 7, 18, '触摸背光电子开关（呼吸灯+Logo背光）', '', '', '58f8547dd86f0.jpg', 's_58f8547dd86f0.jpg', '', 1, 0, 4, 0, 'C010-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）', '', '开关：172*22mm，主板：125*65mm', '', '', '', '', ''),
(12, 7, 18, '触摸背光电子开关', '', '', '58f8544545760.jpg', 's_58f8544545760.jpg', '', 1, 0, 3, 0, 'C009-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）', '', '开关：131*22mm,主板：125*65mm', '', '', '', '', ''),
(8, 7, 18, '带灯轻触电子开关', '', '', '58f853a6f34a0.jpg', 's_58f853a6f34a0.jpg', '', 1, 0, 1, 0, 'C007-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）。', '', '开关：115*16mm主板：125*65mm', '', '', '', '', ''),
(9, 7, 18, '数码电子开关', '', '', '58f853f9950d0.jpg', 's_58f853f9950d0.jpg', '', 1, 0, 2, 0, 'C008-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）', '', '开关：131*23mm，主板：125*65mm', '', '', '', '', ''),
(10, 7, 18, '触摸背光电子开关（呼吸灯+Logo背光）', '', '', '58f80f4963bc0.jpg', 's_58f80f4963bc0.jpg', '', 1, 0, 9, 0, 'C015-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）。', '', '开关：172*22mm，主板：148*65mm', '', '', '', '', ''),
(11, 7, 18, '触摸背光电子开关', '', '', '58f8103809a58.jpg', 's_58f8103809a58.jpg', '', 1, 0, 8, 0, 'C014-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）。', '', '开关：131*22mm,主板：148*65mm', '', '', '', '', ''),
(14, 7, 18, '触摸液晶电子开关', '', '', '58f854ef3e230.jpg', 's_58f854ef3e230.jpg', '', 1, 0, 5, 0, 'C011-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，带定时设置及铝网清洗提示功能，可过认证EMC/EMI（欧标、美标）', '', '开关：172*22mm,主板：125*65mm', '', '', '', '', ''),
(15, 7, 18, '带灯轻触电子开关', '', '', '58f855379ae90.jpg', 's_58f855379ae90.jpg', '', 1, 0, 6, 0, 'C012-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）', '', '开关：115*16mm主板：148*65mm', '', '', '', '', ''),
(16, 7, 18, '数码电子开关', '', '', '58f855751de90.jpg', 's_58f855751de90.jpg', '', 1, 0, 7, 0, 'C013-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，可过认证EMC/EMI（欧标、美标）', '', '开关：131*23mm，主板：148*65mm', '', '', '', '', ''),
(17, 7, 18, '触摸液晶电子开关', '', '', '58f865311fdd0.jpg', 's_58f865311fdd0.jpg', '', 1, 0, 10, 0, 'C016-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，带定时设置及铝网清洗提示功能，可过认证EMC/EMI（欧标、美标）', '', '开关：172*22mm主板：148*65mm', '', '', '', '', ''),
(18, 7, 18, '触摸液晶电子开关', '', '', '58f86533a9cd8.jpg', 's_58f86533a9cd8.jpg', '', 1, 0, 10, 0, 'C016-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤8WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，带定时设置及铝网清洗提示功能，可过认证EMC/EMI（欧标、美标）', '', '开关：172*22mm主板：148*65mm', '', '', '', '', ''),
(19, 7, 18, '带灯轻触电子开关', '', '', '58f8655d224e0.jpg', 's_58f8655d224e0.jpg', '', 1, 0, 11, 0, 'C017-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出', '', '开关：115*16mm主板：125*65mm', '', '', '', '', ''),
(20, 7, 18, '数码电子开关/4键', '', '', '58f865862c8f0.jpg', 's_58f865862c8f0.jpg', '', 1, 0, 12, 0, 'C018-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出', '', '开关：131*23mm，主板：125*65mm', '', '', '', '', ''),
(21, 7, 18, '数码电子开关/5键', '', '', '58f865b02fbb8.jpg', 's_58f865b02fbb8.jpg', '', 1, 0, 13, 0, 'C019-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，5键，3-4档电机档位，12V或220V双电压照明灯输出', '', '开关：162*25mm，主板：125*65mm', '', '', '', '', ''),
(22, 7, 18, '触摸背光电子开关（呼吸灯+Logo背光）', '', '', '58f865e6009d0.jpg', 's_58f865e6009d0.jpg', '', 1, 0, 13, 0, 'C020-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出', '', '开关：172*22mm，主板：125*65mm', '', '', '', '', ''),
(23, 7, 18, '触摸液晶电子开关', '', '', '58f8660ef3888.jpg', 's_58f8660ef3888.jpg', '', 1, 0, 14, 0, 'C021-A', '输入：100-240VAC 50/60Hz，输出:DC12V ≤3WLED照明灯，3-4档电机档位，12V或220V双电压照明灯输出，带定时设置及铝网清洗提示功能', '', '开关：172*22mm，主板：125*65mm', '', '', '', '', ''),
(24, 7, 18, '空氧净化器控制板', '', '', '58f866381a010.jpg', 's_58f866381a010.jpg', '', 1, 0, 15, 0, 'C022-A', '输入：100-240VAC 50/60Hz，带PM2.5检测、湿度、温度、睡眠、定时、4档风速、三色RGB变灯、负离子、紫外灯功能及无线遥控', '', '开关：260*70mm,主板185*45mm', '', '', '', '', ''),
(25, 7, 18, '空氧净化器控制板', '', '', '58f8665deb7a0.jpg', 's_58f8665deb7a0.jpg', '', 1, 0, 16, 0, 'C023-A', '输入：100-240VAC 50/60Hz，带PM2.5检测、睡眠、定时、3档风速、负离子、紫外灯功能及无线遥控', '', '开关：165*84mm', '', '', '', '', ''),
(26, 7, 18, '圆形9珠草帽LED灯', '', '', '58fecbff13f88.jpg', 's_58fecbff13f88.jpg', '', 1, 0, 50, 0, 'L01', '12VDC1.5W', 'φ68*20', 'F5圆头9LEDS', '7000-8000K', '35LM', '', '', ''),
(27, 7, 18, '长方LED灯', '', '', '58feceb099070.jpg', 's_58feceb099070.jpg', '', 1, 0, 50, 0, 'L09', '12VDC1.5W', '120.5*34*28', '3528-12LEDS', '4000-4500K', '60LM', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `InformationID` int(50) NOT NULL AUTO_INCREMENT,
  `InformationType` int(10) NOT NULL,
  `InformationFatherId` int(10) NOT NULL,
  `InformationTitle` varchar(100) NOT NULL,
  `InformationContent` text CHARACTER SET utf8 COLLATE utf8_bin,
  `InformationCont` text NOT NULL,
  `InformationReleaseDate` datetime DEFAULT NULL,
  `InformationOrder` int(11) NOT NULL DEFAULT '0',
  `InformationUpdate` varchar(50) DEFAULT NULL,
  `IsTop` tinyint(4) NOT NULL,
  `IsDes` tinyint(4) NOT NULL,
  `InformationIslook` tinyint(4) DEFAULT NULL,
  `InformationPic` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationBigPic` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `InformationAuthor` varchar(150) NOT NULL,
  PRIMARY KEY (`InformationID`),
  KEY `fk_information_InformationType` (`InformationType`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=146 ;

--
-- 转存表中的数据 `information`
--

INSERT INTO `information` (`InformationID`, `InformationType`, `InformationFatherId`, `InformationTitle`, `InformationContent`, `InformationCont`, `InformationReleaseDate`, `InformationOrder`, `InformationUpdate`, `IsTop`, `IsDes`, `InformationIslook`, `InformationPic`, `InformationBigPic`, `InformationAuthor`) VALUES
(136, 7, 6, '发电机内冷水系统单床离子交换树脂微碱处理方式', '<div>1. &nbsp;发电机内冷水水箱以除盐水或凝结水为补充水源。</div>\r\n<div><br />\r\n</div>\r\n<div>2. &nbsp;发电机内冷水系统设置一台离子交换器，其进，出口设置电导率，PH在线仪表和取样管。</div>\r\n<div><br />\r\n</div>\r\n<div>3. &nbsp;离子交换器进水端设置除盐水进水管，用于树脂正洗，出水管安装树脂捕捉器，防止树脂漏入内冷水水箱。</div>\r\n<div><br />\r\n</div>\r\n<div>4. &nbsp;根据有关内冷水电力标准和水质特性，离子交换器装填由RH,RNa,ROH型树脂配置的微碱内冷水专用树脂。</div>\r\n<div><br />\r\n</div>\r\n<div>5. &nbsp;离子交换器投运前，用除盐水正洗树脂，出水电导率不大于2μs/cm，PH值不大于9时并入系统。</div>\r\n<div><br />\r\n</div>\r\n<div>6. &nbsp;离子交换器正洗水和内冷水旁路处理流量宜控制冷却水流量的1%-5%。</div>\r\n<div><br />\r\n</div>\r\n<div>7. &nbsp;离子交换器内的内冷专用树脂缓慢释放出微量碱性物质进入内冷水水箱，对内冷水实施微碱化处理，将内冷水箱内PH值调节到8—9范围之内，同时保持电导率不超过2μs/cm，内冷水系统完全密封无泄漏情况下，和内冷水箱内的除盐水混合，电导会降低，进入发电机线圈，完成良性循环。</div>\r\n<div><br />\r\n</div>\r\n<div>ZXDL101N、ZXDL102H 发电机内冷水专用树脂是我公司根据国内目前发电厂的小混床装置，出水要求，精心精制研发生产的一种即用型专用树脂，现场在电厂系统设备完善，除盐水达到补水要求，即可达到电力标准。专用于火力发电厂发电机内冷水处理的混床离子交换树脂。适用于发电机内冷水的离子交换处理及微碱性离子交换处理。该技术较补加凝结水水法及加碱或缓蚀剂处理法有明显的技术优势，通过提高内冷水的PH值，使空心导线处于相对钝化状态，降低了铜的腐蚀速率，同时离交混床还起到了旁路过滤的作用，截留系统中原有的氧化铜颗粒和其他腐蚀产物，减少了线棒堵塞的可能性。经处理后的混床出水能同时满足DL/T801-2010《大型发电机内冷却水质及系统技术要求》中关于PH、电导率及含铜量的要求。</div>', '0', '2016-10-19 10:40:56', 51, '2016-10-19', 1, 1, NULL, 's_580b1597d797a.jpg', '580b1597d797a.jpg', '翼田'),
(137, 8, 6, '环保清洗剂，未来工业清洗的必然趋势', '在传统的工业生产中，三氯乙烯一直作为优秀的工业清洗剂而存在，然而，就是这样一款“万能药剂”，却已面临淘汰。', '0', '2016-10-19 10:44:57', 49, '2016-10-19', 1, 1, NULL, 's_580b15a7b7680.jpg', '580b15a7b7680.jpg', '翼田'),
(138, 9, 6, '新树脂在使用前必须进行预处理吗？', '<div>&nbsp; &nbsp; 在离子交换树脂的工业产品中，常含有少量有机低聚物及一引起无机杂质。在使用初期会逐渐溶解释放，影响出水水质或产品质量。因此，新树脂在使用前必须进行预处理，具体方法如下：&nbsp;</div>\r\n<div>&nbsp; &nbsp; 1、树脂装入交换器后，用洁净水反洗树脂层，展开率为50-70%，直至出水清晰，无气味、无细碎树脂为止。&nbsp;</div>\r\n<div>&nbsp; &nbsp; 2、用约2倍树脂体积的4-5%HCl溶液，以2m/h流速通过树脂层。全部通入后，浸泡4-8小时，排去酸液，用洁净水冲洗至出水呈中性。冲洗流速为10-20m/h。&nbsp;</div>\r\n<div>&nbsp; &nbsp; 3、用约2倍树脂体积的2-5%NaOH溶液，按上面进HCl的方法通入和浸泡。排去碱液，用洁净水冲洗至出水呈中性。流速同上。&nbsp;<span style="line-height:1.5;">酸、碱液若能重复进行2-3次，则效果更佳。&nbsp;</span><span style="line-height:1.5;">经预处理后的树脂，在第一次投入运行时应适当增加再生剂用量，以保证树脂获得充分的再生。</span></div>', '0', '2016-10-19 10:45:37', 50, '2016-10-19', 0, 1, NULL, '', '', '翼田'),
(139, 9, 6, '树脂该如何储存？', '<div>&nbsp; &nbsp; 1、离子交换树脂在长期储存中，或需在停用设备内长期存放，强型树脂应转为盐型，弱型树脂可转为相应氢型或游离胺时，也可转为盐型，以保持树脂性能稳定，然后常浸泡在洁净的水中。停用设备若须将水排去，则应密闭，以防树脂水份散失。&nbsp;</div>\r\n<div>&nbsp; &nbsp;2、离子交换树脂内含有一定的平衡水份，在储存和运输中应保持湿润，防止脱水。树脂应储存在室内或加遮盖，环境温度以5-40度为宜。袋装树脂应避免直接日晒，远离锅炉、取暖器等加热装置，避免脱水。&nbsp;</div>\r\n<div>若发现树脂已有脱水现象，切勿直接放于水中，以免干树脂遇水急剧溶胀而破碎。应根据其脱水程度，用10%左右的食盐水慢慢加入树脂中，浸泡数小时后用洁净水逐步稀释。&nbsp;</div>\r\n<div>&nbsp; &nbsp; 3、当环境温度在零度或以下时，为防止树脂因内部水份结冰而崩裂，应做好保温措施，或根据气温条件，将树脂存于不同浓度的食盐水中，防止冰冻。若发现树脂已被冻，则应让其缓慢自然解冻，切不可用机械力施于树脂。&nbsp;</div>\r\n<div>&nbsp; &nbsp; 4、长期停用而放置在交换器内的树脂，为防止微生物（如藻类、细菌等）对树脂的不可逆污染，树脂在停用前须彻底反洗，以除去运行时积聚的悬浮物质，并注意定期冲洗和换水，或彻底反洗后采用以下措施：&nbsp;</div>\r\n<div>阴树脂：用3倍树脂体积的10%NaCl+2% NaOH混合液分两次通过树脂层，每次静止数小时，然后将其排去。如有必要，在重新启用前用2倍树脂体积的0.2%过氧化氢溶液淋洗树脂电动机。&nbsp;</div>\r\n<div><span style="line-height:1.5;">&nbsp; &nbsp; 阳树脂：在阳树脂交换器及管系内可充入0.5%的甲醛溶液，并在停用期间保持此浓度。也可用食盐水浸泡，在设备重新启用前用0.2%过氧化氢或0.5%甲醛溶液淋洗。</span></div>', '0', '2016-10-19 11:11:13', 50, '2016-10-19', 0, 1, NULL, '', '', '翼田'),
(141, 7, 6, '离子交换树脂性能降解原因', '<div>&nbsp; &nbsp; &nbsp;<span style="font-size:14px;">离子交换树脂的性能是逐渐下降的，如果周期水量突然下降和出水水质突然恶化，一般不应是树脂的问题，主要应从设备、操作、进水水质及再生剂方面找原因。由于设备损坏和反洗操作不当使树脂突然大量损失的情况也有发生，这很容易从树脂层高度明显降低检查出来。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp;定期检查离子交换树脂，可以了解设备工作性能下降的趋势和制水量减少、出水水质变差的原因，还可以预测树脂的寿命，确定树脂是否须要复苏的方法。从离子交换树脂性能下降趋势，还可以验证树脂品种和质量选择得是否合理。所以，离子交换树脂定期检查工作是水处理化验工作的一个重要组成部分。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp;离子交换树脂的分析项目较多，分析周期比较长，也由于树脂质量是渐变的，因此不需要经常性地监测。取样分析树脂的周期，一般半年或一年一次，从逐年积累的分析数据中找出树脂性能变化的规律。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp;新树脂必须进行全面分析并留样；分析结果要和产品说明书对照，并存档保存。定期取样的树脂也应留样。</span></div>\r\n<span style="font-size:14px;"> </span><div><br />\r\n</div>', '0', '2016-10-22 15:32:31', 50, '2016-10-22', 1, 1, NULL, '', '', ''),
(142, 8, 6, '离子交换树脂的性能定期检查', '<div>离子交换树脂的装填</div>\r\n<div><span style="line-height:1.5;">在向离子交换设备内装树脂前，必须做好下列准备工作：</span></div>\r\n<div>（1）彻底清扫设备；</div>\r\n<div>（2）各通流部位经过检查，确认安装可靠，不跑漏树脂；</div>\r\n<div>（3）水压试验合格；</div>\r\n<div>（4）测定正常流速下设备的压差，为测定树脂层压差作好准备；</div>\r\n<div>（5）计算应装树脂数量时，应考虑到树脂离子型及可逆膨胀。一般装填量宁少勿多。因为少装可补装，多装的树脂取出后，往往因无法抽滤除去多余水分而难以贮存。</div>\r\n<div>当用水力装卸器装填树脂时，事先要仔细清洗装卸器，防止异类树脂混入。用澄清水装填阳树脂，用除盐水装填阴树脂。在装入树脂前先往交换器内装入1m左右的水层，树脂从上进脂口进入设备时就不会直接冲击底部装置和垫层。</div>\r\n<div>按设计数量装完树脂后，测量层高，在符合要求后封闭设备。对树脂层进行反洗、沉降、排水、打开设备，平整树脂层，将漂至树脂层上的细颗粒树脂刮去。对于大孔树脂，尤其是弱酸树脂，还应检查有否软球和透明球，它们易粘在通流部位上，即使数量很少，也会影响正常使用，必须在使用前除去。经除去细颗粒和异样颗粒以后，还应补入相应数量的树脂，保证层高符合设备要求。</div>\r\n<div><br />\r\n</div>', '0', '2016-10-22 15:34:56', 50, '2016-10-22', 1, 1, NULL, '', '', ''),
(144, 7, 6, '合成树脂历史发展', '<div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 一些树木的分泌物常会形成树脂，不过琥珀却是树脂的化石，虫胶虽然也被看成树脂，但却是紫胶虫分泌在树上的沉积物。由虫胶制成的虫胶漆，最初只用作木材的防腐剂，但随着电机的发明又成为最早使用的绝缘漆。然而进入20世纪后，天然产物已无法满足电气化的需要，促使人们不得不寻找新的廉价代用品。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 早在1872年德国化学家拜耳(A.Bayer)首先发现苯酚与甲醛在酸性条件下加热时能迅速结成红褐色硬块或粘稠物，但因它们无法用经典方法纯化而停止实验。20世纪以后，苯酚已经能从煤焦油中大量获得，甲醛也作为防腐剂大量生产，因此二者的反应产物更加引人关注，希望开发出有用的产品，尽管先后有许多人为之花费了巨大劳动，但都没有达到预期结果。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 1904年，贝克兰和他的助手也开展这项研究，最初目的只是希望能制成代替天然树脂的绝缘漆，经过三年的艰苦努力，终于在1907年的夏天，不仅制出了绝缘漆，而且还制出了真正的合成可塑性材料——Bakelite，它就是人们熟知的“电木”“胶木”或酚醛树脂。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp;Bakelite一经问世，很快厂商发现，它不但可以制造多种电绝缘品，而且还能制日用品，爱迪生(T.Edison)用于制造唱片，不久又在广告中宣称：已经用Bakelite制出上千种产品，于是一时间把贝克兰的发明誉为20世纪的“炼金术”。</span></div>\r\n<span style="font-size:14px;"> </span><div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 以煤焦油为原粒的酚醛树脂，在1940年以前一直居各种合成树脂产量之首，每年达20多万吨，但此后随着石油化工的发展，聚合型的合成树脂如：聚乙烯、聚丙烯、聚氯乙烯以及聚苯乙烯的产量也不断扩大，随着众多年产这类产品10万吨以上大型厂的建立，它们已成当今产量最多的四类合成树脂。合成树脂再加上添加剂，通过各种成型方法即得到塑料制品，到今天塑料的品种有几十种，世界年产量在1.2亿吨左右，我国也在500万吨以上，它们已经成为生产、生活及国防建设的基础材料。</span></div>\r\n<span style="font-size:14px;"> </span><p><span style="font-size:14px;">&nbsp;合成树脂是塑料的最主要成分，其在塑料中的含量一般在40%～100%。由于含量大，而且树脂的性质常常决定了塑料的性质，所以人们常把树脂看成是塑料的同义词。例如把聚氯乙烯树脂与聚氯乙烯塑料、酚醛树脂与酚醛塑料混为一谈。其实树脂与塑料是两个不同的概念。树脂是一种未加工的原始聚合物，它不仅用于制造塑料，而且还是涂料、胶粘剂以及合成纤维的原料。而塑料除了极少一部分含100%的树脂外，绝大多数的塑料，除了主要组分树脂外，还需要加入其他物质。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>', '0', '2016-10-22 15:39:14', 50, '2016-10-22', 1, 1, NULL, '', '', ''),
(145, 7, 6, '玻璃行业的发展探析', '<div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 居民消费结构升级、鼓励企业自主创新、新农村建设和城镇化进程等都将保证国内市场对玻璃产品的中长期需求增长趋势不变。随着建筑、汽车、装饰装修、家具、信息产业技术等行业的发展和人们对生活空间环境要求的提高，安全玻璃、节能中空玻璃等功能性加工产品得到广泛应用。平板玻璃的供求格局和消费结构正在发生变化。</span></div>\r\n<div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; 玻璃行业的发展与国民经济的许多行业都存在着联系，玻璃行业对推动整个国民经济的发展都起着积极作用。因此“十一五”规划中也对玻璃产业的发展提出了具体要求。也颁布了各项法律法规来规范玻璃行业的健康发展。在新的形势下，玻璃工业必须按照科学发展观的要求，转变增长方式，有效调整产业结构，才能促进行业健康发展。</span></div>\r\n<div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; GE　LEXAN1362166666,4树脂几乎参与了每个行业的产品革新。它让我们的汽车更轻盈更安全;它让音乐和影像的数字化成为可能，让人们享受CD和DVD带来的快乐;它领导了电脑、移动电话等成百上千种产品的外形设计潮流。LEXAN树脂还应用于体育和船艇器材、建筑材料、商务及军用飞机、以及户外标牌等各个领域。</span></div>\r\n<div><span style="font-size:14px;">&nbsp; &nbsp; &nbsp; GE LEXAN树脂具有无与伦比的抗冲击性、卓越的尺寸稳定性和水晶般的透明度，一直以来都是聚碳酸酯产品中的佼佼者。它是一种具有优良的机械、光、电和热学特性的无定形工程热塑性材料。</span></div>\r\n<div><span style="line-height:1.5;font-size:14px;">GE　LEXAN树脂的特征和优点</span></div>\r\n<p><span style="font-size:14px;">作为一流的热塑性塑料， LEXAN聚碳酸酯树脂是具有高性能特征的特殊化合物，避免了许多传统材料的缺陷。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<div><span style="font-size:14px;">一.GE　LEXAN树脂强度</span></div>\r\n<p><span style="font-size:14px;">GE　LEXAN树脂最显著的特征之一是高冲击强度。一般而言，没有其它的工程塑料能在极冷和极热的温度下承受得住猛烈撞击。用GE LEXAN 树脂制成的产品通常防碎，几乎牢不可破。由于GE LEXAN树脂增加了强度，许多产品壁还可以制得更薄、重量更轻。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<div><span style="font-size:14px;">二.GE LEXAN耐用性</span></div>\r\n<div><span style="font-size:14px;">GE　LEXAN树脂不但强度高，还具有下列特性：</span></div>\r\n<div><span style="font-size:14px;">抗热(高达125°C)</span></div>\r\n<div><span style="font-size:14px;">抗冷(低达零下40°C)</span></div>\r\n<div><span style="font-size:14px;">抗水</span></div>\r\n<div><span style="font-size:14px;">抗老化</span></div>\r\n<div><span style="font-size:14px;">抗紫外线</span></div>\r\n<p><span style="font-size:14px;">抗火焰</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<div><span style="font-size:14px;">三.GE　LEXAN树脂外观</span></div>\r\n<p><span style="font-size:14px;">GE LEXAN树脂使今天杰出产品设计的许多视觉特征成为可能。从几乎无限的颜色和色调，生动的表面质地、水晶般晶莹透明或半透明、金属片、斑点或散布的特殊效果。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<div><span style="font-size:14px;">四.GE　LEXAN光学纯度</span></div>\r\n<p><span style="font-size:14px;">GE　LEXAN树脂不只表面漂亮，同时具有高纯度、杰出的透明性和一致的质量。GE LEXAN OQ 树脂被广泛用于满足CD、DVD和光媒体的高标准，改变我们目前欣赏视频、享受音乐和获取信息的方式。其光学特征同样有助于制成更结实、更薄、更轻的眼镜，从而保护我们的工作和游戏方式。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<div><span style="font-size:14px;">五.GE　LEXAN电兼容性</span></div>\r\n<p><span style="font-size:14px;">因为阻燃剂范围广，可在众多电子产品中发现LEXAN树脂，包括家庭和个人护理用品、仪表和保险盒、开关、插头和插座等。</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;"><br />\r\n</span></p>', '0', '2016-10-22 15:42:15', 50, '2016-10-22', 1, 1, NULL, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `informationtype`
--

CREATE TABLE IF NOT EXISTS `informationtype` (
  `InformationTypeID` int(10) NOT NULL AUTO_INCREMENT,
  `InformationTypeName` varchar(20) NOT NULL,
  `InformationTypeOrder` int(11) DEFAULT NULL,
  `InformationFatherTypeId` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`InformationTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `informationtype`
--

INSERT INTO `informationtype` (`InformationTypeID`, `InformationTypeName`, `InformationTypeOrder`, `InformationFatherTypeId`) VALUES
(6, '文章管理', 1, 0),
(7, '翼田动态', 1, 6),
(8, '行业新闻', 2, 6),
(9, '常见问题', 3, 6);

-- --------------------------------------------------------

--
-- 表的结构 `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `keywords`
--

INSERT INTO `keywords` (`id`, `name`, `sort`) VALUES
(14, '电子开关', 4),
(3, '圆形', 1),
(12, '方形高压', 2),
(13, '控制板', 3),
(16, 'LED灯', 5),
(17, '铝网', 6),
(18, '活性炭', 7);

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LinkName` varchar(20) NOT NULL,
  `LinkUrl` varchar(50) NOT NULL,
  `LinkTarget` varchar(10) DEFAULT NULL,
  `LinkPic` varchar(50) DEFAULT NULL,
  `LinkOrder` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `links`
--

INSERT INTO `links` (`ID`, `LinkName`, `LinkUrl`, `LinkTarget`, `LinkPic`, `LinkOrder`) VALUES
(1, '聚全科技', 'http://www.juquankeji.com', NULL, NULL, 2),
(2, '百度', 'http://www.baidu.com', NULL, NULL, 3),
(4, '慕康', 'http://fssmk.com', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

CREATE TABLE IF NOT EXISTS `liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) COLLATE utf8_bin NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` varchar(50) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `update` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `company`, `name`, `tel`, `content`, `update`, `email`, `address`) VALUES
(15, '34', '1', '阿萨德', '32', 1492165771, '123', '123'),
(17, '流搀行股份有限公司', '流搀行', '13666666699', '是否发生的哈哈特含是否，阿荣旗额要求而规定和大人发过阿尔亚太区热那个号，家很符合，asudyasy7铺，啥都有湖公园十多个。', 1492167719, 'jhgagsdhgas@hjd.com', '佛山市顺德区乐从镇合适的话挂号费全区路23号西红柿对面五楼'),
(18, '华联超市连锁店', '蒋新华', '13222225555', '时代光华如图今日水电费水电费撒的发生的爱的色放。', 1492168260, '63565@qq.com', '佛山市顺德区龙江镇或酒店设计费路口附近');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`m_id`, `title`, `message`) VALUES
(1, '123', '123'),
(2, '43', '534'),
(3, 'we', 'we'),
(4, 'df', 'ee'),
(5, '顺德', '请问'),
(6, '收到', '123'),
(7, '收到', '123'),
(8, '位', '34'),
(9, '位', '34'),
(10, '23', '12'),
(11, '位', '热热'),
(12, '342', '545');

-- --------------------------------------------------------

--
-- 表的结构 `sellerfir`
--

CREATE TABLE IF NOT EXISTS `sellerfir` (
  `sf_id` int(11) NOT NULL AUTO_INCREMENT,
  `sf_style` int(11) NOT NULL,
  `sf_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_logo` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_simple` varchar(255) COLLATE utf8_bin NOT NULL,
  `sf_range` text COLLATE utf8_bin NOT NULL,
  `sf_bgcolor` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_detail` text COLLATE utf8_bin NOT NULL,
  `sf_regtime` varchar(30) COLLATE utf8_bin NOT NULL,
  `sf_sort` int(11) NOT NULL,
  `sf_isrecom` tinyint(4) NOT NULL,
  `sf_isok` tinyint(4) NOT NULL,
  `sf_tel` varchar(30) COLLATE utf8_bin NOT NULL,
  `sf_address` varchar(200) COLLATE utf8_bin NOT NULL,
  `sf_adlink` varchar(255) COLLATE utf8_bin NOT NULL,
  `sf_person` varchar(30) COLLATE utf8_bin NOT NULL,
  `sf_mobile` varchar(20) COLLATE utf8_bin NOT NULL,
  `sf_opentime` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_other` varchar(255) COLLATE utf8_bin NOT NULL,
  `sf_username` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_password` varchar(50) COLLATE utf8_bin NOT NULL,
  `sf_price` int(11) NOT NULL,
  PRIMARY KEY (`sf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `sellerfir`
--

INSERT INTO `sellerfir` (`sf_id`, `sf_style`, `sf_name`, `sf_logo`, `sf_simple`, `sf_range`, `sf_bgcolor`, `sf_detail`, `sf_regtime`, `sf_sort`, `sf_isrecom`, `sf_isok`, `sf_tel`, `sf_address`, `sf_adlink`, `sf_person`, `sf_mobile`, `sf_opentime`, `sf_other`, `sf_username`, `sf_password`, `sf_price`) VALUES
(7, 3, '苯乙烯', '5809c6901cea7.jpg', '苯乙烯', '一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十', 's_5809c6901cea7.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span> \r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '2016-09-10', 50, 0, 1, '13869685478', '龙江镇纯棉大道234号清理大厦正对面', 'http://api.map.baidu.com/marker?location=22.964207,113.095786&title=%E9%91%AB%E5%B9%BF%E6%B9%BE%EF%BC%88%E9%87%91%E6%B8%AF%E6%B9%BE%EF%BC%89%E5%AE%B6%E5%85%B7%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8&content=广东省佛山市顺德区xxxxxx家具&output=html', '陈世', '13999999999', '7:00-21:00', '918last', '', '', 0),
(6, 2, '168#', '5806d80575b18.jpg', '168#', '少时诵诗书谁谁谁搜索收拾收拾傻少时诵诗书谁谁谁搜索收拾收拾傻谁是谁', 's_5806d80575b18.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、还原剂（钴水</span><span style="font-size:14px;">）氧化剂（甲乙酮</span><span style="font-size:14px;">）隔离存储，运输。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、避免接触皮肤、</span><span style="font-size:14px;">眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>安全特性</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>保质期</strong></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">&nbsp;</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>注意事项</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '2016-09-10', 50, 1, 1, '', '0', '0', '', '', '', '', '', '', 0),
(14, 5, '3312', '5806d8442754a.jpg', '3312', '', 's_5806d8442754a.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 1, 0, '', '', '', '123', '', '', '123', '', '', 123),
(15, 2, '6688#', '5806d820db0dc.jpg', '6688#', '', 's_5806d820db0dc.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、还原剂（钴水</span><span style="font-size:14px;">）氧化剂（甲乙酮</span><span style="font-size:14px;">）隔离存储，运输。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、避免接触皮肤、</span><span style="font-size:14px;">眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>安全特性</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>保质期</strong></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">&nbsp;</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>注意事项</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<div class="para">\r\n	&nbsp;\r\n</div>', '', 50, 1, 0, '', '', '', '', '', '', '', '', '', 0),
(16, 2, '399#', '5806d82fa60c1.jpg', '399#', '', 's_5806d82fa60c1.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、还原剂（钴水</span><span style="font-size:14px;">）氧化剂（甲乙酮</span><span style="font-size:14px;">）隔离存储，运输。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、避免接触皮肤、</span><span style="font-size:14px;">眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>安全特性</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>保质期</strong></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">&nbsp;</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:16px;"><strong>注意事项</strong></span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span> \r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '', 50, 1, 0, '', '', '', '', '', '', '', '', '', 0),
(17, 3, '蜡液', '5809c6dcb3428.jpg', '蜡液', '', 's_5809c6dcb3428.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(18, 3, '钴水', '5809c6f88e757.jpg', '钴水', '', 's_5809c6f88e757.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(19, 3, '甲乙酮', '5809c71598bdb.jpg', '甲乙酮', '', 's_5809c71598bdb.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(20, 5, '3313', '5806d855f1d99.jpg', '3313', '', 's_5806d855f1d99.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 1, 0, '', '', '', '', '', '', '', '', '', 0),
(21, 6, '3315', '5809c78bbb1ca.jpg', '3315', '', 's_5809c78bbb1ca.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 1, 0, '', '', '', '', '', '', '', '', '', 0),
(22, 14, '3318', '5809c7bfa11cf.jpg', '3318', '', 's_5809c7bfa11cf.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(23, 14, '3319', '5809c7dad9d3d.jpg', '3319', '', 's_5809c7dad9d3d.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(24, 15, '191A', '5809c7f6447a9.jpg', '191A', '', 's_5809c7f6447a9.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(25, 15, '191B', '5809c80d20793.jpg', '191B', '', 's_5809c80d20793.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(26, 15, '191C', '5809c81e6e8b7.jpg', '191C', '', 's_5809c81e6e8b7.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span>\r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0),
(27, 2, '386#', '5809c6c3aa594.jpg', '386#', '', 's_5809c6c3aa594.jpg', '<p>\r\n	<span style="font-size:16px;"><strong>安全守则 </strong></span><br />\r\n<span style="font-size:14px;">1、存储于阴凉通风处，远离火源，避免阳光直射。 </span><br />\r\n<span style="font-size:14px;">2、还原剂（钴水）氧化剂（甲乙酮）隔离存储，运输。 </span><br />\r\n<span style="font-size:14px;">3、避免接触皮肤、眼睛，不慎接触受刺激用自来水冲洗，严重的就医诊治。 </span>\r\n</p>\r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>安全特性 </strong></span><br />\r\n<span style="font-size:14px;">1、在火场或者高温下能聚合放热使容器爆破。 </span><br />\r\n<span style="font-size:14px;">2、遇明火、高热、氧化剂易引起燃热。 </span><br />\r\n<span style="font-size:14px;">3、蒸汽和液体能刺激眼睛、皮肤和呼吸系统。 </span>\r\n</p>\r\n<span style="font-size:14px;"></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>保质期</strong></span><br />\r\n<span style="font-size:14px;">25℃以下阴凉、防水、防火条件下可贮存三个月，温度升高会缩短贮存期。</span> \r\n</p>\r\n<span></span> \r\n<p>\r\n	<br />\r\n<span style="font-size:16px;"><strong>注意事项 </strong></span><br />\r\n<span style="font-size:14px;">用干粉灭火器、沙土、二氧化碳、干粉、泡沫等灭火。 </span><br />\r\n<span style="font-size:14px;">*急救电话：119&nbsp;&nbsp; 120</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>\r\n<p>\r\n	<span style="font-size:14px;"></span>&nbsp;\r\n</p>', '', 50, 0, 0, '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `series`
--

INSERT INTO `series` (`id`, `name`, `ename`, `img`, `sort`) VALUES
(21, '电机', 'dianji', '', 80),
(18, '小家电控制', '', '', 20),
(5, '驱动电源', '', '57df808c9a7f4.jpg', 30),
(17, '小家电照明', '', '', 40),
(19, '家居照明', '', '', 50),
(20, '过滤网', '', '', 70);

-- --------------------------------------------------------

--
-- 表的结构 `singlepage`
--

CREATE TABLE IF NOT EXISTS `singlepage` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Titled` varchar(50) NOT NULL,
  `Content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `Status` char(1) NOT NULL DEFAULT '0',
  `myimg` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `singlepage`
--

INSERT INTO `singlepage` (`ID`, `Titled`, `Content`, `Status`, `myimg`) VALUES
(1, '关于乐图', '<p align="center"><b><span style="font-size:18px;line-height:21px;"><br />\r\n</span></b></p>\r\n<p align="center"><b><span style="font-size:18px;line-height:21px;">乐 图</span></b><span style="font-size:14px;line-height:21px;"><b><span style="font-size:18px;line-height:21px;"> 网 络</span><span style="font-size:18px;"> 科 技</span></b></span></p>\r\n<p align="center"><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;座落于华南最大的家纺布艺产业重镇——广东省佛山市南海区西樵镇。公司专注拓展家居软装饰领域的专业生产与配套，本着为合作商创造核心价值，为广大消费者营造优质家居生活的经营理念，持续建造集设计、生产、销售一体化的家居布艺高端品牌。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><img src="/Public/upload/20160918174441_14768.jpg" alt="" border="0" /><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司拥有雄厚的研发、管理、生产等专业化人才团队资源，建立了完善的产品研发管理系统，品牌加盟管理系统，服务与提升管理体系，渠道管理体系。目前已拥有“路易•美邦”和“路易•登”二个品牌，并在全国各地建立庞大的市场网络，拥有加盟店、经销商超过3000多家。&nbsp;</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司通过建立专业化市场服务体系，形成厂商双赢合作机制，通过组建专业化市场维护及品牌管理团队，使产品与服务内涵得到有效延伸，提升了品牌价值，也有效促进厂商双赢机制。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">路易·美邦家居布艺公司将产品研发和创新作为发展的第一要素坚持以市场为导向的产品研发理念，强化对国际流行趋势密切关注和优先把握，秉承和发扬原创设计的优势，传承家居布艺文化，不断提升产品附加值。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><img src="/Public/upload/20160918174520_35043.png" alt="" border="0" /><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司不断充实和提升设计团队，目前已经拥有空间设计师、平面设计师、花型设计师、陈列设计师、驻店设计师等，全方位服务与我们的加盟商和经销商。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司在高素质团队和先进的生产设备中，倾力构铸行业顶级的布艺产品线。并多次获得优秀新产品特等奖、最佳展位奖、工艺开发奖、行业贡献奖等。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司总经理赖沐生先生自1992年从事窗帘布艺行业，24年来一直致力于推动布艺行业前行，见证了国内布艺行业的起步、发展、辉煌以及现在的行业阵痛期。2015年，在全行业面临产业升级和转型关键时期，赖沐生先生与全国八大顶级的行业精英联合成立了“美家源网上商城”，促进了窗帘布艺行业由传统的经营模式到运用“互联网+”的销售变革，构建了由厂商、经销商、消费者三维一体的销售模式，搭建了一座全新的商业平台</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp; &nbsp; 您的关注和合作是我们前进的力量，路易·美邦期待与您一起共创布艺生活的辉煌。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p>&nbsp;</p>', '1', '57bf9a8a6d6f2.jpg'),
(2, '联系方式', '<p><span style="font-size:14px;line-height:21px;"><img src="/Public/upload/20160918174543_56153.jpg" alt="" border="0" /><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">联系人：松德股<br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">地址：广东省佛山市南海区西樵轻纺城龙泉街2号</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">电话：<a href="tel:4003696965">4003696965</a></span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">传真：<a href="tel:0757-86892398">0757-86892398</a></span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">Http://www.luyimeibang.com</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">E-mail:luyimeibang@126.com</span></p>', '1', '57bf9c27b0ab0.jpg'),
(3, '工程定制', '<p align="center"><b><span style="font-size:18px;line-height:21px;"><br />\r\n</span></b></p>\r\n<p align="center"><b><span style="font-size:18px;line-height:21px;">乐 图</span></b><span style="font-size:14px;line-height:21px;"><b><span style="font-size:18px;line-height:21px;"> 网 络</span><span style="font-size:18px;"> 科 技</span></b></span></p>\r\n<p align="center"><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;座落于华南最大的家纺布艺产业重镇——广东省佛山市南海区西樵镇。公司专注拓展家居软装饰领域的专业生产与配套，本着为合作商创造核心价值，为广大消费者营造优质家居生活的经营理念，持续建造集设计、生产、销售一体化的家居布艺高端品牌。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><img src="/Public/upload/20160918225232_15210.jpg" alt="" border="0" /><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司拥有雄厚的研发、管理、生\r\n产等专业化人才团队资源，建立了完善的产品研发管理系统，品牌加盟管理系统，服务与提升管理体系，渠道管理体系。目前已拥有“路易•美邦”和“路易•登”\r\n二个品牌，并在全国各地建立庞大的市场网络，拥有加盟店、经销商超过3000多家。&nbsp;</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司通过建立专业化市场服务体系，形成厂商双赢合作机制，通过组建专业化市场维护及品牌管理团队，使产品与服务内涵得到有效延伸，提升了品牌价值，也有效促进厂商双赢机制。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">路易·美邦家居布艺公司将产品研发和创新作为发展的第一要素坚持以市场为导向的产品研发理念，强化对国际流行趋势密切关注和优先把握，秉承和发扬原创设计的优势，传承家居布艺文化，不断提升产品附加值。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><img src="/Public/upload/20160918225255_70419.png" alt="" border="0" /><br />\r\n</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司不断充实和提升设计团队，目前已经拥有空间设计师、平面设计师、花型设计师、陈列设计师、驻店设计师等，全方位服务与我们的加盟商和经销商。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司在高素质团队和先进的生产设备中，倾力构铸行业顶级的布艺产品线。并多次获得优秀新产品特等奖、最佳展位奖、工艺开发奖、行业贡献奖等。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">公司总经理赖沐生先生自1992年从事窗帘布艺\r\n行业，24年来一直致力于推动布艺行业前行，见证了国内布艺行业的起步、发展、辉煌以及现在的行业阵痛期。2015年，在全行业面临产业升级和转型关键时\r\n期，赖沐生先生与全国八大顶级的行业精英联合成立了“美家源网上商城”，促进了窗帘布艺行业由传统的经营模式到运用“互联网+”的销售变革，构建了由厂\r\n商、经销商、消费者三维一体的销售模式，搭建了一座全新的商业平台</span></p>\r\n<p><span style="font-size:14px;line-height:21px;">&nbsp; &nbsp; 您的关注和合作是我们前进的力量，路易·美邦期待与您一起共创布艺生活的辉煌。</span></p>\r\n<p><span style="font-size:14px;line-height:21px;"><br />\r\n</span></p>', '1', '');

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `ename` varchar(50) COLLATE utf8_bin NOT NULL,
  `img` varchar(50) COLLATE utf8_bin NOT NULL,
  `fid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `name`, `ename`, `img`, `fid`, `sort`) VALUES
(10, '电动电机类', '', '', 0, 60),
(7, '烟机类', 'yanji', '', 1, 50),
(8, '冰箱类', '', '', 1, 50),
(9, '橱柜衣柜类', '', '', 1, 50);

--
-- 限制导出的表
--

--
-- 限制表 `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `fk_information_InformationType` FOREIGN KEY (`InformationType`) REFERENCES `informationtype` (`InformationTypeID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
