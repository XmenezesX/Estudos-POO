<?php 

class Animal {
    protected $som;

    public function __construct($som)
    {
        $this->som = $som;
    }

    public function ReproduzirSom(){
        return $this->som;
    }
}