CREATE TABLE `myProjects` (
   `projid` smallint unsigned NOT NULL AUTO_INCREMENT,
   `name` char(50) NOT NULL,
   `landing` char(50) NOT NULL,
   PRIMARY KEY (`projid`)
);
-- insert data into the tables
INSERT INTO myProjects
VALUES (1, 'grpDir', 'http://revisarpi.eastus.cloudapp.azure.com/grpDir/site/calendar.php');