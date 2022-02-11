DROP DATABASE loginRegisterSystem;
CREATE DATABASE loginRegisterSystem;
USE loginRegisterSystem;

DROP TABLE users;
CREATE TABLE users(
    idUser INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(60),
    email VARCHAR(45),
    userName VARCHAR(45),
    password VARCHAR(150)
);

SELECT * FROM users;