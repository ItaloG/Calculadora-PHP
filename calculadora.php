<?php

    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : NULL;
    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : NULL;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : NULL;

    switch ($operacao){
        case '+' :
            $resultado = $numero1 + $numero2;
        break;
        case '-' :
            $resultado = $numero1 - $numero2;
        break;
        case '/' :
            if($numero2 == 0){
                $resultado = "O dividendo não pode ser zero";
            }else{
                $resultado = $numero1 / $numero2;
            }
        break;
        case '*' :
            $resultado = $numero1 * $numero2;
        break;
        case NULL :
            $resultado = "Digita e escolha uma opração";
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css"/>
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="calculadora.php">
    <div class="input-group">
        <label for="numero1">RESULTADO</label>
        <input type="text" id="resultado" readonly value="<?=$resultado?>"/>
    </div>
    <div class="input-group">
        <label for="numero1">Primero Número:</label>
        <input type="number"  name="numero1" id="numero1" placeholder="Informar o Primeiro Número" />
    </div>
    <div class="input-group">
        <label for="numero2">Segundo  Número:</label>
        <input type="number" name="numero2" id="numero2" placeholder="Informar o Segundo Número" />
    </div>
        <label>Informe a Operação</label>
        <div>
            <input type="radio" name="operacao" id="Soma" value="+" />
            <label for="Soma" id="radioOperacoes">Soma</label>
        </div>
        <div>
            <input type="radio" name="operacao" id="Divisao" value="/" />
            <label for="Divisao" id="radioOperacoes">Divisão</label>
        </div>
        <div>
            <input type="radio" name="operacao" id="Subtracao" value="-" />
            <label for="Subtracao" id="radioOperacoes">Subtração</label>
        </div>
        <div>
            <input type="radio" name="operacao" id="Multiplicacao" value="*"/>
            <label for="Multiplicacao" id="radioOperacoes">Multiplicação</label>
        </div>

        <button>Calcular</button>
        <button type="reset">Limpar</button>
        
    </form>
</body>
</html>