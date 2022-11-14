<?php
$fullname = "Łukasz Więckowski";
$surname = stristr($fullname, " ");
echo $surname."<hr>";

$email = "wieckowski.lukasz@gmail.com";
$domain = substr(stristr($email, "@"), 1);
echo $domain."<hr>";

echo htmlspecialchars("$email<br>")."<hr>";

function palindrom_check($text) {
    // delete special symbols, all characters to lowercase => reversed
    $check = str_replace(" ", "",strtolower($text));
    $reversed = strrev($check);
    //echo $check."<br>";
    //echo $reversed;
    if ($reversed == $check) {
        return "$text is a palindrome";
    } else {
        return "$text is not a palindrome";
    }
}
echo palindrom_check("A kto kota ma to kotka");