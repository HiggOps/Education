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
        function str2_in_str1($text, $text2) {
            $len = strlen($text2) * -1;
            if (substr($text, $len) == $text2) {
                return "'$text2' is in '$text'";
            } else {
                return "'$text2' is not in '$text'";
            }
        }
        echo str2_in_str1("test", "nie jest");
    ?>
</body>
</html>