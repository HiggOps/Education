<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author = "Więckowski Łukasz 4Pi1T">
    <title>Dates</title>
</head>
<body>
    <?php

        #timeIt function - czas generowania strony
        function timeIt(){

            return array_sum(explode(" ", microtime()));

        }

        $start = timeIt();
	    for ($i = 0; $i < 50000000; $i++) {}


        #aktualna data
        echo "<br>Aktualna data: ".date("d.m.Y H:i")."<br>";

        #data za 3 miesiące
        echo "<br>Data za 3 miesiące: ".date("d.m.Y H:i", strtotime("+3 months")),"<br><br>";

        #porównanie czy to ten sam dzień
        $timestamp1 = 7564365464;
        $timestamp2 = 4356354634;

        $date1 = date("Y-m-d", $timestamp1);
        $date2 = date("Y-m-d", $timestamp2);

        echo "Data 1: ".$date1;
        echo "<br>Data 2: ".$date2;

        if($date1 == $date2){

            echo "<br>Te daty są z tego samego dnia.";

        }
        else{

            echo "<br>Te daty nie są z tego samego dnia.";

        };

    ?>
    <div style="position: absolute; top: 0;">
    <?php
        $stop = timeIt();
	    $time = round(($stop-$start),3);
        echo "Strona załadowała się w $time sekundy";
    ?>
    </div>

    
</body>
</html>