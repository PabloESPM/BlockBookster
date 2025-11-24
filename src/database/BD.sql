-- BASE DE DATOS BLOCKBOOKSTER
-- Tabla de usuarios
DROP TABLE IF EXISTS user;

CREATE TABLE user(
                     id VARCHAR(60),
                     username VARCHAR(30),
                     password VARCHAR(255),
                     email VARCHAR(255),
                     telephone VARCHAR(11),
                     country ENUM('sp','us','uk','ca','au','de','fr','jp','other'),
                     birthdate DATE,
                     type ENUM('ADMIN','EDITOR','REGULAR')
);

ALTER TABLE user ADD CONSTRAINT pk_user PRIMARY KEY (id);
ALTER TABLE user ADD CONSTRAINT uk_user_username UNIQUE (username);
ALTER TABLE user ADD CONSTRAINT uk_user_email UNIQUE (email);

-- Tabla de libros
DROP TABLE IF EXISTS book;

CREATE TABLE book(
                     id VARCHAR(60),
                     titulo VARCHAR(255) NOT NULL,
                     autor VARCHAR(255) NOT NULL,
                     isbn VARCHAR(17) NOT NULL,
                     ano_publicacion DATE NOT NULL,
                     num_paginas INT NOT NULL,
                     precio DECIMAL(10,2) NOT NULL,
                     genero ENUM('ficcion','no_ficcion','misterio','thriller','romance','fantasia','ciencia_ficcion','terror','biografia','historia','poesia','ensayo','infantil','juvenil','autoayuda') NOT NULL,
                     editorial VARCHAR(255),
                     idioma ENUM('es','en','fr','de','it','pt','ca','otros') NOT NULL,
                     descripcion TEXT NOT NULL,
                     portada VARCHAR(255)
);

ALTER TABLE book ADD CONSTRAINT pk_book PRIMARY KEY (id);
ALTER TABLE book ADD CONSTRAINT uk_book_isbn UNIQUE (isbn);
ALTER TABLE book ADD CONSTRAINT chk_precio CHECK (precio >= 0);
ALTER TABLE book ADD CONSTRAINT chk_num_paginas CHECK (num_paginas > 0);
ALTER TABLE book ADD CONSTRAINT chk_ano_publicacion CHECK (ano_publicacion >= 1000 AND ano_publicacion <= 2025);

-- Lista Usuarios
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('0a45fe47-06f0-4fb9-a07d-c58577f68d0f', 'miguel', '$2y$10$0.HONWaiVCsgnDDfE/yyIepB7vztofQPI/Ty1jI1i06KZquMRPmd2', 'miguel@miguel.com', '444444444', 'us', '2025-11-21', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('0c67c4f0-b5fa-4456-83ac-94c7b5eb01e5', 'Maria', '$2y$10$PIKpZXuCEW3AhpPoOSy1WOjPrPYcYGAAgFQyzS0zo90UHjBL5SliS', 'maria@maria.com', '111111111', 'de', '2025-11-14', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('2bbf6e2b-336b-48b4-a571-d18fc638dbc6', 'Pablo', '$2y$10$3jqmVTTbrfJBiLOxVfbG9.sSNB3vYh1wV0/lNM4hkqChcvejpUnPe', 'pablo@pablo.com', '555555555', 'sp', '2025-11-07', 'ADMIN');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('5f5a3f36-3ad8-4b2c-b959-7841017f433c', 'Juan', '$2y$10$d/k/PfRclp.Cz6vpOkRH7emw2IJQrTzFBw4uHuZwv.C7fQqrvIhUW', 'juan@juan.com', '222222222', 'fr', '2025-10-15', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('87c65d54-c035-43ce-9b63-62928bdd57dd', 'Paco', '$2y$10$NW5gZVUem273W1kKfiIZNeJnZxLlQFPDVjwMJMB8uFy1q7l98Useq', 'paco@paco.com', '888888888', 'uk', '2025-11-03', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('c2f95506-e59c-4679-8281-bb053dd905a4', 'pepe', '$2y$10$LUMalOt6Z3x7ErdBIEhX..6T20j6em5pYOkWs06NsR8wbzdY9vN/q', 'pepe@pepe.com', '777777777', 'other', '2025-11-12', 'REGULAR');

