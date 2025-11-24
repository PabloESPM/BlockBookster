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
                     ano_publicacion YEAR NOT NULL,
                     num_paginas INT NOT NULL,
                     precio DECIMAL(10,2) NOT NULL,
                     genero ENUM('ficcion','no_ficcion','misterio','thriller','romance','fantasia','ciencia_ficcion','terror','biografia','historia','poesia','ensayo','infantil','juvenil','autoayuda') NOT NULL,
                     editorial VARCHAR(255),
                     idioma ENUM('es','en','fr','de','it','pt','ca','otros') NOT NULL,
                     descripcion TEXT NOT NULL,
                     portada VARCHAR(255),
                     destacado BOOLEAN DEFAULT FALSE,
                     activo BOOLEAN DEFAULT TRUE,
                     fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                     fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE book ADD CONSTRAINT pk_book PRIMARY KEY (id);
ALTER TABLE book ADD CONSTRAINT uk_book_isbn UNIQUE (isbn);
ALTER TABLE book ADD CONSTRAINT chk_precio CHECK (precio >= 0);
ALTER TABLE book ADD CONSTRAINT chk_num_paginas CHECK (num_paginas > 0);
ALTER TABLE book ADD CONSTRAINT chk_ano_publicacion CHECK (ano_publicacion >= 1000 AND ano_publicacion <= 2025);
