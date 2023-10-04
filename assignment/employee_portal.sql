-- Create the "employee_portal" database
CREATE DATABASE IF NOT EXISTS employee_portal;
USE employee_portal;

-- Create the "employees" table with examples
CREATE TABLE IF NOT EXISTS employees (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    hours_worked DECIMAL(5, 2) NOT NULL
);

-- Insert example records
INSERT INTO employees (first_name, last_name, age, salary, hours_worked) VALUES
    ('John', 'Doe', 30, 50000.00, 40.5),
    ('Jane', 'Smith', 28, 55000.50, 37.0),
    ('David', 'Johnson', 35, 60000.75, 42.5),
    ('Emily', 'Davis', 32, 52000.25, 39.0),
    ('Michael', 'Wilson', 29, 51000.75, 41.0);


