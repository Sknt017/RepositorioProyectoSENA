CREATE TABLE productos (
    IdPro int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NomPro varchar(50) NOT NULL,
    MarPro varchar(50) NULL,
    TiPro varchar(50) NULL,
    PriPro int NOT NULL,
    Img varchar(255) NULL
);
INSERT INTO productos(NomPro, MarPro, TiPro, PriPro, Img)VALUES('SHOE2', 'var_marshoe', 'sneaker', 990000, 'https://stockx.imgix.net/Balenciaga-Triple-S-Neon-Green-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&auto=format,compress&q=90&trim=color&updated_at=1555966108&w=500');


CREATE TABLE Usuarios (
    IdUsu int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Fname varchar NOT NULL,
    Lname varchar NOT NULL,
    Email varchar NOT NULL,
    Pass varchar NOT NULL    
);
INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES (User, Demo, Example@Server.com, 123456);
INSERT INTO Usuarios(Fname, Lname, Email, Pass) VALUES (MOS, Demo, example@hotmail.com, 1234567);