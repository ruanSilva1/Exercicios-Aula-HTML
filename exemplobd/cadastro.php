<?php
include('conexao.php');

if(isset($_POST['nome'], $_POST['valor'], $_POST['quantidade']) && ($_POST['nome']!='') && ($_POST['valor']!='') && ($_POST['quantidade']!='')){
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
}else{
    echo 'variaveis nao definidas';
    die();
}

try{
    $query = $dbh->prepare('insert into produtos(nome, valor, quantidade)values(:nome, :valor, :quantidade);');

$query->execute(array(
    ':nome' => $nome,
    ':valor' => $valor,
    ':quantidade' => $quantidade
));

echo 'produto cadastrado!';
echo '<br>';
echo '<button>';
echo '<a href="tabela_produtos.php">Acessar Tabela</a>';
echo '</button>';

}catch(PDOException $e){

    echo 'Nenhum produto foi cadastrado!';
}
?>