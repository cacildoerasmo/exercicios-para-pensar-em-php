<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML02.php">
<input type="number" name="operacao"/>
<input type="submit" value="Gerar"/>
</form>
    <?php
        $numero = isset($_GET["operacao"])?$_GET["operacao"]:0;
        if($numero%10 == 0){
            echo "E divisivel por 10";
        }else{
            if($numero%5 == 0){
                echo "E divisivel por 5";
            }else{
                if($numero%2 == 0){
                    echo "E divisivel por 2";
                }
                else
                        echo "Nao e divisivel por 10,5, e nem por 2!!";
            }
        }

    ?>
    
</body>
</html>