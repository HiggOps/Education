<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <?php
        if (isset($_SESSION['error'])){ 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    <h3>Rejestracja użytkownika</h3>
    <form action="./scripts/register.php" method="post">
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="email" name="email1" placeholder="Podaj adres email"><br><br>
        <input type="email" name="email2" placeholder="Powtórz adres email"><br><br>
        <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
        <input type="password" name="pass2" placeholder="Powtórz hasło"><br><br>
        <input type="date" name="birthday"> Data urodzenia <br><br>
        <input type="submit" value="Zarejestruj się">
    </form>
</body>
</html>