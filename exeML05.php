<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <form method="get" action="exeML05.php">
    <input type="number" name="numero1" placeholder="Primeiro numero"/><br/>
    <input type="number" name="numero2" placeholder="Segundo numero"/><br/>
    <input type="number" name="numero3" placeholder="Terceiro numero"/><br/>
    <input type="submit" value="Gerar"/>
    </form>
    <?php
        $numero1 = isset($_GET["numero1"])?$_GET["numero1"]:0;
        $numero2 = isset($_GET["numero2"])?$_GET["numero2"]:0;
        $numero3 = isset($_GET["numero3"])?$_GET["numero3"]:0;
        
        if($numero1 == $numero2 && $numero1 == $numero3){
            echo "<strong>Equilatero</strong>";//possui todos lados iguais

        }else{
            if($numero1 == $numero2 || $numero1 == $numero3 || $numero2 == $numero3){
                echo "<strong>Isosceles</strong>";//pelomenos dois dos seus tres lados forem iguais
            }else{
                echo "<strong>Escaleno</strong>";//as medidas dos tres lados sao diferentes
            }
        }

    ?>
</body>
</html>
