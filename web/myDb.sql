CREATE TABLE netflix (
    ID SERIAL NOT NULL PRIMARY KEY,
    media           varchar(80)   --movies and TV showes by name

);

CREATE TABLE hulu (
    ID SERIAL NOT NULL PRIMARY KEY,
    media           varchar(80)   --movies and TV showes by name

);

CREATE TABLE prime (
    ID SERIAL NOT NULL PRIMARY KEY,
    media           varchar(80)   --movies and TV showes by name

);

CREATE TABLE userList (
    ID SERIAL NOT NULL PRIMARY KEY,
    media           varchar(80)   --movies and TV showes by name

);

INSERT INTO netflix (media)
VALUES ('movie1, movie2, movie3, movie4, movie5');

INSERT INTO hulu (media)
VALUES ('movie1, movie2, movie3, movie4, movie5');

INSERT INTO prime (media)
VALUES ('movie1, movie2, movie3, movie4, movie5');

INSERT INTO userList (media)
VALUES ('movie1, movie2, movie3, movie4, movie5');


CREATE VIEW netflix_view AS
FROM media;
