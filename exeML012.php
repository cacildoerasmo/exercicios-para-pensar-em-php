<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML012.php">
    <input type="text" name="palavra" placeholder="Digite a palavra sonho"/>
    <input type="submit" value="Gerar">
    </form>

    <?php
    $palavra = isset($_GET["palavra"])?$_GET["palavra"]:"Nao informado";
    $palavra [2];
    $tam = strlen($palavra);
    for($x=1;$x<=$tam;$x++){
      
        }
  for($z=1;$z<=$x;$z++){
    printf("$palavra \n");
    
    }
   

    ?>
</body>
</html>