<?php
    include "Cela.php";
    class Zoologico{
        private $celas;
        
        public function __construct(){
            $this->celas = [];
        }
        
        public function AdicionarCela(Cela $cela){
            $this->celas[] = $cela; 
        }
        
        public function SonsDoZoologico(){
            foreach ($this->celas as $cela){
                echo $cela->getSomAnimal() . "\n";
            }
        }
    }
    
    
?>