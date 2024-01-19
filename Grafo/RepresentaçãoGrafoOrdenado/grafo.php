<?php 
class Grafo {
    public $vertices = [];

    public function adicionarVertice($id) {
        $vertice = new Vertice($id);
        $this->vertices[] = $vertice;
        return $vertice;
    }
}
?>