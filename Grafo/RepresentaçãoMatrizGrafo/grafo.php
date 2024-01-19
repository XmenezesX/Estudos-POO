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
    
    public function eVizinho($u,$v){
        if($this->grafo[$u-1][$v-1]==1){
            echo "$u e $v são vizinhos";
        }else{
            echo "$u e $v não são vizinhos";
        }
    }
    
    public function todosVizinhos($u){
        $vizinhos = [];
        for($i=0;$i<$this->vertices;$i++){
            if($this->grafo[$i][$u-1]==1)
            {
                $vizinhos[] = $i+1;
            }
        }
        
        if(empty($vizinhos)){
            echo "$u não possui vizinhos.\n";
        }else{
            foreach($vizinhos as $valor){
                echo $valor . ' ';
            }
            echo "são vizinhos de $u\n";
        }
    }
}
?>