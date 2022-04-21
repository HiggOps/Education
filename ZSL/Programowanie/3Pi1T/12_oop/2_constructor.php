<?php

class Person{
    public $name, $surname, $city;

    public function __construct($name, $surname, $city="Poznań")
    {
        echo "Wywołanie konstruktora<br>";
        $this->name = $name;
        $this->surname = $surname;
        $this->city = $city;
    }
    
    public function __destruct()
    {
        echo "Obiekt został usunięty";
    }

    public function getData()
    {
        return "<hr>Dane: <br>".$this->name." ".
        $this->surname."<br>Miasto: ".$this->city."<hr>";
    }
}

    $worker1 = new Person("Krystian", "Nowak");

    echo $worker1->name;

    $worker1->name = "Jan";

    echo $worker1->name."<br>";

    echo $worker1->getData();

    unset($worker1);
    echo "Koniec kodu<br>"; 

    ?>