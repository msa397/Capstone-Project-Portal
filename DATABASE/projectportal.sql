/*
This file creates each table needed for the site

Pseudocode:
Students log in and data is stored in Student Table
Companies post projects and data is stored in Project Table
Students use site to post preferences, which are stored in Preferences Table
Site uses algorithm to form groups, which are stored in Group Table

Modified: 10/30/21 by Michael
*/



--Holds student information
--Student ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS Student (
    student_id integer IDENTITY (1, 1) PRIMARY KEY, --ask professor what identifier he wants for students
    first_name varchar(20) NOT NULL,
    last_name varchar(20) NOT NULL
    --do students need to log in? if so, add username + password
);

--Holds project information
--Project ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS Project (
    project_id integer IDENTITY (1, 1) PRIMARY KEY,
    project_name varchar(200) NOT NULL,
    project_admin varchar(2000) NOT NULL,
    project_description varchar (2000) NOT NULL,
    project_skills varchar (2000) NOT NULL,
    project_resources varchar(2000) NOT NULL,
    project_note varchar(2000)
);

--Holds student project preferences
CREATE TABLE IF NOT EXISTS Preferences (
    student_id integer,
    project_id integer,
    preference integer NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Student (student_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);

--Holds group assignments
CREATE TABLE IF NOT EXISTS Group (
    student_id integer PRIMARY KEY,
    project_id integer,
    FOREIGN KEY (student_id) REFERENCES Student (student_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);