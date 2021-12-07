<?php

    echo "<pre>";
    print_r($_POST); //only for developers
    echo "</pre>";

    // ! = not, !empty = not empty
    if(!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
        switch ($_POST['geometricFigure']) {
            case 'kwadrat':
                header('location: ./Programowanie 2021-03-30 - 5_square.php');
                break;
            case 'prostokat':
                header('location: ./Programowanie 2021-09-30 - 5_rectangle.php');
                break;
        }
        echo $_POST['name'];
    } else {
        ?>
        
        <script>
            history.back();
        </script>
        
        <?php
    }

?>