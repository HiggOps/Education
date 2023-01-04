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
    <form method="post">

        <input type="date" name="date">
        <input type="submit" value="OK">

    </form>
    <?php
        function isWeekend($date) {
            if (date('N', strtotime($date)) >= 6) {
                return "is a weekend";
            } else {
                return "isn't a weekend";
            }
        }

        if(isset($_POST['date'])) {
            $date = $_POST['date'];
            echo $date." ";
            echo isWeekend($date);
        } else {
            echo "Wypełnij pole";
        }
    ?>
</body>
</html>