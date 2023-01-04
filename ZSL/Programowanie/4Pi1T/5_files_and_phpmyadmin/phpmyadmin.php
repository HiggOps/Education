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
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_SESSION['error'])){ 
        echo $_SESSION['error']."<br><br>";
        unset($_SESSION['error']);
    }

    require_once('./scripts/connect.php');

    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo "<div style=background-color:".'#'. str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT).";>id: $row[id] name: $row[name] lastname: $row[surname] login: $row[login] pass: $row[pass] <a href=scripts/delete_user.php?userID=$row[id]>delete user</a></div>";
        }
    }
    else 
    {
        echo "No results";
    }
    ?>
    <h2>Add user</h2>
    <form action="scripts/add_user.php" method="POST">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="surname" placeholder="surname"><br>
        <input type="text" name="login" placeholder="login"><br>
        <input type="password" name="pass" placeholder="password"><br>
        <input type="submit" value="add user">
    </form>
</body>
</html>