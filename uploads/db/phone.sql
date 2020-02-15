-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.21 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5288
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table phone.aauth_groups
CREATE TABLE IF NOT EXISTS `aauth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_groups: ~0 rows (approximately)
/*!40000 ALTER TABLE `aauth_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_groups` ENABLE KEYS */;

-- Dumping structure for table phone.aauth_login_attempts
CREATE TABLE IF NOT EXISTS `aauth_login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(39) DEFAULT '0',
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `aauth_login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_login_attempts` ENABLE KEYS */;

-- Dumping structure for table phone.aauth_perms
CREATE TABLE IF NOT EXISTS `aauth_perms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_perms: ~0 rows (approximately)
/*!40000 ALTER TABLE `aauth_perms` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perms` ENABLE KEYS */;

-- Dumping structure for table phone.aauth_perm_to_group
CREATE TABLE IF NOT EXISTS `aauth_perm_to_group` (
  `perm_id` int(11) unsigned NOT NULL,
  `group_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`perm_id`,`group_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_perm_to_group: ~0 rows (approximately)
/*!40000 ALTER TABLE `aauth_perm_to_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perm_to_group` ENABLE KEYS */;

-- Dumping structure for table phone.aauth_perm_to_user
CREATE TABLE IF NOT EXISTS `aauth_perm_to_user` (
  `perm_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`perm_id`,`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_perm_to_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `aauth_perm_to_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perm_to_user` ENABLE KEYS */;

-- Dumping structure for table phone.aauth_users
CREATE TABLE IF NOT EXISTS `aauth_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.aauth_users: ~2 rows (approximately)
/*!40000 ALTER TABLE `aauth_users` DISABLE KEYS */;
INSERT INTO `aauth_users` (`id`, `email`, `pass`, `username`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`) VALUES
	(1, 'admin@gmail.com', 'dd5073c93fb477a167fd69072e95455834acd93df8fed41a2c468c45b394bfe3', 'Admin', 0, '2020-02-15 15:03:56', '2020-02-15 15:03:56', NULL, NULL, NULL, NULL, NULL, NULL, '::1'),
	(2, 'user@gmail.com', '316405b08e4bf3c5fc816bfb59d286d72d3de340f34723b43199de59c909fc84', 'User', 0, '2020-02-15 15:01:22', '2020-02-15 15:01:22', '2019-10-07 08:56:22', NULL, NULL, NULL, NULL, NULL, '::1');
/*!40000 ALTER TABLE `aauth_users` ENABLE KEYS */;

-- Dumping structure for table phone.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` text,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.abouts: 2 rows
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `name`, `description`, `status`) VALUES
	(1, 'Mission', '<p></p><ul><li>Sale Quality Products</li><li>Provide Best Service For Customer</li></ul><p></p>', 1),
	(2, 'Vision', '<p><ul><li>Get the most customers as we can</li><li>Provide a best service to our customers</li></ul></p>', 1);
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table phone.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `parent` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.categories: 10 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `parent`, `description`, `status`) VALUES
	(1, 'Oppo', '0', 'China', '1'),
	(2, 'Vivo', '0', 'from china', '1'),
	(3, 'Apple', '0', 'Apple form california', '1'),
	(4, 'Samsung', '0', 'Korea', '1'),
	(5, 'Huawei', '0', 'China1', '1'),
	(6, 'Xs Max', '3', 'Rom', '1'),
	(7, 'Xiao Mi', '', 'china', '0'),
	(8, 'Xs', '3', 'Rom', '1'),
	(9, '11 Pro Max', '3', 'Rom', '1'),
	(10, '11 Pro', '3', 'Rom', '1');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table phone.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.ci_sessions: 13 rows
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('g1mpsppbfe7htjdmbt2067v0fpc35r8b', '::1', 1581507550, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530373535303B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('gbj200p6t2fjbv81i9ba6214ut8dq4n6', '::1', 1581507244, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530373234343B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('ldsb8t7v4aaf9bmt9l2d4cb1mutpucob', '::1', 1581506917, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530363931373B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('4mgr0rvfnouh1iss0aj164v52kvp8tfm', '::1', 1581505938, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530353933383B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('frg0f3iqi6m9143met0ldl1rche3fblq', '::1', 1581505604, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530353630343B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('rctnnj11fc6vh772r4qkla4ip3s001oh', '::1', 1581757251, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735373136323B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('c7pc5r6urshp6caq4r6v4fp6u8cbj8cp', '::1', 1581757162, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735373136323B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('8f6gbe0p47ad443vraio9n1jcljs5m8u', '::1', 1581756640, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735363634303B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('pq69qbukcqpn31oqc1v7vm580qdm05ui', '::1', 1581756258, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735363235383B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('iopa8apa6v5db2ut0pi2sk73p6ga37a1', '::1', 1581755956, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735353935363B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('3onqs0br4s0rrh08haj6gnv7ebn5lkse', '::1', 1581755563, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735353536333B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('ls6gnvn9rjiu6d318c7cm9lfh1r8fr3a', '::1', 1581754711, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735343731313B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('1jnrdjmlpqd033usj63m4mle1efulnpo', '::1', 1581754295, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735343239353B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('sbfca2upfpsebapb34iqn261j7difr52', '::1', 1581753804, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735333830343B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('jgkk1u0mo4u97t4g40j83stkstbfcmul', '::1', 1581753477, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735333437373B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('n2vcn4669qmrek7c44ppmohoeoepq3dd', '::1', 1581753091, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735333039313B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('6q68m1t7te0159ks5b8chdo72fc2blnp', '::1', 1581752742, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735323734323B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('bet3d0m1plhd8t207dqpdn9dvn983ec5', '::1', 1581750530, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735303533303B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('phpgv8gk3p7qeicrqrv21pchnnsa7fcc', '::1', 1581750174, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313735303137343B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('6ontv1ic2i8amo8i3k77hej9peoeo4kd', '::1', 1581749865, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313734393836353B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('qsrrvb92mc0r5h0jb0dp7s3cjr9bk30f', '::1', 1581749489, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313734393438393B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('uerrl0emsbblkblm5u5enko9ei273p4b', '::1', 1581749147, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313734393134373B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('jdfn43umk2cce6rm7875amta76j26kf8', '::1', 1581508134, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530383132363B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('kg6vftv1jh8sos0htrf9ohc1cb2ljc1h', '::1', 1581508126, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538313530383132363B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table phone.feedbacks
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `feedback` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.feedbacks: 1 rows
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
INSERT INTO `feedbacks` (`id`, `name`, `phone`, `feedback`, `date`) VALUES
	(19, 'rom', '09876532', 'fuck you admin', '2020-02-15'),
	(12, 'thul', '0987654', 'your service is good.', '2020-02-06');
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;

-- Dumping structure for table phone.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL DEFAULT '0',
  `order_name` varchar(50) NOT NULL DEFAULT '0',
  `phone` text,
  `qty` varchar(50) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1: waiting confirm, 2: confirmed order, 3:  wating recieve, 4: wating feedback',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.orders: 3 rows
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `product_id`, `order_name`, `phone`, `qty`, `date`, `status`) VALUES
	(1, 8, 'Thul', '0123765432', '2', '2020-02-09', 2),
	(2, 8, 'Thul', '0123765432', '2', '2020-02-09', 1),
	(3, 6, 'Ra', '01287654345', '1', '2020-02-12', 1),
	(4, 7, 'Rom', '0123765432', '1', '2020-02-15', 4);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table phone.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table phone.prices: 0 rows
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;

-- Dumping structure for table phone.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '0',
  `code` varchar(50) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `category_id` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Ram, HardDisk, Laptop, Desktop, ',
  `description` varchar(250) NOT NULL DEFAULT '0',
  `image` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(2) DEFAULT NULL,
  `updated_by` int(2) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `active` int(1) NOT NULL DEFAULT '0',
  `is_new` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.products: 25 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `code`, `price`, `category_id`, `description`, `image`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`, `active`, `is_new`) VALUES
	(1, 'lemon', '0', 4, '1', 'Oppo lemon', '0.jpg', NULL, '2020-02-03 20:49:27', NULL, 1, 1, 1, 1),
	(4, 'Lemon brown', '001', 5, '1', 'Line', '001.jpg', '2020-01-31 00:52:43', '2020-02-04 08:48:10', 1, 1, 1, 1, 1),
	(5, 'Best Case', '002', 6, '3', '  Xs Max', '002.jpg', '2020-02-04 10:31:55', '2020-02-07 22:56:04', 1, 1, 1, 1, 0),
	(6, 'Best case', '003', 7, '3', 'XS MAX', '003.jpg', '2020-02-04 10:36:38', '2020-02-07 22:55:51', 1, 1, 1, 1, 0),
	(7, 'Base case', '004', 8, '3', 'Xs Max', '004.jpg', '2020-02-04 10:44:33', '2020-02-07 22:55:41', 1, 1, 1, 1, 0),
	(8, '', '005', 9, '3', '11 Pro Max', '005.jpg', '2020-02-04 10:46:03', '2020-02-07 22:55:18', 1, 1, 1, 1, 0),
	(9, '', '006', 10, '3', '11 Pro Max', '006.jpg', '2020-02-04 10:46:35', '2020-02-07 22:55:30', 1, 1, 1, 1, 0),
	(10, '', '007', 5, '4', 'Samsung Note 10 Plus', '007.jpg', '2020-02-04 10:47:53', '2020-02-06 18:22:20', 1, 1, 1, 1, 0),
	(11, 'Ra', '008', 10, '4', 'Samsung Note 10 Plus', '008.jpg', '2020-02-06 18:22:14', NULL, 1, NULL, 1, 1, 0),
	(12, 'Ra', '009', 10, '4', 'Samsung Note 10 Plus', '009.jpg', '2020-02-06 18:22:36', '2020-02-06 18:27:53', 1, 1, 1, 1, 0),
	(13, 'Ra', '010', 10, '4', 'Samsung Note 10 Plus', '010.png', '2020-02-06 18:22:53', NULL, 1, NULL, 1, 1, 0),
	(14, 'Ra', '011', 15, '4', 'Samsung Note 10 Plus', '011.jpg', '2020-02-06 18:23:20', '2020-02-06 18:24:16', 1, 1, 1, 1, 0),
	(15, 'Ra', '012', 8, '5', 'Huawei Honor  Note 10', '012.jpg', '2020-02-06 18:26:09', NULL, 1, NULL, 1, 1, 0),
	(16, 'Ra', '013', 9, '5', 'Huawei Honor Note 10', '013.jpg', '2020-02-06 18:27:06', '2020-02-06 18:28:05', 1, 1, 1, 1, 0),
	(17, 'Ra', '014', 15, '5', 'Huawei Honor Note 10', '014.jpg', '2020-02-06 18:29:29', NULL, 1, NULL, 1, 1, 0),
	(18, 'Ra', '015', 20, '5', 'Huawei  Nova  2i', '015.jpg', '2020-02-06 18:30:16', NULL, 1, NULL, 1, 1, 0),
	(19, 'Ra', '016', 25, '5', 'Huawei P20 P20 Pro', '016.jpg', '2020-02-06 18:31:37', NULL, 1, NULL, 1, 1, 0),
	(20, 'Ra', '017', 4, '2', 'Armor Case For Vivo V7 ', '017.jpg', '2020-02-06 18:32:46', '2020-02-06 18:33:06', 1, 1, 1, 1, 0),
	(21, 'Ra', '018', 2, '2', 'Sublime Case for Vivo V9', '018.jpg', '2020-02-06 18:33:56', NULL, 1, NULL, 1, 1, 0),
	(22, 'Ra', '019', 13, '2', 'Sublime Case for Vivo V9', '019.jpg', '2020-02-06 18:34:46', NULL, 1, NULL, 1, 1, 0),
	(23, 'Ra', '020', 7, '2', 'Naruto Face Y91/Y95 Case', '020.jpg', '2020-02-06 18:36:11', NULL, 1, NULL, 1, 1, 0),
	(24, 'Ra', '021', 14, '2', 'Hardcase Vivo Y91 ', '021.jpg', '2020-02-06 18:37:30', NULL, 1, NULL, 1, 1, 0),
	(25, 'Ra', '022', 5, '1', 'Oppo Case', '022.jpg', '2020-02-06 18:38:56', NULL, 1, NULL, 1, 1, 0),
	(26, 'Ra', '023', 8, '1', 'Oppo A9 Case', '023.jpg', '2020-02-06 18:39:17', NULL, 1, NULL, 1, 1, 0),
	(27, 'Ra', '024', 7, '1', 'Oppo A73 Case', '024.webp', '2020-02-06 18:39:59', '2020-02-06 18:58:14', 1, 1, 1, 1, 1),
	(28, 'rom', '025', 7, '3', 'afk', '025.jpg', '2020-02-15 15:03:21', '2020-02-15 16:00:51', 2, 1, 1, 0, 0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
