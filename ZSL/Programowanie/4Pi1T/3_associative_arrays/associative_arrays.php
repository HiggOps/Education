<?php
    $array = ["gaz" => 3000, "wegiel" => 2000, "ropa" => 4000];
    
    ksort($array);
    foreach ($array as $key => $val) {
        echo "$key = $val<br>";
    }

    echo "<hr>";

    arsort($array);
    foreach ($array as $key => $val) {
        echo "$key = $val<br>";
    }
?>