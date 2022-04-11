<?php
class User{
    // właściwości
    public $name, $surname;

    public function showData(){
        echo "Imię i nazwisko: $this->$name $this-> $surname";
    }
}


$nowak = new User();
$nowak->name = "Janusz";
$nowak->surname = "Kowalski";

echo $nowak->name;
$nowak->showData();


?>