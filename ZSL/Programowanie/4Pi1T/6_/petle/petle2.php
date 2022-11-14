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
        $file = fopen("./google/google.html", "r");

        if ($file) {
            $i = 1;
            while (($line = fgets($file)) !== false) {
                echo "$i ".htmlspecialchars($line)."<br>";
                $i++;
            }
            fclose($file);
        }
    ?>
</body>
</html>