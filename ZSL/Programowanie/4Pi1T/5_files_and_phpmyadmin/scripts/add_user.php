<?php
session_start();
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>;";
        exit();
    }
}

require_once './connect.php';

$sql = "INSERT INTO users 
        VALUES ('default', '$_POST[name]', '$_POST[surname]', '$_POST[login]', '$_POST[pass]')";

$connect->query($sql);

if($connect->affected_rows) {
    $_SESSION['error']="Poprawnie dodano użytkownika";

} else {
    $_SESSION['error']="Niepoprawnie dodano użytkownika";

}

echo "<script>history.back();</script>;";
$connect->close();

?>