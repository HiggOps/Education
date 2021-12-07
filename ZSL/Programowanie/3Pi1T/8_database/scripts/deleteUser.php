<?php
if (!empty($_GET['userId'])) {
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[userId]";
    $connect->query($sql);
    //echo $connect->affected_rows;
    if ($connect->affected_rows) {
        header('location: ../8_3_db_select_table_delete.php?error=Prawidłowo usunięto użytkownika');
    } else {
        header('location: ../8_3_db_select_table_delete.php?error=Nieprawidłowo usunięto użytkownika');
    }
}
?>