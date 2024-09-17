<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Ex. 3</title>
</head>
<body>

<?php

function quadrantes($x, $y) {
    return ($x == 0 || $y == 0) ? 'Eixos' :
           (($x > 0 && $y > 0) ? 'Quadrante I' :
           (($x < 0 && $y > 0) ? 'Quadrante II' :
           (($x < 0 && $y < 0) ? 'Quadrante III' :
           'Quadrante IV')));
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['x']) && isset($_POST['y'])) {
    $x = intval($_POST['x']);
    $y = intval($_POST['y']);
    
    
    $quadrante = quadrantes($x, $y);

   
    echo "<h2>Coordenadas:</h2>";
    echo "<p>X: $x</p>";
    echo "<p>Y: $y</p>";
    echo "<h2>Resultado:</h2>";
    echo "<p>$quadrante</p>";
}
?>

<h2>Digite as coordenadas:</h2>
<form method="POST" action="">
    <label for="x">Número X:</label>
    <input type="number" id="x" name="x" required><br><br>
    <label for="y">Número Y:</label>
    <input type="number" id="y" name="y" required><br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
