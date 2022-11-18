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
        function checkCircles($Sx1, $Sy1, $r1, $Sx2, $Sy2, $r2) {
            $a = $Sx1 - $Sx2;
            $b = $Sy1 - $Sy2;
            $d = sqrt(pow($Sx1 - $Sx2, 2) + pow($Sy1 - $Sy2, 2));
            $addR = $r1 + $r2;
            $subR = $r1 - $r2;
            if ($d == $addR)
                echo "Okręgi styczne zewnętrznie<br>";
            if ($d == $subR)
                echo "Okręgi styczne wewnętrznie<br>";
            if ($d > $addR) 
                echo "Okręgi rozłączne zewnętrznie<br>";
            if ($d < $subR)
                echo "Okręgi rozłączne wewnętrznie<br>";
            if ($Sx1 == $Sx2 && $Sy1 == $Sy2)
                echo "Okręgi współśrodkowe<br>";
            if ($d > $subR && $d < $addR) 
                echo "Okręgi przecinają się w dwóch miejscach<br>";
            return;
        }
        $Sx1 = 1;
        $Sy1 = 1;
        $r1 = 3;

        $Sx2 = 1;
        $Sy2 = 1;
        $r2 = 3;
        checkCircles($Sx1, $Sy1, $r1, $Sx2, $Sy2, $r2);
    ?>
</body>
</html>