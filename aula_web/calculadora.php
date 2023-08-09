<?php
//Exibindo variavel superglobal $_GET
/*echo '<pre>';
print_r($_GET);
echo '</pre>';*/

//Acessar posicao especifica variavel superglobal que e um array

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$operacao = $_GET['calculadora'];

if($operacao == 'soma'){
    echo '<h1>Soma</h1>';
    echo $n1 + $n2;
}elseif($operacao == 'subtracao'){
    echo '<h1>Subtracao</h1>';
    echo $n1 - $n2;
}elseif($operacao == 'multiplicacao'){
    echo '<h1>Multiplicacao</h1>';
    echo $n1 * $n2;
}elseif($operacao == 'divisao'){
    echo '<h1>Divisao</h1>';
    echo $n1 / $n2;
}
?>