<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //exerc. 1
    $n1 = 2;
    $n2 = 5;
    $n3 = 7;

    $maiorn = 0;
    $menorn = 0;

    if (($n1 > $n2)){
        $maiorn = $n1;
        $menorn = $n2;
        
    } if (($n2 > $n1)){
        $maiorn = $n2;
        $menorn = $n1;
    }

    if (($n3 > $maiorn )){
        $maiorn = $n3;
    }

    echo "O maior número é: $maiorn<br>";
    echo "O menor número é: $menorn<br>";
    ?>

    <?php
    $n1 = 7;
    $n2 = 59;
    $n3 = 2;

    $i = 0;

    if (($n1 < $n2)){
        $n1 = $n1;
        $n2 = $n2;
        
    } 
       
    elseif (($n2 < $n1)){
        $i = $n2;
        $n2 = $n1;
        $n1 = $i;
    }

    if (($n3 > $n1 )){
        $n1 = $n1;
        $n2 = $n2;
        $n3 = $n3;

    } 
    
    elseif (($n3 < $n2)){
        $i = $n3;
        $n3 = $n2;
        $n2 = $i;
    }

    if (($n1 < $n2)){
        $n1 = $n1;
        $n2 = $n2;
        
    } 
       
    elseif (($n2 < $n1)){
        $i = $n2;
        $n2 = $n1;
        $n1 = $i;
    }

   
    echo "Ordem crescente: $n1, $n2, $n3 <br>"

    ?>



    <?php // exerc. 3
    $n1 = 7;
    $n2 = 59;
    $n3 = 2;

    $i = 0;

    if (($n1 > $n2)){
        $n1 = $n1;
        $n2 = $n2;
        
    } 
       
    elseif (($n2 > $n1)){
        $i = $n2;
        $n2 = $n1;
        $n1 = $i;
    }

    if (($n3 < $n1 )){
        $n1 = $n1;
        $n2 = $n2;
        $n3 = $n3;

    } elseif (($n3 > $n1)){
        $i = $n3;
        $n3 = $n1;
        $n1 = $i;
    }

    echo "Ordem decrescente: $n1, $n2, $n3 <br>"

    ?>

    <?php // exerc. 4
    $func1 = 200;
    $func2 = 350;
    $func3 = 800;
    $func4 = 1600;


    $r1 = ($func1*1.2);
    $r2 = ($func2*1.15);
    $r3 = ($func3*1.1);
    $r4 = ($func4*1.05);

    $d1 = ($r1 - $func1);
    $d2 = ($r2 - $func2);
    $d3 = ($r3 - $func3);
    $d4 = ($r4 - $func4);

    if (($func1 < 280)) {
        echo "O novo salário: $r1<br>";
        echo "O sálario antigo: $func1<br>";
        echo "O valor do reajuste: $d1<br>";
        echo "O pencentual de reajuste foi de 20%<br>";
        
    }

    if (($func2 > 280 && $func2 < 700)) {
        echo "O novo salário: $r2<br>";
        echo "O sálario antigo: $func2<br>";
        echo "O valor do reajuste: $d2<br>";
        echo "O pencentual de reajuste foi de 15%<br>";

    }

    if (($func3 > 700 && $func3 < 1500)) {
        echo "O novo salário: $r3<br>";
        echo "O sálario antigo: $func3<br>";
        echo "O valor do reajuste: $d3<br>";
        echo "O pencentual de reajuste foi de 10%<br>";

    }

    
    if (($func4 > 1500)) {
        echo "O novo salário: $r4<br>";
        echo "O sálario antigo: $func4<br>";
        echo "O valor do reajuste: $d4<br>";
        echo "O pencentual de reajuste foi de 5%<br>";

    }


    ?>
    <?php // exerc. 5
    $idade = 18; 
    if ($idade >= 5 && $idade <= 10) {
        echo "Categoria: Infantil";
    } elseif ($idade >= 11 && $idade <= 15) {
        echo "Categoria: Juvenil";
    } elseif ($idade >= 16 && $idade <= 20) {
        echo "Categoria: Junior";
    } elseif ($idade >= 21 && $idade <= 25) {
        echo "Categoria: Profissional";
    } else {
        echo "Fora da faixa etária das categorias";
    }
    ?>
     <?php // exerc. 6
    $valor = 1;
    $unidade = "km"; 

    switch($unidade) {
        case "km":
            echo "$valor km = " . ($valor * 1000) . " m";
            break;
        case "m":
            echo "$valor m = " . $valor . " m";
            break;
        case "cm":
            echo "$valor cm = " . ($valor / 100) . " m";
            break;
        case "mm":
            echo "$valor mm = " . ($valor / 1000) . " m";
            break;
        default:
            echo "Unidade desconhecida";
    }
    ?>
    <?php // exerc. 7
    $a = 0;
    $b = 1;

    echo "$a, $b";
    while ($b <= 500) {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
    <?php // exerc. 8
$numero = 5; 
$fatorial = 1;
$i = $numero;

while ($i > 0) {
    $fatorial *= $i;
    $i--;
}

echo "$numero! = $fatorial";
?>
    
    <?php // exerc. 9
    $populacaoA = 80000;
    $populacaoB = 200000;
    $anos = 0;

    while ($populacaoA <= $populacaoB) {
        $populacaoA *= 1.03;
        $populacaoB *= 1.015;
        $anos++;
    }

    echo "Serão necessários $anos anos para que a população do país A ultrapasse ou iguale a população do país B.";
    ?>
    
    <?php // exerc. 10
$numeros = [4, 8, 15, 16, 23]; 
$soma = 0;
$i = 0;

while ($i < count($numeros)) {
    $soma += $numeros[$i];
    $i++;
}

$media = $soma / count($numeros);

echo "Soma: $soma<br>";
echo "Média: $media";
?>
    <?php // exerc. 11
$numero = 5; 
$i = 1;

echo "Tabuada de $numero:<br>";
while ($i <= 10) {
    echo "$numero X $i = " . ($numero * $i) . "<br>";
    $i++;
}
?>
</body>
</html>
