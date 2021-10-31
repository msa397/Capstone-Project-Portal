/*
SQL Commands to create the needed database and tables

TODO:
    See Comments

Modified: 10/30/21 by Michael
*/



CREATE DATABASE IF NOT EXISTS Project_Portal;

use Project_Portal;
-- Holds student information
-- Student ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS Student (
    student_id INTEGER AUTO_INCREMENT PRIMARY KEY, -- ask professor what identifier he wants for students
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL
    -- do students need to log in? if so, add username + password
);

-- Holds project information
-- Project ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS Project (
    project_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(200) NOT NULL,
    project_admin VARCHAR(2000) NOT NULL,
    project_description VARCHAR (2000) NOT NULL,
    project_skills VARCHAR (2000) NOT NULL,
    project_resources VARCHAR(2000) NOT NULL,
    project_note VARCHAR(2000)
);

-- Holds student project preferences
CREATE TABLE IF NOT EXISTS Preferences (
    student_id INTEGER,
    project_id INTEGER,
    preference INTEGER NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Student (student_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Holds group assignments
CREATE TABLE IF NOT EXISTS Group_Assignment (
    student_id INTEGER PRIMARY KEY,
    project_id INTEGER,
    FOREIGN KEY (student_id) REFERENCES Student (student_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);