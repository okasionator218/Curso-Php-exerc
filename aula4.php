<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

        function calcularNumero($n1,$n2,$tipo) {
            switch ($tipo) {
                case '+':
                    
                    return $n1 + $n2;
                
                case '-':
                    
                    return $n1 - $n2;
                
                case '*':
                
                     return $n1*$n2;

                case '/':
                
                    return $n1/$n2;
                    
                default:

                    echo "Operação inválida";

            }
        }
    
    $n1 = 10;
    $n2 = 8;
    $tipo = '*';
    $resultado = calcularNumero($n1,$n2,$tipo);
    echo "O resultado da operação é: {$resultado}"

?>
<br>
<?php
function imprimePrimo() {
    for($i = 2; $i <= 100; $i++) { // Começa de 2, pois 0 e 1 não são primos
        $contagem = 0;
        for($j = 1; $j <= $i; $j++) { // Corrige o incremento para $j
            if($i % $j == 0) {
                $contagem++;
            }
        }
        if($contagem == 2) { // Um número é primo se tem exatamente 2 divisores
            echo $i . ",";
        }
    }
}

imprimePrimo();
?>

<?php
     
     function calculasoma($array){
        $soma = 0;
        for ($i=0; $i < 5; $i++){

            $soma += $array[$i];
            
        }
        return $soma;
     }
 

$array = [1,45,23,6,76,78];
$resultado = calculasoma($array);
 echo "O resultado da soma é: {$resultado}"
?>
   
<?php
    
    function calculafahren($tempc){
        
        $tempf = (9/5) * ($tempc) + 32;
        
        return $tempf;
    } 
    
        
$tempc = 100;
$resultado = calculafahren($tempc);
echo "O resultado em fahrenheit:{$resultado}"


?>

</body>
</html>