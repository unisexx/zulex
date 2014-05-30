/*
MySQL Data Transfer
Source Host: localhost
Source Database: zulex
Target Host: localhost
Target Database: zulex
Date: 21/1/2011 16:59:22
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL auto_increment,
  `module` varchar(100) default NULL,
  `name` varchar(255) default NULL,
  `slug` varchar(255) default NULL,
  `parents` int(11) default '0',
  `description` varchar(255) default NULL,
  `lft` int(11) default '1',
  `rgt` int(11) default '2',
  `user_id` int(11) default NULL,
  `status` varchar(50) default NULL,
  `orderlist` int(11) default '0',
  `approve_date` datetime default NULL,
  `group_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for levels
-- ----------------------------
DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels` (
  `id` int(11) NOT NULL auto_increment,
  `level` varchar(50) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for modules
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci default NULL,
  `module` varchar(255) collate utf8_unicode_ci default NULL,
  `listperpage` int(3) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(9) NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL,
  `first_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `gender` set('m','f','') collate utf8_unicode_ci default NULL,
  `birth_day` date default NULL,
  `phone` varchar(20) collate utf8_unicode_ci default NULL,
  `mobile` varchar(20) collate utf8_unicode_ci default NULL,
  `address` varchar(255) collate utf8_unicode_ci default NULL,
  `postcode` varchar(20) collate utf8_unicode_ci default NULL,
  `msn` varchar(100) collate utf8_unicode_ci default NULL,
  `yim` varchar(100) collate utf8_unicode_ci default NULL,
  `aim` varchar(100) collate utf8_unicode_ci default NULL,
  `gtalk` varchar(100) collate utf8_unicode_ci default NULL,
  `avatar` varchar(100) collate utf8_unicode_ci default NULL,
  `updated` datetime default NULL,
  `position` varchar(255) collate utf8_unicode_ci default NULL,
  `idcard` varchar(20) collate utf8_unicode_ci default NULL,
  `signature` text collate utf8_unicode_ci,
  `type` varchar(255) collate utf8_unicode_ci default NULL,
  `created` datetime default NULL,
  `agency_id` int(11) default NULL,
  `province_id` int(11) default NULL,
  `level` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for resellers
-- ----------------------------
DROP TABLE IF EXISTS `resellers`;
CREATE TABLE `resellers` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) default NULL,
  `title` varchar(255) default NULL,
  `detail` text,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `level_id` int(11) default '2',
  `display` varchar(50) character set utf8 default NULL,
  `username` varchar(30) character set utf8 default NULL,
  `password` varchar(20) character set utf8 default NULL,
  `email` varchar(50) collate utf8_unicode_ci default NULL,
  `image` varchar(50) character set utf8 default NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  `fullname` varchar(255) character set utf8 default NULL,
  `group_id` int(11) default NULL,
  `last_login` datetime default NULL,
  `chat_operator` varchar(50) collate utf8_unicode_ci default '',
  `m_status` varchar(30) collate utf8_unicode_ci default 'active',
  `newsletter` varchar(255) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'informations', '{\"th\":\"ข่าวประชาสัมพันธ์\",\"en\":\"\"}', 'ข่าวประชาสัมพันธ์', '0', 'ข่าวประชาสัมพันธ์', '0', '0', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('2', 'informations', '{\"th\":\"ประชาชน\",\"en\":\"people\"}', 'ประชาชน', '1', '', '0', '0', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('6', 'notices', '{\"th\":\"ประกาศ/จัดจ้าง\",\"en\":\"\"}', 'ประกาศ-จัดจ้าง', '0', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('3', 'informations', '{\"th\":\"วิชาการ\",\"en\":\"academic\"}', 'วิชาการ', '1', '', '0', '0', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('4', 'informations', '{\"th\":\"น่าสนใจทั่วไป\",\"en\":\"general\"}', 'น่าสนใจทั่วไป', '1', null, '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('5', 'informations', '{\"th\":\"อื่นๆ\",\"en\":\"other\"}', null, '1', null, '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('7', 'notices', '{\"th\":\"เสนอแนะวิจารณ์\",\"en\":\"\"}', null, '6', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('8', 'notices', '{\"th\":\"ประกาศจัดซื้อจัดจ้าง\",\"en\":\"\"}', null, '6', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('9', 'notices', '{\"th\":\"ประกาศผล\",\"en\":\"\"}', null, '6', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('10', 'laws', '{\"th\":\"กฎหมายที่เกี่ยวข้อง\",\"en\":\"\"}', 'กฎหมายที่เกี่ยวข้อง', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('11', 'laws', '{\"th\":\"กฎหมายทั่วไป\",\"en\":\"\"}', null, '10', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('12', 'laws', '{\"th\":\"กฎกระทรวงสาธารณสุข\",\"en\":\"\"}', null, '10', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('13', 'laws', '{\"th\":\"ประกาศกระทรวงสาธารณสุข\",\"en\":\"\"}', null, '10', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('14', 'knowledges', '{\"th\":\"ความรู้วิชาการ\",\"en\":\"\"}', null, '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('15', 'knowledges', '{\"th\":\"สารบัญโลกติดต่อ\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('16', 'knowledges', '{\"th\":\"สถานการณ์โรค\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('17', 'knowledges', '{\"th\":\"สาระน่ารู้เรื่องโรค\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('18', 'knowledges', '{\"th\":\"ผลงานวิชาการ\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('19', 'knowledges', '{\"th\":\"โรคไข้หวัดนก\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('20', 'knowledges', '{\"th\":\"โรคชาร์ค\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('21', 'knowledges', '{\"th\":\"อหิวาตกโรค\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('22', 'knowledges', '{\"th\":\"Avian Infuuenza\",\"en\":\"\"}', null, '14', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('23', 'galleries', '{\"th\":\"ถาพถ่ายกิจกรรม\",\"en\":\"\"}', 'ถาพถ่ายกิจกรรม', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('91', 'galleries', '{\"th\":\"การประชุมวิชาการ โรคติดต่อระหว่างสัตว์และคนรับภาวะโลกร้อน ปี 2551\",\"en\":\"\"}', null, '23', null, '1', '2', '12', 'approve', '0', '2010-12-20 16:45:34', null);
INSERT INTO `categories` VALUES ('26', 'weblinks', '{\"th\":\"จัดการลิ้งค์\",\"en\":\"\"}', 'จัดการลิ้งค์', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('27', 'weblinks', '{\"th\":\"หน่วยงานราชการ\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('28', 'weblinks', '{\"th\":\"สถาบันการแพทย์\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('29', 'weblinks', '{\"th\":\"สุขภาพและอนามัย\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('30', 'weblinks', '{\"th\":\"ข่าวสารและสื่อทั่วไป\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('31', 'weblinks', '{\"th\":\"นิตยสารวารสาร\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('32', 'weblinks', '{\"th\":\"อื่นๆ\",\"en\":\"\"}', null, '26', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('33', 'faqs', '{\"th\":\"คำถามที่ถามบ่อย\",\"en\":\"\"}', 'คำถามที่ถามบ่อย', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('34', 'faqs', '{\"th\":\"การใช้งาน\",\"en\":\"\"}', null, '33', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('35', 'faqs', '{\"th\":\"กระบวนการ\",\"en\":\"\"}', null, '33', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('36', 'faqs', '{\"th\":\"มาตรการ\",\"en\":\"\"}', null, '33', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('37', 'faqs', '{\"th\":\"บริการทั่วไป\",\"en\":\"\"}', null, '33', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('38', 'mediafiles', '{\"th\":\"สื่อมัลติมีเดีย\",\"en\":\"\"}', 'สื่อมัลติมีเดีย', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('39', 'mediafiles', '{\"th\":\"ไฟล์วิดีโอ\",\"en\":\"video\"}', null, '38', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('40', 'mediafiles', '{\"th\":\"ไฟล์เสียง\",\"en\":\"sound\"}', null, '38', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('42', 'webboard_quizs', '{\"th\":\"เว็บบอร์ด\",\"en\":\"\"}', null, '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('44', 'webboard_quizs', '{\"th\":\"ประกาศ / วิธีการใช้เว็บบอร์ด\",\"en\":\"\"}', null, '42', 'ประกาศจากทีมงาน สำนักโรคติดต่อทั่วไป กรุณาอ่านก่อนใช้งานนะครับ', '1', '2', null, 'approve', '1', null, null);
INSERT INTO `categories` VALUES ('45', 'webboard_quizs', '{\"th\":\"Comment Board\",\"en\":\"\"}', null, '42', 'แนะนำและติชม หรือเสนอข้อคิดเห็นที่เป็นประโยชน์กับบอร์ด', '1', '2', null, null, '5', null, null);
INSERT INTO `categories` VALUES ('46', 'webboard_quizs', '{\"th\":\"General\",\"en\":\"\"}', null, '42', 'ถามตอบ เรื่องทั่วไปเกี่ยวกับ สำนักโรคติดต่อทั่วไป', '1', '2', null, null, '10', null, null);
INSERT INTO `categories` VALUES ('47', 'webboard_quizs', '{\"th\":\"โรคไข้หวัดใหญ่ 2009\",\"en\":\"\"}', null, '42', 'สอบถามปัญหา แชร์ความรู้และประสบการณ์ พร้อมวิธีการป้องกันโรคไข้หวัดใหญ่ 2009', '1', '2', null, null, '15', null, null);
INSERT INTO `categories` VALUES ('48', 'webboard_quizs', '{\"th\":\"แจ้งเหตุการณ์\",\"en\":\"\"}', null, '42', 'แจ้งเหตุการณ์', '1', '2', null, 'approve', '20', null, null);
INSERT INTO `categories` VALUES ('50', 'academics', '{\"th\":\"ศูนย์รวมวิชาการ\",\"en\":\"\"}', null, '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('51', 'academics', '{\"th\":\"คู่มือวิชาการ\",\"en\":\"\"}', null, '50', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('52', 'academics', '{\"th\":\"แนวงานการดำเนินงาน\",\"en\":\"\"}', null, '50', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('53', 'academics', '{\"th\":\"งานวิจัย\",\"en\":\"\"}', null, '50', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('54', 'mediapublics', '{\"th\":\"สื่อเผยแพร่\",\"en\":\"\"}', null, '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('55', 'mediapublics', '{\"th\":\"แผ่นพับ\",\"en\":\"\"}', null, '54', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('56', 'mediapublics', '{\"th\":\"โปสแตอร์\",\"en\":\"\"}', null, '54', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('57', 'mediapublics', '{\"th\":\"หนังสือ\",\"en\":\"\"}', null, '54', '', '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('58', 'mediapublics', '{\"th\":\"สติ๊กเกอร์\",\"en\":\"\"}', null, '54', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('74', 'newsletters', '{\"th\":\"แจ้งข่าวสารทางอีเมล์\",\"en\":\"\"}', '', '0', null, '1', '2', null, null, '0', null, null);
INSERT INTO `categories` VALUES ('75', 'newsletters', '{\"th\":\"วิชาการ\",\"en\":\"\"}', null, '74', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('76', 'newsletters', '{\"th\":\"สถานการณ์โรค\",\"en\":\"\"}', null, '74', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('77', 'newsletters', '{\"th\":\"วาไรตี้\",\"en\":\"variety\"}', null, '74', '', '1', '2', null, 'approve', '0', null, null);
INSERT INTO `categories` VALUES ('92', 'galleries', '{\"th\":\"Adobe Web Photo Gallery 11/3/2551\",\"en\":\"\"}', null, '23', null, '1', '2', '12', 'approve', '0', null, null);
INSERT INTO `levels` VALUES ('1', 'Administrator');
INSERT INTO `levels` VALUES ('2', 'Member');
INSERT INTO `modules` VALUES ('1', 'ข่าวประชาสัมพันธ์', 'informations', '20');
INSERT INTO `modules` VALUES ('2', 'ประกาศ/จัดจ้าง', 'notices', '20');
INSERT INTO `modules` VALUES ('3', 'กฏหมายที่เกี่ยวข้อง', 'laws', '20');
INSERT INTO `modules` VALUES ('7', 'ความรู้วิชาการ', 'knowledges', '20');
INSERT INTO `modules` VALUES ('5', 'สมาชิก', 'users', '20');
INSERT INTO `modules` VALUES ('6', 'จัดการสิทธิ์', 'levels', '20');
INSERT INTO `modules` VALUES ('8', 'โพล', 'polls', '20');
INSERT INTO `modules` VALUES ('9', 'ภาพถ่ายกิจกรรม', 'galleries', '24');
INSERT INTO `modules` VALUES ('10', 'จัดการลิ้งค์', 'weblinks', '15');
INSERT INTO `modules` VALUES ('11', 'คำถามที่ถามบ่อย', 'faqs', '20');
INSERT INTO `modules` VALUES ('12', 'สื่อมัลติมีเดีย', 'mediafiles', '20');
INSERT INTO `modules` VALUES ('13', 'ข่าวสารผู้บริหาร', 'executives', '20');
INSERT INTO `modules` VALUES ('14', 'เว็บบอร์ด', 'webboard_quizs', '20');
INSERT INTO `modules` VALUES ('15', 'เกี่ยวกับสำนัก', 'pages', null);
INSERT INTO `modules` VALUES ('17', 'เว็บบล็อค', 'blogs', null);
INSERT INTO `modules` VALUES ('25', 'กลุ่มงาน', 'groups', '20');
INSERT INTO `modules` VALUES ('19', 'ระบบปฎิทินกิจกรรม', 'calendars', null);
INSERT INTO `modules` VALUES ('20', 'ระบบจัดเก็บเอกสาร', 'documents', null);
INSERT INTO `modules` VALUES ('21', 'ระบบแบบสอบถาม', 'questionaire', null);
INSERT INTO `modules` VALUES ('22', 'ระบบลงทะเบียนงานประชุม', 'meetings', null);
INSERT INTO `modules` VALUES ('18', 'แชตออนไลน์', 'chats', null);
INSERT INTO `modules` VALUES ('26', 'ศูนย์รวมวิชาการ', 'academics', '20');
INSERT INTO `modules` VALUES ('27', 'สื่อเผยแพร่', 'mediapublics', '10');
INSERT INTO `modules` VALUES ('28', 'weblog', 'blogs', null);
INSERT INTO `modules` VALUES ('29', 'แจ้งลบความเห็น', 'webboard_relate_dels', '10');
INSERT INTO `modules` VALUES ('30', 'แจ้งข่าวสารทางอีเมล์', 'newsletters', '20');
INSERT INTO `modules` VALUES ('31', 'ไฮไลท์', 'hilights', '20');
INSERT INTO `modules` VALUES ('32', 'สถานะเว็บบอร์ด', 'webboard_status_configs', null);
INSERT INTO `modules` VALUES ('33', 'กรองคำหยาบ', 'webboard_bad_words', null);
INSERT INTO `modules` VALUES ('34', 'เมนู', 'menus', '20');
INSERT INTO `modules` VALUES ('36', 'จัดการลิสต์', 'listperpages', null);
INSERT INTO `modules` VALUES ('37', 'จัดการกลุ่มผู้ใช้เว็บบอร์ด', 'webboard_post_levels', null);
INSERT INTO `modules` VALUES ('38', 'แจ้งลบความคิดเห็นเว็บบล็อค', 'blogs', null);
INSERT INTO `profiles` VALUES ('1', '1', 'ศิขรินทร์', 'อิงคเศรษฐ์', 'm', '1985-03-08', '15415', '0863321750', '228/96 หมูบ้านไพโรจน์ เขตบางนา แขวงบางนา จังหวัดกรุงเทพ ', '10260', null, null, null, null, '4cca3c762c6c1.png', null, 'ฝ่ายจิปาถะ', null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('2', '13', 'นายแพทย์โอภาส', 'การย์กวินพงศ', '', '0000-00-00', '0 2590 3160', '', '', '', null, null, null, null, '4cb6709bf2829.jpg', null, 'ผู้อำนวยการสำนักโรคติดต่อทั่วไป', null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('3', '12', 'เนเน่จัง', '', 'f', '2010-11-22', '', '', '', '', null, null, null, null, '4ce9f0a54e7e5.png', '2010-11-29 06:58:25', null, null, '<img title=\"lipsrsealed\" src=\"media/tiny_mce/plugins/emotions/img/lipsrsealed.gif\" border=\"0\" alt=\"lipsrsealed\" /><br />', null, null, null, null, null);
INSERT INTO `profiles` VALUES ('4', '0', 'sikarin', 'engkased', null, '0000-00-00', null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('5', '0', 'sikarin', 'engkased', null, '0000-00-00', null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('6', '0', 'Sikarin', 'Engkased', 'm', '1985-03-08', null, null, null, null, null, null, null, null, null, '2010-11-09 09:55:47', '', '1101400408137', null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('7', '0', 'a', 'a', 'f', '2010-11-24', null, null, null, null, null, null, null, null, null, '2010-11-26 02:44:48', '', '1111111111111', null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('8', '17', 'อารญา', 'ตันสินชัย', 'f', '1985-12-08', '02-222-2222', '085-122-2222', 'rrr', 'rrrrr', null, null, null, null, '4cf76564063b0.png', '2010-12-09 06:46:06', null, null, null, null, null, null, null, null);
INSERT INTO `profiles` VALUES ('10', '23', 'kannika', 'jitproe', 'f', '1986-04-06', null, null, null, null, null, null, null, null, null, '2011-01-04 03:54:06', 'ตำแหน่ง', '1101400408137', null, 'เจ้าหน้าที่สาธารณสุข', '2011-01-04 03:54:06', '1', '1', null);
INSERT INTO `profiles` VALUES ('11', '34', 'qqq', 'qqq', 'm', '2011-01-03', null, null, null, null, null, null, null, null, null, '2011-01-17 05:00:39', '', '', null, 'ประชาชนทั่วไป', '2011-01-17 05:00:39', '1', '1', '');
INSERT INTO `profiles` VALUES ('12', '35', 'rrr', 'rr', 'm', '2011-01-03', null, null, null, null, null, null, null, null, null, '2011-01-17 06:44:41', '', '', null, 'ประชาชนทั่วไป', '2011-01-17 06:44:41', '1', '1', '');
INSERT INTO `profiles` VALUES ('13', '36', 'qqq', 'qqq', 'm', '2011-01-12', null, null, null, null, null, null, null, null, null, '2011-01-17 07:25:55', '', '', null, 'ประชาชนทั่วไป', '2011-01-17 07:25:55', '1', '1', '');
INSERT INTO `profiles` VALUES ('14', '37', 'qqq', 'qqq', 'm', '2011-01-12', null, null, null, null, null, null, null, null, null, '2011-01-17 07:33:34', '', '', null, 'ประชาชนทั่วไป', '2011-01-17 07:33:34', '1', '1', '');
INSERT INTO `users` VALUES ('1', '1', 'Jax', 'ampzimeow', 'sikarin', 'nooampzi@hotmail.com', 'keroro1.gif', '2010-05-14 15:07:32', '2010-06-30 09:47:59', 'ศิขรินทร์ อิงคเศรษฐ์', '1', '2010-12-29 02:27:39', 'draft', null, null);
INSERT INTO `users` VALUES ('2', '1', 'ขุงขิง', 'khing', '1234', 'kaewsirirung', '23042010590.jpg', '2010-05-18 06:39:27', '2010-05-19 04:20:19', 'sirilux', null, '2010-12-28 03:42:23', 'draft', null, null);
INSERT INTO `users` VALUES ('7', '2', 'intranet', 'intranet', '123456', 'intranet@intranet.com', null, '2010-05-26 08:37:35', null, null, null, null, 'draft', null, null);
INSERT INTO `users` VALUES ('8', '1', 'admin', 'admin', 'admin', 'administrator@thaigcd.moph.go.th', null, '2010-09-20 03:25:34', null, null, null, null, 'draft', null, null);
INSERT INTO `users` VALUES ('10', '1', 'Seereen', 'Seereen', '12345s', 'admin', null, '2010-06-17 09:48:09', null, null, null, null, 'draft', null, null);
INSERT INTO `users` VALUES ('12', '1', 'เนเน่จัง', 'unisexx', '1234', 'unisexx@hotmail.com', null, '2010-10-12 06:17:02', null, null, '2', '2011-01-21 11:24:29', 'draft', 'active', '77,76,75');
INSERT INTO `users` VALUES ('13', '2', 'Opas', 'opas', '1234', 'opas1928@ddc.moph.go.th, opart7@yahoo.com ', null, '2010-10-13 09:47:17', null, null, '1', null, 'draft', null, null);
INSERT INTO `users` VALUES ('17', '1', 'เต้ย', null, '1234', 'a@a.com', null, '2010-11-26 02:42:16', null, null, '3', '2010-12-09 06:11:40', 'draft', null, null);
INSERT INTO `users` VALUES ('20', '1', 'first', null, '1234', 'first', null, '2010-12-08 09:07:25', null, null, '2', '2010-12-15 06:38:06', '', null, null);
INSERT INTO `users` VALUES ('21', '1', 'off', null, '1234', 'off', null, '2010-12-08 09:07:39', null, null, '1', '2010-12-14 02:58:42', '', null, null);
INSERT INTO `users` VALUES ('22', '1', 'rock', null, '1234', 'rock', null, '2010-12-08 09:08:00', null, null, '3', '2010-12-16 02:25:22', '', null, null);
