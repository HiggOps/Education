<?php

/*
    STARSZY: wczyta z 2 zmiennych tekstowych daty urodzenia dwóch osób,
    następnie wypisze komunikat z informacją, która z tych osób jest starsza
*/
function starszy($date1,$date2){
    if ($date1 > $date2)
        return "$date1 Pierwsza osoba jest starsza";
    else 
        return "$date2 Druga osoba jest starsza";
}

$date1 = "2000-10-23";
$date2 = "2004-12-10";

echo starszy($date1, $date2)."<br>";
/*
    SZYFR: program wczytuje string i szyfruje. Szyfrowanie ma się odbywać w
    taki sposób, aby litera zaszyfrowana była przesunięciem o 2 względem
    alfabetu (zapętlenie), np. a -> c, k->m, z->b.
*/
function szyfr(String $str, Int $key){
    $cipher = "";
    $alfabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i=0;$i<strlen($str);$i++) {
        if (ctype_lower($str[$i])){
            $temp = strtoupper($str[$i]);
            $cipher .= strtolower($alfabet[(strpos($alfabet, $temp)+$key) % strlen($alfabet)]);
        } else {
            $cipher .= $alfabet[(strpos($alfabet, $str[$i])+$key) % strlen($alfabet)];
        }
        }
    return $cipher;
}
/*
    DESZYFR: program wczytuje string i do odszyfruje. Odszyfrowanie ma się
    odbywać w taki sposób, aby litera odszyfrowana była przesunięciem o 2
    względem alfabetu (zapętlenie), np. c -> a, m->k, b->z.
*/
function deszyfr(String $str, Int $key){
    $decipher = "";
    $alfabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i=0;$i<strlen($str);$i++) {
        if (ctype_lower($str[$i])){
            $temp = strtoupper($str[$i]);
            $decipher .= strtolower($alfabet[(strpos($alfabet, $temp)-$key) % strlen($alfabet)]);
        } else {
            $decipher .= $alfabet[(strpos($alfabet, $str[$i])-$key) % strlen($alfabet)];
        }
        }
    return $decipher;
}

$text = "ABCDe";
echo $text." text <br>";
$encoded_text = szyfr($text,2); #cDeFg
echo $encoded_text." zaszyfrowany tekst<br>";
$decoded_text = deszyfr($encoded_text,2);
echo $decoded_text." odszyfrowany tekst<br>";
?>