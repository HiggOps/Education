<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a">
        <input type="text" name="sideB" placeholder="Podaj długość boku b">
        <input type="submit" name="button" value="Oblicz"><br>
    </form>
    <?php
    if(isset($_GET['button'])) {
        if(!empty($_GET['sideA']) && $_GET['sideA'] > 0 && !empty($_GET['sideB']) && $_GET['sideB'] > 0) {
            $sideA = str_replace(',','.', $_GET['sideA']);
            $sideB = str_replace(',','.', $_GET['sideB']);
            $area = $sideA * $sideB;
            $perimeter = $sideA * 2 + $sideB * 2;
            echo <<< RESULT
            <hr>
            Pole wynosi: $area <br>
            Obwód wynosi: $perimeter <br>
        RESULT;
        
        } else {
            echo "Wypełnij pola";
        }
    }
    ?>
</body>
</html>