<?php

    echo "<pre>";
    print_r($_POST); //only for developers
    echo "</pre>";

    // ! = not, !empty = not empty
    if(!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
        switch ($_POST['geometricFigure']) {
            case 'kwadrat':
                header('location: ./square.php');
                break;
            case 'prostokat':
                header('location: ./rectangle.php');
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