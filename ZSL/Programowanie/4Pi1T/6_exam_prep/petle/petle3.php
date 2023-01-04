<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td {
            border: solid 2px black;
            padding: 3px;
        }
    </style>
</head>
<body>
    <table>
        <tr><td></td>
    <?php
        for ($r = 1; $r <= 10; $r++) {
            echo "<td>$r</td>";
        }
        echo "</tr>";
        for ($y = 1; $y <= 10; $y++){
            echo "<tr>";

                for ($x = 0; $x <= 10; $x++) {
                    if ($x == 0){
                        $x = 1;
                        $i = $x * $y;
                        echo "<td>$i</td>";
                        $x = 0;
                    } else {
                        $i = $x * $y;
                        echo "<td>$i</td>";
                    }
                }
            echo "</tr>";
        }

    ?>
    </tr>
    </table>
</body>
</html>