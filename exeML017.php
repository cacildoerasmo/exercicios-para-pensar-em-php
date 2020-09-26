<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
        <!--<form method="get"action="exeML017.php">
        <input type="number" name="numero" placeholder="Digite numeros"/>
        <input type="submit" values="Gerir"/>
        </form>-->
    <?php
    /*$numero = isset($_GET["numero"])?$_GET["numero"]:0;*/
    $vetor = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
    $maior = 0;
    $menor = 0;
    $contador = 0;
    $media =0;
    $soma=0;
    $tam=0;
    /*
    echo "Maior valor: ".max($vetor);
    echo "<br/>Menor valor: ".min($vetor);
    foreach($vetor as $numero){
        if($numero%2==0){
            $contador++;

        }
    }
    $porsentagemPares = ($contador/20)*100;
    echo "<br/>Porcentagem de pares ".$porsentagemPares. "%";
     $soma = array_sum($vetor);
    $media = ($soma/20);
    echo "<br/>A media do vetor e ".$media;   */ 
    
    

    for($i=0;$i<20;$i++){
        echo $vetor[$i];
        if($i==0){
            $maior=$vetor[$i];
            $menor=$vetor[$i];
        }
        if($vetor[$i]>$maior){
            $maior=$vetor[$i];
            
        }else{
            if($vetor[$i]<$menor){
                $menor=$vetor[$i];
            }
        }
    }
    foreach($vetor as $numero){
        if($numero%2==0){
            $contador++;

        }
    }
    $porsentagem = ($contador/20)*100;
    
    echo "<br/>O maior valor e ",$maior;
    echo "<br/>O menor valor e ",$menor;
    echo "<br/>Porcentagem de pares ".$porsentagem. "%";
    $soma = array_sum($vetor);
    $media = ($soma/20);
    echo "<br/>A media de elementos do vetor e ".$media;  
    ?>
</body>
</html>