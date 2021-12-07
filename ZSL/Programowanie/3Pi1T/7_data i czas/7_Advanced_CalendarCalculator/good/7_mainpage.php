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
        ob_clean();
    ?>
    <form action="./7_script.php" method = "POST">
        <input type="radio" name="operation" value="whatDate" checked>What Date it will be?<br><br>
        <input type="radio" name="operation" value="howManyDays">How big difference there is?<br><br>
        <input type="submit" name="buttonOperation" value="Zatwierdź">
    </form>
</body>
</html>
