<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML03.php">
        <input type="text" name="nome" placeholder="Nome"/><br/>
        <input type="text" name="sexo" placeholder="Sexo"/><br/>
        <input type="number" name="idade" placeholder="Idade"/><br/>
        <input type="submit" value="Inserir Dados"/>
    </form>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Sem nome]";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
    $idade = isset($_GET["idade"])?$_GET["idade"]:0;
        if($sexo == "F" && $idade < 25){
            echo "$nome, <strong>ACEITA</strong>";
        }else{
            echo "$nome, <strong>NAO ACEITA</strong>";
        }


    ?>
</body>
</html>