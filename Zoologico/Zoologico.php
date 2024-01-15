<?php
    
    class Animal {
        private $nome, $som;
        
        public function __construct($nome, $som){
            $this->nome = $nome;
            $this->som = $som;
        }
        
        public function ReproduzirSom(){
            return $this->nome . " faz " . $this->som;
        }
        
    }
    
    class Cela {
        private $animal;
        
        public function __construct(Animal $animal){
            $this->animal = $animal;
        }
        
        public function Som(){
            return $this->animal->ReproduzirSom(); 
        }
    }
    
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
                echo $cela->Som() . "\n";
            }
        }
    }
    
    $leao = new Animal("Leao", "miauuuu");
    $zebra = new Animal("Zebra", "Inhhrr");
    
    $cela1 = new Cela($leao);
    $cela2 = new Cela($zebra);
    
    $zoologico = new Zoologico();
    
    $zoologico->AdicionarCela($cela1);
    $zoologico->AdicionarCela($cela2);
    
    $zoologico->SonsDoZoologico();
?>