<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = 25;
    $mes = 9;

    switch($mes){
        case 1:
        case 2:
        case 3:
            if($mes == 3 and $dia >= 20){
                echo "<p>Outono<p>";
                echo "<img src='outono.jpg'>";
            
            }else{
                echo "<p>Verão</p>";
            }
            break;
        case 4:
        case 5:
        case 6:
            if($mes == 6 and $dia >= 21){
                echo "<p>Inverno</p>";
                echo "<img src='inverno.jpg'>";
            }else{
                echo "<p>Outono</p>";
            }
            break;
        case 7:
        case 8:
        case 9:
            if($mes == 9 and $dia >= 23){
                echo "<p>Primaveira</p>";
                echo "<img src='primavera.jpg'>";
            }else{
                echo "<p>Inverno</p>";
            }
            break;
        case 10:
        case 11:
        case 12:
            if($mes == 12 and $dia >= 22){
                echo "<p>Verão</p>";
                echo "<img src='verao.jpg'>";
            }else{
                echo "<p>Primaveira</p>";
            }
            break;
        
        case 13:
            if($mes > 13){
                echo "<p>Informe o mês corretamente</p>";
            }
            break;
        }
   

         
    ?>
</body>
</html>