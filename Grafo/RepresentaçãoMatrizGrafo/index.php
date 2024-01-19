<?php 
include 'grafo.php';

$novoGrafo = new Grafo(5);

$novoGrafo->adicionaAresta(1,5);
$novoGrafo->adicionaAresta(1,2);
$novoGrafo->adicionaAresta(5,2);
$novoGrafo->adicionaAresta(3,2);
$novoGrafo->adicionaAresta(1,2);
$novoGrafo->adicionaAresta(4,2);
$novoGrafo->adicionaAresta(4,3);
$novoGrafo->adicionaAresta(5,4);

$novoGrafo->mostraMatriz();
?>