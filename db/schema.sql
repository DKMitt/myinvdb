CREATE DATABASE myinvdb;
USE myinvdb;
CREATE TABLE items (
id INTEGER (11) AUTO_INCREMENT NOT NULL,
partid VARCHAR (255),
item VARCHAR (100) NOT NULL,
description VARCHAR (255),
manufacturer VARCHAR (50),
price INTEGER (11),
qty INTEGER (4),
stockstatus BOOLEAN DEFAULT true,
PRIMARY KEY (id)
);
