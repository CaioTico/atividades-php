<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média PHP</title>
</head>
<body>
    <h2>Cálculo de Média PHP</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="val1">Valor 1:</label>
        <input type="number" name="val1" required>
        
        <label for="val2">Valor 2:</label>
        <input type="number" name="val2" required>

        <label for="val3">Valor 3:</label>
        <input type="number" name="val3" required>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores dos campos do formulário
        $val1 = $_POST["val1"];
        $val2 = $_POST["val2"];
        $val3 = $_POST["val3"];

        // Calcula a média
        $media = ($val1 + $val2 + $val3) / 3;

        // Exibe o resultado
        echo "<p>Média: $media</p>";
    }
    ?>
</body>
</html>