CREATE TABLE `myLabs` (
   `labid` smallint unsigned NOT NULL AUTO_INCREMENT,
   `title` char(100) NOT NULL,
   `landing` char(100) NOT NULL,
   PRIMARY KEY (`labid`)
);
-- insert data into the tables
INSERT INTO myLabs
VALUES (1, "Lab 1: Basic Setup", "lab1landing.php"),
(2, "Lab 2: Resume", "revisa-ariellerevis-resume.php"),
(3, "Lab 3: Portfolio", "lab3landing.php"),
(4, "Lab 4: XML", "lab4landing.php"),
(5, "Lab 5: Javascript", "lab5landing.php"),
(6, "Lab 6: jQuery", "lab6landing.php"),
(7, "Lab 7: HCI", "lab7landing.php"),
(8, "Lab 8: Javascript, JSON, AJAX", "lab8landing.php"),
(9, "Lab 9: Databases and SQL", "index.php"),
(10, "Lab 10: Promoting Servers", "lab10landing.php");