CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 AUTO_INCREMENT=4 ;

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `phoneno`, `address`) VALUES
(1, 'maksim', 'Narushevich', 'maksim@gmail.com', '375336004050', 'Minsk, Belarus');
