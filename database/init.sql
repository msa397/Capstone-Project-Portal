/*
SQL Commands to create the needed database and tables

TODO:
    See Comments

Modified: 10/30/21 by Michael




INSERT INTO User_Role(role_id, role_name) VALUES
    (1, 'Student'),
    (2, 'Administrator');

INSERT INTO Permission (perm_id, perm_mod, perm_desc) VALUES
    (1, 'STU', 'Project Preferences'),
    (2, 'ADM', 'Post Project');

INSERT INTO Role_Permissions (role_id, perm_id) VALUES
    (1, 1),
    (2, 2);
*/



CREATE DATABASE IF NOT EXISTS Project_Portal;

use Project_Portal;
-- Holds User information
-- User ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS User (
    user_id INTEGER AUTO_INCREMENT PRIMARY KEY, -- ask professor what identifier he wants for User
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    role_id int(11) NOT NULL
);

CREATE TABLE IF NOT EXISTS User_Role(
    role_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(20) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS Permission(
    perm_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    perm_mod VARCHAR(10) NOT NULL,
    perm_desc VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS Role_Permissions(
    role_id int(11) NOT NULL PRIMARY KEY,
    perm_id int(11) NOT NULL
);


-- Holds project information
-- Project ID is automatically incremented by 1 for each row
CREATE TABLE IF NOT EXISTS Project (
    project_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(200) NOT NULL,
    admin_name VARCHAR(200) NOT NULL,
    admin_company VARCHAR(200) NOT NULL,
    admin_email VARCHAR(200) NOT NULL,
    project_description VARCHAR (2000) NOT NULL,
    project_skills VARCHAR (2000) NOT NULL,
    project_resources VARCHAR(2000) NOT NULL,
    project_note VARCHAR(2000)
);

-- Holds student project preferences
CREATE TABLE IF NOT EXISTS Preferences (
    user_id INTEGER,
    project_id INTEGER,
    preference INTEGER NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User (user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Holds group assignments
CREATE TABLE IF NOT EXISTS Group_Assignment (
    user_id INTEGER PRIMARY KEY,
    project_id INTEGER,
    FOREIGN KEY (user_id) REFERENCES User (user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (project_id) REFERENCES Project (project_id) ON DELETE CASCADE ON UPDATE CASCADE
);