<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!empty($_POST['operation'])) {
    switch ($_POST['operation']) {
        case 'whatDate':
            header('location: ./7_functions/7_whatDate.php');
            break;
        case 'howManyDays':
            header('location: ./7_functions/7_howManyDays.php');
            break; 
    }
}
?>
</body>
</html>