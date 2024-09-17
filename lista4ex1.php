<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Exerc.2</title>
</head>
<body>
<h2>Insira 10 números:</h2>
    <form method="POST" action="">
        <?php
        
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='text' name='numeros[]' required><br><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php

function retiradup($array) {
    $semdup = array();
    
    foreach ($array as $valor) {
        if (!in_array($valor, $semdup)) {
            $semdup[] = $valor;
        }
    }
    
    return $semdup;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $numeros = $_POST['numeros'];
    
    $numeros = array_map('trim', $numeros);
    $numeros = array_map('intval', $numeros);
    
    $semdup = retiradup($numeros);
    
    echo "<h2>Números Inseridos:</h2>";
    echo "<pre>" . print_r($numeros, true) . "</pre>";
    
    echo "<h2>Números Sem Duplicados:</h2>";
    echo "<pre>" . print_r($semdup, true) . "</pre>";
}
?>

</body>
</html>