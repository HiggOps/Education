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
        function checkIfSmall($string) {
            preg_match('/[a-z]*/', $string);
            if (preg_match('/[a-z]*/', $string)) {
                return "Contains only small letters";
            } else {
                return "Doesn't contain only small letters";
            }
        }
        echo checkIfSmall("yes");

    ?>
</body>
</html>