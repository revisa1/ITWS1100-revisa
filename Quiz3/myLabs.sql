CREATE TABLE `myLabs` (
   `labid` smallint unsigned NOT NULL AUTO_INCREMENT,
   `title` char(50) NOT NULL,
   `landing` char(50) NOT NULL,
   PRIMARY KEY (`labid`)
);
-- insert data into the tables
INSERT INTO myLabs
VALUES (1, "Lab 1: Basic Setup", "lab1landing.html"),
(2, "Lab 2: Resume", "revisa-ariellerevis-resume.html"),
(3, "Lab 3: Portfolio", "lab3landing.html"),
(4, "Lab 4: XML", "lab4landing.html"),
(5, "Lab 5: Javascript", "lab5landing.html"),
(6, "Lab 6: jQuery", "lab6landing.html"),
(7, "Lab 7: HCI", "lab7landing.html"),
(8, "Lab 8: Javascript, JSON, AJAX", "lab8landing.html"),
(9, "Lab 9: Databases and SQL", "index.php"),
(10, "Lab 10: Promoting Servers", "lab10landing.html");