<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
<form method="get" action="exeML015.php">
    <input type="number" name="numero" placeholder="Digite um valor da massa..."/>
    <input type="submit" value="Gerar"/>
    </form>
    <?php
    $massa = isset($_GET["numero"])?$_GET["numero"]:0;
    $t=0;
    while($massa>0.10){
        $massa =($massa*0.25);
        $t++;
    }
    $t =$t*30;
    echo "O tempo necessario e $t";
    ?>

</body>
</html>