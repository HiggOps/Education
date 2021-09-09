<!DOCTYPE html>
<html>
<body>

<?php
// Your code here!
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
?>
</body>
</html>
