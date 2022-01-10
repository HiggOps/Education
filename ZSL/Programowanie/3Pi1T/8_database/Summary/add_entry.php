<?php
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            header('location: ./index.php?error=Wypełnij wszystkie pola');
            exit();
        }
    }

    require_once './connect.php';

    $sql="INSERT INTO `cars` (`cars_id`, `cars_brand`, `cars_model`, `cars_sellerid`, `cars_when`) 
                      VALUES (NULL, '$_POST[cars_brand]', '$_POST[cars_model]', '$_POST[cars_sellerid]', '$_POST[cars_when]')";
    $connect->query($sql);

    if ($connect->affected_rows) {
        header('location: ./index.php?error=Prawidłowo dodano wejście');
    } else {
        header('location: ./index.php?error=Nieprawidłowo dodano wejście');
    }

    $connect->close();
?>
