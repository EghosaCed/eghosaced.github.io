CREATE TABLE users(
id INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
name VARCHAR(15) NOT NULL,
email VARCHAR(50) NOT NULL, 
password VARCHAR(15) NOT NULL,
affiliateid VARCHAR(15) NOT null,
numofaffiliate INT(3) NOT null,
donetask INT(1) NOT NULL
);
//