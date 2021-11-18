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
        Do: <input type="date" name="dateSecond"><br><br>
        <input type="submit" name="button" value="Zatwierdź dane">
    </form>
<?php
require_once './7_function.php';
    if (isset($_POST['button'])) {
        //print_r($_POST);
        if(!empty($_POST['dateFirst']) && !empty($_POST['dateSecond'])) {

            (int)$firstYear = substr($_POST['dateFirst'], 0,-6); //2021
            (int)$firstMonth = substr($_POST['dateFirst'], 5,-3); //10
            (int)$firstDay = substr($_POST['dateFirst'], 8); //28
            //(int)$firstDate = $firstYear.$firstMonth.$firstDay; //20211028
            $firstDate = (int)(mktime(0,0,0,$firstMonth,$firstDay,$firstYear)/(60*60*24));
            //echo $firstDate."<br>";

            (int)$secondYear = substr($_POST['dateSecond'], 0,-6); //2021
            (int)$secondMonth = substr($_POST['dateSecond'], 5,-3); //10
            (int)$secondDay = substr($_POST['dateSecond'], 8); //28
            //(int)$secondDate = $secondYear.$secondMonth.$secondDay; //20211028
            $secondDate = (int)(mktime(0,0,0,$secondMonth,$secondDay,$secondYear)/(60*60*24));
            //echo (int)$secondDate."<br>";

            //dni, miesiące, lata
            $numberOfDays = abs($firstDate - $secondDate);
            (bool)$compare = $firstDate > $secondDate;
            
            switch($compare) {
                case true:
                    //echo "true"."<br>";
                    daysDifference($numberOfDays, $secondYear, $secondMonth);

                    break;
                case false:
                    //echo "false"."<br>";
                    daysDifference($numberOfDays, $firstYear, $firstMonth);

                    break;
            }

        }
        
    }

?>
</body>
</html>