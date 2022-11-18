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
        $num = 21;
        if ($num > 40) {
            echo "$num jest większe od 40";
        } elseif ($num > 30) {
            echo "$num jest większe od 30";
        } elseif ($num > 20) {
            echo "$num jest większe od 20";
        } elseif ($num > 10) {
            echo "$num jest większe od 10";
        }
    ?>
</body>
</html>