<?php
include('conexao.php');

$query = $dbh->prepare('select * from categoria');
$query->execute();

$categorias = $query->fetchAll();

//echo '<pre>';
//print_r($categorias);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    label.v{
        margin-left: 180px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
    }
    label.q{
        margin-left: 161px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;
    }
</style>
<body>
    <div class="main">
        <div class="prc">
            <h1>Cadastro de produto</h1>
            <form class="form" action="cadastro.php" method="post">
                <label class="label" for="">Nome Produto</label><br>
                <input class="input" type="text" name="nome"><br>
                <label class="v" class="label" for="">Valor</label><br>
                <input class="input" type="text" name="valor"><br>
                <label class="q" class="label" for="">Quantidade</label><br>
                <input class="input" type="text" name="quantidade"><br>
                <label for="">Categoria</label>
                <select name="categoria" id="">
                    <?php
                    foreach($categorias as $linha){
                        echo '<option value="'.$linha['cod'].'">'.$linha['categoria'].'</option>';
                    }
                    ?>
                </select>
                <input class="button" type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>