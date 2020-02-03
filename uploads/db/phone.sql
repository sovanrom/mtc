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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

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
	(1, 'admin@gmail.com', 'dd5073c93fb477a167fd69072e95455834acd93df8fed41a2c468c45b394bfe3', 'Admin', 0, '2020-02-03 15:39:00', '2020-02-03 15:39:00', NULL, NULL, NULL, NULL, NULL, NULL, '::1'),
	(2, 'user@gmail.com', '316405b08e4bf3c5fc816bfb59d286d72d3de340f34723b43199de59c909fc84', 'User', 0, '2020-02-03 09:25:39', '2020-02-03 09:25:39', '2019-10-07 08:56:22', NULL, NULL, NULL, NULL, NULL, '::1');
/*!40000 ALTER TABLE `aauth_users` ENABLE KEYS */;

-- Dumping structure for table phone.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` text,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.abouts: 1 rows
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `name`, `description`, `status`) VALUES
	(1, 'Mission', '<p></p><ul><li>Sale Quality Products</li><li>Provide Best Service For Customer</li></ul><p></p>', 1),
	(2, 'Vision', '<p><ul><li>Get the most customers as we can</li><li>Provide a best service to our customers</li></ul></p>', 1);
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table phone.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.categories: 5 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `description`, `status`) VALUES
	(1, 'Oppo', 'China', '1'),
	(2, 'Vivo', 'from china', '1'),
	(3, 'Apple', 'Apple form california', '1'),
	(4, 'Sumsung', 'Korea', '1'),
	(5, 'Huawei', 'China1', '1');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table phone.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Dumping data for table phone.ci_sessions: 138 rows
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('mbqhuk5odiofljtfnlfr0u25uqg6anhj', '::1', 1580719223, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303731393133383B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('gupokpqs92om26spls1jf71i9c9b4llk', '::1', 1580719138, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303731393133383B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('jo3nne5r52feu0kkut5o2dr8htrt4etd', '::1', 1580699349, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639393330353B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('dafka37ms6s4f7skkstfo1p8nnl8cp13', '::1', 1580699305, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639393330353B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('rj7l1803khqjlag7em1b1m44a31c5fi8', '::1', 1580698700, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639383730303B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('s81qrrd4tentl1prsnreosrp3cphj3k1', '::1', 1580697988, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639373938383B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('svva2e5vrrtvvi8aaabohvcf1h2lkhu4', '::1', 1580697035, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639373033353B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('f3oh8h2o6iergvj306s9m4btsh249673', '::1', 1580695879, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639353837393B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('ooepeh471i54tamd8s7er93pq7qdv094', '::1', 1580696180, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639363138303B69647C733A313A2231223B757365726E616D657C733A353A2241646D696E223B656D61696C7C733A31353A2261646D696E40676D61696C2E636F6D223B6C6F67676564696E7C623A313B),
	('mi6rn4s7rs6sheah40chdapsigprfrem', '::1', 1580696555, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313538303639363535353B69647C733A313A2232223B757365726E616D657C733A343A2255736572223B656D61696C7C733A31343A227573657240676D61696C2E636F6D223B6C6F67676564696E7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

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
  `active` int(1) NOT NULL DEFAULT '1',
  `is_new` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table phone.products: 2 rows
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `code`, `price`, `category_id`, `description`, `image`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`, `active`, `is_new`) VALUES
	(1, 'lemon', '0', 4, '1', 'Oppo lemon', '0.jpg', NULL, '2020-01-31 01:31:54', NULL, 1, 1, 1, 1),
	(4, 'Lemon brown', '001', 5, '1', 'Line', '001.jpg', '2020-01-31 00:52:43', NULL, 1, NULL, 1, 1, 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
