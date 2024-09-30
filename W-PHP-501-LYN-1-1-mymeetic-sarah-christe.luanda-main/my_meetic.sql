DROP DATABASE IF EXISTS my_meetic;
CREATE DATABASE my_meetic;

USE my_meetic;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS city;
DROP TABLE IF EXISTS hobbies;
DROP TABLE IF EXISTS genres;
DROP TABLE IF EXISTS users_hobbies;

CREATE TABLE city (
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

INSERT INTO city 
        (name)
    
    VALUES 
    ('Paris'), 
    ('Marseille'), 
    ('Lyon'), 
    ('Toulouse'), 
    ('Nice'), 
    ('Nantes'), 
    ('Montpellier'), 
    ('Strasbourg'),
    ('Bordeaux'),
    ('Lille'),
    ('Rennes'),
    ('Reims'),
    ('Saint-Étienne'),
    ('Le Havre'),
    ('Toulon'),
    ('Grenoble'),
    ('Dijon'),
    ('Angers'),
    ('Nîmes'),
    ('Villeurbanne')
    ;

CREATE TABLE genres  (
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

INSERT INTO genres 
        (name)
    
    VALUES 
    ('Homme'), 
    ('Femme'), 
    ('Autre')
    ;

CREATE TABLE users (
    id              INT             NOT NULL AUTO_INCREMENT,
    email           VARCHAR(255)    NOT NULL UNIQUE,
    mdp             VARCHAR(255)    NOT NULL,
    firstname       VARCHAR(255)    NOT NULL,
    lastname        VARCHAR(255)    NOT NULL,
    birthdate       DATE            NOT NULL,
    city_id         INT             NOT NULL,
    genres_id       INT             NOT NULL,
    FOREIGN KEY (city_id) REFERENCES city (id),
    FOREIGN KEY (genres_id) REFERENCES genres(id),
    PRIMARY KEY(id)
);

INSERT INTO users 
        (email, mdp, firstname, lastname, birthdate, city_id, genres_id )
    
    VALUES ('rafadhia.alheur@locomotive.fr', 'raf123', 'Rafadhia', 'alheur', '1979-08-15', 11, 2 ), 
           ('alya.teceaile@locomotive.com', 'aly123', 'Alya', 'Técéaile', '1999-12-08', 16, 2 ),  
           ('chaima.viellesse@locomotive.com', 'chai123', 'Chaima', 'Viellesse', '1967-07-29', 18, 2),  
           ('hadjer.tebette@locomotive.fr', 'had123', 'Hadjer', 'Tébette', '200-01-14', 2, 2)
           ;

CREATE TABLE hobbies (
    id              INT             NOT NULL AUTO_INCREMENT,
    name            VARCHAR(255)    NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

INSERT INTO hobbies 
        (name)
    
    VALUES 
    ('Sport'), 
    ('Jeux-video'), 
    ('Voyage'),
    ('Lecture'),
    ('Shopping'),
    ('Informatique')
    ;

CREATE TABLE users_hobbies  (
     id_users           INT             NOT NULL,
     id_hobbies         INT             NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users(id),
    FOREIGN KEY (id_hobbies) REFERENCES hobbies(id)
);

INSERT INTO users_hobbies 
        (id_users, id_hobbies)
    
    VALUES 
    (1, 1), 
    (1, 2), 
    (2, 1), 
    (2, 3), 
    (2, 6), 
    (3, 1), 
    (3, 5), 
    (4, 3), 
    (4, 5), 
    (4, 6)    
    ;

