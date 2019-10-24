CREATE TABLE media (
    Movies       varchar(80),
    TV           varchar(80),
    Music        varchar(80),
    Books        varchar(80)
);


INSERT INTO media (Movies, TV, Music, Books)
    VALUES ('End Of Watch', 'FRIENDS', 'Dirty Heads', 'The Way of Kings');

INSERT INTO media (Movies, TV, Music, Books)
    VALUES ('John Wick', 'New Girl', 'Pepper', 'Words of Radiance');

INSERT INTO media (Movies, TV, Music, Books)
    VALUES ('John Wick 2', 'The Office', 'Iration', 'Oathbringer');

SELECT * FROM media;

SELECT Movies, Books FROM media;