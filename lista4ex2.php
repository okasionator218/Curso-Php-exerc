<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Exerc. 2</title>
</head>
<body>

<?php



echo '<h2>Insira a quantidade de números:</h2>';
echo '<form method="POST" action="">';
echo '<input type="number" name="quantidade" min="1" required>';
echo '<input type="submit" value="Enviar">';
echo '</form>';


if (isset($_POST['quantidade'])) {
    $quantidade = intval($_POST['quantidade']);
    
    echo '<h2>Insira os números inteiros:</h2>';
    echo '<form method="POST" action="">'; 
    
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "<label for='numero$i'>Número $i:</label>";
        echo "<input type='text' id='numero$i' name='numeros[]' required><br><br>";
    }
    
    echo '<input type="hidden" name="quantidade" value="' . $quantidade . '">';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numeros'])) {
    function separar($array) {
        $pares = array();
        $impares = array();
        
        foreach ($array as $numero) {
            $tipo = $numero % 2 == 0 ? 'pares' : 'impares';
            ${$tipo}[] = $numero;
        }
        
        return array('pares' => $pares, 'impares' => $impares);
    }

    $numeros = $_POST['numeros'];
    
 
    $numeros = array_map('intval', array_map('trim', $numeros));

    
    $separados = separar($numeros);

    echo "<h2>Números Inseridos:</h2>";
    echo "<pre>" . print_r($numeros, true) . "</pre>";
    
   
    echo "<h2>Números Pares:</h2>";
    echo "<pre>" . print_r($separados['pares'], true) . "</pre>";
    
    
    echo "<h2>Números Ímpares:</h2>";
    echo "<pre>" . print_r($separados['impares'], true) . "</pre>";
}
?>

</body>
</html>
