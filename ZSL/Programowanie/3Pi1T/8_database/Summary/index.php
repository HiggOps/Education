<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h4>Sprzedane Samochody</h4>


    <?php
        require_once './connect.php';

        $sql="SELECT * FROM `cars` INNER JOIN `sellers` ON cars.cars_sellerid=sellers.sellers_id"; //inner join
        $result=$connect->query($sql);

        if (isset($_GET['error'])) {
            echo "$_GET[error]";
        }

        echo <<< TABLE
            <table>
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Seller</th>
                    <th>When</th>
                </tr>
        TABLE;

        while ($car=$result->fetch_assoc()) {
            echo <<< CAR
                <tr>
                    <td>$car[cars_id]</td>
                    <td>$car[cars_brand]</td>
                    <td>$car[cars_model]</td>
                    <td>$car[sellers_name]</td>
                    <td>$car[cars_when]</td>
                    <td><a href="./delete_entry.php?carsId=$car[cars_id]">Usuń</a></td>
                </tr>
            CAR;
        }

        echo "</table>";

        if (isset($_GET['addentry'])) {
            echo <<< ADDENTRY
                <form action="./add_entry.php" method="POST">
                    <p><input type="text" name="cars_brand" placeholder="Marka"></p>
                    <p><input type="text" name="cars_model" placeholder="Model"></p>
                    <p><input type="number" name="cars_sellerid" placeholder="ID sprzedawcy"></p>
                    <p><input type="datetime-local" name="cars_when" placeholder="Data sprzedaży"></p>
                    <p><input type="submit" value="Zatwierdź"></p>
                </form>
            ADDENTRY;
        } else {
            echo '<p><a href="./index.php?addentry=""">Dodaj wejście</a></p>';
        }
        
        $connect->close();
    ?>
</body>
</html>