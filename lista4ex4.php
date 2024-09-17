<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Exerc. 4</title>
</head>
<body>

    <form action="" method="POST">
        <label for="n">N:</label><br>
        <input type="number" id="n" name="n" required><br><br>

        <label for="fila">Id das pessoas na fila:</label><br>
        <input type="text" id="fila" name="fila" required><br><br>

        <label for="m">M:</label><br>
        <input type="number" id="m" name="m" required><br><br>

        <label for="saidas">Id das pessoas que saíram da fila :</label><br>
        <input type="text" id="saidas" name="saidas" required><br><br>

        <input type="submit" value="Processar Fila">


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $N = intval($_POST['n']);
    
    
    $fila = explode(' ', trim($_POST['fila']));
    
    
    $M = intval($_POST['m']);
    
  
    $saidas = explode(' ', trim($_POST['saidas']));
    
    $saidasaux = array_flip($saidas);
 
    $remanes = [];
    
    foreach ($fila as $id) {
        if (!isset($saidasaux[$id])) {
            $remanes[] = $id;
        }
    }
    
    echo "<h2>Pessoas que permaneceram na fila:</h2>";
    echo "<p>" . implode(' ', $remanes) . "</p>";
}
?>

</body>
</html>