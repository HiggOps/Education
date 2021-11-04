<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        $connect = new mysqli("localhost","root","","zsl_3pi1t_g2");//mysqli("adres hosta","nazwa użytkownika, który się łączy","hasło","nazwa database")
        $sql = "SELECT * FROM `users`";//wybranie wszystkich danych z tabeli users
        $result=$connect->query($sql);//$connect->query($sql) to zapytanie o wybrane dane // nie musi być jako wartość
        //result przechowuje wybrane zapytanie
        //$user=$result->fetch_assoc();//fetch_assoc tworzy tablice asocjacyjną
        //print_r($user);

        while ($user=$result->fetch_assoc()) {
            echo <<< USER
                Id: $user[id] <br>
                Imię: $user[name] <br>
                Nazwisko: $user[surname] <br>
                <hr>
            USER;
        }


    ?>
</body>
</html>