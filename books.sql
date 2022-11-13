CREATE TABLE `account` (
  `AccountId` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPass` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `bookmark` (
  `BookmarkID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `BookFavorite` varchar(40) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Permission` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;