<?php
    function show() {
        echo "Funkcja show";
    }

    function showName($name) {
        return "Imię: ".$name;
    }

    function stringValidate($name, $length) {
        return substr(ucfirst(strtolower(trim($name))), 0, $length);
    }
?>