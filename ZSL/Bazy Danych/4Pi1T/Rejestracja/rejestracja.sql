CREATE DATABASE `rejestracja`;
USE `rejestracja`;

CREATE TABLE `kandydaci` (
    idosoby CHAR(4) PRIMARY KEY,
    imie VARCHAR(40) NOT NULL,
    nazwisko VARCHAR(40) NOT NULL,
    matematyka INT UNSIGNED,
    informatyka INT UNSIGNED,
    fizyka INT UNSIGNED,
    jezykobcy INT UNSIGNED,
    plec enum('k','m')
);

LOAD DATA INFILE 'C:/Bazy/Rejestracja/Dane/kandydaci.txt'
INTO TABLE `kandydaci`
FIELDS TERMINATED BY ' '
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;

CREATE TABLE `zgloszenia` (
    kierunek VARCHAR(40),
    idosoby CHAR(4),
    FOREIGN KEY (`idosoby`) REFERENCES `kandydaci` (`idosoby`)
);

LOAD DATA INFILE 'C:/Bazy/Rejestracja/Dane/zgloszenia.txt'
INTO TABLE `zgloszenia`
FIELDS TERMINATED BY ' '
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;
