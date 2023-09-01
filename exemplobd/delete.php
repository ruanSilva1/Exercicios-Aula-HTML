<?php
include('conexao.php');
$idProd = $_GET['idProd'];
$query = $dbh->prepare('delete from produtos where id = :idProd');

$query->execute(array(
    ':idProd' => $idProd
));
?>