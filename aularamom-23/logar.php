<?php
include('conexao.php');

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$query = $dbh->prepare('SELECT login, senha FROM usuarios WHERE login=:login AND senha=:senha');

$query->execute(array(
    ':login' => $login,
    ':senha' => $senha
));

$usuario = $query->fetch();

if(isset($usuario['login'])){
    echo 'sucesso';
}else{
    echo 'falha login';
}
?>