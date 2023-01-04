<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" value="OK">
    </form>

    <?php
        if (isset($_POST['name'])) {
            echo $_POST['name'];
        }
    ?>
</body>
</html>