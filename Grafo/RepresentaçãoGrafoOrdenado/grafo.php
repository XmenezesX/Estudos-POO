<?php 
class Grafo {
    public $vertices = [];
    //testando
    public function adicionarVertice($nome) {
        $vertice = new Vertice($nome);
        $this->vertices[] = $vertice;
        return $vertice;
    }
}
?>