<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
</head>
<body>
    <?php
        function FloydsTriangle($num) {
            $counter = 1;
            for ($i = 1; $i <= $num; $i++) { #ilosc rzedów = ilość i wyrazów w rzędzie
                for ($x = 1; $x <= $i; $x++) { #ilosc wyrazów w rzędzie
                    echo "$counter ";
                    $counter++;
                }
                echo "<br>";
            }
        }
        FloydsTriangle(10);
    ?>
</body>
</html>