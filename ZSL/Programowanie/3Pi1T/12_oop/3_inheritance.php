<?php

class Animal{
    public $name, $weight;

    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function getData()
    {
        return "Imię: ".$this->name.", waga: ".$this->weight."<br>";
    }
}

class Mammal extends Animal{
    public $numberOfLegs;

    public function getNumberOfLegs()
    {
        return $this->numberOfLegs;
    }
    
}

class Fish extends Animal{
    public $numberOfFins;
    public function __construct($numberOfFins)
    {
        
    }
    public function getNumberOfFins()
    {
        return $this->numberOfFins;
    }
}

$pies1 = new Mammal("Carlos", "50kg");

echo $pies1->getData();
$pies1->numberOfLegs = 4;
echo "Ilość łap: ".$pies1->getNumberOfLegs()."<br>";

?>
