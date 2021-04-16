CREATE TABLE accounts (
	user_id serial PRIMARY KEY,
	username VARCHAR ( 50 ) UNIQUE NOT NULL,
	password VARCHAR ( 50 ) NOT NULL,
	email VARCHAR ( 255 ) UNIQUE NOT NULL,
	created_on TIMESTAMP NOT NULL,
        last_login TIMESTAMP 
);

CREATE TABLE students (
	id serial PRIMARY KEY,
	first_name VARCHAR ( 50 ) NOT NULL,
	last_name VARCHAR ( 50 ) NOT NULL,
	university VARCHAR ( 50 ) NOT NULL,
	course VARCHAR ( 50 ) NOT NULL,
	gpa VARCHAR ( 50 ) NOT NULL
);

INSERT INTO students (first_name, last_name, university, course, gpa)
VALUES ('Devi', 'Khositashvili',  'Free University of Tbilisi', 'Math and Computer Science - MACS', '3.63 / 4.0');