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
//JanKowalski123
//JuzekSzczesny321
require_once './connect.php';
$pass = password_hash($_POST['pass1'], PASSWORD_ARGON2I);
// https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php
$stmt = $connect->prepare("INSERT INTO `user` (`cityid`, `name`, `surname`, `email`, `birthday`, `password`)
    VALUES (?, ?, ?, ?, ?, ?);");
$stmt->bind_param("isssss", $_POST['cityid'], $_POST['name'], $_POST['surname'], $_POST['email1'], $_POST['birthday'], $pass);
$stmt->execute();

if ($connect->affected_rows == -1) {
    $_SESSION['error'] = "Nie dodano użytkownika";
} else {
    $_SESSION['error'] = "Dodano użytkownika o adresie: $_POST[email1]";
}

header('location: ../');
//dodaj pole z miastami pobranymi z tabeli city (select option)
//zmodyfikuj zapytanie do bazy dodające użytkownika (insert)


?>