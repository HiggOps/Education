<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
    <style>
        table tr td{
            border: solid 2px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $name = "Stefan";
        $balance = 4600;

        echo <<< TABLE
            <table>
                <tr>
                    <td>Imię</td>
                    <td>Pensja</td>
                </tr>
                <tr>
                    <td>$name</td>
                    <td>$balance</td>
                </tr>
            </table>

        TABLE;
    ?>
</body>
</html>