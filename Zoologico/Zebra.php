<?php
include "Animal.php";

class Zebra extends Animal{
    public function ReproduzirSom(){
        return $this->som;
    }
}