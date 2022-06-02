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
    public function setNumberOfLegs(int $legs)
    {
        $this->numberOfLegs = $legs;
    }
    
}

class Fish extends Animal{
    public $numberOfFins;
    
    public function getNumberOfFins()
    {
        return $this->numberOfFins;
    }
    public function setNumberOfFins(int $fins)
    {
        $this->numberOfFins = $fins;
    }
}

$pies1 = new Mammal("Carlos", "50kg");

echo $pies1->getData();
#$pies1->numberOfLegs = 4;
$pies1->setNumberOfLegs(4);
echo "Ilość łap: ".$pies1->getNumberOfLegs()."<br>";

$ryba1 = new Fish("Oskar", "5kg");

echo $ryba1->getData();

$ryba1->setNumberOfFins(5);
echo "Ilość płetw: ".$ryba1->getNumberOfFins()."<br>"
?>
