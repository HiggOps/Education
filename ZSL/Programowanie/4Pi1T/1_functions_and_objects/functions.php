<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Funkcje</title>
</head>
<body>
    <?php
        #10x przy pomocy pętli "Hello world!"
        function text() {
            echo "Bardzo lubię PHP<br>";
        }

        for ($i=0; $i < 10; $i++) {
            text();
        }

        #funkcja czy liczba jest mniejsza od 100 i czy jest liczbą pierwszą
        function isPrime($num){
            if ($num == 1)
                return 0;
            for ($i = 2; $i <= $num/2; $i++){
                if ($num % $i == 0)
                    return 0;
            }
            return 1;
        }
        
        function isLess($num) {
            if ($num < 100)
                return 1;
            return 0;
        }

        function check($num) {
            if (isPrime($num)) {
                echo "$num jest liczbą pierwszą<br>";
            } else {
                echo "$num nie jest liczbą pierwszą<br>";
            }
            if (isLess($num))
                echo "$num jest mniejsze od 100<br>";
            else
                echo "$num nie jest mniejsze od 100<br>";
            return;
        }

        check(10);
        /* check
        for ($num = 1; $num < 100; $num++) {
            check($num);
        }
        */
    ?>
</body>
</html>