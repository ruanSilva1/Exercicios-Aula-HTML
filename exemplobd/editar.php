<?php
include('conexao.php');
$query = $dbh->prepare('select * from categoria');
$query->execute();

$categorias = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="pai">
        <div class="filho">
            <h1>Editar</h1>
            <form class="form" action="editarproduto.php" method="post">
                <input type="hidden" name="idProd" value="<?php echo $_GET['idProd'];?>">
                <label for="">Nome Produto</label><br>
                <input type="text" name="nome"><br>
                <label class="label" for="">Valor</label><br>
                <input type="text" name="valor"><br>
                <label class="label" for="">Quantidade</label><br>
                <input type="text" name="quantidade"><br>
                <label for="">Categoria</label>
                <select name="categoria" id="">
                    <?php
                    foreach($categorias as $linha){
                        echo '<option value="'.$linha['cod'].'">'.$linha['categoria'].'</option>';
                    }
                    ?>
                </select>
                <input type="submit" value="Atualizar">
            </form>
        </div>
    </div>
</body>

</html>