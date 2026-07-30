<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Aula 14</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 650px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h1 { text-align: center; color: #333; }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 { margin-top: 0; color: #444; font-size: 18px; border-bottom: 2px solid #eee; padding-bottom: 8px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover { background-color: #45a049; }
        .resultado {
            margin-top: 15px;
            padding: 10px;
            background-color: #e7f3fe;
            border-left: 5px solid #2196F3;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Exercício Prático — Aula 14</h1>

    <!-- EXERCÍCIO 1 -->
    <div class="card">
        <h2>1. if...else (Verificar Maioridade)</h2>
        <form method="POST">
            <label for="idade">Digite a idade:</label>
            <input type="number" id="idade" name="idade" required value="<?php echo isset($_POST['idade']) ? $_POST['idade'] : ''; ?>">
            <button type="submit" name="btn1">Verificar Idade</button>
        </form>
        <?php
        if (isset($_POST['btn1'])) {
            $idade = $_POST['idade'];
            echo "<div class='resultado'>";
            if ($idade >= 18) {
                echo "Resultado: <strong>Maior de idade</strong>";
            } else {
                echo "Resultado: <strong>Menor de idade</strong>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <!-- EXERCÍCIO 2 -->
    <div class="card">
        <h2>2. if...elseif...else (Situação do Aluno)</h2>
        <form method="POST">
            <label for="nota">Digite a nota (0 a 10):</label>
            <input type="number" step="0.1" id="nota" name="nota" min="0" max="10" required value="<?php echo isset($_POST['nota']) ? $_POST['nota'] : ''; ?>">
            <button type="submit" name="btn2">Calcular Situação</button>
        </form>
        <?php
        if (isset($_POST['btn2'])) {
            $nota = $_POST['nota'];
            echo "<div class='resultado'>";
            if ($nota >= 7) {
                echo "Resultado: <strong>Aprovado</strong> (≥ 7)";
            } elseif ($nota >= 5) {
                echo "Resultado: <strong>Recuperação</strong> (5 a 6,9)";
            } else {
                echo "Resultado: <strong>Reprovado</strong> (< 5)";
            }
            echo "</div>";
        }
        ?>
    </div>

    <!-- EXERCÍCIO 3 -->
    <div class="card">
        <h2>3. switch (Menu de Opções)</h2>
        <form method="POST">
            <label for="opcao">Digite o número da opção (1, 2, 3, 4 ou outro):</label>
            <input type="number" id="opcao" name="opcao" required value="<?php echo isset($_POST['opcao']) ? $_POST['opcao'] : ''; ?>">
            <button type="submit" name="btn3">Executar Opção</button>
        </form>
        <?php
        if (isset($_POST['btn3'])) {
            $opcao = $_POST['opcao'];
            echo "<div class='resultado'>Resultado: ";
            switch ($opcao) {
                case 1:
                    echo "<strong>1 = Cadastrar</strong>";
                    break;
                case 2:
                    echo "<strong>2 = Consultar</strong>";
                    break;
                case 3:
                    echo "<strong>3 = Alterar</strong>";
                    break;
                case 4:
                    echo "<strong>4 = Excluir</strong>";
                    break;
                default:
                    echo "<strong>Inválido</strong>";
                    break;
            }
            echo "</div>";
        }
        ?>
    </div>

    <!-- EXERCÍCIO 4 -->
    <div class="card">
        <h2>4. Desafio Calculadora</h2>
        <form method="POST">
            <label for="num1">Número 1:</label>
            <input type="number" step="any" id="num1" name="num1" required value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '10'; ?>">
            
            <label for="num2">Número 2:</label>
            <input type="number" step="any" id="num2" name="num2" required value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '5'; ?>">
            
            <label for="operacao">Escolha a Operação:</label>
            <select id="operacao" name="operacao">
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (*)</option>
                <option value="divisao">Divisão (/)</option>
            </select>
            
            <button type="submit" name="btn4">Calcular</button>
        </form>
        <?php
        if (isset($_POST['btn4'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];

            echo "<div class='resultado'>";
            switch ($operacao) {
                case "soma":
                    $res = $num1 + $num2;
                    echo "Resultado da Soma: <strong>$res</strong>";
                    break;
                case "subtracao":
                    $res = $num1 - $num2;
                    echo "Resultado da Subtração: <strong>$res</strong>";
                    break;
                case "multiplicacao":
                    $res = $num1 * $num2;
                    echo "Resultado da Multiplicação: <strong>$res</strong>";
                    break;
                case "divisao":
                    if ($num2 != 0) {
                        $res = $num1 / $num2;
                        echo "Resultado da Divisão: <strong>$res</strong>";
                    } else {
                        echo "<span style='color:red;'>Erro: Divisão por zero não é permitida.</span>";
                    }
                    break;
                default:
                    echo "Operação inválida.";
                    break;
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>