CREATE TABLE `mySiteUsers` (
   `userid` smallint unsigned NOT NULL AUTO_INCREMENT,
   `username` char(50) NOT NULL,
   `pw` char(50) NOT NULL,
   `userType` char(50) NOT NULL,
   PRIMARY KEY (`userid`)
);
-- insert data into the tables
INSERT INTO mySiteUsers
VALUES (1, "revisa", "iloveintroit", 'admin');