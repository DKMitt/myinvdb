CREATE DATABASE myinvdb;
USE myinvdb;
CREATE TABLE items (
id INTEGER (11) AUTO_INCREMENT NOT NULL,
partid VARCHAR (255),
item VARCHAR (100) NOT NULL,
description VARCHAR (255),
manufacturer VARCHAR (50),
price decimal(11,2),
qty INTEGER (4),
prod_img VARCHAR (100),
prod_url VARCHAR (255),
PRIMARY KEY (id)
);
