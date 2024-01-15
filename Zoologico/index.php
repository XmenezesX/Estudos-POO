<?php
include 'Animal.php';
include 'Cela.php';
include 'Leao.php';
include 'Zebra.php';
include 'Zoologico.php';

$leao = new Leao("miaauuu");
$zebra = new Zebra("iiiiiirrh");
    
$cela1 = new Cela($leao);
$cela2 = new Cela($zebra);
    
$zoologico = new Zoologico();
    
$zoologico->AdicionarCela($cela1);
$zoologico->AdicionarCela($cela2);
    
$zoologico->SonsDoZoologico();