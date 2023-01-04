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
        for ($i = 1; $i <= 4; $i++) {
            $temp = $i * 10;
            if ($temp < $num)
                echo "$num większe od $temp<br>";
                exit;
        }

    ?>
</body>
</html>