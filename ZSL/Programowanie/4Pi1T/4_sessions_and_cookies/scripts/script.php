<?php
session_start();
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>;";
        exit();
    }
}

$username = $_POST['username'];
$pass = $_POST['pass'];

if ($username == "user" && $pass == "user") {
    if (isset($_POST['save'])) {
        setcookie("username", $username, time()+60);
        setcookie("pass", $pass, time()+60);
    }

    $_SESSION['time'] = time();
}
else {
    setcookie("alert", "Login error", time()+60);
}

header('location: ../');
?>