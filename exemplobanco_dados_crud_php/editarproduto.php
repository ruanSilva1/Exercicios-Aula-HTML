<?php
    include ('conexao.php');
    echo '<pre>';
    print_r ($_POST);
    echo '</pre>';

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $cat = $_POST['categoria'];
    $id = $_POST['idProd'];

    try{
    $query = $dbh->prepare('update produtos set nome=:nome, valor=:valor, quantidade=:quantidade, cat=:categoria where id=:idProd');

    $query->execute(array(
        ':nome' => $nome,
        ':valor' => $valor,
        ':quantidade' => $quantidade,
        ':categoria' => $cat,
        ':idProd' => $id
    ));

    echo 'produto editado!';

    echo '<br>';
    echo '<button>';
    echo '<a href="tabela_produtos.php">Acessar Tabela</a>';
    echo '</button>';
}catch(PDOException $e){
    echo 'Nenhum produto foi cadastrado!';
}
?>