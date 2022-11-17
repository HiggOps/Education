CREATE DATABASE `Konta Bankowe`;
USE `Konta Bankowe`;

CREATE TABLE `osoba` (
    `id_osoby` INT PRIMARY KEY,
    `imie` VARCHAR(40) NOT NULL,
    `nazwisko` VARCHAR(40) NOT NULL
);

LOAD DATA INFILE 'C:/Baza Danych/osoby.txt'
INTO TABLE `osoba`
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\r\n'
IGNORE 1 lines;

CREATE TABLE `konta` (
    `id_konta` INT PRIMARY KEY,
    `id_osoby` INT,
    `Bank` VARCHAR(40) NOT NULL,
    `nr_konta` CHAR(26) NOT NULL,
    `dostepne srodki` FLOAT,
    FOREIGN KEY (`id_osoby`) REFERENCES `osoba` (`id_osoby`)
);

LOAD DATA INFILE 'C:/Baza Danych/konta.txt'
INTO TABLE `konta`
FIELDS TERMINATED BY ';'
LINES TERMINATED BY '\r\n'
IGNORE 1 lines;
