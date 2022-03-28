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

if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
}

require_once './connect.php';
$fullname = $_POST['name'].' '.$_POST['surname'];
$pass = password_hash($_POST['pass1'], PASSWORD_ARGON2I);
// https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php
$stmt = $connect->prepare("INSERT INTO user (cityid, fullname, pass)
    VALUES (?, ?, ?);");
$stmt->bind_param("iss", $_POST['cityid'], $fullname, $pass);
$stmt->execute();
$stmt->close();

if ($connect->affected_rows == 1) {
    $_SESSION['error'] = "Nie dodano użytkownika";
} else {
    $_SESSION['error'] = "Dodano użytkownika o adresie: $fullname";
}

header('location: ../register-v2.php');

?>