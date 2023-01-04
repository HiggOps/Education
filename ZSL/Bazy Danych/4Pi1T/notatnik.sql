--1

SELECT `n`.`imie`
FROM `noworodki` AS `n`
WHERE `n`.`imie` LIKE '%A';

--2

SELECT `n`.`imie`
FROM `noworodki` AS `n`
WHERE `n`.`imie` IN ('Ania','Jan');

--3

SELECT `n`.`imie`, `n`.`wzrost`
FROM `noworodki` AS `n`
WHERE `n`.`wzrost` BETWEEN 50 AND 62
ORDER BY `n`.`imie` DESC;

--4

SELECT `n`.`imie`
FROM `noworodki` AS `n`
GROUP BY `n`.`imie`;

--5

SELECT `n`.`imie`
FROM `noworodki` AS `n`
WHERE LENGTH(`n`.`imie`)=4 
GROUP BY `n`.`imie`;

--6

SELECT `n`.`imie`
FROM `noworodki` AS `n`
WHERE `n`.`imie` LIKE '_D%';

--7

SELECT UPPER(`n`.`imie`) AS `imię`, UPPER(`n`.`plec`) AS `płeć`
FROM `noworodki` AS `n`
ORDER BY `n`.`imie` ASC, `n`.`plec` DESC;

--8

SELECT `n`.`imie`, LEFT(`n`.`imie`, 1) AS `litera`
FROM `noworodki` AS `n`
GROUP BY `n`.`imie`;

--9

SELECT CONCAT(`n`.`imie`,' ', `n`.`waga`) AS `Dane osobowe`
FROM `noworodki` AS `n`;

--10

SELECT `n`.`imie`, LENGTH(`n`.`imie`) AS `długość`
FROM `noworodki` AS `n`
ORDER BY `długość` ASC;

--11

SELECT MID(`n`.`imie`, 3, 2) 
FROM `noworodki` AS `n`;

--13

SELECT `n`.`imie`, REPLACE(REPLACE(`n`.`imie`, 'A', 'O'), 'a', 'o') AS `litera` 
FROM `noworodki` AS `n` 
GROUP BY `n`.`imie`;