CREATE DATABASE IF NOT EXISTS onfeet;
USE onfeet;
CREATE TABLE productos (
    IdPro int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NomPro varchar(50) NOT NULL,
    MarPro varchar(50) NULL,
    TiPro varchar(50) NULL,
    PriPro int NOT NULL,
    Img varchar(255) NULL
);
INSERT INTO productos(NomPro, MarPro, TiPro, PriPro, Img)VALUES('SHOE2', 'var_marshoe', 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500');
INSERT INTO productos(NomPro, MarPro, TiPro, PriPro, Img)VALUES('SHOE2', 'marshoe', 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500');


CREATE TABLE Usuarios (
    IdUsu int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Fname varchar(50) NOT NULL,
    Lname varchar(50) NOT NULL,
    Email varchar(50) NOT NULL,
    Pass varchar(50) NOT NULL    
);

CREATE TABLE orders (
    IdPed int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IdUsu int NOT NULL,
    IdPro int NOT NULL,
    DateOr datetime NOT NULL,
    DirOr varchar(100) NOT NULL
);
UPDATE `orders` SET `status` = '1' WHERE `orders`.`IdPed` = 1;
ALTER TABLE `usuarios` CHANGE `Pass` `Pass` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES ('User', 'Demo', 'Example@Server.com', 123456);
INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES (MOS, Demo, example@hotmail.com, 1234567);
