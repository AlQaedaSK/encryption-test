CREATE TABLE IF NOT EXISTS `dados` (
`id_dado` int(111) NOT NULL AUTO_INCREMENT,
`nome` varchar(150) NOT NULL,
`email` varchar(150) NOT NULL,
`info` longtext NOT NULL,
`info2` longtext NOT NULL,
PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;