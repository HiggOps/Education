<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        //$connect = new mysqli("localhost","root","","zsl_3pi1t_g2");//mysqli("adres hosta","nazwa użytkownika, który się łączy","hasło","nazwa database")
        require_once './scripts/connect.php';
        $sql = "SELECT * FROM `users`";//wybranie wszystkich danych z tabeli users
        $result=$connect->query($sql);//$connect->query($sql) to zapytanie o wybrane dane // nie musi być jako wartość
        //result przechowuje wybrane zapytanie
        //$user=$result->fetch_assoc();//fetch_assoc tworzy tablice asocjacyjną
        //print_r($user);

        /*while ($user=$result->fetch_assoc()) {
            echo <<< USER
                Id: $user[id] <br>
                Imię: $user[name] <br>
                Nazwisko: $user[surname] <br>
                <hr>
            USER;
        }*/

    echo <<< TABLE
    <table>
        <tr>
            <th>ID</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Dodanie konta</th>
            <th>Miasto</th>
        </tr>
    
    TABLE;
        while ($user=$result->fetch_assoc()) {
            echo <<< USER
                <tr>
                    <td>$user[id]</td>
                    <td>$user[name]</td>
                    <td>$user[surname]</td>
                    <td>$user[birthday]</td>
                    <td>$user[create_date]</td>
                    <td>$user[cityid]</td>
                </tr>
            USER;
        }
            echo "</table>";
    ?>
    

</body>
</html>