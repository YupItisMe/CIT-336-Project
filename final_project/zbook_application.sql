-- create and select the database
DROP DATABASE IF EXISTS book_application;
CREATE DATABASE book_application;
USE book_application;

-- create the tables for the database
CREATE TABLE authors (
  authorID          INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(255)   NOT NULL,
  password          VARCHAR(60)    NOT NULL,
  firstName         VARCHAR(60)    NOT NULL,
  lastName          VARCHAR(60)    NOT NULL,
  reviewerID        INT            NOT NULL, 
  PRIMARY KEY (authorID),
  UNIQUE INDEX emailAddress (emailAddress)
);

CREATE TABLE reviews (
  reviewID          INT            NOT NULL   AUTO_INCREMENT,
  authorID          INT            NOT NULL,
  bookID            INT            NOT NULL,
  rating            INT            NOT NULL,
  reviewNote        VARCHAR(255)   NOT NULL,
  PRIMARY KEY (reviewID),
  INDEX authorID (authorID)
);

CREATE TABLE books (
  bookID           INT            NOT NULL   AUTO_INCREMENT,
  authorID         INT            NOT NULL,
  genreID          INT            NOT NULL,
  title            VARCHAR(50)    NOT NULL,
  ageType          VARCHAR(50)    NOT NULL,
  summary          VARCHAR(255)   NOT NULL,
  PRIMARY KEY (bookID), 
  INDEX authorID (authorID)
);

CREATE TABLE genres (
  genreID           INT           NOT NULL   AUTO_INCREMENT,
  genreName         VARCHAR(255)  NOT NULL,
  PRIMARY KEY (genreID)  
);


CREATE TABLE administrators (
  adminID           INT            NOT NULL   AUTO_INCREMENT,
  emailAddress      VARCHAR(255)   NOT NULL,
  password          VARCHAR(255)   NOT NULL,
  firstName         VARCHAR(255)   NOT NULL,
  lastName          VARCHAR(255)   NOT NULL,
  PRIMARY KEY (adminID)
);

-- Insert data into the tables
INSERT INTO genres (genreID, genreName) VALUES
(1, 'Fantasy'),
(2, 'Romance'),
(3, 'ScienceFiction');

INSERT INTO books (bookID, authorID, genreID, title, ageType, summary) VALUES
(1, 1, 1, 'Lord Of The Rings', 'Young Adult', 'A young Hobbit is tasked with saving the world by destroying the evil ring!')
, (2, 2, 2, '50 Shades of grey', 'Adult', 'A nasty yucky story')
, (3, 3, 3, 'Enders Game', 'Young Adult', 'Epic story of house a small boy genious saved the world')
, (4, 4, 1, 'Eragon', 'Young Adult', 'Young man finds a dragon egg, which leads him on a quest to save the world')
, (5, 5, 2, 'The Notebook', 'Adult', 'Old man tries to help old woman remember their love life')
, (6, 6, 1, 'Fablehaven', 'childrens', 'A magical journey with 2 kids as they explore a world of fairies, trolls and more!');

INSERT INTO authors (authorID, emailAddress, password, firstName, lastName, reviewerID) VALUES
(1, 'Tolkien@yahoo.com', '123456', 'J.R.', 'Tolkien', 1),
(2, 'James@yahoo.com', '123456', 'E.L.', 'James', 2),
(3, 'Orson@yahoo.com', '123456', 'Orson', 'Card', 3),
(4, 'Poalini@yahoo.com', '123456', 'Chris', 'Paolini', 4),
(5, 'Sparks@yahoo.com', '123456', 'Nick', 'Sparks', 5),
(6, 'Mull@yahoo.com', '123456', 'Brandon', 'Mull', 6);

INSERT INTO reviews (reviewID, authorID, bookID, rating, reviewNote) VALUES
(1, 1, 2, 10, 'This Book was totally a waste of my time. I give it a 10 out of 100. it seems to be all about yucky stuff'),
(2, 2, 1, 60, 'I enjoyed parts of these books. But i believe they are a bit slow in other parts.'),
(3, 3, 6, 100, 'This book was a ton of fun. I recommend them to everyone!'),
(4, 4, 3, 90, 'This book was such a fun read! Written very well for most of the book being in a childs head'),
(5, 5, 4, 80, 'Good book, would have given 100 if the movie wasnt so terrible horrible'),
(6, 6, 5, 70, 'Me and my wife read this book together. She liked it so of course so do I');


INSERT INTO administrators (adminID, emailAddress, password, firstName, lastName) VALUES
(1, 'admin@book_application.com', '123456', 'Admin', 'User'),
(2, 'josh@readers.com', '123456', 'Josh', 'Cunningham'),
(3, 'chris@readers.com', '123456', 'Chris', 'Cunningham');

-- Create a user named mgs_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';