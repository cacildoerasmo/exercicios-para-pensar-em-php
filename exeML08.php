<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML08.php">
    <input type="number" name="numero" placeholder="Digite um numero"/>
    <input type="submit" value="Gerar"/>
    </form>

    <?php
    $numero = isset($_GET["numero"])?$_GET["numero"]:0;
    $x = 1;
    for($x;$x <= $numero;$x++){
        echo "Os numeros sao: $x<br/>";
    }
        $produto = $numero * $x;
        echo "O seu produto e: $produto<br/>";
    
    ?>
</body>
</html>