<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratica-php</title>
</head>
<body>
    <?php
    $chico = 1.50;
    $juca = 1.10;
    $anos = 0;
    while($juca<=$chico){
    $chico =$chico+0.02;
    $juca =$juca+0.03;
    $anos = $anos +1; 
       }
    echo "Serao necessarios <strong>$anos</strong> anos.";
    
    ?>
</body>
</html>