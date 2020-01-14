CREATE DATABASE myinvdb;
USE myinvdb;
CREATE TABLE products (
id INTEGER (11) AUTO_INCREMENT NOT NULL,
prod_id VARCHAR (255),
prod_name VARCHAR (100) NOT NULL,
prod_desc VARCHAR (255),
mfr VARCHAR (50),
price decimal(11,2),
qty INTEGER (4),
prod_img VARCHAR (100),
prod_url VARCHAR (255),
PRIMARY KEY (id)
);
