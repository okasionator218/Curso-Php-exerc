<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 4 - Exerc.6</title>
</head>
<body>
 

    <form action="" method="POST">
        <label for="forma">Escolha a forma geométrica:</label><br>
        <select name="forma" id="forma" required>
            <option value="">Selecione</option>
            <option value="quadrado" <?= isset($_POST['forma']) && $_POST['forma'] == 'quadrado' ? 'selected' : '' ?>>Quadrado</option>
            <option value="retangulo" <?= isset($_POST['forma']) && $_POST['forma'] == 'retangulo' ? 'selected' : '' ?>>Retângulo</option>
            <option value="triangulo" <?= isset($_POST['forma']) && $_POST['forma'] == 'triangulo' ? 'selected' : '' ?>>Triângulo Equilátero</option>
        </select><br><br>

        <?php
       
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['forma'])) {
            $forma = $_POST['forma'];

          
            if ($forma == 'quadrado') {
                echo '<label for="lado">Lado do Quadrado:</label><br>';
                echo '<input type="number" id="lado" name="lado" min="1" required><br><br>';
            }
           
            elseif ($forma == 'retangulo') {
                echo '<label for="largura">Largura do Retângulo:</label><br>';
                echo '<input type="number" id="largura" name="largura" min="1" required><br><br>';
                echo '<label for="altura">Altura do Retângulo:</label><br>';
                echo '<input type="number" id="altura" name="altura" min="1" required><br><br>';
            }
  
            elseif ($forma == 'triangulo') {
                echo '<label for="alturaTriangulo">Altura do Triângulo:</label><br>';
                echo '<input type="number" id="alturaTriangulo" name="alturaTriangulo" min="1" required><br><br>';
            }
        }
        ?>

        <input type="submit" value="Desenhar Forma">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['forma'])) {
        $forma = $_POST['forma'];

      
        switch ($forma) {
            case 'quadrado':
                $lado = intval($_POST['lado']);
                if ($lado > 0) {
                    dQuadrado($lado);
                } else {
                    echo "<p>Por favor, insira um valor válido para o lado do quadrado.</p>";
                }
                break;
            
            case 'retangulo':
                $largura = intval($_POST['largura']);
                $altura = intval($_POST['altura']);
                if ($largura > 0 && $altura > 0) {
                    dRetangulo($largura, $altura);
                } else {
                    echo "<p>Por favor, insira valores válidos para a largura e altura do retângulo.</p>";
                }
                break;
            
            case 'triangulo':
                $alturaTriangulo = intval($_POST['alturaTriangulo']);
                if ($alturaTriangulo > 0) {
                    dTriangulo($alturaTriangulo);
                } else {
                    echo "<p>Por favor, insira um valor válido para a altura do triângulo.</p>";
                }
                break;

            default:
                echo "<p>Por favor, selecione uma forma geométrica.</p>";
                break;
        }
    }

  
    function dQuadrado($lado) {
        echo "<h3>Quadrado:</h3>";
        for ($i = 0; $i < $lado; $i++) {
            echo str_repeat("* ", $lado) . "<br>";
        }
    }

  
    function dRetangulo($largura, $altura) {
        echo "<h3>Retângulo:</h3>";
        for ($i = 0; $i < $altura; $i++) {
            echo str_repeat("* ", $largura) . "<br>";
        }
    }


    function dTriangulo($altura) {
        echo "<h3>Triângulo Equilátero:</h3>";
        for ($i = 1; $i <= $altura; $i++) {
            echo str_repeat("&nbsp;", $altura - $i);
            echo str_repeat("* ", $i) . "<br>";
        }
    }
    ?>

</body>
</html>
