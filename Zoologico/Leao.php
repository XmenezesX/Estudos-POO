<?php
include 'Animal.php';

class Leao extends Animal{
    public function __construct()
    {
        $this->som = "miauuu";
    }

    public function setSomLeao($novoSom){
        $this->som = $novoSom;
    }

    public function ReproduzirSom(){
        return $this->som;
    }
}