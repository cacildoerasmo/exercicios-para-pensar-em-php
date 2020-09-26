<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>

    <form method="get" action="exeML07.php">
    <input type="text" name="nome" placeholder="Nome do livro"/><br/>
    <input type="text" name="usuario" placeholder="Professor ou Aluno"/><br/>
    <input type="submit" value="Gerar"/><br/>
    </form>

    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"Nao Informado";
        $usuario = isset($_GET["usuario"])?$_GET["usuario"]:"Nao Informado";
        if($usuario == "Professor"){
                echo "Nome do livro <strong>$nome</strong>, Tens 10 dias para devolver o livro.";
        }else{
            if($usuario == "Aluno"){
                echo "Nome do livro <strong>$nome</strong>, Tens 3 dias para devolver o livro.";
            }else{
                echo "Por favor, <strong>Tente novamente!!</strong>";
            }
        }

    ?>
</body>
</html>