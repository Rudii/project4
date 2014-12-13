DROP TABLE IF EXISTS User;
CREATE TABLE User (
user_id INT UNSIGNED NOT NULL PRIMARY KEY, 
firstname VARCHAR(32) DEFAULT NULL, 
lastname VARCHAR(32) DEFAULT NULL,
password VARCHAR(100) DEFAULT NULL,
username VARCHAR (20) DEFAULT NULL

);

DROP TABLE IF EXISTS Message;
CREATE TABLE Message (
id INT UNSIGNED NOT NULL PRIMARY KEY,
body VARCHAR(1000) DEFAULT NULL,
subject VARCHAR(50) DEFAULT NULL,
user_id VARCHAR(32) DEFAULT NULL,
recipient_id VARCHAR(32) DEFAULT NULL

);


DROP TABLE IF EXISTS Message_read;
CREATE TABLE Message_read (
id INT UNSIGNED NOT NULL PRIMARY KEY, 
message_id VARCHAR(32) DEFAULT NULL, 
reader_id VARCHAR DEFAULT NULL,
date VARCHAR(20) DEFAULT NULL
);



INSERT INTO User (firstname, lastname, password, username) VALUES ("Trudy-Ann", "Barrett", "fingers", "Rudii");
INSERT INTO User (firstname, lastname, password, username) VALUES ("Davian", "Litchmore", "davey1", "Dave");
INSERT INTO User (firstname, lastname, password, username) VALUES ("Dekel", "Hamilton", "KelHam123", "Dekz");


