<?php
    include ('conexao.php');
    echo '<pre>';
    print_r ($_POST);
    echo '</pre>';

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $idProd = $_POST['idProd'];

    $query = $dbh->prepare('update produtos set nome=:nome, valor=:valor, quantidade=:quantidade where id=:idProd');

    $query->execute(array(
        ':nome' => $nome,
        ':valor' => $valor,
        ':quantidade' => $quantidade,
        ':idProd' => $idProd

    ));
?>