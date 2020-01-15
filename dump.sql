CREATE TABLE `tasks` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated` tinyint(1) NOT NULL DEFAULT 0,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `email` (`email`),
  KEY `completed` (`completed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
