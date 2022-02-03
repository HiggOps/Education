--A)
CREATE DATABASE Pilkarze;
USE Pilkarze;

--B)
CREATE TABLE rozgrywka (
    id INT AUTO_INCREMENT,
    zespol1 VARCHAR(3),
    zespol2 VARCHAR(3),
    wynik VARCHAR(20),
    data_rozgrywki DATE,
    PRIMARY KEY(id)
);
CREATE TABLE liga (
    id INT AUTO_INCREMENT,
    zespol VARCHAR(3),
    punkty INT,
    grupa CHAR,
    PRIMARY KEY (id)
);
CREATE TABLE zawodnik (
    id INT AUTO_INCREMENT,
    pozycja_id INT,
    imie VARCHAR(20),
    nazwisko VARCHAR(20),
    PRIMARY KEY(id)
);
CREATE TABLE pozycja (
    id INT AUTO_INCREMENT,
    nazwa TEXT,
    PRIMARY KEY(id)
);

--C)
ALTER TABLE zawodnik
ADD FOREIGN KEY(pozycja_id) REFERENCES pozycja(id);

--D)
INSERT INTO pozycja (id, nazwa)
VALUES (1, 'bramkarz');
INSERT INTO pozycja (id, nazwa)
VALUES (2, 'obronca');
INSERT INTO pozycja (id, nazwa)
VALUES (3, 'pomocnik');
INSERT INTO pozycja (id, nazwa)
VALUES (4, 'napastnik');