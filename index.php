<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = 3.14;
    $n2 = 3.0;

    $resultado = (($n1+$n2)*($n1-$n2))/4;

    echo "O resultado é: $resultado";
    ?>

    <?php

    $numero = 7;

    if(($numero)%2 == 0) {
        echo "Esse número é par";

    }

    else {
        echo "Esse número é ímpar";
    }
    ?>

    <?php

    $dia = 2;

    switch ($dia) {
        case ($dia == 1):
            echo "O dia é segunda";
            break;
                 

        case ($dia == 2):
            echo "O dia é terça";
            break;        
          
        case ($dia == 3):
            echo "O dia é quarta";
            break;
            
        case ($dia == 4):
            echo "O dia é quinta";
            break;
        
        case ($dia == 5):
            echo "O dia é sexta";
            break;
                    
        case ($dia == 6):
            echo "O dia é sábado";
            break;
        
        case ($dia == 7):
            echo "O dia é domingo";
            break;

        default:
            echo "O dia é inválido";
            break;
    }
    ?>

</body>
</html>