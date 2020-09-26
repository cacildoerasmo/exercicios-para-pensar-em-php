<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML013.php">
    <input type="number" name="numero" placeholder="Digite um numero"/>
    <input type="submit" value="Gerar"/>
    </form>

    <?php
    $numero = isset($_GET["numero"])?$_GET["numero"]:0;
    $count = 0;
    do{
        print($numero);
        if(($numero > 100) && ($numero < 200)){
            $count++;
        }
    }
    while($numero !=0);
        printf("Foram digitados valores no intervalo $count");
    
    ?>
</body>
</html>