<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>

<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>

        </br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores dos campos do formulário
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Realiza a soma
        $soma = $num1 + $num2;

        // Realiza a multiplicação pelo primeiro número
        $resultado = $soma * $num1;

        // Exibe o resultado
        echo "<p>Resultado da soma e multiplicação: $resultado</p>";
    }
    ?>
</body>

</html>