<?php
//Cifrao sempre obrigatorio
//Aspas duplas ou simples possuem funcoes parecidas, mas as aspas duplas executam codigos internos
$n1 = 10;
$var2 = 20;
$var3 = 22.5;
$texto = '2023';

echo $var1 + $var2 + $var3;
echo '<br>';
echo $var1 * $var2;
echo '<br>';

//Para concatenar utilizar
echo $var1 . $texto;
echo '<br>';
//Soma de valores nao precisa converter
echo $var1 + $texto;
echo '<br>';

//Criando funcoes (metodos)
function somaDois($value1, $value2){
    return $value1 + $value2;
}

echo somaDois($var1, $var2);

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operacoes = $_GET['operacoes'];
?>