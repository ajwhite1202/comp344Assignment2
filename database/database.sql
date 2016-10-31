// database 
CREATE TABLE Shopper (
sh_id INT NOT NULL PRIMARY KEY,
sh_username VARCHAR(30) NOT NULL,
sh_password CHAR(60) NOT NULL,
sh_email VARCHAR(64) NOT NULL,
sh_phone VARCHAR(45) NOT NULL,
sh_type CHAR(1) NOT NULL,
sh_group INT NOT NULL,
sh_field1 VARCHAR(128) NOT NULL,
sh_field2 VARCHAR(128) NOT NULL,
);

CREATE TABLE Shaddr (
shaddr_id INT NOT NULL PRIMARY KEY,
sh_id INT NOT NULL FOREIGN KEY,
sh_title CHAR(8) NOT NULL,
sh_firstname VARCHAR(20) NOT NULL,
sh_familyname VARCHAR(30) NOT NULL,
sh_street1 VARCHAR(64) NOT NULL,
sh_street2 VARCHAR(64) NOT NULL,
sh_city VARCHAR(32) NOT NULL,
sh_state VARCHAR(8) NOT NULL,
sh_postcode VARCHAR(10) NOT NULL,
sh_country VARCHAR(32) NOT NULL,
);

CREATE TABLE CreditCard (
sh_id INT NOT NULL FOREIGN KEY,
card_no INT NOT NULL,
expiry_month INT NOT NULL,
expiry_year INT NOT NULL,
);

CREATE TABLE Shaddr (
secret_q_id INT NOT NULL PRIMARY KEY,
sh_id INT NOT NULL FOREIGN KEY,
question VARCHAR(128) NOT NULL,
answer VARCHAR(128) NOT NULL,
);