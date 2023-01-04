<?php
session_start();
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>;";
        exit();
    }
}

$distance = $_POST['distance'];
$warm = $_POST['warm'];

$delivery = $distance * 0.5;
if ($warm == True)
   $delivery = $delivery * 1.15;

$_SESSION['error'] = "Cena za dostawę: $delivery PLN";
header('location: ../');
?>