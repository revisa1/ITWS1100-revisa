-- create the tables for our movies
CREATE TABLE `actors` (
   `actorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
   `last_name` varchar(100) NOT NULL,
   `first_names` varchar(4) DEFAULT NULL,
   `dob` date(10)
   PRIMARY KEY (`actorid`)
);
-- insert data into the tables
INSERT INTO movies
VALUES (1, "Jones", "Indiana", "1959-11-19"),
   (2, "Johanessen", "Scarlet","1950-04-12"),
   (3, "Pitt", "Brad" "1940-24-06");