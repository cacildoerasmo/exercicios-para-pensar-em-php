<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML011.php">
    <input type="number" name="numero" placeholder="Digite um numero..."/>
    <input type="submit" values="Gerar">
    </form>
    <?php
        $numero = isset($_GET["numero"])?$_GET["numero"]:0;
        for($i=1;$i<12;$i++){
                $pr = $numero * $i;
                echo "$numero x $i = $pr<br/>";
            
        }
    ?>
</body>
</html>