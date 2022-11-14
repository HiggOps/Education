<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Więckowski Łukasz 4Pi1T">
    <title>Klasy</title>
</head>
<body>
<?php

class Person{
    public $name, $surname, $age, $balance;

    public function __construct($name, $surname, $age, $balance)
    {
        echo "Wywołanie konstruktora<br>";
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->balance = $balance;
    }
    
    public function setAge_Balance($age, $balance)
    {
        $this->age = $age;
        $this->balance = $balance;
    }

    public function getData()
    {
        return "<br>Dane: <br>".
        $this->name." ".$this->surname.
        "<br> Wiek: ".$this->age."<br>Stan konta: ".$this->balance."<br>";
    }

    public function Kowalski_premia()
    {
        if ($this->surname == "Kowalski") {
            $this->balance += $this->age * 1000;
        }
    }
}

    $worker1 = new Person("Krystian", "Nowak", 49, 100000);
    $worker2 = new Person("Jan", "Kowalski", 45, 1000);

    echo $worker1->getData();

    $worker1->setAge_Balance(20, 3000);

    echo $worker1->getData();

    echo $worker2->getData();

    $worker2->Kowalski_premia();

    echo $worker2->getData();

    ?>
</body>
</html>