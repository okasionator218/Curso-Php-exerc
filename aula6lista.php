<?php

    $num1 = (float)$_GET['num1'];
    $num2 = (float)$_GET['num2'];
   
    $soma = $num1 + $num2;
    
    echo "A soma de $num1 e $num2 é: $soma";

?>

<?php

    $fatorialNum = (int)$_GET['fatorial'];
    $fatorial = 1;

    
    for ($i = 1; $i <= $fatorialNum; $i++) {
        $fatorial *= $i;
    }
    echo "O fatorial de $fatorialNum é: $fatorial";


?>

<?php

    $nome = $_GET['nome'];
    $anoNascimento = (int)$_GET['ano_nascimento'];
    
    $idade = date("Y") - $anoNascimento;
    
    echo "$nome tem $idade anos.";

?>