<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Od: <input type="date" name="dateFirst"><br><br>
        Do: <input type="number" name="days"><br><br>
        <input type="submit" name="button" value="Zatwierdź dane">
    </form>
    <?php
    require_once './7_function.php';
    if(isset($_POST['button'])) {
        print_r($_POST);
        if(!empty($_POST['dateFirst']) && !empty($_POST['days'])) {

            (int)$firstYear = substr($_POST['dateFirst'], 0,-6); //2021
            (int)$firstMonth = substr($_POST['dateFirst'], 5,-3); //10
            (int)$firstDay = substr($_POST['dateFirst'], 8); //28

            //dni, miesiące, lata
            $numberOfDays = $_POST['days'];
            echo whatDate($numberOfDays, $firstYear, $firstMonth, $firstDay);

        }
    }
?>
</body>
</html>