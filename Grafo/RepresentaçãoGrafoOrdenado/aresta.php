<?php 
include 'vertice.php';

class Aresta {
    public $origem;
    public $destino;

    public function __construct($origem, $destino) {
        $this->origem = $origem;
        $this->destino = $destino;
    }
}
?>