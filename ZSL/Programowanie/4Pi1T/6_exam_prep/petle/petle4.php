<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
    <style>
        .box-wrapper {
            display: flex;
        }
        #square{
            height: 20px;
            width: 20px;
        }
        #width {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 20px;
            width: 30px;
        }
        #height {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 30px;
            width: 20px;
        }

        .box {
            width: 30px;
            height: 30px;
        }
        #black {
            background-color: grey;
        }
        #white {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div>
    <?php
        echo "<div class=box-wrapper>";
            echo "<div id=square></div>";
        foreach (range('a','h') as $width) {
            echo "<div id=width>$width</div>";
        }
        echo "</div>";
        for ($y = 1; $y <= 8; $y++){
            echo "<div class=box-wrapper>";
            for ($x = 0; $x <= 8; $x++){
                if ($x == 0) {
                    echo "<div id=height>$y</div>";
                } else {
                    if ($x%2 == 1) {
                        if ($y%2 == 1) {
                            echo "<div class=box id=black></div>";
                        } else {
                            echo "<div class=box id=white></div>";
                        }
                    } else {
                        if ($y%2 == 0) {
                            echo "<div class=box id=black></div>";
                        } else {
                            echo "<div class=box id=white></div>";
                        }
                    }
                }
            }
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>