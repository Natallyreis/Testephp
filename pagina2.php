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
         //declaração de variaveis
        $hora = date("H");

        if($hora < 12){
            echo "<p> ".$hora. "hr Boa dia!</p>";
        } else if($hora < 18){
            echo "<p> ".$hora. "hr Boa tarde!</p>";
        } else {
            echo "<p> ".$hora. "hr Boa noite à todos!</p>";
        }
           
    ?>
</body>
</html>