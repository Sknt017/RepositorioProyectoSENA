CREATE DATABASE IF NOT EXISTS onfeet;
USE onfeet;
CREATE TABLE IF NOT EXISTS productos (
    IdPro int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NomPro varchar(50) NOT NULL,
    MarPro varchar(50) NULL,
    TiPro varchar(50) NULL,
    PriPro int NOT NULL,
    Img varchar(255) NULL
);
INSERT INTO productos(NomPro, MarPro, TiPro, PriPro, Img)VALUES('SHOE2', 'var_marshoe', 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500');
INSERT INTO productos(NomPro, MarPro, TiPro, PriPro, Img)VALUES('SHOE2', 'marshoe', 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500');

CREATE TABLE IF NOT EXISTS Usuarios (
    IdUsu int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Rol  varchar(50) NOT NULL,
    Fname varchar(50) NOT NULL,
    Lname varchar(50) NOT NULL,
    Email varchar(50) NOT NULL,
    Pass varchar(50) NOT NULL    
);
CREATE TABLE IF NOT EXISTS orders (
    IdPed int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IdUsu int NOT NULL,
    IdPro int NOT NULL,
    DateOr datetime NOT NULL,
    DirOr varchar(100) NOT NULL
);
--UPDATE `orders` SET `status` = '1' WHERE `orders`.`IdPed` = 1;
-- INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES ('User', 'Demo', 'Example@Server.com', 123456);
-- INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES (MOS, Demo, example@hotmail.com, 1234567);
--)
--ALTER TABLE `usuarios` DROP `Rol`;
--UPDATE `orders` SET `status` = '1' WHERE `orders`.`IdPed` = 1;
-- INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES ('User', 'Demo', 'Example@Server.com', 123456);
-- INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES (MOS, Demo, example@hotmail.com, 1234567);
--ALTER TABLE `usuarios` CHANGE `rol` `Rol` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;
CREATE TABLE IF NOT EXISTS Roles (
	Id int not null AUTO_INCREMENT PRIMARY KEY,
    NomRol varchar(50) not null,
    Descri varchar(120) not null
);
CREATE TABLE IF NOT EXISTS Marcas (
    id int not null AUTO_INCREMENT primary key,
    nombre varchar(20) not null
);
insert into marcas(nombre) VALUES ('adidas');
insert into marcas(nombre) VALUES ('nike');
insert into marcas(nombre) values ('marshoe');
ALTER TABLE `productos` DROP `MarPro`;
ALTER TABLE `productos` ADD `id_mar` INT NULL AFTER `NomPro`;
ALTER TABLE `productos` ADD FOREIGN KEY (`id_mar`) REFERENCES `marcas`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
UPDATE `productos` SET `id_mar` = '4' WHERE `productos`.`IdPro` = 1;
SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id && productos.id = 1;  
SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id;  
ALTER TABLE `orders` ADD FOREIGN KEY (`IdPro`) REFERENCES `productos`(`IdPro`) ON DELETE RESTRICT ON UPDATE CASCADE;
INSERT INTO orders(IdUsu,IdPro,DateOr,DirOr) VALUES (8,3,now(),'');
SELECT *,ord.Status statusOr FROM orders ord inner join productos pro inner join marcas mar on ord.IdPro=pro.IdPro && pro.id_mar=mar.id where ord.status = 1;
--ALTER TABLE `usuarios` ADD `id_Rol` INT NULL AFTER `IdUsu`;
create table if not EXISTS cart (
	id int not null AUTO_INCREMENT PRIMARY key,
    idPro int not null,
    idUsu int not null,
    datec datetime null,
    Status int null
);
ALTER TABLE `orders` ADD FOREIGN KEY (`IdPro`) REFERENCES `productos`(`IdPro`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `orders` ADD FOREIGN KEY (`IdUsu`) REFERENCES `usuarios`(`IdUsu`) ON DELETE RESTRICT ON UPDATE CASCADE;
CREATE USER 'root'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'root'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
REVOKE ALL PRIVILEGES ON *.* FROM 'root'@'%'; GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;