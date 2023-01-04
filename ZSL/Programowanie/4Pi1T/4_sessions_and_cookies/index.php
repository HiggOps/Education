<?php 
    session_start();
?>
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
    <?php
        if (isset($_SESSION['error'])){ 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }

        $username = "";
        $pass = "";

        if (isset($_COOKIE['username']))
        {
            $username = $_COOKIE['username'];
            setcookie('username', null, -1);
        }

        if (isset($_COOKIE['pass']))
        {
            $pass = $_COOKIE['pass'];
            setcookie('pass', null, -1);
        }

        echo <<< FORM
        <form action="./scripts/script.php" method="POST">
        <input type=text name=username placeholder="Username" value=$username><br>
        <input type=password name=pass placeholder="Password" value=$pass><br>
        <input type="checkbox" name="save">Remember password?<br>
        <button>Zaloguj</button><br>
        </form>
        FORM;

        if (isset($_COOKIE['alert'])) {
            echo $_COOKIE['alert'];
            setcookie('alert', null, -1);
        }

        if (isset($_SESSION["time"])) {
            $time = $_SESSION["time"]+60-time();

            if ($time < 1) {
                unset($_SESSION["time"]);
                exit;
            }

            echo "Logged in<br>";
            echo "Remaining time: ".$time." seconds";
        }
    ?>
</body>
</html>