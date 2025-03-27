--5a. Create a new database
CREATE DATABASE my_notes_db;
USE my_notes_db;

--5b. Create the notes table
CREATE TABLE notes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(80) NOT NULL,
  description TEXT NOT NULL,
  PRIMARY KEY (id)
);

--6a. Insert some data
INSERT INTO notes (title, description) VALUES 
('Grocery List', 'Buy milk, eggs, and bread.'),
('Meeting Notes', 'Discussed quarterly goals and deadlines.'),
('Book Reminder', 'Start reading “Sapiens” this weekend.'),
('Workout Plan', 'Cardio on Monday, weights on Wednesday.');

--6b. Update some data
UPDATE notes 
SET title = 'Updated Grocery List', description = 'Buy milk, eggs, bread, and snacks.'
WHERE title = 'Grocery List';

--6c. Delete some data
DELETE FROM notes 
WHERE title = 'Workout Plan';

--7a. Select all notes and order them by name in reverse alphabetical order
SELECT * FROM notes 
ORDER BY title DESC;

--7b. Select the second note in the table (unknown ID)
SELECT * FROM notes 
ORDER BY id 
LIMIT 1 OFFSET 1;

--7c. Select notes with descriptions that contain vowels
SELECT * FROM notes 
WHERE description REGEXP '[aeiouAEIOU]';
