<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #Exerc. 1

    $numeros = array(1,2,3,4,5,6,7,8,9,10);
    echo "O primeiro número é: $numeros[0]</br>";
    echo "O último número é: $numeros[9]";

    #Exerc. 2


     ?>
    <?php
    #Exerc. 2

    $numeros = array(1,2,3,4,5,6,7,8,9,10);

    $soma = 0;
  
    for($i = 0; $i < 10; $i++) {
        $soma+=$numeros[$i];
}

    echo "Soma: $soma";

    ?>
    <?php
    #Exerc. 3

    $numeros = array(23,67,12,89,34,56,78,90,3,45);
    
    #Exemplo de Bubble sort

    for($i=0; $i<10; $i++){
        for($j=0; $j <10-$i-1; $j++){
            if ($numeros[$j] > $numeros[$j+1]) {
                $temp = $numeros[$j];
                $numeros[$j] = $numeros[$j+1];
                $numeros[$j+1] = $temp;
            }
         }
    }

    echo "O menor número é: $numeros[0]";
    echo "O maior número é: $numeros[9]";


    ?>
    <?php
    #Exerc. 4 
    
    $palavra = array('P', 'R', 'O', 'G', 'R','A','M','A','R');
    for($i=8; $i >= 0; $i--){
        
        echo $palavra[$i];
    }
    ?>
</body>
</html>