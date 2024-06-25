
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `members`
--

CREATE TABLE `members` (
  `memberid` int(11) NOT NULL,
  `teamname` varchar(50) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `d_eposta` varchar(50) NOT NULL,
  `d_phone` varchar(50) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_mail` varchar(50) NOT NULL,
  `std_name2` varchar(50) NOT NULL,
  `std_mail2` varchar(50) NOT NULL,
  `std_name3` varchar(50) NOT NULL,
  `std_mail3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `members`
--

UPDATE `members` SET `memberid` = 71,`teamname` = 'team 1 name ',`coach` = 'team 1',`d_eposta` = 'team1@gmail.com',`d_phone` = '32189328904',`std_name` = 'student1',`std_mail` = 'student1@gmail.com',`std_name2` = 'student2',`std_mail2` = 'student2@gmail.com',`std_name3` = 'student3',`std_mail3` = 'student3@gmail.com' WHERE `members`.`memberid` = 71;
UPDATE `members` SET `memberid` = 72,`teamname` = 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejq',`coach` = 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejq',`d_eposta` = 'a.lberth.a.n.shi.n.4.9@gmail.com',`d_phone` = '84236256958',`std_name` = 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejq',`std_mail` = 'a.lberth.a.n.shi.n.4.9@gmail.com',`std_name2` = 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejq',`std_mail2` = 'a.lberth.a.n.shi.n.4.9@gmail.com',`std_name3` = 'Mefijwdihwdjwsjdhwjqsqodkwfk fjebfhjhdjwshfewifejq',`std_mail3` = 'a.lberth.a.n.shi.n.4.9@gmail.com' WHERE `members`.`memberid` = 72;
UPDATE `members` SET `memberid` = 73,`teamname` = 'team ',`coach` = 'team1',`d_eposta` = 'team1@gmail.com',`d_phone` = '34324324234',`std_name` = 'team1',`std_mail` = 'team1student@gmail.com',`std_name2` = 'Team name ',`std_mail2` = 'team1student@gmail.com',`std_name3` = 'Team name',`std_mail3` = 'team1student@gmail.com' WHERE `members`.`memberid` = 73;
