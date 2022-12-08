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
        function oddNumbers($array, $x) {
            $arr = [];
            foreach ($array as $value) {
                if ($value % 2 == 1)
                    array_push($arr, $value);
                if (sizeof($arr,) )
            }
            return $arr;
        }
        echo oddNumbers($array, $x)

    ?>
</body>
</html>