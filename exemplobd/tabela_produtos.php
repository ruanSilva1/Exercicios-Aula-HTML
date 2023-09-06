<?php
include('conexao.php');
$query = $dbh->prepare('select * from produtos');
$query->execute();

$produtos = $query->fetchAll();


$query = $dbh->prepare('select * from categoria');
$query->execute();

$categoria = $query->fetchAll();
/*echo '<pre>';
print_r($produtos);
echo '<pre>';*/
?>

<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <title>Tabela</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style.css">

        <style>
            table{
                border:2px solid;
            }
            tr:nth-child(even){
                background-color: #EDE2CA;
                color: black;
                text-align:center;
            }

            tr{
                text-align:center;
                border:2px solid;
            }

            button{
                margin-top:20px;
                margin-left:150px;
            }
            td{
                border:2px solid;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($produtos as $produto){
                    echo '<tr>';
                    echo '<td>'.$produto['id'].'</td>';
                    echo '<td>'.$produto['nome'].'</td>';
                    echo '<td>'.$produto['valor'].'</td>';
                    echo '<td>'.$produto['quantidade'].'</td>';
                    echo '<td>'.$produto['cat'].'</td>';
                    echo '<td><a href="editar.php?idProd='.$produto['id'].'">Editar</a></td>';
                    echo '<td><a href="delete.php?idProd='.$produto['id'].'">Deletar</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <button><a href="cad.php">Voltar</a></button>
    </body>
</html>