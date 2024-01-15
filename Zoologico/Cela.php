<?php
include 'Animal.php';
class Cela {
        private Animal $animal;
        
        public function __construct(Animal $animal){
            $this->animal = $animal;
        }
        
        public function getSomAnimal(){
            return $this->animal->ReproduzirSom(); 
        }
    }