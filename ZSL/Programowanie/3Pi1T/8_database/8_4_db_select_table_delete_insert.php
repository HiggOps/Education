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
        //$connect = new mysqli("localhost","root","","zsl_3pi1t_g2");
        //mysqli("adres hosta","nazwa użytkownika, który się łączy","hasło","nazwa database");
        require_once './scripts/connect.php';
        //$sql = "SELECT * FROM `users`"; //wybranie wszystkich danych z tabeli users
        $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.cityid=cities.cityid"; //wybranie wszystkich danych z tabeli users z podłączeniem do tabeli cities
        $result=$connect->query($sql);
        //$connect->query($sql) to zapytanie o wybrane dane // nie musi być jako wartość
        //result przechowuje wybrane zapytanie
        //$user=$result->fetch_assoc();//fetch_assoc tworzy tablice asocjacyjną
        //print_r($user);

        if (isset($_GET['error'])) { //zwrócenenie czy usunięto użytkownika czy nie
            echo "<h3>$_GET[error]</h3>";
        }

        ///wypisz tabele
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

    //wypisz dane do tabeli
    while ($user=$result->fetch_assoc()) {
        echo <<< USER
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[surname]</td>
                <td>$user[birthday]</td>
                <td>$user[create_date]</td>
                <td>$user[city]</td> 
                <td><a href="./scripts/delete_user.php?userId=$user[id]">Usuń</a></td>
            </tr>
        USER;
    }
    echo "</table>";
    
    if(isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
            <h4>Dodawanie użytkownika</h4>
            
            <form action="./scripts/add_user.php" method="post">
                <input type="text" name="name" placeholder="Podaj imię"><br><br>
                <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
                <input type="date" name="birthday" placeholder="Data Urodzenia"><br><br>
                <input type="text" name="cityid" placeholder="Podaj miasto"><br><br>
                <input type="submit" value="Dodaj użytkownika">
            </form>
        FORMADDUSER;
    } else {
        echo '<br><a href="./8_4_db_select_table_delete_insert.php?addUser="">Dodaj użytkowanika</a>';
    }

    $connect->close();
    ?>


</body>
</html>