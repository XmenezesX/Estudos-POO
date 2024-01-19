<?php 
include 'grafo.php';

$grafo = new Grafo();

$vertice1 = $grafo->adicionarVertice('1');
$vertice2 = $grafo->adicionarVertice('2');
$vertice3 = $grafo->adicionarVertice('4');

$vertice1->adicionarAresta($vertice2);
$vertice1->adicionarAresta($vertice3);
$vertice2->adicionarAresta($vertice3);
$vertice3->adicionarAresta($vertice1);
