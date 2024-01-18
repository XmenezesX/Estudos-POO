<?php

echo "Digite um numero inteiro de 3 digitos:";
$str = readline();
$numb = (int) $str;

while($numb>999 || $numb<100){
    echo "Erro! Digite um numero inteiro de 3 digitos:";
    $str = readline();
    $numb = (int) $str;
}

$unidade =(int) ($numb/100);
$dezena = (int) (($numb%100)/10)*10;
$centena = (($numb%100)%10)*100;

$numbInvertido = $centena + $dezena + $unidade;
echo "Numero Digitado:$numb\nNumero Invertido:$numbInvertido\n";
?>