<?php 
include 'grafo.php';

class Vertice {
    public $nome;
    public $arestas = [];

    public function __construct($nome) {
        $this->$nome = $nome;
    }

    public function adicionarAresta($destino) {
        $this->arestas[] = new Aresta($this, $destino);
    }
}
?>