<!DOCTYPE html>
<html>
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
    
    echo "<hr";
    //porównywanie i identyczność
    
    $x = 1;
    $y = 1.0;
    
    if ($x === $y) {
    	echo "Równe";
    } else {
    	echo "Różne";
    };
?>
</body>
</html>
