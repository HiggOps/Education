<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Formularze</title>
</head>
<body>
    <?php
        if (isset($_SESSION['error'])){ 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    <p>Form to koszt.php</p>
    <form action=".\scripts\koszt.php" method="POST">
        <input type="text" name="price" placeholder="Koszt benzyny">
        <input type="number" name="distance" placeholder="Ilość kilometrów">
        <input type="text" name="average" placeholder="Średnie spalanie (L/100km)">
        <input type="submit" value="Submit">
    </form>
    <p>Form to pizza.php</p>
    <form action=".\scripts\pizza.php" method="POST">
        <input type="number" name="distance" placeholder="Ilość kilometrów">
        <input type="checkbox" name="warm" value="Warm?">
        <input type="submit" value="Submit">
    </form>
</body>
</html>