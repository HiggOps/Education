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
        $array = ['Bartek' => '3','Jakub' => '1','Wojtek' => '4', 'Adam' => '2'];

        ksort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }

        echo "<hr>";

        krsort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }

        echo "<hr>";

        asort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }

        echo "<hr>";

        arsort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val<br>";
        }
    ?>
</body>
</html>