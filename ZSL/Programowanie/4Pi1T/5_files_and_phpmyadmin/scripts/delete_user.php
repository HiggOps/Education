<?php
session_start();
if (!empty($_GET['userID'])) {

    require_once './connect.php';

    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[userID]";
    $connect->query($sql);

    if ($connect->affected_rows) {
        $_SESSION['error']="Poprawnie usunięto użytkownika";
    } else {
        $_SESSION['error']="Niepoprawnie usunięto użytkownika";
    }

    header('location: ../phpmyadmin.php');
    $connect->close();
}
?>