<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ob_clean();
    ?>
    <form method="post">
        Pierwsza Data: <input type="date" name="dateFirst"><br><br>
        Ostatnia Data: <input type="date" name="dateSecond"><br><br>
        <input type="submit" name="button" value="Zatwierdź dane">
    </form>
    <?php
        
        if(isset($_POST['button'])) {
            print_r($_POST);
            if(!empty($_POST['dateFirst']) && !empty($_POST['dateSecond'])) {

                (int)$firstYear = substr($_POST['dateFirst'], 0,-6); //2021
                (int)$firstMonth = substr($_POST['dateFirst'], 5,-3); //10
                (int)$firstDay = substr($_POST['dateFirst'], 8); //28
                (int)$firstDate = $firstYear.$firstMonth.$firstDay; //20211028

                (int)$secondYear = substr($_POST['dateSecond'], 0,-6); //2021
                (int)$secondMonth = substr($_POST['dateSecond'], 5,-3); //10
                (int)$secondDay = substr($_POST['dateSecond'], 8); //28
                (int)$secondDate = $secondYear.$secondMonth.$secondDay; //20211028

                //dni, miesiące, lata
                (bool)$compare = $firstDate > $secondDate;
                switch(var_export((bool) $compare)) {
                    case 'true':
                        echo "true";
                        //pierwsza data jest mniejszą wartością (czyli była wcześniej)
                        
                        break;
                    case 'false':
                        echo "false";
                        //druga data jest mniejszą wartością (czyli była wcześniej)
                        break;
                }
                /*
                switch ($_POST['geometricFigure']) {
                    case 'kwadrat':
                        header('location: ./Programowanie 2021-03-30 - 5_square.php');
                        break;
                    case 'prostokat':
                        header('location: ./Programowanie 2021-09-30 - 5_rectangle.php');
                        break;
                }
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
                */
            }
            
        }
        
    ?>
</body>
</html>