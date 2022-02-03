<?php
session_start();
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>;";
        exit();
    }
}
$error=0;
if ($_POST['pass1'] != $_POST['pass2']) {
    $_SESSION['error'] = "Hasła są różne!";
    $error=1;
}
if ($_POST['email1'] != $_POST['email2']) {
    $_SESSION['error'] = "Adresy poczty są różne!";
    $error=1;
}

if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
}

require_once './connect.php';

$user = $mysqli->prepare("INSERT INTO `zsl_11_logowanie` 
    (`name`, `surname`, `email`, `birthday`, `password`)
    VALUES (?, ?, ?, ?, ?);");
$user->bind_param("sssss", '$_POST[name]', '$_POST[surname]', '$_POST[email1]', '$_POST[birthday]', '$_POST[pass1]');
$user->execute();
?>