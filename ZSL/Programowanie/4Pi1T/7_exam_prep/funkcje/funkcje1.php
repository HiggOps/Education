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
        <p>Height definer</p>
        <input type="text" name="height" placeholder="Wzrost (cm)">
        <input type="submit" value="Submit">
    </form>
    <?php

    /*
        WZROST: wczyta od użytkownika wzrost, następnie wypisze na ekran
        komunikat klasyfikujący wzrost do jednej z trzech kategorii: < 150cm
        niski, > 180cm wysoki lub w pozostałych przypadkach średni.
    */
    function wzrost(Int $height){
        if ($height < 150)
            return "Niski";
        elseif ($height > 180)
            return "Wysoki";
        else
            return "Średni";
    }

    if(!empty($_POST['height'])){
        echo "Twój wzrost jest " . wzrost($_POST['height']);
    }
    ?>

    <form method="POST">
        <p> BMI calculator </p>
        <input type="number" name="height2" placeholder="Wzrost (cm)">
        <input type="number" name="weight" placeholder="Waga (kg)">
        <input type="submit" value="Submit">
    </form>
    <?php
    /*
        BMI: wczyta od użytkownika wartość wzrostu (cm) oraz wagi (kg),
        następnie obliczy wartość BMI (kg/m2). W kontenerze (div) program
        umieści wartość BMI wraz z komentarzem:
        – BMI < 18,5: za mało!
        – BMI > 25: za dużo!
        – pomiędzy: OK!
    */

    function BMI($height, $weight){
        $meters = $height / 100;
        $bmi = $weight / pow($meters,2);
        if ($bmi < 18.5)
            return "<div>BMI = $bmi za mało!</div>";
        elseif ($bmi > 25)
            return "<div>BMI = $bmi za dużo!</div>";
        else 
            return "<div>BMI = $bmi OK!</div>";
    }

    if(!empty($_POST['height2']) && !empty($_POST['weight'])){
        echo "<div>". BMI($_POST['height2'],$_POST['weight']) ."<div>";
    }
    ?>
</body>
</html>


