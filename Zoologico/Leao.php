<?php
include 'Animal.php';

class Leao extends Animal{
    public function ReproduzirSom(){
        return $this->som;
    }
}