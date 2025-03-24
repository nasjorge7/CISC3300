-- Create in_class_18 database
CREATE DATABASE `in_class_18`;
USE `in_class_18`;

-- Create users table
CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(80) NOT NULL,
    `email` VARCHAR(120),
    PRIMARY KEY (`id`)
);

-- Create userComments table with foreign key to users
CREATE TABLE `userComments` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `comment` TEXT NOT NULL,
    `userID` INT(11),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`userID`) REFERENCES `users`(`id`)
);

-- Insert test data into users table
INSERT INTO users (username, email)
VALUES 
('AliceW', 'alice@example.com'),
('BobM', 'bob@example.com'),
('CathyS', 'cathy@example.com'),
('DavidJ', 'david@example.com'),
('EllenR', 'ellen@example.com');

-- Insert test data into userComments table (some users have no comments)
INSERT INTO userComments (comment, userID)
VALUES 
('This is Alice\'s first comment', 1),
('Alice's second comment.', 1),
('Hi this is Bob and my comment.', 2),
('What\'s up this is David's comment.', 4);

-- Question a. Query: Return all users and their comments (including users without comments)
SELECT users.id, users.username, users.email, userComments.comment
FROM users
LEFT JOIN userComments ON users.id = userComments.userID;

-- Question b. Query: Return only users with comments
SELECT users.id, users.username, users.email, userComments.comment
FROM users
INNER JOIN userComments ON users.id = userComments.userID;
