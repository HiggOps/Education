<?php
session_start();
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>;";
        exit();
    }
}

# koszt benzyny * ilość zużytego paliwa
# ilość zużytego paliwa = (dystans * spalanie)/100

$price = floatval($_POST['price']);
$distance = $_POST['distance'];
$average = floatval($_POST['average']);

$total = $price * (($distance * $average)/100);

$_SESSION['error'] = "Cena za przejazd: $total PLN";
header('location: ../');