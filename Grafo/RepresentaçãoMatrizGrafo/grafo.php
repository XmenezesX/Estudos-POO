<?php
class Grafo {
    private $vertices;
    private $grafo;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        $this->grafo = array_fill(0, $vertices, array_fill(0, $vertices, 0));
    }

    public function adicionaAresta($u, $v) {
        $this->grafo[$u-1][$v-1] = 1;
        $this->grafo[$v-1][$u-1] = 1;
    }

    public function mostraMatriz() {
        echo '  ';
        for ($i = 0; $i < $this->vertices; $i++) {
            echo $i+1 . ' ';
        }
        echo "\n";

        for ($i = 0; $i < $this->vertices; $i++) {
            echo $i+1 . ' ';
            for ($j = 0; $j < $this->vertices; $j++) {
                echo $this->grafo[$i][$j] . ' ';
            }
            echo "\n";
        }
    }
}

?>