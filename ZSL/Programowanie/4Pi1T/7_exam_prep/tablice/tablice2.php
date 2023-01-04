<?php

#   Utwórz pustą tablicę 100 elementów
$tablica = array_fill(0, 100, NULL);
echo "Pusta tablica <br>";
print_r($tablica);

#   Wypełni tablicę ciągiem liczb: 3, 6, 9, 12, …
$a = 3;
for ($i = 0; $i < count($tablica); $i++) {
    $tablica[$i] = $a;
    $a += 3;
}
echo "<br><br>";
echo "Tablica wypełniona ciągiem liczb większych o 3 <br>";
print_r($tablica);

#   Wypełnij tablicę kolejnymi potęgami liczby 2.
$a = 2;
for ($i = 0; $i < count($tablica); $i++) {
    $tablica[$i] = $a;
    $a *= 2;
}
echo "<br><br>";
echo "Tablica wypełniona kolejnymi potęgami liczby 2 <br>";
print_r($tablica);

#   Oblicz średnią wartość elementów tablicy
$sum = 0;
for ($i = 0; $i < count($tablica); $i++) {
    $sum += $tablica[$i];
}
$average = $sum / count($tablica);
echo "<br><br> Średnia wartość tablicy ".$average;

#   Podaj ile liczb zawartych w tablicy jest podzielna bez reszty przez 512.
$x = 0;
for ($i = 0; $i < count($tablica); $i++) {
    if ($tablica[$i] % 512 == 0)
        $x += 1;
}

echo "<br><br> Podzielne przez 512 jest $x elementów tablicy <br><br>";

#   Wyświetl na ekran liczby znajdujące się w komórkach o nieparzystych indeksach.
echo "Liczby znajdujące się w komórkach o nieparzystych indeksach<br>";
for ($i = 0; $i < count($tablica); $i++) {
    if ($i % 2 == 1)
        echo $tablica[$i]." ";
}
echo "<br><br>";

#   Znajdź element najbliższy wartością wprowadzonej przez użytkownika liczbie „a”.
echo <<< FORM
    <form method='POST'>
        <input type="number" name="search" placeholder="Podaj numer">
        <input type="submit" value="Submit">
    </form>
FORM;

if (!empty($_POST['search'])) {
    $search = $_POST['search'];
    $closest = null;
    foreach ($tablica as $value) {
    if ($closest === null || abs($search - $closest) > abs($value - $search)) {
        $closest = $value;
        }
    }
    echo $closest;
}

?>