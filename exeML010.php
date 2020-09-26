<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML010.php">
    <input type="number" name="numero" placeholder="Digite um numero positivo ou negativo"/>
    <input type="submit" value="Gerar"/>
    </form>

    <?php
    $numero = isset($_GET["numero"])?$_GET["numero"]:0;
    $somapositivos = 0;
    $totalnegativos = 0;
    
    for($i = 0;$i<=20;$i++){
        if($numero >= 0){
            $somapositivos = $somapositivos + $numero;
            
        }else{
            $totalnegativos = $totalnegativos +1;
    
        }
    }
echo "Soma dos numeros positivos $somapositivos<br/>";
echo "Total dos numeros negativos $totalnegativos<br/>";
    /*
    $vetor = array(1,-1,2,-2,3,-3,4,-4,5,-5,6,-6,7,-7,8,-8,9,-9,10,-10);
    $pos=array();
    $neg=array();
    foreach($vetor as $vet){
        ($vet<0 ? $neg[]=$vet : $pos[]=$vet);
    }
    echo "Sao estes vetores positivos<br/>";
    print_r($pos);
    echo "Sao estes vetores negativos<br/>";
    print_r($neg);
    echo "<br/>";
    $total = array_sum($pos);
    $count = count($neg);

    echo "Soma dos positivos";
    print_r($total);
    echo "Quantidade de negativos";
    print_r($count);*/
    ?>
</body>
</html>