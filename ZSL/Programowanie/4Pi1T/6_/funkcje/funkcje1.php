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
        function passGen($big,$small,$number,$special) {
            $password = "";

            for ($i = 0; $i < $big; $i++) {
                $password .= chr(rand(65,90));
            }

            for ($i = 0; $i < $small; $i++) {
                $password .= chr(rand(97,122));
            }

            for ($i = 0; $i < $number; $i++) {
                $password .= rand(0,9);
            }

            $specialchars = '~!@#$%^&*()';
            for ($i = 0; $i < $special; $i++) {
                $password .= substr(str_shuffle($specialchars),0,1);
            }

            return str_shuffle($password);
        }

        echo passGen(1,5,3,2);
    ?>
</body>
</html>