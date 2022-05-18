<?php

require_once "Human.php";
require_once "Hitung.php";

// $person = new Human();

// var_dump($person instanceof Human);

// $person->set_name("Olivie");

// echo $person->get_name();


class Pria extends Human {
    function salam() {
        return "Salam kenal nama saya ".$this->name;
    }
}

$orang = new Pria();

$orang->set_name("Axel");

echo $orang->get_name();
echo "<br/>";
echo $orang->salam();
echo "<br/>";

$hitungan = new Penjumlahan(10, 5);

echo $hitungan;