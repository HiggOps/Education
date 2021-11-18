<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <a src="./index.html"><img src="./images/baner.jpg" height="100px" width="800px"></a> 
    </header>
    
    <nav>
        <a href="strona1.html">- Proste Działania</a>
        <a href="strona2.php">- Potęgowanie</a>
    </nav>

    <div id="main">
    <h1>POTĘGOWANIE</h1>
    <form method="post" action="strona2.php">
        Podaj podstawę potęgi:<input type="number" name="num1"><br>
        Podaj dodatni, całkowity wykładnik:<input type="number" name="num2"><br>
        <input type="submit" name="power" value="POTĘGOWANIE">  
    </form>
    <?php
        if(isset($_POST['power'])) {
            if(!empty($_POST)) {
                
            }
        }
    ?>
    </div>
</body>
</html>