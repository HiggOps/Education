<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author = "Więckowski Łukasz 4Pi1T">
    <title>Konwersja</title>
</head>
<body>
    <!-- Date -> Timestamp -->
    <form method="post">

        <p>Konwersja daty na timestamp</p>
        <input type="date" name="date">
        <input type="time" name="time">
        <input type="submit" value="OK">

    </form>

    <?php

        if(isset($_POST['date']) && isset($_POST['time'])){

            $date=$_POST['date'];
            $time=$_POST['time'];
            
            $day=substr($date,8,2);
            $month=substr($date,5,2);
            $year=substr($date,0,4);

            $hour=substr($time,0,2);
            $minute=substr($time,4,2);
            
            $timestamp = mktime($hour,$minute,0,$month,$day,$year);
            echo "<br>".$timestamp;

        }
        else{

            echo "<br>Wypełnij pola.";

        }

    ?>
    <!-- Timestamp -> Date -->
    <form method="post">

        <p>Konwersja timestamp na date</p>
        <input type="int" name="timestamp">
        <input type="submit" value="OK">

    </form>

    <?php

        if(isset($_POST['timestamp'])){

            $timestamp2 = $_POST['timestamp'];
            
            $date2 = date("Y-m-d H:m",$timestamp2);
            echo "<br>".$date2;

        }
        else{

            echo "<br>Wypełnij pola.";

        }

    ?>

</body>
</html>