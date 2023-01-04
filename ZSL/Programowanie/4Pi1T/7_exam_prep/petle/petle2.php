<?php
#   Obliczy sumę elementów ciągu arytmetycznego, składającego się ze 100 elementów, z których każdy kolejny jest większy od poprzedniego o 10. Pierwszy element wynosi 5.
$num = 5;
$sum = 0;
for ($i = 0; $i < 100; $i++) { 
    $sum += $num;
    $num += 10;
}

echo "Suma elementów: $sum";
echo "<br><br>";

#   Obliczy ilość cegieł w ścianie o podstawie X cegieł, wysokości Y rzędów cegieł, gdzie każdy kolejny stawiany rząd cegieł jest o Z cegieł krótszy od poprzedniego (niższego).
function bricks($x, $y, $z){
    $sum=0;
    $row=$x;
    for ($i = 1; $i <= $y; $i++){
        $sum += $row;
        $row -= $z;
    }
    return "Ściana o podstawie $x cegieł i mająca $y rzędów, z których każdy jest krótszy o $z cegieł od poprzedniego rzędu, posiada $sum cegieł.";
}
echo bricks(40,2,3);
echo "<br><br>";

#   Wyświetli na ekranie ciąg arytmetyczny składający się z N elementów, gdzie pierwszy element ma wartość X, a różnica pomiędzy kolejnymi elementami ciągu wynosi Y.
function seq($n, $x, $y){
    $element = $x;
    for ($i = 1; $i <= $n; $i++){
        echo "$element ";
        $element -= $y;
    }
}
seq(10,2,10);
echo "<br><br>";

#   Algorytm oblicza silnię wprowadzonej przez użytkownika liczby.
function factorial($num){
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) { 
        $factorial = $factorial * $i;
    }
    return "$num! = $factorial";
}
echo factorial(5);
?>