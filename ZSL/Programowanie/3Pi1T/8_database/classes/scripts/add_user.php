<?php
if (!empty($_POST)) {
    
    foreach($_POST as $key => $value) {
        
        //echo "$key: $value<br>"; //test

        if(empty($value)) {
            header('location: ../8_4_db_select_table_delete_insert.php?error=Wypełnij wszystkie pola');
            exit();
        }

        require_once './connect.php';

        $sql = "INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`, `create_date`) 
                VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
        $connect->query($sql);

        if($connect->affected_rows == 1) {
            header('location: ../8_4_db_select_table_delete_insert.php?error=Prawidłowo dodano użytkownika');
        } else {
            header('location: ../8_4_db_select_table_delete_insert.php?error=Nieprawidłowo dodano użytkownika');
        }
    }
}

$connect->close();

?>