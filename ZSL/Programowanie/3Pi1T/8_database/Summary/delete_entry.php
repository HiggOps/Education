<?php
    if (!empty($_GET['carsId'])) {

        require_once './connect.php';

        $sql="DELETE FROM `cars` WHERE `cars`.`cars_id` = $_GET[carsId]";
        $connect->query($sql);

        if($connect->affected_rows) {
            header('location: ./index.php?error=Prawidłowo usunięto wejście');
        } else {
            header('location: ./index.php?error=Nieprawidłowo usunięto wejście');
        }
    }
    
    $connect->close();

?>

