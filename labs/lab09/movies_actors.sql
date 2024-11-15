CREATE TABLE movie_actors (
    actorid int(10) unsigned NOT NULL,
    movieid int(10) unsigned NOT NULL,
    PRIMARY KEY (actorid, movieid),
    FOREIGN KEY (actorid) REFERENCES actors(actorid),
    FOREIGN KEY (movieid) REFERENCES movies(movieid) 
);

INSERT INTO `movie_actors`(`actorid`, `movieid`) 
VALUES (1,3),
       (2,3),
       (3,2),
       (4,1);