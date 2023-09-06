<?php
include('conexao.php');

if(isset($_POST['nome'], $_POST['valor'], $_POST['quantidade'], $_POST['categoria']) && ($_POST['nome']!='') && ($_POST['valor']!='') && ($_POST['quantidade']!='') && ($_POST['categoria']!='')){
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $cat = $_POST['categoria'];
}else{
    echo 'variaveis nao definidas';
    die();
}

try{
    $query = $dbh->prepare('insert into produtos(nome, valor, quantidade, cat)values(:nome, :valor, :quantidade, :categoria);');

$query->execute(array(
    ':nome' => $nome,
    ':valor' => $valor,
    ':quantidade' => $quantidade,
    ':categoria' => $cat
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