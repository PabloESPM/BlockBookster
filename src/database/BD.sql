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
                     type ENUM('ADMIN','WORKER','REGULAR')
);

ALTER TABLE user ADD CONSTRAINT pk_user PRIMARY KEY (id);
ALTER TABLE user ADD CONSTRAINT uk_user_username UNIQUE (username);
ALTER TABLE user ADD CONSTRAINT uk_user_email UNIQUE (email);

-- Tabla de libros
DROP TABLE IF EXISTS book;

CREATE TABLE book(
                     id VARCHAR(60),
                     title VARCHAR(255),
                     author VARCHAR(255),
                     isbn VARCHAR(17),
                     publicationDate YEAR,
                     numberOfPage INT,
                     price DECIMAL(10,2),
                     genre ENUM('ficcion','no_ficcion','misterio','thriller','romance','fantasia','ciencia_ficcion','terror','biografia','historia','poesia','ensayo','infantil','juvenil','autoayuda'),
                     publisher VARCHAR(255),
                     language ENUM('es','in','fr','al','it','pt','ca','otros'),
                     description TEXT,
                     cover VARCHAR(255)
);

ALTER TABLE book ADD CONSTRAINT pk_book PRIMARY KEY (id);
ALTER TABLE book ADD CONSTRAINT uk_book_isbn UNIQUE (isbn);
ALTER TABLE book ADD CONSTRAINT chk_precio CHECK (price >= 0);
ALTER TABLE book ADD CONSTRAINT chk_numberOfPage CHECK (numberOfPage > 0);
ALTER TABLE book ADD CONSTRAINT chk_publicationDate CHECK (publicationDate BETWEEN 1000 AND 2155);

-- Lista Usuarios
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('0a45fe47-06f0-4fb9-a07d-c58577f68d0f', 'miguel', '$2y$10$0.HONWaiVCsgnDDfE/yyIepB7vztofQPI/Ty1jI1i06KZquMRPmd2', 'miguel@miguel.com', '444444444', 'us', '2025-11-21', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('0c67c4f0-b5fa-4456-83ac-94c7b5eb01e5', 'Maria', '$2y$10$PIKpZXuCEW3AhpPoOSy1WOjPrPYcYGAAgFQyzS0zo90UHjBL5SliS', 'maria@maria.com', '111111111', 'de', '2025-11-14', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('2bbf6e2b-336b-48b4-a571-d18fc638dbc6', 'Pablo', '$2y$10$3jqmVTTbrfJBiLOxVfbG9.sSNB3vYh1wV0/lNM4hkqChcvejpUnPe', 'pablo@pablo.com', '555555555', 'sp', '2025-11-07', 'ADMIN');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('5f5a3f36-3ad8-4b2c-b959-7841017f433c', 'Juan', '$2y$10$d/k/PfRclp.Cz6vpOkRH7emw2IJQrTzFBw4uHuZwv.C7fQqrvIhUW', 'juan@juan.com', '222222222', 'fr', '2025-10-15', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('87c65d54-c035-43ce-9b63-62928bdd57dd', 'Paco', '$2y$10$NW5gZVUem273W1kKfiIZNeJnZxLlQFPDVjwMJMB8uFy1q7l98Useq', 'paco@paco.com', '888888888', 'uk', '2025-11-03', 'REGULAR');
INSERT INTO blockbookster1.user (id, username, password, email, telephone, country, birthdate, type) VALUES ('c2f95506-e59c-4679-8281-bb053dd905a4', 'pepe', '$2y$10$LUMalOt6Z3x7ErdBIEhX..6T20j6em5pYOkWs06NsR8wbzdY9vN/q', 'pepe@pepe.com', '777777777', 'other', '2025-11-12', 'REGULAR');


-- Lista libros
INSERT INTO book (id, titulo, autor, isbn, ano_publicacion, num_paginas, precio, genero, editorial, idioma, descripcion, portada) VALUES
                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000001', 'La Sombra del Viento', 'Carlos Ruiz Zafón', '9788408172419', '2001', 576, 19.95, 'ficcion', 'Planeta', 'es', 'Una novela ambientada en la Barcelona de posguerra llena de misterio y pasión por los libros.', 'portadas/sombra_viento.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000002', 'El Marciano', 'Andy Weir', '9781785031137', '2014', 384, 17.50, 'ciencia_ficcion', 'Crown Publishing', 'es', 'Un astronauta queda atrapado en Marte y debe usar su ingenio para sobrevivir.', 'portadas/el_marciano.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000003', 'El Nombre del Viento', 'Patrick Rothfuss', '9788401352832', '2007', 880, 24.90, 'fantasia', 'Plaza & Janés', 'es', 'La historia de Kvothe, un joven prodigio que se convierte en una leyenda.', 'portadas/nombre_viento.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000004', '1984', 'George Orwell', '9780451524935', '1949', 328, 12.99, 'ficcion', 'Secker & Warburg', 'es', 'Una distopía clásica sobre un régimen totalitario que controla todos los aspectos de la vida.', 'portadas/1984.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000005', 'El Código Da Vinci', 'Dan Brown', '9780307474278', '2003', 489, 15.99, 'thriller', 'Doubleday', 'es', 'Un profesor de simbología se ve envuelto en una conspiración religiosa internacional.', 'portadas/codigo_davinci.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000006', 'Cien Años de Soledad', 'Gabriel García Márquez', '9780307474728', '1967', 417, 18.50, 'ficcion', 'Sudamericana', 'es', 'La épica historia de la familia Buendía en el mítico pueblo de Macondo.', 'portadas/cien_anos_soledad.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000007', 'It', 'Stephen King', '9781501142970', '1986', 1138, 22.99, 'terror', 'Viking Press', 'es', 'Un mal ancestral aterroriza a un grupo de niños en el pueblo de Derry.', 'portadas/it.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000008', 'Sapiens: De Animales a Dioses', 'Yuval Noah Harari', '9788499926223', '2011', 512, 21.00, 'ensayo', 'Harper', 'es', 'Un recorrido por la historia y evolución del ser humano desde sus orígenes.', 'portadas/sapiens.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000009', 'El Diario de Ana Frank', 'Ana Frank', '9780553296983', '1947', 283, 10.50, 'biografia', 'Contact Publishing', 'es', 'El conmovedor diario de una niña judía escondida durante la ocupación nazi.', 'portadas/ana_frank.jpg'),

                                                                                                                                      ('b1a23f80-1111-4c21-a100-000000000010', 'Harry Potter y la Piedra Filosofal', 'J.K. Rowling', '9788478884452', '1997', 320, 14.99, 'fantasia', 'Salamandra', 'es', 'El inicio de la saga del joven mago Harry Potter en Hogwarts.', 'portadas/harry_potter1.jpg');



