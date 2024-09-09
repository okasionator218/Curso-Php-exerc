<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "post">

        <label for= "input1">
        Digite o primeiro valor do array:
        <input type="text" name = "numeros[]" id = "input1" >

        <label for= "input2">
        Digite o segundo valor do array:
        <input type="text" name = "numeros[]"  id = "input2" >
        
        <label for= "input3">
        Digite o terceiro valor do array:
        <input type="text" name = "numeros[]"  id = "input3" >
        
        <label for= "input4">
        Digite o quarto valor do array:
        <input type="text" name = "numeros[]"  id = "input3" >
        
        <label for= "input5">
        Digite o quinto valor do array:
        <input type="text" name = "numeros[]"  id = "input5" >
        
        <input type="submit" value = "enviar">
    
    </label>

    </form>
    <?php

    function semduplicado($numeros){
        $novoarray = array();
        $aux = 0;

        foreach ($numero as $valor) {
            if($valor != $aux){
                $novoarray.array_push($valor);
                $aux = $valor;
            }
        }
        return $novoarray;
    }
    
    $numeros = isset($_POST['numeros']) ? $_POST['numeros'] : [];
    echo "<h2>Array:</h2>";
 
    foreach ($numeros as $numero) {
        
        $numero = htmlspecialchars($numero);
        echo "<li>$numero</li>";
    }

    
    $resultado = semduplicado($numero);
    ?>
</body>
</html>