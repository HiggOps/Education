<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a">
        <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
    if(isset($_GET['button'])) {
        if(!empty($_GET['sideA']) && $_GET['sideA'] > 0) {
            $sideA = str_replace(',','.', $_GET['sideA']);
            $area = $sideA ** 2;
            $perimeter = $sideA * 4;
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