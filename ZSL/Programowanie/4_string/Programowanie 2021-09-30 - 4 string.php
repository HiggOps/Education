<?php
    $text = <<< L
    ZSŁ - Zespół
    Szkół
    Łączności<br>
L;

echo $text."<br>";
echo nl2br($text);

echo"<hr>";
$name="jaNuSZ";
//zamiana wszystkich liter na małe - strtolower
$name=strtolower($name);
echo $name."<br>"; //janusz
//zamiana wszystkich liter na duże - strtoupper
echo strtoupper($name)."<br>"; //JANUSZ

$nameSurname = "JanuSz kowAlSKi";
//zamiana pierwszej litery na dużą - ucfirst
echo ucfirst($nameSurname)."<br>"; //JanuSz kowAlSKi
//zamiana każdej pierwszej litery w słowie na dużą - ucwords
echo ucwords($nameSurname)."<br>"; //Janusz KowAlSKi

//zamiana wszystkich liter na małe a pierwszej na duże - ucword(strlower($zmienna))
$name="jAnuSz ";
echo "$name<br>";
echo ucwords(strtolower($name)); //Janusz Kowalski
echo "<hr>";
//Lorem ipsum
$lorem="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus necessitatibus debitis nisi ullam sequi id provident molestiae odit voluptates laborum. Ipsam accusamus debitis sapiente eum animi! Accusamus, facilis debitis. Iste?";
echo $lorem."<br>";
$col=wordwrap($lorem, 30, "<br>"); // co trzydzieści znaków następna linijka
echo $col."<br>";
$col=wordwrap($lorem, 30, "TEXT"); // co trzydzieści znaków dodaje "TEXT"

//wyczyszczenie bufora
ob_clean();

//usuwanie białych znaków - trim
$name="Janusz";
$name1="    Janusz ";
echo "Długość \$name: ".strlen($name)."<br>";//6
echo "Długość \$name1: ".strlen($name1)."<br>";//11
echo strlen(ltrim($name1))."<br>";//7
echo strlen(rtrim($name1))."<br>";//10
echo strlen(trim($name1))."<br>";//6
echo "<hr>";

//przeszukiwanie ciągu znaków - strstr stristr
$mail="janusz@gmail.com";
echo strstr($mail, "@")."<br>"; // @gmail.com
//echo strtr($mail, "G")."<br>"; // nic nie wyświetli
echo stristr($mail, "G")."<br>"; //gmail.com

// wycinanie z ciągu znaków - substr
echo substr($mail, 2)."<br>"; //nusz@gmail.com
echo substr($mail, 6)."<br>"; //@gmail.com
echo substr($mail, -3)."<br>"; //.com
echo substr($mail, -2, 1)."<br>"; //o
echo "<hr>";

//zadanie
$personality="Janusz Kowalski";
echo stristr($personality, " ");
/*
do zmiennej name przypisać imię, do zmiennej surname przypisać nazwisko
*/
$name = substr($personality, 0, 6);
$surname = substr($personality, 7);
echo "$name $surname";
$name = substr(stristr($personality, " "), 0);//idk zero to not count error
?>