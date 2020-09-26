<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML06.php">
    <input type="number" name="numero" placeholder="Digite um numero"/>
    <input type="submit" value="Gerar"/>
    </form>
    <?php
        $numero = isset($_GET["numero"])?$_GET["numero"]:0;
        if($numero == 1){
            echo "Janeiro";
        }else{
            if($numero == 2){
                echo "Fevereiro";
            }else{
                if($numero == 3){
                    echo "Marco";
                }else{
                    if($numero == 4){
                        echo "Abril";
                    }else{
                        if($numero == 5){
                            echo "Maio";
                        }else{
                            if($numero == 6){
                                echo "Junho";
                            }else{
                                if($numero == 7){
                                    echo "Julho";
                                }else{
                                    if($numero == 8){
                                        echo "Agosto";
                                    }else{
                                        if($numero == 9){
                                            echo "Setembro";
                                        }else{
                                            if($numero == 10){
                                                echo "Outubro";
                                            }else{
                                                if($numero == 11){
                                                    echo "Novembro";
                                                }else{
                                                    if($numero == 12){
                                                        echo "Dezembro";
                                                    }else{
                                                        echo "Infelizmente nao existe mes com esse numero, <strong>Tente novamente!!</strong>";
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

    ?>
</body>
</html>