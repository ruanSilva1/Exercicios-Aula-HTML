<?php
include('conexao.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

$login = $_POST["login"];
$senha = $_POST["senha"];

$query = $dbh->prepare("SELECT login, senha FROM usuarios WHERE login = :login AND senha = :senha");

$query->execute(array(
    ":login" => $login,
    ":senha" => $senha
));

$usuario = $query->fetch();

echo $usuario;
?>