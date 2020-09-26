<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>

<form method="get" action="exeML016.php">
    <input type="number" name="numero" placeholder="Digite um numero"/>
    <input type="submit" value="Gerar"/>
    </form>

    <?php
    $numero = array(15);
     
    $cont = 0;
    
       for($i=1;$i<15;$i++){
      $numero[$i] = isset($_GET["numero"])?$_GET["numero"]:0;
       }
       for($i=1;$i<15;$i++){
        if($numero[$i]%2==0){
            echo "<br/>O numero e par ", $numero[$i];
        }else{
            if($numero[$i]%2==1){
            echo "<br/>O numero e impar ", $numero[$i];
            }else{
                echo "[ERRO] Tente novamente!!";
            }
            
        }
       }
    ?>
</body>
</html>