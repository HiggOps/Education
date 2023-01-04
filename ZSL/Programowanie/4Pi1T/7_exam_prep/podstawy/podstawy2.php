<?php

#   Sprawdzający czy wprowadzona liczba jest parzysta. Na ekran wypisuje stosowny komunikat.
function isEven($num){
    if($num % 2 == 0)
        echo "Even<br>"; 
    else
        echo "Odd<br>";
}
isEven(1);
isEven(2);
echo "<br>";

#   Wczytujący dwie liczby. Sprawdza czy pierwsza jest podzielna przez drugą. Na ekran wypisuje stosowny komunikat.
function isDivisible($num1, $num2){
    if ($num1 % $num2 == 0)
        echo "$num1 jest podzielne przez $num2 <br>";
    else
        echo "$num1 nie jest podzielne przez $num2 <br>";
}
isDivisible(10,2);
isDivisible(5,2);
echo "<br>";

#   Sprawdzający czy wprowadzona liczba jest dodatnia, ujemna czy równa 0. Na ekran wypisuje stosowny komunikat.
function checkSign($num){
    if ($num > 0) 
        echo "$num jest liczbą dodatnią<br>";
    elseif ($num < 0) 
        echo "$num jest liczbą ujemną<br>";
    else 
        echo "$num jest równa 0<br>";
}
checkSign(1);
checkSign(-1);
checkSign(0);
echo "<br>";

#   Wypisujący na ekran największą spośród trzech wprowadzonych liczb.
function findMax($num1, $num2, $num3){
    $array = array($num1, $num2, $num3);
    echo max($array)." to największa liczba<br>";
}
findMax(1,2,3);
echo "<br>";

#   Sprawdzający na podstawie daty urodzenia i dzisiejszej daty czy osoba jest pełnoletnia.
function isAdult($date){
    $birthday = strtotime($date);
    $now = time();
    if($now - $birthday >= 568025136)
        echo "Pełnoletnia<br>";
    else
        echo "Niepełnoletnia<br>";
}
isAdult("04-04-2004");
isAdult("20-04-2022");
echo "<br>";

#   Sprawdzający czy dany znak jest dużą literą, małą literą, cyfrą, czy innym znakiem.
function typeSign($sign){
        if(preg_match('/[A-Z]/',$sign))
            echo "$sign jest dużą literą<br>";
        elseif (preg_match('/[a-z]/',$sign))
            echo "$sign jest małą literą<br>";
        elseif (preg_match('/[0-9]/',$sign))
            echo "$sign jest cyfrą<br>";
        else
            echo "$sign jest znakiem specjalnym<br>";

}
typeSign("A");
typeSign("a");
typeSign("1");
typeSign("!");
?>