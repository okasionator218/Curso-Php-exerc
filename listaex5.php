<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Exerc. 5</title>
</head>
<body>

    <form action="" method="POST">
        <label for="altura">altura da pirâmide:</label><br><br>
        <input type="number" id="altura" name="altura" min="1" required><br><br>
        <input type="submit" value="Desenhar Pirâmide">
    </form>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $altura = intval($_POST['altura']);

     
        if ($altura > 0) {
            echo "<h3>Pirâmide de Asteriscos com altura de $altura:</h3>";
            desenharPiramide($altura);
        } else {

            echo "<p>Por favor, insira um número inteiro positivo maior que zero.</p>";
        }
    }

    function desenharPiramide($n) {
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat("&nbsp;", $n - $i);
            echo str_repeat("*", 2 * $i - 1);
            echo "<br>";
        }
    }
    ?>

</body>
</html>
