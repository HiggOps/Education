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
        function changeWords($text, $word1, $word2) {
            if ((str_contains($text, $word1)) && (str_contains($text, $word2))) {
                return strtr($text, array($word1 => $word2, $word2 => $word1));
            }
        }

        $text = "Python jest lepszy niż PHP";

        echo changeWords($text, "Python", "PHP");

    ?>
</body>
</html>