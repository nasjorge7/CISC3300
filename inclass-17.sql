CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    position VARCHAR(50),
    salary DECIMAL(10,2)
);
INSERT INTO employees (name, position, salary) VALUES
('Nasir Jorge', 'Software Engineer', 85000.00),
('Ramelle Jorge', 'Project Manager', 95000.00),
('Labelle Delarosa', 'Data Analyst', 75000.00);
