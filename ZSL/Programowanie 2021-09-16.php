<!DOCTYPE html>
<html lang="pl" dir="ltr">
<body>

<?php
// pierwsza lekcja
echo 'zsł <br>';
$name = "Janusz";
echo "Imie: $name";
$x='Tomasz';
$y='Nowak';
echo "<br>$x.$y";

//typy danych
$calkowita=4; //całkowita

$bin=0b11; //binarny
$oct=011; //ósemkowy
$hex=0x11; //hexadecymalny

//zmiennoprzecinkowe
$z=100.7;

//logiczne
$prawda=true;
$falsz=false;

//sprawdzanie wartosci
echo "<hr>".gettype($prawda); //bolean
echo "<br>".gettype($hex); //integer
echo "<br>".gettype($z); //double

//składnia heredoc
$name="Krystyna";
echo <<< ETYKIETA
<hr>Imię: $name <br>
ZSŁ <br>
ETYKIETA;

$text = <<< ETYKIETA
<hr>Anna Nowak<br>
ZSŁ <br>
ETYKIETA;

echo $text;

//składnia nowdoc - nie interpratuje zmiennych
$name="Krystyna";
echo <<< 'ETYKIETA'
<hr>Imię: $name <br>
ZSŁ <br>
ETYKIETA;

$name="Łukasz";
echo "Imię: $name, Nazwisko: Więckowski <br>";
echo "Imię: \$name, Nazwisko: Więckowski <br>";

	//druga lekcja
    //wersja PHP 7.1.1
    echo PHP_VERSION;
    
    echo "<hr>";
    //potęgowanie
    $pow = 2**10;
    echo $pow;

	echo "<hr>";
    /*porównywanie, jeśli:
    liczba x jest większa od y wynik = 1
	liczba x je równa liczbie y wynik = 0
    liczba x jest mniejsza od y wynik = -1
    */
    $x=10;
    $y=3;
    echo $x<=>$y;
    
    echo "<hr>";
    //porównywanie i identyczność
    
    $x = 1;
    $y = 1.0;
    
    if ($x === $y) {
    	echo "Równe";
    } else {
    	echo "Różne";
    };

    echo "<hr>";
    /*
        postinkrementacja $x++;
        preinkrementacja ++$x;
        postdekrementacja $x--;
        predekrementacja --$x;
    */

    $x=10;
    $x++;
    echo $x."<br>"; //11
    $x=$x++;
    echo $x."<br>"; //11
    $y=$x++;
    echo $x."<br>"; //12
    echo $y."<br>"; //11

    echo "<hr>";

    //zadanie
    $x=1;
    echo $x."<br>"; //1
    $x=$x++;
    echo $x."<br>"; //1
    $x=++$x;
    echo $x."<br>"; //2
    $y=++$x;
    echo $x."<br>"; //3
    echo $y."<br>"; //3
    $y=$x++;
    echo $x."<br>"; //4
    echo $y."<br>"; //3

    $test=10;
    echo $test."<br>";
    $test=$test++;
    echo $test."<br>";
    $test2=$test;
    echo $test."<br>";
    echo $test2."<br>";
    


?>
</body>
</html>