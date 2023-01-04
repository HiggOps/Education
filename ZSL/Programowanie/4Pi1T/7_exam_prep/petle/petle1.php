<?php
#   Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 1
for ($i = 1; $i <= 10; $i++) { 
    echo "$i ";
}
echo "<br><br>";

#   Wyświetli na ekranie 10 kolejnych liczb całkowitych począwszy od 10 w kolejności malejącej.
for ($i = 10; $i > 0; $i--) { 
    echo "$i ";
}
echo "<br><br>";

#   Obliczy i wyświetli na ekranie sumę kolejnych 10 liczb całkowitych począwszy od 1.
$a = 0;
for ($i = 1; $i <= 10; $i++) { 
    $a += $i;
}
echo "Suma kolejnych 10 liczb to $a";
echo "<br><br>";

#   Wyświetli na ekranie 10 kolejnych parzystych liczb całkowitych począwszy od 2.
for($i = 1;$i <= 10; $i++){
    $x = 2 * $i;
    echo "$x ";
}
echo "<br><br>";

#   Pracownik przez X miesięcy odkłada co miesiąc Y zł. W każdym miesiącu z całej odłożonej na tą chwilę kwoty uzyskuje 8% odsetek. Jaką kwotę zgromadzi pracownik ?
function savings($months, $aside){
    $sum = 0;
    for($i = 1; $i <= $months; $i++){
        $sum += $aside * 1.08;
    }
    return "Pracownik przez $months odkłada co miesiąc $aside zł. Pracownik zgromadzi łączną kwotę $sum";
}
echo savings(5,600);
?>