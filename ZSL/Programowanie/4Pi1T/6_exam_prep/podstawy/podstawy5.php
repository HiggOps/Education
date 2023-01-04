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
        function isParallel($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
            $pq = ($y2 - $y1) / ($x2 - $x1);
            $rs = ($y4 - $y3) / ($x4 - $x3);
            if ($pq == $rs) {
                return 1;
            }
            return 0;
        }
        $a = array(0,0);
        $b = array(1,1);
        $c = array(1,0);
        $d = array(2,1);

        $x1 = 0; $y1 = 0;
        $x2 = 1; $y2 = 1;
        $x3 = 1; $y3 = 0;
        $x4 = 2; $y4 = 1;
        echo isParallel($a[0], $a[1], $b[0], $b[1], $c[0], $c[1], $d[0], $d[1]);
    ?>
</body>
</html>