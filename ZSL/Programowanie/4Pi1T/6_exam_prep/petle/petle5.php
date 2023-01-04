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
        function isPrime($num){
            if ($num == 1)
                return 0;
            for ($i = 2; $i <= $num/2; $i++){
                if ($num % $i == 0)
                    return 0;
            }
            return 1;
        }

        function sumFirstPrimes($x){
            $i = 0;
            $last_used = 1;
            $sum = 0;
            while ($i < $x) {
                if (isPrime($last_used)) {
                    $sum += $last_used;
                    $i++;
                }
                $last_used++;
            }
            return $sum;
        }

        echo sumFirstPrimes(2);
    ?>
</body>
</html>