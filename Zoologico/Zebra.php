<?php
include "Animal.php";

class Zebra extends Animal{
    public function __construct()
    {
        $this->som = "iiiinhrr";
    }

    public function setSomZebra($novoSom){
        $this->som = $novoSom;
    }

    public function ReproduzirSom(){
        return $this->som;
    }
}